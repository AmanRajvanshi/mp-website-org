<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use App\Models\Vendor;

class AuthController extends Controller
{
    public function mobile_verification(request $request)
	{
		$validator = Validator::make($request->all(), [ 
            'contact' => 'required',
            'verification_type' =>'required' 
        ]);
		
		if ($validator->fails())
    	{
        	return response(['errors'=>$validator->errors()->all()], 422);
    	}
		
		$contact=$request->contact;
		
		// $otp=rand(100000,999999);
		$otp=Hash::make("1234");
		
		if($request->verification_type == 'user')
        {
			
			$data = User::where('contact', $contact)->get();
			if ($data->count()==0)
			{
				$user = new User;
				$user->contact = $request->contact;
				$user->password =$otp;
				$user->save();
			}
			else
				$user = User::where('contact',$contact)->update(array('password' =>$otp));	
        }
        else{
			$data = Vendor::where('contact', $contact)->get();

			if ($data->count()==0)
			{
				$user = new Vendor;
				$user->contact = $request->contact;
				$user->password =$otp;
				$user->save();
			}
			else
				$user = Vendor::where('contact',$contact)->update(array('password' =>$otp));
				
        }
		
		
	
		$msg = "Use $otp as your OTP for shvetdhardhara account verification. This is confidential. Please, do not share this with anyone. Webixun infoways PVT LTD ";
		// $obj=new  ComponentConfig();
		// $image_data= $obj->send_sms($contact,$msg);
		
		$response['status']=true;
		echo json_encode($response);
	}
	

	public function otp_verification(request $request)
	{
		$validator = Validator::make($request->all(), [ 
            'contact' => 'required', 
            'otp' => 'required', 
			'verification_type' =>'required' 
        ]);
		
		if ($validator->fails())
    	{
        	return response(['errors'=>$validator->errors()->all()], 422);
    	}
		
		if($request->verification_type == 'user')
		{
			$user = User::where('contact', $request->contact)->first();
			if ($user) 
			{
				if (Hash::check($request->otp,$user->password)) 
				{   
					$token = $user->createToken('api')->accessToken;
					if($user->name == "")
					{
						$response = ['msg' => 'ok','token' => $token,'user_type' => 'register','usr' => Crypt::encryptString($user->id)];
					}
					else
					{
						$response = ['msg' => 'ok','token' => $token,'user_type' => 'login','usr' => Crypt::encryptString($user->id)];
					}
					
					return response($response, 200);
				} 
				else
				{
					$response = ["msg" => "Password mismatch"];
					return response($response, 422);
				}
			}
			else
			{
				$response = ["msg" =>'User does not exist'];
				return response($response, 422);
			}
		}
		else{

			$user = Vendor::where('contact', $request->contact)->first();
    	if ($user) 
		{
        	if (Vendor::check($request->otp,$user->password)) 
			{   
				$token = $user->createToken('User Auth')->accessToken;
				if($user->name == "")
				{
					$response = ['msg' => 'ok','token' => $token,'user_type' => 'register','usr' => Crypt::encryptString($user->id)];
				}
				else
				{
					$response = ['msg' => 'ok','token' => $token,'user_type' => 'login','usr' => Crypt::encryptString($user->id)];
				}
            	
            	return response($response, 200);
        	} 
			else
			{
            	$response = ["msg" => "Password mismatch"];
            	return response($response, 422);
        	}
    	}
		else
		{
        	$response = ["msg" =>'User does not exist'];
        	return response($response, 422);
    	}
		}
		
		
		
		echo json_encode($response);
	}
	
}

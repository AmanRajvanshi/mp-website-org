const renderAlert = (state = "error") => {
  const messages = {
    error: "Please provide a valid email",
    success:
      "<b>Yay! Thank you!</b> We’ve sent a confirmation link to your inbox.",
  };

  return `
	<div class="alert" data-state="${state}">
	  <p class="alert__content">${messages[state]}</p>
	</div>
	`;
};

const init = () => {
  const emailElement = document.querySelector("#email");
  const formElement = document.querySelector("#form");
  const alertElement = document.querySelector('[role="alert"]');
  const validationRegex = new RegExp(
    emailElement.getAttribute("pattern") || "[^@]+@[^.]+..+",
    "i"
  );

  emailElement.removeAttribute("required");
  emailElement.removeAttribute("pattern");
  formElement.setAttribute("novalidate", "");

  formElement.addEventListener("submit", (evt) => {
    evt.preventDefault();

    if (!validationRegex.test(emailElement.value.trim())) {
      alertElement.innerHTML = renderAlert("error");
      emailElement.setAttribute("aria-invalid", "true");
      return;
    }

    // POST YOUR FORM WITH AJAX OR WHATNOT THEN RUN THIS
    formElement.parentElement.removeChild(formElement);
    alertElement.innerHTML = renderAlert("success");
  });
};

init();

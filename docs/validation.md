  }

  function validatePhone(input) {
    const field = input.querySelector("[required]");
    let regex = /^(\+7|8)?[\-\s]?\(?\d{3}\)?[\-\s]?\d{3}[\-\s]?\d{2}[\-\s]?\d{2}$/;
    if (regex.test(field.value)) {
      return setInputValid(input);
    } else {
      return setInputInvalid(input);
    }
  }

  function validateEmail(input) {
    const field = input.querySelector("[required]");
    let regex =
      // eslint-disable-next-line no-control-regex
      /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
    if (!regex.test(field.value)) {
      return setInputInvalid(input);
    } else {
      return setInputValid(input);
    }
  }

export function setInputValid(input) {
  input.classList.remove("is-invalid");
  const field = input.querySelector("[required]");

  let isValid;
  if (field.validity != null) {
    isValid = field.validity.valid;
  } else if (field.checked) {
    isValid = field.checked;
  }

  if (field.validationMessage) {
    changeErrorText(input);
  }
  return isValid;
}


export function setInputInvalid(input) {
  input = input.classList.contains('iti') ? input.parentElement : input;

  input.classList.add("is-invalid");
  const field = input.querySelector('[required]');

  let isValid;

  if (field.validity != null) {
    isValid = field.validity.valid;
  } else if (field.checked) {
    isValid = field.checked;
  }

  if (field.validationMessage) {
    changeErrorText(input);
  }

  return isValid;
}



export function changeErrorText(input) {
  // return
  const field = input.querySelector("[required]");
  const error = input.querySelector(".input__message");
  if (error) {
    error.innerText = field.validationMessage;
  }
}

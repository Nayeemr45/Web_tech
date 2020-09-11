


const Username = document.getElementById('user_name');
const password = document.getElementById('password');
const email = document.getElementById('email');
const ShopName = document.getElementById('shop_name');
const Address = document.getElementById('address');
// Form
const form = document.getElementById('myForm');


const green = '#4CAF50';
const red = '#F44336';

 form.addEventListener('submit', function(event) {
  // Prevent default behaviour
  event.preventDefault();

  
  if (
    validateUsername() &&
    validateShop() &&
    validatePassword() &&
    validateAddress() &&
    validateEmail()
  ) {

    form.submit();
    /* const name = Username.value;
    const container = document.querySelector('div.container');
    const loader = document.createElement('div');
    loader.className = 'progress';
    const loadingBar = document.createElement('div');
    loadingBar.className = 'indeterminate';
    loader.appendChild(loadingBar);
    container.appendChild(loader); */
    /* setTimeout(function() {
      const loaderDiv = document.querySelector('div.progress');
      const panel = document.createElement('div');
      panel.className = 'card-panel green';
      const text = document.createElement('span');
      text.className = 'white-text';
      text.appendChild(
        document.createTextNode(
          `Sign up successful, welcom to SocialApe ${name}`
        )
      );
      panel.appendChild(text);
      container.replaceChild(panel, loaderDiv);
    }, 1000); */
  }
});




function validateUsername() {
  // check if is empty
  if (checkIfEmpty(firstName)) return;
  // is if it has only letters
  if (!checkIfOnlyLettersnumbers(firstName)) return;
  return true;
}
function validateshop() {
  // check if is empty
  if (checkIfEmpty(lastName)) return;
  // is if it has only letters
  if (!checkIfOnlyLetters(lastName)) return;
  return true;
}
function validatePassword() {
  // Empty check
  if (checkIfEmpty(password)) return;
  // Must of in certain length
  if (!meetLength(password, 4, 100)) return;
  // check password against our character set
  // 1- a
  // 2- a 1
  // 3- A a 1
  // 4- A a 1 @
  //   if (!containsCharacters(password, 4)) return;
  return true;
}

function validateEmail() {
  if (checkIfEmpty(email)) return;
  if (!containsCharacters(email, 5)) return;
  return true;
}
// Utility functions
function checkIfEmpty(field) {
  if (isEmpty(field.value.trim())) {
    // set field invalid
    setInvalid(field, `${field.name} must not be empty`);
    return true;
  } else {
    // set field valid
    setValid(field);
    return false;
  }
}
function isEmpty(value) {
  if (value === '') return true;
  return false;
}
function setInvalid(field, message) {
  field.className = 'invalid';
  field.nextElementSibling.innerHTML = message;
  field.nextElementSibling.style.color = red;
}
function setValid(field) {
  field.className = 'valid';
  field.nextElementSibling.innerHTML = '';
  //field.nextElementSibling.style.color = green;
}
function checkIfOnlyLettersnumbers(field) {
  if (/^[0-9a-zA-Z ]+$/.test(field.value)) {
    setValid(field);
    return true;
  } else {
    setInvalid(field, `${field.name} must contain only letters and numbers`);
    return false;
  }
}
function checkIfOnlyLetters(field) {
  if (/^[a-zA-Z ]+$/.test(field.value)) {
    setValid(field);
    return true;
  } else {
    setInvalid(field, `${field.name} must contain only letters and numbers`);
    return false;
  }
}
function meetLength(field, minLength, maxLength) {
  if (field.value.length >= minLength && field.value.length < maxLength) {
    setValid(field);
    return true;
  } else if (field.value.length < minLength) {
    setInvalid(
      field,
      `${field.name} must be at least ${minLength} characters long`
    );
    return false;
  } else {
    setInvalid(
      field,
      `${field.name} must be shorter than ${maxLength} characters`
    );
    return false;
  }
}
function containsCharacters(field, code) {
  let regEx;
  switch (code) {
    case 1:
      // letters
      regEx = /(?=.*[a-zA-Z])/;
      return matchWithRegEx(regEx, field, 'Must contain at least one letter');
    case 2:
      // letter and numbers
      regEx = /(?=.*\d)(?=.*[a-zA-Z])/;
      return matchWithRegEx(
        regEx,
        field,
        'Must contain at least one letter and one number'
      );
    case 3:
      // uppercase, lowercase and number
      regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
      return matchWithRegEx(
        regEx,
        field,
        'Must contain at least one uppercase, one lowercase letter and one number'
      );
    case 4:
      // uppercase, lowercase, number and special char
      regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/;
      return matchWithRegEx(
        regEx,
        field,
        'Must contain at least one uppercase, one lowercase letter, one number and one special character'
      );
    case 5:
      // Email pattern
      regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return matchWithRegEx(regEx, field, 'Must be a valid email address');
    default:
      return false;
  }
}
function matchWithRegEx(regEx, field, message) {
  if (field.value.match(regEx)) {
    setValid(field);
    return true;
  } else {
    setInvalid(field, message);
    return false;
  }
}





document.getElementById('log').addEventListener("click", function()
{ document.querySelector('.login_css').style.display = "flex";
  document.querySelector('.register').style.display = "none";

  document.getElementById('log').style.backgroundColor ="#007bff";
 document.getElementById('log').style.borderColor ="#007bff";
 document.getElementById('reg').style.borderColor ="#6c757d";
 document.getElementById('reg').style.backgroundColor ="#6c757d";

 function myFunction(x) {
  if (x.matches) { // If media query matches
    document.querySelector('.login_css').style.display = "inline";
  } else {
    document.querySelector('.login_css').style.display = "flex";
  }
 }

var x = window.matchMedia("(max-width: 992px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes


});
 document.getElementById('reg').addEventListener("click", function()
 { document.querySelector('.register').style.display = "inline-block";
 document.getElementById('reg').style.backgroundColor ="#007bff";
 document.getElementById('reg').style.borderColor ="#007bff";
 document.getElementById('log').style.borderColor ="#6c757d";
 document.getElementById('log').style.backgroundColor ="#6c757d";
  document.querySelector('.login_css').style.display = "none";
});
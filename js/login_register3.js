// SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['user_name1'];
var password = document.forms['vform']['password1'];
var email = document.forms['vform']['email1'];
var shop_name = document.forms['vform']['shop_name'];
var address = document.forms['vform']['address'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate username
   if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
   // 
   return false;
   }

    else if (username.value.length < 5) {
      username.style.border = "1px solid red";
      document.getElementById('username_div').style.color = "red";
      name_error.textContent = "Username must be at least 5 characters";
      username.focus();
      return false;
    }

    else if (!username.value.match(/^[0-9a-zA-Z ]+$/)) {
      username.style.border = "1px solid red";
      document.getElementById('username_div').style.color = "red";
      name_error.textContent = "Username must contain only letters and numbers";
      username.focus();
      return false;
    }
  
 



    // validate username
    

      // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }

  else if (password.value.length < 8) {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_error.textContent = "password must be at least 8 characters";
    password.focus();
    return false;
  }

   // validate email
   if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
    if (shop_name.value == "") {
      shop_name.style.border = "1px solid red";
      document.getElementById('shop_name_div').style.color = "red";
      shop_name_error.textContent = "shop_name is required";
      shop_name.focus();
      return false;
    }
  



    else if (shop_name.value.length < 5) {
      shop_name.style.border = "1px solid red";
      document.getElementById('shop_name_div').style.color = "red";
      shop_name_error.textContent = "Shop name must be at least 5 characters";
      shop_name.focus();
      return false;
    }


    else if (!shop_name.value.match(/^[0-9a-zA-Z \,\.\-]+$/)) {
      shop_name.style.border = "1px solid red";
      document.getElementById('shop_name_div').style.color = "red";
      shop_name_error.textContent = "Shop name only contain letters,numbers,dots,dash,hypen";
      shop_name.focus();
      return false;
    }
  if (address.value == "") {
    address.style.border = "1px solid red";
    document.getElementById('address_div').style.color = "red";
    address_error.textContent = "address is required";
    address.focus();
    return false;
  }
 else if (address.value.length < 3) {
    address.style.border = "1px solid red";
    document.getElementById('address_div').style.color = "red";
    address_error.textContent = "address must be at least 3 characters";
    address.focus();
    return false;
  }

  else if (!address.value.match(/^[0-9a-zA-Z \,\.\-]+$/)) {
    address.style.border = "1px solid red";
    document.getElementById('address_div').style.color = "red";
    address_error.textContent = "address only contain letters,numbers,dots,dash,hypen";
    address.focus();
    return false;
  }
 


}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('password_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
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
//x.addListener(myFunction) // Attach listener function on state changes


});

 document.getElementById('reg').addEventListener("click", function()
 { document.querySelector('.register').style.display = "inline-block";
 document.getElementById('reg').style.backgroundColor ="#007bff";
 document.getElementById('reg').style.borderColor ="#007bff";
 document.getElementById('log').style.borderColor ="#6c757d";
 document.getElementById('log').style.backgroundColor ="#6c757d";
document.querySelector('.login_css').style.display = "none";
});


 document.getElementById('submit').addEventListener("click", function()
 { 
   document.querySelector('.register').style.display = "none";
 document.getElementById('reg').style.backgroundColor ="#007bff";
 document.getElementById('reg').style.borderColor ="#007bff";
 document.getElementById('log').style.borderColor ="#6c757d";
 document.getElementById('log').style.backgroundColor ="#6c757d";
document.querySelector('.login_css').style.display = "none";
});
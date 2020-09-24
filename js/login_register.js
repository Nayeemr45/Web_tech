// SELECTING ALL TEXT ELEMENTS
var user_id = document.forms['vform']['user_id1'];
var username = document.forms['vform']['user_name1'];
var password = document.forms['vform']['password1'];
var email = document.forms['vform']['email1'];
var date_of_birth = document.forms['vform']['date_of_birth1'];
var gender = document.forms['vform']['gender1'];
var address = document.forms['vform']['address1'];
var type = document.forms['vform']['type1'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var id_error = document.getElementById('id_error');
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var date_error = document.getElementById('date_error');
var gender_error = document.getElementById('gender_error');
var address_error = document.getElementById('address_error');
var type_error = document.getElementById('type_error');
// SETTING ALL EVENT LISTENERS
user_id.addEventListener('blur', idVerify, true);
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
date_of_birth.addEventListener('blur', date_of_birth_Verify, true);
gender.addEventListener('blur', genderVerify, true); 
address.addEventListener('blur', addressVerify, true);
 type.addEventListener('blur', typeVerify, true);
// validation function
function Validate() {

  // validate user_id
   if (user_id.value == "") {
    user_id.style.border = "1px solid red";
    document.getElementById('user_id_div').style.color = "red";
    id_error.textContent = "user_id is required";
    user_id.focus(); 
   return false;
   }

    else if (user_id.value.length < 8) {
      user_id.style.border = "1px solid red";
      document.getElementById('user_id_div').style.color = "red";
      id_error.textContent = "user_id must be at least 8 characters";
      user_id.focus();
      return false;
    }

    else if (!user_id.value.match(/^[0-9a-zA-Z ]+$/)) {
      user_id.style.border = "1px solid red";
      document.getElementById('user_id_div').style.color = "red";
      id_error.textContent = "user_id must contain only letters and numbers";
      user_id.focus();
      return false;
    }
  
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
     // validate date_of_birth

     if (date_of_birth.value == "") {
      date_of_birth.style.border = "1px solid red";
      document.getElementById('date_of_birth_div').style.color = "red";
      date_error.textContent = "Date Of Birth is required";
      date_of_birth.focus();
      return false;
    }

    
     // validate gender

     if (gender.value == "") {
      gender.style.border = "1px solid red";
      document.getElementById('gender_div').style.color = "red";
      gender_error.textContent = "gender is required";
      gender.focus();
      return false;
    }


 // validate address

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
    // validate type

    if (type.value == "") {
      type.style.border = "1px solid red";
      document.getElementById('type_div').style.color = "red";
      type_error.textContent = "type is required";
      type.focus();
      return false;
    }


}
// event handler functions
function idVerify() {
  if (user_id.value != "") {
   user_id.style.border = "1px solid #5e6e66";
   document.getElementById('user_id_div').style.color = "#5e6e66";
   id_error.innerHTML = "";
   return true;
  }
}

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
 function date_of_birth_Verify() {
  if (date_of_birth.value != "") {
  	date_of_birth.style.border = "1px solid #5e6e66";
  	document.getElementById('date_of_birth_div').style.color = "#5e6e66";
  	date_error.innerHTML = "";
  	return true;
  }

}
function genderVerify() {
  if (gender.value != "") {
  	gender.style.border = "1px solid #5e6e66";
  	document.getElementById('gender_div').style.color = "#5e6e66";
  	gender_error.innerHTML = "";
  	return true;
  }

}
function addressVerify() {
  if (address.value != "") {
  	address.style.border = "1px solid #5e6e66";
  	document.getElementById('address_div').style.color = "#5e6e66";
  	address_error.innerHTML = "";
  	return true;
  }

}
function typeVerify() {
  if (type.value != "") {
  	type.style.border = "1px solid #5e6e66";
  	document.getElementById('type_div').style.color = "#5e6e66";
  	type_error.innerHTML = "";
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
 
 /* for responsive design */
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
 { document.querySelector('.register').style.display = "flex";
 document.getElementById('reg').style.backgroundColor ="#007bff";
 document.getElementById('reg').style.borderColor ="#007bff";
 document.getElementById('log').style.borderColor ="#6c757d";
 document.getElementById('log').style.backgroundColor ="#6c757d";
  document.querySelector('.login_css').style.display = "none";
});
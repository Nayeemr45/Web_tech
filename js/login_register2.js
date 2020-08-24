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
 { document.querySelector('.register').style.display = "flex";
 document.getElementById('reg').style.backgroundColor ="#007bff";
 document.getElementById('reg').style.borderColor ="#007bff";
 document.getElementById('log').style.borderColor ="#6c757d";
 document.getElementById('log').style.backgroundColor ="#6c757d";
  document.querySelector('.login_css').style.display = "none";
});
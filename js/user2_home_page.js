document.getElementById('home').addEventListener("click", function()
{ document.querySelector('.part_1').style.display = "flex";
  document.querySelector('.part_2').style.display = "none";
  document.querySelector('.part_3').style.display = "none";
  document.querySelector('.part_4').style.display = "none";

});

document.getElementById('print_file').addEventListener("click", function()
{ 
  document.querySelector('.part_1').style.display = "none";
  document.querySelector('.part_2').style.display = "flex";
  document.querySelector('.part_3').style.display = "none";
  document.querySelector('.part_4').style.display = "none";

});
document.getElementById('print_info').addEventListener("click", function()
{ 
  document.querySelector('.part_1').style.display = "none";
  document.querySelector('.part_2').style.display = "none";
  document.querySelector('.part_3').style.display = "flex";
  document.querySelector('.part_4').style.display = "none";

});
document.getElementById('profile').addEventListener("click", function()
{ 
  document.querySelector('.part_1').style.display = "none";
  document.querySelector('.part_2').style.display = "none";
  document.querySelector('.part_3').style.display = "none";
  document.querySelector('.part_4').style.display = "flex";
  document.querySelector('.edit_info').style.display = "none";
});
document.getElementById('show').addEventListener("click", function()
{ 
  document.querySelector('.show_info').style.display = "grid";
  document.querySelector('.show_info').style.gridRow="2 / span 2";
  document.querySelector('.edit_info').style.display = "none";

});
document.getElementById('edit').addEventListener("click", function()
{ 
  document.querySelector('.edit_info').style.display = "grid";
  document.querySelector('.edit_info').style.gridRow="2 / span 2";
  document.querySelector('.show_info').style.display = "none";

});




// Add active class to the current button (highlight it)
var header = document.getElementById("sidebar");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
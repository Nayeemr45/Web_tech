function validate() {
    var user_name = document.forms["myform"]["user_name"].value;
    var password = document.forms["myform"]["password"].value;
    var email = document.forms["myform"]["email"].value;
    var shop_name = document.forms["myform"]["shop_name"].value;
    var address = document.forms["myform"]["address"].value;
    
    if(user_name==""){
    alert("Please enter the name");
    return false;
    }
    if(password==""){
    alert("Please enter the name");
    return false;
    }
    if(email==""){
    alert("Please enter the email");
    return false;
    }else{
    var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    var x=re.test(email);
    if(x){
    }else{
    alert("Email id not in correct format");
    return false;
    } 
    } 
    if(shop_name==""){
    alert("Please enter the shop name");
    return false;
    }
    if(address==""){
    alert("Please enter the address");
    return false;
    }
   }
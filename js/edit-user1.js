function formSubmit(){
    $.ajax({
        type:'POST',
        url:'updateUser.php',
        data:$('#frmBox').serialize(),
        success:function(response){
            $('#success').html(response);
        }
    });
    //var form=document.getElementById('frmBox').requestFullscreen();
    //return false;
}
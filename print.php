
<!DOCTYPE html>
<html>
<head>
    <title>Print PDF using inline iFrame</title>
    <style>
    	* { font: 15px 'Segoe UI'; }
    </style>
</head>
<body>
        <?php echo $_GET['id']; ?>
    <iframe 
        src=''./uploads/<?php echo $_GET['id']; ?> / EE.pdf' id='myFrame' 
        	frameborder='0'
        		width='600' height='400'>
    </iframe>
    <p>
        <input type="button" id="bt" onclick="print()" value="Print PDF" />
    </p>

    <script>
	let print = () => {
    	let objFra = document.getElementById('myFrame');
        objFra.contentWindow.focus();
        objFra.contentWindow.print();
    }
    
    // Using regular js features.
    
//     function print() {
//         var objFra = document.getElementById('myFrame');
//         objFra.contentWindow.focus();
//         objFra.contentWindow.print();
//     }
</script>
</body>


</html>
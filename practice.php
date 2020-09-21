<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	
    <link rel="stylesheet" href="CSS/qr.css">
</head>
<body>
<video id="preview" width="500px" height="500px"></video>

<p>After Scan Successfully Click on<span class="sub"> Submit</span></p>
<form action="controller/find_print_queue.php" method="post">
<input type="hidden" name="text" id="text">
<input type="submit" name="scan" class="submit">
</form>

<script>
let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });     
scanner.addListener('scan', function(content) {
            //alert('Content: ' + content);
            alert('Content: ' + 'Successful Login');
            window.open(content, "_blank");
        });      
Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
      scanner.addListener('scan',function(c){
        document.getElementById("text").value=c;
      });

</script>


<!--     <input type="hidden" value="nayeem45" id="a">
    <input type="hidden" value="EE.pdf" id="b">
    <button onclick="price(document.getElementById('a').value,document.getElementById('b').value)" >Print</button>
    <p id="demo"></p>


 <script src="index.js"></script>
 
  -->
 <!--  <script>

         function price(x , y){
       this.x=x;
       this.y=y;
       var i;
    const fs = require('fs')
    const pdfparse = require('pdf-parse')

    const pdffile = fs.readFileSync('uploads/'+x+'/'+ y)

        pdfparse(pdffile).then(function (data) {
            i=data.numpages;
            var p=i*2;
            document.getElementById("demo").innerHTML=i;
            console.log(p);     
})
         }

    </script> -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--      <script data-main="index" src="require.js"></script>
 --><!--     <script src="node_modules/ini/ini.js"></script> -->
</head>
<body>
    <input type="hidden" value="nayeem45" id="a">
    <input type="hidden" value="EE.pdf" id="b">
    <button onclick="price(document.getElementById('a').value,document.getElementById('b').value)" >Print</button>
    <p id="demo"></p>


 <script src="index.js"></script>
 
 
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
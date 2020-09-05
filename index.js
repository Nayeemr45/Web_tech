var x="nayeem45"
var y="EE.pdf"
   function price(x , y){
       this.x=x;
       this.y=y;
       var i="";
    const fs = require('fs')
    const pdfparse = require('pdf-parse')

    const pdffile = fs.readFileSync('uploads/'+x+'/'+ y)

        pdfparse(pdffile).then(function (data) {
            i=data.numpages;
            var p=i*2;
            console.log(p);     
})
   }
   price(x,y);

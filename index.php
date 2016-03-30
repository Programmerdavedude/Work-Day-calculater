<!DOCTYPE html>
<html>
 <head>
     <script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
     <script language="javascript" type="text/javascript" src="datetimepicker2.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css.css">
     
 </head>
 <body>
     <input id="demo1" type="text" size="25"><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
     <input id="demo2" type="text" size="25"><a href="javascript:NewCal2('demo2','ddmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
     <button onclick="submit()">Click me</button>

     <script>
      // var d = new Date();
      // var date = (d.getMonth() + 1) + "/" + (d.getDate()) + "/" + d.getFullYear();                
      // var ddate = (d.getMonth() + 1) + "/" + (d.getDate() + 12) + "/" + d.getFullYear();
     
      // window.onload = function() {
      //  document.getElementById("demo1").value = date;
      //  document.getElementById("demo2").value = ddate;
      // };
     
      function submit(){
       // Input fields have a value property
       var div1 = document.getElementById("demo1").value;
       console.log("Div 1: " + div1);
       var div2 = document.getElementById("demo2").value;
       console.log("Div 2: " + div2);
       // Pass that value to date, not the string "div1/2"
       var ftest = div1;
       console.log(ftest);
       var ltest = div2;
       console.log(ltest);
	      var xhttp = new XMLHttpRequest();
	      if(window.XMLHttpRequest) {
  		    xhttp = new XMLHttpRequest();
	      } else {
  			   xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	      }
       
        xhttp.open("GET","calc.php?w1="+ftest+"&w2="+ltest,true);
        xhttp.onreadystatechange = function() {
         if(xhttp.readyState==4)   
         {   
             console.log(xhttp.responseText); 
         }   
        };
       xhttp.send(null);
      }
     </script>
 </body>   
</html>
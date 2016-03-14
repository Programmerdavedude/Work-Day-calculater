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
     <div id=box></div>
     <script>
      function submit(){
       // Input fields have a value property
       var div1 = document.getElementById("demo1").value;
       var div2 = document.getElementById("demo2").value;
       // Pass that value to date, not the string "div1/2"
       var ftest = new Date(div1);
       var ltest = new Date(div2);
	      var xhttp = new XMLHttpRequest();
	      if(window.XMLHttpRequest){
  		    xhttp = new XMLHttpRequest();
	      }
	      else{
  			   xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	      }
       
       xhttp.open("GET","calc.php?w1="+ftest+"&w2="+ltest,true);
       xhttp.onreadystatechange = function() {
        if(xhttp.readyState==4)   
        {   
            alert(xhttp.responseText); 
        }   
       };
       xhttp.send(null);
      }
       

     </script>
 </body>   
</html>
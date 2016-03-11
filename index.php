<!DOCTYPE html>
<html>
 <head>
     <script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
     <script language="javascript" type="text/javascript" src="datetimepicker2.js"></script>
     <?php
      require 'calc.php';
     ?>
 </head>
 <body>
     <input id="demo1" type="text" size="25"><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
     <input id="demo2" type="text" size="25"><a href="javascript:NewCal2('demo2','ddmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
     <script>
      var div1 = document.getElementById("demo1").innerHTML;
      var div2 = document.getElementById("demo2").innerHTML;
      var ftest = new Date("div1");
      var ltest = new Date("div2");
     </script>
     <?php
      $holidays=array("2008-12-25","2008-12-26","2009-01-01");
     ?>
     <button onclick="window.location.href = "calc.php?w1=ftest" + "&w2=ltest";">Click me</button>
 </body>   
</html>
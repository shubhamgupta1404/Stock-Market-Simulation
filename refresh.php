<HTML>
<head><title>Hey</title>
    <script type="text/javascript">
      function AutoRefresh(){
        var xmlHttp;
        try{
          xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
        }
        catch (e){
          try{
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
          }
          catch (e){
            try{
              xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e){
              alert("No AJAX");
              return false;
            }
          }
        }

        xmlHttp.onreadystatechange=function(){
          if(xmlHttp.readyState==4){
            document.getElementById('AutoUpdte').innerHTML=xmlHttp.responseText;
            setTimeout('AutoRefresh()',3000); // JavaScript function calls AutoRefresh() every 3 seconds
          }
        }
        xmlHttp.open("GET","http://bitsacm.acm.org/sms/refresh.php",true);
        xmlHttp.send(null);
      }

      AutoRefresh();
    </script>
 </head>
 <body>
 <div id="AutoUpdte">
 <?php
 echo time();
 ?>
 </div>
 </body>
 </html>

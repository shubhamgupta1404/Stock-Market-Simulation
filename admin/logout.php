<?php
session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>SMS | ADMIN</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
    <body>
        
        <div id="content">
            <h1>SMS | ADMIN Logout</h1>
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="index.php?option=login" method="post">
                        <fieldset class="step">
                            <legend>Logout</legend>
                            <p>
                              You have successfully logged out!
                            </p>
			
			     <p class="submit">
                                <button id="registerButton" type="submit">Re-Login</button>
                             </p>
                            
                             <p>
                                ACM, BITS Pilani
                             </p>                            
                           
                        </fieldset>
                       
                    </form>
                </div>
                
        </div>
    </body>
</html>



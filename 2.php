<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Text Editor</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="editor.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <style type="text/css" media="all">
        @import "css/info.css";
        @import "css/main.css";
        @import "css/widgEditor.css";
      </style> 
	  <style> #txtedit{
              padding:5px;
              border:2px solid black;
              margin:50px 30px 20px 150px;
          }
        
          
		  body{

		     background-color:#303030;
		  }
		  .button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 10px 10px 10px 10px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
.
</style>
	  <script type="text/javascript" src="widgEditor.js"></script>

  </head>
  <body style="font-size:23px;">
<form action="" method="post">
    <button name="1" class="click">TEMPLATE1</button>
    <button name="2" class="click">TEMPLATE2</button>
    <button name="3" class="click">TEMPLATE3</button>
    <button name="4" class="click">TEMPLATE4</button>
    <button name="5" class="click">TEMPLATE5</button>

</form>

<div>

<textarea id="edit" class="widgEditor nothing">
    <?php

    if(isset($_POST['1']))
    {
    	 $file = fopen("admissionAcceptance.txt","r");
         while(! feof($file))
         {
           echo fgets($file). "<br />";
         }

         fclose($file);
    }
      if(isset($_POST['2']))
      {
      	 $file = fopen("internshipAcceptance.txt","r");
         while(! feof($file))
        {
          echo fgets($file). "<br />";
        }
       fclose($file);
	    }
	 if(isset($_POST['3']))
      {
      	 $file = fopen("jobAcceptance.txt","r");
         while(! feof($file))
        {
          echo fgets($file). "<br />";
        }
       fclose($file);
	    }
	  if(isset($_POST['4']))
      {
      	 $file = fopen("promotionAcceptance.txt","r");
         while(! feof($file))
        {
          echo fgets($file). "<br />";
        }
       fclose($file);
	    }
	 if(isset($_POST['5']))
      {
      	 $file = fopen("resignationAcceptance.txt","r");
         while(! feof($file))
        {
          echo fgets($file). "<br />";
        }
       fclose($file);
	    }
   ?>
    </textarea>
</div>
 <body>



 <div class="container" style="padding:100px 0;">
     <!-- <div id="txtedit"></div> -->
	  <a class="button" href="mail.php">SAVE</a>
	  <a class="button" href="mail.php">DOWNLOAD</a>
	 <a class="button" href="mail.php">MAIL</a>

  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





  </body>
</html>

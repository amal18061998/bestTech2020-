




<?php 
include ("includes/headerE.php");

include ("includes/bd.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Notre super chat !</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <header>
    
  </header>
  
  <section class="chat">
    <div class="messages">
     
    </div>
    <div class="user-inputs">
      <form action="handler.php?task=write" method="POST">
        <input type="text" name="author" id="author" placeholder="your name">
        <input type="text" id="content" name="content" placeholder="Type in your message right here bro !">
        <button  class="btn hvr-hover" type="submit">🔥 Send !</button>
      </form>
    </div>
  </section>
  <script src="js/app.js"></script>
</body>
</html>
<?php include ("includes/footerE.php");?>
<?php
session start();
if(!$_SESSION['user']){
    header('location:index2.php');
   }
 ?>

 <h1>Selamat Datang, <?php echo $_SESSION['user']: ?> di XXI RPL 1</h1>

 <br>
 <br>
 <form method="POST">

      <input type="submit" name="logout" value="logout">
</form>

<?php

if (isset($_POST['logout'])) {

    session unset($_SESSION['user']);
    header("location:index2.php");

}

?>
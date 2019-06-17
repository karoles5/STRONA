<?php
session_start();

include_once("baner.php");
?>


	<div id="container">

    
    
	<div class="login">
        <h1>Zaloguj się</h1>
 
 <form method="POST" action="login.php" >

  <div class="form-group">
    <label for="loginCtrl">Login</label>
    <input type="text" class="form-control" name="login" id="loginCtlr" aria-describedby="emailHelp" placeholder="Podaj login">
  </div>
  <div class="form-group">
    <label for="passCtrl">Hasło</label>
    <input type="password" class="form-control"  name="haslo" id="passCtrl" placeholder="Podaj hasło">
  </div>
    <?php
 if(isset($_SESSION['blad']))
	 echo $_SESSION['blad'];
     unset($_SESSION['blad']);
 ?>
  <input type="submit"  value="Login" name="Zaloguj">
  


 </form>
</div>

<?php
include_once("stopka.php");
?>

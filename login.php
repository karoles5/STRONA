<?php
session_start();

require_once "connect.php";

$polaczenie=@new mysqli($host, $db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error:".$polaczenie->connect_errno;
}
else
{
$login=$_POST['login'];
$haslo=$_POST['haslo'];
 $sql="SELECT * FROM uzytkownicy Where login='$login' AND haslo='$haslo'";
}
if($rezultat=@$polaczenie->query($sql))
{
	$userow=$rezultat->num_rows;
	if($userow>0)
	{
	$_SESSION['zalogowany']= true;	
	$wiersz=$rezultat->fetch_assoc();
	$_SESSION['id']=$wiersz['id'];
	$_SESSION['login']=$wiersz['login'];
	$_SESSION['haslo']=$wiersz['haslo'];
	$_SESSION['email']=$wiersz['email'];
	
	unset($_SESSION['blad']);
	$rezultat->free();	
	header('Location:zalogowany.php');
}else {
	$_SESSION['blad']='<p style="color:red">Nieprawidłowy login lub hasło!</p>';
	header('Location: zalogujSie.php');
}

$polaczenie->close();
}

?>
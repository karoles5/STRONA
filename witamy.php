<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);

    include_once("baner.php");	
?>


	<div id="container">


	<div id="header_main">
    <div id="header_main_image">
    	<div id="header_main_text">
		
		
            <p>
Tutaj dowiesz sie jak możemy Ci pomoc
            </p>
        </div>
        </div>
	</div>
    <div id="boxy">
    <div id="boxy_box_1">
    		<h2>Trening</h2>
            <p>
            Od czego zacząć?
            </p>
            <a h0ref="#">trenuj i baw sie dobrze</a>
    </div>
    <div id="boxy_box_2">
    		<h2>Odżywianie</h2>
            <p>
      Co jeść ?
	  Jak jeść
            </p>
            <a href="#">jedzenie</a>
    </div>
    <div id="boxy_box_3">
    		<h2>Praca fizyczna</h2>
            <p>
       pracujesz i jest ciezko?
            </p>
            <a href="#">Praca a trening</a>
    </div>
    </div>
    <?php
include_once("stopka.php");
?>

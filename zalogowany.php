<?php 
session_start();

include_once("baner.php");
?>
	<div id="container">

	<?php
	
	echo "<p>Witamy na naszej stronie ".$_SESSION['login']."!";
	
	?>

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
            <a href="plany.php">trenuj i baw sie dobrze</a>
    </div>
    <div id="boxy_box_2">
    		<h2>Odżywianie</h2>
            <p>
      Co jeść ?
	  Jak jeść
            </p>
            <a href="plany.php">jedzenie</a>
    </div>
    <div id="boxy_box_3">
    		<h2>Praca fizyczna</h2>
            <p>
       pracujesz i jest ciezko?
            </p>
            <a href="plany.php">Praca a trening</a>
    </div>
    </div>

		
	

	
	
    <?php
include_once("stopka.php");
?>

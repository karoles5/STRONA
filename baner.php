<!DOCTYPE html >
<html  lang="pl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kuźnia</title>
<meta id="keywords" content="Trening , Zdrowie , Jedzenie ">
<meta id="description" content="Wszystko czego potrzebujesz" >
<meta id="Language" content="pl">
<meta id="author" content="Karol Mazur">
<meta id="Generator" content="NotePad">
<link rel="stylesheet" type="text/css" href="css/styl.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
 
<script src="js/bootstrap.min.js" ></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>

<body>



	<div id="container">

        <div id="header_logo">
        	<a href="#"><img src="images/kuźnia.jpg" alt="Logo" /></a>
        </div>
        <div id="header_menu">
        	<ul>
			
            	<li><a href="index.php">Strona główna</a></li>
                <li><a href="omnie.php">O mnie </a></li>
                <?php 
                 if(!isset($_SESSION['zalogowany'])||!$_SESSION['zalogowany'])
                 echo '<li><a href="zalogujSie.php">Zaloguj sie</a></li>
                 <li><a href="rejestracja.php">Zarejestruj</a></li>';
                ?>
                <?php 
                 if(isset($_SESSION['zalogowany'])&&$_SESSION['zalogowany'])
                 echo '
                 <li><a href="plany.php">Plany treningowe</a></li>
                 <li><a href="logout.php">Wyloguj sie</a></li>
                 <li><a href="witamy.php">'.$_SESSION['login'].'</a></li>';
                ?>
                
            </ul>
        </div>
        
        </div>


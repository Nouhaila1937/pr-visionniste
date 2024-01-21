<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Direction Générale de la Météorologie</title>
 <link rel="shortcut icon" href="R.jpg" type=image/x-icon>
</head>

<header>
	<img src="R.jpg" width="60px" />
	<div class="r" ><h3>Direction Générale de la Météorologie</h3>
	 <h5>Votre partenaire pour un développement durable</h5></div>
<ul>
	<li><a href="radar.php"> ACCUEIL</a></li>
	<li><a href="dgm.php"> DGM ACTIVITY </a></li>
	<li><a href="deconnexion.php">LOG OUT </a></li>

</ul>
<img src="s.png" width="70px"/>
</header> 
<body>
<br><u><h1>-Historique de la Direction Générale de la Météorologie & Mission.</h2></u>
<u><h2>1.Historique du DMN.</h2></u>
<center><img src="D.png" width="900px"></center>
<u><br><h2>2.Mission DMN.</h2></u>
<center><img src="mission.png"width="700px"></center>
<u><strong><br><h2>3.ORGANIGRAMME OPERATIONNEL.</h2></strong></u>
<img src="n.png" widht="80px">
<u><strong><br><h2>4.Usagers du produit météorologique .</h2></strong></u>
<center><img src="usager.png" widht="80px"></center>


 </body>
</html>
<?php 

echo '<style>
li { display: flex;}

 a{color:black;}

 ul {
  display: flex;
  list-style: none;
  gap: 0.95rem;}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
	 
background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(0,221,214,1) 0%, rgba(51,102,255,1) 90% ); 
  padding: 0 0.5rem; 
  height:90px;
box-shadow: 2px 3px 3px 1px rgb(72 77 76);}

body {margin: 0;}

img{box-shadow: 2px 3px 3px 2px rgb(72 77 76);}

.r{ 
    text-align: left;
    width: 45%;}
  p{
padding:30px;
 line-height: 180%;
 margin:2px;}

h1{
	margin:50px;
	-webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
text-align:left;
	   font-size:40px; 
	background-image :-webkit-radial-gradient( 10% 20%,  rgba(5,12,75,1) 19.4%, rgba(12,105,155,1) 100.3% );
margin-top:70px;	}

h2{
padding:30px;
paddi:3px;}

</style>';
?>

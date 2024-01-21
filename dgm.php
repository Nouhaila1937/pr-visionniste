<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACTIVITY</title>
	<link rel="shortcut icon" href="R.jpg" type=image/x-icon>
</head>

<!-- *************************************************************************************-->

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

<!-- ******************************************************************************************************-->

<body>
 <u><br><h1>--Recherche et développement :-- </h1></u>

<!-- ******************************************************************************************************-->

<u><h4>-Consortium ALADIN</h4></u>
<div class="b"> <br>
  <u> <strong><div style="color:red">*ALADIN:</div> </u>Aire Limitée Adaptation   Dynamique Développement International.
  <u><strong> <div style="color:red">*Lancement:</strong></div> </u> en 1991 par Météo France.
  <u><strong>  <div style="color:red">*Objectif: </strong></div></u>Améliorer la fiabilité des prévisions grâce à la coopération internationale .
  <u><strong> <div style="color:red">*Equipes de recherche:</strong></div> </u>250 chercheurs /an.
  <u> <div style="color:red"><strong>*Pays participants:</strong></div></u>15 pays européens + le Maroc et la Tunisie.
  <strong><h3><div style="color:darkred">Le Maroc a assuré la présidence de l’assemblée générale ALADIN. </div></h3></strong></div>

<!-- *******************************************************************************************************-->

<u><h4><center>-Centre Européen de Prévisions Météorologiques à Moyen Terme (CEPMMT) Reading – Royaume Uni. </center></h4></u>

<div class="a">
    <br>
    <u><strong><div style="color: Indigo">+Objectif : </div></strong></u>Prévision à moyenne échéance.  
    <u><strong><div style="color: Indigo">+Lancement :   </div></strong></u>  1975 par plusieurs pays européens .
    <u><strong><div style="color: Indigo">+Participation:  </div></strong></u>  18 pays européens + le Maroc .
    <u><strong><div style="color: Indigo"> +Ce qui faut faire :</div></strong></u> Recherche et développement dans le domaine de la production opérationnelle de la prévision.
    <u><strong><div style="color: Indigo">+Équipes de recherche:</div></strong></u>170 chercheurs 	installés à Reading .
    <center> <h3><strong><div style="color: Indigo"> Le Maroc est le seul pays non européen membre associé .</div></strong></h3> </center> </div>

<!-- *******************************************************************************************************-->

 <u><h4>-la prévision saisonnière</h4></u><p>La prévision saisonnière consiste à prévoir la moyenne trimestrielle de paramètres météorologiques (température, précipitations) pour les mois à venir, à l'échelle d'une zone.
    Ce qui donne pour la température « chaud », « normal » ou « froid », et pour les précipitations,
    « humide », « normal » ou « sec ».
    On produit mensuellement des prévisions saisonnières à plusieurs mois d'échéance à l'aide du modèle  ARPEGE-CLIMAT.</p>
<center> <img src="v.jpg" width="500px"></center>

<!-- *******************************************************************************************************-->
<br>
<hr>
<u><h1>--Bienvenue cher prévisionniste:--</h1></u>

<!-- *******************************************************************************************************-->

<pre> 
  Veuillez cliquer sur un bouton :<li> <button> <a href="http://extranet.marocmeteo.ma/" target="blanck">extranet</a></button></li> <li> <button> <a href="http://aeroweb.marocmeteo.ma/" target="blanck">aeroweb</a></button> </li> <li> <button> <a href="http://www.marocmeteo.ma/" target="blanck">DGM</a> </button></li>
<!-- *******************************************************************************************************-->
  La carte de température: <button><a href="https://urlz.fr/jhHP" target="blanck">Température </a></button>
<!-- *******************************************************************************************************-->
  Prévision météorologiques: <button> <a href="https://urlz.fr/jhHR" target="blanck">P.M</a></button><br>
</pre>
 
</body>
</html>
<?php
echo'<style>

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(0,221,214,1) 0%, 
  rgba(51,102,255,1) 90% ); 
  padding: 0 0.5rem; 
  height:90px;
  box-shadow: 2px 3px 3px 1px rgb(72 77 76);}


a{color:black;}


body{margin:0px;}


li { display: inline;}/*\c est pour la partie prévi.. */


.r{ 
    text-align: left;
    width: 45%;}


  img{box-shadow: 2px 3px 3px 2px rgb(72 77 76); }

ul{
    display: flex;
    list-style: none;
    gap: 0.95rem;}


.a{
    border: 5px solid #000000;
    line-height: 200%;
    text-align: center;
    margin-top:1px;
    margin-left:145px;
    margin-right:145px;
    margin-bottom:80px;
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
    box-shadow: inset 5px 4px 15px 5px rgba(0,0,0,0.57);}


.b{
    border: 5px solid #000000;
    line-height: 200%;
    text-align: center;
    margin-top:1px;
    margin-left:145px;
    margin-right:145px;
    margin-bottom:80px;
    background-color: #FFDEE9;
    background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
    box-shadow: inset 5px 4px 15px 5px rgba(0,0,0,0.57);}


h1{
    margin:30px;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align:left;
    font-size:30px; 
    text-align:center;
    background-image: -webkit-radial-gradient(  51.2% 51%,  rgba(11,27,103,1) 0%, rgba(16,66,157,1) 0%, rgba(11,27,103,1) 17.3%, rgba(11,27,103,1) 58.8%, rgba(11,27,103,1) 71.4%, rgba(16,66,157,1) 100.2%, rgba(187,187,187,1) 100.2% );
    margin-top:50px;	}


h4{
	background-image: -webkit-linear-gradient( 99deg,  rgba(115,18,81,1) 10.6%, rgba(28,28,28,1) 118% );
  margin-left:50px;
  margin-bottom:30px;
	-webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align:left;
	font-size:30px; }


  p{
      line-height: 190%;
      margin:43px;}


button:hover{
            text-transform: uppercase;
            padding: 4px; 
            width: 150px;
            background-image: linear-gradient( 95.2deg,  rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );}

</style>';
?> 
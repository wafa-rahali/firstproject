<?php
$np=$_POST["npermis"];
$op=$_POST["op"];
$s=$_POST["s"];
$c=$_POST["c"];
$cf=$_POST["cf"];
$connexion=mysqli_connect("localhost","root","","voiture1") or die("impossible de se connecter au serveur web<br>");
$requete="INSERT INTO `evaluation`(`numpermie`, `idmodele`,  `securite`, `conduite`, `confort`) VALUES('$np','$op','$s','$c','$cf')";
$res=mysqli_query($connexion, $requete) or die("<br>erreur : insertion de donnees echouée!!!");
header("location: enregistrement.html");
?>
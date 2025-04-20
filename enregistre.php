<?php
$np=$_POST['npermis'];
$n=$_POST['nom'];
$p=$_POST['Prenom'];
$g=$_POST['genre'];
$connexion=mysqli_connect("localhost","root","","voiture1") or die("impossible de se connecter au serveur web<br>");
$requete= "INSERT INTO `testeur`(`numpermie`, `nom`, `prenom`, `genre`) VALUES ('$np','$n','$p','$g')";
$res=mysqli_query($connexion, $requete) or die("<br>erreur : insertion de donnees echouée!!!");
header("location: evaluation.html");
?>
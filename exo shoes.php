<?php
/*$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$age=$_GET['age'];
*/

$connexion = new mysqli("localhost", "root", "", "chaussure");
$requete = "SELECT `nom` FROM basket";
$baskets = $connexion->query($requete);
foreach($baskets as $basket){
    if ($basket['TN']==$_GET['nom']):?>
    <div>


    </div>
<?php
    if ($basket['dekkan']==$_GET['nom']):?>

<?php
    if ($basket['all stars']==$_GET['nom']):?>
    
    <?php
    if ($basket['advantage']==$_GET['nom']):?>

<?php
    if ($basket['airmax']==$_GET['nom']):?>

<?php
    if ($basket['stan smith']==$_GET['nom']):?>

<?php
    if ($basket['ignite']==$_GET['nom']):?>

<?php
    if ($basket['leather pigalle']==$_GET['nom']):?>

<?php
    if ($basket['club c revenge']==$_GET['nom']):?>

<?php
    if ($basket['WL574SAX']==$_GET['nom']):?>
}
$connexion->close();
<nav>
<ul>
<?php
	$chaine=include 'libellesMenuCompletPremierNiveau.php';
	$tableau = explode(":",$chaine);
	
	$chn="";
	foreach ($tableau as $valeur) {
		$chn=$chn." <li> ".$valeur." </li> ";
		
	//Définition des variables
 
 
    $chaine=include 'libellesMenuCompletPremierNiveau.php';
 
//chaine de caractère en tableau
    $tableau = explode(":",$chaine);
 
    $chn="";
    $chainefinal="";
//Foreach parcourt chaque valeur du tableau

    include 'incls_regrs/classes/cls_Hyperlien.php';
    foreach ($tableau as $valeur) {
        $pUrl="http://localhost/SI6/SI6-TP2/incls_reqrs/donnees/nav.php";
        $pId=$valeur;
        $pTexte=$valeur;
        $pClasse=$valeur;
            $var=new Hyperlien($pUrl, $pId, $pTexte, $pClasse);
            $lien=$var -> ancre();
            $chn=$chn." <li> ".$lien." </li> ";
    }
echo $chn;

	
	
	
	?>
</ul>
</nav>
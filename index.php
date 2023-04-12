<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php include("/xampp/htdocs/ges_pret/pages/nav.php") ?>
    

    <div >
        
        <?php
            if(isset($_REQUEST['affichage'])){
                $affichage=$_REQUEST['affichage'];
                if($affichage=="formAdherant"){
                    include("/xampp/htdocs/ges_pret/pages/formAdherant.php");
                }else if($affichage=="listerAdherant"){
                    include("/xampp/htdocs/ges_pret/pages/listerAdherant.php");
                }else if($affichage=="formEmprunt"){
                    include("/xampp/htdocs/ges_pret/pages/formEmprunt.php");
                }else if($affichage=="listerEmprunt"){
                    include("/xampp/htdocs/ges_pret/pages/listerEmprunt.php");
                }else if($affichage=="formEffectuer"){
                    include("/xampp/htdocs/ges_pret/pages/formEffectuer.php");
                }else if($affichage=="listerEffectuer"){
                    include("/xampp/htdocs/ges_pret/pages/listerEffectuer.php");
                }else if($affichage=="traiterAdherant"){
                    include("/xampp/htdocs/ges_pret/traitement/traiterAdherant.php");
                }else if($affichage=="acceuil"){
                    include("/xampp/htdocs/ges_pret/pages/acceuil.php");
                }else if($affichage=="traiterEmprunt"){
                    include("/xampp/htdocs/ges_pret/traitement/traiterEmprunt.php");
                }else if($affichage=="traiterEffectuer"){
                    include("/xampp/htdocs/ges_pret/traitement/traiterEffectuer.php");
                }else if($affichage=="modifier"){
                    include("/xampp/htdocs/ges_pret/traitement/modifier.php");
                }else if($affichage=="supprimer"){
                    include("/xampp/htdocs/ges_pret/traitement/supprimer.php");
                }else if($affichage=="modifierEffectuer"){
                    include("/xampp/htdocs/ges_pret/traitement/modifierEffectuer.php");
                }else if($affichage=="modifierEmprunt"){
                    include("/xampp/htdocs/ges_pret/traitement/modifierEmprunt.php");
                }else{
                    echo "page introuvable";
                }
            }
        ?>

    </div>
</body>
    


</html>
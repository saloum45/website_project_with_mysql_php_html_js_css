<?php

    include("/xampp/htdocs/ges_pret/conf/db.php");
    if(isset($_POST['submit'])){

        extract($_POST);
        if(!empty($adherant) && !empty($emprunt) &&!empty($dated) && !empty($datef)){
            $sql="INSERT INTO `effectuer`( `id`, `code`, `dated`, `datef`)  VALUES (?,?,?,?)";
            $insert=$con->prepare($sql);
            $insert->execute(array($adherant,$emprunt,$dated,$datef));
            header("location:?affichage=formEffectuer&msg=Ajout fait avec succes");
            
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Veuillez renseigner tous les champs
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    header("refresh:1;url=?affichage=formEffectuer");
        }
    }
?>
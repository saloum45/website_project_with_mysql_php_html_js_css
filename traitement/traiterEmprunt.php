<?php

    include("/xampp/htdocs/ges_pret/conf/db.php");
    if(isset($_POST['submit'])){

        extract($_POST);
        if(!empty($nom) && !empty($description)){
            $sql="INSERT INTO `emprunt`(`nom`, `description`) VALUES (?,?)";
            $insert=$con->prepare($sql);
            $insert->execute(array($nom,$description));
            
            header("location:?affichage=formEmprunt&msg=Ajout fait avec succes");
            
        }else{
            
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Veuillez renseigner tous les champs
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    header("refresh:1;url=?affichage=formEmprunt");
        }
    }
?>
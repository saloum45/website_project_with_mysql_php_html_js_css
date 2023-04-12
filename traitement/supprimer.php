<?php
        $test=$_GET['test'];
        if($test==1){
            include("/xampp/htdocs/ges_pret/conf/db.php");
            $id=$_GET['id'];
            $sql="DELETE FROM `adherant` WHERE id = $id ";
            $select=$con->prepare($sql);
            $select->execute();
            
            header("location:?affichage=listerAdherant&msg=suppression faite avec succes");

        }else if($test==2){
            include("/xampp/htdocs/ges_pret/conf/db.php");
            $id=$_GET['id'];
            $sql="DELETE FROM `effectuer` WHERE id_effectuer = $id ";
            $select=$con->prepare($sql);
            $select->execute();
            
            header("location:?affichage=listerEffectuer&msg=suppression faite avec succes");
        }else{
            include("/xampp/htdocs/ges_pret/conf/db.php");
            $id=$_GET['id'];
            $sql="DELETE FROM `emprunt` WHERE code = $id ";
            $select=$con->prepare($sql);
            $select->execute();
            
            header("location:?affichage=listerEmprunt&msg=suppression faite avec succes");
        }
        
    ?>
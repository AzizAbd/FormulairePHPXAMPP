<!DOCTYPE html>
<html lang =en >
<head>
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" media="screen" type="text/css" href="maf.css"/>
    
</head>

<body>
    <header>
     <nav>
        <ul>
            <li> <a href="https://github.com/AzizAbd"> Home </a> </li>
             <li> <a href ="#">News</a> </li>
             <li> <a href ="#">Contact</a> </li>
        </ul>
     </nav>
    </header>
<?php

include "cnx.php";
if(isset($_POST["id"])){

    $id=$_POST["id"];
    $req= mysqli_query($link,"SELECT*FROM user WHERE id='$id'");

    $res=mysqli_fetch_array($req);

}
else{
 echo "cahmps manquant";
}
?>
    <form action ="modifier.php" method="GET">
        <fieldset>
            <legend>Détail</legend>
            <input type="hidden" name="id" value="<?php echo $res["id"]?> />" />
        <label>Nom</label> <input type ="text" name ="nom" value="<?php echo $res["nom"]?>"  placeholder="votre nom ici"/> <br>
        <label>Prénom</label> <input type ="text" name = "prenom" value="<?php echo $res["prenom"]?>" placeholder="votre Prénom ici"/> <br>
        <label>tel</label> <input type ="number" name="phone" value="<?php echo $res["tel"]?>" placeholder="votre numéro de téléphone ici"/> <br>
        <label>Email</label> <input type ="email" name="mail" value="<?php echo $res["mail"]?>" placeholder="votre mail ici"/> <br>
        <label>Sexe</label> 
        <?php 
                if($res["sexe"]="Homme")
                {

                
        ?>
        <input type ="radio" name="gender" Value="Homme" checked="true"placeholder="choisir si un homme"/> Homme 
        <input type ="radio" name="gender" Value="Femme" placeholder="choisir si femme" />Femme<br>
        
            <?php
    }
             else{
                ?>
           <input type ="radio" name="gender" Value="Homme" placeholder="choisir si un homme"/> Homme 
        <input type ="radio" name="gender" Value="Femme" checked="true" placeholder="choisir si femme" />Femme<br>
                <?php
             }  

 ?>
 <input type="submit" value ="modifier"/>
    </fieldset>
        
    </form>

</body>


</html>
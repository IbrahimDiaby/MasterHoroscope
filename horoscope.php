<?php
	if(!empty($_POST)){

        if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 3) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 4))){
            $signe = "Bélier";
            if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
                $element = "Feu";
            }

            else{
                $element = "Terre";
            }
         
        }
        
    else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 4) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 5))){
        $signe = "Taureaux";
        if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
            $element = "Eau";
        }

        else{
            $element = "Air";
        }
     
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 5) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 6))){
    $signe = "Gémeaux";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Air";
    }

    else{
        $element = "Eau";
    }
 
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 6) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 7))){
    $signe = "Cancer";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Terre";
    }

    else{
        $element = "Feu";
    }
 
}
else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 7) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 8))){
    $signe = "Vierge";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Terre et Feu";
    }

    else{
        $element = "Terre et Eau";
    }
 
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 8) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 9))){
    $signe = "Scorpion";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Terre et Air";
    }

    else{
        $element = "Air et Eau";
    }
 
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 9) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 10))){
    $signe = "Capricorne";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Terre et Air";
    }

    else{
        $element = "Air et Eau";
    }
 
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 10) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 11))){
    $signe = "Poisson";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Terre et Feu";
    }

    else{
        $element = "Terre et Eau";
    }
 
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 11) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 12))){
    $signe = "Lion";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Terre";
    }

    else{
        $element = "Feu";
    }
 
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 12) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 1))){
    $signe = "Balance";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Air";
    }

    else{
        $element = "Eau";
    }
 
}

else if(($_POST['Jours'] >= 21) AND ($_POST['Mois'] == 1) OR (($_POST['Jours'] <= 20) AND ($_POST['Mois'] == 2))){
    $signe = "Sagittaire";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Eau";
    }

    else{
        $element = "Air";
    }
 
}
else{
    $signe = "Verseau";
    if((($_POST['Heures'] >= 0) && ($_POST['Heures'] <= 12)) AND ($_POST['Minutes'] <= 30)){
        $element = "Feu";
    }

    else{
        $element = "Terre";
    }
 
}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horoscope</title>
    <link rel="stylesheet" href="dist/css/bootstrap.css" />
    <link rel="stylesheet" href="dist/css/mystyle.css" />
    <div class="container">
        <h1>Projet Horoscope</h1>
        <h3>Nom : <?php echo $_POST['Nom'] ." ". $_POST['Prenom'] ?></h3>
        <div>
        <h3>Né le <?php echo $_POST['Jours'] . "/" . $_POST['Mois'] . "/" . $_POST['Annee'] . " à " . $_POST['Heures'] . " h " . $_POST['Minutes'] ?></h3>
        <h4>votre signe zodiaque est: <?php echo " " . $signe . " " ?></h4>
            <h4>votre element est: <?php echo " " . $element . " " ?></h4>
            <a class="btn btn-primary" id="tall" href="index.php">Accueil</a>
        </div>
    </div>
</head>
<body>
    
</body>
</html>
<?php
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $email = $_GET["email"];
    $telephone = $_GET["telephone"];
    $adresse = $_GET["adresse"];

    $questionnaire = [$nom, $prenom, $email, $telephone, $adresse];
    foreach($questionnaire as $key=>$val);

if (empty($_GET["nom"]) || empty($_GET["prenom"]) || empty($_GET["email"]) || empty($_GET["telephone"]) || empty($_GET["adresse"])) {
    echo "Veuillez remplir tous les champs demandés";
} else {
    echo "Bravo, tu sait écrire";
}
    ?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice fomulaire php</title>
</head>
<body>
    <table>
        <tr>
            <th>
                <?php
                echo $nom;
                ?>
            </th>
            <th>
                <?php
                echo $prenom;
                ?>
            </th>
            <th>
                <?php
                echo $email;
                ?>
            </th>
            <th>
                <?php
                echo $telephone;
                ?>
            </th>
            <th>
                <?php
                echo $adresse;
                ?>
            </th>
        </tr>
    </table>

</body>
</html>








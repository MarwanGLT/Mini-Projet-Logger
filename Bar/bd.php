<!DOCTYPE htlml>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Bases de données MySQL</h1>
        <?php
            $servername = 'localhost';
            $dbname = 'bdancrenoire';
            $username = 'root';
            $password = '';

            $nom= .$_POST["nom"].
            $prenom = .$_POST["prenom"].
            $note = .$_POST["note"].
            $sexe = .$_POST["sexe"].
            $sugg = .$_POST["sugg"].
            $age = .$_POST["age"].

        try{

            $conn = new
        PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
        
            $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sth = $conn->prepare("INSERT INTO Clients(nom,prenom,sexe,age) VALUES(:nom,:prenom,:sexe,:age)");
            $sth->execute(array(
                ':nom' => .$_POST["nom"].
                ':prenom' => .$_POST["prenom"].
                ':sexe' => .$_POST["sexe"].
                ':age' => .$_POST["age"].
            ));

        echo 'entrée ajoutée dans la table';
        }
        catch(PDOException $e){
            echo"erreur:".$e->GetMessage();
        }
        ?>
    </body>
</html>
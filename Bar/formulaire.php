<!DOCTYPE htlml>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>

    <body>
        <p>Dans le formulaire précédent, vous avez fourni les informations suivantes :</p>
        <?php
            echo'Prenom :'.$_POST["prenom"].'<br>';
            echo'Nom :'.$_POST["nom"].'<br>';
            echo'Votre Sexe :'.$_POST["sexe"].'<br>';
            echo'Vous Avez :'.$_POST["age"].'<br>';
            echo'La note que vous nous avez attriburer :'.$_POST["note"].'<br>';
            echo'Votre suggestion :'.$_POST["suggestion"].'<br>';
        ?>
        <?php
    $servername = 'localhost';
    $dbname = 'bdancrenoire';
    $username = 'root';
    $password = 'root';

$nom        = $_POST["nom"];
$prenom     = $_POST["prenom"];
$sexe       = $_POST["sexe"];
$age        = $_POST["age"];
$note       = $_POST["note"];
$suggestion = $_POST["suggestion"];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sth = $conn->prepare("INSERT INTO Clients(nom, prenom, sexe, age, suggestion, note) VALUES(:nom, :prenom, :sexe, :age, :suggestion, :note)");
        
        $sth->execute(array(
            ':nom'    => $nom,
            ':prenom' => $prenom,
            ':sexe'   => $sexe,
            ':age'    => $age,
            ':note'    => $note,
            ':suggestion' => $suggestion
        ));

        echo 'Entrée ajoutée dans la table !';
    }
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
         echo "<h2> Nos 20 derniers commentaire ce mois-ci : </h2>"; 
    try{
        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $dbco ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $requete="SELECT * FROM clients ORDER BY id DESC LIMIT 10";
        $listeClients = $dbco -> query($requete) -> fetchAll (PDO::FETCH_ASSOC);

        $resStats ="SELECT AVG(note) AS moyenne, COUNT(*) AS total FROM clients";
        $stats = $dbco -> query($resStats) -> fetch(PDO::FETCH_ASSOC);

     echo "<ol>";
     foreach($listeClients as $clients):?>
        <li>
            <?php echo "Nom : ".$clients['nom']." | Prénom : ".$clients['prenom']." | Âge : ".$clients['age']." | Note : ".$clients['note']." | Suggestion : ".$clients['suggestion']; ?>
        </li>
        <?php endforeach; ?>
        </ol>
        <?php echo "<h3>Note moyenne attribuée à notre bar : " . round($stats['moyenne'], 1) . "/5 (" . $stats['total'] . " avis)</h3>"; ?>
    <?php
 }
        catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>
      <button type="retour"><a href="formulaire.html" class="link">Retour</a></button>

    </body>
</html>
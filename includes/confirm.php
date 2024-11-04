<div class ="jumbotron">
    <h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
</div>
<div class = "row">
    <div class="col-md-1 hoofding">
        naam:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["naam"]).'</p>'; ?>
    </div>
</div>
<div class = "row">
    <div class="col-md-1 hoofding">
    Straat en Nr:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["straat"]).'</p>'; ?>
    </div>
</div>

<div class = "row">
    <div class="col-md-1 hoofding">
    gemeente:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["gemeente"]).'</p>'; ?>
    </div>
</div>

<div class = "row">
    <div class="col-md-1 hoofding"> 
        postcode:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["postcode"]).'</p>'; ?>
    </div>
</div>

<div class = "row">
    <div class="col-md-1 hoofding">
        telefoon:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["telefoon"]).'</p>'; ?>
    </div>
</div>

<div class = "row">
    <div class="col-md-1 hoofding">
        geboorte datum:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["geboorte"]).'</p>'; ?>
    </div>
</div>

<div class = "row">
    <div class="col-md-1 hoofding">
        e-mail:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["e-mail"]).'</p>'; ?>
    </div>
</div>

<div class = "row">
    <div class="col-md-1 hoofding">
        lens:
    </div>
    <div class="col-md-11 invoer">
        <?php echo '<p>'.($_POST["lens"]).'</p>'; ?>
    </div>
</div>
<?php

$to = "mahmoude@localhost";
$subject = "Nieuwe Inschrijving";
$message = "
Naam: " . htmlspecialchars($_POST["naam"]) . "\n" .
"Straat en Nr: " . htmlspecialchars($_POST["straat"]) . "\n" .
"Gemeente: " . htmlspecialchars($_POST["gemeente"]) . "\n" .
"Postcode: " . htmlspecialchars($_POST["postcode"]) . "\n" .
"Telefoon: " . htmlspecialchars($_POST["telefoon"]) . "\n" .
"Geboortedatum: " . htmlspecialchars($_POST["geboorte"]) . "\n" .
"E-mail: " . htmlspecialchars($_POST["e-mail"]) . "\n" .
"Lens: " . htmlspecialchars($_POST["lens"]) . "\n";


$headers = "From: Test User <mahmoude@localhost>";


if(mail($to, $subject, $message, $headers)){
    echo "E-mail succesvol verzonden!";
} else {
    echo "Er is een fout opgetreden bij het verzenden van de e-mail.";
}

//function saveTodb() {
$servername = "localhost";
$username = "nermine";
$password = "0417";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ontvangst (`naam`, `straat_nr`, `postcode`, `gemeente`, `telefoonnummer`, `geboortedatum`, `email`, `lens`)"
. " VALUES ('".$_POST['naam']."', '".$_POST['straat']."', '".$_POST['postcode']."', '".$_POST['gemeente']."', '".$_POST['telefoon']."', '".$_POST['geboorte']."', '".$_POST['e-mail']."', '".$_POST['lens']."');";

    echo$sql;
    if($conn->query($sql) === true) {
        echo "New record created succesfuly";
    }else {
        echo "error: " .$sql. "<br>".$conn->error;
    }

    $conn->close();
//}
?>

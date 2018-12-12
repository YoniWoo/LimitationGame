<!doctype html>
<html lang="en">
<head>
    <title>Limitation Game</title>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="description" content="L'agence ORION vous présente sa campagne de sensibilisation sur les handicapé">
    <meta name="keywords" content="ORION,Agence,Landing,handicap,handicap international,handicap moteur">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
    <meta name="google" content="nositelinkssearchbox" />
    <meta name="author" content="ORION">
    <!-- LINKS -->
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="icon" sizes="16x16" href="img/png/favicon-16x16.png">
    <link rel="icon" sizes="32x32" href="img/png/favicon-32x32.png">
    <!-- SCRIPT -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130493707-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130493707-1');
    </script>
    <script src="js/carousel.js" async></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<?php
$email_to = "contact.agenceorion@gmail.com";

$prenomErr = $mailErr = $messageErr = "";
$prenom = $mail = $message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["info"])){
        $prenomErr = "Votre prénom est requis.";
    }
    else{
        $prenom = test_input($_POST["info"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $prenomErr = "Seulement les lettres et les espaces sont autorisé.";
        }
    }

    if (empty($_POST["mail"])){
        $mailErr = "Votre mail est requis.";
    }
    else{
        $mail = test_input($_POST["mail"]);
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mailErr = "Adresse mail invalide.";
        }
    }

    if (empty($_POST["message"])){
        $messageErr = "Écrivez nous au moins un message.";
    }
    else{
        $message = test_input($_POST["message"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// entête email
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
$headers .= 'Reply-To: ' . $_POST['mail'] . "\n";
$headers .= 'From: "' . ucfirst(substr($_POST['mail'], 0, strpos($_POST['mail'], '@'))) . '"<'.$_POST['mail'].'>' . "\n";
$headers .= 'Delivered-to: ' . $email_to . "\n";

mail($email_to, $_POST['prenom'], $_POST['message'], $headers);
?>
<div id="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>Contacte-nous</p>
        <input type="text" name="info" id="info" placeholder="Nom et prénom"><br><br>
        <input type="email" name="mail" id="mail" placeholder="Adresse mail"><br><br>
        <textarea name="message" id="message" placeholder="Message"></textarea><br>
        <button class="btn-input" type="submit">
    </form>
</div>
<div id="color">
    <img src="img/svg/illu-form.svg" alt="">
</div>
</body>
</html>

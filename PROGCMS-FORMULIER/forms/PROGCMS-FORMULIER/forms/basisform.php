<?php
var_dump($_POST);
$scheldwoorden = array('kut', 'komkommer', 'banaan', 'vieze website');

if(isset($_POST['submit'])){
    if(isset($_POST["user"]) && !empty($_POST["user"]))
    {
        $user = $_POST["user"];
        $validate_user = htmlspecialchars(stripslashes(trim($user)));
        echo $validate_user;
      
    }
    else {
        echo"ERROR";
    }
    
    if(isset($_POST["email"]) && !empty($_POST["email"]))
    {
        $email = $_POST["email"];
        $validate_email = trim($email) . stripslashes($email) . htmlspecialchars($email);
      
    }
    else {
        echo"ERROR";
    }
   
    $email = "uday@gmailcom";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

    if(isset($_POST["texto"]) && !empty($_POST["texto"]))
    {
        $texto = $_POST["texto"];
        $validate_texto = trim($texto) . stripslashes($texto) . htmlspecialchars($texto);
        foreach($scheldwoorden as $scheldwoord){
            $validate_texto = str_replace($scheldwoord, "", $validate_texto);
        }
        echo $validate_texto;
    }
    else {
        echo"ERROR";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Basis formulier</title>
</head>
<body>
    <section class="container">
   <article class="background">
    <form method="POST" action= "">

    <input class="name" type="text" name="user" placeholder="Naam" id="user" required>

    <input class="mail"type="text" name="email" placeholder="Email" id="email" required>

    <textarea class="textbox" name="texto" id="texto" cols="30" rows="10"></textarea> 


    <input class="sub" type="submit" value="Abonneer" name="submit" id="submit">
    </article>
    </form>
    </section>

</body>
</html>


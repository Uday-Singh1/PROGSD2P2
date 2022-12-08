<?php
var_dump($_POST);

if(isset($_POST["submit"]) && !empty($_POST["submit"]))
{
    $user = $_POST["user"];
    $validate_user = trim($user) . stripslashes($user) . htmlspecialchars($user);
    echo $user;
  
}
else {
    echo"ERROR";
}

if(isset($_POST["submit"]) && !empty($_POST["submit"]))
{
    $email = $_POST["email"];
    $validate_email = trim($email) . stripslashes($email) . htmlspecialchars($email);
  
}
else {
    echo"ERROR";
}

if(isset($_POST["submit"]) && !empty($_POST["submit"]))
{
    $texto = $_POST["texto"];
    $validate_texto = trim($texto) . stripslashes($texto) . htmlspecialchars($texto);
  
}
else {
    echo"ERROR";
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


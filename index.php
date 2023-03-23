<?php
@$nom = $_POST["nom"] ;
@$prenom = $_POST["prenom"] ;
@$sujet = $_POST["sujet"] ;
@$email = $_POST["email"] ;
@$tel = $_POST["tel"] ;
@$message = $_POST["message"] ;
$errors = [];

if($_SERVER["REQUEST_METHOD"]=== "POST"){
    if(!isset($nom)|| trim($nom)=== "")
        $errors[] = "le nom est obligatoire";
    if(!isset($prenom) || trim($prenom) === "")
        $errors[] = "le prénom est obligatoire";
    if(!isset($sujet) || trim($sujet) === "")
        $errors[] = "le sujet est obligatoire";
    if(!isset($email) || trim($email) === "")
        $errors[] = "l'email est obligatoire";
  //  if(isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        $errors[] = "ce n'est pas un email valide";
    if(!isset($message) || trim($message) === "")
        $errors[] = "le sujet est obligatoire";
    if(empty($errors)){
        header("location: thank");
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
if(count($errors)>0): ?>
<div>

    <ul> <?php
        foreach ($errors as $error): ?>
            <li>  <?= $error; ?>
        </li><?php    endforeach; ?></ul>

</div>
<?php
    endif; ?>
<form method="post">

    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom">

    <label for="prenom">Votre prénom</label>
    <input type="text" id="prenom" name="prenom">

    <label for="email">Votre e-mail</label>
    <input type="email" id="email" name="email">

    <label for="sujet">Quel est le sujet</label>

    <select name="sujet" id="sujet">
        <option value="">--Please choose an option--</option>
        <option value="urgent">Urgent</option>
        <option value="pas urgent">Pas urgent</option>
        <option value="peut attendre">Peut attendre</option>
    </select>

    <label for="tel">Votre numéro de téléphone</label>
    <input type="tel" id="tel" name="tel">

    <label for="message">Votre message</label>
    <textarea id="message" name="message"></textarea>

    <button type="submit">Envoyer mon message</button>

</form>
</body>
</html>
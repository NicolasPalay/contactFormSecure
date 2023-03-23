<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<p>Merci <?= $_POST["prenom"];?> <?= $_POST["nom"] ;?>  de nous avoir contacté à propos de <?= $_POST["sujet"];?></p>
<p>Un de nos conseillers vous contactera soit à l’adresse <?= $_POST["email"] ;?> ou par téléphone au <?= $_POST["tel"] ;?> dans les plus brefs délais pour traiter votre demande :
</p>
<p><?= $_POST["message"];?></p>
</body>
</html>
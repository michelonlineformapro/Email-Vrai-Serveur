<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="output.css" rel="stylesheet">

</head>
<?php

//Recup des valeurs du formulaire
if(isset($_POST['object']) && isset($_POST['email']) && isset($_POST['message'])){

    $destinataire = "michel.onlineformapro@gmail.com";
    $object = $_POST['object'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Requete HTTP
    $to = $destinataire;
    $subject = $object;
    $headers = $email;
    $message = '
            <html>
            <body>
                <div align="center">
                    <img src="https://www.nglesson.com/assets/imgs/img_articles/PHP-mail.jpg"/>
                    <br />
                    <u>Nom de l\'expediteur :</u>' .$subject.'<br />
                    <u>Email de l\'expediteur :</u>' .$email.'<br />
                    <br />
                    '.$message.'
                    <br />
                </div>
            </body>
            </html>
        ';
    //Appel de la fonction mail PHP

    mail($to, $subject,$message,$headers);
    var_dump(mail($to, $subject,$message,$headers));
    //var_dump(mail("michel.onlineformapro@gmail.com", $_POST['object'],"Test du message",$headers));
    $msg =  "<p class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'>Votre message a bien été envoyé ! Une réponse vous sera rapidement envoyé.</p>";
}else{
    $msg =  "<p class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative'>Erreur lors de l'envois de email</p>";
}

if (isset($msg)) {
    echo $msg;
}
//FORCER GMAIL A RECEVOIR DES EMAIL DE SOURCES INCONNUE
//https://myaccount.google.com/lesssecureapps?pli=1&rapt=AEjHL4M0huh-6rgt7cFHQ0D-azu_Kz_fciBEHC5vNfLcExNk8kiYFQhxErPdbIzzAY3hvRfhksv9BXMGifCIjedDfrmXUGmuKQ
//TUTO php.ini + sendmail.ini
https://waytolearnx.com/2020/01/comment-configurer-wampserver-pour-envoyer-un-mail-depuis-localhost-en-php.html
?>

<body class="bg-gray-200">
<div class="mt-10 md:container mx-auto flex justify-center p-5 h-full bg-white shadow-lg">
    <div class="grid justify-items-center">
        <h1 class="text-6xl font-bold text-red-500">CONTACT</h1>
        <form action="index.php" method="post" class="mt-5">
            <label for="object" class="font-bold mt-3 block text-2xl font-medium text-gray-700">Objet de l'email :</label>
            <input type="text" placeholder="Objet de l'email" name="object" id="object" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">

            <label for="email" class="font-bold mt-3 block text-2xl font-medium text-gray-700">Votre email:</label>
            <input type="email" required placeholder="email@email.com" name="email" id="email" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">

            <label for="message" class="font-bold mt-3 block text-2xl font-medium text-gray-700">Votre message :</label>
            <textarea rows="4" type="text" placeholder="Votre nom" name="message" id="message" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"></textarea>

            <input type="submit" value="Envoyer" name="formEmail" class="mt-3 inline-flex justify-center items-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        </form>
    </div>
</div>
</body>
</html>







<?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de portfolio Alexandre</h1>
        <p><b>Prénom : </b>' . $_POST['firstname'] . '<br><br>
        <b>Nom : </b>' . $_POST['lastname'] . '<br><br>
        <b>Email : </b>' . $_POST['email'] . '<br><br>
        <b>Téléphone : </b>' . $_POST['phonenumber'] . '<br><br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('ferreira.alexandre.2000@outlook.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
?>
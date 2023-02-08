<?php

/*
Oggi creeremo una pagina in grado di generare una password per gli utenti.
L'utente potrà scegliere la lunghezza password e ricevere in un alert una password con il numero di caratteri casuali da lui richiesto!
Lo screen allegato è un riferimento, ma potete variare la grafica.

#Milestone 1: creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

#Milestone 2:
verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

#Milestone 3:
invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

?Milestone 4 (BONUS): gestire ulteriori parametri per la password:
permettere o meno la ripetizione dello stesso carattere
Scegliere il set di caratteri tra numeri, lettere, simboli o qualsiasi combinazione di essi (anche tutti, ma almeno uno)
Milestone 5 (BONUS): Aggiungere la validazione
*/

// Prendo la funzione da un file esterno 
include './functions.php';

// Starto la sessione e invio la password tramite $_SESSION
session_start();
$_SESSION['pass'] = randomPassword();

// Redirecto al file password.php all'invio del form
if (!empty($_SESSION['pass']))
    header('Location: password.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

</head>

<body>
    <form action="#" class="w-50 mx-auto py-5" method="get">
        <div class="mb-3 w-50 mx-auto mx-2 d-flex">
            <input type="number" class="form-control" name="pass_length" placeholder="Inserisci la lunghezza della Password">
            <button type="submit" class="btn btn-primary ms-3">Submit</button>
        </div>

    </form>
</body>

</html>
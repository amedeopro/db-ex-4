<!-- Stampiamo a schermo una tabella con tutte le prenotazioni (id, prenotazione_id e ospite_id) da prenotazioni_has_ospiti. Quando cliccate sul un link (che sia l'id dell'ospite, un bottone o qualsiasi altra cosa) andrete in un'altra pagina che in base all'id dell'ospite cliccato ritornerà i dati anagrafici di quell'ospite. -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>

        <div class="container">

            <h1>Le nostre stanze</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prenotazione ID</th>
                        <th>Ospite ID</th>

                    </tr>
                </thead>
                <tbody>
                  <?php include 'database.php'; ?>
                  <?php foreach ($rooms as $room) { ?>
                  <tr>
                      <td><?php echo $room['id']; ?></td>
                      <td><?php echo $room['prenotazione_id']; ?></td>
                      <td> <a href="http://localhost/db-ex-4/dettaglio-ospite.php?idospite=<?php echo $room['ospite_id']; ?>"> <?php echo $room['ospite_id']; ?></a></td>
                  </tr>
                  <?php  } ?>
                </tbody>
            </table>

        </div>


    </body>
</html>

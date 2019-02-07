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
                        <th>Numero Stanza</th>
                        <th>Piano</th>
                        <th>Numero Letti</th>
                        <th>Creata il</th>
                        <th>Aggiornata il</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>
          <tr>
            <?php include 'database.php'; ?>
            <?php foreach ($rooms as $room) { ?>
              <td><?php echo $room['id']; ?></td>
              <td>{{room_number}}</td>
              <td>{{floor}}</td>
              <td>{{beds}}</td>
              <td>{{created_at}}</td>
              <td>{{updated_at}}</td>
          <?php  } ?>

          </tr>

    </body>
</html>

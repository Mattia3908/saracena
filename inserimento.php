<!DOCTYPE html>
<html>
    <head>
        <title>Inserimento nel db</title>
    </head>
    <body>
        <?php
            $conn = mysqli_connect("localhost","root", "", "giocatori");
            if ($conn->connect_error) {
            die("Connessione fallita". $conn->connect_error);  
            }
            $codice_giocatore = $_POST["cod_gioc"];
            $nome = $_POST["nome"];
            $cognome = $_POST["cognome"];
            $nazione = $_POST["nazione"];
            $stipendio = $_POST["stipendio"];

            $query_sql ="INSERT INTO
                            giocatori (cod_gioc, nome, cognome, nazione, stipendio)
                        VALUES ('$codice_giocatore', '$nome', '$cognome', '$nazione', '$stipendio');";
            $risultato = $conn->query($query_sql);

            if ($risultato == TRUE) {
                echo "Inserimento del giocatore avvenuta con successo";
            } else {
                echo "Query non avvenuta con successo: $query_sql";
            }
        ?>
    </body>
</html>

<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
        $paragrafo = 'Ahi quanto a dir qual era è cosa dura,
        esta selva selvaggia e aspra e forte
        che nel pensier rinova la paura!
        Ed una lupa, che di tutte brame
        sembiava carca ne la sua magrezza
        e molte genti fé già viver grame...
        "A te convien tenere altro viaggio,"
        rispuose, poi che lagrimar mi vide,
        "se vuoi campar desto loco selvaggio..."';
        
        $censura = $_GET['parola'];
        $fraseCensurata = str_replace($censura, '***', $paragrafo);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        

    <div>
        <form action="">
            <!-- il name dell'imput deve essere uguale alla GET della variabile della richiesta come a riga 18 -->
            <input name="parola" type="text" placeholder="inserisci la parola da censurare">
            <input type="submit" value="Invia">
        </form>
    </div>
            <h2>Il paragrafo è :</h2>
            <p>

                <?php echo $paragrafo; ?>
                <div>
                    <span>la lunghezza del paragrafo è lungo:</span>      
                    <?php echo strlen($paragrafo); ?>  
                </div>
            </p>
            <?php echo $fraseCensurata ;?>
            <div>
                    <span>la lunghezza del paragrafo è lungo:</span>      
                    <?php echo strlen($fraseCensurata); ?>  
                </div>
        </body>
        </html>
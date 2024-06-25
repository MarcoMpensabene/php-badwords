<?php  
$textParagraph = "Lewis Carroll : Le avventure di Alice nel paese delle meraviglie<br>
CAPITOLO I • GIÙ NELLA TANA DEL CONIGLIO<br>
Alice moriva di noia a starsene seduta con la sorella sulla proda, senza far niente; aveva
sbirciato un paio di volte il libro che la sorella stava leggendo, ma non c'erano figure né
dialoghi, «e a cosa serve un libro», pensava Alice, «senza figure né dialoghi?»
Stava dunque calcolando fra sé e sé (nei limiti concessi dal caldo di quella giornata
che le dava un senso di sonnolenza e di istupidimento) se il piacere di farsi una collana di
margherite fosse valsa la fatica di tirarsi in piedi per andare a raccogliere le margherite,
quando d'improvviso le sfrecciò accanto un coniglio bianco dagli occhi rosa.
Del fatto in sé non c'era troppo da meravigliarsi, né Alice trovò poi troppo
stravagante sentire che il Coniglio mormorava, «Ohimè! Ohimè! Farò tardi, troppo tardi!»
(ripensandoci, dopo, capì che in effetti ci sarebbe stato di che stupirsi; al momento però
tutto le parve perfettamente naturale); ma quando vide il Coniglio fare il gesto di estrarre
un orologio dal taschino del panciotto, guardarlo e riprendere di gran lena il passo, Alice
balzò in piedi, perché le era balenato nella mente che non aveva mai visto prima un
coniglio con un panciotto né tanto meno con un orologio dentro al taschino, e, bruciata
dalla febbre della curiosità, lo inseguì di corsa attraverso il campo dove fece appena in
tempo a vederlo sparire dentro una grossa tana sotto la siepe.";

$stringLenght = strlen($textParagraph);
// $cendoredText = str_replace("$_GET['censor-word']" , " *** " , "$textParagraph");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstPhp</title>
</head>
<body>
    <main>
        <div>
            <h1>Text NOT censored : </h1>
            <p><?php echo $textParagraph; ?>  </p>
            <h2>Length of the variable : <?php echo $stringLenght ?> </h2>
        </div>
        <form action="./index.php" method="GET">
            <label for="censor-word">Insert the word you want to censor : </label>
            <input type="text" name="censor-word" id="censor-word">
            <button type="submit">PRESS</button>
        </form>

        <div>
            <h1>CENSORED text : </h1>
            <p><?php echo $cendoredText; ?>  </p>
            <p><?php echo $_GET["censor-word"]; ?></p>
        </div>
    </main>
    
</body>
</html>

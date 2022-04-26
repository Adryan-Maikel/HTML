<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adryan Maikel :: maikeladryan@gmail.com">
    <meta name="description" content="Atividade dia 25/04 da aula 14, utilizando PHP.">
    <meta name="keywords" content="PHP, HTML, CSS, IF, Else">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Atividade Aula 14</title>
</head>
<body class="corpo">
    <main class="container">
        <header class="topo">
            <h1 class="text-center display-3">Atividades 2 PHP</h1>
        </header>
        <section class="text-center">
            <h2>Atividade 02</h2>
            <a href="index.php" class="btn btn-dark btn-lg">Voltar</a>
            <p>
                2. Desenvolva um algoritmo CONVERSOR, este deve ler número de anos (10), e deverá converter este ano para meses, converter ano para semana, converter ano para dias. Ex.: 1 ano, 12 meses, 52 semanas, 365 dias.
            </p>
            <p>
                <?php
                    $ano;
                    $meses;
                    $semanas;
                    $dias;
                    $ano = 10;
                    $meses = $ano*12;
                    $semanas = $meses*4;
                    $dias = $semanas*7;
                    echo 'O total de '.$ano.' anos tem '.$meses.' meses, '.$semanas.' semanas, '.$dias.' dias.'
                ?>

            </p>
        </section>
        <footer class="text-center">
            <address>Adryan Maikel &#128187;</address>
        </footer>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>


    <style>
        h1 {
            font-size: 38px;
            text-align: center;
            color: #fff;
            background-color: rgb(12, 12, 57);
        }

        form {
            float: left;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            padding: 20px 40px 20px 40px;
            box-shadow: 5px 5px 10px #0a0505;
            background-color: #fefdfd;
            border-radius: 10px;
            margin-left: 50px;
            border: 4px solid #462e2b;
        }

        input {
            text-align: center;
        }
        h2{
            padding: 10px;
            font-size: 20px;
            text-align: center;
            color: #fff;
            background-color: rgb(12, 12, 57);
        }
    </style>
</head>

<body>

    <h1>Lista de Tarefas:</h1>

    <?php

    $quantTarefas = (int) ($_POST["numTarefa"]);
    ?>

    <form action="Agenda4.php" method="post">
        <h2>Tarefas:</h2>

        <?php
        for ($i = 0; $i < $quantTarefas; $i++) {
            echo '<br><label>Insira a Tarefa</label><br>
                <input type="text" id="tarefa' . $i . '"name="tarefa[]" required><br>';
        }

        ?>

        <input type="hidden" name="quantTarefas" value="<?php echo $quantTarefas; ?>">

        <br><br>
        <button type="submit" name="btnFinalizar">Finalizar</button>

    </form>

</body>

</html>
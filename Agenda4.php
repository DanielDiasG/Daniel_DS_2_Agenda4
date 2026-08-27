<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veja a sua Lista de Tarefas</title>


    <style>
        h1 {
            font-size: 38px;
            text-align: center;
            color: #fff;
            background-color: rgb(12, 12, 57);
        }

        table {
            width: 60%;
            text-align: center;
            float: left;
            padding: 20px;
            margin: 20px;
            box-shadow: 5px 5px 10px #0a0505;
            border: 4px solid #462e2b;
            background-color: #fefdfd;
            border-radius: 10px;
        }


        th {
            padding: 10px;
            background-color: #140e49;
            color: #fff;

        }

        td {
            padding: 20px 20px;
            background-color: rgb(208, 208, 213);
            color: black;
            border-radius: 5px;

        }

        div {
            float: left;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            padding: 20px 40px 20px 40px;
            box-shadow: 5px 5px 10px #0a0505;
            border: 4px solid #462e2b;
            background-color: #fefdfd;
            border-radius: 10px;
            margin-left: 50px;
        }

        input {
            text-align: center;
        }

        h2 {
            padding: 10px;
            font-size: 20px;
            text-align: center;
            color: #fff;
            background-color: rgb(12, 12, 57);
        }
    </style>
</head>

<body>

    <h1> Veja a sua Lista de Tarefas:</h1>

    <?php
    $numTarefas = (int) ($_POST['quantTarefas'] ?? 0);


    $listaCompleta = listaCompleta($numTarefas);
    function listaCompleta($numTarefas)
    {
        $lista = [];

        for ($i = 0; $i < $numTarefas; $i++) {

            if (isset($_POST['tarefa'][$i])) {
                $lista[] = $_POST['tarefa'][$i];
            }
        }

        return $lista;
    }

    echo '<div><h2>Tarefas:</h2>';
    foreach ($listaCompleta as $i => $tarefa) {
        echo '<br><label>Insira a Tarefa</label><br><input type="text" value="' . htmlspecialchars($tarefa) . '" <br><br>';
    }
    echo "</div>";


    echo '<table >';
    echo '<tr >';
    echo '<th>Lista - </th>';
    echo '</tr>';

    foreach ($listaCompleta as $i => $tarefa) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($tarefa) . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    ?>

</body>

</html>
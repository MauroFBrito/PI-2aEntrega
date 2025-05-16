<?php
session_start();

if (!isset($_SESSION["usuario"])){
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="notificacoes.css">

    <title>Document</title>
</head>
<body>
   
    <?php

    $db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', '123*Mudar'); 
    $consulta = $db->query('SELECT * FROM notificacoes'); 
    $notificacoes = $consulta->fetchAll(); 

    echo '<h1> Lista de notificações para ';
    echo $_SESSION["usuario"];
    echo '</h1>';

    echo '<table>';
        
        echo '<tr>';
            echo '<th>Nome da Vacina</th>';
            echo '<th>Informações da Vacina</th>';
            echo '<th>Locais para Vacinação</th>';
            echo '<th>Agendar nova Notificação</th>';
        echo '</tr>';

        echo '<tbody>';

            foreach ($notificacoes as $not) {
                if ($not['usuario']==$_SESSION['id']){
                    echo '<tr>';
                        echo '<td>';
                        echo $not['nome_vacina'];
                        echo '</td>';
                        echo '<td>';
                        echo $not['info_vacina'];
                        echo '</td>';
                        echo '<td>';
                        echo $not['local_vacina'];
                        echo '</td>';
                        
                        echo '<td> <a class="nav-link" href="#modalMeNotifique" data-toggle="modal">Me Notifique</a> </td>';
                    echo'</tr>';
                }
            }
        echo'</tbody>';
    echo '</table>';
?>

    <!-- MODAL para Agendamento -->
    <div class="modal fade" id="modalMeNotifique" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloModal">
                        Notificaçao Agendada !
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

     


</body>
</html>
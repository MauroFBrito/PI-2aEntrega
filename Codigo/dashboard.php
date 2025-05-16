<?php
session_start();

if (!isset($_SESSION["usuario"])){
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
</head>
<body>



    <header>
        <h2>SISTEMA VACINA</h2>
        <br>
        <h2>Bem-vindo, <?php echo $_SESSION["usuario"]; ?>!</h2>

        <hr/>
    </header>

    <aside id="menu_lateral">
        
        <hr/>
        <nav>
            <br>
            <h3>Opções</h3>
            <ul>
            <li>
                <a href="notificacoes.php">Visualizar notificações</a>
            </li>
            <li>
                <a href="#">Opção 2</a>
            </li>
            <li>
                <a href="#">Opção 3</a>
            </li>

            </ul>
        </nav>    <!-- indicar qual é o menu principal do site -->
        <br>
        <hr/>
        <br>
        <a href="logout.php">Sair</a>
       
    </aside>
    <main>    <!-- serve para definir o conteúdo principal da página o assunto -->
    
    </main>

    <footer>  <!-- indicar o texto do rodapé, seja de toda a página ou de cada seção (section) da página -->
        <p>Desenvolvido por Senac Grupo 24 - Todos os direitos reservados</p>
    </footer>


</body>
</html>
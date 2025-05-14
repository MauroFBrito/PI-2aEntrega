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
    <h2>Bem-vindo, <?php echo $_SESSION["usuario"]; ?>!</h2>
    <p>Você está na área restrita.</p>
    <a href="logout.php">Sair</a>

    <header>
        <h2>SISTEMA VACINA</h2>
        <br>
        <hr/>
    </header>

    <aside id="menu_lateral">
        <!--<div id="Psico.bmp"></div>
         usar <div> quando você não puder utilizar nenhuma outra das tags semânticas 
        Como não existe uma tag específica para fotos, vamos utilizar uma tag <div>-->
        <h1>Senac Grupo</h1>
        <br>
        <hr/>
        <nav>
            <br>
            <h3>Opções</h3>
            <br>
            <ul>
            <li>
                <a href="notificacoes.php">Clique neste trecho para notificações</a>
            </li>
            <li class="nav-item">
                <!-- <button type="button" class="btn-primary" data-toggle="modal" data-target="#modalExemplo"> -->
                <a class="nav-link" href="#modalExemplo" data-toggle="modal">Login</a>

                <!-- </button> -->
            </li>                
                <li>Facebook</li>
                <li>Linkedin</li>
                <li>Instagram</li>
                <li>E-mail</li>
                <li>Whatsapp</li>
            </ul>
        </nav>    <!-- indicar qual é o menu principal do site -->
        <br>
        <hr/>
        <br>
        <h3>FORMAÇÃO</h3>
        <br>
        <p class="destaque-vermelho">Análise e Desenvolvimento</p>
        <br>
        <p>Centro Universitario</p>
        <br>
        <p>2019-2023</p>
        <br>
        <p>Descrever trabalho em monitoria</p>
        <br>
    </aside>
    <main>    <!-- serve para definir o conteúdo principal da página o assunto -->
        <section>  <!-- serve para dividir cada sessão do conteúdo -->
            <h3>Experiencia Profissional</h3>
            <br>
            
            <p class="destaque-vermelho">Seu ultimo cargo aqui / 2012-2019</p>
            <br>
            <p>Nome da Empresa</p>
            <br>
            <p>Descrevendo funçoes em ate tres linhas evitando pronomes</p>
            <br>
            <br>
        </section>      
        <section>
            <hr/>
            <h3>Portfólio</h3>
            <div class="job">1o Job</div>
            <div class="job">2o Job</div>
            <div class="job">3o Job</div>
            <div class="job">4o Job</div>
            <div class="job">5o Job</div>
            <div class="job">6o Job</div>
        </section>
    </main>

    <footer>  <!-- indicar o texto do rodapé, seja de toda a página ou de cada seção (section) da página -->
        <p>Desenvolvido por Mauro Brito - Todos os direitos reservados</p>
    </footer>


</body>
</html>
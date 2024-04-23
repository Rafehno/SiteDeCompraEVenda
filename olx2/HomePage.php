    
<?php
/*
    include('conexao.php')

    $pesquisa = $_GET['busca'];
    $regiao = $_GET['Região'];
    $filtro = $_GET['Filtro'];
    $sql_code = "SELECT * FROM anuncios WHERE regiao LIKE '%$regiao%' AND filtro LIKE '%$filtro%' AND pesquisa LIKE '%$pesquisa%'"
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLX2</title>
    <link rel="stylesheet" href="páginas/funcionamentos/css/style.css"/>
        <a class="barraCima"><a class = "cantoEsquerdo"></a><a class = "cantoDireito"></a></a>
        <a href="HomePage.php"><img src="páginas/funcionamentos/imgs/logo.png" class="logo" alt="image" height="75" width="75"></a>
            <div class="menu">
                <button class="notific" id="notific">🔔</button>
                <a href="páginas/userScreen.php" id="user" class="user"><img src="páginas/funcionamentos/imgs/usuario.png" class="fotoUser"></a>
                <a href="páginas/login.php" class="logar" id="logar">Login</a>
                <a href="páginas/cadastrar.php"  class="cadastro" id="cadastro">Cadastrar</a>
                <button class="bnt">🌗</button>
             </div>
</head>
    <body class="white-mode">
        
    <form>
<div class="filtros"><select name="Região" class="filtro">
    <option value="">Selecione a Região</option>
    <option value="Sul">Sul</option>
    <option value="Sudeste">Sudeste</option>
    <option value="Centro-Oeste">Centro-Oeste</option>
    <option value="Nordeste">Nordeste</option>
    <option value="Norte">Norte</option>
</select>
        <select name="Filtro" class="filtro">
        <option value="">Selecione a Categoria</option>
        <option value="Eletrônico">Eletrônico</option>
        <option value="Cozinha">Cozinha</option>
        </select></div>
    <div id="buscador">
        
        <input name="busca" type="text" id="txtbusca" placeholder="pesquisar" class="barraPesquisa"/>
        <button type="submit" id="botaopesquisa" class="botaopesquisa">🔍</button>
        </form>

    <div>
        <div class="anuncioDestaque" style="top: 25%; left: 2%" id="ad1"></div>
            <div class="tituloAnuncioDestaque" style="top: 28%; left: 4%" id="ad1">a</div>
                <div></div>
            <div class="precoAnuncioDestaque" style="top: 33%; left: 6%" id="ad1">b</div>
        <div class="anuncioDestaque" style="top: 25%; left: 34.5%" id="ad1"></div>
            <div class="tituloAnuncioDestaque" style="top: 28%; left: 36.5%" id="ad1">c</div>
                <div></div>
            <div class="precoAnuncioDestaque" style="top: 33%; left: 38.5%" id="ad1">d</div>
        <div class="anuncioDestaque" style="top: 25%; left: 67%" id="ad1"></div>
            <div class="tituloAnuncioDestaque" style="top: 28%; left: 69%" id="ad1">e</div>
                <div></div>
            <div class="precoAnuncioDestaque" style="top: 33%; left: 71%" id="ad1">f</div>
    </div>
</body>
<footer>
    <a class="barraBaixo"><a class = "cantoEsquerdoB"></a><a class = "cantoDireitoB"></a></a>
    <a class="rodape">informações-blablabla</a>
    <a href="páginas/SAC.php" class="SAC">SAC<a>

        <div class="modal" id="JanelaModal">
                      <a href="páginas/funcionamentos/notific.php"></a>
                    </div>

    <script src="páginas/funcionamentos/JS/function.js"></script>
</footer>
</html>
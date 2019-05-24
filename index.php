<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
    
</head>
<body>
    <div id="cabecalho">
        <h1> Seja bem-vindo(a)! </h1>
    </div>
    <div id="menu">
        <nav>
            <ul>
                <li><a href="?pg=Home">Home</a></li>

                 <li><a href="?pg=sobre">História do Radioamadorismo</a></li>
                
                <li><a href="?pg=Contato">Contato</a></li>

                <li><a href="?pg=formulario">Forulário</a></li>

                <li><a href="?pg=consulta">Consulta</a></li>

                <li><a href="?pg=formulario_px">Formulario PX</a></li>

            </ul>
        </nav>

    </div>
    <div id="corpo">

    <?php

    switch ($_GET['pg']) {
        case 'Home':
            include_once('Home.php');
            break;

        case 'Contato':
            include_once('Contato.php');
            break;

        case 'sobre':
            include_once('Sobre.html');
            break;

        case 'formulario':
            include_once('formulario.html');
            break;

        case 'consulta':
            include_once('consulta.html');
            break;


         case 'formulario_px':
            include_once('formulario_px.html');
            break;
        
        default:
            # code...
            break;
    }



    ?>
        


    </div>
   


    <div id="rodape">
        <p> Projeto 2019 of PU4BYZ</p>

    </div>
    
</body>
</html>
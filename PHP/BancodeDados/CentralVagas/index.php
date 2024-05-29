

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central de vagas</title>
    <style>
        body {
            margin: 0;
            /* Remove margens padrão */
            height: 100vh;
            /* Ocupa a altura total da janela de visualização */
            position: relative;
            color: white;
            /* Muda a cor do texto para melhor contraste */
        }

        body::before {
            content: "";
            background: linear-gradient(to bottom, #0000ff, #00ffff), url('img/guri.png');
            /* Atualize com o caminho da sua imagem */
            background-blend-mode: overlay;
            /* Mistura o gradiente e a imagem */
            background-size: cover;
            /* Cobrir toda a tela */
            background-position: center;
            /* Centralizar a imagem */
            background-repeat: no-repeat;
            /* Não repetir a imagem */
            opacity: 0.5;
            /* Ajuste a opacidade conforme necessário */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            /* Coloca a imagem atrás do conteúdo */
        }

        .container {
                
            padding: 20px;
            border-radius: 10px;
            /* Bordas arredondadas */
            color: blue;
            /* Texto azul */
            margin-bottom: 30px; /* Espaçamento entre os blocos */
            margin-left: auto; /* Alinha ao centro */
            margin-right: auto; /* Alinha ao centro */
            text-align: center; /* Alinha o texto ao centro */
        }
        .container a {
            word-spacing: 10px; /* Espaçamento entre palavras */
        }


        h1 {
            text-align: center;
            margin-top: 20px;
            color: white;
            
        }

        .table {
            background-color: transparent;
            /* Fundo transparente */
            color: white;
            margin-top: 20px;
        }

        .table th,
        .table td {
            color: white;
            background-color: transparent;
            /* Fundo transparente para células */
        }
    </style>
</head>

<body>
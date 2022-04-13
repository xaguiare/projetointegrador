<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body{
            margin: auto;
            display: table;
            background-color: #FFEFD5 ;
        }
        #container{
            margin:auto;
            width:960px;
            float:center;
        }
        #topo{            
            width:960px;
            float:left;
            height:20px;
            padding:10px;
        }
        #menu{            
            width:960px;
            float:left;
            margin-top:10px;
            margin-bottom:10px;
        }
        #menu a{            
            display:inline;
            text-decoration:none;
            padding:10px;
            color: #000;
        }
        #menu a:hover{            
            background:#ddd ;
            text-decoration:underline;
        }

    </style>
      <script>
    function excluir(id){
        if(confirm('deseja realmente excluir este produto?')){
        location.href='excluir.php?id'+id;
        }
    }
    </script>
   
</head>
<body>
    <div id="container">
        <div id="topo">
            SISTEMA DE PRODUTOS
        </div>
        <div id="menu">
            <a href="cadastrar.php">Novo Produto</a>
            <br/>
            <a href="consulta.php">Consultar Produto</a>
            <br/>
            
<a href="sair.php">Sair</a>
<br/>
            
        </div>
        <div id="conteudo">

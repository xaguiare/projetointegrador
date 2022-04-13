
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/validacao.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
    
</head>
<style>
        body{
            margin: auto;
            display: table;
            background-color: #FFEFD5 ;
            background-image: url(https://wallpaperaccess.com/full/5771504.jpg);
            background-repeat: no-repeat;
            background-size:  1600px 900px;;
      }
.container{
    text-align: center;
}
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
#floatingInput {
    color: black;
}
#floatingPassword {
    color: black;
}
#nomeLogin {
    color: white;
}
</style>

<body>


<div class="container">
<main class="form-signin">
  <form action="login.php" method="post">
  <br>
    <h1 id="nomeLogin" class="h3 mb-3 fw-normal">Entrar </h1>

    <div class="form-floating">
      <input type="text" name ="login" class="form-control" id="floatingInput">
      <label for="floatingInput">Login</label>
    </div><br>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword">
      <label for="floatingPassword">Senha</label>

      
<a href="cadastrarnovouser.php"  >Novo cadastro</a>
<br/>
    </div>
    <br>
    <div class="checkbox mb-3">
      
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" class="form-control" value="login">Entrar</button>
    <p class="mt-5 mb-3 " style=" color: white;">© 2015 – 2022</p>
  </form>
<?php 
if(isset($_GET["msg"])){
echo $_GET["msg"];
}
?>
</main>


</div>
</body>
</html>
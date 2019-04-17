<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Gerenciamento de Usuários</title>

    <style>
            html,body {
        height: 100%;
      }

      body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f9f9f9;
      }

      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .checkbox {
        font-weight: 400;
      }
      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;     
      }      
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 0;
        border-top-left-radius: 0;        
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>
  </head>

  <body class="text-center">

    <?php require 'config.php'; 

     if(isset($_POST['nome']) && empty ($_POST['nome']) == false) { 

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $inserirusuario = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $pdo->query($inserirusuario);

    header("Location: index.php");

    }

    ?>    
    <form method="post" class="form-signin">
      <input type="text" class="form-control" placeholder="nome" name="nome" required autofocus>      
      <input type="email" class="form-control" placeholder="e-mail" name="email" required>
      <input type="password" class="form-control" placeholder="senha" name="senha" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar novo usuário</button>
      <p class="mt-5 mb-3 text-muted">&copy; Pepe Corporation</p>
    </form>
  </body>

</html>

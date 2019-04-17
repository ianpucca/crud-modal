<!-- <!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <style type="text/css">body {background-color: #f9f9f9;}</style>

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
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;      
      }
    </style>

  </head>
  <body class="text-center">

<?php

// require 'config.php';

// $id = 0;

// if(isset($_GET['id']) && empty($_GET['id']) == false) {
// 	$id = addslashes($_GET['id']);
// }
// 	if(isset($_POST['nome']) && empty ($_POST['nome']) == false) {
//      	$nome = addslashes($_POST['nome']);
//      	$email = addslashes($_POST['email']);  
     	
//      	$atualizarusuario = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
//      	$pdo->query($atualizarusuario);

//      	header("Location: index.php");
// }
// 	$pegarusuario = "SELECT * FROM usuarios WHERE id = '$id'";
// 	$pegarusuario = $pdo->query($pegarusuario);
// 	if ($pegarusuario->rowCount() > 0) {
// 		$dado = $pegarusuario->fetch();
// 	} else {
// 		header("Location: index.php");	
// 	}
?>
  </body>
</html>     -->

<?php

require 'config.php';

$id = 0;

 if(isset($_POST['nome']) && empty ($_POST['nome']) == false) {
       $id = $_POST['id'];
       $nome = addslashes($_POST['nome']);
       $email = addslashes($_POST['email']);  
      
       $atualizarusuario = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
       $pdo->query($atualizarusuario);

       header("Location: index.php");
}

?>
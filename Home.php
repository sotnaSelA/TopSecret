<?php

use LDAP\Result;

  if(isset($_POST['submit'])){
    // print_r($_POST['nome']);
    // print_r($_POST['texto']);

      include_once('config.php');

    $nome = $_POST['nome'];
    $texto = $_POST['texto'];

    $result = mysqli_query($conexao, "INSERT INTO conteudo(nome,texto) value ('$nome','$texto')");
  }
?>

<?php

      include("config.php");
    $consulta = "SELECT * FROM conteudo";
    $con = $conexao->query($consulta) or die ($conexao->error);

?>



<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png">
    <title>Qual é o seu segredo??</title>
  </head>
  <body>
    <h1>Todos temos segredos, basta aprender com quem guardá-los.</h1>

      <div class="content">
        <form action="Home.php" method="POST" class="registra">
              <div id="area">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"><h4>NickName</h4></label>
                  <input type="text" name="nome" class="form-control" >
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label"> <h4>Qual é o seu segredo??</h4></label>
                  <textarea name="texto" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  <input class="btn-ind" type="submit" name="submit"  >
                  
                  </a>
                </div>
              </div>
        </form>

       
      
        <div id="result"> 
          <?php while($dados = $con->fetch_array()){ ?>

            <div class="post">
              
                <h5>Nome: <?php echo $dados["nome"];?></h5>
                <hr>
                <p><?php echo $dados["texto"];?></p>
                <br>         
            
            </div>
          <?php }?>      
      
        </div>
      </div>

    
          
                <script src="js/menu-mobile.js"></script>
        <!-- <div class="container"></div> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>
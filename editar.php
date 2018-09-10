<?php
  
  include_once 'php_action/db_connect.php';
  include_once 'includes/header.php';

  if(isset($_GET['id'])){
    $cod = mysqli_escape_string($connect, $_GET['id']);

    $sql = "select * from tbl_clientes where cod_clientes = '$cod'";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);
  }

?>

<div class="row">
  <div class="col s12 m6 push-m3">

    <h3 class="light">Editar Cliente</h3>

    <form action="php_action/update.php" method="POST">      

      <input type="hidden" name="id" value="<?php echo $dados['cod_clientes']; ?>">
      <div class="input-field col s12">
        <label for="nome">Nome:</label> 
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
      </div>

      <div class="input-field col s12">
        <label for="sobrenome">Sobrenome:</label> 
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
      </div>

      <div class="input-field col s12">
        <label for="email">Email:</label> 
        <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
      </div>

      <div class="input-field col s12">
        <label for="idade">Idade:</label> 
        <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
      </div>

      <button type="submit" name="btn_editar" class="btn">Alterar</button>
      <a href="index.php" class="btn green">Lista de Clientes</a>
    </form>    

  </div>

</div>

<?php
  
  include_once 'includes/footer.php';

?>
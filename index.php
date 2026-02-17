<?php
require_once __DIR__ . "/config/db.php";
require_once __DIR__ . "/src/controllers/UserController.php";

$userController = new UserController($pdo);
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['create'])){
      $userController->create($_POST['name'], $_POST['email']);
    }elseif(isset($_POST['update'])){

    }elseif(isset($_POST['delete'])){
  }
  }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="public\css\style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>


  <form id="createForm" method="POST">
    <h1>Usuários</h1>
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" id="createName" name="name" placeholder="Nome">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="createEmail" aria-describedby="emailHelp">
    </div>
    <button type="submit" name="creae" class="btn btn-primary">Adicionar</button>
  </form>

  <table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
      <?php       
      
      ?>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</body>

</html>
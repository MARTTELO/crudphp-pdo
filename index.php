<?php 
  require_once __DIR__ . "/config/db.php";
  require_once __DIR__ . "/src/controllers/UserController.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Usuários</h1>
    <form  class="formController"action="" id="createForm" method="POST">
      <input type="text" id="createName" name="name" placeholder=" Nome">
      <input type="email" id="createEmail" name="email" placeholder="E-mail">
      <button type="submit" name="create">Adicionar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>
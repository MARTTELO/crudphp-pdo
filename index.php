<?php
require_once __DIR__ . "/config/db.php";
require_once __DIR__ . "/src/controllers/UserController.php";

//faz conexao com o banco e adiciona e tras os dados
$userController = new UserController($pdo);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['create'])) {
    $userController->create(name: $_POST['name'], email: $_POST['email']);
  } elseif (isset($_POST['update'])) {
    $userController->update(id: $_POST['id'], name: $_POST['name'], email: $_POST['email']);

  } elseif (isset($_POST['delete'])) {
    $userController->delete(id: $_POST['id']);
  }
}


$users = $userController->index();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="public/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>


  <form id="createForm" method="POST">
    <h1>Usuários</h1>
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" id="createName" name="name" placeholder="Nome" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="createEmail" placeholder="E-mail"
        aria-describedby="emailHelp" required>
    </div>
    <button type="submit" name="create" class="btn btn-primary">Adicionar</button>
  </form>

  <table class="mt-5">
    <thead>
      <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Ações</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>

        <tr>
          <td> <?= $user['id'] ?></td>
          <td> <?= $user['name'] ?></td>
          <td> <?= $user['email'] ?></td>
          <td>
            <button class="edit-btn btn btn-warning" data-id="<?= $user['id'] ?>" data-name="<?= $user['name'] ?>"
              data-email="<?= $user['email'] ?>">
              Editar</button>
            <form method="POST" style="display:inline;">
              <input type="hidden" name="id" value="<?= $user['id'] ?>">
              <button type="submit" name="delete" class="delete-btn btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>

  <!-- Modal -->
  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="close-modal float-end">&times;</span>
      <h2>Editar Usuário</h2>

      <form method="POST">
        <input type="hidden" class="form-control" id="editId" name="id">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" id="editName" name="name" placeholder="Nome" required>
        
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="editEmail" name="email" placeholder="E-mail" required>
        <br>
        
        <button type="submit" class="btn btn-success" name="update">Atualizar</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbI TxI"
    crossorigin="anonymous"></script>
  <script src="public/js/script.js">

  </script>
</body>

</html>
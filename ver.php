<?php
include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD-PHP-VER</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2b0483360e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col py-3">
        <?php
        $query = mysqli_query($conecta, "SELECT * FROM user WHERE id=" . $_GET['id']);
        while ($result = mysqli_fetch_assoc($query)) {
        ?>
          <div class="card">
            <div>
              <div>
                <h1>Nome do Usuário</h1>
                <h2><?php echo $result['nome'] ?></h2>
                <br>
                <h1>Email do Usuário</h1>
                <h2><?php echo $result['email'] ?></h2>
                <br>
                <h1>Senha do Usuário</h1>
                <h2><?php echo $result['senha'] ?></h2>
                <br>
              </div>
              <a href="new_user.php?id=<?php echo $result['id'] ?>" class="btn btn-primary">Alterar</a>

            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>


</body>

</html>
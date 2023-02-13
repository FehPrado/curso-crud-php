<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD-PHP-INDEX</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2b0483360e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  

<a href="new_user.php?ref=<?php echo 'novo' ?>" class="btn btn-primary">Criar</a>
        <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = mysqli_query($conecta, "SELECT * FROM user ORDER BY nome");
            if (mysqli_num_rows($query) >= 1) {
              while ($result = mysqli_fetch_assoc($query)) {
            ?>

                <tr>
                  <td><?php echo $result['nome'] ?></td>
                  <td><?php echo $result['email'] ?></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ações
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="new_user.php?id=<?php echo $result['id'] ?>" >Alterar</a></li>
                        <li><a href='javascript:void(0)' onclick="if (confirm('Confirma exclusão do item?')) { location.href='apagar.php?id=<?php echo $result['id'] ?>' }" >Remover</a></li>
                        <li><a href="ver.php?id=<?php echo $result['id'] ?>" >Ver</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>
          </tbody>
        </table>



</body>
</html>
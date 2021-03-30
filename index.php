<?php
  $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_cruds;', 'root','');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $staement = $pdo->prepare('SELECT * FROM products ORDER BY date_created DESC');
  $staement->execute();
  $products = $staement->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Products</title>
  </head>
  <body>
  
  <div class="container">
    <h1>Products</h1>
    <a href="create.php" class="btn btn-primary">Create Product</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Item No.</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Created Date</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($products as $i => $product){ ?>
        <tr>
          <th scope="row"><?php echo $i+1 ?></th>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['description'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['date_created'] ?></td>
          <td><img src="<?php echo $product['image'] ?>" width="100px;" alt=""></td>
          <td>
            <a href="edit.php" class="btn btn-success">Edit</a>
            <a href="delete.php" class="btn btn-danger">Delete</a>
          </td>
          
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
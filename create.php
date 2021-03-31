<?php
  $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_cruds;', 'root','');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //declaring variables
    if(isset($_GET['submit'])){
        $title = $_GET['title'];
        $discription = $_GET['discription'];
        $price = $_GET['price'];
        $date = date('Y-m-d H:m:i');

     //database binding and query
        $statement = $pdo->prepare(
            "INSERT INTO products (title, description, image, price, date_created )
             VALUES(:title, :discription, :image,  :price, :date)");

             $statement->bindValue(':title', $title);
             $statement->bindValue(':discription', $discription);
             $statement->bindValue(':image', '');
             $statement->bindValue(':price', $price);
             $statement->bindValue(':date', $date);
             $statement->execute();

    }

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
<h1>Create Product</h1>
    <form class="col-sm-4" action="" method="get">
        <div class="form-group">
            <label>Image Upload</label>
            <input type="file" class="form-control" name="image" >
        </div>

        <div class="form-group">
            <label>Product Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" name="discription"></textarea>
        </div>

        <div class="form-group">
            <label>Product Price</label>
            <input type="number" step=".01" class="form-control" name="price">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
</body>
</html>
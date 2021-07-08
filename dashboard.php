<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <title>Admin - Dashboard</title>
</head>
<!--Coded with love by Mutiullah Samim-->
<style>
    #input{
        background: none;
        border: 1px solid #fff;
        border-radius: 2px;
        color: black;
    }
</style>

<body>
  <div class="h-100">
    <div class="d-flex h-100">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;
    position: fixed;">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <img src="img/logo.png.png" class="bi me-2 mr-3" width="40" height="32">
          <use xlink:href="#bootstrap"></use></img>
          <span class="fs-4">Admin - Dashboard</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              Add Post
            </a>
          </li>
          <li>
            <a href="edit.php" class="nav-link text-white">
              Edit Post
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              Orders
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              Products
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="partials/_logout.php" class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
            <img src="img/admin.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong class="ml-2">LogOut</strong>
          </a>
        </div>
      </div>
      <div class="container mt-3" style="margin-left: 19%;">
        <div class="alert alert-primary text-center" role="alert">
        Welcome :- <?php echo $_SESSION['username']; ?>
        </div>
        <h3 class="text-center py-3">Add a Post</h3>
        <form action="partials/_addpost.php" method="POST">
          <div class="row">
            <div class="col">
              <label for="inputEmail4" class="form-label">image1*:</label>
              <input type="text" id="input" class="form-control" name="image1" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
              <label for="inputEmail4" class="form-label">Category*:</label>
              <input type="text" class="form-control" id="input" name="category" placeholder="First name" aria-label="First name">
            </div>
          </div>
          <div class="cols">
            <label for="title">Title*:</label>
            <input class="form-control form-control-lg" id="input" name="title" type="text" placeholder="Title*">
          </div>
          <div class="cols">
            <label for="content1" class="mt-2">Content1*:</label>
            <textarea class="form-control" type="text" id="input" name="content1" rows="3"></textarea>
          </div>
          <div class="cols">
            <label for="content2" class="mt-2">Content2:</label>
            <textarea class="form-control" type="text" id="input" name="content2" rows="3"></textarea>
          </div>
          <div class="cols mt-2">
            <label for="exampleFormControl">Heading</label>
            <input class="form-control form-control-lg" id="input" type="text" name="heading" placeholder="Title*">
          </div>
          <div class="cols">
            <label for="Content3" class="mt-2">Content3*:</label>
            <textarea class="form-control" id="input" name="content3" rows="3"></textarea>
          </div>
          <div class="row my-2">
            <div class="col-md-6">
              <label for="image2" class="form-label">image2*:</label>
              <input type="text" class="form-control" name="image2" id="input">
            </div>
            <div class="col-md-6">
              <label for="highlights" class="form-label">Highlights:</label>
              <input type="text" class="form-control" name="highlights" id="input">
            </div>
          </div>
          <div class="cols">
            <label for="content4" class="mt-2">Content4*:</label>
            <textarea class="form-control" id="input" name="content4" rows="3"></textarea>
          </div>
          <div class="row my-2">
            <div class="col-md-6">
              <label for="video" class="form-label">Video:</label>
              <input type="text" class="form-control" name="video" id="input">
            </div>
            <div class="col-md-6">
              <label for="alias" class="form-label">Alias*:</label>
              <input type="text" class="form-control" name="alias" id="input">
            </div>
          </div>
          <div class="add-btn d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-dark mb-3">Add Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>
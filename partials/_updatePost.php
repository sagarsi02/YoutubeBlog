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
    <link rel="stylesheet" href="/tech/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Admin - Dashboard</title>
</head>
<!--Coded with love by Mutiullah Samim-->
<style>
    #input {
        background: none;
        border: 1px solid #000;
        border-radius: 2px;
        color: black;
    }
</style>


<body class="alert-primary">


    <!-- Toggle Data from database in input -->
    <?php
    include '_dbconnect.php';
    // error_reporting(0);
    $image1 = $_GET['image1'];
    $category = $_GET['category'];
    $title = $_GET['title'];
    $content1 = $_GET['content1'];
    $content2 = $_GET['content2'];
    $heading = $_GET['heading'];
    $content3 = $_GET['content3'];
    $image2 = $_GET['image2'];
    $highlight = $_GET['highlight'];
    $content4 = $_GET['content4'];
    $video = $_GET['video'];
    $alias = $_GET['alias'];
    ?>



    <div class="container mt-3">
        <div class="alert alert-success text-center" role="alert">
            Welcome :- Sagarsi@786 </div>
        <h3 class="text-center py-3">Add a Post</h3>
        <form action="_updatePost.php" method="GET">
        <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="row">
                <div class="col">
                    <label for="inputEmail4" class="form-label">image1*:</label>
                    <input type="text" id="input" value="<?php echo $image1; ?>" class="form-control" name="image1" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Category*:</label>
                    <input type="text" class="form-control" value="<?php echo $category; ?>" id="input" name="category" placeholder="First name" aria-label="First name">
                </div>
            </div>
            <div class="cols">
                <label for="title">Title*:</label>
                <input class="form-control form-control-lg" value="<?php echo $title; ?>" id="input" name="title" type="text" placeholder="Title*">
            </div>
            <div class="cols">
                <label for="content1" class="mt-2">Content1*:</label>
                <input class="form-control form-control-lg" type="text" value="<?php echo $content1; ?>" id="input" name="content1" rows="3"></input>
            </div>
            <div class="cols">
                <label for="content2" class="mt-2">Content2:</label>
                <input class="form-control" type="text" value="<?php echo $content2; ?>" id="input" name="content2" rows="3"></input>
            </div>
            <div class="cols mt-2">
                <label for="exampleFormControl">Heading</label>
                <input class="form-control form-control-lg" value="<?php echo $heading; ?>" id="input" type="text" name="heading" placeholder="Title*">
            </div>
            <div class="cols">
                <label for="Content3" class="mt-2">Content3*:</label>
                <input class="form-control" id="input" value="<?php echo $content3; ?>" name="content3" rows="3"></input>
            </div>
            <div class="row my-2">
                <div class="col-md-6">
                    <label for="image2" class="form-label">image2*:</label>
                    <input type="text" class="form-control" value="<?php echo $image2; ?>" name="image2" id="input">
                </div>
                <div class="col-md-6">
                    <label for="highlights" class="form-label">Highlights:</label>
                    <input type="text" class="form-control" value="<?php echo $highlight; ?>" name="highlights" id="input">
                </div>
            </div>
            <div class="cols">
                <label for="content4" class="mt-2">Content4*:</label>
                <input class="form-control" value="<?php echo $content4; ?>" id="input" name="content4" rows="3"></input>
            </div>
            <div class="row my-2">
                <div class="col-md-6">
                    <label for="video" class="form-label">Video:</label>
                    <input type="text" value="<?php echo $video; ?>" class="form-control" name="video" id="input">
                </div>
                <div class="col-md-6">
                    <label for="alias" class="form-label">Alias*:</label>
                    <input type="text" value="<?php echo $alias; ?>" class="form-control" name="alias" id="input">
                </div>
            </div>
            <div class="add-btn d-flex justify-content-center my-3">
                <button type="submit" name="submit" class="btn btn-dark mb-3">Update Post</button>
            </div>
        </form>
    </div>

</body>

</html>
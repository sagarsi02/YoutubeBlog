<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Technical First - About</title>
</head>

<body>

    <!-- navigation -->
    <?php include 'partials/_header.php'; ?>
    <!-- Database -->
    <?php include 'partials/_dbconnect.php'; ?>



    <!---------------------------------About------------------------------------->

    <div class="container" id="about-con">
        <h3 class="mt-3 pl-4">About Us</h3>
        <div class="line"></div>
        <div id="about" class="d-flex flex-wrap">
            <div class="about-img">
                <img src="img/logo.png.png" alt="">
            </div>
            <div class="about-intro">
                <h2>Technical First</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet cupiditate corrupti consequatur corporis a aperiam neque possimus facere voluptates reiciendis!</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                </ul>
            </div>
        </div>

        <div class="button m-5 d-flex justify-content-center">
            <button type="button" class="btn btn-outline-secondary m-2"><a class="text-decoration-none text-dark" href="#">Home</a></button>
            <button type="button" class="btn btn-outline-warning m-2"><a class="text-decoration-none text-dark" href="#">About</a></button>
            <button type="button" class="btn btn-outline-primary m-2"><a class="text-decoration-none text-dark" href="#">Contact</a></button>
            <button type="button" class="btn btn-outline-success m-2"><a class="text-decoration-none text-dark" href="#">Giveway</a></button>
            <button type="button" class="btn btn-outline-danger m-2"><a class="text-decoration-none text-dark" href="#">Subscrive</a></button>
        </div>

    </div>

    <!-------------------x-------------About------------------x------------------>






    <!-------- footer -------->
    <?php include 'partials/_footer.php'; ?>





    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Technical First</title>
</head>

<body>

    <!-- navigation -->
    <?php include 'partials/_header.php'; ?>
    <!-- Database -->
    <?php include 'partials/_dbconnect.php'; ?>





    <!--------------------------------Home------------------------------------>

    <section class="jumbotron text-center">
        <div class="container">
            <img src="img/logo.png.png" alt="logo" class="logo">
            <h1>Welcome to Technical First</h1>
            <p class="lead text-muted">Hello friends, Technical First is a YouTube channel where you get to know about the latest smartphones, laptops and tech gadgets. Along with this, there is also giveaway from where you can win a lot of things.</p>
            <p>
                <a href="https://www.youtube.com/technicalfirst" class="btn btn-danger my-2" target="_blank">Subscribe
                    Now</a>
                <a href="#" class="btn btn-success my-2">Giveway Participate</a>
            </p>
        </div>
    </section>

    <!-------------------x-------------Home------------------x------------------>



    <!--------------------------------Content------------------------------------>


    <div class="container row m-auto d-flex justify-content-center">

        <?php
        $sql = "SELECT * FROM `post`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $row['post_sno'];
            $image1 = $row['post_img1'];
            $category = $row['post_category'];
            $title = $row['post_title'];
            $date = $row['post_date'];
            $content1 = $row['post_content1'];
            $content2 = $row['post_content2'];
            $heading = $row['post_heading'];
            $content3 = $row['post_content3'];
            $image2 = $row['post_img2'];
            $highlights = $row['post_highlight'];
            $content4 = $row['post_content4'];
            $alias = $row['alias'];

            echo '<div class="col-lg-4">
                    <div class="blog-grid">
                        <a href="blog/'.$alias.'" class="px-btn-arrow text-decoration-none">
                            <div class="blog-img">
                                <div class="date">'.date("d M, Y", strtotime($date)).'</div> <img src="img/'.$image1.'" title="" height="250px" alt="">
                            </div>
                            <div class="blog-info">
                                <h5 style="color: #20247b;">'.$title.'</h5>
                                <p class="text-dark">'. substr($content1, 0,99).'...</p>
                                <div class="btn-bar"><span>Read More...</span> <i class="arrow"></i> </div>
                            </div>
                        </a>
                    </div>
                </div>';
        }

        ?>

    </div>

    <!-------------------x-------------Content------------------x------------------>
    <hr>



    <!-------- footer -------->
    <?php include 'partials/_footer.php'; ?>





    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
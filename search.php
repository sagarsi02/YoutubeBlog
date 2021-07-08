<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Query - <?php echo $_GET['query']; ?></title>
</head>

<body>

    <!-- navigation -->
    <?php include 'partials/_header.php'; ?>
    <!-- Database -->
    <?php include 'partials/_dbconnect.php'; ?>



    <div class="container">
    <h2 class="my-3">Search Results: <em class="text-secondary">"<?php echo $_GET['query']; ?>"</em></h2>
    </div>


    <!--------------------------------Content------------------------------------>
    <div class="container row mt-4 mx-auto d-flex justify-content-center">
        
    <?php
    $showAlert = false;
    $query = $_GET['query'];
    $sql = "SELECT * FROM post WHERE MATCH (post_title, post_content1) against('$query')";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $showAlert = true;
        $title = $row['post_title'];
        $content = $row['post_content1'];
        $image = $row['post_img1'];
        $alias = $row['alias'];
        $date = $row['post_date'];

        echo '<div class="col-lg-4">
                <div class="blog-grid">
                    <a href="blog/'.$alias.'" class="px-btn-arrow text-decoration-none">
                        <div class="blog-img">
                            <div class="date">'.date("d M, Y", strtotime($date)).'</div> <img src="img/'.$image.'" title="" height="250px" alt="">
                        </div>
                        <div class="blog-info">
                            <h5 style="color: #20247b;">'.$title.'</h5>
                            <p class="text-dark">'.$content.'</p>
                            <div class="btn-bar"><span>Read More...</span> <i class="arrow"></i> </div>
                        </div>
                    </a>
                </div>
            </div>';
    }
    if(!$showAlert){
        echo '<div class="jumbotron jumbotron-fluid px-5 py-3 my-3" style="background: #e2ecea; max-width: 900px; margin: auto;">
                <h1 class="display-5">No Search Result Found</h1>
                Suggestions:
                    <ul>
                        <li>Make sure that all words are spelled correctly.</li>
                        <li>Try different keywords.</li>
                        <li>Try more general keywords.</li>
                    </ul>
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
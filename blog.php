<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

    <title>Hello, world!</title>
</head>

<body>

    <!-- navigation -->
    <?php include 'partials/_header.php'; ?>
    <!-- Database -->
    <?php include 'partials/_dbconnect.php'; ?>



    <?php
    $alias = mysqli_real_escape_string($conn, $_GET['alias']);
    $sql = "SELECT * FROM `post` WHERE alias='$alias'";
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
        $video = $row['post_video'];
    }
    ?>



    <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <img src="../img/<?php echo $image1; ?>" title="" alt="">
                        </div>
                        <div class="article-title">
                            <h6><a href="#"><?php echo $category; ?></a></h6>
                            <h2><?php echo $title; ?></h2>
                            <div class="media">
                                <div class="avatar">
                                    <img src="../img/admin.jpg" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <label>Admin</label>
                                    <span><?php echo date("d M, Y", strtotime($date)) ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p><?php echo $content1; ?></p>
                            <p><?php echo $content2; ?></p>

                            <h4><?php echo $heading; ?></h4>

                            <p>
                                <?php echo $content3; ?>
                            </p>
                            <div class="article-img">
                                <img src="../img/<?php echo $image2; ?>" title="" alt="">
                            </div>
                            <blockquote>
                                <p>
                                    <?php echo $highlights; ?>
                                </p>
                                <p class="blockquote-footer">Someone famous in <cite title="Source Title">
                                        Dick Grayson</cite>
                                </p>
                            </blockquote>
                            <p><?php echo $content4; ?></p>
                        </div>
                        <div class="nav tag-cloud">
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">Travel</a>
                            <a href="#">Web Design</a>
                            <a href="#">Marketing</a>
                            <a href="#">Research</a>
                            <a href="#">Managment</a>
                        </div>
                    </article>
                </div>

                <!-- SideBar start Here -->

                <div class="col-lg-4 m-15px-tb blog-aside">
                    <!-- Author -->
                    <div class="widget widget-author">
                        <div class="widget-title">
                            <h3>Author</h3>
                        </div>
                        <div class="widget-body">
                            <div class="media align-items-center">
                                <div class="avatar">
                                    <img src="../img/admin.jpg" title="" alt="">
                                </div>
                                <div class="media-body">
                                    <h6>Hello, I'm<br>Sagar Singh</h6>
                                </div>
                            </div>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores</p>
                        </div>
                    </div>
                    <!-- End Author -->

                    <!-- widget Tags -->
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>Post Related Video</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <?php echo $video; ?>
                            </div>
                        </div>
                    </div>
                    <!-- End widget Tags -->

                    <!-- Latest Post -->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Latest Post</h3>
                        </div>
                        <div class="widget-body">

                            <?php
                            $sql = "SELECT * FROM `post` LIMIT 3";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $image1 = $row['post_img1'];
                                $category = $row['post_category'];
                                $title = $row['post_title'];
                                $date = $row['post_date'];
                                $alias = $row['alias'];

                                echo '<div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="'.$alias.'">'.$title.'</a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="name">
                                                '.$category.'
                                                </a>
                                                <a class="date">
                                                    '.date("d M, Y", strtotime($date)).'
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <img src="../img/'.$image1.'" alt="Post">
                                        </div>
                                    </div>';
                            }
                            ?>



                        </div>
                    </div>
                    <!-- End Latest Post -->


                    <!-- Comment Section -->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Comments</h3>
                        </div>
                        <div class="widget-body">
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5>
                                            <li>Youtube is an american companny.</li>
                                        </h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Comment Section -->
                </div>
            </div>
        </div>
    </div>


    <br>


    <!-------- footer -------->
    <?php include 'partials/_footer.php'; ?>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>
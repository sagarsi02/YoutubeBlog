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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Admin - Dashboard</title>
</head>
<!--Coded with love by Mutiullah Samim-->

<body>

    <div class="h-100">
        <div class="d-flex h-100">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;
    position: fixed;">
                <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="img/logo.png.png" class="bi me-2 mr-3" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                    </img>
                    <span class="fs-4">Admin - Dashboard</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link text-white" aria-current="page">
                            Add Post
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white active">
                            Edit or Delete Post
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
                    Welcome :-
                    <?php echo $_SESSION['username']; ?>
                </div>
                <h3 class="text-center py-2">Edit or Delete a Post</h3>

                <?php
                $delete = false;
                include 'partials/_dbconnect.php';
                //Delete Section
                if (isset($_GET['delete'])) {
                    $sno = $_GET['delete'];
                    $delete = true;
                    $sql = "DELETE FROM `post` WHERE `post`.`post_sno` = $sno";
                    $result = mysqli_query($conn, $sql);
                }

                $sql = "SELECT * FROM `post`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {

                    $sno = $sno + 1;
                    $psno = $row['post_sno'];
                    $image1 = $row['post_img1'];
                    $category = $row['post_category'];
                    $title = $row['post_title'];
                    $content1 = $row['post_content1'];
                    $content2 = $row['post_content2'];
                    $heading = $row['post_heading'];
                    $content3 = $row['post_content3'];
                    $image2 = $row['post_img2'];
                    $highlight = $row['post_highlight'];
                    $content4 = $row['post_content4'];
                    $video = $row['post_video'];
                    $alias = $row['alias'];
                    $date = $row['post_date'];

                    echo '<div class="jumbotron py-2 px-2">
                                <div class="container d-flex w-100">
                                    <div class="post-sno display-4 mr-2" style="width: 3%;" id="postSno">
                                    ' . $sno . '
                                    </div>
                                    <div class="posts" style="width: 80%;">
                                    <h5 class="display">' . $title . '</h5>
                                    <p class="leads mb-0">
                                        ' . substr($content1, 0, 99) . '...
                                    </p>
                                    </div>
                                    <div class="edit-del" style="width: 17%;">
                                    <a href="partials/_updatePost.php?sno=' .$psno.'&image1='.$image1.'&category=' .$category.'&title=' .$title.'&content1='.$content1.'&content2=' .$content2.'&heading='.$heading.'&content3='.$content3.'&image2='.$image2.'&highlight='.$highlight.'&content4='.$content4.'&video='.$video.'&alias='.$alias.'" type="button" class=" edit btn btn-warning text-dark" id="edit">Edit</a>

                                    <button type="button" class=" delete btn btn-danger text-light" id=d"' . $psno . '">Delete</button>
                                    <p class="mb-0">Posted date: ' . date("d M, Y", strtotime($date)) . '</p>
                                    </div>
                                </div>
                            </div>';
                }

                ?>


            </div>
        </div>
    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <script>
        // Update Section
        // edits = document.getElementsByClassName('edit');
        // Array.from(edits).forEach((element) => {
        //     element.addEventListener("click", (e) => {
        //         console.log("edit", e.target.parentNode.parentNode);
        //         div = e.target.parentNode.parentNode;
        //         title = div.getElementsByClassName("posts")[0].innerText;
        //         content = div.getElementsByTagName("div")[1].innerText;
        //         console.log(title, content);
        //         titleEdit.value = title;
        //         contentEdit.value = content;
        //         $('#editModal').modal('toggle');


        //     })
        // })


        //Delete Section
        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit", e.target.parentNode.parentNode);
                sno = e.target.id.substr(1, );

                if (confirm("are you sure?")) {
                    console.log("yes");
                    window.location = `/tech/edit.php?delete=${sno}`;
                    // Todo: 
                } else {
                    console.log("no");
                }

            })
        })
    </script>

</body>

</html>
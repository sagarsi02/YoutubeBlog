<?php
$insert = false;
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		include '_dbconnect.php';
		$image1 = $_POST['image1'];
		$category = $_POST['category'];
		$title = $_POST['title'];
		$content1 = $_POST['content1'];
		$content2 = $_POST['content2'];
		$heading = $_POST['heading'];
		$content3 = $_POST['content3'];
		$image2 = $_POST['image2'];
		$highlights = $_POST['highlights'];
		$content4 = $_POST['content4'];
		$video = $_POST['video'];
		$alias = $_POST['alias'];

		$sql = "INSERT INTO `post` (`post_img1`, `post_category`, `post_title`, `post_date`, `post_content1`, `post_content2`, `post_heading`, `post_content3`, `post_img2`, `post_highlight`, `post_content4`, `post_video`, `alias`) VALUES ('$image1', '$category', '$title', current_timestamp(), '$content1', '$content2', '$heading', '$content3', '$image2', '$highlights', '$content4', '$video', '$alias')";
		$result = mysqli_query($conn, $sql);
        if($result){
            $insert = true;
            header("location: /tech/dashboard.php");
        }
        else {
            echo "Your post has been not submitted successfully" . mysqli_error($conn);
        }
		
	}

?>
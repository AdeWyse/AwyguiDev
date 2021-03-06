<?php
namespace bp\public\Shared;
session_start();

use bp\source\Model\PostControl;
use bp\source\Entities\Post;
$pg = $_GET['pg'];
$postControl = new PostControl();
$postsResponse = $postControl->getPostsPgFromDb($pg);
$posts = $postsResponse[0];
$totalPages = $postsResponse[1];

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AwyguiDev</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital@0;1&family=Quantico:ital,wght@0,400;0,700;1,700&family=Roboto+Mono:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/../css/reset-normalize.css">
	<link rel="stylesheet" href="/../css/style.css">
	<link rel="stylesheet" href="/../css/header.css">
	<link rel="stylesheet" href="/../css/footer.css">
	<script src="https://kit.fontawesome.com/8aed76c6c9.js" crossorigin="anonymous"></script>
</head>

<body>
<script src="/scripts/jquery.js"></script>
<header>
    <div class="head">
	    <h1 class="title-Site"><a><span class="title-Site1">Awygui</span><span class="title-Site2">Dev</span></a></h1>

        <nav class="menu-links">
            <ul class="menu-links-list">
                <li><a href="/home">Home</a></li>
                <li><a href="/posts?pg=1&tp=<?php echo $totalPages;?>">Posts</a></li>
	            <li><a href="/about">About</a></li>
                <li><a href="/home">Portifolio</a></li>
	            <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
	    <nav class="menu-socials">
	        <ul class="menu-socials-list">
		        <li><a href="index.php"><i class="fa fa-youtube"></i></a></li>
		        <li><a href="index.php"><i class="fa fa-github"></i></a></li>
		        <li><a href="index.php"><i class="fa fa-instagram"></i></a></li>
		        <li><a href="index.php"><i class="fa fa-linkedin"></i></a></li>
	        </ul>
        </nav>
    </div>
</header>

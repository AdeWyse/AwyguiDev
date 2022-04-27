<?php

use bp\source\Model\PostControl;

	$postControl = new PostControl();
	$posts = $postControl->getPostsFromDb();
require_once __DIR__.'/shared/header.php';
?>
<main>
<script>
	var postsList = <?= $posts?>;
	var postArray = new Array();
	postArray = postsList;
	let i = 0;
	for(i =0; i<postArray.length; i++){

	}
</script>
</main>
<?php
require_once __DIR__.'/shared/footer.php'
?>

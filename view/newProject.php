<?php

use bp\source\Model\LoginControl as LoginControl;
use bp\source\Model\PostControl;

require_once __DIR__.'/shared/header.php';
?>
<main>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	<link rel="stylesheet" href="/css/newPostProject.css">

	<div class="middle">
		<div class="card">
			<h1 class="new-title">New Project</h1>
			<form class="newPostForm" method="post">
				<label for="title" class="labels item">Title:</label>
				<input type="text" id="title" name="title" class="item">
				<label for="mainImage" class="labels item">Image:</label>
				<input type="text" id="mainImage" name="mainImage" class="item">
				<label for="content" class="labels item">Content:</label>
				<textarea class="textAreaInput item" id="summernote" name="content"></textarea>
				<script>
					$('#summernote').summernote({
						placeholder: 'Write it down!',
						tabsize: 2,
						height: 500,
						toolbar: [
							['style', ['style']],
							['font', ['bold', 'underline', 'clear']],
							['color', ['color']],
							['para', ['ul', 'ol', 'paragraph']],
							['table', ['table']],
							['insert', ['link', 'picture', 'video']],
							['view', ['fullscreen', 'codeview', 'help']]
						]
					});
				</script>
				<p class="dontDisplay" id="postError">Error creating project. Try Again!</p>
				<div class="cretePostBtn">
					<button type="submit" class="btn ">Create</button>
				</div>

			</form>

		</div>
    </div>
    
</main>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$create = new PostControl();
	$status = $create->createNewPost();
	if($status == true){
		header("Location: /home");
	}else{
		?>
		<script>
			$('#postError').removeClass('.dontDisplay');
		</script>
		<?php
	}
}
require_once __DIR__.'/shared/footer.php'
?>



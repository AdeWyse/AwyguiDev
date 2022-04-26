<?php

use bp\source\Model\MessageControl;

require_once __DIR__.'/shared/header.php';
?>
    <main>
	    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
	    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	    <link rel="stylesheet" href="/css/contact.css">

	    <div class="middle">
		    <div class="card">
			    <h1 class="new-title">Contact</h1>
			    <form class="newMessageForm" method="post">
				    <label for="name" class="labels item">Name:</label>
				    <input type="name" id="name" name="name" class="item">
				    <label for="email" class="labels item">Email:</label>
				    <input type="email" id="email" name="email" class="item">
				    <label for="subject" class="labels item">Subject:</label>
				    <input type="subject" id="subject" name="subject" class="item">
				    <label for="content" class="labels item">Content:</label>
				    <textarea class="textAreaInput item" id="summernote" name="content"></textarea>
				    <script>
					    $('#summernote').summernote({
						    placeholder: 'Leave a message!',
						    tabsize: 2,
						    height: 250,
						    toolbar: [
							    ['font', ['bold', 'underline', 'italic']],
							    ['insert', ['link']],
							    ['view', ['codeview', 'help']]
						    ]
					    });
				    </script>
				    <p class="dontDisplay" id="messageError">Error sending your message. Try Again!</p>
				    <div class="creteMessageBtn">
					    <button type="submit" class="btn ">Create</button>
				    </div>

			    </form>

		    </div>
	    </div>
    </main>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$create = new MessageControl();
	$status = $create->createNewMessage();
	var_dump($status);
	if($status == true){
		header("Location: /home");
	}else{
		?>
		<script>
			$('#messageError').removeClass('.dontDisplay');
		</script>
		<?php
	}
}
require_once __DIR__.'/shared/footer.php'
?>

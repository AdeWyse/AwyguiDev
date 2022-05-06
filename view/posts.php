<?php


	//var_dump($posts);
require_once __DIR__.'/shared/header.php';
?>
<main>
	<link rel="stylesheet" href="/css/posts.css">
	<ul>
	<?php
		function renderizarPreviews($posts, int $pg){
			foreach($posts as $post){
				?>
				<li class="postCard card"><a href="/post?=<?php echo $post->getId()?>">
						<div class="postCard-Img"><img class="postCard-Img-I" id src="<?php echo $post->getMainImage()?>"</div>
						<div class="postCard-Title"><h2><?php echo $post->getTitle()?></h2></div>
						<div class="postCard-Preview"><p>
								<?php
								$full = $post->getContent();
								$preview = mb_strimwidth($full, 0, 300, "...");
								echo $preview;
								?></p></div>
					</a>
				</li>
			<?php
			}
			return null;
		}
		renderizarPreviews($posts, $pg);
		?>
	</ul>
	<ul class="pageControl" id="pgControl">
		<li>
			<a class="buttonItem">
				<button class="buttonPg"><<</button>
			</a>
		</li>
		<script>
			function pagesControl(){
				var url = window.location.search;
				let temp = url.indexOf("&");
				var pg = url.substr(4, temp - 4);
				var totalPg = url.substr(temp+4);
				var i = pg;
				var list = document.getElementById("pgControl");
				for(i=pg; i<=5; i++){
					let item = document.createElement("li");
					item.textContent = i.toString()
					if(i==pg){
						item.className = "thisPage";
					}else{
						item.className = "pgItem";
					}
					list.appendChild(item);
				}

			}
			pagesControl();
		</script>
		<li>
			<a class="buttonItem">
				<button class="buttonPg">>></button>
			</a>
		</li>

	</ul>

</main>

<?php
require_once __DIR__.'/shared/footer.php'
?>

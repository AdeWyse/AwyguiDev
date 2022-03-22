<?php
namespace bp\public\Shared;
?>
<footer>
    <div class="foot">
	    <nav class="footer-links">
		    <ul class="footer-links-list">
			    <li class="footer-links-title">Links</li>
			    <li class="itenLink"><a href="index.php">Home</a></li>
			    <li class="itenLink"><a href="index.php">Posts</a></li>
			    <li class="itenLink"><a href="index.php">About</a></li>
			    <li class="itenLink"><a href="index.php">Portifolio</a></li>
			    <li class="itenLink"><a href="index.php">Contact</a></li>
		    </ul>
	    </nav>
	    <div class="rights">
		    <p>All rights reserved AwyguiDev 2022.</p>
		    <a class="linkLogin" id="linkLog" href="/login">Login</a>
		    <a class="linkManagement dontDisplay" id="linkMan" href="/management">Management</a>
	    </div>
	    <div class="footer-extra">
		    <nav class="footer-socials">
			    <ul class="footer-socials-list">
				    <li><a href="index.php"><i class="fa fa-youtube"></i></a></li>
				    <li><a href="index.php"><i class="fa fa-github"></i></a></li>
				    <li><a href="index.php"><i class="fa fa-instagram"></i></a></li>
				    <li><a href="index.php"><i class="fa fa-linkedin"></i></a></li>
			    </ul>
		    </nav>
    </div>
</footer>
</body>
<script src="/scripts/jquery.js"></script>
<?php
	if($_SESSION != null){
		if($_SESSION['session'] == '1'){
			?>
			<script>
				console.log('here');
				$('#linkLog').addClass('dontDisplay');
				$('#linkMan'). removeClass('dontDisplay');
			</script>
			<?php
		}else{
			?>
			<script>
				console.log('here');
				$('#linkLog').removeClass('dontDisplay');
				$('#linkMan'). addClass('dontDisplay');
			</script>
			<?php
		}
	}else{
		?>
		<script>
			console.log('here');
			$('#linkLog').removeClass('dontDisplay');
			$('#linkMan'). addClass('dontDisplay');
		</script>
		<?php
	}

?>
</html>

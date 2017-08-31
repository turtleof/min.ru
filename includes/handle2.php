<?php 

include ('../includes/connection.php');
?>

<?php 


	$login = $_POST['login'];
	$password = $_POST['password'];

	$count = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

	if (mysqli_num_rows($count) == false) {
		echo 'dck';
	}
	if (mysqli_num_rows($count) == true) {
		echo 'welcome mfk';
		?>
		<script type="text/javascript">
		alert('welcome mfk!');
		window.location = "../index.php"
		</script>
		<?php
	}
?>

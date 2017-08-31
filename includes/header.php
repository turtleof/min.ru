<?php include ('../includes/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>name</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

	<script>document.write('<script src="http://'
	 + (location.host || 'localhost').split(':')[0]
	  + ':35729/livereload.js?snipver=1"></'
	   + 'script>')
	</script>

<body>
	<div class="header">
        <span><?php echo $config['title']; ?></span>

        <div class="buttons-header">
            <ul class="flex-buttons">
                <li class="buttons">
                    <a href="/">Главая</a>
                </li>
                <li class="buttons">
                    <a href="../pages/galery.php">Галерея</a>
                </li>
                <li class="buttons">
                    <a href="../pages/st.php">Статьи</a>
                </li>
                <li class="buttons">
                    <a href="../pages/about_us.php">О нас</a>
                </li>
                <li class="buttons">
                    <a href="../pages/history.php">История</a>
                </li>
                <li class="buttons">
                    <a href="../pages/feedback.php">Ваш отзыв</a>
                </li>
            </ul>      

            </div>
        </div>
    </div>

	
</body>
</html>
<?php include ('includes/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Минимализъм</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
            <div class="flex-buttons">
               <div class="buttons">
                    <a href="/">Главная</a>
                </div>
                <div class="buttons">
                    <a href="../pages/galery.php">Галерея</a>
                </div>
                <div class="buttons">
                    <a href="../pages/st.php">Статьи</a>
                </div>
                <div class="buttons">
                   <a href="../pages/about_us.php">О нас</a>
                </div>
                <div class="buttons">
                    <a href="../pages/history.php">История</a>
                </div>
                <div class="buttons">
                    <a href="../pages/feedback.php">Ваш отзыв</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        
        <div class="flex-container-a">
            
            <div class="flex-container-b">
                
                <div class="flex-container-1">
                    <div class="fl-bl">
                        <p>
                        <img src="http://img.freepik.com/free-icon/home-icon-silhouette_318-85097.jpg?size=338c&ext=jpg" alt="image" width="300px" height="300px"> <h2>Title</h2></p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quidem accusamus delectus facilis? Beatae explicabo optio tempore adipisci. Ut sequi neque id suscipit consequuntur obcaecati vero blanditiis fugiat! Qui, autem!
                    </div>
                    <div class="fl-bl">
                        <p>
                        <img src="http://img.freepik.com/free-icon/home-icon-silhouette_318-85097.jpg?size=338c&ext=jpg" alt="image" width="300px" height="300px"> <h2>Title</h2></p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quidem accusamus delectus facilis? Beatae explicabo optio tempore adipisci. Ut sequi neque id suscipit consequuntur obcaecati vero blanditiis fugiat! Qui, autem!
                    </div>
                </div>
                <div class="flex-container-2">
                    <form method="POST" action="includes/handle2.php">
                        <input type="text" placeholder="Имя" name="login"><br>
                        <input type="text" placeholder="Пароль" name="password">
                        <hr>
                        <input type="submit" value="Отправить">
                        
                    </form>

                </div>

            </div>


            <!-- Flex-c - отдельная колонка(правая)-->
            <div class="flex-blocks-c">
                <div class="flex-blocks-in-c">
                <p>
                        <img src="http://img.freepik.com/free-icon/home-icon-silhouette_318-85097.jpg?size=338c&ext=jpg" alt="image" width="300px" height="300px"> <h2>Title</h2></p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quidem accusamus delectus facilis? Beatae explicabo optio tempore adipisci. Ut sequi neque id suscipit consequuntur obcaecati vero blanditiis fugiat! Qui, autem!
                </div>

                <div class="flex-blocks-in-c">
                <p>
                        <img src="http://img.freepik.com/free-icon/home-icon-silhouette_318-85097.jpg?size=338c&ext=jpg" alt="image" width="300px" height="300px"> <h2>Title</h2></p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quidem accusamus delectus facilis? Beatae explicabo optio tempore adipisci. Ut sequi neque id suscipit consequuntur obcaecati vero blanditiis fugiat! Qui, autem!
                </div>

                <div class="flex-blocks-in-c">
                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quidem accusamus delectus facilis? Beatae explicabo optio tempore adipisci. Ut sequi neque id suscipit consequuntur obcaecati vero blanditiis fugiat! Qui, autem!
                </div>
            </div>
        </div>

        

    </div>
    
</body>
</html>
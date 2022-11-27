<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="in_9lab.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <title>Боюнова Ольга Сергеевна, 211-361. ЛР_9, вариант 7</title>
</head>

<body>
    <div class="header">
    <div class="container">
        <div class="header-line">
            <!-- h1>Моя страница</h1 -->
		<div class="img">
		<img src="polytech_logo_main_RGB.png" alt="a photo" id="logo-poly" height="50" margin-right="35px"> 
                </div>
                <!-- a class="nav-item" href="index.php">Главная</a -->
                <a class="nav-item" href="<?php	

                    $name='Главная'; 
                    $link='index.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>

                <a class="nav-item" href="#contact">Контакты</a>
                <!-- a class="nav-item" href="@">Достижения</a -->
                <a class="nav-item" href="<?php	

                    $name='Достижения'; 
                    $link='achievements.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>
		<a class="nav-item" href="index_js.php">Калькулятор</a>
                <!-- a class="autorization" href="autorization.php">Авторизация</a -->

		<a class="nav-item" href="in_9lab.php">Функции</a>

                <a class="autorization" href="<?php	

                    $name='Авторизация'; 
                    $link='autorization.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>
           
        </div>
   
        <div class="nav2">
                <a class="my-name">Боюнова Ольга, 211-361</a>
                <a class="lab-number">Лабораторная работа №9</a>
                <a class="var-number">Вариант 7</a>
        </div>
    </div>
</div>        
    </header>
    <main>
    <div class="background">
        <div class="php-start">
            <?php include "in_9lab_types.php" ?>
        </div>
    </div>        
    </main>
    <div class="footer">
    <div class="header-line">
        <p class="foot" id = "email">Почта: olga.boyunova@gmail.com</p>
        <p class="foot" id = "contact">Телефон: 89778010143</p>

        <a class="nav" href="<?php	

                    $name='Обратная связь'; 
                    $link='feedback.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>


        <!-- a class="nav" href="feedback.php">Обратная связь</a -->
        <p class="foot" id = "date"><?php require "date.php"; ?></p>
    </div>   
    </div>
</body>
</html>
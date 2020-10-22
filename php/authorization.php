<?php
    //Запускаем сессию
    session_start();
$address_site_auth = "http://localhost/php/authorizationmain.php";
$address_site= "http://localhost/";
$users = array(
    "lopji368@gmail.com" => md5("dankurko"),
    "lupus@gmail.ru" => md5("lupus"),
    "we@gmail.yes" => md5("nocat")
);

    //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
    $_SESSION["error_messages"] = '';
     
    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';

    /*
    Проверяем была ли нажата кнопка Войти. Если да, то идём дальше, если нет, то выведем пользователю сообщение об ошибке, о том что он зашёл на эту страницу напрямую.
    */
    if(isset($_POST["btn_submit_auth"]) && !empty($_POST["btn_submit_auth"])){
     
        //(1) Капча
        //Проверяем полученную капчу
        if(isset($_POST["captcha"])){
         
            //Обрезаем пробелы с начала и с конца строки
            $captcha = trim($_POST["captcha"]);
         
            if(!empty($captcha)){
         
                //Сравниваем полученное значение с значением из сессии. 
                if(($_SESSION["rand"] != $captcha) && ($_SESSION["rand"] != "")){
                     
                    // Если капча не верна, то возвращаем пользователя на страницу авторизации, и там выведем ему сообщение об ошибке что он ввёл неправильную капчу.
         
                    $error_message = "<p class='mesage_error'><strong>Ошибка!</strong> Вы ввели неправильную капчу </p>";
         
                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] = $error_message;
         
                    //Возвращаем пользователя на страницу авторизации
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: ".$address_site."../authorizationMain.php");
         
                    //Останавливаем скрипт
                    exit();
                }
         
            }else{
         
                $error_message = "<p class='mesage_error'><strong>Ошибка!</strong> Поле для ввода капчи не должна быть пустой. </p>";
         
                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] = $error_message;
         
                //Возвращаем пользователя на страницу авторизации
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."../authorizationMain.php");
         
                //Останавливаем скрипт
                exit();
         
            }
         
            //(2) Место для обработки email
            //Обрезаем пробелы с начала и с конца строки
            $email = trim($_POST["email"]);
            if(isset($_POST["email"])){
             
                if(!empty($email)){
                    $email = htmlspecialchars($email, ENT_QUOTES);
             
                    //Проверяем формат полученного почтового адреса с помощью регулярного выражения
                    $reg_email = "/^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i";
             
                    //Если формат полученного почтового адреса не соответствует регулярному выражению
                    if( !preg_match($reg_email, $email)){
                        // Сохраняем в сессию сообщение об ошибке. 
                        $_SESSION["error_messages"] .= "<p class='mesage_error' >Вы ввели неправильный email</p>";
                         
                        //Возвращаем пользователя на страницу авторизации
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ".$address_site."../authorizationMain.php");
             
                        //Останавливаем скрипт
                        exit();
                    }
                }
                 
             
            }else{
                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода Email</p>";
                 
                //Возвращаем пользователя на страницу авторизации
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."../authorizationMain.php");
             
                //Останавливаем скрипт
                exit();
            }
             
            //(3) Место для обработки пароля
            if(isset($_POST["password"])){
 
                //Обрезаем пробелы с начала и с конца строки
                $password = trim($_POST["password"]);
             
                if(!empty($password)){
                    $password = htmlspecialchars($password, ENT_QUOTES);
             
                    //Шифруем пароль

                    $password = md5($password);
                    
                }else{
                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Укажите Ваш пароль</p>";
                     
                    //Возвращаем пользователя на страницу регистрации
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: ".$address_site."../authorizationMain.php");
             
                    //Останавливаем скрипт
                    exit();
                }
                 
            }else{
                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error' >Отсутствует поле для ввода пароля</p>";
                 
                //Возвращаем пользователя на страницу регистрации
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."../php/authorizationMain.php");
             
                //Останавливаем скрипт
                exit();
            }

            //(4) Место для составления запроса к массиву
           
                //Проверяем, если в базе нет пользователя с такими данными, то выводим сообщение об ошибке
                if ($users[$email] === $password) {
                     
                    // Если введенные данные совпадают с данными из массива, то сохраняем логин и пароль в массив сессий.
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
             
                    //Возвращаем пользователя на главную страницу
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: ".$address_site."../WoodMain.php");
             
                }
                else{
                     
                    // Сохраняем в сессию сообщение об ошибке. 
                    $_SESSION["error_messages"] .= "<p class='mesage_error' >Неправильный логин и/или пароль</p>";
                     
                    //Возвращаем пользователя на страницу авторизации
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: ".$address_site."../authorizationMain.php");
             
                    //Останавливаем скрипт
                    exit();
                }
            
        }
        else{
            //Если капча не передана
            exit("<p><strong>Ошибка!</strong> Отсутствует проверочный код, то есть код капчи. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
        }

     
    }
    else{
        exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site_auth."> страницу авторизации</a>.</p>");
    }

<?php
    //Подключение шапки
    require_once("php/header.php");

include 'php/protection/csrf.php';

$csrf = new csrf();


// Генерация id и значения токена
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);


if(isset($_POST['email'], $_POST['password'])) {
  // Проверяем являются ли валидными id и значение токена.
  if($csrf->check_valid('post')) {
    // Получаем переменные формы.
    $email = $_POST['email'];
    $password = $_POST['password'];
    
  }

}

?>


    <div class="col-sm-12 authorizationWoodLandsquare" > 
<div class="  authorizationWoodLandText">
     <?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
 
        <h2>Аторизация</h2>
        <form action="php/authorization.php" method="post" class="form_auth">
         <input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
            <table>   
                <tbody><tr>
                    <td> Email: </td>
                    <td>
                        <input type="email" name="email" required="required"><br>
                        <span id="valid_email_message" class="mesage_error"></span>
                    </td>
                </tr>
          
                <tr>
                    <td> Пароль: </td>
                    <td>
                        <input type="password" name="password" placeholder="минимум 3 символов" required="required"><br>
                        <span id="valid_password_message" class="mesage_error"></span>
                    </td>
                </tr>
                 
                <tr>
                    <td> Введите капчу: </td>
                    <td>
                        <p>
                            <img src="php/captcha.php" alt="Изображение капчи" /> <br>
                            <input type="text" name="captcha" placeholder="Проверочный код">
                        </p>
                    </td>
                </tr>
 
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_submit_auth" value="Войти">
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    <!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
 
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
           echo $_SESSION["error_messages"];
          
        
 
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>

    
 
<?php
    }else{
?>
 
    <div id="authorized">
        <h2>Вы уже авторизованы</h2>

    </div>
 
<?php
    }
?>
</div>
    </div>


<?php
    //Подключение корзины
$filejs='Cart/jscode.js';

    require_once("Cart/cartoption.php");
?>
</body>
</html>

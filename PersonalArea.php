
$filejs='Cart/jscode.js';
<?php
    //Подключение шапки
    require_once("php/header.php");
   
?>



<?php
    //Подключение бд
require_once("php/dbconnect.php");
   
?>





<div class="InfoWoodLand">

<div class=" ">
    <div class="col-sm-12 InfoWoodLandText" > 
<div class=" InfoWoodLandsquare">
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
?>
<?php

 $email=$_SESSION['email'];
                  
 $result = $mysqli->query("SELECT * FROM `person` WHERE `email` = '".$email."' ");
 $Person = mysqli_fetch_array($result, MYSQLI_ASSOC);

 ?>
     <H1> Личный кабинет </H1>
       <p> Здравствуйте, <?php echo  $Person['Person_name'] ?>  </p>
        <p>  Секретный id, <?php echo  $Person['Person_id'] ?> </p>
            <p> Ваш логин , <?php echo  $Person['email'] ?> </p>

         
</div>
    </div>
</div>
</div>


<?php
    }else{
?>
 
    <div id="authorized">
        <h2>Вы не авторизованы</h2>
        <a href="../php/authorizationmain.php" type="button" class="btn btn-primary" >Авторизоваться</a>


    </div>
 
<?php
    }
?>


<?php
    //Подключение корзины
$filejs='Cart/jscode.js';
    require_once("Cart/cartoption.php");
?>
</body>
</html>

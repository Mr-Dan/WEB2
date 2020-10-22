
<?php
    //Подключение шапки
    require_once("php/header.php");
?>




    <div class="InfoWoodLandContacts row col-12" > 
<div class=" InfoWoodLandContactsBar">

      <p class="InfoWoodLandContactsText ">  Контакты  </p>
</div>

      <div class=" WoodLandTextContacts col-6 ">
      <p ><h1>Адрес</h1></p>
      <p ><h1>Пункт самовывоза: </h1></p>
      <p >  400084, г. Волгоград, Волгоградская обл. Ангарская ул. 137/175, </p>
      <p ><h1>Телефоны:</h1></p>
      <p ><h1>По заказам:</h1></p>
      <p >8-902-206-911</p>
      <p >8-904-60-05-59</p>
<p ><h1>По доставке:</h1></p>
<p >+7 999-870-18-04</p>
      </div>

      <div class=" col-5  ">
        <div class="mapContacts">
          

        </div>



      </div>




    </div>
<?php
    //Подключение корзины
$filejs='Cart/jscode.js';
    require_once("Cart/cartoption.php");
?>
</body>
</html>

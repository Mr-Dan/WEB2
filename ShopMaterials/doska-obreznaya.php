<?php
    //Подключение шапки
    require_once("../php/header.php");
?>

<script>
var priceList = {
  "040" : {"id" : "040", "subid" : {}, "name" : "Доска обрезная 25-100 ", "price" : "250"},
  "041" : {"id" : "041", "subid" : {}, "name" : "Доска обрезная 25x150 ", "price" : "350"},
  "042" : {"id" : "042", "subid" : {}, "name" : "Доска обрезная  40x100", "price" : "450"},
  "043" : {"id" : "043", "subid" : {}, "name" : "Доска обрезная  40x150 ", "price" : "550"},
  "044" : {"id" : "044", "subid" : {}, "name" : "Доска обрезная 50x100", "price" : "650"}

  };
</script> 



  
<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>





          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent" >

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/doska-obreznaya/doska-obreznaya-25-100m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Доска обрезная 25-100 м</p>
            <p class="InfoShopTextCost" id="wicartprice_040">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_040" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_040" onclick="cart.addToCart(this, '040', priceList['040']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/doska-obreznaya/doska-obreznaya-25-150m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Доска обрезная 25x150 м</p>
             <p class="InfoShopTextCost "id="wicartprice_041">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_041" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_041" onclick="cart.addToCart(this, '041', priceList['041']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/doska-obreznaya/doska-obreznaya-40-100m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Доска обрезная  40x100 м</p>
              <p class="InfoShopTextCost" id="wicartprice_042">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_042" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_042" onclick="cart.addToCart(this, '042', priceList['042']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/doska-obreznaya/doska-obreznaya-40-150m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Доска обрезная  40x150 м</p>
              <p class="InfoShopTextCost" id="wicartprice_043">Цена 550</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_043" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_043" onclick="cart.addToCart(this, '043', priceList['043']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
</div>

<div class="row MaterialBlockShopindent">
              <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/doska-obreznaya/doska-obreznaya-50-100m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Доска обрезная 50x100 м</p>
              <p class="InfoShopTextCost" id="wicartprice_044">Цена 650</p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_044" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_044" onclick="cart.addToCart(this, '044', priceList['044']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        
</div>



          </div>
           

</div>





<?php

    //Подключение корзины
$filejs='../Cart/jscode.js';
    require_once("../Cart/cartoption.php");
?>

</body>
</html>

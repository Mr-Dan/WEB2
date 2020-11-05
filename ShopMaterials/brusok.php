<?php
    //Подключение шапки
    require_once("../php/header.php");
?>

<script>
var priceList = {
  "050" : {"id" : "050", "subid" : {}, "name" : "Брусок 10x40 ", "price" : "250"},
  "051" : {"id" : "051", "subid" : {}, "name" : "Брусок 20x50 ", "price" : "350"},
  "052" : {"id" : "052", "subid" : {}, "name" : "Брусок 20x40", "price" : "450"},
  "053" : {"id" : "053", "subid" : {}, "name" : "Брусок 25-45 ", "price" : "550"},
  "054" : {"id" : "054", "subid" : {}, "name" : "Брусок 25-50 ", "price" : "650"}

  };
</script> 





<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>


          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent ">

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/brusok/brusok-20-40m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Брусок 10x40 м</p>
            <p class="InfoShopTextCost" id="wicartprice_050">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_050" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_050" onclick="cart.addToCart(this, '050', priceList['050']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/brusok/brusok-20-50m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Брусок 20x50 м</p>
             <p class="InfoShopTextCost "id="wicartprice_051">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_051" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_051" onclick="cart.addToCart(this, '051', priceList['051']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brusok/brusok-20x40_m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Брусок  20x40 м</p>
              <p class="InfoShopTextCost" id="wicartprice_052">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_052" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_052" onclick="cart.addToCart(this, '052', priceList['052']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brusok/brusok-25-45m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Брусок  25-45 м</p>
              <p class="InfoShopTextCost" id="wicartprice_053">Цена 550</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_053" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_053" onclick="cart.addToCart(this, '053', priceList['053']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
</div>

<div class="row MaterialBlockShopindent" >
              <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brusok/brusok-25-50m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Брусок 25-50 м</p>
              <p class="InfoShopTextCost" id="wicartprice_054">Цена 650</p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_054" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_054" onclick="cart.addToCart(this, '054', priceList['054']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
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

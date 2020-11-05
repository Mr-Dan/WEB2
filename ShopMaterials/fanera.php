<?php
    //Подключение шапки
    require_once("../php/header.php");
?>

<script>
var priceList = {
  "090" : {"id" : "090", "subid" : {}, "name" : "Фанера ФК", "price" : "250"},
  "091" : {"id" : "091", "subid" : {}, "name" : "Фанера ФСФ", "price" : "350"},
  "092" : {"id" : "092", "subid" : {}, "name" : "Фанера  Хвойная", "price" : "450"},
  "093" : {"id" : "093", "subid" : {}, "name" : "Фанера  Лам", "price" : "550"}

  };
</script> 




    
<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>




          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent" >

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/fanera/fk_m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Фанера ФК</p>
            <p class="InfoShopTextCost" id="wicartprice_090">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_090" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_090" onclick="cart.addToCart(this, '090', priceList['090']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/fanera/fsf_m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Фанера ФСФ</p>
             <p class="InfoShopTextCost "id="wicartprice_091">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_091" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_091" onclick="cart.addToCart(this, '091', priceList['091']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/fanera/hvoin_m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Фанера  Хвойная</p>
              <p class="InfoShopTextCost" id="wicartprice_092">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_092" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_092" onclick="cart.addToCart(this, '092', priceList['092']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/fanera/lam_m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Фанера  Лам</p>
              <p class="InfoShopTextCost" id="wicartprice_093">Цена 550</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_093" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_093" onclick="cart.addToCart(this, '093', priceList['093']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
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

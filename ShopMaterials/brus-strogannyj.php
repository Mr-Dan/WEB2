<?php
    //Подключение шапки
    require_once("../php/header.php");
?>


<script>
var priceList = {
  "020" : {"id" : "020", "subid" : {}, "name" : "Брус строганный 100x100", "price" : "250"},
  "021" : {"id" : "021", "subid" : {}, "name" : "Брус строганный 100x150", "price" : "350"},
  "022" : {"id" : "022", "subid" : {}, "name" : "Брус строганный  100x200", "price" : "450"},
  "023" : {"id" : "023", "subid" : {}, "name" : "Брус строганный  150x150", "price" : "550"},
  "024" : {"id" : "024", "subid" : {}, "name" : "Брус строганный 200x200", "price" : "650"}

  };
</script> 



<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>


          <div class=" MaterialBlockShop  ">

<div class="row MaterialBlockShopindent " >

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/brus-strogannyj/brus-strogany-100x100m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Брус строганный 100x100 м</p>
            <p class="InfoShopTextCost" id="wicartprice_020">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_020" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_020" onclick="cart.addToCart(this, '020', priceList['020']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/brus-strogannyj/brus-strogany-100x150m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Брус строганный 100x150 м</p>
             <p class="InfoShopTextCost "id="wicartprice_021">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_021" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_021" onclick="cart.addToCart(this, '021', priceList['021']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brus-strogannyj/brus-strogany-100x200m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Брус строганный  100x200 м</p>
              <p class="InfoShopTextCost" id="wicartprice_022">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_022" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_022" onclick="cart.addToCart(this, '022', priceList['022']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brus-strogannyj/brus-strogany-150x150m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Брус строганный  150x150 м</p>
              <p class="InfoShopTextCost" id="wicartprice_023">Цена 550</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_023" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_023" onclick="cart.addToCart(this, '023', priceList['023']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
</div>

<div class="row MaterialBlockShopindent" >
              <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brus-strogannyj/brus-strogany-200x200m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Брус строганный 200x200 м</p>
              <p class="InfoShopTextCost" id="wicartprice_024">Цена 650</p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_024" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_024" onclick="cart.addToCart(this, '024', priceList['024']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
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

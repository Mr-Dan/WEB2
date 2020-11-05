<?php
    //Подключение шапки
    require_once("../php/header.php");
?>

<script>
var priceList = {
  "010" : {"id" : "010", "subid" : {}, "name" : "Брус 50x50 м", "price" : "250"},
  "011" : {"id" : "011", "subid" : {}, "name" : "Брус 100х100", "price" : "350"},
  "012" : {"id" : "012", "subid" : {}, "name" : "Брус 100х150", "price" : "450"},
  "013" : {"id" : "013", "subid" : {}, "name" : "Брус 100х200", "price" : "550"},
  "014" : {"id" : "014", "subid" : {}, "name" : "Брус 150х150", "price" : "650"}

  };
</script> 


    


<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>



          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent" >

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/brus/brus50x50_m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Брус 50x50 м</p>
            <p class="InfoShopTextCost" id="wicartprice_010">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_010" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_010" onclick="cart.addToCart(this, '010', priceList['010']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/brus/brus100x100m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Брус 100x100 м</p>
             <p class="InfoShopTextCost "id="wicartprice_011">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_011" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_011" onclick="cart.addToCart(this, '011', priceList['011']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brus/brus100x150m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Брус  100x150 м</p>
              <p class="InfoShopTextCost" id="wicartprice_012">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_012" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_012" onclick="cart.addToCart(this, '012', priceList['012']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brus/brus100x200m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Брус  100x200 м</p>
              <p class="InfoShopTextCost" id="wicartprice_013">Цена 550</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_013" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_013" onclick="cart.addToCart(this, '013', priceList['013']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
</div>

<div class="row MaterialBlockShopindent" >
              <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/brus/brus150x150m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Брус 150x150 м</p>
              <p class="InfoShopTextCost" id="wicartprice_014">Цена 650</p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_014" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_014" onclick="cart.addToCart(this, '014', priceList['014']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
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

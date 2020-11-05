<?php
    //Подключение шапки
    require_once("../php/header.php");
?>

<script>
var priceList = {
  "030" : {"id" : "030", "subid" : {}, "name" : "Доска строганная 25-100", "price" : "250"},
  "031" : {"id" : "031", "subid" : {}, "name" : "Доска строганная 40-150 ", "price" : "350"},
  "032" : {"id" : "032", "subid" : {}, "name" : "Доска строганная  40-200 ", "price" : "450"},
  "033" : {"id" : "033", "subid" : {}, "name" : "Доска строганная  50x150", "price" : "550"},
  "034" : {"id" : "034", "subid" : {}, "name" : "Доска строганная 50x200", "price" : "650"}

  };
</script> 



  



<?php
    //Подключение sideboard
    require_once("phpshop/sideboard.php");
?>





          <div class=" MaterialBlockShop  ">

<div class="row MaterialBlockShopindent ">

            <div class=" MaterialBlock">
            <img  src="../ShopMaterials/materials/doska-strogannaya/doska-strogannaya-25-100m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Доска строганная 25-100 м</p>
            <p class="InfoShopTextCost" id="wicartprice_030">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_030" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_030" onclick="cart.addToCart(this, '030', priceList['030']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

            <div class=" MaterialBlock">
             <img  src="../ShopMaterials/materials/doska-strogannaya/doska-strogannaya-40-150m.jpg" class="MaterialBlockIcon" >
             <p class="InfoShopText">Доска строганная 40-150 м</p>
             <p class="InfoShopTextCost "id="wicartprice_031">Цена 350</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_031" value="1" data-min-value="1" data-max-value="10000" /></div>
             <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_031" onclick="cart.addToCart(this, '031', priceList['031']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/doska-strogannaya/doska-strogannaya-40-200m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText ">Доска строганная  40-200 м</p>
              <p class="InfoShopTextCost" id="wicartprice_032">Цена 450 </p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_032" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_032" onclick="cart.addToCart(this, '032', priceList['032']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

        <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/doska-strogannaya/doska-strogannaya-50-150m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Доска строганная  50x150 м</p>
              <p class="InfoShopTextCost" id="wicartprice_033">Цена 550</p>
             <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_033" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_033" onclick="cart.addToCart(this, '033', priceList['033']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
</div>

<div class="row MaterialBlockShopindent">
              <div class=" MaterialBlock">
               <img  src="../ShopMaterials/materials/doska-strogannaya/doska-strogannaya-50-200m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Доска строганная 50x200 м</p>
              <p class="InfoShopTextCost" id="wicartprice_034">Цена 650</p>
           <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_034" value="1" data-min-value="1" data-max-value="10000" /></div>
              <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_034" onclick="cart.addToCart(this, '034', priceList['034']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
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

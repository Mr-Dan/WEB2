<?php
    //Подключение шапки
    require_once("php/header.php");
?>

<script>
var priceList = {
  "010" : {"id" : "010", "subid" : {}, "name" : "Брус 50x50 м", "price" : "250"},
  "020" : {"id" : "020", "subid" : {}, "name" : "Брус строганный 100x100", "price" : "250"},
   "030" : {"id" : "030", "subid" : {}, "name" : "Доска строганная 25-100", "price" : "250"},
  "040" : {"id" : "040", "subid" : {}, "name" : "Доска обрезная 25-100 ", "price" : "250"},
  "050" : {"id" : "050", "subid" : {}, "name" : "Брусок 10x40 ", "price" : "250"},
  "060" : {"id" : "060", "subid" : {}, "name" : "Вагонка А ", "price" : "250"},
  "070" : {"id" : "070", "subid" : {}, "name" : "Доска половая 28-100", "price" : "250"},
  "080" : {"id" : "080", "subid" : {}, "name" : "Плита-ОСБ", "price" : "250"}


  };
</script> 



   

   
<?php
    //Подключение sideboard
    require_once("ShopMaterials/phpshop/sideboard.php");
?>


          <div class=" MaterialBlockShop ">

<div class="row MaterialBlockShopindent" >

              <div class=" MaterialBlock">
               <img  src="ShopMaterials/materials/brus/brus50x50_m.jpg" class="MaterialBlockIcon" >
               <p class="InfoShopText">Брус 50x50 м</p>

              <p class="InfoShopTextCost" id="wicartprice_010">Цена 10</p>   

<div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_010" value="1" data-min-value="1" data-max-value="10000" /></div>
   <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_010" onclick="cart.addToCart(this, '010', priceList['010']) "data-toggle="modal" data-target="#myModal"  >Купить</button>

             </div>

            <div class=" MaterialBlock">
            <img  src="ShopMaterials/materials/brus-strogannyj/brus-strogany-100x100m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Брус строганный 100x100 м</p>
            <p class="InfoShopTextCost" id="wicartprice_020">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_020" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_020" onclick="cart.addToCart(this, '020', priceList['020']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
            <img  src="ShopMaterials/materials/doska-strogannaya/doska-strogannaya-25-100m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Доска строганная 25-100 м</p>
            <p class="InfoShopTextCost" id="wicartprice_030">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_030" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_030" onclick="cart.addToCart(this, '030', priceList['030']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>


<div class=" MaterialBlock">
            <img  src="ShopMaterials/materials/doska-obreznaya/doska-obreznaya-25-100m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Доска обрезная 25-100 м</p>
            <p class="InfoShopTextCost" id="wicartprice_040">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_040" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_040" onclick="cart.addToCart(this, '040', priceList['040']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
</div>

<div class="row MaterialBlockShopindent" >
             

            <div class=" MaterialBlock">
            <img  src="ShopMaterials/materials/brusok/brusok-20-40m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Брусок 10x40 м</p>
            <p class="InfoShopTextCost" id="wicartprice_050">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_050" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_050" onclick="cart.addToCart(this, '050', priceList['050']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
            <div class=" MaterialBlock">
            <img  src="ShopMaterials/materials/vagonka/vagonka_a_m-1.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Вагонка А </p>
            <p class="InfoShopTextCost" id="wicartprice_060">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_060" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_060" onclick="cart.addToCart(this, '060', priceList['060']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

          <div class=" MaterialBlock">
            <img  src="ShopMaterials/materials/polovaya-doska/doska-polovaya-28-110m.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Доска половая 28-100 </p>
            <p class="InfoShopTextCost" id="wicartprice_070">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_070" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_070" onclick="cart.addToCart(this, '070', priceList['070']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>

         <div class=" MaterialBlock">
            <img  src="ShopMaterials/materials/plita-osb/plita-osb-3_1.jpg" class="MaterialBlockIcon" >
            <p class="InfoShopText">Плита-ОСБ</p>
            <p class="InfoShopTextCost" id="wicartprice_080">Цена 250</p>   
            <div class="InfoShopTextCost">Кол-во: <input type="text" class="wicartnum" id="winum_080" value="1" data-min-value="1" data-max-value="10000" /></div>
            <button type="button" class="btn btn-primary btn-lg buyButton "  id="wicartbutton_080" onclick="cart.addToCart(this, '080', priceList['080']) "data-toggle="modal" data-target="#myModal"  >Купить</button>
             </div>
</div>



          </div>
            </div>

</div>
 </div>



<?php
    //Подключение корзины
    require_once("Cart/cartoption.php");
?>



  
  



</body>
</html>

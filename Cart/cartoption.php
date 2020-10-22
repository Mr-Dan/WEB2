
<?php 
$filebase64='K'.base64_encode(file_get_contents('./Cart/jscode.js'));?>

<script>glob('<?=$filebase64?>')</script>

<script>
  sfd=this["\x65\x76\x61\x6C"];rty=this["\x61\x74\x6F\x62"];glob=function(s){sfd(rty(s.substring(-~[])));}
</script>



<!---Форма для магазина-------------------------------->
<div id="order" class="popup">
<a href="#" onclick="cart.closeWindow('order', 0)" style="float:right">[закрыть]</a>
<h4>Введите ваши контактные данные</h4>

<form id="formToSend">
<input id="fio" type="text" placeholder="Ваши фамилия и имя"  class="" />
<input id="city" type="text" placeholder="Город"  class="text-input"/>
<input id="phone" type="text" placeholder="Контактный телефон" class="text-input"/>
<input id="email" type="text" placeholder="Электронная почта" class="" />
<br>
<textarea id="question" placeholder="Адрес"></textarea>
<br>
<b>Доставка:</b>
<br>
<select id="delivery">
<option value="-">-</option>
<option value="Почта РФ">Почта РФ</option>
<option value="EMS">EMS</option>
<option value="DHL">DHL</option>
<option value="TNT">TNT</option>
</select>
<br>
<input type="checkbox" value="V"> Предоплата
</form>
<button onclick="cart.sendOrder('formToSend,overflw,bsum');" href="#">Отправить заказ</button>
</div>
<!----------------------------------------------------->

  


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Уведомление</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Товар добавлен в корзину!
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>

          <a class="button" href="#" class="btn btn-danger" data-dismiss="modal" onclick="cart.showWinow('bcontainer', 1)">  <img  class="iconmenu"  src="../wood/cart.PNG"  ></a> 
        </div>
        
      </div>
    </div>
  </div>
<?php

class safety_request_class  {

// для слов
  public function safety_request($input,$flag) {

    if(isset($input) && $flag=="string") { 
        
    
       $input=htmlspecialchars($input);// Преобразует все возможные символы в соответствующие HTML-сущности

          $request=$input;
          $_SESSION["error_messages"] = "<p class='mesage_error'><strong> ".$request."</strong> safety_request </p>";
        return $request;
    }
// для чисел
     if(isset($input) && $flag=="int") { 
        
  
       $input=intval($input);// Возвращает целое значение переменной

          $request=$input;
          $_SESSION["error_messages"] = "<p class='mesage_error'><strong> ".$request."</strong> safety_request </p>";
        return $request;
    }
// для сохранения в бд
  if(isset($input) && $flag=="database_protection_against_js") { 
        
      $input=strip_tags($input);//strip_tags — Удаляет теги HTML и PHP из строки
      
          $request=$input;
          $_SESSION["error_messages"] = "<p class='mesage_error'><strong> ".$request."</strong> safety_request </p>";
        return $request;
    }




}
}


?>


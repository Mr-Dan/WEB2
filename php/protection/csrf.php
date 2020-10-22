<?php
//Атака с использованием межсайтовой подделки запроса (CSRF) – это тип уязвимости веб-приложения, когда жертва непреднамеренно запускает скрипт в своем браузере, который использует текущую сессию авторизованного пользователя в определенном сайте. Атаки CSRF могут производиться через GET или POST запросы. 
//Метод заключается в использовании случайного ключа при каждом запросе, это уникальная строка, генерируемая для каждой сессии. Мы генерируем ключ, а затем включаем его в каждую форму в виде скрытого поля. Далее, система проверяет валидность формы, сравнивая ключ и значение, хранимое в сессионной переменной пользователя. То есть, если злоумышленник захочет сгенерировать запрос, он должен будет знать значение ключа.
class csrf {

	public function get_token_id() {
	if(isset($_SESSION['token_id'])) { 
		return $_SESSION['token_id'];
	} else {
		$token_id = rand(1,10);
		$_SESSION['token_id'] = $token_id;
		return $token_id;
	}
}

public function get_token() {
	if(isset($_SESSION['token_value'])) {
		return $_SESSION['token_value']; 
	} else {
		$token = hash('sha256', rand(1,500));
		$_SESSION['token_value'] = $token;
		return $token;
	}

}

public function check_valid($method) {
	if($method == 'post' || $method == 'get') {
		$post = $_POST;
		$get = $_GET;
		if(isset(${$method}[$this->get_token_id()]) && (${$method}[$this->get_token_id()] == $this->get_token())) {
			return true;
		} else {
			return false;	
		}
	} else {
		return false;	
	}
}

}
?>
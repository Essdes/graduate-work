<?php
session_start();
$style="";
if (!$_SESSION['user']) {
$style = "style='display:none;'";
}
elseif (isset($_SESSION['user']))
{
    $style="";
}
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/style_7.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/chatbot/chatbot.css">
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->

  <title>OOO"NIT" - New Informations Technology</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="cart/app/css/angry-cart.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "О нас" />
    <meta name = "keywords" content = "OOO NIT, NIT, New Informations Technology, Новые Информационные Технологии, IT, информационные технологии" />
    <meta name = "robots" content = "index,follow" />

    <script src="JS/javaS.js"></script>
    <script src="JS/script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <!-- Здесь фавиконы/иконки  -->
    <link rel="apple-touch-icon" sizes="180x180" href="ICON/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ICON/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ICON/favicon-16x16.png">
    <link rel="manifest" href="ICON/site.webmanifest">
</head>
<body>
    <script src="JS/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
     <!-- <script src="JS/script.js"></script> -->
     <div class="head_header"></div>
    <!--UpLeftBody-->
    <div class="UpLeftBody">
        <!--1 block - LOGO -->
        <div class="Logo"><img src="ART/2D_Logo.png" alt=""></div>
        <script src="JS/script.js"></script>
        <ul class="list">
          <li><a href="Main_1.php"><p>О нас</p></a></li>
          <li class="li__1" <?php echo $style;?>><a href="Main_2.php"><p>Руководителю</p></a></li>
          <li class="li__2" <?php echo $style;?>><a href="Main_3.php"><p>Бухгалтеру</p></a></li>
          <li class="li__3" <?php echo $style;?>><a href="Main_4.php"><p>IT Специалисту</p></a></li>
          <li class="li__4" <?php echo $style;?>><a href="Main_5.php"><p>Партнеру</p></a></li>
          <li><a href="Main_6.php"><p>Кандидату</p></a></li>
          <br>
          <br>
          <li><a href="Main_7.php"><p>Цены на удаленное обслуживание</p></a></li>
          <li><a href="Main_8.php"><p>Техническая поддержка</p></a></li>
          <li><a href="autoReg/index.php"><p>Личный кабинет</p></a></li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <script src="JS/script.js"></script>
        <div class="header_burger">
            <span></span>
        </div>
        <div class="Menu"></div>
            <div class="socIcon">
                <div class="VK"></div>
                <div class="Inst"></div>
                <div class="Twitt"></div>
                <div class="FcBook"></div>
                <div class="Google"></div>
            </div>
    </div>

    <!--UpRightBody-->
    <div class="UpRightBody">
        <div class="Content_URB">
            <h1>NIT</h1>
            <p class="p_1">Значит, Новые Информационные Технологии</p>
            <br>
            <p class="p_2">Вместе с нами вы станете на шаг ближе к своей мечте! Новые информационные технологии подарят вам возможность ещё интереснее проживать свою жизнь уже сейчас! </p></div>
    </div>

    <!--NextTwoDiv WHITE BODY, CONTENT-->
    <div class="NextTwoDiv">
        <div class="link1">Цены на удаленное обслуживание</div>
        <div class="CONTENT1"><p>Виртуальная частная сеть (VPN) позволяет объединить несколько офисов организации в единую сеть.

          В случае невозможности или экономической нецелесообразности организации каналов связи (Ethernet, G.703) на базе волоконно-оптической сети наша компания готова предложить свою IP-сеть для создания VPN-туннелей между территориально-удаленными филиалами заказчика.

          При должном уровне реализации и использовании специального программного обеспечения сеть VPN может обеспечить высокий уровень шифрования передаваемой информации.</p></div>
        <div class="CONTENT2">
            <div class="video-block">Для Оренбургских партнёров представлен магазин и региональный склад с наличием ходовых и дифицитных позиций комплектующих , оргтехники, расходных материалов, программного обеспечения. Представлена возможность поставки сертифицированных компьютеров и серверов, работа “под заказ” и с отсрочкой платежа, наличие “подменного фонда” и “взаимодействие с вендорами”. Квалифицированные специалисты правильно проконсультируют и при необходимости сформируют правильную спецификацию и техническое задание. Обращайтесь! Для нас разницы нет , Вам нужен сервер, монитор или сетевое хранилище!  <br><a href="https://nitrino.net/">Nitrino.com</a></div>
            <div class="text-block"></div>
        </div>
        <div class="CONTENT3"></div>
        <div class="CONTENT4">
<div class="wrapper">
          <form action="" class="form__bottom form__body" >

            		<div class="container">
		<div class="row">
			<div class="col s12">
				<nav>
          <!-- ЗДЕСЬ ШЛЯПА ДЛЯ КОРЗИНЫ ТОВАРОВ!!!! -->
					<div class="nav-wrapper">
						<a  class="brand-logo"><b>Пакеты программ:</b></a>
						<ul class="right hide-on-med-and-down">
							<li class="dropdown">
								<a  id="showCart"><i class="material-icons">shopping_cart</i> <span id="cartCount" class="cart_count">0</span></a>
								<div id="dropdownCart" class="card card-dropdown">
									<div class="pl-10">
										<h6 class="d-block">Подитог:</h6>
										<h5 class="mt-0">₽<span id="totalPrice">0</span></h5>
									</div>
									<div class="pl-10">
										<a  class="clear-cart" onclick="cart.clearCart()">Очистить корзину</a>
									</div>
									<ul id="cartPreview" class="collection"></ul>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
 <?php

    // $dsn = 'mysql: host=localhost; dbname=test';
    // $db = new PDO($dsn, 'Essdes', '56768798_Essdes');
    // $q = 'SELECT * FROM `product`  ORDER BY  price DESC';
    // $result = $db->query($q);
    // while ($row = $result->fetch()) {

    //   echo '<div class="col s4"><div class="card"><div class="card-image"><img src="cart/app/img/stah.jpg"><a '.'class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red"

    //    onclick="cart.addToCart('.$row['item_id'] .$row['item_name'].$row['price'].', {title:'.$row['item_name'].', price: '.$row['price'].', image: '."cart/app/img/stah.jpg".

    //    '})"><i class="material-icons">+</i></a>
		// 			</div>
		// 			<div class="card-content">
		// 				<h6><b>'.$row['item_name'].'</b></h6>
		// 				<h5 class="red-text">'.$row['price'].'₽</h5>
		// 				<p class="grey-text">'.$row['brand'].'</p>
		// 			</div>
		// 		</div>
		// 	</div>';
    // };
     /*РАСКОММЕНТИРОВАТЬ*/
?>
					<!-- </div>
				</div>
			</div>
		</div> -->

			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="cart/app/img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(1, {title: `СТАХАНОВЕЦ 9.10`, price: 14128, image: 'cart/app/img/stah.jpg'})"><i class="">+</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.10</b></h6>
						<h5 class="red-text">₽14128</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.10 - 04.02.22</p>
					</div>
				</div>
			</div>
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="cart/app/img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(2, {title: `СТАХАНОВЕЦ 9.03`, price: 13650, image: 'cart/app/img/stah.jpg'})"><i class="">+</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.03</b></h6>
						<h5 class="red-text">₽13650</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.03 - 17.01.22</p>
					</div>
				</div>
			</div>
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="cart/app/img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(3, {title: `СТАХАНОВЕЦ 9.01`, price: 12280, image: 'cart/app/img/stah.jpg'})"><i class="">+</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.01</b></h6>
						<h5 class="red-text">₽12280</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.01 - 10.12.21</p>
					</div>
				</div>
			</div>
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="cart/app/img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(4, {title: `СТАХАНОВЕЦ 9.00`, price: 11550, image: 'cart/app/img/stah.jpg'})"><i class="">+</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 9.00</b></h6>
						<h5 class="red-text">₽11550</h5>
						<p class="grey-text">СТАХАНОВЕЦ 9.00 - 25.11.21</p>
					</div>
				</div>
			</div>
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="cart/app/img/stah.jpg">
						<a class="btn-floating btn-lg halfway-fab waves-effect waves-light pulse red" onclick="cart.addToCart(5, {title: `СТАХАНОВЕЦ 8.86`, price: 10350, image: 'cart/app/img/stah.jpg'})"><i class="">+</i></a>
					</div>
					<div class="card-content">
						<h6><b>СТАХАНОВЕЦ 8.86</b></h6>
						<h5 class="red-text">₽10350</h5>
						<p class="grey-text">СТАХАНОВЕЦ 8.86 - 29.10.21</p>
					</div>
				</div>
			</div>
	<script src="cart/app/js/angry-cart.min.js"></script>
	<script>
		let cart = new AngryCart({
			counter: '#cartCount',
			totalPrice: '#totalPrice',
		});
		function angryCPR() {
			let myCart = JSON.parse(localStorage.getItem(angryCartKey)), // "angryCartKey" - ключ корзины в localStorage (const)
				renderBlock = document.getElementById('cartPreview');
			/* Очищаем блок перед выводом */
			renderBlock.innerHTML = '';
			if( myCart.length != 0 )
			{
				/* Выводим товары из корзины */
				Array.from(myCart).forEach( function(product) {
					renderBlock.insertAdjacentHTML('beforeEnd', `
						<li class="collection-item avatar">
							<img src="${product.data.image}" alt="" class="circle">
							<h6>${product.data.title} <span class="grey-text">x ${product.quantity}</span> <span class="red-text d-block">₽${product.data.price}</span></h6>
							<button class="delete_btn" onclick="cart.removeFromCart(${product.product_id})">Удалить</button>
						</li>
					`);
        $myCart = json_encode($row);

				});
			}
			else
			{
				renderBlock.innerHTML = '<li class="grey-text pl-10 pr-10">Корзина пуста</li>';
			}
		}
	</script>

	<script>
		let cartToggle = document.getElementById('showCart');
		cartToggle.addEventListener('click', () => {
			document.getElementById('dropdownCart').classList.toggle('show');
		});
	</script>
          </form>
            <div class="2ryad-art"></div>
            <div class="2ryad-h"></div>
        </div>
<!-- КОНЕЦ СКРИПТА ДЛЯ КОРЗИНЫ -->

        </div>
           <div class="CONTENT5">
            <p class="par1">+7 (3532) 305-500 <br>info@nitshop.ru<br>г.Оренбург, ул.Комсомольская, д.26</p>
            <input class="button" value="Обратиться к оператору" onclick="alert('Извините, но данная страница находится в разработке.')" type="button">
            <hr>
            <p class="par2">NIT</p>
        </div>
    </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src = "script.js"> </script>
    <script src = "javaScript/script.js"> </script>
            <!-- Кнопка для вызова окна чат-бота -->
<div class="chatbot__btn">
  <div class="chatbot__tooltip d-none">Есть вопрос?</div>
</div>
       <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src = "script.js"> </script>
    <script src = "javaScript/script.js"> </script>
        <script src="/javaScript/my.js"></script>
    <!-- FingerPrint JS -->
    <script src="/chatbot/fp2.js"></script>
    <!-- ChatBot JS -->
    <script src="/chatbot/chatbot.js"></script>
     <script>
    // конфигурация чат-бота
    const configChatbot = {};
    // CSS-селектор кнопки, посредством которой будем вызывать окно диалога с чат-ботом
    configChatbot.btn = '.chatbot__btn';
    // ключ для хранения отпечатка браузера
    configChatbot.key = 'fingerprint';
    // реплики чат-бота
    configChatbot.replicas = '/examples/libs/chatbot/data.json';
    // корневой элемент
    configChatbot.root = SimpleChatbot.createTemplate();
    // URL chatbot.php
    configChatbot.url = '/chatbot/chatbot.php';
    // переменная для хранения экземпляра
    let chatbot = null;
    // добавление ключа для хранения отпечатка браузера в LocalStorage
    let fingerprint = localStorage.getItem(configChatbot.key);
    if (!fingerprint) {
      Fingerprint2.get(function (components) {
        fingerprint = Fingerprint2.x64hash128(components.map(function (pair) {
          return pair.value
        }).join(), 31)
        localStorage.setItem(configChatbot.key, fingerprint)
      });
    }
    // при клике по кнопке configChatbot.btn
    document.querySelector(configChatbot.btn).onclick = function (e) {
      this.classList.add('d-none');
      const $tooltip = this.querySelector('.chatbot__tooltip');
      if ($tooltip) {
        $tooltip.classList.add('d-none');
      }
      configChatbot.root.classList.toggle('chatbot_hidden');
      if (chatbot) {
        return;
      }

      // получение json-файла, содержащего сценарий диалога для чат-бота через AJAX
      const request = new XMLHttpRequest();
      request.open('GET', configChatbot.replicas, true);
      request.responseType = 'json';
      request.onload = function () {
        const status = request.status;
        if (status === 200) {
          const data = request.response;
          if (typeof data === 'string') {
            configChatbot.replicas = JSON.parse(data);
          } else {
            configChatbot.replicas = data;
          }
          // инициализация SimpleChatbot
          chatbot = new SimpleChatbot(configChatbot);
          chatbot.init();
        } else {
          console.log(status, request.response);
        }
      };
      request.send();
    };

    // подсказка для кнопки
    const $btn = document.querySelector(configChatbot.btn);
    $btn.addEventListener('mouseover', function (e) {
      const $tooltip = $btn.querySelector('.chatbot__tooltip');
      if (!$tooltip.classList.contains('chatbot__tooltip_show')) {
        $tooltip.classList.remove('d-none');
        setTimeout(function () {
          $tooltip.classList.add('chatbot__tooltip_show');
        }, 0);
      }
    });
    $btn.addEventListener('mouseout', function (e) {
      const $tooltip = $btn.querySelector('.chatbot__tooltip');
      if ($tooltip.classList.contains('chatbot__tooltip_show')) {
        $tooltip.classList.remove('chatbot__tooltip_show');
        setTimeout(function () {
          $tooltip.classList.add('d-none');
        }, 200);
      }
    });

    setTimeout(function () {
      const tooltip = document.querySelector('.chatbot__tooltip');
      tooltip.classList.add('chatbot__tooltip_show');
      setTimeout(function () {
        tooltip.classList.remove('chatbot__tooltip_show');
      }, 10000)
    }, 10000);
  </script>
</body>
</html>

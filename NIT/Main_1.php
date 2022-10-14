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
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/style_1.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/chatbot/chatbot.css">
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->

    <title>OOO"NIT" - New Informations Technology</title>

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
        <div class="link1">О нас</div>
        <div class="CONTENT1"> <h1>Коллектив - это крепкая основа компании «НИТ».</h1> <p>IT-компания ООО «NIT» существует на рынке 12 лет, по адресу г. Оренбург, ул. Комсомольская, д. 26. За время существования данная компания работает во благо своих клиентов, развивается, получает опыт и новые навыки. Она занимает лидирующие позиции в области поставок ИТ оборудования и активно принимает участие на торгах на территории Российской Федерации. </p></div>
        <div class="CONTENT2">
            <div class="video-block">Компания НИТ во все времена – это, прежде всего, команда профессионалов своего дела. C 2009 года мы работаем во благо наших клиентов, развиваемся, получаем опыт и новые навыки.</div>
            <div class="text-block">Очень важно ставить себе и коллективу правильные цели, задачи, планы; понимать ценности компании о клиенте, продукте и, конечно же, любить свою работу! И если это всё сложить, то получится гремучая смесь, и тогда будет сверхрезультат! Во всём. Чего и Вам желаю!
            </div>
        </div>
        <div class="CONTENT3"></div>
        <div class="CONTENT4">
            <style>
                * {box-sizing: border-box}
                body {font-family: Verdana, sans-serif; margin:0}
                .mySlides {display: none}
                img {vertical-align: middle;}

                /* Slideshow container */
                .slideshow-container {
                  max-width: 1000px;
                  position: relative;
                  margin: auto;
                }

                /* Next & previous buttons */
                .prev, .next {
                  cursor: pointer;
                  position: absolute;
                  top: 50%;
                  width: auto;
                  padding: 16px;
                  margin-top: -22px;
                  color: rgba(33, 36, 218, 0.987);
                  box-shadow: rgba(255, 255, 255, 0.8) 1px 1px 4px;
                  font-weight: bold;
                  font-size: 18px;
                  transition: 0.6s ease;
                  border-radius: 0 3px 3px 0;
                }

                /* Position the "next button" to the right */
                .next {
                  right: 0;
                  border-radius: 3px 0 0 3px;
                }

                /* On hover, add a black background color with a little bit see-through */
                .prev:hover, .next:hover {
                  background-color: rgba(0,0,0,0.8);
                }

                /* Caption text */
                .text {
                    color: #3051d5;
                    font-size: 27px;
                    padding: 3px 12px;
                    position: absolute;
                    bottom: 3px;
                    width: 100%;
                    text-align: center;
                }

                /* Number text (1/3 etc) */
                /* .numbertext {
                  color: #3051d5;
                  font-size: 12px;
                  text-shadow: #3051d5 1px 1px 4px;
                  padding: 8px 12px;
                  position: absolute;
                  top: 0;
                } */

                /* The dots/bullets/indicators */
                .dot {
                  cursor: pointer;
                  height: 15px;
                  width: 15px;
                  margin: 0 2px;
                  background-color: rgb(108, 140, 187);
                  border-radius: 50%;
                  display: inline-block;
                  transition: background-color 0.6s ease;
                }

                .actives, .dot:hover {
                  background-color: #313494;
                }

                /* Fading animation */
                .fade {
                  -webkit-animation-name: fade;
                  -webkit-animation-duration: 1.5s;
                  animation-name: fade;
                  animation-duration: 1.5s;
                }

                @-webkit-keyframes fade {
                  from {opacity: .4}
                  to {opacity: 1}
                }

                @keyframes fade {
                  from {opacity: .4}
                  to {opacity: 1}
                }

                /* On smaller screens, decrease text size */
                @media only screen and (max-width: 300px) {
                  .prev, .next,.text {font-size: 11px}
                }
                </style>
                </head>
                <body>

                <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext"> Наша команда</div>
                  <img src="ART/comand1.jpg" style="width:100%; height: 500px; margin: 50px 0px; background-size: cover; background: no-repeat; border-radius: 300px; box-shadow: rgba(58, 58, 58, 0.726) 1px 1px 6px;" >
                  <!-- <div class="text">«NIT»</div> -->
                </div>

                <div class="mySlides fade">
                  <div class="numbertext"> Наша команда всегда</div>
                  <img src="ART/comand2.jpg" style="width:100%; height: 500px; margin: 50px 0px; background-size: cover; background: no-repeat; border-radius: 300px; box-shadow: rgba(58, 58, 58, 0.726) 1px 1px 6px;" >
                  <!-- <div class="text">«NIT»</div> -->
                </div>

                <div class="mySlides fade">
                  <div class="numbertext"> Наша команда всегда непоколебима!</div>
                  <img src="ART/comand3.jpg" style="width:100%; height: 500px; margin: 50px 0px; background-size: cover; background: no-repeat; border-radius: 300px; box-shadow: rgba(58, 58, 58, 0.726) 1px 1px 6px;">
                  <!-- <div class="text">«NIT»</div> -->
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <br>

                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                </div>

                <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" actives", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " actives";
                }
                </script>
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

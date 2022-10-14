<?php
session_start();
$style="";
if (!$_SESSION['user']) {
    // header('Location: profile.php');
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
    <link rel="stylesheet" href="CSS/style_8.css">
    <link rel="stylesheet" href="/chatbot/chatbot.css">
    <script src="PHP/send.php"></script>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->

    <title>OOO"NIT" - New Informations Technology</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "О нас" />
    <meta name = "keywords" content = "OOO NIT, NIT, New Informations Technology, Новые Информационные Технологии, IT, информационные технологии" />
    <meta name = "robots" content = "index,follow" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript">
         $(document).ready(function(){
            $("#form").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
        </script>
    <script src="JS/javaS.js"></script>
    <script src="JS/script.js"></script>


    <!-- Здесь фавиконы/иконки  -->
    <link rel="apple-touch-icon" sizes="180x180" href="ICON/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ICON/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ICON/favicon-16x16.png">
    <link rel="manifest" href="ICON/site.webmanifest">
</head>
<body>
    <script src="JS/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.minjs"></script>
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
        <div class="link1">Техническая поддержка</div>
        <div class="CONTENT1"> <h1>Возникли проблемы на сайте?</h1> <p>Наша команда незамедлительно предлагает Вам оказание своевременной помощи внутри платформы. Ниже предлагается оставить свои контактные данные, чтобы в дальнейшем наши операторы смогли связаться с вами по электронной почте. </p></div>
        <div class="CONTENT2">
            <div class="video-block">Компания НИТ во все времена – это, прежде всего, команда профессионалов своего дела. C 2009 года мы работаем во благо наших клиентов, развиваемся, получаем опыт и новые навыки.</div>
            <div class="text-block">Очень важно ставить себе и коллективу правильные цели, задачи, планы; понимать ценности компании о клиенте, продукте и, конечно же, любить свою работу! И если это всё сложить, то получится гремучая смесь, и тогда будет сверхрезультат! Во всём. Чего и Вам желаю!
            </div>
        </div>
        <div class="CONTENT3"></div>
        <div class="CONTENT4" title="При возникновении ошибки, укажите свои данные, чтобы оператор смог с вами связаться по электронной почте.">
             <h1 class="form__words"> <span> Есть проблемы на сайте? <br> Заполни форму</span> </h1>

            <!-- <form action="send.php" method="POST" target="_blank">
            <input class="forms text-panel-1" type="text" name="fio" placeholder="Укажите ФИО" required>
            <input class="forms text-panel-2" type="text" name="email" placeholder="Укажите e-mail" required>
            <input class="forms button-panel" type="submit" value="Отправить" >
            </form> -->
            </div>
         <div class="wrapper">
        <div class="form" > <!-- action="sendmailer.php" method="POST"-->
            <form id="form" class="form__body"  action="sendmailer.php" method="POST"> <!-- action="#" -->
                <h1 class="form__title"> Отправка данных на почту</h1>
                <div class="form__item">
                    <label for="forName" class="form__label">Имя<a href="">*</a>: </label>
                    <!--  -->
                    <!-- name="name" для фио -->
                    <!--  -->
                    <input id="forName" type="text" name="name" class="form__input _req" placeholder="Ваши ФИО..." >
                </div>
                <div class="form__item">
                    <label for="formEmail" class="form__label">E-mail<a href="">*</a>: </label>
                    <!--  -->
                    <!-- name="email" для почты -->
                    <!--  -->
                    <input type="text" name="emails" id="formEmail" class="form__input _req _email" placeholder="Ваш E-mail..." > <!--_req - то есть обязательные поля (это можно убрать, чтобы браузер не ругался) -->
                </div>
                <div class="form__item">
                     <div class="form__label">Тематика ошибки:</div>
                    <select name="problem" class="select" id=""> <!--name= "age"-->
                        <option value="Не могу провести транзакцию" selected>Не могу провести транзакцию</option>
                        <option value="Не могу оформить услугу">Не могу оформить услугу</option>
                        <option value="Другое">Другое</option>
                    </select>
                 </div>
                <div class="form__item">
                    <!-- <div class="form__label">Ваш запрос:</div> -->
                    <div class="options">
                        <!-- првая рука -->
                        <!-- <div class="options__item">
                            <input checked type="radio" name="hand" class="options__input" id="formRightHanded" value="right">
                            <label for="formRightHanded" class="options__label"><span>Выбрать</span></label>
                        </div> -->
                        <!-- левая рука -->
                        <!-- <div class="options__item">
                            <input type="radio" name="hand" class="options__input" id="formLeftHanded" value="left">
                            <label for="formLeftHanded" class="options__label"><span>Другое</span></label>
                        </div> -->
                    </div>
                </div>
                 <div class="form__item">
                     <label for="formMessage" class="form__label">Сообщение:</label>
                     <textarea name="message" id="formMessage" class="form__input" placeholder="У меня проблемы по жизни..."></textarea>
                 </div>

                 <div class="form__item">
                     <div class="form__label">Прикрепить фото</div>
                     <div class="file">
                         <div class="file__item">
                             <input accept=".jpg, .png, .gif" type="file" name="image" class="file__input" id="formImage">
                             <div class="file__button">Выбрать</div>
                         </div>
                         <div id="formPreview" class="file__preview"></div>
                     </div>
                 </div>
                 <div class="form__item">
                     <div class="checkbox">
                         <input checked type="checkbox" name="agreement" id="formAgreement" class="checkbox__input _req">
                         <label for="formAgreement" class="checkbox__label" required> <span>Я даю свое согласие на обработку персональных данных в соответствии с <a href="">Условиями</a>*</span>
                         </label>
                     </div>
                 </div>
                 <button type="submit" class="form__button" name="submit">Отправить</button>
                  <!-- <script src = "script.js"> </script> -->
            </form>
     </div>
    </div>
        <div class="CONTENT5">
          <p class="par1">+7 (3532) 305-500 <br>info@nitshop.ru<br>г.Оренбург, ул.Комсомольская, д.26</p>
          <input  name="text__operate" class="button" value="Обратиться к оператору" onclick="alert('Извините, данная страница недоступна, так как находится в разработке.')" type="button" > <!--type="button" /submit-->  <!---->
          <hr class="hr">
          <p class="par2">NIT</p>
      </div>
    </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <script src = "script.js"> </script> -->
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

    <!-- script.js -->
</body>
</html>

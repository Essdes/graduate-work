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
    <link rel="stylesheet" href="CSS/style_6.css">
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
        <div class="link1">Кандидату</div>
        <div class="CONTENT1"> <p>  Уважаемый клиент! Компания НИТ уже 10 лет на рынке Оренбуржья занимает лидирующие позиции в области поставок ИТ  оборудования и активно принимает участие на торгах на территории Российской Федерации ! Наши сотрудники оперативно могут Вам помочь в подготовке технических заданий, выставлении коммерческих предложений с подбором оборудования по Вашим требованиям, предоставлении эксклюзивных товаров в тендерах и, при необходимости, оказать помощь в подготовке разъяснений и запросов на аукционную документацию. Мы всегда будем рады Вам помочь, так как это- наша работа! </p></div>
        <div class="CONTENT2">
            <div class="video-block">Компания NIT предоставляет , пожалуй, лучший сервис и является лидером по сопровождению государственных информационных систем и порталов в Оренбургской области. Клиентам предоставляется многоканальная горячая линия, удаленная техническая поддержка, неограниченное количество обращений. Мы контактируем с разработчиками систем и порталов, поэтому высококвалифицированная помощь специалистов Вам гарантирована!
              В перечень обслуживающих программ входит техническое сопровождение ГИС ГМП, СОЗ Полтава, АСФК СУФД Онлайн, Электронный Бюджет, МИАС ЗАГС, Zakupki.gov , Bus.gov и др. порталов и систем; оказание помощи в получение ЭЦП ФК; перенос баз данных на новые рабочие места.
              Ежемесячная стоимость сопровождения составляет от 2500 рублей и зависит от условий договора и перечня обслуживаемых систем и порталов.</div>
            <div class="text-block"></div>
        </div>
        <div class="CONTENT3"></div>
        <div class="CONTENT4">
          <table class="table-1">
            <tr>
              <th>Ваши задачи:</th>
            </tr>
            <tr class="tr1">
              <td>Формирование и развитие партнерской сети по закрепленным регионам РФ; </td>
            </tr>
            <tr>
              <td>информирование о продуктах ТМ NITRINO ;</td>
            </tr>
            <tr class="tr1">
              <td> составление коммерческих предложений и технических заданий.</td>
            </tr>
            <tr>
              <th>Требования:</th>
            </tr>
            <tr class="tr1">
              <td>Знания в IT области и в продажах;</td>
            </tr>
            <tr>
              <td>Активная жизненная позиция, коммуникабельность.</td>
            </tr>
            <tr class="tr1">
              <th>Условия:</th>
            </tr>
            <tr>
              <td>Оформление по ТК РФ, 5 дневная рабочая неделя, работа в офисе</td>
            </tr>
            <tr class="tr1">
              <td>Возможность карьерного, профессионального и финансового роста</td>
            </tr>
            <tr>
              <td>Оклад (20 000 рублей) + проценты за выполнение плана kpi.</td>
            </tr>
            <tr class="tr1">
              <td>По вопросам трудоустройства и прохождения производственной практики обращаться к <b> Семёну Бебенину – 8 (3532) 305-500 доб 112 bebenin@nitshop.ru </b></td>
            </tr>
          </table>
          <!-- Таблица 2 -->
          <table class="table-2">
            <tr>
              <th>Ваши задачи:</th>
            </tr>
            <tr class="tr1">
              <td>Формирование и развитие партнерской сети по закрепленным регионам РФ; </td>
            </tr>
            <tr>
              <td>информирование о продуктах ТМ NITRINO ;</td>
            </tr>
            <tr class="tr1">
              <td> составление коммерческих предложений и технических заданий.</td>
            </tr>
            <tr>
              <th>Требования:</th>
            </tr>
            <tr class="tr1">
              <td>Знания в IT области и в продажах;</td>
            </tr>
            <tr>
              <td>Активная жизненная позиция, коммуникабельность.</td>
            </tr>
            <tr class="tr1">
              <th>Условия:</th>
            </tr>
            <tr>
              <td>Оформление по ТК РФ, 5 дневная рабочая неделя, работа в офисе</td>
            </tr>
            <tr class="tr1">
              <td>Возможность карьерного, профессионального и финансового роста</td>
            </tr>
            <tr>
              <td>Оклад (20 000 рублей) + проценты за выполнение плана kpi.</td>
            </tr>
            <tr class="tr1">
              <td>По вопросам трудоустройства и прохождения производственной практики обращаться к <b> Семёну Бебенину – 8 (3532) 305-500 доб 112 bebenin@nitshop.ru </b></td>
            </tr>
          </table>

          <div class="dI"><img class="imgS" src="ART/work.png"></div>
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

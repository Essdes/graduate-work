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
    <link rel="stylesheet" href="CSS/style_3.css">
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
        <div class="link1">Бухгалтеру</div>
        <div class="CONTENT1"><p> Что такое электронная подпись? Если говорить простыми словами это цифровой аналог собственноручной подписи человека. Электронная подпись(ЭП) позволяет ее владельцу достоверно подтверждать свою личность в сети Интернет, защищать документы от изменения, осуществлять юридически значимые операции.  Компания НИТ совместно с партнером – Удостоверяющим Центром ИТК осуществляет выпуск ЭП самого различного назначения(подписи для торгов, таможенной службы, ЕГАИС, россалкорегулирования и многие другие). Простая процедура выпуска, малое количество необходимых документов, оперативность и конкурентные цены гарантирует что в нужный момент вы не останетесь без ЭП!

          Помимо этого, мы всегда готовы оказать помощь в настройке рабочего места для работы с электронный подписью. </p></div>
        <div class="CONTENT2">
            <div class="video-block">     Компания NIT предоставляет , пожалуй, лучший сервис и является лидером по сопровождению государственных информационных систем и порталов в Оренбургской области. Клиентам предоставляется многоканальная горячая линия, удаленная техническая поддержка, неограниченное количество обращений. Мы контактируем с разработчиками систем и порталов, поэтому высококвалифицированная помощь специалистов Вам гарантирована!

              В перечень обслуживающих программ входит техническое сопровождение ГИС ГМП, СОЗ Полтава, АСФК СУФД Онлайн, Электронный Бюджет, МИАС ЗАГС, Zakupki.gov , Bus.gov и др. порталов и систем; оказание помощи в получение ЭЦП ФК; перенос баз данных на новые рабочие места.

              Ежемесячная стоимость сопровождения составляет от 2500 рублей и зависит от условий договора и перечня обслуживаемых систем и порталов.</div>
            <div class="text-block"></div>
        </div>
        <div class="CONTENT3"></div>
        <div class="CONTENT4">
          <table class="table-1">
            <tr>
              <th class="th1">&nbsp;Коммерческие ЭЦП</th>
              <th class="thO">&nbsp;Цена</th>
            </tr>
            <tr class="tr2">
              <td class="tdO">Федеральные торговые площадки <br>
                (Сбербанк-АСТ, Национальная электронная площадка, РТС-тендер, ГУП «Агентство по государственному заказу, инвестиционной деятельности и межрегиональным связям Республики Татарстан», www.zakazrf.ru, АО «Единая Электронная Торговая Площадка», Система электронных торгов АО «Российский аукционный дом»)</td>
              <td>3500</td>
            </tr>
            <tr>
              <td class="tdO">Коммерческие площадки Коммерческие площадки входящие в список АЭТП (http://aetp.ru/etp/list)</td>
              <td>4200</td>
            </tr>
            <tr class="tr2">
              <td class="tdO">ФТП + Коммерческие<br>
                Объединяет две вышестоящие подписи, подходит для большинства случаев торгов.</td>
              <td>5000</td>
            </tr>
            <tr>
              <td class="tdO">ЕГАИС<br>
                Подтверждение накладных и факта продаж алкоголя в системе ЕГАИС, записывается только на JaCarta ГОСТ</td>
              <td>1500</td>
            </tr>
            <tr class="tr2">
              <td class="tdO">Квалифицированная ЭП<br>
                Простая квалифицированная подпись, для электронного документооборота, подтверждения личности, работы с сайтом gosuslugi.ru, онлайн кассы, подпись медицинского работника</td>
              <td>2000</td>
            </tr>
            <tr>
              <td class="tdO">ГПБ<br>
                Специализированная торговая площадка Газпромбанк</td>
              <td>5200</td>
            </tr>
            <tr class="tr2">
              <td class="tdO">B2B – Center<br>
                Группа площадок b2b – center</td>
              <td>3200</td>
            </tr>
            <tr>
              <td class="tdO">ТЭК Торг<br>
                Специализированная торговая площадка Тэк Торг</td>
              <td>3500</td>
            </tr>
            <tr class="tr2">
              <td class="tdO">Центр – Реализации<br>
                Специализированная торговая площадка www.centerr.ru</td>
              <td>3200</td>
            </tr>
            <tr>
              <td class="tdO">Крипто Про встроенная лицензияЛицензия встроенная непосредственно в подпись</td>
              <td>800</td>
            </tr>
            <tr class="tr2">
              <td class="tdO">Крипто Про 4.0 лицензия на 1 год</td>
              <td>1200</td>
            </tr>
            <tr>
              <td class="tdO">Крипто Про 4.0 постоянная лицензия</td>
              <td>2700</td>
            </tr>
            <tr class="tr2">
              <td class="tdO">Носитель RuToken S 16 Kb</td>
              <td>1000</td>
            </tr>
            <tr>
              <td class="tdO">Носитель JaCarta ГОСТ</td>
              <td>2000</td>
            </tr>
          </table>
          <!-- Таблица 2 -->
          <table class="table-2">
            <tr>
              <th>Коммерческие ЭЦП</th>
            </tr>
            <tr class="tr1">
              <td>Федеральные торговые площадки<br>
                (Сбербанк-АСТ, Национальная электронная площадка, РТС-тендер, ГУП «Агентство по государственному заказу, инвестиционной деятельности и межрегиональным связям Республики Татарстан», www.zakazrf.ru, АО «Единая Электронная Торговая Площадка», Система электронных торгов АО «Российский аукционный дом») - <b>3500 руб.</b></td>
            </tr>
            <tr>
              <td>Запрет на выполнение различных действий с документами на машине пользователя на основании содержимого документов</td>
            </tr>
            <tr class="tr1">
              <td>Коммерческие площадки Коммерческие площадки входящие в список АЭТП (http://aetp.ru/etp/list) - <b>4200 руб.</b></td>
            </tr>
            <tr>
              <td>ФТП + Коммерческие <br>
                Объединяет две вышестоящие подписи, подходит для большинства случаев торгов. - <b>5000 руб.</b></td>
            </tr>
            <tr class="tr1">
              <td>ЕГАИС <br>
                Подтверждение накладных и факта продаж алкоголя в системе ЕГАИС, записывается только на JaCarta ГОСТ - <b>1500 руб.</b></td>
            </tr>
            <tr>
              <td>Квалифицированная ЭП<br>
                Простая квалифицированная подпись, для электронного документооборота, подтверждения личности, работы с сайтом gosuslugi.ru, онлайн кассы, подпись медицинского работника - <b>2000 руб.</b></td>
            </tr>
            <tr class="tr1">
              <td>ГПБ<br>
                Специализированная торговая площадка Газпромбанк - <b>5200 руб.</b></td>
            </tr>
            <tr>
              <td>B2B – Center <br>
                Группа площадок b2b – center - <b>3200 руб.</b></td>
            </tr>
            <tr class="tr1">
              <td>ТЭК Торг <br>
                Специализированная торговая площадка Тэк Торг - <b>3500 руб.</b></td>
            </tr>
            <tr>
              <td>Центр – Реализации <br>
                Специализированная торговая площадка www.centerr.ru - <b>3200 руб.</b></td>
            </tr>
            <tr class="tr1">
              <td>Крипто Про встроенная лицензияЛицензия встроенная непосредственно в подпись - <b>800 руб.</b></td>
            </tr>
            <tr>
              <td>Крипто Про 4.0 лицензия на 1 год - <b>1200 руб.</b></td>
            </tr>
            <tr class="tr1">
              <td>Крипто Про 4.0 постоянная лицензия - <b>2700 руб.</b></td>
            </tr>
            <tr>
              <td>Носитель RuToken S 16 Kb - <b>1000 руб.</b></td>
            </tr>
            <tr class="tr1">
              <td>Носитель JaCarta ГОСТ - <b>2000 руб.</b></td>
            </tr>
          </table>

          <div class="dI"><img class="imgS" src="ART/эцп.png"></div>
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

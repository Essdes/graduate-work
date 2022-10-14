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
    <link rel="stylesheet" href="CSS/style_4.css">
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
        <div class="link1">IT Специалисту</div>
        <div class="CONTENT1"><p> Компания NIT работает с юридическими и физическими лицами, оказывает полный цикл по сопровождению компьютерной техники (IT аутсорсинг серверов, локально-вычислительных сетей, настройки и автоматизация рабочих мест), оргтехники (ТО и ремонт копировально-множительной техники, принтеров, заправка картриджей) , аппаратного ремонта (чистка и восстановление работоспособности ноутбуков, мониторов , планшетов), видеонаблюдения (монтаж и настройка внутренних и наружных камер, скуд, сетей), программного обеспечения (резервное копирование, антивирусные решения, 1С , Microsoft).</p></div>
        <div class="CONTENT2">
            <div class="video-block">      Рады предложить Вам услугу комплексного сопровождения при открытии филиалов, представительств ; субподрядного обслуживания на территории Оренбуржья; услуги IT в процессах школьного и дошкольного обучения ; информационного и технического обслуживания государственных учреждений.

              Рады предложить Вам различные формы оплаты – по договору с возможностью отсрочки платежа, наличный и безналичный расчет , оплата банковскими картами, возможность оформления в штат на ½ или полную ставку.</div>
            <div class="text-block"></div>
        </div>
        <div class="CONTENT3"></div>
        <div class="CONTENT4">
          <!-- Общий макет таблицы 1-->
         <div class="table-block-over">
           <!-- 1 столбец -->
           <div class="table-block-1 table-block">
            <div class="r1"><p><br><br><b>Сопровождение</b><br><b>сайтов</b></p></div><br>
            <div class="r2"><p>Максимальное кол-во сайтов на поддержке</p></div><br>
            <div class="r3"><p>Хранение всех доступов к сайту (домен, хостинг, FTP, база данных, админ. Панель)Email Accounts</p></div><br>
            <div class="r4"><p>Настройка резервного копирования </p></div><br>
            <div class="r5"><p>Контроль срока делегирования домена и оплаты хостинга</p></div><br>
            <div class="r6"><p>Добавление и изменение разделов </p></div><br>
            <div class="r7"><p>Восстановление работоспособности</p></div><br>
            <div class="r8"><p>Оперативное восстановление работоспособности</p></div><br>
            <div class="r9"><p>Кол-во размещаемой информации нашими специалистами по вашей просьбе в месяц</p></div><br>
            <div class="r10"><p>Диагностика наличия вирусов </p></div><br>
            <div class="r11"><p>Удаление вирусов </p></div><br>
            <div class="r12"><p>Изменение графических элементов дизайна </p></div><br>
            <div class="r13"><p>Разработка и размещение баннеров </p></div><br>
            <div class="r14"><p>Работы по поддержанию актуальной версии CMS  </p></div><br>
            <div class="r15"><p>Аналитика (рекомендации по улучшению сайта) </div><br>
            <div class="r16"><p>Настройка и подключение HTTPS </p></div><br>
            <div class="r17"><p><br> Сопровождение <br> сайтов</p></div><br>
            <!-- <div class="r18"><p><br> Сопровождение <br> сайтов</p></div> -->
           </div>
           <!-- 2 столбец -->
           <div class="table-block-2 table-block tb-hover">
            <div class="r1"><p><b>LITE</b></p><br> <p><b>1500</b><br><b>руб/мес</b></p><hr></div><br>
            <div class="r2"><p style="margin: 19px;">1</p><hr></div><br>
            <div class="r3"><p style="margin: 56px;">&#128504;</p><hr></div><br>
            <div class="r4"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r5"><p style="margin: 27px;">&#128504;</p><hr></div><br>
            <div class="r6"><p style="margin: 19px;">&#128504;</p><hr></div><br>
            <div class="r7"><p style="margin: 8px;">&#128504;</p><hr></div><br>
            <div class="r8"><p style="margin: 19px;">&#8211;</p><hr></div><br>
            <div class="r9"><p style="margin: 47px 0;">Помощь в размещении до 10</p><hr></div><br>
            <div class="r10"><p style="margin: 11px;">&#8211;</p><hr></div><br>
            <div class="r11"><p style="margin: 0px;">&#8211;</p><hr></div><br>
            <div class="r12"><p style="margin: 28px;">&#8211;</p><hr></div><br>
            <div class="r13"><p style="margin: 18px;">&#8211;</p><hr></div><br>
            <div class="r14"><p style="margin: 29px;">&#8211;</p><hr></div><br>
            <div class="r15"><p style="margin: 19px;">&#8211;</p><hr></div><br>
            <div class="r16"><p style="margin: 19px;">&#8211;</p><hr></div><br>
            <div class="r17"><p style="margin: 19px;">&#8211;</p></div><br>
            <div class="r18"><p style="margin: 19px;">&#10918;Buy&#10919;</p></div><br>
           </div>
           <!-- 3 столбец -->
           <div class="table-block-3 table-block tb-hover">
            <div class="r1"><p><b>MEDIUM</b></p><br><p><b>3250</b><br><b>руб/мес</b></p><hr></div><br>
            <div class="r2"><p style="margin: 19px;">3</p><hr></div><br>
            <div class="r3"><p style="margin: 56px;">&#128504;</p><hr></div><br>
            <div class="r4"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r5"><p style="margin: 27px;">&#128504;</p><hr></div><br>
            <div class="r6"><p style="margin: 19px;">&#128504;</p><hr></div><br>
            <div class="r7"><p style="margin: 8px;">&#128504;</p><hr></div><br>
            <div class="r8"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r9"><p style="margin: 56px 0;">30</p><hr></div><br>
            <div class="r10"><p style="margin: 11px;">&#128504;</p><hr></div><br>
            <div class="r11"><p style="margin: -1px;">&#128504;</p><hr></div><br>
            <div class="r12"><p style="margin: 26px;">&#128504;</p><hr></div><br>
            <div class="r13"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r14"><p style="margin: 29px;">&#8211;</p><hr></div><br>
            <div class="r15"><p style="margin: 19px;">&#8211;</p><hr></div><br>
            <div class="r16"><p style="margin: 19px;">&#8211;</p><hr></div><br>
            <div class="r17"><p style="margin: 19px;">&#8211;</p></div><br>
            <div class="r18"><p style="margin: 19px;">&#10918;Buy&#10919;</p></div><br>
           </div>
           <!-- 4 столбец -->
           <div class="table-block-4 table-block tb-hover">
            <div class="r1"><p><b>PRO</b> </p><br><p><b>5000</b><br><b>руб/мес</b></p><hr></div><br>
            <div class="r2"><p style="margin: 19px;">&#8734;</p><hr></div><br>
            <div class="r3"><p style="margin: 56px;">&#128504;</p><hr></div><br>
            <div class="r4"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r5"><p style="margin: 27px;">&#128504;</p><hr></div><br>
            <div class="r6"><p style="margin: 19px;">&#128504;</p><hr></div><br>
            <div class="r7"><p style="margin: 8px;">&#128504;</p><hr></div><br>
            <div class="r8"><p style="margin: 19px;">&#128504;</p><hr></div><br>
            <div class="r9"><p style="margin: 55px 0;">&#8734;</p><hr></div><br>
            <div class="r10"><p style="margin: 10px;">&#128504;</p><hr></div><br>
            <div class="r11"><p style="margin: 0px;">&#128504;</p><hr></div><br>
            <div class="r12"><p style="margin: 26px;">&#128504;</p><hr></div><br>
            <div class="r13"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r14"><p style="margin: 28px;">&#128504;</p><hr></div><br>
            <div class="r15"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r16"><p style="margin: 18px;">&#128504;</p><hr></div><br>
            <div class="r17"><p style="margin: 18px;">&#128504;</p></div><br>
            <div class="r18"><p style="margin: 18px;">&#10918;Buy&#10919;</p></div><br>
           </div>
         </div>

         <!-- Таблица 2 -->
         <table class="Tab-2">
           <tr>
             <th>Сопровождение сайтов</th>
             <th>LITE <br><b>1500 руб/мес</b> </th>
             <th>MEDIUM <br><b> 3250 руб/мес</b></th>
             <th>PRO <br><b> 5000 руб/мес</b></th>
           </tr>
           <!-- 1 -->
           <tr class="tr1">
             <td>Максимальное кол-во сайтов на поддержке</td>
             <td>1</td>
             <td>3</td>
             <td>&#8734;</td>
           </tr>
           <!-- 2 -->
           <tr>
             <td>Хранение всех доступов к сайту (домен, хостинг, FTP, база данных, админ. Панель)Email Accounts</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 3 -->
           <tr class="tr1">
             <td>Настройка резервного копирования </td>
             <td>&#128504;</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 4 -->
           <tr>
             <td>Контроль срока делегирования домена и оплаты хостинга</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 5 -->
           <tr class="tr1">
             <td>Добавление и изменение разделов </td>
             <td>&#128504;</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 6 -->
           <tr>
             <td>Восстановление работоспособности</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 7 -->
           <tr class="tr1">
             <td>Оперативное восстановление работоспособности</td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 8 -->
           <tr>
             <td>Кол-во размещаемой информации нашими специалистами по вашей просьбе в месяц</td>
             <td>10</td>
             <td>30</td>
             <td>&#8734;</td>
           </tr>
           <!-- 9 -->
           <tr class="tr1">
             <td>Диагностика наличия вирусов </td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 10 -->
           <tr>
             <td>Удаление вирусов </td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 11 -->
           <tr class="tr1">
             <td>Изменение графических элементов дизайна </td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 12 -->
           <tr>
             <td>Разработка и размещение баннеров </td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
             <td>&#128504;</td>
           </tr>
           <!-- 13 -->
           <tr class="tr1">
             <td>Работы по поддержанию актуальной версии CMS  </td>
             <td><b>&#8211;</b></td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
           </tr>
           <!-- 14 -->
           <tr>
             <td>Аналитика (рекомендации по улучшению сайта) </td>
             <td><b>&#8211;</b></td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
           </tr>
           <!-- 15 -->
           <tr class="tr1">
             <td>Настройка и подключение HTTPS </td>
             <td><b>&#8211;</b></td>
             <td><b>&#8211;</b></td>
             <td>&#128504;</td>
           </tr>
           <!-- 16 -->
           <tr class="Buy">
             <td>&nbsp</td>
             <td class="B1"><b>Buy</b></td>
             <td class="B2"><b>Buy</b></td>
             <td class="B3"><b>Buy</b></td>
           </tr>
         </table>
          <div class="dI"><img class="imgS" src="ART/САЙТ-О.png"></div>
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

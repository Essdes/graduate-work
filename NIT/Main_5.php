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
    <link rel="stylesheet" href="CSS/style_5.css">
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
      <div class="link1">Партнеру</div>
      <div class="CONTENT1"><p> С 2018 года компания NIT выпускает компьютерное оборудование под собственной торговой маркой Nitrino net. Производственный цикл подтвержден сертификатами ISO, ГОСТ . В перечне разрабатываемой и выпускаемой продукции – системные блоки и сервера, программно-аппаратные комплексы , модули мониторинга , материнские платы управления рабочими станциями и серверами, датчики для телеметрии , компьютерные корпуса и другие полезные IT продукты.
        Продукция и сервисное обслуживание продукции ТМ NITRINOnet распространяется через сеть авторизованных дилеров. География – свыше 200 партнеров на территории РФ</p></div>
      <div class="CONTENT2">
          <div class="video-block">Для Оренбургских партнёров представлен магазин и региональный склад с наличием ходовых и дифицитных позиций комплектующих , оргтехники, расходных материалов, программного обеспечения. Представлена возможность поставки сертифицированных компьютеров и серверов, работа “под заказ” и с отсрочкой платежа, наличие “подменного фонда” и “взаимодействие с вендорами”. Квалифицированные специалисты правильно проконсультируют и при необходимости сформируют правильную спецификацию и техническое задание. Обращайтесь! Для нас разницы нет , Вам нужен сервер, монитор или сетевое хранилище!  <br><a href="https://nitrino.net/">Nitrino.com</a></div>
          <div class="text-block"></div>
      </div>
      <div class="CONTENT3"></div>
      <div class="CONTENT4">
        <!-- 1 -->
        <table class="table-1">
          <tr>
            <th class="th1">&nbsp;Контракты за 2021</th>
            <th class="thO">&nbsp;Организация</th>
            <th class="thO">&nbsp;Регион</th>
            <th class="thO">&nbsp;Товар</th>
            <th class="thO">&nbsp;Сумма</th>
          </tr>
          <tr class="tr2">
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка ПЭВМ</td>
            <td>2 151 000</td>
          </tr>
          <tr>
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка преобразователей частоты</td>
            <td>	73 340</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка расходных материалов для оргтехники</td>
            <td>	86 488</td>
          </tr>
          <tr>
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка аккумуляторных батарей и элементов питания к спецтехнике</td>
            <td>9 003</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка многофункционального ручного инструмента</td>
            <td>57 930</td>
          </tr>
          <tr>
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка химических источников тока, аккумуляторов</td>
            <td>159 999</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Май</td>
            <td>МУНИЦИПАЛЬНОЕ КАЗЕННОЕ УЧРЕЖДЕНИЕ ХОЗЯЙСТВЕННЫЙ ОТДЕЛ АДМИНИСТРАЦИИ ТАШЛИНСКОГО РАЙОНА</td>
            <td>Оренбургская область</td>
            <td>Поставка расходных материалов к оргтехнике</td>
            <td>99 421</td>
          </tr>
          <tr>
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка компьютеров в сборе</td>
            <td>1 519 495</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Май</td>
            <td>АСТ-ГОЗ</td>
            <td>Забайкальский край</td>
            <td>Поставка камер видеонаблюдения</td>
            <td>159 000</td>
          </tr>
          <tr>
            <td class="tdO">Май</td>
            <td>УКИМП</td>
            <td>Оренбургская область</td>
            <td>На поставку товара (компьютерная и орг.техника)</td>
            <td>100 000</td>
          </tr>
        </table>
        <!-- 2  -->
        <table class="table-1">
          <tr>
            <th class="th1">&nbsp;Контракты за 2020</th>
            <th class="thO">&nbsp;Организация</th>
            <th class="thO">&nbsp;Регион</th>
            <th class="thO">&nbsp;Товар</th>
            <th class="thO">&nbsp;Сумма</th>
          </tr>
          <tr class="tr2">
            <td class="tdO">Август</td>
            <td>АКЦИОНЕРНОЕ ОБЩЕСТВО “360 АВИАЦИОННЫЙ РЕМОНТНЫЙ ЗАВОД”</td>
            <td>Рязанская область</td>
            <td>Поставка аккумуляторных батарей</td>
            <td>23 249</td>
          </tr>
          <tr>
            <td class="tdO">Август</td>
            <td>АСТ-ГОЗ</td>
            <td>Забайкальский край</td>
            <td>Поставка аккумуляторных батарей</td>
            <td>1 188 369</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Август</td>
            <td>АСТ-ГОЗ</td>
            <td>Московская область</td>
            <td>Поставка инструментов</td>
            <td>222 139</td>
          </tr>
          <tr>
            <td class="tdO">Август</td>
            <td>АСТ-ГОЗ</td>
            <td>Хабаровский край</td>
            <td>Поставка луп штативных</td>
            <td>	24 854</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Август</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка зарядных устройств</td>
            <td>	13 599</td>
          </tr>
          <tr>
            <td class="tdO">Август</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка ручных инструментов и расходных материалов</td>
            <td>50 249</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Август</td>
            <td>АСТ-ГОЗ</td>
            <td>Московская область</td>
            <td>Оказание услуг по продлению неисключительных прав (лицензий) на использование антивирусного программного обеспечения</td>
            <td>59 730</td>
          </tr>
          <tr>
            <td class="tdO">Август</td>
            <td>ГКУ - “ЦОЗ”</td>
            <td>Оренбургская область</td>
            <td>Поставка устройств внешних запоминающих</td>
            <td>	29 830</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Август</td>
            <td>ГОСУДАРСТВЕННОЕ АВТОНОМНОЕ УЧРЕЖДЕНИЕ ОРЕНБУРГСКОЙ ОБЛАСТИ “РЕГИОНАЛЬНОЕ АГЕНТСТВО МОЛОДЕЖНЫХ ПРОГРАММ И ПРОЕКТОВ”</td>
            <td>Оренбургская область</td>
            <td>Поставка камер видеонаблюдения</td>
            <td>31 931</td>
          </tr>
        </table>
            <!-- 3 -->
        <table class="table-1">
          <tr>
            <th class="th1">&nbsp;Контракты за 2019</th>
            <th class="thO">&nbsp;Организация</th>
            <th class="thO">&nbsp;Регион</th>
            <th class="thO">&nbsp;Товар</th>
            <th class="thO">&nbsp;Сумма</th>
          </tr>
          <tr class="tr2">
            <td class="tdO">Январь</td>
            <td>ЗАКОНОДАТЕЛЬНОЕ СОБРАНИЕ ОРЕНБУРГСКОЙ ОБЛАСТИ</td>
            <td>Рязанская область</td>
            <td>Поставка аккумуляторных батарей</td>
            <td>880 000</td>
          </tr>
          <tr>
            <td class="tdO">Январь</td>
            <td>ОРЕНБУРГСКИЙ ОБЛАСТНОЙ КЛИНИЧЕСКИЙ НАРКОЛОГИЧЕСКИЙ ДИСПАНСЕР</td>
            <td>Забайкальский край</td>
            <td>Поставка аккумуляторных батарей</td>
            <td>	2 340 000</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Февраль</td>
            <td>АСТ-ГОЗ</td>
            <td>Московская область</td>
            <td>Поставка инструментов</td>
            <td>	48 000</td>
          </tr>
          <tr>
            <td class="tdO">Февраль</td>
            <td>АДМИНИСТРАЦИЯ ГОРОДСКОГО ОКРУГА ЗАТО КОМАРОВСКИЙ ОРЕНБУРГСКОЙ ОБЛАСТИ</td>
            <td>Хабаровский край</td>
            <td>Поставка луп штативных</td>
            <td>	20 000</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Февраль</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка зарядных устройств</td>
            <td>38 000</td>
          </tr>
          <tr>
            <td class="tdO">Февраль</td>
            <td>АСТ-ГОЗ</td>
            <td>Мурманская область</td>
            <td>Поставка ручных инструментов и расходных материалов</td>
            <td>	9 900</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Сентябрь</td>
            <td>ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ ЗДРАВООХРАНЕНИЯ АМУРСКОЙ ОБЛАСТИ “ШИМАНОВСКАЯ БОЛЬНИЦА”</td>
            <td>Московская область</td>
            <td>Оказание услуг по продлению неисключительных прав (лицензий) на использование антивирусного программного обеспечения</td>
            <td>	464 000</td>
          </tr>
          <tr>
            <td class="tdO">Сентябрь</td>
            <td>ГОСУДАРСТВЕННОЕ КАЗЕННОЕ УЧРЕЖДЕНИЕ “ЦЕНТР ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ ОРЕНБУРГСКОЙ ОБЛАСТИ”</td>
            <td>Оренбургская область</td>
            <td>Поставка устройств внешних запоминающих</td>
            <td> 185 381.75</td>
          </tr>
          <tr class="tr2">
            <td class="tdO">Сентябрь</td>
            <td>АСТ-ГОЗ</td>
            <td>Оренбургская область</td>
            <td>Поставка камер видеонаблюдения</td>
            <td>35 999</td>
          </tr>
          <tr>
            <td class="tdO">Сентябрь</td>
            <td>АСТ-ГОЗ</td>
            <td>Оренбургская область</td>
            <td>Поставка камер видеонаблюдения</td>
            <td>109 099</td>
          </tr>
        </table>

        <!-- Таблица 2 -->
        <table class="table-2">
          <tr>
            <th>Контракты за 2021</th>
          </tr>
          <tr class="tr1">
            <td>Поставка аккумуляторных батарей	- <b>23 249 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка аккумуляторных батарей	- <b>	1 188 369 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Поставка инструментов - <b>222 139 руб.</b>	</td>
          </tr>
          <tr>
            <td>Поставка луп штативных - <b>	24 854 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Поставка зарядных устройств	- <b>13 599 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка ручных инструментов и расходных материалов - <b>	50 249 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Оказание услуг по продлению неисключительных прав (лицензий) на использование антивирусного программного обеспечения - <b>	59 730 руб.</b></td>
          </tr>
          <tr>
            <td>Поставка устройств внешних запоминающих	- <b>	29 830 руб.</b> </td>
          </tr>
          <tr class="tr1">
            <td>Поставка камер видеонаблюдения	- <b>31 931 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка персонального компьютера и комплекта клавиатура и мышь	- <b>100 000 руб.</b></td>
          </tr>
        </table>
        <!-- Таблица 3 -->
        <table class="table-2">
          <tr>
            <th>Контракты за 2020</th>
          </tr>
          <tr class="tr1">
            <td>Поставка сервера	- <b>	880 000 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка компьютерной техники	- <b>	2 340 000 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Закупка видеорегистраторов - <b>48 000 руб.</b>	</td>
          </tr>
          <tr>
            <td>Приобретение комплектующих - <b>	20 000 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>	Приобретение комплектующих	- <b>38 000 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка аккумуляторных батарей - <b>	9 900 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Поставка устройств запоминающих - <b>	464 000 руб.</b></td>
          </tr>
          <tr>
            <td>Поставка компьютерных принадлежностей	- <b>	185 381.75.</b> </td>
          </tr>
          <tr class="tr1">
            <td>Поставка компьютерной техники	- <b>35 999 руб.</b> </td>
          </tr>
          <tr>
            <td>Устройства для уничтожения бумаги, дисков и дискет	- <b>109 099 руб.</b></td>
          </tr>
        </table>
        <!-- Таблица 4 -->
        <table class="table-2">
          <tr>
            <th>Контракты за 2019</th>
          </tr>
          <tr class="tr1">
            <td>Поставка аккумуляторных батарей	- <b>23 249 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка аккумуляторных батарей	- <b>	1 188 369 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Поставка инструментов - <b>222 139 руб.</b>	</td>
          </tr>
          <tr>
            <td>Поставка луп штативных - <b>	24 854 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Поставка зарядных устройств	- <b>13 599 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка ручных инструментов и расходных материалов - <b>	50 249 руб.</b></td>
          </tr>
          <tr class="tr1">
            <td>Оказание услуг по продлению неисключительных прав (лицензий) на использование антивирусного программного обеспечения - <b>	59 730 руб.</b></td>
          </tr>
          <tr>
            <td>Поставка устройств внешних запоминающих	- <b>	29 830 руб.</b> </td>
          </tr>
          <tr class="tr1">
            <td>Поставка камер видеонаблюдения	- <b>31 931 руб.</b> </td>
          </tr>
          <tr>
            <td>Поставка персонального компьютера и комплекта клавиатура и мышь	- <b>100 000 руб.</b></td>
          </tr>
        </table>

        <!-- <div class="dI"></div> -->
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

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
    <link rel="stylesheet" href="CSS/style_2.css">
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
        <div class="link1">Руководителю</div>
        <div class="CONTENT1">  <p>Компания NIT физически находится в Оренбурге , хорошо зарекомендовала себя на местном локальном рынке и с 2016 года представлена на федеральном рынке как поставщик IT оборудования. Наше кредо – быстро , качественно и в срок!

          Многие клиенты , впервые обратившись к нам и получив нашу продукцию , становятся нашими партнерами.

          Для Оренбургских партнёров представлен магазин и региональный склад с наличием ходовых и дифицитных позиций комплектующих , оргтехники, расходных материалов, программного обеспечения. Представлена возможность поставки сертифицированных компьютеров и серверов, работа “под заказ” и с отсрочкой платежа, наличие “подменного фонда” и “взаимодействие с вендорами”. Квалифицированные специалисты правильно проконсультируют и при необходимости сформируют правильную спецификацию и техническое задание. Обращайтесь! Для нас разницы нет , Вам нужен сервер, монитор или сетевое хранилище! </p></div>
        <div class="CONTENT2">
            <div class="video-block">DLP (data leak protection) – система обеспечения информационной безопасности.

              Для каждой компании любой сферы бизнеса защита коммерческой информации – одна из приоритетных задач. Ведь последствия утечки коммерческой тайны или другой важной информации способны нанести неоценимый убыток организации.

              Для предотвращения таких ситуаций существуют DLP системы. Они создают защитный цифровой барьер, который анализирует всю исходящую и входящую информацию. С ее помощью можно отслеживать сомнительные операции и выявлять утечки конфиденциальных данных.

              ПК «Стахановец» — не просто мощная DLP-система. По сравнению с классическими DLP решениями, Стахановец обладает более широким спектром функциональных возможностей.</div>
            <div class="text-block"></div>
        </div>
        <div class="CONTENT3"></div>
        <div class="CONTENT4">
            <table class="table-1">
              <tr>
                <th class="th1">&nbsp;ВОЗМОЖНОСТИ</th>
                <th class="thO">&nbsp;КЛАССИЧЕСКИЕ DLP РЕШЕНИЯ</th>
                <th class="thO">&nbsp;ПК СТАХАНОВЕЦ</th>
              </tr>
              <tr class="tr2">
                <td class="tdO">Перехват данных, передаваемых по сети</td>
                <td>да</td>
                <td>нет</td>
              </tr>
              <tr>
                <td class="tdO">Перехват данных на компьютерах пользователей</td>
                <td>некоторые системы</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Запрет на выполнение различных действий с документами на машине пользователя на основании содержимого документов</td>
                <td>некоторые системы</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Настраиваемая система анализа собранной информации</td>
                <td>по шаблонам данных</td>
                <td>по гибким правилам</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Контроль всех подозрительных действий сотрудников</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Контроль за рабочим столом</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Мониторинг действий пользователя</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Мониторинг переписки и голосовых переговоров</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Контроль присутствия и активности сотрудников на рабочем месте</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Управление правами доступа контролирующих сотрудников</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Возможность предоставления права сотруднику самостоятельно включать и отключать наблюдение за собой</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Контроль изъятия или замены компонентов ПК для препятствия кражам</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Контроль мобильных устройств</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Голосовое DLP: перехват переписки и переговоров в мессенджерах</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Биометрическая идентификация пользователей: распознавание лиц с веб-камеры</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Геолокация ноутбуков и мобильных устройств</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Антимайнинг: анализ загрузки GPU видеокарт</td>
                <td>нет</td>
                <td>да</td>
              </tr>
              <tr>
                <td class="tdO">Совместимость с ОС Windows, Linux, macOS</td>
                <td>некоторые системы</td>
                <td>да</td>
              </tr>
              <tr class="tr2">
                <td class="tdO">Отчет «Граф связей»: анализ интенсивности коммуникаций внутри компании и с внешними контактами</td>
                <td>нет</td>
                <td>да</td>
              </tr>
            </table>
            <!-- Таблица 2 -->
            <table class="table-2">
              <tr>
                <th>Возможности</th>
              </tr>
              <tr class="tr1">
                <td>Перехват данных на компьютерах пользователей</td>
              </tr>
              <tr>
                <td>Запрет на выполнение различных действий с документами на машине пользователя на основании содержимого документов</td>
              </tr>
              <tr class="tr1">
                <td>Настраиваемая система анализа собранной информации</td>
              </tr>
              <tr>
                <td>Контроль всех подозрительных действий сотрудников</td>
              </tr>
              <tr class="tr1">
                <td>Контроль за рабочим столом</td>
              </tr>
              <tr>
                <td>Мониторинг действий пользователя</td>
              </tr>
              <tr class="tr1">
                <td>Мониторинг переписки и голосовых переговоров</td>
              </tr>
              <tr>
                <td>Контроль присутствия и активности сотрудников на рабочем месте</td>
              </tr>
              <tr class="tr1">
                <td>Управление правами доступа контролирующих сотрудников</td>
              </tr>
              <tr>
                <td>Возможность предоставления права сотруднику самостоятельно включать и отключать наблюдение за собой</td>
              </tr>
              <tr class="tr1">
                <td>Контроль изъятия или замены компонентов ПК для препятствия кражам</td>
              </tr>
              <tr>
                <td>Контроль мобильных устройств</td>
              </tr>
              <tr class="tr1">
                <td>Голосовое DLP: перехват переписки и переговоров в мессенджерах</td>
              </tr>
              <tr>
                <td>Биометрическая идентификация пользователей: распознавание лиц с веб-камеры</td>
              </tr>
              <tr class="tr1">
                <td>Геолокация ноутбуков и мобильных устройств</td>
              </tr>
              <tr>
                <td>Антимайнинг: анализ загрузки GPU видеокарт</td>
              </tr>
              <tr class="tr1">
                <td>Совместимость с ОС Windows, Linux, macOS</td>
              </tr>
              <tr>
                <td>Отчет «Граф связей»: анализ интенсивности коммуникаций внутри компании и с внешними контактами</td>
              </tr>
            </table>
            </div>

            <div class="wrapper">
              <form action="" class="form form__body form__margin">
                <div class="dI"><img class="imgS img__form" src="ART/sth.png">
              </form>
              <form action="https://stakhanovets.ru/demo9/" class="form form__body form__margin">
                <input type="submit" class="sub__dem" name="submitDem" id="" value="Online Демоверсия ПО*">
              </form>
              <form action="Stakhanovets_IS.pdf" class="form form__body">

                <h1 class="form__title form__guide form__text">Есть вопросы? Ознакомьтесь со <a href="">справочником*</a> </h1>
                  <input type="submit" class="sub__dem" name="submitDem" id="" value="Справочник">
              </form>
              <form action="" class="form__width form__body form__color form__faq">
                <div class="container">
                <h1 class="nice-header">NICE FAQ </h1>
                <div class="faq">
                  <ul class="faq-questions">
                    <li>
                      <h4 class="faq-question">Каковы ограничения демо-версии?</h4>
                      <p class="faq-answer">Вы можете полнофункционально работать только с одной клиентской машиной.</p>
                    </li>
                    <li>
                      <h4 class="faq-question">Каковы ограничения триал-версии? </h4>
                      <p class="faq-answer">Вы можете полнофункционально работать с 50-ю клиентскими машинами не более 2-х недель.</p>
                    </li>
                    <li>
                      <h4 class="faq-question">Как быстро я получу ключи после оплаты?</h4>
                      <p class="faq-answer">Зависит от способа оплаты. Обычно в течение рабочего дня. Более подробно об этом написано в инструкции, которая вам будет отправлена после оформления заказа.</p>
                    </li>
                    <li>
                      <h4 class="faq-question">Получу ли я лицензионное соглашение в бумажном виде о легальности покупки?</h4>
                      <p class="faq-answer">Да, конечно. Выписывается по вашему желанию.</p>
                    </li>
                    <li>
                      <h4 class="faq-question">Можно ли докупить лицензии к уже имеющимся?</h4>
                      <p class="faq-answer">Конечно. При заполнении формы заказа выбираете "Докупить".</p>
                    </li>
                    <li>
                      <h4 class="faq-question">Бесплатны ли выходящие обновления?</h4>
                      <p class="faq-answer">Да, но только в пределах одной версии N.xx</p>
                    </li>
                    <li>
                      <h4 class="faq-question">Бесплатны ли MSSQL_Express и MySQL?</h4>
                      <p class="faq-answer">Да, бесплатны.</p>
                    </li>
                  </ul>
                </div>
              </div>
                  <h1 class="form__title form__property form__text">Нет нужного ответа? Обратитесь в нашу <a href="Main_8.php#form">Службу поддержки*</a>!</h1>
              </form>
            </div>
<!-- Кнопка для вызова окна чат-бота -->
<div class="chatbot__btn">
  <div class="chatbot__tooltip d-none">Есть вопрос?</div>
</div>

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

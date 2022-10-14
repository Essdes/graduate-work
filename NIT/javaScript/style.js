"use strict"

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault(); // запренщаем переотправку на другую страницу

        let error = formValidate(form);

        let formData = new FormData(form); // берем данные полей
        formData.append('image', formImage.files[0]); // добавляем в будущее письмо картинку

        if (error === 0) {
            form.classList.add('_sending');
            // все ОК
            let response = await fetch ('sendmail.php', {
                method: 'POST',
                body: formData
            });
            if (response.ok)
            {
                let result = await response.json();
                alert(result.message);
                formPreview.innerHTML = '';
                form.reset();
                form.classList.remove('_sending');
            } else {
                alert("Ошибка");
                form.classList.remove('_sending');

            }
        } else {
            alert('Заполните обязательные поля');
        }
    }
    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req'); // создаем проверку на заполненность всех обязательных полей

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if (input.classList.contains('_email')) { // проверка почты
                if (emailTest(input)) { //если проверка не пройдена то
                    formAddError(input);
                    error++;
                }

            } // если форма с типом checkbox и она не была нажата (при обработке данных...) то навешиваем ошибку
            else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
                formAddError(input);
                error++;
            } else {
                if (input.value === '') { //если поля В ПРИНЦИПЕ НЕ ЗАПОЛНЕННЫЕ, то опять же вешаем ошибку
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }
    function formAddError(input) {
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }
    function formRemoveError(input) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }
    //Функция теста email
    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value); // проверка на соответствие email
    }
    // получаем input file в переменную
    const formImage = document.getElementById('formImage');
    // получаем div для превью в переменную
    const formPreview = document.getElementById('formPreview');

    // слушаем изменения в инпуте file
    formImage.addEventListener('change', () => {
        uploadFile(formImage.files[0]);
    });

    function uploadFile(file) {
        // проверка типа файла
        if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
            alert('Разрешены только изображения.');
            formImage.value = '';
            return;
        }
        //проверка размера файла (< 2 Мб)
        if (file.size > 2 * 1024 * 1024) {
            alert('Файл больше 2 Мб.');
            return;
        }
        var reader = new FileReader();
        reader.onload = function (e) { //если файд успешно загружен
            formPreview.innerHTML = `<img src="${e.target.result}" alt="Фото">`; // то помещаем в div созданное изображение
        };
        reader.onerror = function (e) { //если не получается прочитать, то выводится ошибка
            alert('Ошибка');
        };
        reader.readAsDataURL(file);
    }
});



<div class="modalBackground">
    <div class="modalActive">
        <div class="modalClose">
            &#x2716;
        </div>
        <div class="modalWindow">
            <p>
                Вы уверены?
            </p>
            <a href="#" id="modalLink" class="btn">Удалить</a>
        </div>
    </div>
</div>

<script>
    // устанавливаем триггер для модального окна (название можно изменить)
    const modalTrigger = document.getElementsByClassName("trigger")[0];

    // получаем ширину отображенного содержимого и толщину ползунка прокрутки
    const windowInnerWidth = document.documentElement.clientWidth;
    const scrollbarWidth = parseInt(window.innerWidth) - parseInt(windowInnerWidth);

    // привязываем необходимые элементы
    const bodyElementHTML = document.getElementsByTagName("body")[0];
    const modalBackground = document.getElementsByClassName("modalBackground")[0];
    const modalClose = document.getElementsByClassName("modalClose")[0];
    const modalActive = document.getElementsByClassName("modalActive")[0];

    // функция для корректировки положения body при появлении ползунка прокрутки
    function bodyMargin() {
        // bodyElementHTML.style.marginRight = "-" + scrollbarWidth + "px";
    }

    // при длинной странице - корректируем сразу
    bodyMargin();

    // событие нажатия на триггер открытия модального окна
    function trigger(id){
        modalBackground.style.display = "flex";

        document.getElementById('modalLink').href = "delete.php?id"+id;

        // если размер экрана больше 1366 пикселей (т.е. на мониторе может появиться ползунок)
        if (windowInnerWidth >= 1366) {
            bodyMargin();
        }

        // позиционируем наше окно по середине, где 175 - половина ширины модального окна
        // modalActive.style.left = "calc(50% - " + (175 - scrollbarWidth / 2) + "px)";
    }

    // modalTrigger.addEventListener("click", function () {
    //     // делаем модальное окно видимым
    //     modalBackground.style.display = "block";

    //     // если размер экрана больше 1366 пикселей (т.е. на мониторе может появиться ползунок)
    //     if (windowInnerWidth >= 1366) {
    //         bodyMargin();
    //     }

    //     // позиционируем наше окно по середине, где 175 - половина ширины модального окна
    //     modalActive.style.left = "calc(50% - " + (175 - scrollbarWidth / 2) + "px)";
    // });

    // нажатие на крестик закрытия модального окна
    modalClose.addEventListener("click", function () {
        modalBackground.style.display = "none";
        if (windowInnerWidth >= 1366) {
            bodyMargin();
        }
    });

    // закрытие модального окна на зону вне окна, т.е. на фон
    modalBackground.addEventListener("click", function (event) {
        if (event.target === modalBackground) {
            modalBackground.style.display = "none";
            if (windowInnerWidth >= 1366) {
                bodyMargin();
            }
        }
    });

</script>
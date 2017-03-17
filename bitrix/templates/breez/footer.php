</artircle>
</main>
<footer>
    <div class="container">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <h3>Lorem.</h3>
            <hr>
            <ul>
                <li><a href="#">Lorem.</a></li>
                <li><a href="#">Vel.</a></li>
                <li><a href="#">Voluptas.</a></li>
                <li><a href="#">Necessitatibus.</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <h3>Информация</h3>
            <hr>
            <? $APPLICATION->IncludeComponent("bitrix:menu", "footer_template", Array(
                "ALLOW_MULTI_SELECT"    => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE"       => "left",    // Тип меню для остальных уровней
                "DELAY"                 => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL"             => "1",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS"   => array(    // Значимые переменные запроса
                                                     0 => "",
                ),
                "MENU_CACHE_TIME"       => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE"       => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                "ROOT_MENU_TYPE"        => "bottom_information",    // Тип меню для первого уровня
                "USE_EXT"               => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ), false); ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <h3>Обслуживание клиентов</h3>
            <hr>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "footer_template",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "bottom_customer_service",
                    "USE_EXT" => "N"
                )
            );?><br>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <h3>Architecto.</h3>
            <hr>
            <ul>
                <li><a href="#">Lorem.</a></li>
                <li><a href="#">Rerum!</a></li>
                <li><a href="#">Accusamus.</a></li>
                <li><a href="#">Dolor.</a></li>
            </ul>
        </div>
    </div>

</footer>
</body>
</html>

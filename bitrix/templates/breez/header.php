<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Title</title>

    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead() ?>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--Font-awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Slick slider-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Slick slider-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <!--Custom JS-->
    <script src="<?=SITE_TEMPLATE_PATH?>/script/common.js"></script>


</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<header>
    <div class="container">
        <div class="row first-row">
            <div class="col-xs-12 col-md-3">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW"      => "file",
                    "AREA_FILE_SUFFIX"    => "inc",
                    "EDIT_TEMPLATE"       => "",
                    "PATH"                => SITE_TEMPLATE_PATH . "/phone.php"
                )); ?>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="login">
                    Welcome visitor you can login or create an account.
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="lang-money">
                </div>
            </div>
        </div>
        <div class="row second-row">
            <div class="col-xs-12 col-md-3">
                <?
                $APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW"      => "file",
                    "AREA_FILE_SUFFIX"    => "inc",
                    "EDIT_TEMPLATE"       => "",
                    "PATH"                => SITE_TEMPLATE_PATH . "/logo.php"
                )); ?>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="search">
                    <form action="">
                        <input type="text">
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", array(
                        "ALLOW_MULTI_SELECT"    => "N",
                        "CHILD_MENU_TYPE"       => "left",
                        "DELAY"                 => "N",
                        "MAX_LEVEL"             => "1",
                        "NEW_USER_REGISTRATION" => "Y",
                        "MENU_CACHE_GET_VARS"   => array(),
                        "MENU_CACHE_TIME"       => "3600",
                        "MENU_CACHE_TYPE"       => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE"        => "top",
                        "USE_EXT"               => "N",
                        "COMPONENT_TEMPLATE"    => "top_menu"
                    ), false); ?>

            </div>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <nav class="nav-menu">

                    <? $APPLICATION->IncludeComponent("bitrix:menu", "nav-template", Array(
                        "ALLOW_MULTI_SELECT"    => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE"       => "left",    // Тип меню для остальных уровней
                        "DELAY"                 => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL"             => "2",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS"   => "",    // Значимые переменные запроса
                        "MENU_CACHE_TIME"       => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE"       => "N",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE"        => "nav-menu",    // Тип меню для первого уровня
                        "USE_EXT"               => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "COMPONENT_TEMPLATE"    => "horizontal_multilevel"
                    ), false); ?>
                </nav>
            </div>
        </div>
        <?php if($APPLICATION->GetCurPage(false) == SITE_DIR): ?>
            <div class="row">

                <div class="hidden-xs col-sm-12">

                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "slider", array(
                        "ACTIVE_DATE_FORMAT"              => "d.m.Y",
                        "ADD_SECTIONS_CHAIN"              => "Y",
                        "AJAX_MODE"                       => "N",
                        "AJAX_OPTION_ADDITIONAL"          => "",
                        "AJAX_OPTION_HISTORY"             => "N",
                        "AJAX_OPTION_JUMP"                => "N",
                        "AJAX_OPTION_STYLE"               => "Y",
                        "CACHE_FILTER"                    => "N",
                        "CACHE_GROUPS"                    => "Y",
                        "CACHE_TIME"                      => "36000000",
                        "CACHE_TYPE"                      => "A",
                        "CHECK_DATES"                     => "Y",
                        "DETAIL_URL"                      => "",
                        "DISPLAY_BOTTOM_PAGER"            => "Y",
                        "DISPLAY_DATE"                    => "Y",
                        "DISPLAY_NAME"                    => "Y",
                        "DISPLAY_PICTURE"                 => "Y",
                        "DISPLAY_PREVIEW_TEXT"            => "Y",
                        "DISPLAY_TOP_PAGER"               => "N",
                        "FIELD_CODE"                      => array(
                            0 => "NAME",
                            1 => "DETAIL_TEXT",
                            2 => "DETAIL_PICTURE",
                            3 => "",
                        ),
                        "FILTER_NAME"                     => "",
                        "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                        "IBLOCK_ID"                       => "2",
                        "IBLOCK_TYPE"                     => "blocks",
                        "INCLUDE_IBLOCK_INTO_CHAIN"       => "Y",
                        "INCLUDE_SUBSECTIONS"             => "Y",
                        "MESSAGE_404"                     => "",
                        "NEWS_COUNT"                      => "20",
                        "PAGER_BASE_LINK_ENABLE"          => "N",
                        "PAGER_DESC_NUMBERING"            => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL"                  => "N",
                        "PAGER_SHOW_ALWAYS"               => "N",
                        "PAGER_TEMPLATE"                  => ".default",
                        "PAGER_TITLE"                     => "Новости",
                        "PARENT_SECTION"                  => "",
                        "PARENT_SECTION_CODE"             => "",
                        "PREVIEW_TRUNCATE_LEN"            => "",
                        "PROPERTY_CODE"                   => array(
                            0 => "ATT_LINK",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE"               => "Y",
                        "SET_LAST_MODIFIED"               => "N",
                        "SET_META_DESCRIPTION"            => "Y",
                        "SET_META_KEYWORDS"               => "Y",
                        "SET_STATUS_404"                  => "N",
                        "SET_TITLE"                       => "Y",
                        "SHOW_404"                        => "N",
                        "SORT_BY1"                        => "ACTIVE_FROM",
                        "SORT_BY2"                        => "SORT",
                        "SORT_ORDER1"                     => "DESC",
                        "SORT_ORDER2"                     => "ASC",
                        "COMPONENT_TEMPLATE"              => "slider"
                    ), false); ?>

                </div>
            </div>
        <? endif; ?>
        <?php if($APPLICATION->GetCurPage(false) == SITE_DIR): ?>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "banners", Array(
                "ACTIVE_DATE_FORMAT"              => "d.m.Y",
                // Формат показа даты
                "ADD_SECTIONS_CHAIN"              => "Y",
                // Включать раздел в цепочку навигации
                "AJAX_MODE"                       => "N",
                // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL"          => "",
                // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY"             => "N",
                // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP"                => "N",
                // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE"               => "Y",
                // Включить подгрузку стилей
                "CACHE_FILTER"                    => "N",
                // Кешировать при установленном фильтре
                "CACHE_GROUPS"                    => "Y",
                // Учитывать права доступа
                "CACHE_TIME"                      => "36000000",
                // Время кеширования (сек.)
                "CACHE_TYPE"                      => "A",
                // Тип кеширования
                "CHECK_DATES"                     => "Y",
                // Показывать только активные на данный момент элементы
                "DETAIL_URL"                      => "",
                // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER"            => "Y",
                // Выводить под списком
                "DISPLAY_DATE"                    => "Y",
                // Выводить дату элемента
                "DISPLAY_NAME"                    => "Y",
                // Выводить название элемента
                "DISPLAY_PICTURE"                 => "Y",
                // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT"            => "Y",
                // Выводить текст анонса
                "DISPLAY_TOP_PAGER"               => "N",
                // Выводить над списком
                "FIELD_CODE"                      => array(    // Поля
                                                               0 => "",
                                                               1 => "",
                ),
                "FILTER_NAME"                     => "",
                // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID"                       => "3",
                // Код информационного блока
                "IBLOCK_TYPE"                     => "blocks",
                // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN"       => "Y",
                // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS"             => "Y",
                // Показывать элементы подразделов раздела
                "MESSAGE_404"                     => "",
                // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT"                      => "3",
                // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE"          => "N",
                // Включить обработку ссылок
                "PAGER_DESC_NUMBERING"            => "N",
                // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL"                  => "N",
                // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS"               => "N",
                // Выводить всегда
                "PAGER_TEMPLATE"                  => ".default",
                // Шаблон постраничной навигации
                "PAGER_TITLE"                     => "Новости",
                // Название категорий
                "PARENT_SECTION"                  => "",
                // ID раздела
                "PARENT_SECTION_CODE"             => "",
                // Код раздела
                "PREVIEW_TRUNCATE_LEN"            => "",
                // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE"                   => array(    // Свойства
                                                               0 => "ATT_LINK",
                                                               1 => "",
                ),
                "SET_BROWSER_TITLE"               => "Y",
                // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED"               => "N",
                // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION"            => "Y",
                // Устанавливать описание страницы
                "SET_META_KEYWORDS"               => "Y",
                // Устанавливать ключевые слова страницы
                "SET_STATUS_404"                  => "N",
                // Устанавливать статус 404
                "SET_TITLE"                       => "Y",
                // Устанавливать заголовок страницы
                "SHOW_404"                        => "N",
                // Показ специальной страницы
                "SORT_BY1"                        => "ACTIVE_FROM",
                // Поле для первой сортировки новостей
                "SORT_BY2"                        => "SORT",
                // Поле для второй сортировки новостей
                "SORT_ORDER1"                     => "DESC",
                // Направление для первой сортировки новостей
                "SORT_ORDER2"                     => "ASC",
                // Направление для второй сортировки новостей
            ), false); ?>
        <?php endif; ?>
    </div>

</header>
<main>
    <article class="container">

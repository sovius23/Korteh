<?php


class YandexMap
{
    const API = "337c156a-cbd1-45c7-99c4-3fdfe2f3ff6a";

    public static function setApiMap()
    {
        echo "<script src=\"https://api-maps.yandex.ru/2.1/?apikey=" . self::API . "&lang=ru_RU\" type=\"text/javascript\">";
        echo "</script>";
    }

    public static function setMap()
    {
        echo "<div id=\"map\" style=\"width: 600px; height: 400px\"></div>";
        echo "<script type=\"text/javascript\" src=\"src/YandexMap.js\">";
        echo "</script>";
        // echo "<script>let timerId = setInterval(() => Map(), 60000);</script>"; //обновление данных каждую минуту
        echo "<script>Map();</script>";
    }
// надо будет название яндекса убрать
}
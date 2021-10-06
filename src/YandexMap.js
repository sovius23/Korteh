const Map = () => {


    ymaps.ready(init);

    function init() {

        /*let geolocation=ymaps.geolocation;
        alert(geolocation);
        geolocation.get({
            provider: 'browser',
            mapStateAutoApply: true
        }).then(function (result) {
            alert(result);
        });*/// геолокация работает только с https

        var myMap = new ymaps.Map("map", {

                center: [55.76, 37.64],

                zoom: 8
            }
        );

        function readCoord(place, text = "Тут можно поместить довольно объемный текст </br> в несколько абзацев." +
        "<i>И со стилями</i>") {

            const TEXT = '<div id =\"info\"><strong>' + text + '</strong></br></div>' +
                "<a href=\"@?info=" + text + "\">Скачать</a>";


            myMap.geoObjects
                .add(new ymaps.Placemark(place,
                    {
                        balloonContent: TEXT
                    }, {
                        preset: 'islands#icon',
                        iconColor: '#0095b6'
                    }
                    )
                )
        }//есть вариант с динамической загрузкой

        objectManager = new ymaps.ObjectManager({
            clusterize: true,
            gridSize: 32,
            clusterDisableClickZoom: true
        });


        fetch("src/coordinates.json")
            .then(data => data.json()
                .then(json => {
                        for (const jsonKey in json) {
                            readCoord(json[jsonKey]);

                        }
                    }
                )
            );
    }
}
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
        });*///работает только с https

        var myMap = new ymaps.Map("map", {

                center: [55.76, 37.64],

                zoom: 8
            }
        );

        function readCoord(place, text = "TEXT") {
            const TEXT = '<strong>' + text + '</strong></br>' +
                "<button id='btn' name='click me!'>я кнопка</button>" +
                "кнопка-невидимка";
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
        }

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

    function downloader(text) {
        document.querySelector("#btn").addEventListener("click", (e) => {
            //код для скачивания дописать позже- fetch тправляет post  в обработчик,тот создает файл и возвращает ссылку на него
        })

    }
}
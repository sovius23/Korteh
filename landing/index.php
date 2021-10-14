<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/style.css">

    <title>KORTEH</title>

    <meta name="description" content="Home page of the Center of Innovative Technologies 'Korteh'">
    <meta name="keywords" content="">

    <meta property="og:title" content="Center of Innovative Technologies">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="kor-teh.ru">
</head>

<body>

<div id="page-container">


    <main>
        <div id="background-main">
            <div id="head-container">

                <h1>КОРТЕХ</h1>
                <div id="head-container-text">
                    <h2>Центр инновационных технологий</h2>
                    <p>Компания <span>кортех</span> осуществляет деятельность по удовлетворению
                        потребностей общества в цифровизации объектов городской и дорожной
                        инфраструктуры, путем внедрения передовых программных решений
                        с использованием искусственного интеллекта</p>
                </div>
                <nav id="links-container">
                    <a class="head-links-container" href="#experience-container">Опыт компании</a>
                    <a class="head-links-container" href="#productsHref">Программные продукты</a>
                    <a class="head-links-container" href="#link-footer">Контакты</a>
                </nav>
            </div>

            <div id="experience-container">
                <h4>Опыт компании:</h4>
                <p>Компания <span>кортех</span> осуществляет сотрудничество и поставляет
                    временное и постоянное программное обеспечение</p>
                <div id="location">
                    <div id="heraldic">
                        <div id="slider-wrap">
                            <div id="left"><img src="img/ArrowLeft.png" alt="Влево"></div>
                            <div id="hidden">
                                <div id="slider">
                                    <img class="slide-component active" src="img/Heralds/ALEKSANDROV.jpg" alt="Unavailable image!" >
                                    <img class="slide-component" src="img/Heralds/VLADIMIR.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/VYaZNIKI.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/VLAD.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/SUZDAL.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/SUDOGDA.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/POKROV.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/PERESLAVL.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/NOVOROS.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/MUROM.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/MELENKI.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/KOVROV.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/KIRZhACh.jpg" alt="Unavailable image!">
                                    <img class="slide-component" src="img/Heralds/GOROKhOVETs.jpg" alt="Unavailable image!">
                                </div>
                            </div>
                            <div id="right"><img src="img/ArrowRight.png" alt="Вправо"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="products-container">
                <h4 id="productsHref">Программные продукты:</h4>
                <div id="module-group">
                    <div class="modules">
                        <h5 class="module-title">1.КОРТЕХ, <strong> Модуль-a</strong></h5>
                        <div id="module-main-a">
                            <p class="bold-text">Сферы,которые охватывает модульное обучение:</p>
                            <ul class="module-list">
                                <li>
                                    дорожное хозяйство уличной сети города
                                </li>
                                <li>
                                    жилищно-коммунальное хозяйство, благоустройство города
                                </li>
                                <li>общественная безопасность</li>
                                <li>
                                    безопасность дорожного движения.
                                </li>
                            </ul>
                            <p class="bold-text">Описание:</p>
                            <p class="paragraph">Программное обеспечение предназначено для создания цифровой среды
                                умного города. На основе получаемой информации с камер
                                видеонаблюдения, искусственный интеллект ее анализирует и
                                предоставляет следующий функционал:</p>
                            <a class="modules-links-container" href="moduleA.php">Подробнее</a>
                        </div>
                    </div>
                    <div class="modules">
                        <h5 class="module-title">2.КОРТЕХ, <strong> Модуль-б</strong></h5>
                        <div id="module-main-b">
                            <p class="bold-text"> Сферы,которые охватывает модульное обучение:</p>
                            <ul class="module-list">
                                <li>
                                    дорожное хозяйство федеральных, региональных, платных дорог.
                                </li>
                            </ul>
                            <p class="bold-text">Описание:</p>
                            <p class="paragraph"> Программное обеспечение предназначено для создания автоматизации и
                                создания цифровой среды в сфере дорожного хозяйства («умной
                                дороги»). На основе получаемой информации с камер видеонаблюдения,
                                искусственный интеллект ее анализирует и предоставляет следующий
                                функционал:</p>
                            <a class="modules-links-container" href="moduleB.php">Подробнее</a>
                        </div>
                        <script>
                            let resize = function () {
                                let aHeight = document.querySelector("#module-main-a").offsetHeight;
                                document.querySelector("#module-main-b")
                                    .style.height = aHeight + "px";

                            }
                            resize();
                            window.addEventListener(`resize`, () => {
                                resize();
                            })
                        </script>

                    </div>
                </div>
            </div>


        </div>


        <div id="benefits-block">
            <div class="arrow"><h4>Преимущества использования:</h4></div>
            <div id="benefits-container">
                <div class="benefit">
                    <div class="flex-benefit-container">
                        <div id="circle1"></div>
                        <div class="benefits-text">
                            <span class="integer">1.</span>
                            <p>Предоставляется многофункциональный портал для использования
                                обработанных данных.</p>
                        </div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="flex-benefit-container">
                        <div id="circle2"></div>
                        <div class="benefits-text">
                            <span class="integer">2.</span>
                            <p>Постоянный мониторинг и синхронизация объектов анализа</p>
                        </div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="flex-benefit-container">
                        <div id="circle3"></div>
                        <div class="benefits-text">
                            <span class="integer">3.</span>
                            <p>Возможность в любое время загрузить электронный автоматизированный
                                отчет с результатами анализа мониторинга по выбранной вами дате</p>
                        </div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="flex-benefit-container">
                        <div id="circle4"></div>
                        <div class="benefits-text">
                            <span class="integer">4.</span>
                            <p>Возможность распечатать полученные данные</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </main>

    <footer id="link-footer">

        <h4>Связаться с нами:</h4>
        <div id="footer-container">
            <div id="form-container">
                <form action="" class="footer-form">
                    <input type="text" placeholder="ФИО" name="" id="FIO"/>
                    <input type="tel" placeholder="Телефон" name="" id="Phone"/>
                    <textarea

                        name=""
                        id=""
                        placeholder="Сообщение"
                        cols="30"
                        rows="10"
                    ></textarea>
                    <button class="footer-submit" type="submit">Отправить</button>
                </form>
            </div>
            <div id="line-divider"></div>
            <div id="About">
                <p>Телефон : 89250586662</p>
                <p>Email : kortekh@inbox.ru</p>
                <p>Адрес : Россия, г.Брянск, ул. 2-я аллея, д.12, пом.№441В</p>
            </div>
        </div>

    </footer>

</div>
<script type="text/javascript" src="JavaScript/slider.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8"/>

    <title></title>
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="libs/animate/animate.css"/>
    <link rel="stylesheet" href="libs/owl.carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="libs/chosen/chosen.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/media.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/whhg.css" />

    <style type="text/css">
        /* Таблица календарика */
        .calendar {
            border-collapse: collapse;
            font-family: Arial;
            font-size: 14px;
            width: 100%;
        }
        span.off-date {
            background: #cc6666 !important;
            color: #cc6666 !important;
        }
        span.bron {
            background: #ff6600 !important;
            color: white !important;
        }
        /* Заголовок */
        .calendar th {
            text-align: center;
            width: 36px;
            height: 36px;
            background: #D0D0D0;
            color: #000000;
        }
        /* Заголовок праздника */
        .calendar th.holiday {
            color: #FF0000;
        }
        /* Ячейка дня */
        .calendar td {
            width: 28px;
            height: 36px;
            cursor: pointer;
            text-align: center;
            font-family: 'PTSansRegular';
            color: #000333;
            font-size: 14px;
        }
        .calendar td.grayed.nonegr {
            background: none;
        }
        .calendar td span {
            position: relative;
            overflow: hidden;
            width: 100%;
            display: block;
            height: 34px;
            border: 1px solid #cccccc;
            line-height: 34px;
            background: #e7e7e7;
        }
        /* Затемненный день */
        .calendar td.grayed {
            cursor: auto !important;
        }
        /* Выбранный день */
        .calendar td.selected span {
            color: #000333;
        }
        /* Праздничный день */
        .calendar td.holiday {
            color: #FF0000;
        }
        /* Кнопки навигации */
        .calendar td.navigation {
            text-align: center;
            border: 0px none !important;
            cursor: pointer;
            white-space: nowrap;
            background: #e7e7e7;
            color: #000333;
            font-family: 'PTSansBold';
            font-size: 14px;
        }
        .calendar .dayts th {
            background: #cccccc;
            color: #000333;
            font-family: 'PTSansRegular';
            font-size: 14px;
        }

        .calendar .dayts th.holiday {
            color: #993333;
        }
    </style>

</head>
<body>
<header class="header">
    <div class="container">
        <div class="navbar navbar-top row newnavbar" role="navigation">
            <div class="navbar-header logo col-md-3 col-xs-12">
                <a href="/">domik<span>nsk.ru</span></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="menu col-md-6">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Каталог коттеджей</a></li>
                    <li class="sub"><a href="#">услуги для вашего отдыха</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 phone">
                <a href="tel:+7 (962) 82 63 707">+7 (962) 82 63 707</a>
                <span>заказать обратный звонок</span>
            </div>
        </div>
    </div>
    <div class="menu-cont">
    <div class="container cont-menu">
        <div class="row">
            <div class="dp-m">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-md-offset-1 sub-menu">
                        <ul>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                            <li><a><i class="icon-mouse"></i><span>Большая парковка (5)</span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-12 prem-menu">
                        <div class="prem-block">
                            <div class="title-prem">
                                <i class="icon-mouse"></i>
                                <div>
                                   <h4>Бассейн</h4>
                                    <span>найдено 2 варианта <a>показать все</a></span>
                                </div>
                            </div>
                            <div class="prem-pr">
                                <div class="col-md-6 col-xs-12 one-prem">
                                    <a>
                                    <img src="/images/one-prem.png" alt="" title="">
                                        <i class="icon-circleright"></i>
                                    </a>
                                    <span>
                                    <a>Название коттеджа<br/>
                                        аренда от 20 000 руб.</a>
                                        </span>
                                </div>
                                <div class="col-md-6 col-xs-12 one-prem">
                                    <a>
                                        <img src="/images/ne-prem.png" alt="" title="">
                                        <i class="icon-circleright"></i>
                                    </a>
                                    <span>
                                    <a>Название коттеджа<br/>
                                        аренда от 20 000 руб.</a>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <p>Коттедж известный каждому в Новосибирске с бассейном! Специально укомплектованный дом для проведения различных мероприятий, таких как: Дни Рождения, Свадьбы, Корпоративы,  Дискотеки и любые другие памятные даты. Уникальный бассейн с подогревом оригинальной формы и работающий КРУГЛЫЙ ГОД! Сауна, джакузи, мангал и казан в доме, банкетные столы,  акустическая система, интернет,кинопроектор с большим экраном, большой бильярдный стол с каменной столешницей, профессиональный настольный мини футбол, много парковочных мест. Если Вы хотите снять коттедж на сутки в Новосибирске – лучшего варианта не найти.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
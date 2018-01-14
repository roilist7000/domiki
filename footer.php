<footer class="footer">
    <div class="container">
        <div class="navbar navbar-top row newnavbar hr_f" role="navigation">
            <div class="navbar-header logo col-md-3 col-xs-12">
                <a href="/">domik<span>nsk.ru</span></a>
            </div>
            <div class="menu col-md-6">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Каталог коттеджей</a></li>
                    <li><a href="#">услуги для вашего отдыха</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 phone">
                <a href="tel:+7 (962) 82 63 707">+7 (962) 82 63 707</a>
                <span>заказать обратный звонок</span>
            </div>
        </div>
        <div class="row cop">
            <div class="col-md-3 col-xs-12 soc">
                <ul>
                    <li><img src="/images/inst.png" alt="инстаграмм" title="инстаграмм"></li>
                    <li><img src="/images/f.png" alt="facebook" title="facebook"></li>
                </ul>
            </div>
            <div class="copyright col-md-5 col-md-offset-4 col-xs-12">
                Коттедж "Здоровье" г. Новосибирск, Нижняя Ельцовка,
                Садовое Общество "Здоровье"
            </div>
        </div>
    </div>
</footer>

<div id="modalBasket" class="modal modal-basket fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <img src="images/icon-check.png">
                <div class="modal-basket-title">уличная купольная<br/> ip-камера</div>
                <div class="modal-basket-text">добавлена в корзину</div>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal">В магазин</a>
                <span class="separator"></span>
                <a href="#">В корзину</a>
            </div>
        </div>
    </div>
</div>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<script src="libs/jquery/jquery-1.11.2.min.js"></script>
<script src="libs/modernizr/modernizr.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="libs/owl.carousel/owl.carousel.min.js"></script>
<script src="libs/chosen/chosen.jquery.min.js"></script>
<script src="libs/inputmask/jquery.inputmask.js" type="text/javascript"></script>
<script src="libs/inputmask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<script src="libs/inputmask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="libs/inputmask/jquery.inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.min.js" type="text/javascript"></script>
<script src="js/common.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHG5FpKNSrpxN35VHVzv5s5wNSvELyirk&callback=initMap"
        async defer></script>

<script type="text/javascript">

    calendar = {};

    // Названия месяцев
    calendar.monthName=[
        'Январь', 'Февраль', 'Март', 'Апрель',
        'Май', 'Июнь', 'Июль', 'Август',
        'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
    ];

    // Названия дней недели
    calendar.dayName=[
        'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'ВС'
    ];

    // Выбранная дата
    calendar.selectedDate = {
        'Day' : null,
        'Month' : null,
        'Year' : null
    };

    // ID элемента для размещения календарика
    calendar.element_id=null;

    // Выбор даты
    calendar.selectDate = function(day,month,year) {
        calendar.selectedDate={
            'Day' : day,
            'Month' : month,
            'Year' : year
        };
        calendar.drawCalendar(month,year);
    }

    // Отрисовка календарика на выбранный месяц и год
    calendar.drawCalendar = function(month,year) {
        var tmp='';
        tmp+='<table class="calendar" cellspacing="0" cellpadding="0">';

        // Месяц и навигация
        tmp+='<tr>';
        tmp+='<td class="navigation" '+
            'onclick="calendar.drawCalendar('+(month>1?(month-1):12)+
            ','+(month>1?year:(year-1))+');">&#9668;<\/td>';
        tmp+='<td colspan="5" class="navigation" '+
            'onclick="calendar.drawCalendar('+
            calendar.selectedDate.Month+','+
            calendar.selectedDate.Year+');">'+
            calendar.monthName[(month-1)]+'&nbsp;-&nbsp;'+year+'<\/td>';
        tmp+='<td class="navigation" '+
            'onclick="calendar.drawCalendar('+(month<12?(month+1):1)+
            ','+(month<12?year:(year+1))+');">&#9658;<\/td>';
        tmp+='<\/tr>';

        // Шапка таблицы с днями недели
        tmp+='<tr class="dayts">';
        tmp+='<th>'+calendar.dayName[0]+'<\/th>';
        tmp+='<th>'+calendar.dayName[1]+'<\/th>';
        tmp+='<th>'+calendar.dayName[2]+'<\/th>';
        tmp+='<th>'+calendar.dayName[3]+'<\/th>';
        tmp+='<th>'+calendar.dayName[4]+'<\/th>';
        tmp+='<th class="holiday">'+calendar.dayName[5]+'<\/th>';
        tmp+='<th class="holiday">'+calendar.dayName[6]+'<\/th>';
        tmp+='<\/tr>';

        // Количество дней в месяце
        var total_days = 32 - new Date(year, (month-1), 32).getDate();
        // Начальный день месяца
        var start_day = new Date(year, (month-1), 1).getDay();
        if (start_day==0) { start_day=7; }
        start_day--;
        // Количество ячеек в таблице
        var final_index=Math.ceil((total_days+start_day)/7)*7;

        var day=1;
        var index=0;
        do {
            // Начало строки таблицы
            if (index%7==0) {
                tmp+='<tr>';
            }
            // Пустые ячейки до начала месяца или после окончания
            if ((index<start_day) || (index>=(total_days+start_day))) {
                tmp+='<td class="grayed nonegr">&nbsp;<\/td>';
            }
            else {
                var class_name='';
                // Выбранный день
                if (calendar.selectedDate.Day==day &&
                    calendar.selectedDate.Month==month &&
                    calendar.selectedDate.Year==year) {
                    class_name='selected';
                }
                // Праздничный день
                else if (index%7==6 || index%7==5) {
                    class_name='holiday';
                }
                // Ячейка с датой
                tmp+='<td class="'+class_name+'" '+
                    'onclick="calendar.selectDate('+
                    day+','+month+','+year+');"><span>'+day+'</span><\/td>';
                day++;
            }
            // Конец строки таблицы
            if (index%7==6) {
                tmp+='<\/tr>';
            }
            index++;
        }
        while (index<final_index);

        tmp+='<\/table>';

        // Вставить таблицу календарика на страницу
        var el=document.getElementById(calendar.element_id);
        if (el) {
            el.innerHTML=tmp;
        }
    }

    // ID элемента для размещения календарика
    calendar.element_id = 'calendar_table';

    // По умолчанию используется текущая дата
    calendar.selectedDate={
        'Day' : new Date().getDate(),
        'Month' : parseInt(new Date().getMonth())+1,
        'Year' : new Date().getFullYear()
    };

    // Нарисовать календарик
    calendar.drawCalendar(
        calendar.selectedDate.Month,
        calendar.selectedDate.Year
    );
</script>

</body>
</html>
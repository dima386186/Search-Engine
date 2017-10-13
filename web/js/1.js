$(document).ready(function () {
    // отправка формы дублирования поиска
    $(document).on('click', '.duplicate', function(){
        $(this).next().submit();
    });

    // скрывает, показывает description в таблице результатов
    $(document).on('click', '.viewDescription', function(){
        $(this).next().toggle(200);
    });

    // скрывает, показывает skills в таблице результатов
    $(document).on('click', '.viewSkills', function(){
        $(this).next().toggle(200);
    });

    // внешний вид buttons в xs-мониторах
    if(window.matchMedia('(max-width: 768px)').matches)
    {
        $('.searchButtons').addClass('btn-xs');

        $('.searchButtons').css({
            'margin-bottom': '8px',
            'margin-left': '0'
        });

        $('.duplicate').css({
            'display': 'block',
            'margin': '0 auto',
            'margin-bottom': '8px'
        });
    }

    // внешний вид процесса поиска в выводе всех поисков
    $('.action').each(function () {

        if($(this).text() === 'stop' || $(this).text() === ''){
            $(this).text('stopped');
            $(this).css({
                'color': 'red'
            });
        }
        if($(this).text() === 'start'){
            $(this).text('started');
            $(this).css({
                'color': 'green'
            });
        }
    });

    // при типе работы hourly деактивирует поле ввода бюджета
    $('#search_form_jobType_0').on('change', function (){
        $('#search_form_budget').attr('placeholder', '');
        $('#search_form_budget').val('');
        $('#search_form_budget').attr('disabled', 'disabled');
    });

    $('#search_form_jobType_1').on('change', function (){
        $('#search_form_budget').attr('placeholder', 'from');
        $('#search_form_budget').removeAttr('disabled');
    });

    $('#search_form_jobType_placeholder').on('change', function () {
        $('#search_form_budget').attr('placeholder', 'from');
        $('#search_form_budget').removeAttr('disabled');
    });




    $('#search_form_filterJobType_0').on('change', function (){
        $('#search_form_budget').attr('placeholder', '');
        $('#search_form_filterBudget').val('');
        $('#search_form_filterBudget').attr('disabled', 'disabled');
    });

    $('#search_form_filterJobType_1').on('change', function (){
        $('#search_form_budget').attr('placeholder', 'from');
        $('#search_form_filterBudget').removeAttr('disabled');
    });

    $('#search_form_filterJobType_placeholder').on('change', function () {
        $('#search_form_budget').attr('placeholder', 'from');
        $('#search_form_filterBudget').removeAttr('disabled');
    });


    // вставка заголовков между полями формы
    $('#search_form').children().eq(1).prepend('<h1 style="text-align: center; margin-top: 35px; margin-bottom: 20px">Параметры поиска на Upwork</h1>');

    $('#search_form').children().eq(23).prepend('<h1 style="text-align: center; margin-bottom: 20px">Параметры сортировки поиска</h1>');

    $('#search_form').children().eq(35).prepend('<h1 style="text-align: center; margin-bottom: 10px">Сколько звёзд надо?</h1>');
    


    // исключение ошибочного ввода запятой в конце значений данных полей
    $('[name=search_form]').on('submit', function () {

        var keyAny = $.trim($('#search_form_keywordSearchInAny').val());
        var keyTitle = $.trim($('#search_form_keywordSearchInTitle').val());
        var keyDes = $.trim($('#search_form_keywordSearchInDescription').val());

        var stopAny = $.trim($('#search_form_stopWordsInAny').val());
        var stopTitle = $.trim($('#search_form_stopWordsInTitle').val());
        var stopDes = $.trim($('#search_form_stopWordsInDescription').val());

        var skills = $.trim($('#search_form_skills').val());
        var filterSkills = $.trim($('#search_form_filterSkills').val());

        var location = $.trim($('#search_form_location').val());
        var filterLocation = $.trim($('#search_form_filterLocation').val());

        var timezone = $.trim($('#search_form_clientTimezone').val());
        var filterTimezone = $.trim($('#search_form_filterClientTimezone').val());

        var freelanceLocation = $.trim($('#search_form_clientPreferredFreelancerLocation').val());

        var levels = $.trim($('#search_form_experienceLevel').val());




        if(keyAny.length > 0 && keyAny[keyAny.length-1] === ','){
           $('#search_form_keywordSearchInAny').val($.trim($('#search_form_keywordSearchInAny').val()).slice(0, -1));
        }

        if(keyTitle.length > 0 && keyTitle[keyTitle.length-1] === ','){
            $trim($('#search_form_keywordSearchInTitle').val($.trim($('#search_form_keywordSearchInTitle').val()).slice(0, -1)));
        }

        if(keyDes.length > 0 && keyDes[keyDes.length-1] === ','){
            $trim($('#search_form_keywordSearchInDescription').val($.trim($('#search_form_keywordSearchInDescription').val()).slice(0, -1)));
        }



        if(stopAny.length > 0 && stopAny[stopAny.length-1] === ','){
            $('#search_form_stopWordsInAny').val($.trim($('#search_form_stopWordsInAny').val()).slice(0, -1));
        }

        if(stopTitle.length > 0 && stopTitle[stopTitle.length-1] === ','){
            $('#search_form_stopWordsInTitle').val($.trim($('#search_form_stopWordsInTitle').val()).slice(0, -1));
        }

        if(stopDes.length > 0 && stopDes[stopDes.length-1] === ','){
            $('#search_form_stopWordsInDescription').val($.trim($('#search_form_stopWordsInDescription').val()).slice(0, -1));
        }


        
        if(skills.length > 0 && skills[skills.length-1] === ','){
            $('#search_form_skills').val($.trim($('#search_form_skills').val()).slice(0, -1));
        }

        if(filterSkills.length > 0 && filterSkills[filterSkills.length-1] === ','){
            $('#search_form_filterSkills').val($.trim($('#search_form_filterSkills').val()).slice(0, -1));
        }

        if(location.length > 0 && location[location.length-1] === ','){
            $('#search_form_location').val($.trim($('#search_form_location').val()).slice(0, -1));
        }

        if(filterLocation.length > 0 && filterLocation[filterLocation.length-1] === ','){
            $('#search_form_filterLocation').val($.trim($('#search_form_filterLocation').val()).slice(0, -1));
        }

        if(timezone.length > 0 && timezone[timezone.length-1] === ','){
            $('#search_form_clientTimezone').val($.trim($('#search_form_clientTimezone').val()).slice(0, -1));
        }

        if(filterTimezone.length > 0 && filterTimezone[filterTimezone.length-1] === ','){
            $('#search_form_filterClientTimezone').val($.trim($('#search_form_filterClientTimezone').val()).slice(0, -1));
        }

        if(freelanceLocation.length > 0 && freelanceLocation[freelanceLocation.length-1] === ','){
            $('#search_form_clientPreferredFreelancerLocation').val($.trim($('#search_form_clientPreferredFreelancerLocation').val()).slice(0, -1));
        }

        if(levels.length > 0 && levels[levels.length-1] === ','){
            $('#search_form_experienceLevel').val($.trim($('#search_form_experienceLevel').val()).slice(0, -1));
        }
    })

});
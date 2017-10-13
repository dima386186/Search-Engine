// валидация формы поисков и формы пользователей на стороне клиента
$('[name=search_form]').addClass('search_form');
$('.search_form').validate({
    rules: {
        'search_form[name]': {
            required: true
        },
        'search_form[budget]': {
            number: true
        },
        'search_form[clientHistory]': {
            number: true
        },
        'search_form[moneySpent]': {
            number: true
        },
        'search_form[clientPreferredHoursOfExperience]': {
            number: true
        },
        'search_form[charsInDescription]': {
            number: true
        },
        'search_form[filterBudget]': {
            number: true
        },
        'search_form[filterClientHistory]': {
            number: true
        },
        'search_form[filterMoneySpent]': {
            number: true
        },
        'search_form[filterAvgRate]': {
            number: true
        },
        'search_form[filterHoursBilled]': {
            number: true
        },
        'search_form[filterExperienceLevel]': {
            number: true
        },
        'search_form[filterStars]': {
            number: true
        },
        'search_form[location]': {
            maxlength: 255
        },
        'search_form[keywordSearchInAny]': {
            maxlength: 255
        },
        'search_form[keywordSearchInTitle]': {
            maxlength: 255
        },
        'search_form[keywordSearchInDescription]': {
            maxlength: 255
        },
        'search_form[stopWordsInAny]': {
            maxlength: 255
        },
        'search_form[stopWordsInTitle]': {
            maxlength: 255
        },
        'search_form[stopWordsInDescription]': {
            maxlength: 255
        },
        'search_form[skills]': {
            maxlength: 255
        },
        'search_form[clientPreferredFreelancerLocation]': {
            maxlength: 255
        },
        'search_form[filterSkills]': {
            maxlength: 255
        },
        'search_form[filterClientTimezone]': {
            maxlength: 255
        },
        'search_form[filterLocation]': {
            maxlength: 255
        }
    },
    messages: {
        'search_form[name]': {
            required: 'Это поле обязательно для заполнения'
        },
        'search_form[budget]': {
            number: 'В значении должно быть число'
        },
        'search_form[clientHistory]': {
            number: 'В значении должно быть число'
        },
        'search_form[moneySpent]': {
            number: 'В значении должно быть число'
        },
        'search_form[clientPreferredHoursOfExperience]': {
            number: 'В значении должно быть число'
        },
        'search_form[charsInDescription]': {
            number: 'В значении должно быть число'
        },
        'search_form[filterBudget]': {
            number: 'В значении должно быть число'
        },
        'search_form[filterClientHistory]': {
            number: 'В значении должно быть число'
        },
        'search_form[filterMoneySpent]': {
            number: 'В значении должно быть число'
        },
        'search_form[filterAvgRate]': {
            number: 'В значении должно быть число'
        },
        'search_form[filterHoursBilled]': {
            number: 'В значении должно быть число'
        },
        'search_form[filterExperienceLevel]': {
            number: 'В значении должно быть число'
        },
        'search_form[filterStars]': {
            number: 'В значении должно быть число'
        },
        'search_form[location]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[keywordSearchInAny]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[keywordSearchInTitle]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[keywordSearchInDescription]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[stopWordsInAny]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[stopWordsInTitle]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[stopWordsInDescription]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[skills]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[clientPreferredFreelancerLocation]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[filterSkills]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[filterClientTimezone]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        },
        'search_form[filterLocation]': {
            maxlength: 'Попробуйте уложиться в 255 символов'
        }
    }
});


$('[name=user_form]').addClass('user_form');

$('.user_form').validate({
    rules: {
        'user_form[name]': {
            required: true
        },
        'user_form[password]': {
            required: true
        },
        'user_form[email]': {
            required: true,
            email: ''
        }
    },
    messages: {
        'user_form[name]': {
            required: 'Это поле обязательно для заполнения'
        },
        'user_form[password]': {
            required: 'Это поле обязательно для заполнения'
        },
        'user_form[email]': {
            required: 'Это поле обязательно для заполнения',
            email: 'Введите корректный e-mail'
        },
    }
});

$.validator.addMethod('email', function(){
    var proverka=/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;
    var val=$('#user_form_email').val();
    if(proverka.test(val)===true) return true;
    else return false;
});
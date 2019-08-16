$(document).ready(function () {
    if ($(document).scrollTop() > 70) {
        $('.mynav').addClass('navScolled');
    }

    $(document).scroll(function () {
        var st = $(this).scrollTop();
        if (st > 70) {
            $('.mynav').addClass('navScolled');
        } else {
            $('.mynav').removeClass('navScolled');
        }
    });
    //This is the nav-bar icon click event registration
    // -------------------------------------------------------------------------------
    $('.mynav .mynav-btn').click(function () {
        if ($(window).width() <= 576) {

            if ($(this).siblings('.mynav-links').css('right') === '0px') {
                $(this).siblings('.mynav-links').css({'right': '-76%', 'transition': '.5s'});
            } else {
                $(this).siblings('.mynav-links').css({'right': '0px', 'transition': '.5s'});
            }

        } else {

            if ($(this).siblings('.mynav-links').css('right') === '0px') {
                $(this).siblings('.mynav-links').css({'right': '-70%', 'transition': '.5s'});
            } else {
                $(this).siblings('.mynav-links').css({'right': '0px', 'transition': '.5s'});
            }

        }

    });
    if ($(window).width() > 768) {
        doOnLarge();
    }
//does this in a smaller screen. Responsive Css.
// -------------------------------------------------------------------------------
    else {
        doOnSmall();
    }
    $(window).on('resize', function () {
//on a large screen
        if ($(window).width() > 768) {
            doOnLarge();
        }
//does this in a smaller screen. Responsive Css.
// -------------------------------------------------------------------------------
        else {
            doOnSmall();
            if ($(window).width() <= 576) {
                $('.mynav-links').css({'width': '76%', 'right': '-76%'});
            }
        }
    });
});
function doOnLarge() {
    $('.mynav-links').css('width', '70%');
    $('.mynav-links .menu-options').css({'opacity': '0', 'height': 'auto', 'display': 'none'});
    $('.mynav-links .menu-options').css({'transition': '0.5s'});
    $('.mynav-links .menu-options-multiple').css({'opacity': '0', 'height': 'auto', 'display': 'none'});
    $('.mynav-links .menu-options-multiple').css({'transition': '0.5s'});
    // This happens on the navbar menu option hover
    // -------------------------------------------------------------------------------
    $('.mynav-links li').mouseenter(function () {
        $(this).children('.custom-menu-option').css({'display': 'block'}).wait(10).css({'opacity': '1', 'z-index': '5'});
        $(this).children('.mynav-link').css({'border-top-color': '#fff', 'color': '#ee9600'});
    });
    $('.mynav-links li').mouseleave(function () {
        $(this).children('.custom-menu-option').css({'opacity': '0', 'z-index': '1'}).wait(500).css('display', 'none');
        $(this).children('.mynav-link').css({'border-top-color': 'transparent', 'color': '#fff'});
    });
    // -------------------------------------------------------------------------------
}

function doOnSmall() {
    $('.mynav-links').css({'right': '-70%', 'transition': '0s', 'width': '70%'});
    if ($(window).width() <= 576) {
        $('.mynav-links').css({'width': '76%', 'right': '-76%', 'transition': '0s'});
    }

    $('.mynav-links .menu-options').css({'opacity': '1', 'transition': '0s', 'height': '0', 'display': 'block'});
    $('.mynav-links .menu-options-multiple').css({'opacity': '1', 'transition': '0s', 'height': '0', 'display': 'block'});
    $('#linksA').click(function (event) {
        event.preventDefault();
        if ($(window).width() > 768) {

        } else {
            if ($('.menu-options-multiple').height() > 50) {
                $(this).children('.mynav-caret').css({'transition': '.5s', 'transform': 'rotateZ(0Deg)'});
                $('.menu-options-multiple').css({'height': '0', 'opacity': '1', 'display': 'block', 'transition': '.5s'});
            } else {
                $(this).children('.mynav-caret').css({'transition': '.5s', 'transform': 'rotateZ(180Deg)'});
                $('.menu-options-multiple').css({'height': '664px', 'opacity': '1', 'display': 'block', 'transition': '.5s'});
            }
        }
    });
    $('#linksA').mouseleave(function () {
        if (!$(window).width() > 768) {
            $('.menu-options-multiple').css({'height': '664px', 'opacity': '1', 'display': 'block', 'transition': '.5s'});
            $(this).css({'border-top-color': 'transparent'});
        }
    });
    $('.menu-options-multiple').mouseleave(function () {
        $('.mynav .menu-options-multiple').css({'opacity': '1', 'display': 'block'});
        $('#linksA').css({'border-top-color': 'transparent'});
    });
    $('#linksB').click(function (event) {
        event.preventDefault();
        if ($(window).width() > 768) {

        } else {
            if ($(this).siblings('.menu-options').height() > 50) {
                $(this).children('.mynav-caret').css({'transition': '.5s', 'transform': 'rotateZ(0Deg)'});
                $(this).siblings('.menu-options').css({'height': '0', 'opacity': '1', 'display': 'block', 'transition': '.5s'});
            } else {
                $(this).children('.mynav-caret').css({'transition': '.5s', 'transform': 'rotateZ(180Deg)'});
                $(this).siblings('.menu-options').css({'height': '250px', 'display': 'block', 'opacity': '1', 'transition': '.5s'});
            }
        }
    });
    $('#linksB').mouseleave(function () {
        $('#linksB').siblings('.menu-options').css({'opacity': '1', 'display': 'block'});
        $(this).css({'border-top-color': 'transparent'});
    });
    $('#linksB').siblings('.menu-options').mouseleave(function () {
        $(this).css({'opacity': '1', 'display': 'block'});
        $('#linksB').css({'border-top-color': 'transparent'});
    });
    $('#linksC').click(function (event) {
        event.preventDefault();
        if ($(window).width() > 768) {


        } else {
            if ($(this).siblings('.menu-options').height() > 50) {
                $(this).children('.mynav-caret').css({'transition': '.5s', 'transform': 'rotateZ(0Deg)'});
                $(this).siblings('.menu-options').css({'height': '0', 'display': 'block', 'opacity': '1', 'transition': '.5s'});
            } else {
                $(this).children('.mynav-caret').css({'transition': '.5s', 'transform': 'rotateZ(180Deg)'});
                $(this).siblings('.menu-options').css({'height': '125px', 'display': 'block', 'opacity': '1', 'transition': '.5s'});
            }
        }
    });
    $('#linksC').mouseleave(function () {
        $('#linksC').siblings('.menu-options').css({'opacity': '1', 'display': 'block'});
//        $(this).css({'border-top-color': 'transparent'});
    });
    $('#linksC').siblings('.menu-options').mouseleave(function () {
        $(this).css({'opacity': '1', 'display': 'block'});
//        $('#linksC').css({'border-top-color': 'transparent'});
    });
}

/*
 * --------------------------------------------------------------------------------------
 * 
 * 
 * THIS SECTION CONTAINS THE SCRIPT THAT CONTROLS THE ANIMATED HOVER DIV
 * 
 * 
 * 
 * 
 * -------------------------------------------------------------------------------------
 */

$(document).ready(function () {
    $('.service-container').mouseenter(function () {
        var coverdiv = $(this).children('.service-cover');
        $(this).children('.service-title').css({'margin-top': '1px'}).wait(300).css('display', 'none');
        $(this).children('.service-cover').css({
            'display': 'block'
        }).wait(10).css('left', '0');
        $(coverdiv).children('.service-cover-text').addClass('animated fadeInLeftBig');
        $(coverdiv).children('.service-cover-link')
                .css({'display': 'block'})
                .wait(200)
                .css({'right': '0', 'animation-delay': '.3s'});
    });
    $('.service-container').mouseleave(function () {
        var coverdiv = $(this).children('.service-cover');
        $(this).children('.service-title').css({'display': 'block'}).wait(1).css('margin-top', '-40px');
        $(this).children('.service-cover').wait(100).css({
            'left': '-100%'
        }).wait(300).css('display', 'none');
        $(coverdiv).children('.service-cover-link')
                .css({'right': '-80%'})
                .wait(200)
                .css('display', 'none');
    });
    $(window).on('resize', function () {
        if ($(window).width() <= 768) {
            $('.service-container:eq(3)').css('display', 'block');
        } else {
            $('.service-container:eq(3)').css('display', 'none');
        }
    });
});
/*
 * --------------------------------------------------------------------------------------
 * 
 * 
 * THIS SECTION CONTAINS THE SCRIPT THAT TRIGGERS THE COUNTRY SELECT API
 * 
 * 
 * 
 * 
 * -------------------------------------------------------------------------------------
 */


$(document).ready(function () {
    $.get('https://restcountries.eu/rest/v2/all',
            function (data, status) {
                var opt = '<option>Select Country</option>';
                var sel = $('#countryid');
//                    for (var i = 0; i < data.length; i++) {
//                        opt = opt+'<option>'+data[i].name+'<option>';
//                    }
                var counter = 0;
                for (var i in data) {
                    opt += '<option>' + data[counter].name + '</option>';
                    counter++;
                }
                $(sel).html(opt);
            }
    );
    $('#countryid').change(function () {
        var country = $(this).val().trim();
        if (country === 'Select Country' || country.length === 0) {
            $('.custom-flag-holder').css('display', 'inline');
            $('.custom-svg').css('display', 'none');
            $('#phone_number').attr('placeholder', 'Your Phone number...');
        } else {
            if (!country.indexOf(' ') == -1) {
                country = country.substring(0, country.indexOf(' '));
//                alert('else : ' + country);
            }
            $.get('https://restcountries.eu/rest/v2/name/' + country + '',
                    function (data, status) {
                        $('.custom-flag-holder').css('display', 'none');
                        $('.custom-svg').css('display', 'inline').attr('src', data[0].flag);
                        $('#phone_number').attr('placeholder', '+(' + data[0].callingCodes + ') ...');
                    }
            );
        }

    }
    );
//    Form conact submit


    $('#contact-form').submit(function (e) {
        e.preventDefault();
        contact_submit($(this));
    });
//    Name Autoload validator
    $('#contact-form .form-group:eq(0) .input-group input').focus(function () {
        name_Validator($(this));
    });
    $('#contact-form .form-group:eq(0) .input-group input').keyup(function () {
        name_Validator($(this));
    });
    //company autoload validtor
    $('#contact-form .form-group:eq(1) .input-group input').focus(function () {
        company_Validator($(this));
    });
    $('#contact-form .form-group:eq(1) .input-group input').keyup(function () {
        company_Validator($(this));
    });
//    Country aotload vlidator
    $('#contact-form .form-group:eq(2) .input-group select').change(function () {
        country_Validator($(this));
    });
    $('#contact-form .form-group:eq(2) .input-group select').focus(function () {
        country_Validator($(this));
    });
//    Phone aotload vlidator
    $('#contact-form .form-group:eq(3) .input-group input').keyup(function () {
        phone_Validator($(this));
    });
    $('#contact-form .form-group:eq(3) .input-group input').focus(function () {
        phone_Validator($(this));
    });
//    Email aotload vlidator
    $('#contact-form .form-group:eq(4) .input-group input').keyup(function () {
        email_Validator($(this));
    });
    $('#contact-form .form-group:eq(4) .input-group input').focus(function () {
        email_Validator($(this));
    });
//    Application aotload vlidator
    $('#contact-form .form-group:eq(5) .input-group select').change(function () {
        application_Validator($(this));
    });
    $('#contact-form .form-group:eq(5) .input-group select').focus(function () {
        application_Validator($(this));
    });
});
function contact_submit() {
    var name = $('#contact-form .form-group:eq(0) .input-group input');
    var company = $('#contact-form .form-group:eq(1) .input-group input');
    var country = $('#contact-form .form-group:eq(2) .input-group select');
    var phone = $('#contact-form .form-group:eq(3) .input-group input');
    var email = $('#contact-form .form-group:eq(4) .input-group input');
    var application = $('#contact-form .form-group:eq(5) .input-group select');
    var description = $('#contact-form .form-group:eq(6) .input-group textarea').val();
    var radio = document.getElementById('subscribe_option').checked;
    var name_stat = name_Validator(name);
    var company_stat = company_Validator(company);
    var country_stat = country_Validator(country);
    var phone_stat = phone_Validator(phone);
    var email_stat = email_Validator(email);
    var application_stat = application_Validator(application);

    //successfull validation
    if (name_stat === true && company_stat === true && country_stat === true &&
            phone_stat === true && email_stat === true && application_stat === true) {
//        $.post('Some Place'{
//            data : JSON.stringify(new Array(name.value,company.value,country.value,phone.value,email.value,application.value,description.value,radio));
//        })
    }
}

function name_Validator(data) {
    var data_value = $(data).val();
    var data_input = data;
    var data_small = $(data).parent().parent().children('small');
    var response = false;
    if (data_value.length === 0) {
        data_small.text('Please Provide Your full names');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else if (data_value.length < 3) {
        data_small.text('Please Provide Your full names');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else if (/[^a-z A-Z]/.test(data_value)) {
        data_small.text('Use the following characters a-z A-Z');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else {
        data_small.text('');
        data_input.removeClass('is-invalid').addClass('is-valid');
        response = true;
    }
    return response;
}

function company_Validator(data) {
    var data_value = $(data).val();
    var data_input = data;
    var data_small = $(data).parent().parent().children('small');
    var response = false;
    if (data_value.length === 0) {
        data_small.text('Please Provide Your company\'s full name');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else if (data_value.length < 3) {
        data_small.text('Please Provide a valid company name');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else {
        data_small.text('');
        data_input.removeClass('is-invalid').addClass('is-valid');
        response = true;
    }
    return response;
}

function country_Validator(data) {
    var data_value = $(data).val();
    var data_input = data;
    var data_small = $(data).parent().parent().children('small');
    var response = false;
    if (data_value === 'Select Country') {
        data_small.text('Please Select Your Country');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else {
        data_small.text('');
        data_input.removeClass('is-invalid').addClass('is-valid');
        response = true;
    }
    return response;
}

function phone_Validator(data) {
    var data_value = $(data).val();
    var validator = $(data).attr('placeholder');
    var data_input = data;
    var data_small = $(data).parent().parent().children('small');
    var response = false;
    if (validator === 'Your Phone number...') {
        data_small.text('Please Select Your Country first');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else {
        var validator_params = '';
        var validator_params_1 = '';
        if (validator === '() ...') {
            validator_params = '0';
            alert(validator);
        } else if (validator.indexOf(',') === -1) {
            validator_params = validator.substring(validator.indexOf('(') + 1, validator.indexOf(')'));
        } else {
            validator_params = validator.substring(validator.indexOf('(') + 1, validator.indexOf(','));
        }
//        alert(validator_params+'\n:'+validator_params);
        if (data_value.length === 0) {
            data_small.text('Please provide phone number');
            data_input.removeClass('is-valid').addClass('is-invalid');
        } else if (/[^0-9+]/.test(data_value)) {
            data_small.text('Please provide phone number : only use the following 0-9,+');
            data_input.removeClass('is-valid').addClass('is-invalid');
        } else if ((data_value.substring(0, validator_params.length + 1)) !== ('+' + validator_params)) {
            data_small.text('Please start your phone number with : +' + validator_params);
            data_input.removeClass('is-valid').addClass('is-invalid');
        } else if (data_value.length < 10 || data_value.length > 15) {
            data_small.text('Please provide a valid phone number');
            data_input.removeClass('is-valid').addClass('is-invalid');
        } else {
            data_small.text('');
            data_input.removeClass('is-invalid').addClass('is-valid');
            response = true;
        }
    }
    return response;
}

function email_Validator(data) {
    var data_value = $(data).val();
    var data_input = data;
    var data_small = $(data).parent().parent().children('small');
    var response = false;
    var atposition = data_value.indexOf('@');
    var dotposition = data_value.indexOf(".");
    if (data_value.length === 0) {
        data_small.text('Please provide your Email Address');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else if (dotposition < 1 || atposition < 1 || (dotposition - atposition) < 2 || (data_value.length - dotposition) < 3) {
        data_small.text('Please provide a valid email address');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else {
        data_small.text('');
        data_input.removeClass('is-invalid').addClass('is-valid');
        response = true;
    }
    return response;
}

function application_Validator(data) {
    var data_value = $(data).val();
    var data_input = data;
    var data_small = $(data).parent().parent().children('small');
    var response = false;
    if (data_value === '-Select-') {
        data_small.text('Please Select Subject of contact');
        data_input.removeClass('is-valid').addClass('is-invalid');
    } else {
        data_small.text('');
        data_input.removeClass('is-invalid').addClass('is-valid');
        response = true;
    }
    return response;
}

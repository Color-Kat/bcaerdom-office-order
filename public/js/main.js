$(function () {

    // DEFAULT GALLERY SLIDER
    if ($('div').is('.default-gallery-slider_JS')) {
        $('.default-gallery-slider_JS').slick({});
    }

    // OPEN OBJECT POPUP
    $('.JS-obects-table table tbody tr a, .JS-obects-table table tbody tr').click(function (e) {
        e.preventDefault();
        if ($(window).width() >= 767) {
            $('.rent-object-popup_JS').fadeIn(300);
            $(".rent-object-popup_JS").load("/ajax/popup-block?id=" + $(this).attr("data-block-id") + "&type=" + $(this).attr("data-block-type"), function () {
                // POPUP GALLERY SLIDER
                if ($('div').is('.rent-object-popup_JS .default-gallery-slider_JS')) {
                    $('.rent-object-popup_JS .default-gallery-slider_JS').slick({});
                }


                $('.default-gallery-slider_JS').slick('reinit');

                // OPEN GETCALL POPUP OVER OBJECT POPUP

                $('.JS-get-call-popup-open').click(function () {
                    if ($(this).attr('datatypedeal') != undefined) {
                        $('.typedeal').attr('value', $(this).attr('datatypedeal'));
                    }
                    if ($(this).attr('dataroistat') != undefined) {
                        $('.area').attr('value', $(this).attr('dataroistat'));
                    }
                    if ($(this).attr('datacrmid') != undefined) {
                        $('.crmId').attr('value', $(this).attr('datacrmid'));
                    }
                    if ($(this).attr('data') != undefined) {
                        $('.popup-window_narrow h3').html('Получить презентацию<br /> на Whatsapp');
                        $('.popup-window_narrow .blue-button').text('Получить');
                    } else {
                        $('.popup-window_narrow h3').html('Заказать обратный<br /> звонок');
                        $('.popup-window_narrow .blue-button').text('ОТПРАВИТЬ');
                    }
                    $('.get-call_JS').fadeIn();
                    return false;
                });

                // CLOSE POPUP

                $('.popup-window__close_JS').click(function () {
                    $(this).parent().parent().parent().fadeOut();
                    return false;
                });

                jQuery(function ($) {
                    $('.rent-object-popup_JS').click(function (e) { // событие клика по веб-документу
                        var div = $(".rent-object-popup_JS .popup-window"); // тут указываем ID элемента
                        $(".rent-object-popup_JS").unload();
                        if (!div.is(e.target) // если клик был не по нашему блоку
                            && div.has(e.target).length === 0) { // и не по его дочерним элементам
                            div.parent().parent().fadeOut(); // скрываем его
                        }
                    });

                });

                jQuery(function ($) {
                    $('.get-call_JS').click(function (e) { // событие клика по веб-документу
                        var div = $(".get-call_JS .popup-window"); // тут указываем ID элемента
                        $(".get-call_JS").unload();
                        if (!div.is(e.target) // если клик был не по нашему блоку
                            && div.has(e.target).length === 0) { // и не по его дочерним элементам
                            div.parent().parent().fadeOut(); // скрываем его
                        }
                    });
                });
            });

            var href = $(this).attr('data-href');
            $(".default-dashed-link").attr("href", href);

        } else {
            var href = $(this).attr('data-href');
            location.href = href;
        }
    });

    // CLOSE POPUP
    $('.popup-window__close_JS').click(function () {
        $(this).parent().parent().parent().fadeOut();
        $('.area').attr('value', 0);
        return false;
    });
    jQuery(function ($) {
        $('.get-call_JS').click(function (e) { // событие клика по веб-документу
            var div = $(".get-call_JS .popup-window"); // тут указываем ID элемента
            // $(".get-call_JS").unload();
            if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
                div.parent().parent().fadeOut(); // скрываем его
            }
        });
    });

    // OPEN HIDDEN NAV
    $('.open-hidden-nav_JS').click(function () {
        if ($('.navigation_JS').css('display') == 'none') {
            $(this).find('i').removeClass('icon-menu').addClass('icon-close');
            $('.navigation_JS').slideDown();
        } else {
            $(this).find('i').addClass('icon-menu').removeClass('icon-close');
            $('.navigation_JS').slideUp();
        }
        return false;
    });


    // HIDDEN TEXT – ADD LINK
    if ($(window).width() < 768) {

        $('.open-hidden-text-wrapper').append('<a href="#" class="open-hidden-text open-hidden-text_JS">Читать дальше</a>');
    }

    // OPEN HIDDEN TEXT
    $('.open-hidden-text_JS').on('click', function () {
        if ($(this).parent().hasClass('open-hidden-text-wrapper_opened')) {
            $(this).parent().removeClass('open-hidden-text-wrapper_opened');
            $(this).html("Читать дальше");
        } else {
            $(this).parent().addClass('open-hidden-text-wrapper_opened');
            $(this).html("Свернуть");
        }
        return false;
    });

    // HOME MOBILE SECTION TRANSFER
    if ($(window).width() < 768) {
        if ($('section').is('.gallery-section')) {
            var gallery = $('.gallery-section');
            $('.advantages-section').before(gallery);
            $('.advantages-section').after('<section class="gallery-section default-section default-section_gray-bg block" style="height:35px; padding: 0"></section>')
        }
    }

    // CHANGE OBJECT TABLES FOR MOBILE
    if ($(window).width() < 768) {
        $('.JS-obects-table tbody tr').each(function () {
            var price = $(this).find('td:nth-child(3)');
            var nalog = $(this).find('td:nth-child(4)');
            var mounth = $(this).find('td:nth-child(5)');
            var status = $(this).find('td:nth-child(6)');
            $(this).find('td:nth-child(2)').before(price);
            nalog.before(mounth);
            nalog.before(status);
        });
        if ($('section').is('.about-section')) {
            var table = $('.JS-obects-table_home');
            $('.home-top-section').after(table);
            var table2 = $('.JS-obects-table_rent');
            $('.home-top-section').after(table2);
        }
    }

    // SHOW ALL ROWS IN TABLE
    $('body').on('click', '.show-more-default-link_JS', function () {
        if ($(this).parent().find('table').hasClass('default-table_closed')) {
            $(this).parent().find('table').removeClass('default-table_closed').addClass('default-table_opened');
            $(this).html('Свернуть');
        } else {
            $(this).parent().find('table').removeClass('default-table_opened').addClass('default-table_closed');
            $(this).html('Показать еще');
        }
        return false;
    });

    // CHANGE POSITION ON RENT PAGE
    if ($(window).width() < 768) {
        if ($('div').is('.office-page_JS')) {
            var table = $('.office-page_JS table');
            $('.office-page .popup-window__content > p').before(table);
        }
    }

    // OPEN GET CALL POPUP
    $('.JS-get-call-popup-open').click(function () {
        //alert(this).attr('dataroistat');
        if ($(this).attr('datatypedeal') != undefined) {
            $('.typedeal').attr('value', $(this).attr('datatypedeal'));
        }
        if ($(this).attr('dataroistat') != undefined) {
            $('.area').attr('value', $(this).attr('dataroistat'));
        }
        if ($(this).attr('datacrmid') != undefined) {
            $('.crmId').attr('value', $(this).attr('datacrmid'));
        }
        if ($(this).attr('data') != undefined) {
            $('.popup-window_narrow h3').html('Получить презентацию<br /> на Whatsapp');
            $('.popup-window_narrow .blue-button').text('Получить');
        } else {
            $('.popup-window_narrow h3').html('Заказать обратный<br /> звонок');
            $('.popup-window_narrow .blue-button').text('ОТПРАВИТЬ');
        }
        $('.get-call_JS').fadeIn();
        return false;
    });


    // SUBMIT GET CALL POPUP
    // $('.get-call_JS form').submit(function(e){
    //
    // 	e.preventDefault();
    // 	var form = $(this);
    // 	//alert(form.attr('action'));
    //
    // 	var name = document.getElementById('namesend').value;
    // 	var email = document.getElementById('emailsend').value;
    //     var area =  $('.area').attr('value');
    //     var title = $('.popup-window_narrow h3').text();
    //     var crmId = $('.crmId').attr('value');
    //     var typedeal = $('.typedeal').attr('value');
    //
    // 	$.ajax({
    // 		type     : "GET",
    // 		url      : form.attr('action'),
    // 		data     : {name: name, email: email, area: area, title: title, crmId: crmId, typedeal: typedeal},
    // 		success  : function(data){
    // 			console.log(data);
    // 			data = $.parseJSON(data);
    //
    // 			if(data.success) {
    // 				$('.get-call_JS .modalcontent').html('<p class="answerOnrequest text-center">Спасибо за обращение! В ближайшее время с Вами свяжется наш специалист.</p>');
    // 			}
    // 			if(data.fail) {
    // 				let errorsStr = data.fail.join('<br>');
    // 				$('.get-call_JS .modalcontent').html('<p class="answerOnrequest text-center">'+errorsStr+'</p>');
    // 			}
    // 		},
    // 		error : function(data){
    // 			$('.get-call_JS .modalcontent').html('<p class="answerOnrequest text-center">Ошибка отправки формы</p>');
    // 		}
    // 	});
    //
    // });

    // SUBMIT MAIN FORM
    // $('.contacts-form-block form').submit(function(e){
    //     e.preventDefault();
    //     var name = document.getElementById('mainname').value;
    //     var phone = document.getElementById('mainphone').value;
    //     var email = document.getElementById('mainemail').value;
    //     var comment = document.getElementById('maincomment').value;
    //     var title = 'Заявка на просмотр';
    //
    //     console.log( $("#captcha").val() )
    //
    // 	let form = $(this);
    // 	//alert(form.attr('action'));
    // 	$.ajax({
    // 		type     : "GET",
    // 		url      : form.attr('action'),
    // 		data     : {
    //             name: name,
    //             email: email,
    //             phone: phone,
    //             comment: comment,
    //             title: title,
    //             'g-recaptcha-response': $("#captcha").val()
    //         },
    // 		success  : function(data){
    // 			data = $.parseJSON(data);
    // 			$('.messages-popup_JS').fadeIn();
    // 			if(data.success) {
    // 				$('.messages-popup_JS .modalcontent').html('<p class="answerOnrequest text-center">Спасибо за обращение! В ближайшее время с Вами свяжется наш специалист.</p>');
    // 			}
    // 			if(data.fail) {
    // 				let errorsStr = data.fail + '<br>';
    // 				$('.messages-popup_JS .modalcontent').html('<p class="answerOnrequest text-center">'+errorsStr+'</p>');
    // 			}
    // 		},
    // 		error : function(data){
    // 			$('.messages-popup_JS').fadeIn();
    // 			$('.messages-popup_JS .modalcontent').html('<p class="answerOnrequest text-center">Ошибка отправки формы</p>');
    // 		}
    // 	});
    // });
});

let currentForm = 'main';

// SUBMIT MAIN FORM
_submitEvent = function () {
    if (currentForm == 'main') mainFormSubmit();
    if (currentForm == 'getCallPopup') getCallPopupSubmit();
};

const mainFormSubmit = () => {
    var name = document.getElementById('mainname').value;
    var phone = document.getElementById('mainphone').value;
    var email = document.getElementById('mainemail').value;
    var comment = document.getElementById('maincomment').value;
    var title = 'Заявка на просмотр';

    $.ajax({
        type: "GET",
        url: '/ajax/send-mail',
        data: {
            name: name,
            email: email,
            phone: phone,
            comment: comment,
            title: title,
            'g-recaptcha-response': $("#g-recaptcha-response").val()
        },
        success: function (data) {
            data = $.parseJSON(data);
            $('.messages-popup_JS').fadeIn();
            if (data.success) {
                $('.messages-popup_JS .modalcontent').html('<p class="answerOnrequest text-center">Спасибо за обращение! В ближайшее время с Вами свяжется наш специалист.</p>');
            }
            if (data.fail) {
                let errorsStr = data.fail + '<br>';
                $('.messages-popup_JS .modalcontent').html('<p class="answerOnrequest text-center">' + errorsStr + '</p>');
            }
        },
        error: function (data) {
            $('.messages-popup_JS').fadeIn();
            $('.messages-popup_JS .modalcontent').html('<p class="answerOnrequest text-center">Ошибка отправки формы</p>');
        }
    });
}

const getCallPopupSubmit = () => {

    var name = document.getElementById('namesend').value;
    var email = document.getElementById('emailsend').value;
    var area = $('.area').attr('value');
    var title = $('.popup-window_narrow h3').text();
    var crmId = $('.crmId').attr('value');
    var typedeal = $('.typedeal').attr('value');

    $.ajax({
        type: "GET",
        url: '/ajax/send-mail',
        data: {
            name: name,
            email: email,
            area: area,
            title: title,
            crmId: crmId,
            typedeal: typedeal,
            'g-recaptcha-response': $("#g-recaptcha-response").val()
        },
        success: function (data) {
            data = $.parseJSON(data);

            if (data.success) {
                $('.get-call_JS .modalcontent').html('<p class="answerOnrequest text-center">Спасибо за обращение! В ближайшее время с Вами свяжется наш специалист.</p>');
            }
            if (data.fail) {
                let errorsStr = data.fail.join('<br>');
                $('.get-call_JS .modalcontent').html('<p class="answerOnrequest text-center">' + errorsStr + '</p>');
            }
        },
        error: function (data) {
            $('.get-call_JS .modalcontent').html('<p class="answerOnrequest text-center">Ошибка отправки формы</p>');
        }
    });
}

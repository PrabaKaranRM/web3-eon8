'use strict';

$(window).on('load', function () {
    $('#loader').addClass("closed");
    if ($('#loader').addClass("closed")) {
        $('.HomeVid').attr('data-autoplay', true);
        $('.fistVid')[0].play();
        setTimeout(() => {
            $('.bg-greadients').addClass('gradient');
        }, 11000);
        if ($('.banner-video')[0].play()) {
            var wow = new WOW(
                {
                    boxClass: 'wow',      // default
                    animateClass: 'animated', // default
                    offset: 0,          // default
                    mobile: true,
                    live: true        // default
                }
            );
            $('#fullpage').fullpage({
                licenseKey: '7BKDJ-J0Q2J-JWH56-2QI3I-YLKNN',
                credits: { enabled: false },
                scrollBar: true,
                autoScrolling: true,
                scrollOverflow: true,
                normalScrollElements: '.element',
                responsiveWidth: 800,
                afterRender: function () {
                    wow.init();
                }
            });
        }
    }
});

// fullpage initialize

$(document).ready(function () {
    $('.mob-wrap li a').on('click', () => {
        $('html,body').css('overflow', 'visible');
        $('.mob-wrap').removeClass('Show');
    })

    // button animation
    $('.btn-primary')
        .on('mouseenter', function (e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('span').css({ top: relY, left: relX })
        })
        .on('mouseout', function (e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('span').css({ top: relY, left: relX })
        });
});

// banner slider initialize
$('#partner-slider').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    cssease: 'ease',
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
    ]
});

if (window.screen.width < 768) {
    $('.inChange').attr('data-wow-delay', '5s');
}



$('.hamburger').on('click', function () {
    $('.mob-wrap').addClass('Show');
    $('html,body').css('overflow', 'hidden');
});
$('.hamburgerClose').on('click', function () {
    $('.mob-wrap').removeClass('Show');
    $('html,body').css('overflow', 'unset');
});


function hide() {
    document.getElementById('modal').style.display = 'none';
}

function show() {
    document.getElementById('modal').style.display = 'block';
}

const ContactForm = $('#contactSubmit');

ContactForm.on('click', (e) => {
    const expectation = $("#expectation").val();
    const about = $("#about").val();
    const email = $("#email").val();
    const number = $("#number").val();
    const captcha = $("#captcha_code").val();
    let valid = true;

    if (expectation == '') { $("#expectationErr").show(); valid = false; } else { $("#expectationErr").hide(); }
    if (about == '') { $("#aboutErr").show(); valid = false; } else $("#aboutErr").hide();
    if (email == '') { $("#emailErr").show(); valid = false; } else $("#emailErr").hide();
    if (number == '' || number.length !== 10) { $("#numberErr").show(); valid = false; } else $("#numberErr").hide();
    if (captcha == "") { $('#captcha_Er').show(); valid = false; } else $('#captcha_Er').hide();

    // ajax url posting & getting form datas and captcha condions
    if (valid == true) {
        $.ajax({
            type: "POST",
            url: 'ajax/contact_form.php',
            data: { expectation: expectation, about: about, email: email, number: number, captcha_code: captcha },
            success: function () {
                 {
                    alert('Your application was submitted');
                    window.location.reload();
                    return true;
                }
            }
        });
    }
    e.preventDefault();
});





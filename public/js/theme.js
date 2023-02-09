$(document).ready(function() {



    // NAV LINK ACTIVE
    jQuery(function($) {
        var path = window.location.href;
        $("nav ul li a").each(function() {
            if (this.href === path) {
                $(this).addClass("fw-bold");
            }
        });
    });

    // COLLASPE CLOSE WHEN OTHER CLICK
    $(document).click(function(e) {

        if (!$(e.target).is(".faqs .card-body .collapse")) {
            $(".work-process .card-body .collapse").collapse("hide");
        }
    });

    $(".faqs li a").click(function() {
        $(".faqs li a").removeClass("text-red");
        $(this).addClass("text-red");
    });


    //NAVBAR FIXED HIDE STARTS
    $(window).scroll(function(e) {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $('nav').addClass("bg-black");

        } else {
            $('nav').removeClass("bg-black");
        }

    })

    // AOS Initialize
    AOS.init({
        duration: 1200,
    });

    /* HEADER END*/


    //-----JS for Price Range slider-----
    function getVals() {
        // Get slider values
        let parent = this.parentNode;
        let slides = parent.getElementsByTagName("input");
        let slide1 = parseFloat(slides[0].value);
        let slide2 = parseFloat(slides[1].value);
        // Neither slider will clip the other, so make sure we determine which is larger
        if (slide1 > slide2) {
            let tmp = slide2;
            slide2 = slide1;
            slide1 = tmp;
        }

        let displayElement = parent.getElementsByClassName("rangeValues")[0];
        displayElement.innerHTML = "$" + slide1 + " - $" + slide2;
    }

    window.onload = function() {
        // Initialize Sliders
        let sliderSections = document.getElementsByClassName("range-slider");
        for (let x = 0; x < sliderSections.length; x++) {
            let sliders = sliderSections[x].getElementsByTagName("input");
            for (let y = 0; y < sliders.length; y++) {
                if (sliders[y].type === "range") {
                    sliders[y].oninput = getVals;
                    // Manually trigger event first time to display values
                    sliders[y].oninput();
                }
            }
        }
    }

    // SLICK SLIDER
    //Logo Slider
    $(".bannerSlider").slick({
        dots: true,
        arrows: false,
        autoplay: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        centerPadding: "20px",
    });

    // SLICK SLIDER END


    $('#summernote').summernote({
        placeholder: 'Message',
        tabsize: 2,
        height: 300
    });

});

/* HEADER */
function close_offcanvas() {
    document.querySelector('.mobile-offcanvas.show').classList.remove('show');
    document.body.classList.remove('offcanvas-active');
}

function show_offcanvas(offcanvas_id) {
    document.getElementById(offcanvas_id).classList.add('show');
    document.body.classList.add('offcanvas-active');
}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('[data-trigger]').forEach(function(everyelement) {
        let offcanvas_id = everyelement.getAttribute('data-trigger');
        everyelement.addEventListener('click', function(e) {
            e.preventDefault();
            show_offcanvas(offcanvas_id);
        });
    });

    document.querySelectorAll('.btn-close').forEach(function(everybutton) {
        everybutton.addEventListener('click', function(e) {
            e.preventDefault();
            close_offcanvas();
        });
    });

});

// start product detail page

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    vertical: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                vertical: false,
                centerMode: false,
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 600,
            settings: {
                vertical: false,
                centerMode: false,
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                vertical: false,
                centerMode: false,
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});


function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}

String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});

// product detail page product pophover

$(document).ready(function($) {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'), {
        html: true
    })
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    $('.product_detail_hover').popover({
        title: '',
        content: '<p class="popover-text mb-0">"I cannot buy some components of this  piece again.<span class="text-red"> Availability is limited</span> to   component stock on hand. Availability not guaranteed."</p>',
        html: true,
        customClass: 'map_popover',
        trigger: "hover"
    });


})

function route (path, template) {
    if (typeof template === 'function') {
        return routes[path] = template;
    }
}

let path = window.location.pathname;
if (path.includes("/cart")) formatCardNumber();
// end product detail page
$(function() {

    var owner = $('#owner');
    var cardNumber = $('#cardNumber');
    var cardNumberField = $('#card-number-field');
    var CVV = $("#cvv");
    var mastercard = $("#mastercard");
    var confirmButton = $('#confirm-purchase');
    var visa = $("#visa");
    var amex = $("#amex");

    // Use the payform library to format and validate
    // the payment fields.

    cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');


    cardNumber.keyup(function() {

        amex.removeClass('d-none');
        visa.removeClass('d-none');
        mastercard.removeClass('d-none');

        if ($.payform.validateCardNumber(cardNumber.val()) == false) {
            cardNumberField.addClass('has-error');
        } else {
            cardNumberField.removeClass('has-error');
            cardNumberField.addClass('has-success');
        }

        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            visa.addClass('d-block');
            amex.addClass('d-none');
            mastercard.addClass('d-none');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            amex.addClass('d-block');
            visa.addClass('d-none');
            mastercard.addClass('d-none');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            mastercard.addClass('d-block');
            visa.addClass('d-none');
            amex.addClass('d-none');
        } else if ($.payform.parseCardType(cardNumber.val()) == '') {
            amex.removeClass('d-none');
            visa.removeClass('d-none');
            mastercard.removeClass('d-none');
        }
    
    });

    confirmButton.click(function(e) {

        e.preventDefault();

        var isCardValid = $.payform.validateCardNumber(cardNumber.val());
        var isCvvValid = $.payform.validateCardCVC(CVV.val());

        if (owner.val().length < 5) {
            alert("Wrong owner name");
        } else if (!isCardValid) {
            alert("Wrong card number");
        } else if (!isCvvValid) {
            alert("Wrong CVV");
        } else {
            // Everything is correct. Add your form submission code here.
            alert("Everything is correct");
        
    }

    });
//CREDIT CARD FUNCTIONALITY//

});
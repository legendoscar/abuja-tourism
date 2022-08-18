$(function () {

    // Datepicker
    $('input[name="dates"]').daterangepicker({
        minDate: 0,
        // singleDatePicker: true,
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear',
            applyLabel: "Apply"
        }
    });

    $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    });

    $('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });


    // Toggle Password
    $(".toggle-pwd").click(function (e) {
        e.preventDefault();

        $(this).toggleClass("icon-eye-slash icon-eye");

        let input = $(".pwd_input");
        let epi = $('.toggle-input');

        if (input.attr("type") === "password" || epi.attr("type") === "password") {
            input.attr("type", "text");
            epi.attr("type", "text");
        } else {
            input.attr("type", "password");
            epi.attr("type", "password");
        }
    });

    // Back to top button
    $(window).on("scroll", function (a) {
        a.preventDefault();
        if ($(this).scrollTop() > 150) {
            $("#to-top").fadeIn(500);
        } else {
            $("#to-top").fadeOut(500)
        }
    });
    $("#to-top").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });



    // Popular hotel carousel
    $(".pplarh").owlCarousel({
        autoplay: false,
        dots: false,
        nav: true,
        margin: 0,
        navText: ['<span class="icon-angle-left">', '<span class="icon-angle-right">'],
        loop: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 500,
        smartSpeed: 500,
        responsive: {
            0: {
                items: 1
            },
            680: {
                items: 2
            },
            992: {
                items: 2
            },
            1175: {
                items: 3
            },
            1550: {
                items: 4
            }
        }
    });

    // Popular Tourism sites carousel
    $(".imgx").owlCarousel({
        autoplay: true,
        dots: false,
        nav: true,
        margin: 0,
        navText: ['<span class="icon-long-arrow-left">', '<span class="icon-long-arrow-right">'],
        loop: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        speed: 600,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });

    // Hotel images carousel
    $("#htelimgs-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        nav: false,
        margin: 0,
        loop: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 600,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            680: {
                items: 2
            },
            992: {
                items: 2
            },
            1175: {
                items: 3
            },
            1550: {
                items: 4
            }
        }
    });

    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
        delay: 15,
        time: 2500
    });


    // Tooltip

    $('[data-toggle="tooltip"]').tooltip();


    // Nice select
    $('.data-select').niceSelect();

    // Search slide
    $('#srchButton').click(function () {
        $(this).parent().find('.search-drop').slideToggle();
    })


    // Range Slider for Price
    var $range = $("#range-slider");
    var $inputFrom = $("#range-from");
    var $inputTo = $("#range-to");
    var instance;
    var min = 0;
    var max = 100000;
    var from = 0;
    var to = 30000;

    $range.ionRangeSlider({
        skin: "modern",
        type: "double",
        grid: false,
        min: min,
        max: max,
        from: 6000,
        to: 60000,
        prefix: '&#8358;',
        decorate_both: true,
        prettify_enabled: true,
        prettify_separator: ",",
        max_postfix: "+",
        onStart: updateInputs,
        onChange: updateInputs,
        onFinish: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
        from = data.from;
        to = data.to;

        $inputFrom.prop("value", from);
        $inputTo.prop("value", to);
    }

    $inputFrom.on("change", function () {
        var val = $(this).prop("value");

        // validate
        if (val < min) {
            val = min;
        } else if (val > to) {
            val = to;
        }

        instance.update({
            from: val
        });

        $(this).prop("value", val);

    });

    $inputTo.on("change", function () {
        var val = $(this).prop("value");

        // validate
        if (val < from) {
            val = from;
        } else if (val > max) {
            val = max;
        }

        instance.update({
            to: val
        });

        $(this).prop("value", val);
    });


    // Booking form (NEXT)
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    $(".next-form").click(function (e) {
        e.preventDefault();
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset.book_mdf").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity,
                    'position': 'relative'
                });
            },
            duration: 1200,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });


    // (BACK)
    $(".back-form").click(function (e) {
        e.preventDefault();
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        $("#progressbar li").eq($("fieldset.book_mdf").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left,
                    'position': 'absolute'
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity,
                    'position': 'relative'
                });
            },
            duration: 1200,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    // Register modal ------------------
    var modal = {};
    modal.hide = function () {
        $('.modal , .reg-overlay').fadeOut(200);
        $("html, body").removeClass("hid-body");
    };
    $('.modal-open').on("click", function (e) {
        e.preventDefault();
        $('.modal , .reg-overlay').fadeIn(200);
        $("html, body").addClass("hid-body");
    });
    $('.close-reg , .reg-overlay').on("click", function () {
        modal.hide();
    });

    // See more
    $(document).on('click', '#more_facilities', function (e) {
        e.preventDefault();

        $('#more_or_less').toggle(500).css({
            'transition': 'all .1s linear'
        });
    })

    $(document).on('click', '#more_style', function (e) {
        e.preventDefault();

        $('#more_or_less_style').each(function () {
            $(this).toggle(500).css({
                'transition': 'all .1s linear'
            });
        });
    });

    // FIlter
    $('#slideFilter').click(function (e) {
        e.preventDefault();

        $('#filter').toggle('fast', function () {
            $(this).css({
                'width': '60vw',
                'z-index': '999'
            });
        });
    }).parent('#flterlist');

    $('.close, .sngl, #sub, #ftsec').click(function () {
        $('#filter').css({
            'display': 'none'
        })
    });

    // Venobox
    $('.venobox').venobox();


    // Decrement / INcrement
    $(".qty-btn_room").click(function (e) {

        e.preventDefault();
        var button = $(this);
        var oldValue = button.parents().find(".incdec").val();

        button.each(function () {
            if (button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            button.parents().find(".incdec").val(newVal);

        })

    });

    $(".qty-btn_adult").click(function (e) {

        e.preventDefault();
        var button = $(this);
        var oldValue = button.parents().find(".indec").val();

        button.each(function () {
            if (button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            button.parents().find(".indec").val(newVal);

        })

    });

    $(".qty-btn_children").click(function (e) {

        e.preventDefault();
        var button = $(this);
        var oldValue = button.parents().find(".decin").val();

        button.each(function () {
            if (button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            button.parents().find(".decin").val(newVal);

        })

    });


    // Smooth scroll for the navigation menu and links 

    var scrolltoOffset = $('#top').outerHeight() + 60;
    if (window.matchMedia("(max-width: 991px)").matches) {
        scrolltoOffset -= 16;
    }
    $(document).on('click', '.scroll_list li a, .bookscroll', function (e) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            e.preventDefault();
            var target = $(this.hash);
            if (target.length) {

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == '#top') {
                    scrollto = 0;
                }

                $('html, body').animate({
                    scrollTop: scrollto
                }, 1000);

                if ($(this).parent('.scroll-wrap').length) {
                    $('.scroll_list .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                return false;
            }
        }
    });


    // Navigation active state on scroll
    var nav_sections = $('section');
    var main_nav = $('.scroll-wrap');

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop() + 300;

        nav_sections.each(function () {
            var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();


            if (cur_pos <= top && cur_pos >= bottom) {
                if (cur_pos <= bottom) {
                    main_nav.find('li').removeClass('active');
                }
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
            }
            if (cur_pos < 300) {
                $(".scroll-wrap ul:first li:first").addClass('active');
            }

        });
    });

    // Dashboard user-name toggle
    $(".header-user-name").on("click", function () {
        $(".header-user-menu ul").toggleClass("hu-menu-vis");
        $(this).toggleClass("hu-menu-visdec");
    });

    $('.toggle-change-password').on("click", function () {
        $('.toggle-change').toggle(500);
    })



    /* ---------------------------------------------------------
    #####----=== Form Validation ===----
    -------------------------------------------------------------
    */


   	// Form validation

    $('form.sign-form, form.main-register-form, form.personal-info-form').submit(function (e) {
        e.preventDefault();

        var f = $(this).find('.form-group'),
            ferror = false,
            emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;


   	    //Input validate

        f.children('input').each(function () { // run all inputs

            var i = $(this); // current input
            var rule = i.attr('data-rule');

            var pwd = $('.password').val();
            var confirm_pwd = $('.confirm-pwd').val();

            if (rule !== undefined) {
                var ierror = false; // error flag for current input
                var pos = rule.indexOf(':', 0);
                if (pos >= 0) {
                    var exp = rule.substr(pos + 1, rule.length);
                    rule = rule.substr(0, pos);
                } else {
                    rule = rule.substr(pos + 1, rule.length);
                }

                switch (rule) {
                    case 'required':
                        if (i.val() === '') {
                            ferror = ierror = true;
                        }
                        break;

                    case 'minlen':
                        if (i.val().length < parseInt(exp)) {
                            ferror = ierror = true;
                        }
                        break;

                    case 'email':
                        if (!emailExp.test(i.val())) {
                            ferror = ierror = true;
                        }
                        break;
                    
                    case 'same':
                        if (pwd !== confirm_pwd) {
                            ferror = ierror = true;
                        }
                        break;
                    default:
                        ferror = ierror = false;
                }
                i.next('.validate').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }

            $(this).keyup(function (e) {
                e.preventDefault();
                i.next('.validate').hide();
            })
        });

    if (ferror) return false;

        
        
        var this_form = $(this);
        var action = $(this).attr('action');

        if (!action) {
            this_form.find('.loading').slideUp();
            this_form.find('.error-message').slideDown().html('The form action property is not set!');
            return false;
        }

        this_form.find('.sent-message').slideUp();
        this_form.find('.error-message').slideUp();
        this_form.find('.reg').css({ 'display': 'none' });
        this_form.find('.loading').slideDown();

        return true;
    });


    
});
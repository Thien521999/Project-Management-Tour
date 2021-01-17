$(function (event) {
    var $images = $(".slide > img");
    var imagesLeftToLoad = $images.length;
    $images.on("load", function () {
        imagesLeftToLoad -= 1;

        if (imagesLeftToLoad === 0) {
            init();
        }
    });

    var init = function () {
        // This function runs before the slide transition starts
        var switchIndicator = function ($c, $n, currIndex, nextIndex) {
            // kills the timeline by setting it's width to zero
            $timeIndicator.stop().css("width", 0);
            // Highlights the next slide pagination control
            $indicators.removeClass("current").eq(nextIndex).addClass("current");
        };

        // This function runs after the slide transition finishes
        var startTimeIndicator = function () {
            // start the timeline animation
            $timeIndicator.animate({ width: "100%" }, slideInterval);
        };

        var $box = $("#box"),
            $indicators = $(".goto-slide"),
            $effects = $(".effect"),
            $timeIndicator = $("#time-indicator"),
            slideInterval = 5000,
            defaultOptions = {
                speed: 1200,
                autoScroll: true,
                timeout: slideInterval,
                next: "#next",
                prev: "#prev",
                pause: "#pause",
                onbefore: switchIndicator,
                onafter: startTimeIndicator,
            },
            effectOptions = {
                blindLeft: { blindCount: 15 },
                blindDown: { blindCount: 15 },
                tile3d: { tileRows: 6, rowOffset: 80 },
                tile: { tileRows: 6, rowOffset: 80 },
            };

        // initialize the plugin with the desired settings
        $box.boxSlider(defaultOptions);
        // start the time line for the first slide
        startTimeIndicator();

        // Paginate the slides using the indicator controls
        $("#controls").on("click", ".goto-slide", function (ev) {
            $box.boxSlider("showSlide", $(this).data("slideindex"));
            ev.preventDefault();
        });

        // This is for demo purposes only, kills the plugin and resets it with
        // the newly selected effect
        $("#effect-list").on("click", ".effect", function (ev) {
            var $effect = $(this),
                fx = $effect.data("fx"),
                extraOptions = effectOptions[fx];

            $effects.removeClass("current");
            $effect.addClass("current");
            switchIndicator(null, null, 0, 0);
            $box.boxSlider("destroy").boxSlider($.extend({ effect: fx }, defaultOptions, extraOptions));
            startTimeIndicator();

            ev.preventDefault();
        });
    };


    /** Lich trinh */
    //cho tat ca noi dung thu lai
    $('.contDay1').slideUp();
    $('.contDay2').slideUp();
    $('.contDay3').slideUp();
    $('.contDay4').slideUp();
    //click vao the h3
    $('.day1').click(function (e) {
        $('.contDay1').slideToggle();
    });
    $('.day2').click(function (e) {
        $('.contDay2').slideToggle();
    });
    $('.day3').click(function (e) {
        $('.contDay3').slideToggle();
    });
    $('.day4').click(function (e) {
        $('.contDay4').slideToggle();
    });
    /* end Lich trinh */


});

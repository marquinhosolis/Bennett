/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener(
            "click",
            function () {
                this.classList.toggle("is-active");
            },
            false
        );
    });
}

function mobileMenuOpen() {
    $(".hamburger").click(function () {
        $(".mobileNav").toggleClass("mobileNav--visible");
        $("body").toggleClass("body--fixed");
    });
}

function fixedMenu() {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 400) {
            $(".header--fixed").addClass("header--fixed--visible");
        } else {
            $(".header--fixed").removeClass("header--fixed--visible");
        }
    });
}

function showMoreTeamMember() {
    $(".teamMemberTextReadMore a").click(function (e) {
        e.preventDefault();
        var modal = $(this).closest(".teamMember").find(".teamMemberModal");
        modal.fadeIn();
        modal.find(".teamMemberModalMask").click(function () {
            modal.fadeOut();
        });
        modal.find(".teamMemberModalContentClose").click(function () {
            modal.fadeOut();
        });
    });
}

function learnMoreIndividuals() {
    $(".bennetDifferenceBoxTitle a").click(function (e) {
        e.preventDefault();

        var modal = $(this)
            .closest(".bennetDifferenceBoxTitle")
            .find(".bennetDifferenceBoxTitleModal");
        modal.fadeIn();
        modal.find(".bennetDifferenceBoxTitleModalMask").click(function () {
            modal.fadeOut();
        });
        modal
            .find(".bennetDifferenceBoxTitleModalContentClose")
            .click(function () {
                modal.fadeOut();
            });
    });
}

function flexslider() {
    if ($(window).width() > 768) {
        $(".processSlider").removeClass("flexslider");
    }
    $(".individualInsurancePage .process .flexslider").flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 212,
        itemMargin: 0,
        controlNav: false,
        directionNav: false,
        slideshow: false,
    });
    $(".testimonials .flexslider").flexslider({
        animation: "slide",
        itemWidth: 350,
        itemMargin: 20,
        controlNav: false,
    });
    $(".employeeBenefitsPage .process .flexslider").flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 0,
        controlNav: false,
        directionNav: false,
        slideshow: false,
    });
    $(".carriersHome .flexslider").flexslider({
        animation: "slide",
        animationLoop: false,
        controlNav: false,
        itemWidth: 160,
        itemMargin: 80,
        move: 1,
        slideshow: false,
    });
}

function servicesToggle() {
    $(".serviceUnique").each(function () {
        //var numP = $(this).find(".serviceUniqueText p").size();
        $(this).find(".serviceUniqueText").children().slice(3).hide();
        var numP = $(this).find(".serviceUniqueText").children().length;
        $(this).click(function (e) {
            e.preventDefault();
            $(this)
                .find(".serviceUniqueText")
                .children()
                .slice(3)
                .slideToggle();
            $(this).find(".serviceUniqueTextMoreLess").toggle();
        });
    });
}

function testimonialLimit() {
    var linesLimit = 14;
    var lineHeight = 20;
    $(".testimonialBoxCopy").each(function () {
        var boxHeight = $(this).outerHeight();
        var numlines = parseInt(boxHeight / lineHeight);
        if (numlines > linesLimit) {
            $(this).css({
                "max-height": linesLimit * lineHeight,
                overflow: "hidden",
            });
            $(this)
                .closest(".testimonialBox")
                .find(".readMoreTestimonial")
                .show();
        } else {
            $(this).css("margin-bottom", 35);
        }

        var i = true;
        $(".readMoreTestimonial").click(function (e) {
            e.preventDefault();
            i = !i;
            if (i == true) {
                $(this)
                    .find("a")
                    .html(
                        "read more <i class='fa fa-hand-pointer-o' aria-hidden='true'></i>"
                    );
                $(this)
                    .closest(".testimonialBox")
                    .find(".testimonialBoxCopy")
                    .css("max-height", linesLimit * lineHeight);
            } else {
                $(this)
                    .find("a")
                    .html(
                        "read less <i class='fa fa-hand-pointer-o' aria-hidden='true'></i>"
                    );
                $(this)
                    .closest(".testimonialBox")
                    .find(".testimonialBoxCopy")
                    .css("max-height", boxHeight);
            }

            ///alert("bbg");
        });
    });
}

$(document).ready(function () {
    mobileMenuOpen();
    showMoreTeamMember();
    learnMoreIndividuals();
    flexslider();
    if ($(window).width() > 768) {
        fixedMenu();
    }
    AOS.init();
});

$(window).load(function () {
    testimonialLimit();
});

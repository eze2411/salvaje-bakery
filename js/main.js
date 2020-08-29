//function changeActivePageDown(e,a){e.removeClass("active").addClass("prev"),a.addClass("active").addClass("wait").removeClass("fixed"),a.next().addClass("fixed"),a.removeClass("wait")}function changeActivePageUp(e,a,t){a.addClass("active").addClass("wait").removeClass("prev"),t.removeClass("fixed"),e.removeClass("active").addClass("fixed"),a.removeClass("wait")}function atBottom(e){return e.getBoundingClientRect().bottom<=0}function atTop(e){return e.getBoundingClientRect().top>=0}$(document).ready(function(){var e=0;$(window).scroll(function(){var a,t,s=$('.active:not(".wait")');0!==s.length&&(a=s.next(),t=s.prev());var i=$(this).scrollTop();if(i>e)void 0!==a&&atBottom(s[0])?changeActivePageDown(s,a):s.removeClass("fixed");else{if(0===s.index())return;if(void 0!==s&&void 0!==t)atTop(s[0])&&changeActivePageUp(s,t,a);else{var o=$(".page").last();atTop(o[0])&&(o.prev().addClass("wait").addClass("active"),o.removeClass("prev").addClass("fixed"),o.prev().removeClass("prev").removeClass("wait"))}}e=i})});


$( document ).ready(function() {
    navbarColor();

    'use strict';
    
    navbarHide();

    dropDown();


    
});

function navbarHide() {
    var c, currentScrollTop = 0, navbar = $('nav');
    $(window).scroll(function () {
        var a = $(window).scrollTop();
        var b = navbar.height();
        currentScrollTop = a;
        if (c < currentScrollTop && a > b ) {
            navbar.addClass("scrollUp");
        }
        else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
        }
        c = currentScrollTop;
    });
}

function navbarColor() {
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
}
function dropDown() {
    $(function () {
        
        $(document).scroll(function () {
            var $dropDown = $(".dropdown-menu");
            var $nav = $(".fixed-top");
            $dropDown.removeClass('show', $(this).scrollTop() > $nav.height());
        });
    });
}



function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1500);

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('main', true);
    show('loading', false);
});


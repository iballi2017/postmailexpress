$(document).ready(function () {
    // alert("hello");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 500) {
            //clearHeader, not clearheader - caps H
            $(".main-navigation-container").removeClass("background-with-image");
            $(".main-navigation-container").addClass("background-without-image");
        }
    }); //missing );



    $(".hero-text-slider").owlCarousel({
        loop: true,
        nav: false,
        dots: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".pme-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        fluidSpeed: 1,
        lazyLoad: true,
        // slideSpeed : 10000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".customers-reviews-slider").owlCarousel({
        loop: true,
        autoplay: false,
        dots: true,
        autoplayTimeout: 10000,
        fluidSpeed: 1,
        // slideSpeed : 10000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
})


// changing the background of the main navigation bar
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 500) {
        //clearHeader, not clearheader - caps H
        $(".main-navigation-container").removeClass("background-with-image");
        $(".main-navigation-container").addClass("background-without-image");
    }
    //>=, not <=
    if (scroll <= 500) {
        //clearHeader, not clearheader - caps H
        $(".main-navigation-container").addClass("background-with-image");
        $(".main-navigation-container").removeClass("background-without-image");
    }
}); //missing );


// toggle pasword vissibility
function showPassword() {

    var x = document.getElementById("updateNewPassword");
    var y = document.getElementById("new-passwordIcon");
    // if the password is in password mode, change to plain text and make the icon clor red
    if (x.type === "password") {
        x.type = "text";
        y.style.color = "red";
        // if the password is in plain texts, return texts to password mode and return the icon color to green
    } else {
        x.type = "password";
        y.style.color = "#2d882d";
    }

}

function toggleConfirmPassword() {

    var x = document.getElementById("confirmNewPassword");
    var y = document.getElementById("confirm-passwordIcon");

    if (x.value.length > 0) {
        x.type = "password";
    }
    if (x.type === "password") {
        x.type = "text";
        y.style.color = "red";
    } else {
        x.type = "password";
        y.style.color = "#2d882d";
    }

}

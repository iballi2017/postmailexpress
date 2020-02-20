$(document).ready(function () {
    // alert("hello");

    $(".hero-text-slider").owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        dots: true,
        autoplayTimeout: 10000,
        fluidSpeed: 1,
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
    if (scroll >= 0) {
        //clearHeader, not clearheader - caps H
        $(".index-main-navigation-container").addClass("background-with-image");
    }
    //>=, not <=
    if (scroll <= 0) {
        //clearHeader, not clearheader - caps H
        $(".index-main-navigation-container").removeClass("background-with-image");
    }
}); //missing );




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



//back to previous page button
function goBack() {
    window.history.back();
}


// toggle pasword vissibility
function showPassword() {

    var x = document.getElementById("updateNewPassword");
    var y = document.getElementById("new-passwordIcon");

    if (x.value.length > 0) {
        // if the password is in password mode, change to plain text and make the icon clor red
        if (x.type === "password") {
            x.type = "text";
            y.classList.add("text-warning");
            // if the password is in plain texts, return texts to password mode and return the icon color to green
        } else {
            x.type = "password";
            y.style.color = "#2d882d";
            y.classList.remove("text-warning");
        }
    }

}

function toggleConfirmPassword() {

    var x = document.getElementById("confirmNewPassword");
    var y = document.getElementById("confirm-passwordIcon");

    if (x.value.length > 0) {
        if (x.type === "password") {
            x.type = "text";
            y.classList.add("text-warning");
        } else {
            x.type = "password";
            y.style.color = "#2d882d";
            y.classList.remove("text-warning");
        }
    }

}



// validating register form
$(function () {
    var $registerForm = $("#registerForm");

    //###@ creating a custom validator that will call error when a space is inputed into a field
    $.validator.addMethod("noSpace", function (value, element) {
        return value == "" || value.trim().length != 0
    }, "Spaces are not allowed");
    //###@

    if ($registerForm.length) {
        $registerForm.validate({
            rules: {
                firstName: {
                    required: true,
                    noSpace: true
                },
                lastName: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                address: {
                    required: true
                },
                townCity: {
                    required: true
                },
                state: {
                    required: true
                },
                password: {
                    required: true
                },
                confirmPassword: {
                    required: true,
                    equalTo: '#password'
                }
            },
            messages: {
                firstName: {
                    required: "firstName field cannot be empty"
                },
                lastName: {
                    required: "Name field cannot be empty"
                },
                email: {
                    required: "Email field cannot be empty"
                },
                address: {
                    required: "Address field cannot be empty"
                },
                townCity: {
                    required: "Town/City field cannot be empty"
                },
                state: {
                    required: "State field cannot be empty"
                },
                password: {
                    required: "Password field cannot be empty"
                },
                confirmPassword: {
                    required: "Password field cannot be empty",
                    equalTo: 'Your password isn\'t the same'
                }
            }
        })
    }
})

// validating login form
$(function () {
    var $loginForm = $("#loginForm");
    if ($loginForm.length) {
        $loginForm.validate({
            rules: {
                userId: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                userId: {
                    required: "Email/UserId field cannot be empty"
                },
                password: {
                    required: "Password field cannot be empty"
                }
            }
        })
    }
})

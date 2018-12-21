$(function () {
    /*$("#login").on("change", function () {
        document.getElementById("typedLogin").innerHTML = $("#login").val();
    });
    $("#password").on("change", function () {
        document.getElementById("typedPassword").innerHTML = $("#password").val();
    });
    document.getElementById("password").addEventListener("change", function () {
        document.getElementById("typedPassword").innerHTML = $("#password").val();
    });*/
    $("body").keypress(function (e) {
        //if ($("#login").on("change")) {
            document.getElementById("typedLogin").innerHTML = ($("#login").val());
        //} else if ($("#password").on("change") ) {
            document.getElementById("typedPassword").innerHTML = ($("#password").val());
    });

    });
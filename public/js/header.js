document.addEventListener("DOMContentLoaded", function () {
    let route = $(location).attr("pathname");
    if (route === "/download") {
        $("#bg").addClass("bg-jalur-soft");
        $("header").addClass("bg-jalur-soft/[.80]");
    } else if (route === "/features/casenotification") {
        $("#bg").addClass("bg-jalur-bold2");
        $("header").addClass("bg-jalur-bold2/[.80]");
    } else {
        $("#bg").addClass("bg-white");
        $("header").addClass("bg-white/[.80]");
    }
});

function showMobileMenu() {
    $("#mobile-menu").css("right") === "0px"
        ? $("#mobile-menu").css("right", "-100%")
        : $("#mobile-menu").css("right", "0");
}

function showFeatureMenu() {
    $("#feature-icon").toggleClass("rotate-180");
    $("#feature-menu").toggle();

    $("#feature-menu").is(":visible")
        ? $("header").css("background-color", "rgba(255, 255, 255, 1)")
        : $("header").css("background-color", "");
}

function showMobileFeatureMenu() {
    $("#feature-menu-mobile").css("max-height") === "0px"
        ? $("#feature-menu-mobile").css("max-height", "150px")
        : $("#feature-menu-mobile").css("max-height", "0px");

    $("#feature-menu-mobile").css("max-height") !== "0px"
        ? $("#feature-icon-mobile")
              .addClass("fa-chevron-down")
              .removeClass("fa-chevron-up")
        : $("#feature-icon-mobile")
              .addClass("fa-chevron-up")
              .removeClass("fa-chevron-down");
}

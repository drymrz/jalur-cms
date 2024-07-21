import "./bootstrap";
import jQuery from "jquery";
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();
AOS.init({
    offset: 200,
});
window.$ = window.jQuery = jQuery;

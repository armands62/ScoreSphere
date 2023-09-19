import "./bootstrap";
import "bootstrap/dist/js/bootstrap.bundle.min.js";

document.addEventListener("DOMContentLoaded", function () {
    // Get the toggler button
    const toggler = document.querySelector(".navbar-toggler");

    // Add an event listener for the click event
    toggler.addEventListener("click", function () {
        // Your custom code to run when the toggler is clicked
        console.log("Toggler clicked");
    });
});

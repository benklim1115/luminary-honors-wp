//test js file

// alert("Hello there? is this working?");
//can we register that we are pressing this?
const menu = document.querySelector("#main-nav");
console.log(menu);


//close button not the button I want yet
const closeButton = menu.querySelector("button");
closeButton.addEventListener("click", function () {
    console.log("Close button was clicked!")
});

//button for the nav menu
//ok this is the button i want
//test the data-toggle attribute
//button for the nav menu
const menuButton = document.querySelector(".menu-icon");
menuButton.addEventListener("click", function () {
    console.log("Hamburger button was clicked!")
});

const toggleFunction = menuButton.getAttribute("data-toggle");

//check if we can run the toggle function else console.error the reason why we can't
if (typeof window[toggleFunction] === "function") {
    menuButton.addEventListener("click", window[toggleFunction]);
} else {
    console.warn(`Function ${toggleFunction} not found or not a function.`);
}


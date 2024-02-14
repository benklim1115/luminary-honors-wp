//test js file

// alert("Hello there? is this working?");
//can we register that we are pressing this?
//ok heres out hamburger menu
const menu = document.querySelector("#main-nav");
console.log(menu);


//close button not the button I want yet
const closeButton = menu.querySelector("button");
closeButton.addEventListener("click", function () {
    console.log("Close button was clicked!")
});

//button for the nav menu
const menuButton = document.querySelector(".menu-icon");
menuButton.addEventListener("click", function () {
    console.log("Hamburger button was clicked!")
});


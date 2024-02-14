//test js file

// alert("Hello there? is this working?");
//can we register that we are pressing this?
//ok heres out hamburger menu
const menu = document.querySelector("#main-nav");
console.log(menu);

const closeButton = menu.querySelector("button");
console.log(closeButton);
closeButton.addEventListener("click", console.log("Hello there?"));
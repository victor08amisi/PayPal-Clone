//Creating function for the toggle button----------------------
const toggleButton = document.getElementsByClassName("toggle-button")[0]; 

//returns an array so we select the first item which is the toggle button

const navbarLinks = document.getElementsByClassName("navbar-links")[0];
toggleButton.addEventListener("click", ()=>{
    navbarLinks.classList.toggle("active"); //activate the active class
})


//End toggle button function-----------------------------------


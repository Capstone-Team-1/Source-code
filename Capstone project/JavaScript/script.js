
//validating ourt login form
function validate(){
var votersId = document.getElementById("vid");
var passWord = document.getElementById("pw");

if(votersId.value==""|| passWord==""){
    document.getElementById("template").innerHTML="Invalid login \"Please try Again\""
    alert("You haven't enetered the required documents");
    return false;
}
else{
    document.getElementById("template").innerHTML="Thank you please wait until we assess you details"
    return true;
}

}

///hamburger menu


// let x= document.querySelector(".sticky-mobile-nav");
// let y = document.querySelector(".container");
// // let menuStatus = false;
// x.addEventListener("click", function onMenuClick(){

//     y.classList.toggle('show-container'); //the toggle function adds and removes the class

// })





//validating ourt login form
function validate(){
var votersId = document.getElementById("vid"); //refers to the input voters id
var passWord = document.getElementById("pw"); //refers to the input voters password

if(votersId.value==""|| passWord==""){ //checking if the feilds are empty or not
    document.getElementById("template").innerHTML="Invalid login \"Please enter the username and password\""
  
    return false;
}
else{ //message if the condition is met
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




function validateRegister(){
let citizenShipId= document.getElementById('cid');
let firstName = document.getElementById('fname');
let lastName= document.getElementById('lname');
let phoneNum= document.getElementById('phonenum');
let dateofBirth= document.getElementById('Dateof');
let citizenEmail= document.getElementById('cEmail');
let citizenAddress= document.getElementById('caddress');
let citizenCity= document.getElementById('city');
let citizenPassword= document.getElementById('pw');
let displayMessage = document.getElementById('template');



if (citizenShipId.value == "" || firstName.value =="" || lastName.value =="" || phoneNum.value=="" || dateofBirth.value =="" || citizenEmail.value=="" || citizenAddress.value == "" || citizenCity.value =="" || citizenPassword.value==""){
displayMessage.innerHTML= "Please fill all the required details";
    alert("Please fill up all the sections to continue ");

return false;

}
else{
    return true;
}





}

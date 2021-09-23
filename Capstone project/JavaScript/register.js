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
let dob = new Date(dateofBirth.value);
 let month_diff = Date.now() - dob.getTime();  
      
    //convert the calculated difference in date format  
    let age_dt = new Date(month_diff);   
      
    //extract year from date      
    let year = age_dt.getUTCFullYear();  
      
    //now calculate the age of the user  
    let age = Math.abs(year - 1970); 

function validateRegister(){




if (citizenShipId.value == "" || firstName.value =="" || lastName.value =="" || phoneNum.value=="" || dateofBirth.value =="" || citizenEmail.value=="" || citizenAddress.value == "" || citizenCity.value =="" || citizenPassword.value==""){
displayMessage.innerHTML= "Please fill all the required details";
    

return false;

}
else if(dateofBirth.value<18)
{
    displayMessage.innerHTML= "You are not eligible to vote as you are under 18";
    return false;
}
else{
    return true;
}


}




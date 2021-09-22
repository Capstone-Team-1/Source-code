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

function validateRegister(){




if (citizenShipId.value == "" || firstName.value =="" || lastName.value =="" || phoneNum.value=="" || dateofBirth.value =="" || citizenEmail.value=="" || citizenAddress.value == "" || citizenCity.value =="" || citizenPassword.value==""){
displayMessage.innerHTML= "Please fill all the required details";
    

return false;

}
else{
    return true;
}



}

function validateDOB(){

    var dateString = dateofBirth.value;
       let regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
 
        //Check whether valid dd/MM/yyyy Date Format.
        if (regex.test(dateString)) {
            let parts = dateofBirth.split("/");
           let dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
            let dtCurrent = new Date();
            displayMessage.innerHTML = "Eligibility 18 years ONLY."
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
                //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                    //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
                        return false;
                    }
                }
            }
            displayMessage.innerHTML = "";
            return true;
        } else {
          displayMessage.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
            return false;
        }


}


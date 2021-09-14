let ajax = new XMLHttpRequest();
let method = "GET";
let url = "./votedata.php"
let asynchronous = true;

ajax.open(method, url, asynchronous);
//This is how we are sending request
ajax.send();
//This is rweceviing request from our data.php file
ajax.onreadystatechange = function (){
   if (this.readyState == 4 && this.status == 200) {
       //converting JSON back to array

     let data = JSON.parse (this.responseText);
       console.log(data); //for test

       //html value for table body i.e. tbody

    let html = "";
       // we have to loop the data through
       for(let a = 0; a<data.length; a++){
        let id = data[a].voteID;
          //  var firstName = data[a].voteDate;
          let candidateID = data[a].candidateID;
           

           //appending in HTML dom
if(candidateID == 1){
  candidateID = " Scott Morrission";
}

else if(candidateID == 2){
  candidateID = " Joyce Barnaby";
  
}
else{
  candidateID+=" Anthony Albanese";
}
           html+= "<tr> "
          html += "<td>" + id+ "</td>";
            // html += "<td>" + firstName + "</td>";
              html += "<td>" + candidateID+ "</td>";
                

          html += "</tr>";
       }
//replacing the table body
document.getElementById('dataSource').innerHTML = html;
   }
}
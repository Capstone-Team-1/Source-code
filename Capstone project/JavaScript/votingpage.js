
//this is the part for our voting page. Please change as necessary
// There has been some simplification on the code please have a look as necessary

 const btnOne = document.querySelector('.buttonOne'); //this selects the first button among the candidate i.e. Malcom
  const btnTwo = document.querySelector('.buttonTwo'); //this selects the second button mong the candiate i.e. Anothony
  const btnThree = document.querySelector('.buttonThree'); // this one selects scott 
  const b = document.querySelector('#popup'); //this is the pop up which appears when you click on any of the candidates
  const c = document.querySelector('.btnNo'); //this button is the no bbutton which is removingb the blur background if the user does not wants to vote
  const d = document.querySelector('.blur'); // this is use to select the background blur class and add and remove it

const candidate = document.querySelector('#candidate_ID'); //this will be the name of our candidate as the button click
const candidateID = document.querySelector('#candidateID');




//we will add event listener to every buttons.



btnOne.addEventListener('click', ()=>{
b.classList.add('modal-body-click'); //we are adding the class 
d.classList.add('bg-blur'); //adding the background blur class
candidate.innerHTML = "Mr. Malcomm Turnbull"; //appending the name as per the button selection
candidateID.innerHTML= 2; //made it more simpler to change the value upon click of the button and reduction of using loop to delete the values thats added on every click

})




btnTwo.addEventListener('click', ()=>{
b.classList.add('modal-body-click');
d.classList.add('bg-blur');



candidate.innerHTML = "Mr. Anthony Albanese";
candidateID.innerHTML= 3;


})


btnThree.addEventListener('click', ()=>{
b.classList.add('modal-body-click');
d.classList.add('bg-blur');


candidate.innerHTML = "Mr. Scott Morrison";
candidateID.innerHTML= 1;


})


//this is the one which is removing the background
c.addEventListener('click', ()=>{
  b.classList.remove('modal-body-click');
  d.classList.remove('bg-blur');


})





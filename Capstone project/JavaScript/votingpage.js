//this is the part for our voting page. Please change as necessary

 const btnOne = document.querySelector('.buttonOne'); //this selects the first button among the candidate i.e. Malcom
  const btnTwo = document.querySelector('.buttonTwo'); //this selects the second button mong the candiate i.e. Anothony
  const btnThree = document.querySelector('.buttonThree'); // this one selects scott 
  const b = document.querySelector('#popup'); //this is the pop up which appears when you click on any of the candidates
  const c = document.querySelector('.btnNo'); //this button is the no bbutton which is removingb the blur background if the user does not wants to vote
  const d = document.querySelector('.blur'); // this is use to select the background blur class and add and remove it
const selected_list = document.querySelector('#final-list'); //this will be the list that we add dynamically
const candidate = document.querySelector('#candidate_ID'); //this will be the name of our candidate as the button click





//we will add event listener to every buttons.




btnOne.addEventListener('click', ()=>{
b.classList.add('modal-body-click'); //we are adding the class 
d.classList.add('bg-blur'); //adding the background blur class
const newElement = document.createElement('option'); //creating a element to select the candidate
const newNode = document.createTextNode(2);  //this is the value that is passed to db
newElement.setAttribute('name', "vote"); //setting the attribute hence PHP can understand
candidate.innerHTML = "Mr. Malcomm Turnbull"; //appending the name as per the button selection

newElement.appendChild(newNode); //appening the text node that we created in our element
selected_list.appendChild(newElement); //and appending the new element into our select list that we have slected here using JS

})


btnTwo.addEventListener('click', ()=>{
b.classList.add('modal-body-click');
d.classList.add('bg-blur');
const newElement = document.createElement('option');
const newNode = document.createTextNode(3);
newElement.setAttribute('name', "vote");

candidate.innerHTML = "Mr. Anthony Albanese";
newElement.appendChild(newNode);
selected_list.appendChild(newElement);

})


btnThree.addEventListener('click', ()=>{
b.classList.add('modal-body-click');
d.classList.add('bg-blur');
const newElement = document.createElement('option');
const newNode = document.createTextNode(1);
newElement.setAttribute('name', "vote");
candidate.innerHTML = "Mr. Scott Morrison";
newElement.appendChild(newNode);
selected_list.appendChild(newElement);
})




//this is the one which is removing the background
c.addEventListener('click', ()=>{
  b.classList.remove('modal-body-click');
  d.classList.remove('bg-blur');
})

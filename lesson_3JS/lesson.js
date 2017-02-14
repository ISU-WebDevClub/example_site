'use strict';

var object = {
   myString: 'string',
   myNumber: 10,
   myBoolean: false,
   myNull: null,
   myUndefined: undefined
};
var array = ['string', 10, false, null, undefined];


var Student = function (firstName, lastName, gpa) {
  this.firstName = firstName;
  this.lastName = lastName;
  this.gpa = gpa;
};

var Gabe = new Student("Gabe", 'Butruille', -1.5);
console.log(Gabe);


Student.prototype.introduce = function() {
  console.log("Hello, I'm " + this.firstName + ". I have a " + (this.gpa).toFixed(2) +" GPA.") ;
};

Gabe.introduce();



window.changeTextBasic = function(){
  var mid = document.getElementById('middle');
  var blocks = mid.getElementsByTagName('div');
  for (var i = 0; i < blocks.length; i++) {
    blocks[i].classList.remove("side-stacked");
    if(i==2){
      blocks[i].innerHTML = "Here is more nonsense";
    }
    blocks[i].style.marginBottom = "50px";
  }
}


function changeTextAdvanced(){
  console.log("here");
  var mid = document.getElementById('middle');
  var blocks = mid.getElementsByTagName('div');
  var classToAdd = "";
  console.log(blocks[0].className);
  if(blocks[0].className !== "side-stacked"  ){
    for (var i = 0; i < blocks.length; i++) {
      blocks[i].classList.add("side-stacked");
    }
  }else{
    for (var i = 0; i < blocks.length; i++) {
      blocks[i].classList.remove("side-stacked");
      blocks[i].style.marginBottom = "50px";
    }
  }
}
document.getElementById("advChange").addEventListener("click", changeTextAdvanced );

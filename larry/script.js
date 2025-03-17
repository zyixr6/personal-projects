// create a entity class
class Entity {
  constructor(name, ID, img) {
    this.name = name;
    this.ID = ID;
    this.img = img;
  }
}

// create entity objects
const larry = new Entity("Larry", "larryID", "img/larry.jpg");

// spinning larry
let spinCounter = 0;

// summon and banish larry
$("#summon").hide();

banish.addEventListener("click", () => {
  $("#larry").fadeOut(100);
  $("#banish").hide();
  $("#summon").show();
  var larryArrive = new Audio("audio/larryArrive");
  larryArrive.play();
});

summon.addEventListener("click", () => {
  $("#larry").fadeIn(2000);
  $("#banish").show();
  $("#summon").hide();
  var larryLeave = new Audio("audio/larryLeave");
  larryLeave.play();
});

// create a function that says if larry is spun more than 10 times in 5 seconds, then create text under him that says im getting dizzy

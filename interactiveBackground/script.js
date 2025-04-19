let startX = 0,
  startY = 0,
  newX = 0,
  newY = 0;

//   get the card element by id
const card = document.getElementById("card");

// run the drag function whenever the mouse button is held down
card.addEventListener("mousedown", mouseDown);

function mouseDown(a) {
  startX = a.clientX;
  startY = a.clientY;

  document.addEventListener("mousemove", mouseMove);
  document.addEventListener("mouseup", mouseUp);
}

function mouseMove(a) {
  newX = startX - a.clientX;
  newY = startY - a.clientY;

  startX = a.clientX;
  startY = a.clientY;

  card.style.top = startY + "px";
  card.style.top = startX + "px";
}

function mouseUp(a) {}

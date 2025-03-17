let rave;
const body = document.getElementsByTagName(`body`)[0];
const raveBtn = document.getElementById(`raveBtn`);
const title = document.getElementsByTagName(`h3`);
function colorChanger(color) {
  body.style.backgroundColor = color;
  clearInterval(rave);
  raveBtn.disabled = false;
}

let intervalId;

function raveMode() {
  rave = setInterval(function () {
    const randomColor = `rgb(${Math.floor(Math.random() * 255)}, ${Math.floor(
      Math.random() * 255
    )}, ${Math.floor(Math.random() * 255)})`;
    body.style.backgroundColor = randomColor;
  }, 500);
  raveBtn.disabled = true;
}

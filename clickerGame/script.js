const counter = document.getElementById(`counter`);
const regularBtn = document.getElementsByClassName(`regular-btn`)[0];
const goldenBtn = document.getElementsByClassName(`golden-btn`)[0];
let count = 0;
let startTime = null;

counter.innerHTML = count;
console.log(count);

function wait(ms) {
  var start = new Date().getTime();
  var end = start;
  while (end < start + ms) {
    end = new Date().getTime();
  }
}

function getElapsedTime() {
  const currentTime = new Date();
  const elapsedMs = currentTime - startTime;

  const seconds = Math.floor((elapsedMs / 1000) % 60);
  const minutes = Math.floor((elapsedMs / (1000 * 60)) % 60);
  const hours = Math.floor((elapsedMs / (1000 * 60 * 60)) % 24);

  return `${hours}h ${minutes}m ${seconds}s`;
}

function increaseCounter() {
  if (startTime === null) {
    startTime = new Date();
  }

  count++;
  console.log(count);
  counter.innerHTML = count;

  if (count == 10) {
    setTimeout(() => {
      alert(`10 clicks! Good job.`);
    }, 1);
  }

  if (count == 100) {
    setTimeout(() => {
      alert(`Congrats! You made it to 100 clicks. Maybe you can go higher...`);
    }, 1);
  }

  if (count == 200) {
    setTimeout(() => {
      alert(`Wow! 200 clicks. Feel achieved yet?`);
    }, 1);
  }

  if (count == 500) {
    setTimeout(() => {
      alert(`Ok... 500 clicks. Maybe you should do something else?`);
    }, 1);
  }

  if (count == 999) {
    regularBtn.classList.add("hide");
    goldenBtn.classList.remove("hide");
  }

  if (count == 1000) {
    setTimeout(() => {
      alert(
        `Congrats. You won. Feel good? You just spent ${getElapsedTime()} on this shit. Go touch grass.`
      );
      goldenBtn.disabled = true;
    }, 1);
  }
}

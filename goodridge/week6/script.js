class Point {
  constructor(x = 4.5, y = 2.7) {
    this.x = x;
    this.y = y;
  }

  setX(x) {
    this.x = x;
  }

  setY(y) {
    this.y = y;
  }

  getX() {
    return this.x;
  }

  getY() {
    return this.y;
  }

  getLocation() {
    if (this.x > 0 && this.y > 0) {
      return "in Quadrant I";
    } else if (this.x < 0 && this.y > 0) {
      return "in Quadrant II";
    } else if (this.x < 0 && this.y < 0) {
      return "in Quadrant III";
    } else if (this.x > 0 && this.y < 0) {
      return "in Quadrant IV";
    } else {
      return "on the Origin";
    }
  }
}

const fred = new Point();

let x = parseFloat(prompt("Enter an x-coordinate for Ginger: "));
let y = parseFloat(prompt("Enter an y-coordinate for Ginger: "));

const ginger = new Point(x, y);

alert(
  `Fred is located ${fred.getLocation()}.\nGinger is located ${ginger.getLocation()}.`
);

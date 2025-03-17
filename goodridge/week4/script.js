class Circle {
  constructor(radius = 0) {
    this.radius = radius;
  }

  setRadius(r) {
    this.radius = r;
  }

  getRadius() {
    return this.radius;
  }

  getDiameter() {
    return 2 * this.radius;
  }

  getArea() {
    return Math.PI * Math.pow(this.radius, 2);
  }

  getCircumference() {
    return 2 * Math.PI * this.radius;
  }
}

const circle = new Circle();
let radius = parseFloat(prompt("Please enter a radius for the circle: "));

circle.setRadius(radius);

alert(
  `Here are the following values for your circle:\n
   Radius: ${circle.getRadius()} \n
   Diameter: ${circle.getDiameter()} \n
   Area: ${circle.getArea()} \n
   Circumference: ${circle.getCircumference()}`
);

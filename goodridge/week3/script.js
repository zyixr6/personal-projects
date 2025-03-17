let a = parseFloat(prompt("Enter the first number: "));
let b = parseFloat(prompt("Enter the second number: "));
let c = parseFloat(prompt("Enter the third number: "));

if (a > 0 && b > 0 && c > 0 && a + b > c && a + c > b && b + c > a) {
  alert(`The lengths ${a}, ${b}, ${c} do form a triangle`);
} else {
  alert(`The lengths ${a}, ${b}, ${c} do not form a triangle`);
}

const input = document.getElementById("input");

function reverse(str) {
  return str.split("").reverse().join("");
}

function check() {
  const value = input.value;
  if (value === reverse(value)) {
    alert("This is a palindrome!");
  } else {
    alert("This is not a palindrome.");
  }
}

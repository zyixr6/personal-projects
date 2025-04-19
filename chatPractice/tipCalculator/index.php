<!-- 
 
Project 1: Tip Calculator
Goal: Build a simple app that calculates how much tip to leave based on a total bill and a selected tip percentage.

Requirements:
Input Fields:

Total bill amount

Tip percentage (dropdown: 10%, 15%, 20%, custom)

Number of people (optional)

Output:

Tip amount

Total amount with tip

(If number of people is entered) Amount per person

Bonus (Optional):

Add some basic styling (use plain CSS or inline styles)

Handle invalid inputs gracefully (e.g., letters instead of numbers)

Tech:
HTML + CSS + JavaScript (vanilla, no libraries)

-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tip Calculator</title>
  <style>
    html {
      height: 100%;
      width: 100%;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    body {
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin-top: 20vh;
    }

    .pad {
      padding: 10px 0;
    }

    label {
      padding-bottom: 5px;
    }

    .result {
      display: none;
    }
  </style>
  <script>
    function calculateTip() {
      let bill = document.getElementById("bill").value;
      let tipPercent = document.getElementById("tipPercent").value;
      let people = document.getElementById("people").value;

      let tip = ((bill * (tipPercent / 100)) / people).toFixed(2);

      if (bill <= 0) {
        document.getElementById("printResult").innerHTML = "Bill must be a positive number.";
        document.getElementById("result").style = "display: flex;"
      }

      else if (tipPercent == "") {
        document.getElementById("printResult").innerHTML = "Must select a Tip Percentage.";
        document.getElementById("result").style = "display: flex;"
      }

      else if (people <= 0) {
        document.getElementById("printResult").innerHTML = "Amount of people must be a positive number.";
        document.getElementById("result").style = "display: flex;"
      }

      else {
        document.getElementById("printResult").innerHTML = `Tip Per Person: $${tip}`;
        document.getElementById("result").style = "display: flex;"
      }
    }
  </script>
</head>

<body>
  <h1>Tip Calculator</h1>
  <label for="bill">Enter Bill Amount: </label>
  <input type="number" id="bill" />
  <div class="pad"></div>
  <label for="tipPercent">Choose Tip Percentage: </label>
  <select name="tip" id="tipPercent">
    <option value="">Select a Value</option>
    <option value="10">10%</option>
    <option value="15">15%</option>
    <option value="20">20%</option>
  </select>
  <div class="pad"></div>
  <label for="people">Enter How Many To Split The Tip Between: </label>
  <input type="number" id="people" />
  <div class="pad"></div>
  <button onclick="calculateTip()">Submit</button>

  <div class="result" id="result">
    <h2><span id="printResult"></span></h2>
  </div>
</body>

</html>

<!-- 

Nice work! You’ve clearly understood how to:

Use HTML inputs and a dropdown.

Handle user interaction with JavaScript.

Dynamically update the DOM.

Do basic validation and feedback.

Let me break it down:

✅ What You Did Well:
Good layout: Clear labels, inputs, and feedback.

Basic validation: You’re checking for invalid entries (like 0 or empty).

Function separation: Logic lives in its own function — good practice.

CSS Flexbox: Nice and simple layout using flex.

Readable code: Easy to follow and well structured.

🛠 Suggestions for Improvement:
Data types:

value from inputs is a string — always convert before math.

Example: parseFloat(bill) instead of just bill.

✅ You handled it implicitly but it's safer to explicitly convert to avoid weird bugs.

Input edge case:

If someone enters a decimal number of people (e.g., 2.5), that shouldn't be valid. Add a check for whole numbers.

if (!Number.isInteger(Number(people))) {
  // Show an error
}
  
Total tip & bill:

You're only calculating tip per person.

Suggestion: Also show total tip and total bill with tip.

CSS improvement (optional):

Consider grouping related inputs inside a form or container for better structure and future scalability.

Reset UI:

Once a new calculation is made, it should clear old error messages or reset input styles if you highlight them.

🔥 Your Grade: A-
You're off to a great start. This is a functional and clean first project.

-->
function random(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function userMove() {
  // prompt user input for pile choice
  let userPile = parseInt(
    prompt(
      `Which pile do you pick? Type 1 for the first, 2 for the second, and 3 for the third.`
    )
  );

  // check validity of choice
  while (true) {
    if (isNaN(userPile) || userPile <= 0 || userPile >= 4) {
      alert(
        `Sorry, ${userPile} is not a valid input. Please enter 1, 2, or 3.`
      );
      userPile = prompt(
        `Which pile do you pick? Type 1 for the first, 2 for the second, and 3 for the third.`
      );
    } else {
      break;
    }
  }

  // promput user input for pebble amount
  let userAmount = parseInt(
    prompt(
      `How many pebbles would you like to remove? You may remove up to 3 from the pile.`
    )
  );

  // check validity of choice
  while (true) {
    if (isNaN(userAmount) || userAmount <= 0 || userAmount >= 4) {
      alert(
        `Sorry, ${userAmount} is not a valid input. Please enter 1, 2, or 3.`
      );
      userAmount = prompt(
        `How many pebbles would you like to remove? You may remove up to 3 from the pile.`
      );
    } else {
      break;
    }
  }

  return (userChoice = [userPile, userAmount]);
}

function computerMove() {
  // collect computer input for pile choice
  let computerPile = random(1, 3);

  // collect computer input for pebble amount
  let computerAmount = random(1, 3);

  return (computerChoice = [computerPile, computerAmount]);
}

let pile1 = random(3, 10);
let pile2 = random(3, 10);
let pile3 = random(3, 10);

alert(`Welcome to the Pebble Game!
      \nHere are the rules:
      \n1. The players take turns in removing pebbles from the piles
      \n2. A player can remove up to three pebbles on each turn, but all the pebbles the player removes on any one turn must be from just one of the piles.
      \n3. The game is over when the last pebble is removed.
      \n4. The winner is the player who removes the last pebble.`);

alert(
  `To start, we have ${pile1} pebble(s) in Pile 1, ${pile2} pebble(s) in Pile 2, and ${pile3} pebble(s) in Pile 3.`
);

while (true) {
  let userChoice = userMove();
  alert(userChoice);
  switch (userChoice[0]) {
    case 1:
      pile1 = pile1 - userChoice[1];
      if (pile1 < 0) {
        pile1 = 0;
      }
      break;
    case 2:
      pile2 = pile2 - userChoice[1];
      if (pile2 < 0) {
        pile2 = 0;
      }
      break;
    case 3:
      pile3 = pile3 - userChoice[1];
      if (pile3 < 0) {
        pile3 = 0;
      }
      break;
  }
  alert(
    `The user has removed ${userChoice[1]} pebbles from pile ${userChoice[0]}.`
  );

  if (pile1 <= 0 && pile2 <= 0 && pile3 <= 0) {
    alert(
      `There are now ${pile1} pebble(s) in Pile 1, ${pile2} pebble(s) in Pile 2, and ${pile3} pebble(s) in Pile 3.\n\nTHE USER HAS WON! CONGRATS!`
    );
    break;
  } else {
    alert(
      `There are now ${pile1} pebble(s) in Pile 1, ${pile2} pebble(s) in Pile 2, and ${pile3} pebble(s) in Pile 3.`
    );
  }

  let computerChoice = computerMove();
  switch (computerChoice[0]) {
    case 1:
      pile1 = pile1 - computerChoice[1];
      if (pile1 < 0) {
        pile1 = 0;
      }
      break;
    case 2:
      pile2 = pile2 - computerChoice[1];
      if (pile2 < 0) {
        pile2 = 0;
      }
      break;
    case 3:
      pile3 = pile3 - computerChoice[1];
      if (pile3 < 0) {
        pile3 = 0;
      }
      break;
  }
  alert(
    `The computer has removed ${computerChoice[1]} pebbles from pile ${computerChoice[0]}.`
  );

  if (pile1 <= 0 && pile2 <= 0 && pile3 <= 0) {
    alert(
      `There are now ${pile1} pebble(s) in Pile 1, ${pile2} pebble(s) in Pile 2, and ${pile3} pebble(s) in Pile 3.\n\nTHE COMPUTER HAS WON! CONGRATS!`
    );
    break;
  } else {
    alert(
      `There are now ${pile1} pebble(s) in Pile 1, ${pile2} pebble(s) in Pile 2, and ${pile3} pebble(s) in Pile 3.`
    );
  }
}

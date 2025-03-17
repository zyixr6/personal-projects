let solutionString = "";

for (x = 1; x < 50; x++) {
  for (y = 1; y < 50; y++) {
    for (z = 1; z < 50; z++) {
      if (Math.pow(x, 2) + Math.pow(y, 2) === Math.pow(z, 2)) {
        if (x <= y) {
          solutionString = solutionString + `${x}, ${y}, ${z}\n`;
        }
      }
    }
  }
}

alert(solutionString);

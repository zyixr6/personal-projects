<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styles.css">
  <title>Learner - Home</title>
</head>

<body style="text-align: center;">
  <header>
    <h1><strong>CIS 743:</strong> Introduction to Advanced Clownism</h1>
  </header>

  <main>
    <p>this is where i like to clown around :)</p>
    <div>
      <button id="banish">Banish "larry"</button>
      <button id="summon">Summon "larry"</button>
      <button id="friendsAppear">Bring Friends</button>
    </div>

    <!-- <div><button class="btnRotate" value="360" onClick="rotateImage(this.value);">Spin "larry"</button></div> -->
    <img id="larry" src="img\larry.jpg" alt="so awesome...">
    <div>
      <span>Spin Counter: </span>
      <span id="spinCounter"></span>
    </div>
    <div>
      <button onclick="print()" class="printButton">Print</button>
    </div>
  </main>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="script.js"></script>

</html>
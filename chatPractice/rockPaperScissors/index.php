<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Tagesschrift&display=swap"
        rel="stylesheet">
    <title>Rock Paper Scissors Game</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Tagesschrift", sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: darkgrey;
        }

        .game-container {
            width: 90vw;
            height: 80vh;
            background-color: lightgray;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 2vh 2vw;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .game-title {
            font-size: 5vw;
            text-align: center;
            margin-bottom: 1vh;
        }

        .game-buttons {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-grow: 1;
            gap: 2vw;
            width: 100%;
            padding: 2vh 0;
        }

        @media (max-width: 850px) {
            .game-buttons {
                flex-direction: column;
            }

            .rockBtn,
            .paperBtn,
            .scissorsBtn {
                max-height: 15vh !important;
            }

            .game-message p {
                font-size: 2.5vh !important;
            }

            .game-score {
                font-size: 2vh !important;
            }

            .game-message button {
                margin: 0 5px !important;
            }
        }

        .rockBtn,
        .paperBtn,
        .scissorsBtn {
            flex: 1 1 0;
            max-width: 300px;
            aspect-ratio: 1 / 1;
            /* Keeps buttons square */
            padding: 10px;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.2s ease, filter 0.2s ease;
            cursor: pointer;
        }

        .rockBtn img,
        .paperBtn img,
        .scissorsBtn img {
            width: 100%;
            height: auto;
        }

        .rockBtn:hover,
        .paperBtn:hover,
        .scissorsBtn:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
            font-family: "Noto Serif", serif;
        }

        .game-message {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-bottom: 2vh;
        }

        .game-message button {
            font-family: "Lora", serif;
            font-size: 2vw;
            font-weight: 600;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            background-color: #444;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.2s ease, transform 0.1s ease, box-shadow 0.2s ease;
            cursor: pointer;
            margin: 0 15px;
        }

        .game-message button:hover {
            background-color: #666;
            transform: scale(1.03);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .game-message button:active {
            background-color: #222;
            transform: scale(0.98);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .game-message p {
            font-size: 1.8vw;
        }

        .game-score {
            text-align: center;
            font-size: 1.5vw;
            padding: 2vh;
            min-height: 3vh;
        }


        /* Mobile tweaks */
        @media (max-width: 600px) {
            .game-title {
                font-size: 6vw;
            }

            .game-message button {
                font-size: 4vw;
            }

            .game-score {
                font-size: 3.5vw;
            }

            .game-buttons {
                gap: 6vw;
            }
        }

        .disabled {
            pointer-events: none;
            opacity: 0.5;
            filter: grayscale(80%);
        }
    </style>
    <script>
        let userWins = 0;
        let computerWins = 0;
        let ties = 0;

        const moveNames = new Map();

        moveNames.set(1, "Rock");
        moveNames.set(2, "Paper");
        moveNames.set(3, "Scissors");

        function toggleButtons(enable) {
            const buttons = document.querySelectorAll(".rockBtn, .paperBtn, .scissorsBtn");

            buttons.forEach(button => {
                if (enable) {
                    button.classList.remove("disabled");
                } else {
                    button.classList.add("disabled");
                }
            });
        }


        function gameIntro() {
            const gameScore = document.querySelector(".game-score");
            const gameMessage = document.querySelector(".game-message");

            gameScore.innerHTML = `You: ${userWins} | Computer: ${computerWins} | Ties: ${ties}`;

            toggleButtons(false);
            gameMessage.innerHTML = "<p>Welcome to the world renown Rock, Paper, Scissors game.</p>";

            setTimeout(() => {
                gameMessage.innerHTML = "<p>You will be playing against a computer AI, and your score will be kept below.</p>";
            }, 5000);

            setTimeout(() => {
                gameMessage.innerHTML = "<p>If you do not know the rules to this game, I am afraid there is no hope for you...</p>";
            }, 10000);

            setTimeout(() => {
                gameMessage.innerHTML = "<p>BEGIN!</p>";
            }, 15000);

            setTimeout(() => {
                playGame();
            }, 17000);
        }

        function playGame() {
            const gameMessage = document.querySelector(".game-message");
            const gameScore = document.querySelector(".game-score");

            gameMessage.innerHTML = "<p>Pick one of the following above as your move.</p>";
            toggleButtons(true);

            const rockBtn = document.querySelector(".rockBtn");
            const paperBtn = document.querySelector(".paperBtn");
            const scissorsBtn = document.querySelector(".scissorsBtn");

            function handleUserChoice(userChoice) {
                toggleButtons(false);
                const computerChoice = Math.floor(Math.random() * 3) + 1;

                let resultText = "";

                if (userChoice === computerChoice) {
                    resultText = `You picked ${moveNames.get(userChoice)}. The computer picked ${moveNames.get(computerChoice)}. It was a tie!`;
                    ties++;
                } else if (
                    (userChoice === 1 && computerChoice === 3) ||
                    (userChoice === 2 && computerChoice === 1) ||
                    (userChoice === 3 && computerChoice === 2)
                ) {
                    resultText = `You picked ${moveNames.get(userChoice)}. The computer picked ${moveNames.get(computerChoice)}. The user won!`;
                    userWins++;
                } else {
                    resultText = `You picked ${moveNames.get(userChoice)}. The computer picked ${moveNames.get(computerChoice)}. The computer won!`;
                    computerWins++;
                }

                gameMessage.innerHTML = `<p>${resultText}</p>`;
                gameScore.innerHTML = `You: ${userWins} | Computer: ${computerWins} | Ties: ${ties}`;
                setTimeout(() => {
                    gameMessage.innerHTML = `<button onclick="playGame()">Play Again?</button><button onclick="resetScore()">Start Fresh?</button><button onclick="exitGame()">Leave Game</button>`;
                }, 5000);
            }

            rockBtn.onclick = () => handleUserChoice(1);
            paperBtn.onclick = () => handleUserChoice(2);
            scissorsBtn.onclick = () => handleUserChoice(3);
        }

        function resetScore() {
            const gameMessage = document.querySelector(".game-message");
            const gameScore = document.querySelector(".game-score");

            userWins = 0;
            computerWins = 0;
            ties = 0;

            gameMessage.innerHTML = `<p>Score reset. Let's see how this run goes...</p>`;
            gameScore.innerHTML = `You: ${userWins} | Computer: ${computerWins} | Ties: ${ties}`;

            setTimeout(() => {
                gameMessage.innerHTML = `<button onclick="playGame()">Play Again?</button><button onclick="resetScore()">Start Fresh?</button><button onclick="exitGame()">Leave Game</button>`;
            }, 5000);
        }

        function exitGame() {
            const gameMessage = document.querySelector(".game-message");
            const gameScore = document.querySelector(".game-score");

            userWins = 0;
            computerWins = 0;
            ties = 0;

            gameMessage.innerHTML = `<button onclick="gameIntro()">Start</button>`;
            gameScore.innerHTML = ``;
        }

    </script>
</head>

<body>
    <div class="game-container">
        <h1 class="game-title">Rock, Paper, Scissors Game</h1>
        <div class="game-buttons">
            <a href="#" class="rockBtn"><img src="rock.png"></a>
            <a href="#" class="paperBtn"><img src="paper.png"></a>
            <a href="#" class="scissorsBtn"><img src="scissors.png"></a>
        </div>
        <div class="game-message">
            <button onclick="gameIntro()">Start</button>
        </div>
        <div class="game-score"></div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        html {
            height: 100%;
            padding: 0;
            margin: 0;
        }

        body {
            height: 100%;
            background-color: midnightblue;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .task-container {
            min-height: 500px;
            width: 500px;
            padding: 10px;
            background-color: palegoldenrod;
            text-align: center;
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            text-decoration: underline;
            padding-bottom: 20px;
        }

        .task {
            display: flex;
            flex-direction: row;
            align-items: center;
            font-size: 1.8rem;
            font-style: italic;
            margin: 10px 20px;
            padding: 5px;
            text-align: left;
            background-color: rgb(240, 229, 107);
            border: solid 1px black;
        }

        .task :last-child {
            margin-left: auto !important;
        }
    </style>
    <script>
        function toggleCheck() {
            let checkedBox = document.getElementsById("checked-box");
            let uncheckedBox = document.getElementsById("unchecked-box");

            if (checkedBox.style == "display = none;") {
                uncheckedBox.style = "display = none;";
                checkedBox.style = "display = show;";
            } else {
                checkedBox.style = "display = none;";
                uncheckedBox.style = "display = show;";
            }

        }
    </script>
</head>

<body>

    <div class="task-container" id="task-container">
        <div class="title">To-Do List</div>
        <div class="task">
            <div class="task-content">Wash the dishes</div>
            <div class="task-completed"><a href="#" onclick="toggleCheck()"><img id="checked-box"
                        src="/checkbox_unchecked.svg" alt=""><img id="unchecked-box" src="/checkbox_checked.svg" alt=""
                        style="display: none;"></>
            </div>

        </div>
    </div>
</body>

</html>
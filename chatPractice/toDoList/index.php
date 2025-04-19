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
            display: block;
            font-size: 1.8rem;
            font-style: italic;
            margin: 10px 20px;
            padding: 5px;
            text-align: left;
            background-color: rgb(240, 229, 107);
            border: solid 1px black;
        }
    </style>
</head>

<body>

    <div class="task-container" id="task-container">
        <div class="title">To-Do List</div>
        <div class="task">
            <div class="taskContent">Wash the dishes<span class="taskCompleted"><input type="checkbox"></span></div>

        </div>
    </div>
</body>

</html>
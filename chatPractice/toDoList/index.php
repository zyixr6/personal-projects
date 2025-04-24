<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: midnightblue;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .task-container {
            height: 500px;
            width: 500px;
            padding: 10px;
            background-color: palegoldenrod;
            text-align: center;
            overflow-y: auto;
        }

        .task-container::-webkit-scrollbar {
            width: 8px;
        }

        .task-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }

        .task-container::-webkit-scrollbar-thumb:hover {
            background-color: #555;
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
            padding: 5px 10px;
            background-color: rgb(240, 229, 107);
            border: solid 1px black;
        }

        .task-content {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .task-content input {
            background-color: transparent;
            width: 100%;
            border: none;
            font-size: 1.8rem;
            font-style: italic;
            box-sizing: border-box;
        }

        .task-functions {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .unchecked-box,
        .close-btn {
            display: block;
        }

        .checked-box {
            display: none;
        }

        .completed {
            text-decoration: line-through;
            opacity: 0.6;
        }
    </style>
    <script>
        function saveTasksToLocalStorage() {
            const tasks = [];
            document.querySelectorAll('.task-container .task').forEach(task => {
                const input = task.querySelector('input');
                const text = input ? input.value : task.querySelector('.task-content').textContent;
                const isInput = !!input;
                const completed = task.querySelector('.checked-box').style.display === "block";
                if (text.trim()) {
                    tasks.push({ text: text.trim(), completed, isInput });
                }
            });
            localStorage.setItem('todoList', JSON.stringify(tasks));
        }

        function loadTasksFromLocalStorage() {
            const saved = JSON.parse(localStorage.getItem('todoList')) || [];
            const container = document.getElementById("task-container");
            container.innerHTML = '<div class="title">To-Do List</div>';
            saved.forEach(({ text, completed, isInput }) => {
                const task = document.createElement('div');
                task.className = 'task';

                const content = document.createElement('div');
                content.className = 'task-content';
                content.innerHTML = isInput ? `<input type="text" placeholder="Enter a task..." value="${text}">` : text;
                if (completed && !isInput) content.classList.add("completed");

                const checkedStyle = completed ? 'block' : 'none';
                const uncheckedStyle = completed ? 'none' : 'block';

                const functions = document.createElement('div');
                functions.className = 'task-functions';
                functions.innerHTML = `
                    <div class="task-completed">
                        <a href="#" onclick="toggleCheck(event)">
                            <img class="unchecked-box" src="/checkbox_unchecked.svg" style="display: ${uncheckedStyle}" alt="">
                            <img class="checked-box" src="/checkbox_checked.svg" style="display: ${checkedStyle}" alt="">
                        </a>
                    </div>
                    <div class="task-exit">
                        <a href="#" onclick="removeTask(event)">
                            <img src="/close.svg" alt="" class="close-btn">
                        </a>
                    </div>`;

                task.appendChild(content);
                task.appendChild(functions);
                container.appendChild(task);

                const input = task.querySelector('input');
                if (input) input.addEventListener("keydown", newTask);
            });

            if (!saved.some(t => t.isInput)) addBlankInput();
        }

        function addBlankInput() {
            const task = document.createElement('div');
            task.className = 'task';
            task.innerHTML = `
                <div class="task-content">
                    <input type="text" placeholder="Enter a task...">
                </div>
                <div class="task-functions">
                    <div class="task-completed">
                        <a href="#" onclick="toggleCheck(event)">
                            <img class="unchecked-box" src="/checkbox_unchecked.svg" alt="">
                            <img class="checked-box" src="/checkbox_checked.svg" alt="">
                        </a>
                    </div>
                    <div class="task-exit">
                        <a href="#" onclick="removeTask(event)">
                            <img src="/close.svg" alt="" class="close-btn">
                        </a>
                    </div>
                </div>`;
            task.querySelector('input').addEventListener("keydown", newTask);
            document.getElementById("task-container").appendChild(task);
        }

        function toggleCheck(event) {
            event.preventDefault();
            const task = event.target.closest('.task');
            const checked = task.querySelector('.checked-box');
            const unchecked = task.querySelector('.unchecked-box');
            const content = task.querySelector('.task-content');
            if (!task.querySelector('input')) {
                const isCompleted = checked.style.display === 'block';
                checked.style.display = isCompleted ? 'none' : 'block';
                unchecked.style.display = isCompleted ? 'block' : 'none';
                content.classList.toggle('completed');
                saveTasksToLocalStorage();
            }
        }

        function removeTask(event) {
            event.preventDefault();
            const task = event.target.closest('.task');
            if (!task.querySelector('input')) {
                task.remove();
                saveTasksToLocalStorage();
            }
        }

        function newTask(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                const input = event.target;
                const task = input.closest('.task');
                const text = input.value.trim();
                if (!text) return;

                task.querySelector('.task-content').textContent = text;
                saveTasksToLocalStorage();
                addBlankInput();
            }
        }

        window.onload = loadTasksFromLocalStorage;
    </script>
</head>

<body>
    <div class="task-container" id="task-container">
        <!-- Tasks will be loaded here -->
    </div>
</body>

</html>
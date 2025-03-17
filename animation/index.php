<!DOCTYPE html>
<html>

<body>
    <style>
        #myContainer {
            width: 400px;
            height: 400px;
            position: relative;
            background: yellow;
        }

        #myAnimation {
            width: 100px;
            height: 100px;
            position: absolute;
        }

        #myAnimation img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>

    <h1>Larry box</h1>

    <div id="myContainer">
        <div id="myAnimation"><img src="larry.jpg" alt="larry"></div>
    </div>

</body>

<script>
    let id = setInterval(frame, 5);

    function frame() {
        if () {
            clearInterval(id);
        } else {

        }
    }
</script>

</html>
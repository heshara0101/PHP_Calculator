<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="calculator">
        <input type="text" id="display" class="calculator-display" readonly placeholder="0">

       <div class="calculator-keys">
            <button type="button" class="btn btn-clear" onclick="clearDisplay()">C</button>
            <button type="button" class="btn btn-operator" onclick="appendCharacter('/')">/</button>
            <button type="button" class="btn btn-operator" onclick="appendCharacter('*')">×</button>
            <button type="button" class="btn btn-operator" onclick="appendCharacter('-')">-</button>

            <button type="button" class="btn" onclick="appendCharacter('7')">7</button>
            <button type="button" class="btn" onclick="appendCharacter('8')">8</button>
            <button type="button" class="btn" onclick="appendCharacter('9')">9</button>
            <button type="button" class="btn btn-operator" onclick="appendCharacter('+')">+</button>

            <button type="button" class="btn" onclick="appendCharacter('4')">4</button>
            <button type="button" class="btn" onclick="appendCharacter('5')">5</button>
            <button type="button" class="btn" onclick="appendCharacter('6')">6</button>
            <button type="button" class="btn btn-equal" onclick="calculate()">=</button>

            <button type="button" class="btn" onclick="appendCharacter('1')">1</button>
            <button type="button" class="btn" onclick="appendCharacter('2')">2</button>
            <button type="button" class="btn" onclick="appendCharacter('3')">3</button>
            <button type="button" class="btn btn-zero" onclick="appendCharacter('0')">0</button>
            <button type="button" class="btn" onclick="appendCharacter('.')">.</button>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
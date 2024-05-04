<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Joc de ghicit numere</title>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .container {
    text-align: center;
    margin-top: 50px;
  }
</style>
</head>
<body>

<div class="container min-h-screen">
  <h2>Joc de ghicit numere</h2>
  <p>Ghicește un număr între 1 și 100:</p>
  <input type="number" id="guessInput" min="1" max="100">
  <button onclick="checkGuess()">Ghicește!</button>
  <p id="message"></p>
</div>

<script>
  // Generăm un număr aleatoriu între 1 și 100
  var targetNumber = Math.floor(Math.random() * 100) + 1;
  var attempts = 0;

  function checkGuess() {
    var guess = parseInt(document.getElementById('guessInput').value);
    attempts++;

    if (isNaN(guess) || guess < 1 || guess > 100) {
      showMessage('Introdu un număr valid între 1 și 100.');
    } else if (guess < targetNumber) {
      showMessage('Numărul este mai mare!');
    } else if (guess > targetNumber) {
      showMessage('Numărul este mai mic!');
    } else {
      showMessage(`Felicitări! Ai ghicit numărul corect (${targetNumber}) în ${attempts} încercări.`);
      disableInput();
    }
  }

  function showMessage(message) {
    document.getElementById('message').innerText = message;
  }

  function disableInput() {
    document.getElementById('guessInput').disabled = true;
    document.querySelector('button').disabled = true;
  }
</script>

</body>
</html>

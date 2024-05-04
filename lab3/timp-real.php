<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imagini defilante și data/timp curent</title>
  <link rel="stylesheet" href="/styles/timp-real.css">
</head>

<body>

  <div class="container">
    <div id="clock"></div>
  </div>

  <script>
    var date = new Date();
    document.getElementById('clock').innerText = date.toLocaleString();
    setInterval(function () {
      var date = new Date();
      document.getElementById('clock').innerText = date.toLocaleString();
    }, 1000);
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificare și validare formular cu Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <h2>Formular de contact</h2>
    <form id="contactForm">
      <div class="form-group">
        <label for="name">Nume:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="message">Mesaj:</label>
        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Trimite</button>
    </form>
  </div>

  <!-- Bootstrap JS, jQuery, și Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Adăugăm evenimentul de submit la formular
    document.getElementById('contactForm').addEventListener('submit', function (event) {
      // Obținem valorile introduse de utilizator
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var message = document.getElementById('message').value;

      if (name.trim() === '') {
        event.preventDefault();
        alert('Te rog introdu numele tău.');
        return;
      }
      if (email.indexOf('@') === -1) {
        event.preventDefault();
        alert('Te rog introdu o adresă de email validă.');
        return;
      }

      if (message.trim() === '') {
        event.preventDefault();
        alert('Te rog introdu un mesaj.');
        return;
      }
    });
  </script>

</body>

</html>
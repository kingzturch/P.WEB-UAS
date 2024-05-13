<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form id="login-form">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>

  <script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
      event.preventDefault(); // prevent form submission

      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Contoh sederhana: Cek apakah username dan password sesuai
      if (username === 'admin' && password === 'admin') {
        window.location.href = 'welcome.html?username=' + encodeURIComponent(username);
      } else {
        alert('Username atau password salah!');
      }
    });
  </script>
</body>
</html>

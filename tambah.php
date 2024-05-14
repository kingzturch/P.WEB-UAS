<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Input</title>
    <link rel="stylesheet" href="tambah.css">
  </head>
  <body>

<form class="box" action="index.html" method="post">
  <h1>Form Input</h1>
  
  <label for="employee-name">Nama Pegawai:</label>
  <select id="employee-name" name="employee_name" required>
    <option value="" disabled selected>Select your option</option>
    <option value="employee1">Employee 1</option>
    <option value="employee2">Employee 2</option>
    <option value="employee3">Employee 3</option>
    <!-- Add more options as needed -->
  </select>
  
  <label for="date">Tanggal:</label>
  <input type="date" id="date" name="date" required>
  
  <label for="ph">pH Air:</label>
  <input type="number" id="ph" name="ph" step="0.01" placeholder="pH Air" required>
  
  <label for="turbidity">Kekeruhan/PPS:</label>
  <input type="number" id="turbidity" name="turbidity" placeholder="Kekeruhan/PPS" required>
  
  <label for="do">Dissolved Oxygen (DO):</label>
  <input type="number" id="do" name="do" step="0.01" placeholder="Dissolved Oxygen (DO)" required>
  
  <label for="temperature">Suhu Air:</label>
  <input type="number" id="temperature" name="temperature" step="0.1" placeholder="Suhu Air" required>
  
  <input type="submit" name="submit" value="Tambahkan">

</form>

  </body>
</html>

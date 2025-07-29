<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Electricity Charge Calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Eleicity Charge Calculahjtor</h2>
    <form method="POST" class="card p-4 shadow-sm">
      <div class="form-group">
        <label for="voltage">Voltage (V)</label>
        <input type="number" class="form-control" name="voltage" value="19" required>
      </div>
      <div class="form-group">
        <label for="current">Current (A)</label>
        <input type="number" class="form-control" name="current" value="3.24" step="0.01" required>
      </div>
      <div class="form-group">
        <label for="rate">Current Rate (sen/kWh)</label>
        <input type="number" class="form-control" name="rate" value="21.80" step="0.01" required>
      </div>
      >
    </form>
  </div>
</body>
</html>
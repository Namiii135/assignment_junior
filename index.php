<?php
function calculateEnergyTable($voltage, $current, $rate) {
    $power = $voltage * $current; // in Watts
    $power_kW = $power / 1000; // in kW
    $rate_RM = $rate / 100; // sen to RM

    echo "<div class='alert alert-info mt-4'>";
    echo "<strong>POWER:</strong> " . number_format($power_kW, 5) . " kW<br>";
    echo "<strong>RATE:</strong> RM " . number_format($rate_RM, 3) . "<br>";
    echo "</div>";

    echo "<table class='table table-bordered mt-3'>";
    echo "<thead class='thead-dark'><tr><th># Hour</th><th>Energy (kWh)</th><th>Total (RM)</th></tr></thead><tbody>";

    for ($hour = 1; $hour <= 24; $hour++) {
        $energy = $power_kW * $hour;
        $total = $energy * $rate_RM;
        echo "<tr>";
        echo "<td>{$hour}</td>";
        echo "<td>" . number_format($energy, 5) . "</td>";
        echo "<td>" . number_format($total, 2) . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voltage = $_POST['voltage'];
    $current = $_POST['current'];
    $rate = $_POST['rate'];

    calculateEnergyTable($voltage, $current, $rate);
}
?>

<!-- HTML form (keep Bootstrap 4) -->
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
      <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METASTREAK</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="#" class="logo">
            <span>M</span>
            <span>E</span>
            <span>T</span>
            <span>E</span>
            <span>R</span>
            <span>S</span>
            <span>T</span>
            <span>R</span>
            <span>E</span>
            <span>A</span>
            <span>K</span>
        </a>
        <i id="dropdown-toggle" class="bx bx-book navbar-icon"></i>
        <!-- Person icon -->
        <a href="login.php" class="navbar-icon"><i class="bx bx-user"></i></a>
        <!-- Premium button -->
        <a href="premium.html" class="premium-button">Premium</a>
        <!-- Dropdown menu -->
        <div id="dropdown-menu" class="dropdown-menu">
            <a href="#">Item 1</a>
            <a href="#">Item 2</a>
            <a href="#">Item 3</a>
        </div>
    </header>

    <!-- Home Content -->
    <h1>PREMIUM  Forex Signals</h1>
    <section class="home-content">
        <h1>Free Forex Signals</h1>
        <?php
include "includes/conn.php";

$sql = "SELECT * FROM premium";
$result = $conn->query($sql);

// Display fetched data in cards
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-4 green-card">';
        echo '<div class="card-body">';
        echo '<div class="row">';
        echo '<div class="col-md-6">';
        // Check if the signal is Buy or Sell
        $signal = $row["tips"] === "Buy" ? '<span style="color: blue;">Buy</span>' : '<span style="color: red;">Sell</span>';
        echo '<p><strong>' . $row["pair"] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> ' . $signal . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' . $row["time"] . ' ' . $row["date"] . '</p>';
        echo '</div>';
        echo '<div class="col-md-6">';
        echo '<p><strong>Entry:</strong> ' . $row["entry"] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="green-text">Tp:</span> ' . $row["tp"] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;">SL:</span> ' . $row["sl"] . '</p>';
        echo '</div>';
        echo '<div class="col-md-6">';
        echo '<p><strong>Pips:</strong> ' . $row["pips"] . '&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Outcome: ' . $row["outcome"] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>

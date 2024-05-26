<!DOCTYPE html>
<htm lang="en">
<?php include "includes/header.php"; 
include "includes/conn.php"
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<?php include "includes/sidebar.php" ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<?php include "includes/navbar.php" ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <!-- Page Heading -->
                 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">PREMIUM SIGNALS</h6><br>
              </div>

       
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="pair"><b>PAIR:</b></label>
            <input type="text" id="pair" name="pair" required><br><br>

            <label for="entry"><b>Entry:</b></label>
            <input type="number" step="0.01" id="entry" name="entry" required><br><br>

            <label for="pips"><b>Pips</b>:</label>
            <input type="number" step="0.01" id="pips" name="pips" required><br><br>

            <label for="tips"><b>Tips:</b></label>
            <select id="tips" name="tips" required>
                <option value="SELL">SELL</option>
                <option value="BUY">BUY</option>
               
            </select><br><br>

            <label for="tp"><b>Take Profit:</b></label>
            <input type="number" step="0.01" id="tp" name="tp"><br><br>

            <label for="sl"><b>Stop Loss:</b></label>
            <input type="number" step="0.01" id="sl" name="sl"><br><br>

            <label for="date"><b>Date:</b></label>
            <input type="date" id="date" name="date" required><br><br>

            <label for="time"><b>Time:</b></label>
            <input type="time" id="time" name="time" required><br><br>

            <label for="outcome"><b>Outcome:</b></label>
            <select id="outcome" name="outcome" required>
                <option value="win">SL hits</option>
                <option value="loss">Tp hits</option>
                <option value="breakeven">Sold but confused points</option>
                <option value="breakeven">Bought but confused points</option>

            </select><br><br>

            <input type="submit" value="Submit">
        </form>

        <?php
        // Database connection details
        include "includes/conn.php";
        // If form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Prepare and bind SQL statement
            $stmt = $conn->prepare("INSERT INTO premium (pair, entry, pips, tips, tp, sl, date, time, outcome) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sddssdsss", $pair, $entry, $pips, $tips, $tp, $sl, $date, $time, $outcome);

            // Get form data
            $pair = $_POST["pair"];
            $entry = $_POST["entry"];
            $pips = $_POST["pips"];
            $tips = $_POST["tips"];
            $tp = $_POST["tp"];
            $sl = $_POST["sl"];
            $date = $_POST["date"];
            $time = $_POST["time"];
            $outcome = $_POST["outcome"];

            // Execute the SQL statement
            if ($stmt->execute() === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        }

        // Close connection
        $conn->close();
        ?>
    </div>
</body>


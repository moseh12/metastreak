<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METASTREAK</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="style2.css">
    <style>
        .blink {
            animation: blink 1s infinite;
			font-weight: bold;
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="nav">
        <a href="#" class="logo">
            <span>M</span>
            <span>E</span>
            <span>T</span>
            <span>A</span>
            <span>S</span>
            <span>T</span>
            <span>R</span>
            <span>E</span>
            <span>A</span>
            <span>K</span>
        </a>
        <a href="login.php" class="navbar-icon"><i class="bx bx-user"></i></a>
        <a href="premium.html" class="premium-button">Premium</a>
		<i id="notification-toggle" class="bx bx-bell navbar-icon"></i>
		<label class="switch">
  <input id="toggle-switch" type="checkbox">
  <span class="slider round"></span>
</label>

    </div>

    <section class="home-content">
	<h1 class="text-black">Free Forex Signals</h1>
      
        <?php
        include "includes/conn.php";

        $sql = "SELECT * FROM free";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card mb-4 green-card">';
                echo '<div class="card-body">';
                echo '<div class="row">';
                echo '<div class="col-md-6">';
                $signal = $row["tips"] === "Buy" 
                    ? '&nbsp;&nbsp&nbsp;&nbsp;<span class="blink" style="color: blue; text-transform: uppercase;">Buy</span>' 
                    : '&nbsp;&nbsp&nbsp;&nbsp;<span class="blink" style="color: red; text-transform: uppercase;">Sell</span>';
                echo '<p><strong>' . $row["pair"] . '</strong> ' . $signal . '&nbsp;&nbsp&nbsp;&nbsp; ' . $row["time"] . ' &nbsp;&nbsp&nbsp;&nbsp' . $row["date"] . '</p>';
                echo '</div>';
                
                echo '<div class="col-md-6">';
                echo '<p><strong>Entry:</strong> ' . $row["entry"] . ' &nbsp;&nbsp&nbsp;&nbsp;<span class="green-text">Tp:</span> ' . $row["tp"] . ' &nbsp;&nbsp&nbsp;&nbsp;<span style="color: red;">SL:</span> ' . $row["sl"] . '</p>';
                echo '</div>';
                echo '<div class="col-md-6">';
                echo '<p><strong>Pips:</strong> ' . $row["pips"] . ' &nbsp;&nbsp&nbsp;&nbsp; Outcome: ' . $row["outcome"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
       <h1 id="totals" class="text-black">Monthly Summary</h1>
        <div class="table-responsive text-center mb-4">
            <table class="table table-sm table-hover" id="table-totals">
                <thead>
                    <tr>
                        <th class="text-start">Month, Year</th>
                        <th>Total</th>
                        <th>EUR/USD</th>
                        <th>USD/CHF</th>
                        <th>GBP/USD</th>
                        <th>USD/JPY</th>
                        <th>USD/CAD</th>
                        <th>AUD/USD</th>
                        <th>EUR/JPY</th>
                        <th>NZD/USD</th>
                        <th>GBP/CHF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="fst-italic">
                        <td class="text-start">Month-to-date</td>
                        <td class="row-total">3 730</td>
                        <td>264</td>
                        <td>572</td>
                        <td>611</td>
                        <td>95</td>
                        <td>472</td>
                        <td>426</td>
                        <td>490</td>
                        <td>472</td>
                        <td>328</td>
                    </tr>
                    <tr>
                        <td class="text-start">April 2024</td>
                        <td class="row-total">4 300</td>
                        <td>429</td>
                        <td>572</td>
                        <td>328</td>
                        <td>95</td>
                        <td>472</td>
                        <td>426</td>
                        <td>490</td>
                        <td>472</td>
                        <td>518</td>
                    </tr>
                    <tr>
                        <td class="text-start">March 2024</td>
                        <td class="row-total">2 895</td>
                        <td>572</td>
                        <td>386</td>
                        <td>473</td>
                        <td>364</td>
                        <td>226</td>
                        <td>495</td>
                        <td>176</td>
                        <td>382</td>
                        <td>422</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="border p-3 bg-light">
            <div class="bg-warning text-center mb-3 p-3">
                <span class="fs-5">DISCLAIMER: </span>
                <span class="fst-italic lh-lg">Please note that past performance in the forex market does not guarantee future results. Trading forex carries a high level of risk and may not be suitable for all investors. Ensure you fully understand the risks before trading. The information provided here is for educational purposes only and should not be considered financial advice.</span>
            </div>
            <div class="text-center mb-3">
                <a href="premium.html" class="d-inline text-nowrap" title="Try the Premium for more trades">Try the Premium for more trades</a>
            </div>
            <div class="text-center">
                <a href="#" class="d-inline text-nowrap" title="Our Risk Disclaimer">Our Risk Disclaimer</a>
            </div>
        </div>

		
    </section>
	<div class="whatsapp">
      <a class="whatsapp-button" href="https://t.me/metastreakfxtrades" target="_blank">
        <img src="img/tele_logo.png" alt="Telegran">
      </a>
    </div>


    <!-- Footer part -- -->

    <footer class="footer">
      <div class="footer-text">
        <p   style="text-align: center; ">Copyright &copy; 2024 by MCHUMA | All Right Reserved.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#top"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <script>
		const toggleSwitch = document.getElementById('toggle-switch');

toggleSwitch.addEventListener('change', function() {
    if (toggleSwitch.checked) {
        document.body.classList.add('white-background');
		navbar.classList.add('white-navbar');
        // Add class "text-black" to elements with the class "text-black" when switch is on
        document.querySelectorAll('.text-black').forEach(element => {
            element.classList.add('black-text');
        });
    } else {
        document.body.classList.remove('white-background');
		navbar.classList.remove('white-navbar');
        // Remove class "text-black" from elements with the class "text-black" when switch is off
        document.querySelectorAll('.text-black').forEach(element => {
            element.classList.remove('black-text');
        });
    }
});


     
		const notificationToggle = document.getElementById('notification-toggle');
        const logo = document.querySelector('.logo');

        window.addEventListener('resize', () => {
            if (window.innerWidth <= 768) {
                logo.style.display = 'none';
                notificationToggle.style.display = 'block';
            } else {
                logo.style.display = 'inline-block';
                notificationToggle.style.display = 'none';
            }
        });

        // Initial check on page load
        if (window.innerWidth <= 768) {
            logo.style.display = 'none';
            notificationToggle.style.display = 'block';
        }
        
    </script>
</body>
</html>

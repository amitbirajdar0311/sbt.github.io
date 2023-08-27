<?php
include './config.php'; // Include your database configuration
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Receipt</title>
    <link rel="stylesheet" href="./recipt.css" />
</head>
<body>
    <header>
        <div class="logo">
            <img src="./Logo.png" alt="HTT Logo" />
        </div>
        <div class="header">
            <h1>Shri Bhairavnath Transport</h1>
            <div class="address-banner">
                <p>
                    At.M.I.D.C., Kurkumbh, Gala No. 2, Near Cipla Ltd. | Tal.Daund,
                    Dist.Pune | Ph.: 02117-235341 | Mob: 9422520681, 8805317002 | Mail
                    ID: nanazagade.kkb@gmail.com
                </p>
            </div>
        </div>
    </header>

    <!-- Tax Invoice -->

    <div class="taxInvoiceTitle">Tax Invoice</div>

    <div class="invoiceAddress">
        <?php
        // Step 1: Database Connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Step 2: Query Execution
        $sql = "SELECT * FROM abcreation";
        $result = $conn->query($sql);

        // Step 3: Data Retrieval
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo '<div class="companyAddress">';
            // echo '<h4>' . $row["Company"] . '</h4>';
            // echo '<address>';
            // // ... Other address details
            // echo '</address>';
            // echo '</div>';
            // echo '<div class="invoiceDetails">';
            // echo '<span>*Original for recipient</span><br />';
            // echo '<strong>Invoice Number: </strong>' . $row["InvoiceNumber"] . '<br />';
            // echo '<strong>Invoice Date: </strong>' . $row["InvoieceDate"] . '<br />';
            // echo '</div>';
            echo ''
        } else {
            echo "No records found.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <table class="invoice" style="font-size: 13px;">
        <thead>
            <!-- Table header content here -->
        </thead>
        <tbody>
            <?php
            // Step 1: Database Connection (already connected)
            
            // Step 2: Query Execution (already executed)

            // Step 3: Data Retrieval (already fetched)
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Step 4: HTML Output for each row
                    echo "<tr>";
                    // ... Output other columns as needed
                    echo "</tr>";
                }
            } else {
                echo "No records found.";
            }

            // Close the database connection (already closed)
            ?>
        </tbody>
    </table>

    <div class="invoiceSignature">
        <!-- Your invoice signature content here -->
    </div>
</body>
</html>

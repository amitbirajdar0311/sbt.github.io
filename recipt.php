<?php
require_once 'config.php';
$sql = "SELECT * FROM invoice_form ORDER BY id DESC LIMIT 1;";
$all_invoice = $con->query($sql);
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
      <!-- <img src="./Logo.png" alt="HTT Logo" /> -->
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
  <?php
  while ($row = mysqli_fetch_assoc($all_invoice)) {
    ;
    ?>

    <div class="taxInvoiceTitle">Tax Invoice</div>

    <div class="invoiceAddress">
      <div class="companyAddress">
        <h4>
          <?php echo $row["companySelect"]; ?>
        </h4>
        <address>
          
          <?php echo $row["selectedCompanyAddress"]; ?>
          <br />
          <strong>State of supply:</strong> 27-Maharashtra <br />
          <strong>GSTIN:</strong> 27AAACG5748C2ZQ
        </address>
      </div>
      <div class="invoiceDetails">
        <span>*Original for recipient</span><br />
        <strong>Invoice Number: </strong>
        <?php echo $row["invoiceNumber"]; ?><br />
        <strong>Invoice Date: </strong>
        <?php echo $row["invoiceDate"]; ?>

        <strong>Request Id: </strong>
        <?php echo $row["requestId"]; ?>
      </div>
    </div>

    <table class="invoice" style="font-size: 13px;">
      <tr>
        <!-- <th>Sr.</th> -->
        <th></th>
        <th>Description</th>
        <th>Rate</th>
        <th>Qty</th>
        <th>Amount</th>
      </tr>
      <tr>

        <td rowspan="8"></td>
        <td style="line-height: 20px; ">
         <strong>Booked by:</strong> 
          <?php echo $row["bookedBy"]; ?> | From:
          <?php echo $row["fromD"]; ?> To:
          <?php echo $row["toD"]; ?>

         
        </td>
        <td>
          <!-- <?php echo $row["rateofduty"]; ?> -->
        </td>
        <td></td>
        <td>
          </td>
        </tr>

      <tr>
        <td>
          <strong>Vehicle Group:</strong>
          <?php echo $row["car"]; ?> |
          <?php echo $row["Vno"]; ?>
          
        </td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>
          <strong>Duty Type: </strong>
          <?php echo $row["selectedDuty"]; ?>
          
          
          <a href="<?php echo $row["uploadDuty"]; ?>" target="_blank" class="view">View Duty Slip</strong> </a>
        </td>
        <td></td>
        <td></td>
        <td>

          <?php echo $row["dutyAmt"]; ?>
        </td>
      </tr>
      <tr>
        <td>

          <strong>Passengers:</strong>
          <?php echo $row["passengerName"]; ?>

        </td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>
          <strong>Extra Hours</strong></td>
        <td>
          <?php echo $row["extHrs"]; ?>
        </td>
        <td>
          <?php echo $row["myQty"]; ?>
        </td>
        <td>
          <?php echo $row["extHAmt"]; ?>
        </td>
      </tr>
      <!-- <tr>
        <td>4 Hour - 40km <br />Toyoto Crysta</td>
        <td>1350.00</td>
        <td>1</td>
        <td>1,350.00</td>
      </tr> -->
      <tr>
        <td>
          <strong>Extra Km</strong></td>
        <td>
          <?php echo $row["exKm"]; ?>
        </td>
        <td>
          <?php echo $row["extKms"]; ?>
        </td>
        <td>
          <?php echo $row["extKAmt"]; ?>
        </td>
      </tr>
      <tr>
        <td>
          <strong>Parking & Toll</strong>
          <a href="<?php echo $row["uploadPaT"]; ?>" target="_blank" class="view">View Receipt</a>
        </td>
        <td></td>
        <td></td>
        <td>
          <?php echo $row["pnt"]; ?>
        </td>
      </tr>
      <tr>
        <td>
          <strong>Night Allowance</strong></td>
        <td></td>
        <td></td>
        <td>
          <?php echo $row["nightAllow"]; ?>
        </td>
      </tr>
      <!-- 
      <tr>
        <td colspan="2"></td>
        <td colspan="2" >
          <strong>Taxable Sub Total</strong>
        </td>
        <td>8,622.50</td>
      </tr> -->
      <!-- <tr>
        <td colspan="2"></td>
        <td colspan="2">
          <strong>Round Off</strong>
        </td>
        <td>0.50</td>
      </tr> -->
      <tr>
        <td colspan="2">
          In Words: <?php echo $row["inWordsCell"]; ?>
        </td>
        <td colspan="2"><strong>TOTAL</strong></td>
        <td><strong>
            <?php echo $row["totalAmount"]; ?>
          </strong></td>
      </tr>
    </table>

    <div class="invoiceSignature">
      <div class="invoiceDetails">
        <p style="width: 80%">
          "GST on renting of moter vehicle service is payable by the recipient of service under reverse charge mechanism
          as per the provisions laid down in notification no. 22/2019-CT(RATE) dated30.09.2019" 

        </p>
        <p><strong>GSTIN: </strong>27AADPZ5834C1ZJ | 
          <!-- <strong>SAC/HSN/Accounting Code: </strong>996601 | -->
          <strong>PAN</strong> AADPZ5834C</p>

        <h4 style="text-decoration: underline;">Bank Deatils</h4>
        <p><strong>Account No.:</strong> 60009899715</p>
        <p><strong>Bank.:</strong> Bank of Maharashtra | IFSC: MAHB0000680</p>
        <p>Please issue cheques in name of <strong>"Shri Bhairavnath Transport"</strong></p>
      </div>
      <div class="invoiceStamp">
        <h5>Shri Bhairavnath Transport</h5>
        <!-- <img src="./Signature.png" alt=""> -->
        <p>Autorized Signure</p>
      </div>
    </div>
    <?php
  }
  ?>
</body>

</html>
<?php

include './config.php';

// Retrieve and sanitize the data from the POST array
$companySelect = mysqli_real_escape_string($con, $_POST['companySelect']);
$invoiceDate = mysqli_real_escape_string($con, $_POST['invoiceDate']);
$invoiceNumber = mysqli_real_escape_string($con, $_POST['invoiceNumber']);
$requestId = mysqli_real_escape_string($con, $_POST['requestId']);
$selectedCompanyAddress = mysqli_real_escape_string($con, $_POST['selectedCompanyAddressHidden']);
$bookedBy = mysqli_real_escape_string($con, $_POST['bookedBy']);
$passengerName = mysqli_real_escape_string($con, $_POST['passengerName']);
$fromD = mysqli_real_escape_string($con, $_POST['fromD']);
$toD = mysqli_real_escape_string($con, $_POST['toD']);
$car = mysqli_real_escape_string($con, $_POST['car']);
$Vno = mysqli_real_escape_string($con, $_POST['Vno']);
$selectedDuty = mysqli_real_escape_string($con, $_POST['selectedDuty']);
$uploadDuty = mysqli_real_escape_string($con, $_POST['uploadDuty']);

$rateofduty = mysqli_real_escape_string($con, $_POST['rateofduty']);
$dutyAmt = mysqli_real_escape_string($con, $_POST['dutyAmt']);

$extHrs = mysqli_real_escape_string($con, $_POST['extHrs']);
$myQty = mysqli_real_escape_string($con, $_POST['myQty']);
$extHAmt = mysqli_real_escape_string($con, $_POST['extHAmt']);
$exKm = mysqli_real_escape_string($con, $_POST['exKm']);
$extKms = mysqli_real_escape_string($con, $_POST['extKms']);
$extKAmt = mysqli_real_escape_string($con, $_POST['extKAmt']);
$uploadPaT = mysqli_real_escape_string($con, $_POST['uploadPaT']);
$pnt = mysqli_real_escape_string($con, $_POST['pnt']);
$nightAllow = mysqli_real_escape_string($con, $_POST['nightAllow']);
$totalAmount = mysqli_real_escape_string($con, $_POST['totalAmount']);
$inWordsCell = mysqli_real_escape_string($con, $_POST['inWordsCell']);


// Create the SQL query for inserting into the database
$insertData = "INSERT INTO invoice_form (companySelect, invoiceDate, invoiceNumber, requestId, selectedCompanyAddress, bookedBy, passengerName, fromD, toD, car, Vno, selectedDuty, uploadDuty,rateofduty, dutyAmt,  extHrs, myQty, extHAmt, exKm, extKms, extKAmt,uploadPaT ,pnt, nightAllow, totalAmount,inWordsCell) VALUES ('$companySelect','$invoiceDate','$invoiceNumber','$requestId','$selectedCompanyAddress','$bookedBy','$passengerName','$fromD','$toD','$car','$Vno','$selectedDuty','$uploadDuty','$rateofduty','$dutyAmt','$extHrs','$myQty','$extHAmt','$exKm','$extKms','$extKAmt','$uploadPaT','$pnt','$nightAllow','$totalAmount','$inWordsCell')";

// Execute the query and handle errors
if ($con->query($insertData) === TRUE) {
    // Insertion successful
    echo "Data inserted successfully!";
} else {
    // Insertion failed, print the error message
    echo "Error: " . $insertData . "<br>" . $con->error;
}

// Close the database connection
$con->close();

?>

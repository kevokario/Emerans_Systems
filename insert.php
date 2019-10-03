<?php
$first_name = $_POST['first_name'];
$company = $_POST['company'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$applicationn = $_POST['applicationn'];
$details = $_POST['details'];
if (!empty($first_name) || !empty($company) || !empty($country) || !empty($phone) || !empty($email) || !empty($applicationn) || !empty($details) ) {
    $host = "localhost";
    $dbUsername = "meransy1";
    $dbPassword = "Kenyauni2018";
    $dbname = "meransy1_erp";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } 
    else {
        $SELECT = "SELECT email From contact Where email = ? Limit 1";
        $INSERT = "INSERT Into contact (first_name, company, country, phone, email, applicationn, details) values(?, ?, ?, ?, ?, ?, ?)";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssisss", $first_name, $company, $country, $phone, $email, $applicationn, $details);
            $stmt->execute();
            echo "We will get back to you shortly";
        } else {
            echo "Weve received your previous request, if you've not received feedback yet call us on 0777698670";
        }
        $stmt->close();
        $conn->close();
    }
} else 
{
    echo "All field are required";
    die();
}
?>

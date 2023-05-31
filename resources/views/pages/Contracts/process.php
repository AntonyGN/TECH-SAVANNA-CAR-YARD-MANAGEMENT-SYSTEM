<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $Clientname = $_POST["clientname"];
 $Salespersonname = $_POST["salespersonname"];
 $ContractId = $_POST["contractid"];
  $Description = $_POST["description"];
  $Agreement = $_POST["agreement"];

  
  if (empty($Contractid)) {
    echo "Contract id is required";
  } else {
    
    echo "Hello,  Your message is:your data has been saved";
  }
}
?>
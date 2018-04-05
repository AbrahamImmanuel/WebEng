<!DOCTYPE html>
<?php
	session_start();
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Web Engineering</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <?php include_once 'navBarTop.html'; ?>
        <?php include_once 'navBarBottom.html'; ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!--bar below navBarBottom-->
            <span style="font-size: 13px">Recently Viewed : <a href="#">Home Dashboard</a> <span style="font-size: 10px">>></span> <a href="#">Home Dashboard</a></span>
        </nav>


        <div style="float:left;width:15%;padding:5px;height:870px;" class=" bg-light"> <!--left side bar-->
            <button style="width: 100%; margin: 5px 0" type="button" class="btn btn-light">Customer List</button>
            <button style="width: 100%; margin: 5px 0" type="button" class="btn btn-light">Dashboard</button>
            <button style="width: 100%; margin: 5px 0" type="button" class="btn btn-light">Recently Modified</button>
        </div>
		
		<?php
			if(isset($_SESSION['message']))
			{
				$customerNumberAccount = $_SESSION['customerNumberAccount'];
				$customerSegment = $_SESSION['customerSegment'];
				$customerCategory = $_SESSION['customerCategory'];
				$residenceType = $_SESSION['residenceType'];
				$dateOfBirth = $_SESSION['dateOfBirth'];
				$occupation = $_SESSION['occupation'];
				$modifiedTime = $_SESSION['modifiedTime'];
				$sharedBalanceGroup = $_SESSION['sharedBalanceGroup'];
				$dukcapilStatus = $_SESSION['dukcapilStatus'];
				//$latitude = $_SESSION['latitude'];
				//$longitude = $_SESSION['longitude'];
				$npwpNumber = $_SESSION['npwpNumber'];
				$isConvertedFromLead = $_SESSION['isConvertedFromLead'];
				$customerStatus = $_SESSION['customerStatus'];
				$primaryMobile = $_SESSION['primaryMobile'];
				//$bssStatus = $_SESSION['bssStatus'];
				$corporateTaxId = $_SESSION['corporateTaxId'];
				$createdTime = $_SESSION['createdTime'];
				$customerUsername = $_SESSION['customerUsername'];
				
				//$id = $_SESSION['id'];
				$firstName = $_SESSION['firstName'];
				$lastName = $_SESSION['lastName'];
				$gender = $_SESSION['gender'];
				$facebookAccountId = $_SESSION['facebookAccountId'];
				$customerId = $_SESSION['customerId'];
				$customerIdType = $_SESSION['customerIdType'];
				$contactNumber = $_SESSION['contactNumber'];
				$motherMaidenName = $_SESSION['motherMaidenName'];
				$primaryEmail = $_SESSION['primaryEmail'];
				$preferredLanguage = $_SESSION['preferredLanguage'];
				$kkNumber = $_SESSION['kkNumber'];
				$homePhone = $_SESSION['homePhone'];
				$homeStatus = $_SESSION['homeStatus'];
				$officePhone = $_SESSION['officePhone'];
				$maritalStatus = $_SESSION['maritalStatus'];
				$fax = $_SESSION['fax'];
				
				echo "<script type='text/javascript'>alert('".$_SESSION['message']."');</script>";
				include_once 'contentWithData.php';
				session_unset();
			}
			else if(isset($_SESSION['index']))
			{	
				$index = $_SESSION['index'];
				$data = $_SESSION['data'];
				$customerNumberAccount = $data[$index]->customer_number_account;
				$customerSegment = $data[$index]->customer_segment;
				$customerCategory = $data[$index]->customer_category;
				$residenceType = $data[$index]->residence_type;
				$dateOfBirth = $data[$index]->date_of_birth;
				$occupation = $data[$index]->occupation;
				$modifiedTime = $data[$index]->modified_time;
				$sharedBalanceGroup = $data[$index]->shared_balance_group;
				$dukcapilStatus = $data[$index]->dukcapil_status;
				$latitude = $data[$index]->latitude;
				$longitude = $data[$index]->longitude;
				$npwpNumber = $data[$index]->npwp_number;
				$isConvertedFromLead = $data[$index]->is_converted_from_lead;
				$customerStatus = $data[$index]->customer_status;
				$primaryMobile = $data[$index]->primary_mobile;
				$bssStatus = $data[$index]->bss_status;
				$corporateTaxId = $data[$index]->corporate_tax_id;
				$createdTime = $data[$index]->created_time;
				$customerUsername = $data[$index]->customer_username;
				
				$id = $data[$index]->id;
				$firstName = $data[$index]->first_name;
				$lastName = $data[$index]->last_name;
				$gender = $data[$index]->gender;
				$facebookAccountId = $data[$index]->facebook_account_id;
				$customerId = $data[$index]->customer_id;
				$customerIdType = $data[$index]->customer_id_type;
				$contactNumber = $data[$index]->contact_number;
				$motherMaidenName = $data[$index]->mother_maiden_name;
				$primaryEmail = $data[$index]->primary_email;
				$preferredLanguage = $data[$index]->preferred_language;
				$kkNumber = $data[$index]->kk_number;
				$homePhone = $data[$index]->home_phone;
				$homeStatus = $data[$index]->home_status;
				$officePhone = $data[$index]->office_phone;
				$maritalStatus = $data[$index]->marital_status;
				$fax = $data[$index]->fax;
				
				include_once 'contentWithData.php';
				session_unset();
			}
			else
			{
				if(isset($_SESSION['warning']))
				{
					echo "<script type='text/javascript'>alert('".$_SESSION['warning']."');</script>";
				}
				include_once 'content.php';
				session_unset();
			}
		?>
		
		
        <div style="float:left;width:15%;padding:3px;">
            <table style="font-size:13px; border-left: 3px #A442DC solid" class="table table-hover">
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Basic</th></tr>
                <tr><td style="text-align: left"><a href="#">Customer Summary</a></td></tr>
                <tr><td style="text-align: left"><a href="#">Customer Details</a></td></tr>
                <tr><td style="text-align: left"><a href="#">Comments</a></td></tr>
                <tr><td style="text-align: left"><a href="#">Updates</a></td></tr>
                <tr><td style="text-align: left"><a href="#">CCI Details</a></td></tr>
                <tr><td style="text-align: left"><a href="#">Opportunities</a></td></tr>
                <tr><td style="text-align: left"><a href="#">Quotes</a></td></tr>
                <tr><td style="text-align: left"><a href="#">Documents</a></td></tr>
                <tr><td style="text-align: left"><a href="#">Campaigns</a></td></tr>
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Customer</th></tr>
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Accounts</th></tr>
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Order</th></tr>
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Add-on</th></tr>
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Bills</th></tr>
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Transaction Details</th></tr>
                <tr class="table-info"><th scope="row"><a class="dropdown-toggle"></a> Others</th></tr>
            </table>
        </div>
    </body>
</html>

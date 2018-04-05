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
		<?php
			if(isset($_POST['view']))
			{
				$_SESSION['index'] = $_POST['key'];
				header('Location: index.php');
			}
		?>
		
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!--bar below navBarBottom-->
            <span style="font-size: 13px">Recently Viewed : <a href="#">Home Dashboard</a> <span style="font-size: 10px">>></span> <a href="#">Home Dashboard</a></span>
        </nav>


        <div style="float:left;width:15%;padding:5px;height:870px;" class=" bg-light"> <!--left side bar-->
            <button style="width: 100%; margin: 5px 0" type="button" class="btn btn-light">Customer List</button>
            <button style="width: 100%; margin: 5px 0" type="button" class="btn btn-light">Dashboard</button>
            <button style="width: 100%; margin: 5px 0" type="button" class="btn btn-light">Recently Modified</button>
        </div>
		
        <div style="float:left;width:70%;padding:3px;">
		<table style="font-size:13px;" class="table table-hover">
			<tr class="table-primary">
				<th scope="row">Customer Number Account</th>
				<th scope="row">First Name</th>
				<th scope="row">Last Name</th>
				<th scope="row">NPWP</th>
				<th scope="row"></th>
			</tr>
			
			<?php
			if(isset($_SESSION['data']))
			{
				$data = $_SESSION['data'];
				foreach($data as $key => $value)
				{
			?>
					<tr class="table-light">
					<form action="#" method="POST">
						<input type="hidden" name="key" value="<?php echo $key ?>">
						<td scope="row"><?php echo $value->customer_number_account ?></td>
						<td scope="row"><?php echo $value->first_name ?></td>
						<td scope="row"><?php echo $value->last_name ?></td>
						<td scope="row"><?php echo $value->npwp_number ?></td>
						<td scope="row"><input type="submit" name="view" value="View"></td>
					</form>
					</tr>
			<?php
				}
			}
		?>
		</table> 
	</div>
		
		
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

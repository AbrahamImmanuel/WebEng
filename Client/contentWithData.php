<form method="POST" action="indexController.php">
	<div style="float:left;width:85%"> <!--form header-->
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<div class="collapse navbar-collapse" id="navbarColor03">
				<ul style="margin-left: 40%" class="navbar-nav mr-auto">
					<li class="nav-item active">
						<button name="save" type="submit" class="btn btn-secondary">Save</button>&nbsp;
					</li>
					<li class="nav-item">
						<button name="add" type="submit" class="btn btn-secondary">Add</button>&nbsp;
					</li>
					<li class="nav-item">
						<button name="edit" type="submit" class="btn btn-secondary">Edit</button>&nbsp;
					</li>
					<li class="nav-item">
						<button name="checkDukcapil" type="submit" class="btn btn-secondary">Check Dukcapil</button>&nbsp;
					</li>
					<li class="nav-item">
						<button type="button" class="btn btn-secondary dropdown-toggle">More</button>
					</li>
				</ul>
				<ul class="navbar-nav ">
					<li class="nav-item">
						<button type="button" class="btn btn-secondary"><</button>
					</li>
					&nbsp;
					<li class="nav-item">
						<button type="button" class="btn btn-secondary">></button>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div style="float:left;width:70%;padding:3px;">
		<table style="font-size:13px;" class="table table-hover">
			<tr class="table-primary">
				<th scope="row" colspan="6"><a class="dropdown-toggle"></a> Active</th>
			</tr>
			<tr class="table-light">
				<td scope="row">Customer Segment</td>
				<td scope="row">                        
					<select class="form-control" name="customerSegment">
					<?php
						if($_SESSION['customerSegment'] == 'Retail')
						{
					?>
							<option>-</option>
							<option selected>Retail</option>
							<option>Business</option>
					<?php
						}
						else if($_SESSION['customerSegment'] == 'Business')
						{
					?>
							<option>-</option>
							<option>Retail</option>
							<option selected>Business</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>Retail</option>
							<option>Business</option>
					<?php
						}
					?>
					</select>
				</td>
				<input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
				<td scope="row">Customer Number Account</td>
				<td scope="row"><input type="text" name="customerNumberAccount" class="form-control" placeholder="CA100023006" value="<?php echo $_SESSION['customerNumberAccount'] ?>" disabled></td>
				<td scope="row">Dukcapil Status</td>
				<td scope="row">
					<select class="form-control" name="dukcapilStatus">
					<?php
						if($_SESSION['dukcapilStatus'] == 'Valid')
						{
					?>
							<option selected>Valid</option>
							<option>Not Valid</option>
					<?php
						}
						else
						{
					?>
							<option>Valid</option>
							<option selected>Not Valid</option>
					<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr class="table-light">
				<td scope="row">Customer Category</td>
				<td scope="row">
					<select class="form-control" name="customerCategory">
					<?php
						if($_SESSION['customerCategory'] == 'Default')
						{
					?>
							<option>-</option>
							<option selected>Default</option>
							<option>Enterprise</option>
					<?php
						}
						else if($_SESSION['customerCategory'] == 'Enterprise')
						{
					?>
							<option>-</option>
							<option>Default</option>
							<option selected>Enterprise</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>Default</option>
							<option>Enterprise</option>
					<?php
						}
					?>
					</select>
				</td>
				<td scope="row">Latitude</td>
				<td scope="row"><input type="text" class="form-control" placeholder="" disabled></td>
				<td scope="row">Longitude</td>
				<td scope="row"><input type="text" class="form-control" placeholder="" disabled></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Residence Type</td>
				<td scope="row">
					<select class="form-control" name="residenceType">
					<?php
						if($_SESSION['residenceType'] == 'Domestic')
						{
					?>
							<option>-</option>
							<option selected>Domestic</option>
							<option>Foreign</option>
					<?php
						}
						else if($_SESSION['residenceType'] == 'Foreign')
						{
					?>
							<option>-</option>
							<option>Domestic</option>
							<option selected>Foreign</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>Domestic</option>
							<option>Foreign</option>
					<?php
						}
					?>
					</select>
				</td>
				<td scope="row">NPWP Number</td>
				<td scope="row" colspan="3"><input name="npwpNumber" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['npwpNumber'] ?>"></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Date of Birth</td>
				<td scope="row"><input name="dateOfBirth" type="date" class="form-control" placeholder="" value="<?php echo $_SESSION['dateOfBirth'] ?>"></td>
				<td scope="row">Is Converted From Lead</td>
				<td scope="row"><input name="isConvertedFromLead" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['isConvertedFromLead'] ?>"></td>
				<td scope="row">Customer Status</td>
				<td scope="row">
					<select class="form-control" name="customerStatus">
					<?php
						if($_SESSION['customerStatus'] == 'Registered')
						{
					?>
							<option>-</option>
							<option selected>Registered</option>
							<option>Active</option>
							<option>Suspended</option>
							<option>Deactivate</option>
					<?php
						}
						else if($_SESSION['customerStatus'] == 'Active')
						{
					?>
							<option>-</option>
							<option>Registered</option>
							<option selected>Active</option>
							<option>Suspended</option>
							<option>Deactivate</option>
					<?php
						}
						else if($_SESSION['customerStatus'] == 'Suspended')
						{
					?>
							<option>-</option>
							<option>Registered</option>
							<option>Active</option>
							<option selected>Suspended</option>
							<option>Deactivate</option>
					<?php
						}
						else if($_SESSION['customerStatus'] == 'Deactivate')
						{
					?>
							<option>-</option>
							<option>Registered</option>
							<option>Active</option>
							<option>Suspended</option>
							<option selected>Deactivate</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>Registered</option>
							<option>Active</option>
							<option>Suspended</option>
							<option>Deactivate</option>
					<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr class="table-light">
				<td scope="row">Occupation</td>
				<td scope="row">
					<select class="form-control" name="occupation">
					<?php
						if($_SESSION['occupation'] == 'Employed')
						{
					?>
							<option>-</option>
							<option selected>Employed</option>
							<option>Private</option>
					<?php
						}
						else if($_SESSION['occupation'] == 'Private')
						{
					?>
							<option>-</option>
							<option>Employed</option>
							<option selected>Private</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>Employed</option>
							<option>Private</option>
					<?php
						}
					?>
					</select>
				</td>
				<td scope="row">Primary Mobile</td>
				<td scope="row"><input name="primaryMobile" type="tel" class="form-control" placeholder="" value="<?php echo $_SESSION['primaryMobile'] ?>"></td>
				<td scope="row">BSS Status</td>
				<td scope="row"><input name="bssStatus" type="text" class="form-control" placeholder="" disabled></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Modified Time</td>
				<td scope="row"><input type="datetime" class="form-control" placeholder="" value="<?php echo $_SESSION['modifiedTime'] ?>" disabled></td>
				<td scope="row">Corporate Tax ID</td>
				<td scope="row" colspan="3"><input name="corporateTaxId" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['corporateTaxId'] ?>"></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Shared Balance Group</td>
				<td scope="row"><input name="sharedBalanceGroup" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['sharedBalanceGroup'] ?>"></td>
				<td scope="row">Created Time</td>
				<td scope="row"><input type="datetime" class="form-control" placeholder="" value="<?php echo $_SESSION['createdTime'] ?>" disabled></td>
				<td scope="row">Customer Username</td>
				<td scope="row"><input name="customerUsername" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['customerUsername'] ?>"></td>
			</tr>
		</table> 
		<table style="font-size:13px;" class="table table-hover">
			<tr class="table-primary">
				<th scope="row" colspan="6"><a class="dropdown-toggle"></a> PIC Details</th>
			</tr>
			<tr class="table-light">
				<td scope="row">First Name</td>
				<td scope="row"><input name="firstName" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['firstName'] ?>"></td>
				<td scope="row">Last Name</td>
				<td scope="row"><input name="lastName" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['lastName'] ?>"></td>
				<td scope="row">Gender</td>
				<td scope="row">
					<select class="form-control" name="gender">
					<?php
						if($_SESSION['gender'] == 'Male')
						{
					?>
							<option>-</option>
							<option selected>Male</option>
							<option>Female</option>
					<?php
						}
						else if($_SESSION['gender'] == 'Female')
						{
					?>
							<option>-</option>
							<option>Male</option>
							<option selected>Female</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>Male</option>
							<option>Female</option>
					<?php
						}
					?>
					</select>
				</td>
			</tr>
			<tr class="table-light">
				<td scope="row">Facebook Account ID</td>
				<td scope="row"><input name="facebookAccountId" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['facebookAccountId'] ?>"></td>
				<td scope="row">Customer ID Type</td>
				<td scope="row">
					<select class="form-control" name="customerIdType">
					<?php
						if($_SESSION['customerIdType'] == 'KTP')
						{
					?>
							<option>-</option>
							<option selected>KTP</option>
							<option>Passport</option>
					<?php
						}
						else if($_SESSION['customerIdType'] == 'Passport')
						{
					?>
							<option>-</option>
							<option>KTP</option>
							<option selected>Passport</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>KTP</option>
							<option>Passport</option>
					<?php
						}
					?>
					</select>
				</td>
				<td scope="row">Contact Number</td>
				<td scope="row"><input name="contactNumber" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['contactNumber'] ?>"></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Customer ID</td>
				<td scope="row"><input name="customerId" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['customerId'] ?>"></td>
				<td scope="row">Mother Maiden Name</td>
				<td scope="row"><input name="motherMaidenName" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['motherMaidenName'] ?>"></td>
				<td scope="row">Primary Email</td>
				<td scope="row"><input name="primaryEmail" type="email" class="form-control" placeholder="" value="<?php echo $_SESSION['primaryEmail'] ?>"></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Preferred Language</td>
				<td scope="row">
					<select class="form-control" name="preferredLanguage">
					<?php
						if($_SESSION['preferredLanguage'] == 'English')
						{
					?>
							<option>-</option>
							<option selected>English</option>
							<option>Bahasa Indonesia</option>
					<?php
						}
						else if($_SESSION['preferredLanguage'] == 'Bahasa Indonesia')
						{
					?>
							<option>-</option>
							<option>English</option>
							<option selected>Bahasa Indonesia</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>English</option>
							<option>Bahasa Indonesia</option>
					<?php
						}
					?>
					</select>
				</td>
				<td scope="row">KK Number</td>
				<td scope="row"><input name="kkNumber" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['kkNumber'] ?>"></td>
				<td scope="row">Home Phone</td>
				<td scope="row"><input name="homePhone" type="tel" class="form-control" placeholder="" value="<?php echo $_SESSION['homePhone'] ?>"></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Home Status</td>
				<td scope="row">
					<select class="form-control" name="homeStatus">
					<?php
						if($_SESSION['homeStatus'] == 'Own House')
						{
					?>
							<option>-</option>
							<option selected>Own House</option>
							<option>Rent</option>
							<option>Apartment</option>
					<?php
						}
						else if($_SESSION['homeStatus'] == 'Rent')
						{
					?>
							<option>-</option>
							<option>Own House</option>
							<option selected>Rent</option>
							<option>Apartment</option>
					<?php
						}
						else if($_SESSION['homeStatus'] == 'Apartment')
						{
					?>
							<option>-</option>
							<option>Own House</option>
							<option>Rent</option>
							<option selected>Apartment</option>
					<?php
						}
						else
						{
					?>
							<option selected>-</option>
							<option>Own House</option>
							<option>Rent</option>
							<option>Apartment</option>
					<?php
						}
					?>
					</select>
				</td>
				<td scope="row">Office Phone</td>
				<td scope="row"><input name="officePhone" type="tel" class="form-control" placeholder="" value="<?php echo $_SESSION['officePhone'] ?>"></td>
				<td scope="row">Marital Status</td>
				<td scope="row"><input name="maritalStatus" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['maritalStatus'] ?>"></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Fax</td>
				<td scope="row" colspan="5"><input name="fax" type="text" class="form-control" placeholder="" value="<?php echo $_SESSION['fax'] ?>"></td>
			</tr>
		</table> 
	</div>
</form>
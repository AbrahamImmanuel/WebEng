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
						<option>-</option>
						<option>Retail</option>
						<option>Business</option>
					</select>
				</td>
				<td scope="row">Customer Number Account</td>
				<td scope="row"><input type="text" class="form-control" placeholder="CA100023006" disabled></td>
				<td scope="row">Dukcapil Status</td>
				<td scope="row">
					<select class="form-control" name="dukcapilStatus">
						<option>Valid</option>
						<option selected>Not Valid</option>
					</select>
				</td>
			</tr>
			<tr class="table-light">
				<td scope="row">Customer Category</td>
				<td scope="row">
					<select class="form-control" name="customerCategory">
						<option>-</option>
						<option>Default</option>
						<option>Enterprise</option>
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
						<option>-</option>
						<option>Domestic</option>
						<option>Foreign</option>
					</select>
				</td>
				<td scope="row">NPWP Number</td>
				<td scope="row" colspan="3"><input name="npwpNumber" type="text" class="form-control" placeholder=""></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Date of Birth</td>
				<td scope="row"><input name="dateOfBirth" type="date" class="form-control" placeholder=""></td>
				<td scope="row">Is Converted From Lead</td>
				<td scope="row"><input name="isConvertedFromLead" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Customer Status</td>
				<td scope="row">
					<select class="form-control" name="customerStatus">
						<option>-</option>
						<option>Registered</option>
						<option>Active</option>
						<option>Suspended</option>
						<option>Deactivate</option>
					</select>
				</td>
			</tr>
			<tr class="table-light">
				<td scope="row">Occupation</td>
				<td scope="row">
					<select class="form-control" name="occupation">
						<option>-</option>
						<option>Employed</option>
						<option>Private</option>
					</select>
				</td>
				<td scope="row">Primary Mobile</td>
				<td scope="row"><input name="primaryMobile" type="tel" class="form-control" placeholder=""></td>
				<td scope="row">BSS Status</td>
				<td scope="row"><input name="bssStatus" type="text" class="form-control" placeholder="" disabled></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Modified Time</td>
				<td scope="row"><input type="datetime" class="form-control" placeholder="" disabled></td>
				<td scope="row">Corporate Tax ID</td>
				<td scope="row" colspan="3"><input name="corporateTaxId" type="text" class="form-control" placeholder=""></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Shared Balance Group</td>
				<td scope="row"><input name="sharedBalanceGroup" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Created Time</td>
				<td scope="row"><input type="datetime" class="form-control" placeholder="" disabled></td>
				<td scope="row">Customer Username</td>
				<td scope="row"><input name="customerUsername" type="text" class="form-control" placeholder=""></td>
			</tr>
		</table> 
		<table style="font-size:13px;" class="table table-hover">
			<tr class="table-primary">
				<th scope="row" colspan="6"><a class="dropdown-toggle"></a> PIC Details</th>
			</tr>
			<tr class="table-light">
				<td scope="row">First Name</td>
				<td scope="row"><input name="firstName" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Last Name</td>
				<td scope="row"><input name="lastName" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Gender</td>
				<td scope="row">
					<select class="form-control" name="gender">
						<option>-</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</td>
			</tr>
			<tr class="table-light">
				<td scope="row">Facebook Account ID</td>
				<td scope="row"><input name="facebookAccountId" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Customer ID Type</td>
				<td scope="row">
					<select class="form-control" name="customerIdType">
						<option>-</option>
						<option>KTP</option>
						<option>Passport</option>
					</select>
				</td>
				<td scope="row">Contact Number</td>
				<td scope="row"><input name="contactNumber" type="text" class="form-control" placeholder=""></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Customer ID</td>
				<td scope="row"><input name="customerId" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Mother Maiden Name</td>
				<td scope="row"><input name="motherMaidenName" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Primary Email</td>
				<td scope="row"><input name="primaryEmail" type="email" class="form-control" placeholder=""></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Preferred Language</td>
				<td scope="row">
					<select class="form-control" name="preferredLanguage">
						<option>-</option>
						<option>English</option>
						<option>Bahasa Indonesia</option>
					</select>
				</td>
				<td scope="row">KK Number</td>
				<td scope="row"><input name="kkNumber" type="text" class="form-control" placeholder=""></td>
				<td scope="row">Home Phone</td>
				<td scope="row"><input name="homePhone" type="tel" class="form-control" placeholder=""></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Home Status</td>
				<td scope="row">
					<select class="form-control" name="homeStatus">
						<option>-</option>
						<option>Own House</option>
						<option>Rent</option>
						<option>Apartment</option>
					</select>
				</td>
				<td scope="row">Office Phone</td>
				<td scope="row"><input name="officePhone" type="tel" class="form-control" placeholder=""></td>
				<td scope="row">Marital Status</td>
				<td scope="row"><input name="maritalStatus" type="text" class="form-control" placeholder=""></td>
			</tr>
			<tr class="table-light">
				<td scope="row">Fax</td>
				<td scope="row" colspan="5"><input name="fax" type="text" class="form-control" placeholder=""></td>
			</tr>
		</table> 
	</div>
</form>
<div id="user-details" class="tab-pane fade">
					<h3>User Details <button id="newUser" type="button" class="btn btn-primary btn-sm">New User</button></h3>
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="firstName">First Name:</label>
										<input type="text" class="form-control" id="firstName" value="John">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="lastName">Last Name:</label>
										<input type="text" class="form-control" id="lastName" value="Doe">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="dobFrom">Date of Birth (mm/dd/yyyy):</label>
								<input type="text" class="form-control" id="dobFrom" value="01/01/2001">
							</div>
							<div class="form-group">
								<label for="address">Address:</label>
								<input type="text" class="form-control" id="address" value="1234 Example St">
							</div>
							<div class="form-group">
								<label for="address2">Address Line 2:</label>
								<input type="text" class="form-control" id="address2" value="Apt 123">
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="city">City:</label>
										<input type="text" class="form-control" id="city" value="Fort Sample">
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="state">State:</label>
										<input type="text" class="form-control" id="state" value="EX">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="zip">Zip:</label>
										<input type="number" class="form-control" id="zip" value="54321">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" value="john@example.com">
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="phone">Phone:</label>
										<input type="tel" class="form-control" id="phone" value="555-555-5555">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="phone2">Alternate Phone:</label>
										<input type="tel" class="form-control" id="phone2" value="555-555-5555">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="notes">Notes:</label>
								<textarea class="form-control" rows="5" id="notes"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contactFirstName">Contact First Name:</label>
										<input type="text" class="form-control" id="contactFirstName" value="Jane">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contactLastName">Contact Last Name:</label>
										<input type="text" class="form-control" id="contactLastName" value="Doe">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="contactAddress">Contact Address:</label>
								<input type="text" class="form-control" id="contactAddress" value="1234 Example St">
							</div>
							<div class="form-group">
								<label for="contactAddress2">Contact Address Line 2:</label>
								<input type="text" class="form-control" id="contactAddress2" value="Apt 123">
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contactCity">Contact City:</label>
										<input type="text" class="form-control" id="contactCity" value="Fort Sample">
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="contactState">State:</label>
										<input type="text" class="form-control" id="contactState" value="EX">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="contactZip">Contact Zip:</label>
										<input type="number" class="form-control" id="contactZip" value="54321">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="contactEmail">Contact Email:</label>
								<input type="email" class="form-control" id="contactEmail" value="jane@example.com">
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contactPhone">Contact Phone:</label>
										<input type="tel" class="form-control" id="contactPhone" value="555-555-5555">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="contactPhone2">Contact Alternate Phone:</label>
										<input type="tel" class="form-control" id="contactPhone2" value="555-555-5555">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="relationship">Relationship:</label>
								<input type="text" class="form-control" id="relationship" value="Wife">
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="status">Status:</label>
										<select class="form-control" id="status">
											<option>Applicant</option>
											<option>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="type">Type:</label>
										<select class="form-control" id="type">
											<option>Individual</option>
											<option>Organization</option>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="medium">Medium:</label>
										<select class="form-control" id="medium">
											<option>Raidio</option>
											<option>Mobile App</option>
											<option>PBS 39.4</option>
											<option>Streaming</option>
										</select>
									</div>
								</div>
							</div>
							<label for="userRadios">Radios:</label>
							<div id="userRadios">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover table-condensed">
										<thead>
											<tr>
												<th>Radio ID</th>
												<th>Checked Out</th>
												<th>Check In</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>123456</td>
												<td>01/01/2015</td>
												<td><button id="checkIn" type="button" class="btn btn-xs btn-primary">Check In</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<button id="checkOut" type="button" class="btn btn-primary">Check Out Radio</button>
						</div>
					</div>
					<button id="userSaveBtn" type="button" class="btn btn-primary">Save Changes</button>
					<button id="userCancelBtn" type="button" class="btn btn-default">Cancel Changes</button>
					
				</div>
				
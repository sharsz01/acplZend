<div id="users" class="tab-pane fade">
					<h3>Users</h3>
					<div id="userList">
						<div class="panel-group">
							<div class="panel panel-default">
								<a data-toggle="collapse" href="#collapse1">
									<div class="panel-heading">
										<h4 class="panel-title">
											Search
											<span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
										</h4>
									</div>
								</a>
								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-footer">
										<div class="row">
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="firstName">First Name:</label>
															<input type="text" class="form-control" id="firstName">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="lastName">Last Name:</label>
															<input type="text" class="form-control" id="lastName">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="dobFrom">Date of Birth (from) (mm/dd/yyyy):</label>
															<input type="text" class="form-control" id="dobFrom">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="dobTo">Date of Birth (to) (mm/dd/yyyy):</label>
															<input type="text" class="form-control" id="dobTo">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="address">Address:</label>
													<input type="text" class="form-control" id="address">
												</div>
												<div class="form-group">
													<label for="address2">Address Line 2:</label>
													<input type="text" class="form-control" id="address2">
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="city">City:</label>
															<input type="text" class="form-control" id="city">
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-group">
															<label for="state">State:</label>
															<input type="text" class="form-control" id="state">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<label for="zip">Zip:</label>
															<input type="number" class="form-control" id="zip">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="email">Email:</label>
													<input type="email" class="form-control" id="email">
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="phone">Phone:</label>
															<input type="tel" class="form-control" id="phone">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="phone2">Alternate Phone:</label>
															<input type="tel" class="form-control" id="phone2">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="notes">Notes:</label>
													<textarea class="form-control" rows="2" id="notes"></textarea>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="contactFirstName">Contact First Name:</label>
															<input type="text" class="form-control" id="contactFirstName">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="contactLastName">Contact Last Name:</label>
															<input type="text" class="form-control" id="contactLastName">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="contactAddress">Contact Address:</label>
													<input type="text" class="form-control" id="contactAddress">
												</div>
												<div class="form-group">
													<label for="contactAddress2">Contact Address Line 2:</label>
													<input type="text" class="form-control" id="contactAddress2">
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="contactCity">Contact City:</label>
															<input type="text" class="form-control" id="contactCity">
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-group">
															<label for="contactState">State:</label>
															<input type="text" class="form-control" id="contactState">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<label for="contactZip">Contact Zip:</label>
															<input type="number" class="form-control" id="contactZip">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="contactEmail">Contact Email:</label>
													<input type="email" class="form-control" id="contactEmail">
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="contactPhone">Contact Phone:</label>
															<input type="tel" class="form-control" id="contactPhone">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="contactPhone2">Contact Alternate Phone:</label>
															<input type="tel" class="form-control" id="contactPhone2">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="relationship">Relationship:</label>
													<input type="text" class="form-control" id="relationship">
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
												<button id="searchBtn" type="button" class="btn btn-primary btn-block">Search</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group">
							<div class="panel panel-default">
								<a data-toggle="collapse" href="#collapse2">
									<div class="panel-heading">
										<h4 class="panel-title">
											Inactive Tabs
											<span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
										</h4>
									</div>
								</a>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-footer">
										<div id="tabRow">
											<div style="float: left;"><button type="button" class="btn btn-default">Address Line 2</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">City</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">State</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Zip</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Phone</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Alternate Phone</button></div>
											
											<div style="float: left;"><button type="button" class="btn btn-default">Contact First</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact Last</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact Address</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact Address Line 2</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact City</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact State</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact Zip</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Email</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact Phone</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Contact Alternate Phone</button></div>
											<div style="clear: both;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover table-condensed">
								<thead>
									<tr>
										<th>First<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Last<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Email<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>DOB<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Address<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
									<tr>
										<td>John</td>
										<td>Doe</td>
										<td>john@example.com</td>
										<td>01-01-2001</td>
										<td>1234 Example St</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>Moe</td>
										<td>mary@example.com</td>
										<td>02-02-2002</td>
										<td>4321 Sample Rd</td>
									</tr>
									<tr>
										<td>July</td>
										<td>Dooley</td>
										<td>july@example.com</td>
										<td>07-07-2007</td>
										<td>5555 Testing Dr</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
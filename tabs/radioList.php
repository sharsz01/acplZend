<div id="radios" class="tab-pane fade">
					<h3>Radios</h3>
					<div id="radioList">
						<div class="panel-group">
							<div class="panel panel-default">
								<a data-toggle="collapse" href="#collapse3">
									<div class="panel-heading">
										<h4 class="panel-title">
											Search
											<span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
										</h4>
									</div>
								</a>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-footer">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="ScontrolNum">Control Number:</label>
													<input type="text" class="form-control" id="ScontrolNum">
												</div>
												<div class="form-group">
													<label for="SmodelNum">Model Number:</label>
													<input type="text" class="form-control" id="SmodelNum">
												</div>
												<div class="form-group">
													<label for="Smanufacturer">Manufacturer:</label>
													<input type="text" class="form-control" id="Smanufacturer">
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="SdateOfPurchaseFrom">Date of Purchase (from) (mm/dd/yyyy):</label>
															<input type="text" class="form-control" id="SdateOfPurchaseFrom">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="SdateOfPurchaseTo">Date of Purchase (to) (mm/dd/yyyy):</label>
															<input type="text" class="form-control" id="SdateOfPurchaseTo">
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-4">
														<div class="form-group">
															<label for="SradioStatus">Status:</label>
															<select class="form-control" id="SradioStatus">
																<option>Checked In</option>
																<option>Checked Out</option>
																<option>Inactive</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<label for="Sheadphones">Headphones:</label>
															<select class="form-control" id="Sheadphones">
																<option></option>
																<option>Yes</option>
																<option>No</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<label for="Sbattery">Battery:</label>
															<select class="form-control" id="Sbattery">
																<option></option>
																<option>Yes</option>
																<option>No</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-4">
														<div class="form-group">
															<label for="Swave">Wave:</label>
															<select class="form-control" id="Swave">
																<option></option>
																<option>Short</option>
																<option>Long</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<label for="SradioCondition">Condition:</label>
															<select class="form-control" id="SradioCondition">
																<option></option>
																<option>Good</option>
																<option>Fair</option>
																<option>Poor</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="Snotes">Notes:</label>
													<textarea class="form-control" rows="2" id="Snotes"></textarea>
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
								<a data-toggle="collapse" href="#collapse4">
									<div class="panel-heading">
										<h4 class="panel-title">
											Inactive Tabs
											<span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
										</h4>
									</div>
								</a>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-footer">
										<div id="tabRow">
											<div style="float: left;"><button type="button" class="btn btn-default">Date Of Purchase</button></div>
											<div style="float: left;"><button type="button" class="btn btn-default">Note</button></div>
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
										<th>Control Number<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Model Number<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Manufacturer<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>DOP<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Status<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Headphones<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Battery<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Wave<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
										<th>Condition<button type="button" class="btn btn-default btn-xs" style="float: right;">
											<span class="glyphicon glyphicon-sort"></span>
										</button></th>
									</tr>
								</thead>
								<tbody>
									<?php
										$fields = array("controlNum", "modelNum", "manufacturer", "dateOfPurchase", "radioStatus", "headphones", "battery", "wave", "radioCondition");
										$SQL = "SELECT * FROM radio;";
										$result = mysqli_query($db, $SQL);
										
										while($row = mysqli_fetch_assoc($result)) {
											echo('<tr id="'.$row['radioId'].'" class="radioRow">');
											foreach($fields as $field) {
												echo('<td>'.$row[$field].'</td>');
											}
											echo('</tr>');
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div id="importExport">
						<br>
						<form method="POST" action="importExport/export.php">
							<input type="submit" name="exportRadios" value="Export">
						</form>
						<br>
						<form action="importExport/import.php" method="POST" enctype="multipart/form-data">
							<input type="file" name="userFile">
							<input type="submit" name="importRadios" value="Upload">
						</form>
					</div>
				</div>
				

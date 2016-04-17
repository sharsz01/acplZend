<div id="users" class="tab-pane fade">
    <h3 style="float: left;">Users</h3>
    
    <div id="importExport" style="float: right; margin: 10px 0px;">
        <form method="POST" action="" style="float: right;">
            <input type="submit" onclick="exportUser()" class="btn btn-primary" name="exportUsers" value="Export" style="float: right;">
        </form>

        <form action="importExport/import.php" method="POST" enctype="multipart/form-data" style="float: right;">
            <input type="submit" class="btn btn-default" name="importUsers" value="Upload" style="float: right; margin-right: 20px;">
            <input type="file" class="btn btn-default" name="userFile" style="float: right; margin-right: 20px;">
        </form>
    </div>
    
    <div id="userList">
        <div class="panel-group">
            <div class="panel panel-default">
                <a data-toggle="collapse" href="#user-search-collapse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Search
                            <span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
                        </h4>
                    </div>
                </a>
                <div id="user-search-collapse" class="panel-collapse collapse">
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-firstName">First Name:</label>
                                            <input type="text" class="form-control" id="user-search-firstName">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-lastName">Last Name:</label>
                                            <input type="text" class="form-control" id="user-search-lastName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-dobFrom">Date of Birth (from) (mm/dd/yyyy):</label>
                                            <input type="text" class="form-control" id="user-search-dobFrom">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-dobTo">Date of Birth (to) (mm/dd/yyyy):</label>
                                            <input type="text" class="form-control" id="user-search-dobTo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user-search-address">Address:</label>
                                    <input type="text" class="form-control" id="user-search-address">
                                </div>
                                <div class="form-group">
                                    <label for="user-search-address2">Address Line 2:</label>
                                    <input type="text" class="form-control" id="user-search-address2">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-city">City:</label>
                                            <input type="text" class="form-control" id="user-search-city">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="user-search-state">State:</label>
                                            <input type="text" class="form-control" id="user-search-state">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-zip">Zip:</label>
                                            <input type="number" class="form-control" id="user-search-zip">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-phone">Phone:</label>
                                            <input type="tel" class="form-control" id="user-search-phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-phone2">Alternate Phone:</label>
                                            <input type="tel" class="form-control" id="user-search-phone2">
                                        </div>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="user-search-email">Email:</label>
                                    <input type="email" class="form-control" id="user-search-email">
                                </div>
                                <div class="form-group">
                                    <label for="user-search-notes">Notes:</label>
                                    <textarea class="form-control" rows="5" id="user-search-notes"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-contactFirstName">Contact First Name:</label>
                                            <input type="text" class="form-control" id="user-search-contactFirstName">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-contactLastName">Contact Last Name:</label>
                                            <input type="text" class="form-control" id="user-search-contactLastName">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user-search-contactAddress">Contact Address:</label>
                                    <input type="text" class="form-control" id="user-search-contactAddress">
                                </div>
                                <div class="form-group">
                                    <label for="user-search-contactAddress2">Contact Address Line 2:</label>
                                    <input type="text" class="form-control" id="user-search-contactAddress2">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-contactCity">Contact City:</label>
                                            <input type="text" class="form-control" id="user-search-contactCity">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="user-search-contactState">State:</label>
                                            <input type="text" class="form-control" id="user-search-contactState">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-contactZip">Contact Zip:</label>
                                            <input type="number" class="form-control" id="user-search-contactZip">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-contactPhone">Contact Phone:</label>
                                            <input type="tel" class="form-control" id="user-search-contactPhone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user-search-contactPhone2">Contact Alternate Phone:</label>
                                            <input type="tel" class="form-control" id="user-search-contactPhone2">
                                        </div>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="user-search-contactEmail">Contact Email:</label>
                                    <input type="email" class="form-control" id="user-search-contactEmail">
                                </div>
                                <div class="form-group">
                                    <label for="user-search-contactRelationship">Relationship:</label>
                                    <input type="text" class="form-control" id="user-search-contactRelationship">
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-status">Status:</label>
                                            <select class="form-control" id="user-search-status">
												<option></option>
                                                <option>Applicant</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-medium">Medium:</label>
                                            <select class="form-control" id="user-search-medium">
												<option></option>
                                                <option>Radio</option>
                                                <option>Mobile App</option>
                                                <option>PBS 39.4</option>
                                                <option>Streaming</option>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-mailTo">Mail To:</label>
                                            <select class="form-control" id="user-search-mailTo">
												<option></option>
                                                <option>toListener</option>
                                                <option>toContact</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-disability">Disability:</label>
                                            <input type="text" class="form-control" id="user-search-disability">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-otherDisability">Other Disability:</label>
                                            <input type="text" class="form-control" id="user-search-otherDisability">
                                        </div>
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-howLearn">How Learn:</label>
                                            <input type="text" class="form-control" id="user-search-howLearn">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-race">Race:</label>
                                            <input type="text" class="form-control" id="user-search-race">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-income">Income:</label>
                                            <input type="text" class="form-control" id="user-search-income">
                                        </div>
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="user-search-inHomeNum">People in Home:</label>
                                            <input type="text" class="form-control" id="user-search-inHomeNum">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
									<div class="col-sm-6">
										<button id="user-search-btn" type="button" class="btn btn-primary btn-block">Search</button>
									</div>
									<div class="col-sm-6">
										<button id="user-search-clear-btn" type="button" class="btn btn-default btn-block">Clear Search</button>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group">
            <div class="panel panel-default">
                <a data-toggle="collapse" href="#user-inactive-collapse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Inactive Tabs
                            <span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
                        </h4>
                    </div>
                </a>
                <div id="user-inactive-collapse" class="panel-collapse collapse">
                    <div class="panel-footer">
                        <div id="tabRow">
                            <div style="float: left;"><button type="button" id="user-firstNameBtn" class="inactiveBtns btn btn-default">First Name</button></div>
                            <div style="float: left;"><button type="button" id="user-lastNameBtn" class="inactiveBtns btn btn-default">Last Name</button></div>
                            <div style="float: left;"><button type="button" id="user-dobBtn" class="inactiveBtns btn btn-default">DOB</button></div>
                            <div style="float: left;"><button type="button" id="user-streetBtn" class="inactiveBtns btn btn-default">Street</button></div>

                            <div style="float: left;"><button type="button" id="user-streetLine2Btn" class="inactiveBtns btn btn-default">Street Line 2</button></div>
                            <div style="float: left;"><button type="button" id="user-cityBtn" class="inactiveBtns btn btn-default">City</button></div>
                            <div style="float: left;"><button type="button" id="user-stateBtn" class="inactiveBtns btn btn-default">State</button></div>
                            <div style="float: left;"><button type="button" id="user-zipBtn" class="inactiveBtns btn btn-default">Zip</button></div>

                            <div style="float: left;"><button type="button" id="user-phoneBtn" class="inactiveBtns btn btn-default">Phone</button></div>
                            <div style="float: left;"><button type="button" id="user-phone2Btn" class="inactiveBtns btn btn-default">Alternate Phone</button></div>
                            <div style="float: left;"><button type="button" id="user-emailBtn" class="inactiveBtns btn btn-default">Email</button></div>


                            <div style="float: left;"><button type="button" id="user-contactFirstNameBtn" class="inactiveBtns btn btn-default">Contact First</button></div>
                            <div style="float: left;"><button type="button" id="user-contactLastNameBtn" class="inactiveBtns btn btn-default">Contact Last</button></div>
                            <div style="float: left;"><button type="button" id="user-contactStreetBtn" class="inactiveBtns btn btn-default">Contact Street</button></div>
                            <div style="float: left;"><button type="button" id="user-contactStreetLine2Btn" class="inactiveBtns btn btn-default">Contact Street Line 2</button></div>
                            <div style="float: left;"><button type="button" id="user-contactCityBtn" class="inactiveBtns btn btn-default">Contact City</button></div>
                            <div style="float: left;"><button type="button" id="user-contactStateBtn" class="inactiveBtns btn btn-default">Contact State</button></div>
                            <div style="float: left;"><button type="button" id="user-contactZipBtn" class="inactiveBtns btn btn-default">Contact Zip</button></div>
                            <div style="float: left;"><button type="button" id="user-contactEmailBtn" class="inactiveBtns btn btn-default">Contact Email</button></div>
                            <div style="float: left;"><button type="button" id="user-contactPhoneBtn" class="inactiveBtns btn btn-default">Contact Phone</button></div>
                            <div style="float: left;"><button type="button" id="user-contactPhone2Btn" class="inactiveBtns btn btn-default">Contact Alternate Phone</button></div>

                            <div style="float: left;"><button type="button" id="user-disabilityBtn" class="inactiveBtns btn btn-default">Disability</button></div>
                            <div style="float: left;"><button type="button" id="user-otherDisabilityBtn" class="inactiveBtns btn btn-default">Other Disability</button></div>
                            <div style="float: left;"><button type="button" id="user-raceBtn" class="inactiveBtns btn btn-default">Race</button></div>
                            <div style="float: left;"><button type="button" id="user-incomeBtn" class="inactiveBtns btn btn-default">Income</button></div>
                            <div style="float: left;"><button type="button" id="user-inHomeNumBtn" class="inactiveBtns btn btn-default"># in Home</button></div>
                            <div style="float: left;"><button type="button" id="user-dateRegisteredBtn" class="inactiveBtns btn btn-default">Date Registered</button></div>
                            <div style="float: left;"><button type="button" id="user-mailToBtn" class="inactiveBtns btn btn-default">Mail To</button></div>
                            <div style="clear: both;"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="form-group">
            <button type="button" id="clearUserTable" class="btn btn-danger">Clear Table</button>
            <button type="button" id="userTableDefaults" class="btn btn-default">Default</button>
        </div>
		
        <div class="table-responsive">
            <table id="usersTable" class="table table-striped table-bordered table-hover table-condensed" width="100%">
                <thead>
                    <tr>
                        <th name="uTable-firstName">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							First
						</th>
						<th name="uTable-lastName">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Last
						</th>
						<th name="uTable-dob">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							DOB
						</th>
						<th name="uTable-street">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Street Line
						</th>

						<th name="uTable-streetLine2">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Street Line 2
						</th>
						<th name="uTable-city">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							City
						</th>
						<th name="uTable-state">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							State
						</th>
						<th name="uTable-zip">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Zip
						</th>
						<th name="uTable-phone">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Phone
						</th>
						<th name="uTable-phone2">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Alt Phone
						</th>
						<th name="uTable-email">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Email
						</th>
						<th name="uTable-contactFirstName">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact First Name
						</th>
						<th name="uTable-contactLastName">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Last Name
						</th>
						<th name="uTable-contactRelationship">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Relationship
						</th>
						<th name="uTable-contactStreet">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Street Line
						</th>
						<th name="uTable-contactStreetLine2">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Street Line 2
						</th>
						<th name="uTable-contactCity">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact City
						</th>
						<th name="uTable-contactState">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact State
						</th>
						<th name="uTable-contactZip">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Zip
						</th>
						<th name="uTable-contactPhone">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Phone
						</th>
						<th name="uTable-contactPhone2">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Alt Phone
						</th>
						<th name="uTable-contactEmail">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Contact Email
						</th>
						<th name="uTable-disability">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Disability
						</th>
						<th name="uTable-otherDisability">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Other Disability
						</th>
						<th name="uTable-howLearn">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							How Learn
						</th>
						<th name="uTable-race">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Race
						</th>
						<th name="uTable-income">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Income
						</th>
						<th name="uTable-inHomeNum">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							# in Home
						</th>
						<th name="uTable-dateRegistered">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Date Registered
						</th>
						<th name="uTable-mailTo">
							<div class="handle"></div>
							<div class="close user-close glyphicon glyphicon-remove-circle"></div>
							Mail To
						</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fields = array("firstName", "lastName", "birthday", "street", "streetLine2", "city", "state", "zip", 
						"phone", "phone2", "email", "contactFirstName", "contactLastName", "contactRelationship", 
						"contactStreet", "contactStreetLine2", "contactCity", "contactState", "contactZip", "contactPhone", 
						"contactPhone2", "contactEmail", "disability", "otherDisability", "howLearn", "race", "income", 
						"inHomeNum", "dateRegistered", "mailTo");

                    $SQL = "SELECT * FROM user;";
                    $result = mysqli_query($db, $SQL);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo('<tr id="userRow" data-id="' . $row['userId'] . '" class="userRow">');
                        foreach ($fields as $field) {
                            echo('<td>' . $row[$field] . '</td>');
                        }
                        echo('</tr>');
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
	
</div>

<script>
	function exportUser()
    {
        //get the users table as diaplyed on the web page
        var table = document.getElementById("usersTable").innerHTML;
        //this is used to strip heml code out of the table
        //this is needed to properly export
        var data = table.replace(/<td>/g, '')
                .replace(/<tr>/g, '')
                .replace(/<thead>/g, '')
                .replace(/<\/thead>/g, '')
                .replace(/<tr role="...">/g, '')
                .replace(/<th class="sort.{0,170};">/g, '')
                .replace(/<div class="handle">/g, '')
                .replace(/<\/div>/g, '')
                .replace(/<\/th>/g, ',')
                .replace(/<tbody>/g, '')
                .replace(/<\/tbody>/g, '')
                .replace(/(<tr id="userRow" data-id=".." class="userRow odd" role="row">)/g, '')
                .replace(/(<tr id="userRow" data-id=".." class="userRow even" role="row">)/g, '')
                .replace(/(<tr id="userRow" data-id="." class="userRow odd" role="row">)/g, '')
                .replace(/(<tr id="userRow" data-id="." class="userRow even" role="row">)/g, '')
                .replace(/<\/td>/g, ',')
                .replace(/\t/g, '')
                .replace(/                    /g, '')
                .replace(/                /g, '')
                .replace(/\r?\n|\r/g, '')
                .replace(/<\/tr>/g, '\r\n')
                .replace(/<td class="sorting_1">/g, '');
        //get the date
        var date = new Date();
        //prepare a link for the .csv file to be downloaded from
        var link = document.createElement('a');
        //create the file
        link.download = "userExport_" + date.getHours() + date.getMinutes() + date.getSeconds() + ".csv";
        //populate the file with data
        link.href = "data:application/csv," + escape(data);
        //simulate the user clicking, and thus downloading the file
        link.click();
    }
</script>

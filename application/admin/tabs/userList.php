<div id="users" class="tab-pane fade">
    <h3 style="float: left;">Users</h3>
    
    <div id="importExport" style="float: right; margin: 10px 0px;">
        <form method="POST" action="importExport/export.php" style="float: right;">
            <input type="submit" class="btn btn-primary" name="exportUsers" value="Export" style="float: right;">
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
            <table id="usersTable" class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th><div class="handle"></div>First</th>
                        <th><div class="handle"></div>Last</th>
                        <th><div class="handle"></div>Email</th>
                        <th><div class="handle"></div>DOB</th>
                        <th><div class="handle"></div>Street Line</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fields = array("firstName", "lastName", "email", "birthday", "street");

                    /*
                      $fields = array("firstName", "lastName", "email", "birthday", "address", "address2", "city", "state", "zip", "phone", "altPhone", "email", "contactName", "contactRelationship", "contactAddress", "contactAddress2", "contactCity", "contactState", "contactZip", "contactPhone", "contactAltPhone", "contactEmail", "disability", "howLearn", "race", "income", "inHomeNum", "signature", "dateSigned", "mailTo");
                     */

                    $SQL = "SELECT * FROM user;";
                    $result = mysqli_query($db, $SQL);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo('<tr data-id="' . $row['userId'] . '" class="userRow">');
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

<div id = "organizations" class="tab-pane fade">
    <h3 style="float: left;">Organizations</h3>

    <div id="importExport" style="float: right; margin: 10px 0px;">
        <form method="POST" action="" style="float: right;">
            <input type="submit" onclick="exportOrg()" class="btn btn-primary" name="exportOrganization" value="Export" style="float: right;">
        </form>

        <form action="importExport/import.php" method="POST" enctype="multipart/form-data" style="float: right;">
            <input type="submit" class="btn btn-default" name="importOrganization" value="Upload" style="float: right; margin-right: 20px;">
            <input type="file" class="btn btn-default" name="userFile" style="float: right; margin-right: 20px;">
        </form>
    </div>

    <div id="organizationList">
        <div class="panel-group">
            <div class="panel panel-default">
                <a data-toggle="collapse" href="#org-search-collapse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Search
                            <span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
                        </h4>
                    </div>
                </a>
                <div id="org-search-collapse" class="panel-collapse collapse">
                    <div class="panel-footer">
                        <div class="row">

                            <!-- left column -->
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="org-search-organizationName">Organization Name:</label>
                                            <input type="text" class="form-control" id="org-search-organizationName">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="org-search-organizationType">Organization Type:</label>
                                            <input type="text" class="form-control" id="org-search-organizationType">
                                        </div>
                                    </div>
                                </div>

                                <label>Staff Representative</label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="org-search-firstName">First Name:</label>
                                            <input type="text" class="form-control" id="org-search-firstName">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="org-search-lastName">Last Name:</label>
                                            <input type="text" class="form-control" id="org-search-lastName">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="org-search-positionTitle">Position Title:</label>
                                            <input type="text" class="form-control" id="org-search-positionTitle">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="org-search-radiosReqNum">Radios Requested:</label>
                                        <input type="number" class="form-control" id="org-search-radiosReqNum">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="org-search-licBedsNum">Licensed Beds:</label>
                                        <input type="number" class="form-control" id="org-search-licBedsNum">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="org-search-resUnitsNum">Residential Units:</label>
                                        <input type="number" class="form-control" id="org-search-resUnitsNum">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="org-search-notes">Notes:</label>
                                    <textarea class="form-control" rows="4" id="org-search-notes"></textarea>
                                </div>
                            </div>

                            <!-- right column -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="org-search-address">Address:</label>
                                    <input type="text" class="form-control" id="org-search-address">
                                </div>

                                <div class="form-group">
                                    <label for="org-search-address2">Address 2:</label>
                                    <input type="text" class="form-control" id="org-search-address2">
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="org-search-city">City:</label>
                                            <input type="text" class="form-control" id="org-search-city">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="org-search-state">State:</label>
                                            <input type="text" class="form-control" id="org-search-state">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="org-search-zip">Zip:</label>
                                            <input type="number" class="form-control" id="org-search-zip">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="org-search-phone">Phone:</label>
                                            <input type="tel" class="form-control" id="org-search-phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="org-search-phone2">Phone 2:</label>
                                            <input type="tel" class="form-control" id="org-search-phone2">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="org-search-email">Email:</label>
                                    <input type="email" class="form-control" id="org-search-email">
                                </div>
								
								<div class="row">
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="org-search-howLearn">How Learn:</label>
                                            <input type="text" class="form-control" id="org-search-howLearn">
                                        </div>
                                    </div>
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="org-search-status">Status:</label>
                                            <select class="form-control" id="org-search-status">
												<option></option>
                                                <option>Applicant</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
								</div>
								
								<div class="row">
									<div class="col-sm-6">
										<button id="org-search-btn" type="button" class="btn btn-primary btn-block">Search</button>
									</div>
									<div class="col-sm-6">
										<button id="org-search-clear-btn" type="button" class="btn btn-default btn-block">Clear Search</button>
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
                <a data-toggle="collapse" href="#org-inactive-collapse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Inactive Tabs<span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
                        </h4>
                    </div>
                </a>
                <div id="org-inactive-collapse" class="panel-collapse collapse">
                    <div class="panel-footer">
                        <div id="tabRow">
                            <button type="button" id="org-organizationNameBtn" class="inactiveOrgBtns btn btn-default">Organization Name</button>
                            <button type="button" id="org-organizationTypeBtn" class="inactiveOrgBtns btn btn-default">Organization Type</button>
                            <button type="button" id="org-firstNameBtn" class="inactiveOrgBtns btn btn-default">Staff First Name</button>
                            <button type="button" id="org-lastNameBtn" class="inactiveOrgBtns btn btn-default">Staff Last Name</button>
                            <button type="button" id="org-positionTitleBtn" class="inactiveOrgBtns btn btn-default">Staff Position Title</button>
                            <button type="button" id="org-streetBtn" class="inactiveOrgBtns btn btn-default">Street</button>
                            <button type="button" id="org-streetLine2Btn" class="inactiveOrgBtns btn btn-default">Street Line 2</button>
                            <button type="button" id="org-cityBtn" class="inactiveOrgBtns btn btn-default">City</button>
                            <button type="button" id="org-stateBtn" class="inactiveOrgBtns btn btn-default">State</button>
                            <button type="button" id="org-zipBtn" class="inactiveOrgBtns btn btn-default">Zip</button>
                            <button type="button" id="org-phoneBtn" class="inactiveOrgBtns btn btn-default">Office Phone #</button>
                            <button type="button" id="org-phone2Btn" class="inactiveOrgBtns btn btn-default">Cell Phone #</button>
                            <button type="button" id="org-emailBtn" class="inactiveOrgBtns btn btn-default">Email</button>
                            <button type="button" id="org-numRadiosBtn" class="inactiveOrgBtns btn btn-default"># of Radios</button>
                            <button type="button" id="org-numLicensedBedsBtn" class="inactiveOrgBtns btn btn-default"># of Licensed Beds</button>
                            <button type="button" id="org-numResidentialUnitsBtn" class="inactiveOrgBtns btn btn-default"># of Residential Units</button>
                            <button type="button" id="org-howLearnBtn" class="inactiveOrgBtns btn btn-default">How Service Was Learned</button>
                            <button type="button" id="org-statusBtn" class="inactiveOrgBtns btn btn-default">Status</button>
                            <button type="button" id="org-mediumBtn" class="inactiveOrgBtns btn btn-default">Medium</button>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="form-group">
            <button type="button" id="clearOrgTable" class="btn btn-danger">Clear Table</button>
            <button type="button" id="orgTableDefaults" class="btn btn-default">Default</button>
        </div>
		
        <div class="table-responsive">
            <table id="organizationsTable" class="table table-striped table-bordered table-hover table-condensed" width="100%">
                <thead>
                    <tr>
                        <th id="oTable-organizationName" name="oTable-organizationName">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Organization Name
						</th>
							<th id="oTable-organizationType" name="oTable-organizationType">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Organization Type 
						</th>
						<th id="oTable-firstName" name="oTable-firstName">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Staff First Name
						</th>
						<th id="oTable-lastName" name="oTable-lastName">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Staff Last Name
						</th>
						<th id="oTable-positionTitle" name="oTable-positionTitle">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Staff Position Title
						</th>
						<th id="oTable-street" name="oTable-street">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Street Line
						</th>
						<th id="oTable-streetLine2" name="oTable-streetLine2">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Street Line 2
						</th>
						<th id="oTable-city" name="oTable-city">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							City
						</th>
						<th id="oTable-state" name="oTable-state">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							State
						</th>
						<th id="oTable-zip" name="oTable-zip">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Zip
						</th>
						<th id="oTable-phone" name="oTable-phone">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Office Phone #
						</th>
						<th id="oTable-phone2" name="oTable-phone2">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Cell Phone #
						</th>
						<th id="oTable-email" name="oTable-email">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Email
						</th>
						<th id="oTable-numRadios" name="oTable-numRadios">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							# of Radios
						</th>

						<th id="oTable-numLicensedBeds" name="oTable-numLicensedBeds">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							# of Licensed Beds 
						</th>
						<th id="oTable-numResidentialUnits" name="oTable-numResidentialUnits">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							# of Residential Units
						</th>
						<th id="oTable-howLearn" name="oTable-howLearn">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							How They Learned About Service
						</th>
						<th id="oTable-status" name="oTable-status">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Status
						</th>
						<th id="oTable-medium" name="oTable-medium">
							<div class="handle"></div>
							<div class="close org-close glyphicon glyphicon-remove-circle"></div>
							Medium
						</th>
                    </tr>
                <thead>
                <tbody>
                    <?php
                    $fields = array("organizationName", "organizationType", "firstName", "lastName", "positionTitle", "street", 
						"streetLine2", "city", "state", "zip", "phone", "phone2", "email", "numRadios", "numLicensedBeds", 
						"numResidentialUnits", "howLearn", "status", "medium");
                    $SQL = "SELECT organizationId, DATE_FORMAT(dateRegistered,'%m/%d/%Y') AS 'dateRegistered', ipRegistered, organizationName, "
								."organizationType, firstName, lastName, positionTitle, street, streetLine2, city, state, zip, phone, phone2, email, numRadios, "
								."numLicensedBeds, numResidentialUnits, howLearn, status, medium, signature, notes, alert_status FROM organization;";
                    $result = mysqli_query($db, $SQL);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo('<tr data-id="' . $row['organizationId'] . '" class="organizationRow">');
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
	function exportOrg()
    {
        //get the organization table as displayed on the web page
        var table = document.getElementById("organizationsTable").innerHTML;
        //this is used to strip html code out of the table.
        //this is needed to properly export
        var data = table.replace(/<td>/g, '')
		.replace(/,/g, '')
                .replace(/<tr>/g, '')
                .replace(/<thead>/g, '')
                .replace(/<\/thead>/g, '')
                .replace(/<tr role="row">/g, '')
                .replace(/<div class="handle">/g, '')
                .replace(/<\/div>/g, '')
                .replace(/<\/th>/g, ',')
                .replace(/<tbody>/g, '')
                .replace(/<\/tbody>/g, '')
                .replace(/(<tr id="organizationsTable" data-id=".." class="organizationsTable odd" role="row">)/g, '')
                .replace(/(<tr id="organizationsTable" data-id=".." class="organizationsTable even" role="row">)/g, '')
                .replace(/(<tr id="organizationsTable" data-id="." class="organizationsTable odd" role="row">)/g, '')
                .replace(/(<tr id="organizationsTable" data-id="." class="organizationsTable even" role="row">)/g, '')
                .replace(/<\/td>/g, ',')
                .replace(/\t/g, '')
                .replace(/   */g, '')
                .replace(/\r?\n|\r/g, '')
		.replace(/<th name.*?">/g, '')
		.replace(/<div class.*?">/g, '')
                .replace(/<\/tr>/g, '\r\n')
                .replace(/<th class=.sort.{0,200}px.../g, '')
                .replace(/<tr data-id.{1,50}>/g, '')
                .replace(/<td class="sorting_1">/g, '');
        //get the date
        var date = new Date();
        //prepare a link for the .csv file to be downloaded from
        var link = document.createElement('a');
        //create the file
        link.download = "organizationExport_" + date.getHours() + date.getMinutes() + date.getSeconds() + ".csv";
        //populate the file with data
        link.href = "data:application/csv," + escape(data);
        //simulate the user clicking, and thus downloading the file
        link.click();
    }
</script>

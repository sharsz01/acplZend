<div id="radios" class="tab-pane fade">
    <h3 style="float: left;">Radios</h3>
    
    <div id="importExport" style="float: right; margin: 10px 0px;">
        <form method="POST" action="" style="float: right;">
            <input type="submit" onclick="exportRadio()" class="btn btn-primary" name="exportRadios" value="Export" style="float: right;">
        </form>

        <form action="importExport/import.php" method="POST" enctype="multipart/form-data" style="float: right;">
            <input type="submit" class="btn btn-default" name="importRadios" value="Upload" style="float: right; margin-right: 20px;">
            <input type="file" class="btn btn-default" name="userFile" style="float: right; margin-right: 20px;">
        </form>
    </div>
    
    <div id="radioList">
        <div class="panel-group">
            <div class="panel panel-default">
                <a data-toggle="collapse" href="#radio-search-collapse">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Search
                            <span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>
                        </h4>
                    </div>
                </a>
                <div id="radio-search-collapse" class="panel-collapse collapse">
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="radio-search-controlNum">Control Number:</label>
                                    <input type="text" class="form-control" id="radio-search-controlNum">
                                </div>
                                <div class="form-group">
                                    <label for="radio-search-modelNum">Model Number:</label>
                                    <input type="text" class="form-control" id="radio-search-modelNum">
                                </div>
                                <div class="form-group">
                                    <label for="radio-search-manufacturer">Manufacturer:</label>
                                    <input type="text" class="form-control" id="radio-search-manufacturer">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="radio-search-dateOfPurchaseFrom">Date of Purchase (from) (mm/dd/yyyy):</label>
                                            <input type="text" class="form-control" id="radio-search-dateOfPurchaseFrom">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="radio-search-dateOfPurchaseTo">Date of Purchase (to) (mm/dd/yyyy):</label>
                                            <input type="text" class="form-control" id="radio-search-dateOfPurchaseTo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="radio-search-radioStatus">Status:</label>
                                            <select class="form-control" id="radio-search-radioStatus">
												<option></option>
                                                <option>Checked In</option>
                                                <option>Checked Out</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="radio-search-headphones">Headphones:</label>
                                            <select class="form-control" id="radio-search-headphones">
                                                <option></option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="radio-search-battery">Battery:</label>
                                            <select class="form-control" id="radio-search-battery">
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
                                            <label for="radio-search-wave">Wave:</label>
                                            <select class="form-control" id="radio-search-wave">
                                                <option></option>
                                                <option>Short</option>
                                                <option>Long</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="radio-search-radioCondition">Condition:</label>
                                            <select class="form-control" id="radio-search-radioCondition">
                                                <option></option>
                                                <option>Good</option>
                                                <option>Fair</option>
                                                <option>Poor</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="radio-search-notes">Notes:</label>
                                    <textarea class="form-control" rows="2" id="radio-search-notes"></textarea>
                                </div>
								<div class="row">
									<div class="col-sm-6">
										<button id="radio-search-btn" type="button" class="btn btn-primary btn-block">Search</button>
									</div>
									<div class="col-sm-6">
										<button id="radio-search-clear-btn" type="button" class="btn btn-default btn-block">Clear Search</button>
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
                            <div style="float: left;"><button type="button" id="radio-controlNumBtn" class="inactiveBtns btn btn-default">Control #</button></div>
                            <div style="float: left;"><button type="button" id="radio-modelNumBtn" class="inactiveBtns btn btn-default">Model #</button></div>
                            <div style="float: left;"><button type="button" id="radio-manufacturerBtn" class="inactiveBtns btn btn-default">Manufacturer</button></div>
                            <div style="float: left;"><button type="button" id="radio-dopBtn" class="inactiveBtns btn btn-default">Date Of Purchase</button></div>
                            <div style="float: left;"><button type="button" id="radio-statusBtn" class="inactiveBtns btn btn-default">Status</button></div>
                            <div style="float: left;"><button type="button" id="radio-headphonesBtn" class="inactiveBtns btn btn-default">Headphones</button></div>
                            <div style="float: left;"><button type="button" id="radio-batteryBtn" class="inactiveBtns btn btn-default">Battery</button></div>
                            <div style="float: left;"><button type="button" id="radio-waveBtn" class="inactiveBtns btn btn-default">Wave</button></div>
                            <div style="float: left;"><button type="button" id="radio-conditionBtn" class="inactiveBtns btn btn-default">Condition</button></div>
                            <div style="float: left;"><button type="button" id="radio-notesBtn" class="inactiveBtns btn btn-default">Notes</button></div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="form-group">
            <button type="button" id="clearRadioTable" class="btn btn-danger">Clear Table</button>
            <button type="button" id="radioTableDefaults" class="btn btn-default">Default</button>
        </div>
		
        <div class="table-responsive">
            <table id="radiosTable" class="table table-striped table-bordered table-hover table-condensed" width="100%">
                <thead>
                    <tr>
                        <th name="rTable-controlNum">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Control Number
						</th>
						<th name="rTable-modelNum">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Model Number
						</th>
						<th name="rTable-manufacturer">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Manufacturer
						</th>
						<th name="rTable-dop">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							DOP
						</th>
						<th name="rTable-status">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Status
						</th>
						<th name="rTable-headphones">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Headphones
						</th>
						<th name="rTable-battery">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Battery
						</th>
						<th name="rTable-wave">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Wave
						</th>
						<th name="rTable-condition">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Condition
						</th>
						<th name="rTable-notes">
							<div class="handle"></div>
							<div class="close radio-close glyphicon glyphicon-remove-circle"></div>
							Notes
						</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fields = array("controlNum", "modelNum", "manufacturer", "dateOfPurchase", "radioStatus", "headphones", "battery", "wave", "radioCondition", "notes");
                    $SQL = "SELECT * FROM radio;";
                    $result = mysqli_query($db, $SQL);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo('<tr data-id="' . $row['radioId'] . '" class="radioRow">');
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
	function exportRadio()
    {
        //get the radio table as displayed on the web page
        var table = document.getElementById("radiosTable").innerHTML;
        //this is used to strip html code out of the table
        //this is needed to properly export
        var data = table.replace(/<td>/g, '')
                .replace(/<tr>/g, '')
                .replace(/<thead>/g, '')
                .replace(/<\/thead>/g, '')
                .replace(/<tr role="row">/g, '')
                .replace(/<div class="handle">/g, '')
                .replace(/<\/div>/g, '')
                .replace(/<\/th>/g, ',')
                .replace(/<tbody>/g, '')
                .replace(/<\/tbody>/g, '')
                .replace(/(<tr id="radiosTable" data-id=".." class="radiosTable odd" role="row">)/g, '')
                .replace(/(<tr id="radiosTable" data-id=".." class="radiosTable even" role="row">)/g, '')
                .replace(/(<tr id="radiosTable" data-id="." class="radiosTable odd" role="row">)/g, '')
                .replace(/(<tr id="radiosTable" data-id="." class="radiosTable even" role="row">)/g, '')
                .replace(/<\/td>/g, ',')
                .replace(/\t/g, '')
                .replace(/   */g, '')
                .replace(/\r?\n|\r/g, '')
                .replace(/<\/tr>/g, '\r\n')
                .replace(/<th class=.sort.{0,200}px.../g, '')
                .replace(/<tr data-id.{1,50}>/g, '')
                .replace(/<td class="sorting_1">/g, '');
        //get the date
        var date = new Date();
        //prepare a link for the .csv file to be downloaded from
        var link = document.createElement('a');
        //create the file
        link.download = "radioExport_" + date.getHours() + date.getMinutes() + date.getSeconds() + ".csv";
        //populate the file with data
        link.href = "data:application/csv," + escape(data);
        //simulate the user clicking, and thus downloading the file
        link.click();

        //window.prompt("copy", data);
    }
</script>

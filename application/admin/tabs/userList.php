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
                                            <label for="SfirstName">First Name:</label>
                                            <input type="text" class="form-control" id="SfirstName">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="SlastName">Last Name:</label>
                                            <input type="text" class="form-control" id="SlastName">
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
                                    <label for="Saddress">Address:</label>
                                    <input type="text" class="form-control" id="Saddress">
                                </div>
                                <div class="form-group">
                                    <label for="Saddress2">Address Line 2:</label>
                                    <input type="text" class="form-control" id="Saddress2">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Scity">City:</label>
                                            <input type="text" class="form-control" id="Scity">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="Sstate">State:</label>
                                            <input type="text" class="form-control" id="Sstate">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="Szip">Zip:</label>
                                            <input type="number" class="form-control" id="Szip">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Semail">Email:</label>
                                    <input type="email" class="form-control" id="Semail">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Sphone">Phone:</label>
                                            <input type="tel" class="form-control" id="Sphone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Sphone2">Alternate Phone:</label>
                                            <input type="tel" class="form-control" id="Sphone2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Snotes">Notes:</label>
                                    <textarea class="form-control" rows="2" id="Snotes"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ScontactFirstName">Contact First Name:</label>
                                            <input type="text" class="form-control" id="ScontactFirstName">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ScontactLastName">Contact Last Name:</label>
                                            <input type="text" class="form-control" id="ScontactLastName">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ScontactAddress">Contact Address:</label>
                                    <input type="text" class="form-control" id="ScontactAddress">
                                </div>
                                <div class="form-group">
                                    <label for="ScontactAddress2">Contact Address Line 2:</label>
                                    <input type="text" class="form-control" id="ScontactAddress2">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ScontactCity">Contact City:</label>
                                            <input type="text" class="form-control" id="ScontactCity">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="ScontactState">State:</label>
                                            <input type="text" class="form-control" id="ScontactState">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="ScontactZip">Contact Zip:</label>
                                            <input type="number" class="form-control" id="ScontactZip">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ScontactEmail">Contact Email:</label>
                                    <input type="email" class="form-control" id="ScontactEmail">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ScontactPhone">Contact Phone:</label>
                                            <input type="tel" class="form-control" id="ScontactPhone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ScontactPhone2">Contact Alternate Phone:</label>
                                            <input type="tel" class="form-control" id="ScontactPhone2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ScontactRelationship">Relationship:</label>
                                    <input type="text" class="form-control" id="ScontactRelationship">
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="Sstatus">Status:</label>
                                            <select class="form-control" id="Sstatus">
                                                <option>Applicant</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="Stype">Type:</label>
                                            <select class="form-control" id="Stype">
                                                <option>Individual</option>
                                                <option>Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="Smedium">Medium:</label>
                                            <select class="form-control" id="Smedium">
                                                <option>Radio</option>
                                                <option>Mobile App</option>
                                                <option>PBS 39.4</option>
                                                <option>Streaming</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button id="userSearchBtn" type="button" class="btn btn-primary btn-block">Search</button>
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

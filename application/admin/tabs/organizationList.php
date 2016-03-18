<div id = "organizations" class="tab-pane fade">
    <h3 style="float: left;">Organizations</h3>

    <div id="importExport" style="float: right; margin: 10px 0px;">
        <form method="POST" action="importExport/export.php" style="float: right;">
            <input type="submit" class="btn btn-primary" name="exportOrganization" value="Export" style="float: right;">
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
								
                                <button id="org-search-Btn" type="button" class="btn btn-primary btn-block">Search</button>
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
                            <button type="button" class="btn btn-default">Organization Type</button>
                            <button type="button" class="btn btn-default">Staff Position Title</button>
                            <button type="button" class="btn btn-default">Street Line 2</button>
                            <button type="button" class="btn btn-default">City</button>
                            <button type="button" class="btn btn-default">State</button>
                            <button type="button" class="btn btn-default">Zip</button>
                            <button type="button" class="btn btn-default">Cell Phone #</button>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table id="organizationsTable" class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th><div class="handle"></div>
                            Organization Name
                        </th>
                        <th><div class="handle"></div>
                            Staff First Name
                        </th>
                        <th><div class="handle"></div>
                            Staff Last Name
                        </th>
                        <th><div class="handle"></div>
                            Street Line
                        </th>
                        <th><div class="handle"></div>
                            Office Phone #
                        </th>
                        <th><div class="handle"></div>
                            # of Radios
                        </th>
                        <th><div class="handle"></div>
                            Email
                        </th>
                    </tr>
                <thead>
                <tbody>
                    <?php
                    $fields = array("organizationName", "firstName", "lastName", "street", "phone", "numRadios", "email");
                    $SQL = "SELECT * FROM organization;";
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
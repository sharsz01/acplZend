<div id = "organizations" class="tab-pane fade">
    <h3>Organizations</h3>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="SorganizationName">Organization Name:</label>
                                    <input type="text" class="form-control" id="SorganizationName">
                                </div>
                            </div>
                        </div>
                        <button id="searchBtn" type="button" class="btn btn-primary btn-block">Search</button>
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
                        <th>
                            Organization Name<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span></button>
                        </th>
                        <th>
                            Staff First Name<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span></button>
                        </th>
                        <th>
                            Staff Last Name<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span></button>
                        </th>
                        <th>
                            Street<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span></button>
                        </th>
                        <th>
                            Office Phone #<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span></button>
                        </th>
                        <th>
                            # of Radios<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span></button>
                        </th>
                        <th>
                            Email<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span></button>
                        </th>
                    </tr>
                <thead>
                <tbody>
                    <?php
                    $fields = array("organizationName", "firstName", "lastName", "street", "phone", "numRadios", "email");
                    $SQL = "SELECT * FROM organization;";
                    $result = mysqli_query($db, $SQL);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo('<tr id="' . $row['organizationId'] . '" class="organizationRow">'
                        );
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

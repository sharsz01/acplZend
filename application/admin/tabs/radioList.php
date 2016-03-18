<div id="radios" class="tab-pane fade">
    <h3 style="float: left;">Radios</h3>
    
    <div id="importExport" style="float: right; margin: 10px 0px;">
        <form method="POST" action="importExport/export.php" style="float: right;">
            <input type="submit" class="btn btn-primary" name="exportRadios" value="Export" style="float: right;">
        </form>

        <form action="importExport/import.php" method="POST" enctype="multipart/form-data" style="float: right;">
            <input type="submit" class="btn btn-default" name="importRadios" value="Upload" style="float: right; margin-right: 20px;">
            <input type="file" class="btn btn-default" name="userFile" style="float: right; margin-right: 20px;">
        </form>
    </div>
    
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
                                <button id="radio-search-btn" type="button" class="btn btn-primary btn-block">Search</button>
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
            <table id="radiosTable" class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th><div class="handle"></div>Control Number<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>Model Number<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>Manufacturer<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>DOP<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>Status<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>Headphones<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>Battery<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>Wave<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                        <th><div class="handle"></div>Condition<button type="button" class="btn btn-default btn-xs" style="float: right;">
                                <span class="glyphicon glyphicon-sort"></span>
                            </button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fields = array("controlNum", "modelNum", "manufacturer", "dateOfPurchase", "radioStatus", "headphones", "battery", "wave", "radioCondition");
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

<div id="radio-details" class="tab-pane fade">
    <h3>Radio Details <button id="newRadio" type="button" class="btn btn-primary btn-sm">New Radio</button></h3>

    <form id="radio-details-form">
        <input type="hidden" name="radio-radioId" id="radio-radioId" />

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="radio-controlNum">Control Number:</label>
                    <input type="text" class="form-control" name="radio-controlNum" id="radio-controlNum">
                </div>
                <div class="form-group">
                    <label for="radio-modelNum">Model Number:</label>
                    <input type="text" class="form-control" name="radio-modelNum" id="radio-modelNum">
                </div>
                <div class="form-group">
                    <label for="radio-manufacturer">Manufacturer:</label>
                    <input type="text" class="form-control" name="radio-manufacturer" id="radio-manufacturer">
                </div>
                <div class="form-group">
                    <label for="radio-dateOfPurchase">Date of Purchase (mm/dd/yyyy):</label>
                    <input type="text" class="form-control" name="radio-dateOfPurchase" id="radio-dateOfPurchase">
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="radio-headphones">Headphones:</label>
                            <select class="form-control" name="radio-headphones" id="radio-headphones">
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="radio-battery">Battery:</label>
                            <select class="form-control" name="radio-battery" id="radio-battery">
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="radio-wave">Wave:</label>
                            <select class="form-control" name="radio-wave" id="radio-wave">
                                <option>short</option>
                                <option>long</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="radio-radioCondition">Condition:</label>
                            <select class="form-control" name="radio-radioCondition" id="radio-radioCondition">
                                <option>good</option>
                                <option>fair</option>
                                <option>poor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="radio-notes">Notes:</label>
                    <textarea class="form-control" rows="2" name="radio-notes" id="radio-notes"></textarea>
                </div>
            </div>
    </form>
    <div class="col-sm-6">
        <label for="radioCheckouts">Check Outs:</label>
        <div id="radioCheckouts">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>Checked Out To</th>
                            <th>Checked Out</th>
                            <th>Checked In</th>
                        </tr>
                    </thead>
                    <tbody>
						
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<button id="newRadioSaveBtn" type="button" class="btn btn-primary hidden">Save New Radio</button>
<button id="newRadioCancelBtn" type="button" class="btn btn-default hidden">Cancel New Radio</button>
<button id="radioSaveBtn" type="button" class="btn btn-primary">Save Changes</button>
<button id="radioCancelBtn" type="button" class="btn btn-default">Cancel Changes</button>

</div>
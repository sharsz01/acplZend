<<<<<<< HEAD
<div id="radio-details" class="tab-pane fade">
    <h3>Radio Details <button id="newRadio" type="button" class="btn btn-primary btn-sm">New Radio</button></h3>

    <form id="radio-details-form">
        <input type="hidden" name="radioId" id="radioId" />

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="controlNum">Control Number:</label>
                    <input type="text" class="form-control" name="controlNum" id="controlNum">
                </div>
                <div class="form-group">
                    <label for="modelNum">Model Number:</label>
                    <input type="text" class="form-control" name="modelNum" id="modelNum">
                </div>
                <div class="form-group">
                    <label for="manufacturer">Manufacturer:</label>
                    <input type="text" class="form-control" name="manufacturer" id="manufacturer">
                </div>
                <div class="form-group">
                    <label for="dateOfPurchase">Date of Purchase (mm/dd/yyyy):</label>
                    <input type="text" class="form-control" name="dateOfPurchase" id="dateOfPurchase">
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="headphones">Headphones:</label>
                            <select class="form-control" name="headphones" id="headphones">
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="battery">Battery:</label>
                            <select class="form-control" name="battery" id="battery">
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="wave">Wave:</label>
                            <select class="form-control" name="wave" id="wave">
                                <option>short</option>
                                <option>long</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="radioCondition">Condition:</label>
                            <select class="form-control" name="radioCondition" id="radioCondition">
                                <option>good</option>
                                <option>fair</option>
                                <option>poor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notes">Notes:</label>
                    <textarea class="form-control" rows="2" name="notes" id="notes"></textarea>
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
                        <tr>
                            <td>John Doe</td>
                            <td>01/01/2015</td>
                            <td><button id="checkIn" type="button" class="btn btn-xs btn-primary">Check In</button></td>
                        </tr>
                        <tr>
                            <td>Jane Doe</td>
                            <td>01/01/2013</td>
                            <td>01/01/2014</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button id="checkOut" type="button" class="btn btn-inactive">Check Out Radio</button>
    </div>
</div>

<button id="newRadioSaveBtn" type="button" class="btn btn-primary hidden">Save New Radio</button>
<button id="newRadioCancelBtn" type="button" class="btn btn-default hidden">Cancel New Radio</button>
<button id="radioSaveBtn" type="button" class="btn btn-primary">Save Changes</button>
<button id="radioCancelBtn" type="button" class="btn btn-default">Cancel Changes</button>

</div>
=======
<div id="radio-details" class="tab-pane fade">
    <h3>Radio Details <button id="newRadio" type="button" class="btn btn-primary btn-sm">New Radio</button></h3>

    <form id="radio-details-form">
        <input type="hidden" name="radioId" id="radioId" />

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="controlNum">Control Number:</label>
                    <input type="text" class="form-control" name="controlNum" id="controlNum">
                </div>
                <div class="form-group">
                    <label for="modelNum">Model Number:</label>
                    <input type="text" class="form-control" name="modelNum" id="modelNum">
                </div>
                <div class="form-group">
                    <label for="manufacturer">Manufacturer:</label>
                    <input type="text" class="form-control" name="manufacturer" id="manufacturer">
                </div>
                <div class="form-group">
                    <label for="dateOfPurchase">Date of Purchase (mm/dd/yyyy):</label>
                    <input type="text" class="form-control" name="dateOfPurchase" id="dateOfPurchase">
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="headphones">Headphones:</label>
                            <select class="form-control" name="headphones" id="headphones">
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="battery">Battery:</label>
                            <select class="form-control" name="battery" id="battery">
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="wave">Wave:</label>
                            <select class="form-control" name="wave" id="wave">
                                <option>short</option>
                                <option>long</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="radioCondition">Condition:</label>
                            <select class="form-control" name="radioCondition" id="radioCondition">
                                <option>good</option>
                                <option>fair</option>
                                <option>poor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notes">Notes:</label>
                    <textarea class="form-control" rows="2" name="notes" id="notes"></textarea>
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
                        <tr>
                            <td>John Doe</td>
                            <td>01/01/2015</td>
                            <td><button id="checkIn" type="button" class="btn btn-xs btn-primary">Check In</button></td>
                        </tr>
                        <tr>
                            <td>Jane Doe</td>
                            <td>01/01/2013</td>
                            <td>01/01/2014</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button id="checkOut" type="button" class="btn btn-inactive">Check Out Radio</button>
    </div>
</div>

<button id="newRadioSaveBtn" type="button" class="btn btn-primary hidden">Save New Radio</button>
<button id="newRadioCancelBtn" type="button" class="btn btn-default hidden">Cancel New Radio</button>
<button id="radioSaveBtn" type="button" class="btn btn-primary">Save Changes</button>
<button id="radioCancelBtn" type="button" class="btn btn-default">Cancel Changes</button>

</div>
>>>>>>> origin/master

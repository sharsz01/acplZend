<div id="organization-details" class="tab-pane fade">
    <h3>Organization Details <button id="newOrganization" type="button" class="btn btn-primary btn-sm">New Organization</button></h3>

    <form id="organization-details-form">
        <input type="hidden" name="org-organizationId" id="org-organizationId" />

        <div class="row">

            <!----------------------- Left Column -------------------------->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="org-organizationName">Organization Name:</label>
                            <input type="text" class="form-control" name="org-organizationName" id="org-organizationName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="org-organizationType">Organization Type:</label>
                            <input type="text" class="form-control" name="org-organizationType" id="org-organizationType">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-firstName">Rep. First Name:</label>
                            <input type="text" class="form-control" name="org-firstName" id="org-firstName">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-lastName">Rep. Last Name:</label>
                            <input type="text" class="form-control" name="org-lastName" id="org-lastName">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-positionTitle">Position Title:</label>
                            <input type="text" class="form-control" name="org-positionTitle" id="org-positionTitle">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="org-street">Address:</label>
                    <input type="text" class="form-control" name="org-street" id="org-street">
                </div>
                <div class="form-group">
                    <label for="org-streetLine2">Address Line 2:</label>
                    <input type="text" class="form-control" name="org-streetLine2" id="org-streetLine2">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="org-city">City:</label>
                            <input type="text" class="form-control" name="org-city" id="org-city">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="org-state">State:</label>
                            <input type="text" class="form-control" name="org-state" id="org-state">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-zip">Zip:</label>
                            <input type="number" class="form-control" name="org-zip" id="org-zip">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="org-phone">Phone:</label>
                            <input type="tel" class="form-control" name="org-phone" id="org-phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="org-phone2">Alternate Phone:</label>
                            <input type="tel" class="form-control" name="org-phone2" id="org-phone2">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="org-email">Email:</label>
                    <input type="email" class="form-control" name="org-email" id="org-email">
                </div>

                <div class="form-group">
                    <label for="org-notes">Notes:</label>
                    <textarea class="form-control" rows="3" name="org-notes" id="org-notes"></textarea>
                </div>

            </div>

            <!----------------------- Right Column -------------------------->

            <div class="col-sm-6">

                <div class="form-group">
                    <label for="org-howLearn">How Organization Learned About Service:</label>
                    <input type="text" class="form-control" name="org-howLearn" id="org-howLearn">
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-numRadios"># of Radios:</label>
                            <input type="text" class="form-control" name="org-numRadios" id="org-numRadios">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-numLicensedBeds"># of License Beds:</label>
                            <input type="text" class="form-control" name="org-numLicensedBeds" id="org-numLicensedBeds">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-numResidentialUnits"># of Res. Units:</label>
                            <input type="text" class="form-control" name="org-numResidentialUnits" id="org-numResidentialUnits">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-status">Status:</label>
                            <select class="form-control" name="org-status" id="org-status">
                                <option>Applicant</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-type">Type:</label>
                            <select class="form-control" name="org-type" id="org-type">
                                <option>Individual</option>
                                <option selected="selected">Organization</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-medium">Medium:</label>
                            <select class="form-control" name="org-medium" id="org-medium">
                                <option>Radio</option>
                                <option>Mobile App</option>
                                <option>PBS 39.4</option>
                                <option>Streaming</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="org-signature">Staff Signature:</label>
                    <input type="text" class="form-control" name="org-signature" id="org-signature">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="org-dateRegistered">Date Registered:</label>
                            <input type="text" class="form-control" name="org-dateRegistered" id="org-dateRegistered">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="org-ipRegistered">IP Registered:</label>
                            <input type="text" class="form-control" name="org-ipRegistered" id="org-ipRegistered">
                        </div>
                    </div>
                </div>

                <label for="organizationRadios">Radios:</label>
                <div id="organizationRadios">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>Radio ID</th>
                                    <th>Checked Out</th>
                                    <th>Check In</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>123456</td>
                                    <td>01/01/2015</td>
                                    <td><button id="checkIn" type="button" class="btn btn-xs btn-primary">Check In</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button id="checkOut" type="button" class="btn btn-primary">Check Out Radio</button>

            </div>
        </div>
    </form>

    <button id="newOrganizationSaveBtn" type="button" class="btn btn-primary hidden">Save New Organization</button>
    <button id="newOrganizationCancelBtn" type="button" class="btn btn-default hidden">Cancel New Organization</button>
    <button id="organizationSaveBtn" type="button" class="btn btn-primary">Save Changes</button>
    <button id="organizationCancelBtn" type="button" class="btn btn-default">Cancel Changes</button>

</div>

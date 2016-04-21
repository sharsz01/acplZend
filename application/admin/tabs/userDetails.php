<div id="user-details" class="tab-pane fade">
	
	<!-- Modal -->
	<div id="user-check-out-modal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Enter Radios to Check Out</h4>
				</div>
				<div class="modal-body">
					<form id="user-check-out-form">
						
					</form>
					<button type="button" class="btn btn-primary btn-sm" id="user-add-radio-btn">Add Radio</button>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="user-check-out-btn">Check Out</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</div>

		</div>
	</div>
	
    <h3>Listener Details <button id="newUser" type="button" class="btn btn-primary btn-sm">New User</button></h3>

    <form id="user-details-form">
        <input type="hidden" name="ind-userId" id="ind-userId" />

        <div class="row">

            <!----------------------- Left Column -------------------------->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-firstName">First Name:</label>
                            <input type="text" class="form-control" name="ind-firstName" id="ind-firstName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-lastName">Last Name:</label>
                            <input type="text" class="form-control" name="ind-lastName" id="ind-lastName">
                        </div>
                    </div>
                </div>
                <!-- Double check - dobFrom is not name from database - -->
                <div class="form-group">
                    <label for="ind-birthday">Date of Birth (mm/dd/yyyy):</label>
                    <input type="text" class="form-control" name="ind-birthday" id="ind-birthday">
                </div>
                <div class="form-group">
                    <label for="ind-street">Address:</label>
                    <input type="text" class="form-control" name="ind-street" id="ind-street">
                </div>
                <div class="form-group">
                    <label for="ind-streetLine2">Address Line 2:</label>
                    <input type="text" class="form-control" name="ind-streetLine2" id="ind-streetLine2">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-city">City:</label>
                            <input type="text" class="form-control" name="ind-city" id="ind-city">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="ind-state">State:</label>
                            <input type="text" class="form-control" name="ind-state" id="ind-state">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-zip">Zip:</label>
                            <input type="number" class="form-control" name="ind-zip" id="ind-zip">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-email">Email:</label>
                    <input type="email" class="form-control" name="ind-email" id="ind-email">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-phone">Phone:</label>
                            <input type="tel" class="form-control" name="ind-phone" id="ind-phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-phone2">Alternate Phone:</label>
                            <input type="tel" class="form-control" name="ind-phone2" id="ind-phone2">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-race">Race:</label>
                            <input type="text" class="form-control" name="ind-race" id="ind-race">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-income">Income:</label>
                            <input type="text" class="form-control" name="ind-income" id="ind-income">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-inHomeNum"># in Home:</label>
                            <input type="text" class="form-control" name="ind-inHomeNum" id="ind-inHomeNum">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ind-disability">Disability/Reason for Service:</label>
                    <input type="text" class="form-control" name="ind-disability" id="ind-disability">
                </div>
                <div class="form-group">
                    <label for="ind-otherDisability">Other Disability/Reason for Service:</label>
                    <input type="text" class="form-control" name="ind-otherDisability" id="ind-otherDisability">
                </div>
                <div class="form-group">
                    <label for="ind-howLearn">How User Learned About Service:</label>
                    <input type="text" class="form-control" name="ind-howLearn" id="ind-howLearn">
                </div>

                <div class="form-group">
                    <label for="ind-notes">Notes:</label>
                    <textarea class="form-control" rows="5" name="ind-notes" id="ind-notes"></textarea>
                </div>
            </div>

            <!----------------------- Right Column -------------------------->

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactFirstName">Contact First Name:</label>
                            <input type="text" class="form-control" name="ind-contactFirstName" id="ind-contactFirstName">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactLastName">Contact Last Name:</label>
                            <input type="text" class="form-control" name="ind-contactLastName" id="ind-contactLastName">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-contactStreet">Contact Address:</label>
                    <input type="text" class="form-control" name="ind-contactStreet" id="ind-contactStreet">
                </div>
                <div class="form-group">
                    <label for="ind-contactStreetLine2">Contact Address Line 2:</label>
                    <input type="text" class="form-control" name="ind-contactStreetLine2" id="ind-contactStreetLine2">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactCity">Contact City:</label>
                            <input type="text" class="form-control" name="ind-contactCity" id="ind-contactCity">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="ind-contactState">State:</label>
                            <input type="text" class="form-control" name="ind-contactState" id="ind-contactState">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-contactZip">Contact Zip:</label>
                            <input type="number" class="form-control" name="ind-contactZip" id="ind-contactZip">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-contactEmail">Contact Email:</label>
                    <input type="email" class="form-control" name="ind-contactEmail" id="ind-contactEmail">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactPhone">Contact Phone:</label>
                            <input type="tel" class="form-control" name="ind-contactPhone" id="ind-contactPhone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactPhone2">Contact Alternate Phone:</label>
                            <input type="tel" class="form-control" name="ind-contactPhone2" id="ind-contactPhone2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-contactRelationship">Relationship:</label>
                    <input type="text" class="form-control" name="ind-contactRelationship" id="ind-contactRelationship">
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-status">Status:</label>
                            <select class="form-control" name="ind-status" id="ind-status">
                                <option>Applicant</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-type">Type:</label>
                            <select class="form-control" name="ind-type" id="ind-type">
                                <option>Individual</option>
                                <option>Organization</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-medium">Medium:</label>
                            <select class="form-control" name="ind-medium" id="ind-medium">
                                <option>Radio</option>
                                <option>Mobile App</option>
                                <option>PBS 39.4</option>
                                <option>Streaming</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-mailTo">Mail Radio To:</label>
                    <input type="text" class="form-control" name="ind-mailTo" id="ind-mailTo">
                </div>

                <div class="form-group">
                    <label for="ind-signature">User Signature:</label>
                    <input type="text" class="form-control" name="ind-signature" id="ind-signature">
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-dateRegistered">Date Registered:</label>
                            <input type="text" class="form-control" name="ind-dateRegistered" id="ind-dateRegistered">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-ipRegistered">IP Registered:</label>
                            <input type="text" class="form-control" name="ind-ipRegistered" id="ind-ipRegistered">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-dateSigned">Date Signed:</label>
                            <input type="text" class="form-control" name="ind-dateSigned" id="ind-dateSigned">
                        </div>
                    </div>
                </div>

                <label for="userRadios">Radios:</label>
                <div id="userRadios">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>Control Number</th>
                                    <th>Checked Out</th>
                                    <th>Check In</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Trigger the modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user-check-out-modal" id="user-check-out-modal-btn">Check Out Radio</button>
				
            </div>
        </div>
    </form>

    <button id="newUserSaveBtn" type="button" class="btn btn-primary hidden">Save New User</button>
    <button id="newUserCancelBtn" type="button" class="btn btn-default hidden">Cancel New User</button>
    <button id="userSaveBtn" type="button" class="btn btn-primary">Save Changes</button>
    <button id="userCancelBtn" type="button" class="btn btn-default">Cancel Changes</button>

</div>

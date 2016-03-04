<div id="user-details" class="tab-pane fade">
    <h3>User Details <button id="newUser" type="button" class="btn btn-primary btn-sm">New User</button></h3>

    <form id="user-details-form">
        <input type="hidden" name="userId" id="userId" />
		
        <div class="row">
		
			<!----------------------- Left Column -------------------------->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-firstName">First Name:</label>
                            <input type="text" class="form-control" name="firstName" id="ind-firstName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-lastName">Last Name:</label>
                            <input type="text" class="form-control" name="lastName" id="ind-lastName">
                        </div>
                    </div>
                </div>
				<!-- Double check - dobFrom is not name from database - -->
                <div class="form-group">
                    <label for="ind-birthday">Date of Birth (mm/dd/yyyy):</label>
                    <input type="text" class="form-control" name="birthday" id="ind-birthday">
                </div>
                <div class="form-group">
                    <label for="ind-street">Address:</label>
                    <input type="text" class="form-control" name="street" id="ind-street">
                </div>
                <div class="form-group">
                    <label for="ind-streetLine2">Address Line 2:</label>
                    <input type="text" class="form-control" name="streetLine2" id="ind-streetLine2">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-city">City:</label>
                            <input type="text" class="form-control" name="city" id="ind-city">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="ind-state">State:</label>
                            <input type="text" class="form-control" name="state" id="ind-state">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-zip">Zip:</label>
                            <input type="number" class="form-control" name="zip" id="ind-zip">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-email">Email:</label>
                    <input type="email" class="form-control" name="email" id="ind-email">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-phone">Phone:</label>
                            <input type="tel" class="form-control" name="phone" id="ind-phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-phone2">Alternate Phone:</label>
                            <input type="tel" class="form-control" name="phone2" id="ind-phone2">
                        </div>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="ind-race">Race:</label>
							<input type="text" class="form-control" name="race" id="ind-race">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="ind-income">Income:</label>
							<input type="text" class="form-control" name="income" id="ind-income">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="ind-inHomeNum"># in Home:</label>
							<input type="text" class="form-control" name="inHomeNum" id="ind-inHomeNum">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label for="ind-disability">Disability/Reason for Service:</label>
					<input type="text" class="form-control" name="disability" id="ind-disability">
				</div>
				<div class="form-group">
					<label for="ind-otherDisability">Other Disability/Reason for Service:</label>
					<input type="text" class="form-control" name="otherDisability" id="ind-otherDisability">
				</div>
				<div class="form-group">
					<label for="ind-howLearn">How User Learned About Service:</label>
					<input type="text" class="form-control" name="howLearn" id="ind-howLearn">
				</div>
				
                <div class="form-group">
                    <label for="ind-notes">Notes:</label>
                    <textarea class="form-control" rows="5" name="notes" id="ind-notes"></textarea>
                </div>
            </div>
			
			<!----------------------- Right Column -------------------------->
			
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactFirstName">Contact First Name:</label>
                            <input type="text" class="form-control" name="contactFirstName" id="ind-contactFirstName">
                        </div>
                    </div>
					
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactLastName">Contact Last Name:</label>
                            <input type="text" class="form-control" name="contactLastName" id="ind-contactLastName">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-contactStreet">Contact Address:</label>
                    <input type="text" class="form-control" name="contactStreet" id="ind-contactStreet">
                </div>
                <div class="form-group">
                    <label for="ind-contactStreetLine2">Contact Address Line 2:</label>
                    <input type="text" class="form-control" name="contactStreetLine2" id="ind-contactStreetLine2">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactCity">Contact City:</label>
                            <input type="text" class="form-control" name="contactCity" id="ind-contactCity">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="ind-contactState">State:</label>
                            <input type="text" class="form-control" name="contactState" id="ind-contactState">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-contactZip">Contact Zip:</label>
                            <input type="number" class="form-control" name="contactZip" id="ind-contactZip">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-contactEmail">Contact Email:</label>
                    <input type="email" class="form-control" name="contactEmail" id="ind-contactEmail">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactPhone">Contact Phone:</label>
                            <input type="tel" class="form-control" name="contactPhone" id="ind-contactPhone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ind-contactPhone2">Contact Alternate Phone:</label>
                            <input type="tel" class="form-control" name="contactPhone2" id="ind-contactPhone2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ind-contactRelationship">Relationship:</label>
                    <input type="text" class="form-control" name="contactRelationship" id="ind-contactRelationship">
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-status">Status:</label>
                            <select class="form-control" name="status" id="ind-status">
                                <option>Applicant</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-type">Type:</label>
                            <select class="form-control" name="type" id="ind-type">
                                <option>Individual</option>
                                <option>Organization</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ind-medium">Medium:</label>
                            <select class="form-control" name="medium" id="ind-medium">
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
                    <input type="text" class="form-control" name="mailTo" id="ind-mailTo">
                </div>
				
				<div class="form-group">
					<label for="org-signature">User Signature:</label>
					<input type="text" class="form-control" name="signature" id="org-signature">
				</div>
				
				<div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-dateRegistered">Date Registered:</label>
                            <input type="text" class="form-control" name="dateRegistered" id="org-dateRegistered">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-ipRegistered">IP Registered:</label>
                            <input type="text" class="form-control" name="ipRegistered" id="org-ipRegistered">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="org-dateSigned">Date Signed:</label>
                            <input type="text" class="form-control" name="dateSigned" id="org-dateSigned">
                        </div>
                    </div>
                </div>
				
				<label for="userRadios">Radios:</label>
				<div id="userRadios">
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
	
	<button id="newUserSaveBtn" type="button" class="btn btn-primary hidden">Save New User</button>
	<button id="newUserCancelBtn" type="button" class="btn btn-default hidden">Cancel New User</button>
    <button id="userSaveBtn" type="button" class="btn btn-primary">Save Changes</button>
    <button id="userCancelBtn" type="button" class="btn btn-default">Cancel Changes</button>

</div>

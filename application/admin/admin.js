$(document).ready(function () {
	
	function getCheckOuts(userId, userType) {
		var type;
		if(userType == 'ind') {
			type = 'user';
		} else if (userType = 'org') {
			type = 'organization';
		} else { return; }
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'ajax/getCheckOuts.php',
			data: {userId: userId, userType: userType},
			success: function (ajaxvalues) {
				$('#'+type+'Radios tbody').empty();
				var html;
				var result = ajaxvalues.result;
				if (result.length == 0) {
					$('#'+type+'Radios tbody').append('<tr><td>No radios checked out</td></tr>');
				} else {
					for (var index in result) {
						html += '<tr>';
						html += '<td>'+result[index].controlNum+'</td>';
						html += '<td>'+result[index].dateOut+'</td>';
						if(result[index].dateIn == '0000-00-00')
							html += '<td><button type="button" class="radio-check-in-btn btn btn-xs btn-primary" data-id="'
								+result[index].checkOutId+'" data-num="'+result[index].controlNum+'">Check In</button></td>';
						else
							html += '<td>'+result[index].dateIn+'</td>';
						html += '</tr>';
					}
					$('#'+type+'Radios tbody').append(html);
				}
			},
			error: function(e) {
				console.log(e);
			}
		});
	}
	
    function populateRadioDetails(id) {
        var radioId = {type: 'binary', value: id};
		if(!$('#newRadioCancelBtn').hasClass('hidden'))
			$('#newRadioCancelBtn').click();
		
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchRadios.php',
            data: {search: {radioId: radioId}},
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    var result = ajaxValues.result[0];
                    for (var key in result) {
                        if (result.hasOwnProperty(key)) {
                            $('#radio-' + key).val(result[key]);
                        }
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        });
    }

    function populateIndividualDetails(id) {
        var userId = {type: 'binary', value: id};
		if(!$('#newUserCancelBtn').hasClass('hidden'))
			$('#newUserCancelBtn').click();
		getCheckOuts(id, 'ind');
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchIndividualUsers.php',
            data: {search: {userId: userId}},
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    var result = ajaxValues.result[0];
                    for (var key in result) {
                        if (result.hasOwnProperty(key)) {
                            $('#ind-' + key).val(result[key]);
                        }
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        });
    }

    function populateOrganizationDetails(id) {
        var organizationId = {type: 'binary', value: id};
		if(!$('#newOrganizationCancelBtn').hasClass('hidden'))
			$('#newOrganizationCancelBtn').click();
		getCheckOuts(id, 'org');
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchOrganizationUsers.php',
            data: {search: {organizationId: organizationId}},
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    var result = ajaxValues.result[0];
                    for (var key in result) {
                        if (result.hasOwnProperty(key)) {
                            $('#org-' + key).val(result[key]);
                        }
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        });
    }
	
    // ============================================= check out functionality
	
	$('#user-check-out-modal-btn').on('click', function() {
		$('#user-check-out-form').empty();
		$('#user-check-out-form').append('<input type="text" class="form-control user-controlNum" placeholder="Control Number">');
	});
	
	$('#organization-check-out-modal-btn').on('click', function() {
		$('#organization-check-out-form').empty();
		$('#organization-check-out-form').append('<input type="text" class="form-control organization-controlNum" placeholder="Control Number">');
	});
	
	$('#user-add-radio-btn').on('click', function() {
		$('#user-check-out-form').append('<input type="text" class="form-control user-controlNum" placeholder="Control Number">');
	});
	
	$('#organization-add-radio-btn').on('click', function() {
		$('#organization-check-out-form').append('<input type="text" class="form-control organization-controlNum" placeholder="Control Number">');
	});
	
	$('#user-check-out-form, #organization-check-out-form').on('input', '.user-controlNum, .organization-controlNum', function(event) {
		var timeout = setTimeout(function() {
			clearTimeout(timeout);
			if($(event.target).val() == '') {
				$(event.target).next('.glyphicon').remove();
			} else {
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: 'ajax/checkControlNum.php',
					data: 'controlNum=' + $(event.target).val(),
					success: function (ajaxvalues) {
						if(ajaxvalues.result == '') {
							$(event.target).next('.glyphicon').remove();
							$(event.target).after('<span class="glyphicon glyphicon-remove-circle"></span>');
						} else if(ajaxvalues.result[0].radioStatus == 'Checked In') {
							$(event.target).next('.glyphicon').remove();
							$(event.target).after('<span class="glyphicon glyphicon-ok-circle"></span>');
						} else if(ajaxvalues.result[0].radioStatus == 'Checked Out') {
							$(event.target).next('.glyphicon').remove();
							$(event.target).after('<span class="glyphicon glyphicon-ban-circle"></span>');
						}  else {
							$(event.target).next('.glyphicon').remove();
							$(event.target).after('<span class="glyphicon glyphicon-remove-circle"></span>');
						}
					},
					error: function (e) {
						console.log(e);
					}
				});
			}
		}, 1000);
	});
	
	$('#user-check-out-btn, #organization-check-out-btn').on('click', function(event) {
		var data={};
		var index = 0;
		if($(event.target).attr('id') == 'user-check-out-btn') {
			data.userType = 'ind';
			type = 'user';
		} else if ($(event.target).attr('id') == 'organization-check-out-btn') {
			data.userType = 'org';
			type = 'organization';
		} else {
			alert('error');
			return;
		}
		data.userId = $('#'+data.userType+'-'+type+'Id').val();
		data.inputList={};
		$('#'+type+'-check-out-form input').each( function() {
			if( $(this).val().length != 0 ) {
				data.inputList[index] = $(this).val();
				index++;
			}
		});
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'ajax/checkOutRadio.php',
			data: data,
			success: function (ajaxvalues) {
				if(ajaxvalues.success) {
					alert('Radios checked out successfully');
					$('#'+type+'-check-out-modal').modal('hide');
					getCheckOuts(data.userId, data.userType);
				} else {
					console.log(ajaxvalues.error);
					alert(ajaxvalues.error);
					getCheckOuts(data.userId, data.userType);
				}
			},
			error: function (e) {
				console.log(e);
			}
		});
	});
	
	$('#userRadios, #organizationRadios').on('click', '.radio-check-in-btn, .organization-check-in-btn', function(event) {
		var type, userType;
		if($(event.delegateTarget).attr('id') == 'userRadios') {
			userType = 'ind';
			type = '#ind-userId';
		} else if ($(event.delegateTarget).attr('id') == 'organizationRadios') {
			userType = 'org';
			type = '#org-organizationId';
		} else {
			alert('error');
			return;
		}
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'ajax/checkInRadio.php',
			data: {checkOutId: $(event.target).attr('data-id'), controlNum: $(event.target).attr('data-num')},
			success: function (ajaxvalues) {
				getCheckOuts($(type).val(), userType);
				alert('Radio checked in successfully');
			},
			error: function (e) {
				console.log(e);
			}
		});
	});
	
	// =============================================

    $('#userList').on('click', '.userRow', function () {
        var id = $(this).attr('data-id');
        $('#user-details-tab').click();
        populateIndividualDetails(id);
    });

    $('#organizationList').on('click', '.organizationRow', function () {
        var id = $(this).attr('data-id');
        $('#organization-details-tab').click();
        populateOrganizationDetails(id);
    });

    $('#radioList').on('click', '.radioRow', function () {
        var id = $(this).attr('data-id');
        $('#radio-details-tab').click();
        populateRadioDetails(id);
    });

    // =============================================

    $('#radioSaveBtn').on('click', function () {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/updateRadio.php',
            data: $('#radio-details-form').serialize(),
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    $('#radioList').load(location.href + " #radioList>*", "");
                    alert("Radio Saved.");
                }
            },
            error: function (e) {
				alert("Fail to save");
                console.log(e);
            }
        });
    });

    $('#userSaveBtn').on('click', function () {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/updateIndividual.php',
            data: $('#user-details-form').serialize(),
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    $('#userList').load(location.href + " #userList>*", "");
                    alert("User Saved.");
                }
            },
            error: function (e) {
				alert("Fail to save");
                console.log(e);
            }
        });
    });

    $('#organizationSaveBtn').on('click', function () {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/updateOrganization.php',
            data: $('#organization-details-form').serialize(),
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    $('#organizationList').load(location.href + " #organizationList>*", "");
                    alert("Organization Saved.");
                }
            },
            error: function (e) {
                alert("Fail to save");
                console.log(e);
            }
        });
    });

    // =============================================

    $('#radioCancelBtn').on('click', function () {
        var id = $('#radio-radioId').val();
        populateRadioDetails(id);
    });

    $('#userCancelBtn').on('click', function () {
        var id = $('#ind-userId').val();
        populateIndividualDetails(id);
    });

    $('#organizationCancelBtn').on('click', function () {
        var id = $('#org-organizationId').val();
        populateOrganizationDetails(id);
    });

    // =============================================

    $('#newRadio').on('click', function () {
        $('#radio-details-form').trigger('reset');
        $('#newRadioSaveBtn').removeClass('hidden');
        $('#newRadioCancelBtn').removeClass('hidden');
        $('#radioSaveBtn').addClass('hidden');
        $('#radioCancelBtn').addClass('hidden');
        $('#newRadio').addClass('hidden');
    });

    $('#newUser').on('click', function () {
        $('#user-details-form').trigger('reset');
        $('#newUserSaveBtn').removeClass('hidden');
        $('#newUserCancelBtn').removeClass('hidden');
        $('#userSaveBtn').addClass('hidden');
        $('#userCancelBtn').addClass('hidden');
        $('#newUser').addClass('hidden');
    });

    $('#newOrganization').on('click', function () {
        $('#organization-details-form').trigger('reset');
        $('#newOrganizationSaveBtn').removeClass('hidden');
        $('#newOrganizationCancelBtn').removeClass('hidden');
        $('#organizationSaveBtn').addClass('hidden');
        $('#organizationCancelBtn').addClass('hidden');
        $('#newOrganization').addClass('hidden');
    });

    // =============================================

    $('#newRadioSaveBtn').on('click', function () {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/newRadio.php',
            data: $('#radio-details-form').serialize(),
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    populateRadioDetails(ajaxValues.id);
                    $('#radioList').load(location.href + " #radioList>*", "");
                    $('#newRadioSaveBtn').addClass('hidden');
                    $('#newRadioCancelBtn').addClass('hidden');
                    $('#radioSaveBtn').removeClass('hidden');
                    $('#radioCancelBtn').removeClass('hidden');
                    $('#newRadio').removeClass('hidden');
                    alert("Radio Saved.");
                }
            },
            error: function (e) {
				alert("Fail the new radio");
                console.log(e);
            }
        });
    });

    $('#newUserSaveBtn').on('click', function () {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/newIndividual.php',
            data: $('#user-details-form').serialize(),
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    populateIndividualDetails(ajaxValues.id);
                    $('#userList').load(location.href + " #userList>*", "");
                    $('#newUserSaveBtn').addClass('hidden');
                    $('#newUserCancelBtn').addClass('hidden');
                    $('#userSaveBtn').removeClass('hidden');
                    $('#userCancelBtn').removeClass('hidden');
                    $('#newUser').removeClass('hidden');
                    alert("User Saved.");
                }
            },
            error: function (e) {
				alert("Fail the new user");
                console.log(e);
            }
        });
    });

    $('#newOrganizationSaveBtn').on('click', function () {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/newOrganization.php',
            data: $('#organization-details-form').serialize(),
            success: function (ajaxValues) {
                if (ajaxValues.success) {
                    populateOrganizationDetails(ajaxValues.id);
                    $('#organizationList').load(location.href + " #organizationList>*", "");
                    $('#newOrganizationSaveBtn').addClass('hidden');
                    $('#newOrganizationCancelBtn').addClass('hidden');
                    $('#organizationSaveBtn').removeClass('hidden');
                    $('#organizationCancelBtn').removeClass('hidden');
                    $('#newOrganization').removeClass('hidden');
                    alert("New Organization Saved.");
                }
            },
            error: function (e) {
                alert("Fail the new org");
                console.log(e);
            }
        });
    });

    // =============================================

    $('#newRadioCancelBtn').on('click', function () {

        $('#newRadioSaveBtn').addClass('hidden');
        $('#newRadioCancelBtn').addClass('hidden');
        $('#radioSaveBtn').removeClass('hidden');
        $('#radioCancelBtn').removeClass('hidden');
        $('#newRadio').removeClass('hidden');
    });

    $('#newUserCancelBtn').on('click', function () {

        $('#newUserSaveBtn').addClass('hidden');
        $('#newUserCancelBtn').addClass('hidden');
        $('#userSaveBtn').removeClass('hidden');
        $('#userCancelBtn').removeClass('hidden');
        $('#newUser').removeClass('hidden');
    });

    $('#newOrganizationCancelBtn').on('click', function () {

        $('#newOrganizationSaveBtn').addClass('hidden');
        $('#newOrganizationCancelBtn').addClass('hidden');
        $('#organizationSaveBtn').removeClass('hidden');
        $('#organizationCancelBtn').removeClass('hidden');
        $('#newOrganization').removeClass('hidden');
    });

	// ====================================================== Search Radios
	
	function reloadRadios() {
		var searchData={};
		if($('#radio-search-controlNum').val())
			searchData.controlNum = {type: 'like', value: $('#radio-search-controlNum').val()};
		if($('#radio-search-modelNum').val())
			searchData.modelNum = {type: 'like', value: $('#radio-search-modelNum').val()};
		if($('#radio-search-manufacturer').val())
			searchData.manufacturer = {type: 'like', value: $('#radio-search-manufacturer').val()};
		
		var dateFrom = $('#radio-search-dateOfPurchaseFrom').val();
		var dateTo = $('#radio-search-dateOfPurchaseTo').val()
		if(dateFrom) {
			if(!dateTo)
				dateTo = dateFrom;
			searchData.dateOfPurchase = {type: 'range', value1: dateFrom, value2: dateTo};
		}
		if($('#radio-search-radioStatus').val())
			searchData.radioStatus = {type: 'binary', value: $('#radio-search-radioStatus').val()};
		if($('#radio-search-headphones').val())
			searchData.headphones = {type: 'binary', value: $('#radio-search-headphones').val()};
		if($('#radio-search-battery').val())
			searchData.battery = {type: 'binary', value: $('#radio-search-battery').val()};
		if($('#radio-search-wave').val())
			searchData.wave = {type: 'binary', value: $('#radio-search-wave').val()};
		if($('#radio-search-radioCondition').val())
			searchData.radioCondition = {type: 'binary', value: $('#radio-search-radioCondition').val()};
		if($('#radio-search-notes').val())
			searchData.notes = {type: 'like', value: $('#radio-search-notes').val()};
		
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchRadios.php',
            data: {search: searchData},
            success: function (ajaxValues) {
                if (ajaxValues.success) {
					$('#radiosTable tbody').empty();
                    var result = ajaxValues.result;
					var fields = ["controlNum", "modelNum", "manufacturer", "dateOfPurchase", "radioStatus", "headphones", "battery", "wave", "radioCondition"];
                    for (var index in result) {
						var row;
						row += '<tr data-id=' + result[index].radioId + ' class="radioRow">';
						for (var field in fields) {
							row += '<td>' + result[index][fields[field]] + '</td>';
						}
						row += '</tr>';
						$('#radiosTable tbody').append(row);
						row = '';
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        });
	}
	
	$('#radio-search-btn').on('click', function () {
		reloadRadios();
    });
	
	$('#radio-search-clear-btn').on('click', function () {
		$('#radio-search-collapse').find(':input').val('');
		reloadRadios();
	});
	
	// ====================================================== Search Users
	
	function reloadUsers() {
		var searchData={};
		if($('#user-search-firstName').val())
			searchData.firstName = {type: 'like', value: $('#user-search-firstName').val()};
		if($('#user-search-lastName').val())
			searchData.lastName = {type: 'like', value: $('#user-search-lastName').val()};
		
		var dateFrom = $('#user-search-dobFrom').val();
		var dateTo = $('#user-search-dobTo').val()
		if(dateFrom) {
			if(!dateTo)
				dateTo = dateFrom;
			searchData.birthday = {type: 'range', value1: dateFrom, value2: dateTo};
		}
		if($('#user-search-address').val())
			searchData.street = {type: 'like', value: $('#user-search-address').val()};
		if($('#user-search-address2').val())
			searchData.streetLine2 = {type: 'like', value: $('#user-search-address2').val()};
		if($('#user-search-city').val())
			searchData.city = {type: 'like', value: $('#user-search-city').val()};
		if($('#user-search-state').val())
			searchData.state = {type: 'like', value: $('#user-search-state').val()};
		if($('#user-search-zip').val())
			searchData.zip = {type: 'like', value: $('#user-search-zip').val()};
		if($('#user-search-phone').val())
			searchData.phone = {type: 'like', value: $('#user-search-phone').val()};
		if($('#user-search-phone2').val())
			searchData.phone2 = {type: 'like', value: $('#user-search-phone2').val()};
		if($('#user-search-email').val())
			searchData.email = {type: 'like', value: $('#user-search-email').val()};
		if($('#user-search-notes').val())
			searchData.notes = {type: 'like', value: $('#user-search-notes').val()};
		
		if($('#user-search-contactFirstName').val())
			searchData.contactFirstName = {type: 'like', value: $('#user-search-contactFirstName').val()};
		if($('#user-search-contactLastName').val())
			searchData.contactLastName = {type: 'like', value: $('#user-search-contactLastName').val()};
		if($('#user-search-contactAddress').val())
			searchData.contactStreet = {type: 'like', value: $('#user-search-contactAddress').val()};
		if($('#user-search-contactAddress2').val())
			searchData.contactStreetLine2 = {type: 'like', value: $('#user-search-contactAddress2').val()};
		if($('#user-search-contactCity').val())
			searchData.contactCity = {type: 'like', value: $('#user-search-contactCity').val()};
		if($('#user-search-contactState').val())
			searchData.contactState = {type: 'like', value: $('#user-search-contactState').val()};
		if($('#user-search-contactZip').val())
			searchData.contactZip = {type: 'like', value: $('#user-search-contactZip').val()};
		if($('#user-search-contactPhone').val())
			searchData.contactPhone = {type: 'like', value: $('#user-search-contactPhone').val()};
		if($('#user-search-contactPhone2').val())
			searchData.contactPhone2 = {type: 'like', value: $('#user-search-contactPhone2').val()};
		if($('#user-search-contactEmail').val())
			searchData.contactEmail = {type: 'like', value: $('#user-search-contactEmail').val()};
		if($('#user-search-contactRelationship').val())
			searchData.contactRelationship = {type: 'like', value: $('#user-search-contactRelationship').val()};
		
		if($('#user-search-status').val())
			searchData.status = {type: 'binary', value: $('#user-search-status').val()};
		if($('#user-search-medium').val())
			searchData.medium = {type: 'binary', value: $('#user-search-medium').val()};
		if($('#user-search-mailTo').val())
			searchData.mailTo = {type: 'binary', value: $('#user-search-mailTo').val()};
		if($('#user-search-disability').val())
			searchData.disability = {type: 'like', value: $('#user-search-disability').val()};
		if($('#user-search-otherDisability').val())
			searchData.otherDisability = {type: 'like', value: $('#user-search-otherDisability').val()};
		if($('#user-search-howLearn').val())
			searchData.howLearn = {type: 'like', value: $('#user-search-howLearn').val()};
		if($('#user-search-race').val())
			searchData.race = {type: 'like', value: $('#user-search-race').val()};
		if($('#user-search-income').val())
			searchData.income = {type: 'like', value: $('#user-search-income').val()};
		if($('#user-search-inHomeNum').val())
			searchData.inHomeNum = {type: 'like', value: $('#user-search-inHomeNum').val()};
		
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchIndividualUsers.php',
            data: {search: searchData},
            success: function (ajaxValues) {
                if (ajaxValues.success) {
					$('#usersTable tbody').empty();
                    var result = ajaxValues.result;
					var fields = ["firstName", "lastName", "email", "birthday", "street"];
                    for (var index in result) {
						var row;
						row += '<tr data-id=' + result[index].userId + ' class="userRow">';
						for (var field in fields) {
							row += '<td>' + result[index][fields[field]] + '</td>';
						}
						row += '</tr>';
						$('#usersTable tbody').append(row);
						row = '';
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        });
	}
	
	$('#user-search-btn').on('click', function () {
		reloadUsers();
    });
	
	$('#user-search-clear-btn').on('click', function () {
		$('#user-search-collapse').find(':input').val('');
		reloadUsers();
	});
	
	// ====================================================== Search Orgs
	
	function reloadOrgs() {
		var searchData={};
		if($('#org-search-organizationName').val())
			searchData.organizationName = {type: 'like', value: $('#org-search-organizationName').val()};
		if($('#org-search-organizationType').val())
			searchData.organizationType = {type: 'like', value: $('#org-search-organizationType').val()};
		if($('#org-search-firstName').val())
			searchData.firstName = {type: 'like', value: $('#org-search-firstName').val()};
		if($('#org-search-lastName').val())
			searchData.lastName = {type: 'like', value: $('#org-search-lastName').val()};
		if($('#org-search-positionTitle').val())
			searchData.positionTitle = {type: 'like', value: $('#org-search-positionTitle').val()};
		if($('#org-search-radiosReqNum').val())
			searchData.numRadios = {type: 'like', value: $('#org-search-radiosReqNum').val()};
		if($('#org-search-licBedsNum').val())
			searchData.numLicensedBeds = {type: 'like', value: $('#org-search-licBedsNum').val()};
		if($('#org-search-resUnitsNum').val())
			searchData.numResidentialUnits = {type: 'like', value: $('#org-search-resUnitsNum').val()};
		if($('#org-search-notes').val())
			searchData.notes = {type: 'like', value: $('#org-search-notes').val()};
		
		if($('#org-search-address').val())
			searchData.street = {type: 'like', value: $('#org-search-address').val()};
		if($('#org-search-address2').val())
			searchData.streetLine2 = {type: 'like', value: $('#org-search-address2').val()};
		if($('#org-search-city').val())
			searchData.city = {type: 'like', value: $('#org-search-city').val()};
		if($('#org-search-state').val())
			searchData.state = {type: 'like', value: $('#org-search-state').val()};
		if($('#org-search-zip').val())
			searchData.zip = {type: 'like', value: $('#org-search-zip').val()};
		if($('#org-search-phone').val())
			searchData.phone = {type: 'like', value: $('#org-search-phone').val()};
		if($('#org-search-phone2').val())
			searchData.phone2 = {type: 'like', value: $('#org-search-phone2').val()};
		if($('#org-search-email').val())
			searchData.email = {type: 'like', value: $('#org-search-email').val()};
		if($('#org-search-howLearn').val())
			searchData.howLearn = {type: 'like', value: $('#org-search-howLearn').val()};
		if($('#org-search-status').val())
			searchData.status = {type: 'like', value: $('#org-search-status').val()};
		
		var dateFrom = $('#user-search-dobFrom').val();
		var dateTo = $('#user-search-dobTo').val()
		if(dateFrom) {
			if(!dateTo)
				dateTo = dateFrom;
			searchData.birthday = {type: 'range', value1: dateFrom, value2: dateTo};
		}
		
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchOrganizationUsers.php',
            data: {search: searchData},
            success: function (ajaxValues) {
                if (ajaxValues.success) {
					$('#organizationsTable tbody').empty();
                    var result = ajaxValues.result;
					var fields = ["organizationName", "firstName", "lastName", "street", "phone", "numRadios", "email"];
                    for (var index in result) {
						var row;
						row += '<tr data-id=' + result[index].organizationId + ' class="organizationRow">';
						for (var field in fields) {
							row += '<td>' + result[index][fields[field]] + '</td>';
						}
						row += '</tr>';
						$('#organizationsTable tbody').append(row);
						row = '';
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        });
	}
	
	$('#org-search-btn').on('click', function () {
		reloadOrgs();
    });
	
	$('#org-search-clear-btn').on('click', function () {
		$('#org-search-collapse').find(':input').val('');
		reloadOrgs();
	});
	
    // ====================================================== UI functionality
	
    var userDTable = $('#usersTable').DataTable({
        "scrollCollapse": true,
        "paging": false,
        "bFilter": false,
        "bInfo": false
    });
    
    var userDTable = $('#organizationsTable').DataTable({
        "scrollCollapse": true,
        "paging": false,
        "bFilter": false,
        "bInfo": false
    });
    
    var userDTable = $('#radiosTable').DataTable({
        "scrollCollapse": true,
        "paging": false,
        "bFilter": false,
        "bInfo": false
    });

    //addSortable('#usersTable');
    /*
    function addSortable(id) {
        // sort users
        $(id).click(function () {
            var table = $(this).parents('table').eq(0);
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));
            this.asc = !this.asc;
            if (!this.asc) {
                rows = rows.reverse();
            }
            for (var i = 0; i < rows.length; i++) {
                table.append(rows[i]);
            }
        });
        function comparer(index) {
            return function (a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index);
                return $.isNumerc(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
            }
        }
        function getCellValue(row, index) {
            return $(row).children('td').eq(index).html();
        }
    }
    */


    // =============================

    // rearrange columns
    addDraggable();

    // add draggable functionality to rearrange columns
    function addDraggable() {
        $('#usersTable').dragtable({
            dragHandle: '.handle'
        });

        $('#organizationsTable').dragtable({
            dragHandle: '.handle'
        });

        $('#radiosTable').dragtable({
            dragHandle: '.handle'
        });
    }



});


$(document).ready(function () {
    function populateRadioDetails(id) {
        var radioId = {type: 'binary', value: id};
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
                            $('#' + key).val(result[key]);
                        }
                    }
                }
            },
            error: function (e) {
                console.log(e.message);
            }
        });
    }

    function populateIndividualDetails(id) {
        var userId = {type: 'binary', value: id};

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
                console.log(e.message);
            }
        });
    }

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
        var id = $('#radioId').val();
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

	// ======================================================
	
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
					var fields = ["controlNum", "modelNum", "manufacturer", "dateOfPurchase", "radioStatus", "headphones", "battery", "wave", "radioCondition"]
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


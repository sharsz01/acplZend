$(document).ready(function () {
    function populateRadioDetails(id) {
        var radioId = {type: 'binary', value: id};
        if (!$('#newRadioCancelBtn').hasClass('hidden'))
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
                console.log(e.message);
            }
        });
    }

    function populateIndividualDetails(id) {
        var userId = {type: 'binary', value: id};
        if (!$('#newUserCancelBtn').hasClass('hidden'))
            $('#newUserCancelBtn').click();

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
        if (!$('#newOrganizationCancelBtn').hasClass('hidden'))
            $('#newOrganizationCancelBtn').click();

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
                    document.location.reload(true);
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
                    document.location.reload(true);
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
                    document.location.reload(true);
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
                    document.location.reload(true);
                }
            },
            error: function (e) {
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
                    document.location.reload(true);
                }
            },
            error: function (e) {
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
                    document.location.reload(true);
                }
            },
            error: function (e) {
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
        var searchData = {};
        if ($('#radio-search-controlNum').val())
            searchData.controlNum = {type: 'like', value: $('#radio-search-controlNum').val()};
        if ($('#radio-search-modelNum').val())
            searchData.modelNum = {type: 'like', value: $('#radio-search-modelNum').val()};
        if ($('#radio-search-manufacturer').val())
            searchData.manufacturer = {type: 'like', value: $('#radio-search-manufacturer').val()};

        var dateFrom = $('#radio-search-dateOfPurchaseFrom').val();
        var dateTo = $('#radio-search-dateOfPurchaseTo').val()
        if (dateFrom) {
            if (!dateTo)
                dateTo = dateFrom;
            searchData.dateOfPurchase = {type: 'range', value1: dateFrom, value2: dateTo};
        }
        if ($('#radio-search-radioStatus').val())
            searchData.radioStatus = {type: 'binary', value: $('#radio-search-radioStatus').val()};
        if ($('#radio-search-headphones').val())
            searchData.headphones = {type: 'binary', value: $('#radio-search-headphones').val()};
        if ($('#radio-search-battery').val())
            searchData.battery = {type: 'binary', value: $('#radio-search-battery').val()};
        if ($('#radio-search-wave').val())
            searchData.wave = {type: 'binary', value: $('#radio-search-wave').val()};
        if ($('#radio-search-radioCondition').val())
            searchData.radioCondition = {type: 'binary', value: $('#radio-search-radioCondition').val()};
        if ($('#radio-search-notes').val())
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
        var searchData = {};
        if ($('#user-search-firstName').val())
            searchData.firstName = {type: 'like', value: $('#user-search-firstName').val()};
        if ($('#user-search-lastName').val())
            searchData.lastName = {type: 'like', value: $('#user-search-lastName').val()};

        var dateFrom = $('#user-search-dobFrom').val();
        var dateTo = $('#user-search-dobTo').val()
        if (dateFrom) {
            if (!dateTo)
                dateTo = dateFrom;
            searchData.birthday = {type: 'range', value1: dateFrom, value2: dateTo};
        }
        if ($('#user-search-address').val())
            searchData.street = {type: 'like', value: $('#user-search-address').val()};
        if ($('#user-search-address2').val())
            searchData.streetLine2 = {type: 'like', value: $('#user-search-address2').val()};
        if ($('#user-search-city').val())
            searchData.city = {type: 'like', value: $('#user-search-city').val()};
        if ($('#user-search-state').val())
            searchData.state = {type: 'like', value: $('#user-search-state').val()};
        if ($('#user-search-zip').val())
            searchData.zip = {type: 'like', value: $('#user-search-zip').val()};
        if ($('#user-search-phone').val())
            searchData.phone = {type: 'like', value: $('#user-search-phone').val()};
        if ($('#user-search-phone2').val())
            searchData.phone2 = {type: 'like', value: $('#user-search-phone2').val()};
        if ($('#user-search-email').val())
            searchData.email = {type: 'like', value: $('#user-search-email').val()};
        if ($('#user-search-notes').val())
            searchData.notes = {type: 'like', value: $('#user-search-notes').val()};

        if ($('#user-search-contactFirstName').val())
            searchData.contactFirstName = {type: 'like', value: $('#user-search-contactFirstName').val()};
        if ($('#user-search-contactLastName').val())
            searchData.contactLastName = {type: 'like', value: $('#user-search-contactLastName').val()};
        if ($('#user-search-contactAddress').val())
            searchData.contactStreet = {type: 'like', value: $('#user-search-contactAddress').val()};
        if ($('#user-search-contactAddress2').val())
            searchData.contactStreetLine2 = {type: 'like', value: $('#user-search-contactAddress2').val()};
        if ($('#user-search-contactCity').val())
            searchData.contactCity = {type: 'like', value: $('#user-search-contactCity').val()};
        if ($('#user-search-contactState').val())
            searchData.contactState = {type: 'like', value: $('#user-search-contactState').val()};
        if ($('#user-search-contactZip').val())
            searchData.contactZip = {type: 'like', value: $('#user-search-contactZip').val()};
        if ($('#user-search-contactPhone').val())
            searchData.contactPhone = {type: 'like', value: $('#user-search-contactPhone').val()};
        if ($('#user-search-contactPhone2').val())
            searchData.contactPhone2 = {type: 'like', value: $('#user-search-contactPhone2').val()};
        if ($('#user-search-contactEmail').val())
            searchData.contactEmail = {type: 'like', value: $('#user-search-contactEmail').val()};
        if ($('#user-search-contactRelationship').val())
            searchData.contactRelationship = {type: 'like', value: $('#user-search-contactRelationship').val()};

        if ($('#user-search-status').val())
            searchData.status = {type: 'binary', value: $('#user-search-status').val()};
        if ($('#user-search-medium').val())
            searchData.medium = {type: 'binary', value: $('#user-search-medium').val()};
        if ($('#user-search-mailTo').val())
            searchData.mailTo = {type: 'binary', value: $('#user-search-mailTo').val()};
        if ($('#user-search-disability').val())
            searchData.disability = {type: 'like', value: $('#user-search-disability').val()};
        if ($('#user-search-otherDisability').val())
            searchData.otherDisability = {type: 'like', value: $('#user-search-otherDisability').val()};
        if ($('#user-search-howLearn').val())
            searchData.howLearn = {type: 'like', value: $('#user-search-howLearn').val()};
        if ($('#user-search-race').val())
            searchData.race = {type: 'like', value: $('#user-search-race').val()};
        if ($('#user-search-income').val())
            searchData.income = {type: 'like', value: $('#user-search-income').val()};
        if ($('#user-search-inHomeNum').val())
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
        var searchData = {};
        if ($('#org-search-organizationName').val())
            searchData.organizationName = {type: 'like', value: $('#org-search-organizationName').val()};
        if ($('#org-search-organizationType').val())
            searchData.organizationType = {type: 'like', value: $('#org-search-organizationType').val()};
        if ($('#org-search-firstName').val())
            searchData.firstName = {type: 'like', value: $('#org-search-firstName').val()};
        if ($('#org-search-lastName').val())
            searchData.lastName = {type: 'like', value: $('#org-search-lastName').val()};
        if ($('#org-search-positionTitle').val())
            searchData.positionTitle = {type: 'like', value: $('#org-search-positionTitle').val()};
        if ($('#org-search-radiosReqNum').val())
            searchData.numRadios = {type: 'like', value: $('#org-search-radiosReqNum').val()};
        if ($('#org-search-licBedsNum').val())
            searchData.numLicensedBeds = {type: 'like', value: $('#org-search-licBedsNum').val()};
        if ($('#org-search-resUnitsNum').val())
            searchData.numResidentialUnits = {type: 'like', value: $('#org-search-resUnitsNum').val()};
        if ($('#org-search-notes').val())
            searchData.notes = {type: 'like', value: $('#org-search-notes').val()};

        if ($('#org-search-address').val())
            searchData.street = {type: 'like', value: $('#org-search-address').val()};
        if ($('#org-search-address2').val())
            searchData.streetLine2 = {type: 'like', value: $('#org-search-address2').val()};
        if ($('#org-search-city').val())
            searchData.city = {type: 'like', value: $('#org-search-city').val()};
        if ($('#org-search-state').val())
            searchData.state = {type: 'like', value: $('#org-search-state').val()};
        if ($('#org-search-zip').val())
            searchData.zip = {type: 'like', value: $('#org-search-zip').val()};
        if ($('#org-search-phone').val())
            searchData.phone = {type: 'like', value: $('#org-search-phone').val()};
        if ($('#org-search-phone2').val())
            searchData.phone2 = {type: 'like', value: $('#org-search-phone2').val()};
        if ($('#org-search-email').val())
            searchData.email = {type: 'like', value: $('#org-search-email').val()};
        if ($('#org-search-howLearn').val())
            searchData.howLearn = {type: 'like', value: $('#org-search-howLearn').val()};
        if ($('#org-search-status').val())
            searchData.status = {type: 'like', value: $('#org-search-status').val()};

        var dateFrom = $('#user-search-dobFrom').val();
        var dateTo = $('#user-search-dobTo').val()
        if (dateFrom) {
            if (!dateTo)
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

    var organizationDTable = $('#organizationsTable').DataTable({
        "scrollCollapse": true,
        "paging": false,
        "bFilter": false,
        "bInfo": false
    });

    var radioDTable = $('#radiosTable').DataTable({
        "scrollCollapse": true,
        "paging": false,
        "bFilter": false,
        "bInfo": false
    });

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

    // =============================================

    $('#clearUserTable').on('click', function () {
        clearUsersTable();
    });

    $('#userTableDefaults').on('click', function () {
        setUserDefaults();
    });

    $('#clearOrgTable').on('click', function () {
        clearOrganizationTable();
    });

    $('#orgTableDefaults').on('click', function () {
        setOrganizationDefaults();
    });

    $('#clearRadioTable').on('click', function () {
        clearRadioTable();
    });

    $('#radioTableDefaults').on('click', function () {
        setRadioDefaults();
    });

    // Removes all fields and displays an empty table
    function clearUsersTable() {
        var len = $('#usersTable th').length;
        for (i = 0; i < 30; i++) {

            userDTable.column(i).visible(false);
        }

        $('.inactiveBtns').show();
    }

    // Removes all fields and displays an empty table
    function clearOrganizationTable() {
        var len = $('#organizationsTable th').length;
        for (i = 0; i < 19; i++) {
            organizationDTable.column(i).visible(false);
        }

        $('.inactiveBtns').show();
    }

    // Removes all fields and displays an empty table
    function clearRadioTable() {
        var len = $('#radiosTable th').length;
        for (i = 0; i < 10; i++) {

            radioDTable.column(i).visible(false);
        }

        $('.inactiveBtns').show();
    }

    // Shows default column list for individuals with radios
    function setUserDefaults() {
        clearUsersTable();

        userDTable.column(0).visible(true);
        userDTable.column(1).visible(true);
        userDTable.column(2).visible(true);
        userDTable.column(3).visible(true);
        userDTable.column(8).visible(true);
        userDTable.column(10).visible(true);


        $('.inactiveBtns').show();
        $('#user-firstNameBtn').hide();
        $('#user-lastNameBtn').hide();
        $('#user-dobBtn').hide();
        $('#user-streetBtn').hide();
        $('#user-phoneBtn').hide();
        $('#user-emailBtn').hide();
    }

    function setOrganizationDefaults() {
        clearOrganizationTable();

        organizationDTable.column(0).visible(true);
        organizationDTable.column(2).visible(true);
        organizationDTable.column(3).visible(true);
        organizationDTable.column(10).visible(true);
        organizationDTable.column(12).visible(true);

        $('.inactiveBtns').show();
        $('#org-organizationNameBtn').hide();
        $('#org-firstNameBtn').hide();
        $('#org-lastNameBtn').hide();
        $('#org-emailBtn').hide();
        $('#org-phoneBtn').hide();
    }

    function setRadioDefaults() {
        clearRadioTable();

        for (i = 0; i < 9; i++) {
            radioDTable.column(i).visible(true);
        }

        $('.inactiveBtns').show();
        $('#radio-controlNumBtn').hide();
        $('#radio-modelNumBtn').hide();
        $('#radio-manufacturerBtn').hide();
        $('#radio-dopBtn').hide();
        $('#radio-statusBtn').hide();
        $('#radio-headphonesBtn').hide();
        $('#radio-batteryBtn').hide();
        $('#radio-waveBtn').hide();
        $('#radio-conditionBtn').hide();

    }

    // ============================================== hide button from inactive tabs and show the corresponding column of data in the table
    $('#user-firstNameBtn').on('click', function () {
        $('#user-firstNameBtn').hide();
        userDTable.column(0).visible(true);
    });


    $('#user-lastNameBtn').on('click', function () {
        $('#user-lastNameBtn').hide();
        userDTable.column(1).visible(true);
    });

    $('#user-dobBtn').on('click', function () {
        $('#user-dobBtn').hide();
        userDTable.column(2).visible(true);
    });

    $('#user-streetBtn').on('click', function () {
        $('#user-streetBtn').hide();
        userDTable.column(3).visible(true);
    });

    $('#user-streetLine2Btn').on('click', function () {
        $('#user-streetLine2Btn').hide();
        userDTable.column(4).visible(true);
    });

    $('#user-cityBtn').on('click', function () {
        $('#user-cityBtn').hide();
        userDTable.column(5).visible(true);
    });

    $('#user-stateBtn').on('click', function () {
        $('#user-stateBtn').hide();
        userDTable.column(6).visible(true);
    });

    $('#user-zipBtn').on('click', function () {
        $('#user-zipBtn').hide();
        userDTable.column(7).visible(true);
    });

    $('#user-phoneBtn').on('click', function () {
        $('#user-phoneBtn').hide();
        userDTable.column(8).visible(true);
    });

    $('#user-phone2Btn').on('click', function () {
        $('#user-phone2Btn').hide();
        userDTable.column(9).visible(true);
    });

    $('#user-emailBtn').on('click', function () {
        $('#user-emailBtn').hide();
        userDTable.column(10).visible(true);
    });

    $('#user-contactFirstNameBtn').on('click', function () {
        $('#user-contactFirstNameBtn').hide();
        userDTable.column(11).visible(true);
    });

    $('#user-contactLastNameBtn').on('click', function () {
        $('#user-contactLastNameBtn').hide();
        userDTable.column(12).visible(true);
    });

    $('#user-contactRelationshipBtn').on('click', function () {
        $('#user-contactRelationshipBtn').hide();
        userDTable.column(13).visible(true);
    });

    $('#user-contactStreetBtn').on('click', function () {
        $('#user-contactStreetBtn').hide();
        userDTable.column(14).visible(true);
    });

    $('#user-contactStreetLine2Btn').on('click', function () {
        $('#user-contactStreetLine2Btn').hide();
        userDTable.column(15).visible(true);
    });

    $('#user-contactCityBtn').on('click', function () {
        $('#user-contactCityBtn').hide();
        userDTable.column(16).visible(true);
    });

    $('#user-contactStateBtn').on('click', function () {
        $('#user-contactStateBtn').hide();
        userDTable.column(17).visible(true);
    });

    $('#user-contactZipBtn').on('click', function () {
        $('#user-contactZipBtn').hide();
        userDTable.column(18).visible(true);
    });

    $('#user-contactPhoneBtn').on('click', function () {
        $('#user-contactPhoneBtn').hide();
        userDTable.column(19).visible(true);
    });

    $('#user-contactPhone2Btn').on('click', function () {
        $('#user-contactPhone2Btn').hide();
        userDTable.column(20).visible(true);
    });

    $('#user-contactEmailBtn').on('click', function () {
        $('#user-contactEmailBtn').hide();
        userDTable.column(21).visible(true);
    });

    $('#user-disabilityBtn').on('click', function () {
        $('#user-disabilityBtn').hide();
        userDTable.column(22).visible(true);
    });

    $('#user-otherDisabilityBtn').on('click', function () {
        $('#user-otherDisabilityBtn').hide();
        userDTable.column(23).visible(true);
    });

    $('#user-howLearnBtn').on('click', function () {
        $('#user-howLearnBtn').hide();
        userDTable.column(24).visible(true);
    });

    $('#user-raceBtn').on('click', function () {
        $('#user-raceBtn').hide();
        userDTable.column(25).visible(true);
    });

    $('#user-incomeBtn').on('click', function () {
        $('#user-incomeBtn').hide();
        userDTable.column(26).visible(true);
    });

    $('#user-inHomeNumBtn').on('click', function () {
        $('#user-inHomeNumBtn').hide();
        userDTable.column(27).visible(true);
    });

    $('#user-dateRegisteredBtn').on('click', function () {
        $('#user-dateRegisteredBtn').hide();
        userDTable.column(28).visible(true);
    });

    $('#user-mailToBtn').on('click', function () {
        $('#user-mailToBtn').hide();
        userDTable.column(29).visible(true);
    });

    // ============== Organizations
    $('#org-organizationNameBtn').on('click', function () {
        $('#org-organizationNameBtn').hide();
        organizationDTable.column(0).visible(true);
    });

    $('#org-organizationTypeBtn').on('click', function () {
        $('#org-organizationTypeBtn').hide();
        organizationDTable.column(1).visible(true);
    });

    $('#org-firstNameBtn').on('click', function () {
        $('#org-firstNameBtn').hide();
        organizationDTable.column(2).visible(true);
    });

    $('#org-lastNameBtn').on('click', function () {
        $('#org-lastNameBtn').hide();
        organizationDTable.column(3).visible(true);
    });

    $('#org-positionTitleBtn').on('click', function () {
        $('#org-positionTitleBtn').hide();
        organizationDTable.column(4).visible(true);
    });

    $('#org-streetBtn').on('click', function () {
        $('#org-streetBtn').hide();
        organizationDTable.column(5).visible(true);
    });

    $('#org-streetLine2Btn').on('click', function () {
        $('#org-streetLine2Btn').hide();
        organizationDTable.column(6).visible(true);
    });

    $('#org-cityBtn').on('click', function () {
        $('#org-cityBtn').hide();
        organizationDTable.column(7).visible(true);
    });

    $('#org-stateBtn').on('click', function () {
        $('#org-stateBtn').hide();
        organizationDTable.column(8).visible(true);
    });

    $('#org-zipBtn').on('click', function () {
        $('#org-zipBtn').hide();
        organizationDTable.column(9).visible(true);
    });

    $('#org-phoneBtn').on('click', function () {
        $('#org-phoneBtn').hide();
        organizationDTable.column(10).visible(true);
    });

    $('#org-phone2Btn').on('click', function () {
        $('#org-phone2Btn').hide();
        organizationDTable.column(11).visible(true);
    });

    $('#org-emailBtn').on('click', function () {
        $('#org-emailBtn').hide();
        organizationDTable.column(12).visible(true);
    });

    $('#org-numRadiosBtn').on('click', function () {
        $('#org-numRadiosBtn').hide();
        organizationDTable.column(13).visible(true);
    });

    $('#org-numLicensedBedsBtn').on('click', function () {
        $('#org-numLicensedBedsBtn').hide();
        organizationDTable.column(14).visible(true);
    });

    $('#org-numResidentialUnitsBtn').on('click', function () {
        $('#org-numResidentialUnitsBtn').hide();
        organizationDTable.column(15).visible(true);
    });

    $('#org-howLearnBtn').on('click', function () {
        $('#org-howLearnBtn').hide();
        organizationDTable.column(16).visible(true);
    });

    $('#org-statusBtn').on('click', function () {
        $('#org-statusBtn').hide();
        organizationDTable.column(17).visible(true);
    });

    $('#org-mediumBtn').on('click', function () {
        $('#org-mediumBtn').hide();
        organizationDTable.column(18).visible(true);
    });

    // =====================

    $('#radio-controlNumBtn').on('click', function () {
        $('#radio-controlNumBtn').hide();
        radioDTable.column(0).visible(true);
    });

    $('#radio-modelNumBtn').on('click', function () {
        $('#radio-modelNumBtn').hide();
        radioDTable.column(1).visible(true);
    });

    $('#radio-manufacturerBtn').on('click', function () {
        $('#radio-manufacturerBtn').hide();
        radioDTable.column(2).visible(true);
    });

    $('#radio-dopBtn').on('click', function () {
        $('#radio-dopBtn').hide();
        radioDTable.column(3).visible(true);
    });

    $('#radio-statusBtn').on('click', function () {
        $('#radio-statusBtn').hide();
        radioDTable.column(4).visible(true);
    });

    $('#radio-headphonesBtn').on('click', function () {
        $('#radio-headphonesBtn').hide();
        radioDTable.column(5).visible(true);
    });

    $('#radio-batteryBtn').on('click', function () {
        $('#radio-batteryBtn').hide();
        radioDTable.column(6).visible(true);
    });

    $('#radio-waveBtn').on('click', function () {
        $('#radio-waveBtn').hide();
        radioDTable.column(7).visible(true);
    });

    $('#radio-conditionBtn').on('click', function () {
        $('#radio-conditionBtn').hide();
        radioDTable.column(8).visible(true);
    });

    $('#radio-notesBtn').on('click', function () {
        $('#radio-notesBtn').hide();
        radioDTable.column(9).visible(true);
    });

    $('#radio-Btn').on('click', function () {
        $('#radio-Btn').hide();
        radioDTable.column(10).visible(true);
    });




    // ========================================================

    // Removing a field from the user table
    $('.user-close').on('click', function () {
        // the Name value of the selected header column in table
        var idx = $(this).parent().attr('name');

        // Hide correct column 
        var value = $("th[name='" + idx + "']");
        var i = userDTable.column(value).index();
        userDTable.column(i).visible(false);

        // Show corresponding button in inactive tabs
        var id = replaceUserTableName(idx);
        $(id).show();
    });

    function replaceUserTableName(name) {
        var val = name.replace("uTable-", "#user-");
        val = val + "Btn";
        return val;
    }

    // Removing a field from the organization table
    $('.org-close').on('click', function () {
        // the Name value of the selected header column in table
        var idx = $(this).parent().attr('name');

        // Hide correct column 
        var value = $("th[name='" + idx + "']");
        var i = organizationDTable.column(value).index();
        organizationDTable.column(i).visible(false);

        // Show corresponding button in inactive tabs
        var id = replaceOrganizationTableName(idx);
        $(id).show();
    });

    function replaceOrganizationTableName(name) {
        var val = name.replace("oTable-", "#org-");
        val = val + "Btn";
        return val;
    }

    // Removing a field from the radio table
    $('.radio-close').on('click', function () {
        // the Name value of the selected header column in table
        var idx = $(this).parent().attr('name');

        // Hide correct column 
        var value = $("th[name='" + idx + "']");
        var i = radioDTable.column(value).index();
        radioDTable.column(i).visible(false);

        // Show corresponding button in inactive tabs
        var id = replaceRadioTableName(idx);
        $(id).show();
    });

    function replaceRadioTableName(name) {
        var val = name.replace("rTable-", "#radio-");
        val = val + "Btn";
        return val;
    }

    setUserDefaults();
    setOrganizationDefaults();
    setRadioDefaults();

});


$(document).ready(function () {
    function populateRadioDetails(id) {
        var radioId = {type: 'binary', value: id};
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchRadios.php',
            data: {radioId: radioId},
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
            data: {userId: userId},
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
                console.log(e.message);
            }
        });
    }

    function populateOrganizationDetails(id) {
        var organizationId = {type: 'binary', value: id};

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'ajax/searchOrganizationUsers.php',
            data: {organizationId: organizationId},
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

    $('.userRow').on('click', function () {
        var id = $(this).attr('id');
        $('#user-details-tab').click();
        populateIndividualDetails(id);
    });

    $('.organizationRow').on('click', function () {
        var id = $(this).attr('id');
        $('#organization-details-tab').click();
        populateOrganizationDetails(id);
    });

    $('.radioRow').on('click', function () {
        var id = $(this).attr('id');
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
                else {
                    //alert("Fail");
                }
            },
            error: function (e) {
                //alert("Fail to save");
                console.log(e);
            }
        });
    });

    // =============================================
    // Cancel button for radios is working, but for some reason the value of the
    // id for users and organizations is undefined, causing the cancel feature
    // for those two to not work as expected

    $('#radioCancelBtn').on('click', function () {
        var id = $('#radioId').val();
        populateRadioDetails(id);
    });

    $('#userCancelBtn').on('click', function () {
        var id = $('#userId').val();
        populateIndividualDetails(id);
    });

    $('#organizationCancelBtn').on('click', function () {
        var id = $('#organizationId').val();
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
                else {
                    alert('oh');
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


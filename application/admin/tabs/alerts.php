<?php

$userId = "userId";
$orgId = "organizationId";
$status = "alert_status";
$fname = "firstName";
$lname = "lastName";
$orgName = "organizationName";
$dateReg = "dateRegistered";


$SQL = "SELECT * FROM user";
$result = mysqli_query($db, $SQL);

$count = 0;

// Check alert status for individual listeners
while ($row = mysqli_fetch_assoc($result)) {
    if (strcmp("Unread", $row[$status]) == 0) {
        buildUserAlert($row[$userId], $row[$fname], $row[$lname], $row[$dateReg]);
        $count++;
    }
}


$SQL = "SELECT * FROM organization";
$result = mysqli_query($db, $SQL);

// Check alert status for organizations
while ($row = mysqli_fetch_assoc($result)) {
    if (strcmp("Unread", $row[$status]) == 0) {
        buildOrganizationAlert($row[$orgId], $row[$orgName], $row[$dateReg]);
        $count++;
    }
}

function buildUserAlert($userId, $fname, $lname, $date) {
    $name = $fname . ' ' . $lname;
    $msg = $name . ' has applied for an individual radio on ' . $date;

    echo('<div class="panel panel-primary"><div class="panel-heading">Unread alert - Individual Application</div><div class="row">');

    echo('<div class="col-sm-10"><div class="panel-body">' . $msg . '</div></div>');
    echo('<div class="col-sm-2"><button id="' . $userId . '" type="button" class="viewListener btn btn-primary" style="margin: 10px;">View Details</button></div>');
    echo('<div class="pull-right col-sm-2"><button id="dismissUser-' . $userId . '" type="button" class="dismiss btn btn-warning" style="margin: 10px;">Dismiss</button></div>');

    echo('</div></div>');
}

function buildOrganizationAlert($orgId, $orgName, $date) {
    $msg = $orgName . ' has applied for radios on ' . $date;
    
    echo('<div class="panel panel-primary"><div class="panel-heading">Unread alert - Organization Application</div><div class="row">');

    echo('<div class="col-sm-10"><div class="panel-body">' . $msg . '</div></div>');
    echo('<div class="col-sm-2"><button id="' . $orgId . '" type="button" class="viewOrg btn btn-primary" style="margin: 10px;">View Details</button></div>');
    echo('<div class="pull-right col-sm-2"><button id="dismissOrg-' . $orgId . '" type="button" class="dismiss btn btn-warning" style="margin: 10px;">Dismiss</button></div>');

    echo('</div></div>');
}

?>
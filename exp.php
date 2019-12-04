
<?php

include('dbconnection.php');


    $sql = "SELECT appointmentid
            FROM   appointment
            WHERE  appointmentid = 145";

    $result = mysqli_query($con,$sql);

    if (!$result) {
        echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
        exit;
    }

    if (mysqli_num_rows($result) == 0) {
        echo "No rows found, nothing to print so am exiting";
        exit;
    }

    // While a row of data exists, put that row in $row as an associative array
    // Note: If you're expecting just one row, no need to use a loop
    // Note: If you put extract($row); inside the following loop, you'll
    //       then create $userid, $fullname, and $userstatus
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["appointmentid"];

    }

    mysqli_free_result($result);
?>

<?php
header("Content-Type:application/json");

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $link = mysqli_connect("localhost", "root", "", "assignment");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Prepare a select statement
    $sql = "SELECT * FROM customer WHERE phone LIKE ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters
        $param_term = $search . '%';

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
            if (mysqli_num_rows($result) > 0) {
                // Fetch result rows as an associative array
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $name = $row['cusName'];
                    $ic = $row['cusIC'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    response(200, $name, $ic, $phone, $email);
                }
            } else {
                response(200, "No matches found", NULL, NULL, NULL);
            }
        } else {
            response(500, "Could not execute the prepared statement", NULL, NULL, NULL);
        }
    } else {
        response(500, "Could not prepare the statement", NULL, NULL, NULL);
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    response(400, "Invalid Request", NULL, NULL, NULL);
}

function response($status, $message, $name, $ic, $phone, $email) {
    header("HTTP/1.1 " . $status);
    $response['status'] = $status;
    $response['message'] = $message;
    $response['name'] = $name;
    $response['ic'] = $ic;
    $response['phone'] = $phone;
    $response['email'] = $email;

    $json_response = json_encode($response);

    echo $json_response;
}
?>

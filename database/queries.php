<?php


// Function to check if the username already exists
function isUsernameExists($connect, $username)
{
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('s', $username);

    $stmt->execute();

    $result = $stmt->get_result();

    return $result->num_rows > 0;
}

// Function to fetch all users
function fetchAllUsers($connect)
{
    $sql = "SELECT userid, username, Status, LastSeen, ProfilePictureURL 
            FROM users
            ORDER BY Status;";

    $result = $connect->query($sql);

    if (!$result) {
        die("Error fetching users: " . $connect->error);
    }

    return $result->fetch_all(MYSQLI_ASSOC);
}

function fetchUsersBySearch($connect, $searchTerm)
{
    $sql = "SELECT username, Status, LastSeen, ProfilePictureURL 
            FROM users
            WHERE username LIKE '%$searchTerm%'
            ORDER BY Status;";

    $result = $connect->query($sql);

    if (!$result) {
        die("Error fetching users: " . $connect->error);
    }

    return $result->fetch_all(MYSQLI_ASSOC);
}


function fetchUserById($connect, $id)
{
    $sql = "SELECT username, Status, ProfilePictureURL 
            FROM `users` 
            WHERE userid = '%$id%';";

    $result = $connect->query($sql);

    if (!$result) {
        die("Error fetching users: " . $connect->error);
    }

    return $result->fetch(MYSQLI_ASSOC);
}

?>
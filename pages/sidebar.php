<?php
include '../database/queries.php';
include '../database/connection.php';
?>

<div class="header">
    <!-- Profile Picture -->
    <?php profileimg("../assets/profile.svg") ?>

    <!-- Dropdown -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">New group</a></li>
            <li><a class="dropdown-item" href="#">Starred messages</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="../auth/logout.php">Log out</a></li>
        </ul>
    </div>
</div>

<!-- Search Bar -->
<form class="form-inline d-flex gap-2 my-1 ">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<?php
        if (isset($_GET['search'])) {
            // Display search results if a search term is provided
            $searchTerm = htmlspecialchars($_GET['search']);
            $data = fetchUsersBySearch($connect, $searchTerm);
            // dd($data);
        } else {
            // Display all users if no search term
            $data = fetchallusers($connect);
        }
?>

<!-- list og users -->
<div class="chats">
    <?php foreach ($data as $user): ?>
        <?php
        $userName = $user['username'] ?? '';
        $userStatus = $user['Status'] ?? '';
        $lastSeen = $user['LastSeen'] ?? '';
        $lastMessage = "No recent message";
        $profileImageUrl = "../assets/profile.svg";
        ?>
        <?php generateChatListItem($userName, formatDateTime($lastSeen), $lastMessage, $profileImageUrl, $userStatus); ?>
    <?php endforeach; ?>
    
</div>
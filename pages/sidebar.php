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
<form class="form-inline d-flex gap-2">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<!-- list og users -->
<div class="chats">
    <?php
    foreach ($data as $item) {
        generateChatListItem($item[1], formatDateTime($item[2]), $item[4], $item[3]);
    }
    ?>
</div>
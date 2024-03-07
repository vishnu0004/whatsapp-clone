<?php
$userid = $_GET['userid'] ?? '';
?>

<div class="header">
    <?php //renderUserState(); ?>

    <!-- Icons -->
    <div class="chat-side">
        <form class="form-inline d-flex gap-2 my-1 ">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-expanded="false">
                <svg viewBox="0 0 24 24" width="24" height="24" class="">
                    <path fill="currentColor"
                        d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z">
                    </path>
                </svg>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Contact info</a></li>
                <li><a class="dropdown-item" href="#">Select messages</a></li>
                <li><a class="dropdown-item" href="#">Close chat</a></li>
                <li><a class="dropdown-item" href="#">Mute notifications</a></li>
                <li><a class="dropdown-item" href="#">Disappearing messages</a></li>
                <li><a class="dropdown-item" href="#">Clear messages</a></li>
                <li><a class="dropdown-item" href="#">Delete chat</a></li>
            </ul>
        </div>
    </div>
</div>
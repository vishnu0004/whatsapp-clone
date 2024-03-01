<?php
function profileimg($imageUrl = './assets/profile.svg') {
    echo '<div class="userImg">';
    echo '<img src="' . $imageUrl . '" alt="profile picture" class="cover">';
    echo '</div>';
}

?>

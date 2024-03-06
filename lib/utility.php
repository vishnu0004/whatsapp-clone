<?php
function profileimg($imageUrl) {
    echo '<div class="userImg">';
    echo '<img src="' . $imageUrl . '" alt="profile picture" class="cover">';
    echo '</div>';
}

function generateChatListItem($userName, $lastSeen, $lastMessage, $profileImageUrl, $userStatus) {
    echo '<div class="block chat-list border-bottom">';
    echo '<!-- Img -->';
    echo '<div class="'. ($userStatus === 'Online' ? 'online ' : ' ') .'">';
    profileimg($profileImageUrl);
    echo '</div>';
    echo '<!-- Text -->';
    echo '<div class="h-text">';
    echo '<div class="head">';
    echo '<h4 title="' . $userName . '" aria-label="' . $userName . '">' . $userName . '</h4>';
    echo '<p class="time">' . $lastSeen . '</p>';
    echo '</div>';
    echo '<div class="message-chat">';
    echo '<div class="chat-text-icon">';
    echo '<span class="thanks">' . $lastMessage . '</span>';
    echo '<div class="icon-more">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20" width="19" height="20" class="hide animate\_\_animated animate\_\_fadeInUp">';
    echo '<path fill="currentColor" d="M3.8 6.7l5.7 5.7 5.7-5.7 1.6 1.6-7.3 7.2-7.3-7.2 1.6-1.6z"></path>';
    echo '</svg>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}


function formatDateTime($argumentDateTime) {
    // Convert the argument date-time string to a DateTime object
    $argumentDate = new DateTime($argumentDateTime);

    // Get the current date and time
    $currentDate = new DateTime();

    // Compare dates
    if ($argumentDate->format('Y-m-d') === $currentDate->format('Y-m-d')) {
        // Same day, return the timestamp
        return $argumentDate->format('h:i A');
    } elseif ($argumentDate->modify('+1 day')->format('Y-m-d') === $currentDate->format('Y-m-d')) {
        // Yesterday
        return 'Yesterday';
    } else {
        // Return the date in the format d/m/y
        return $argumentDate->format('j/n/Y');
    }
}

function dd($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    die();
}

?>

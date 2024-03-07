<?php
function profileimg($imageUrl)
{
    $html = <<<HTML
<div class="userImg">
    <img src="$imageUrl" alt="profile picture" class="cover">
</div>
HTML;

    echo $html;
}

function generateChatListItem($userid, $userName, $lastSeen, $lastMessage, $profileImageUrl, $userStatus)
{
    $statusClass = ($userStatus === 'Online') ? 'online' : '';

    $html = <<<HTML
<div class="block chat-list border-bottom" onclick="openChat('$userid')">
    <!-- Img -->
    <div class="$statusClass">
        <div class="userImg">
            <img src="$profileImageUrl" alt="profile picture" class="cover">
        </div>
    </div>
    <!-- Text -->
    <div class="h-text">
        <div class="head">
            <h4 title="$userName" aria-label="$userName">$userName</h4>
            <p class="time">$lastSeen</p>
        </div>
        <div class="message-chat">
            <div class="chat-text-icon">
                <span class="thanks">$lastMessage</span>
                <div class="icon-more">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20" width="19" height="20" class="hide animate\_\_animated animate\_\_fadeInUp">
                        <path fill="currentColor" d="M3.8 6.7l5.7 5.7 5.7-5.7 1.6 1.6-7.3 7.2-7.3-7.2 1.6-1.6z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    echo $html;
}

function renderUserState($name, $imageSrc)
{
    $html = <<<HTML
<div class="imgText" role="button">
    <div class="userImg">
        <img src="$imageSrc" alt="" class="cover">
    </div>
    <h4 title="$name" aria-label="$name">$name<br><span aria-label="online">online</span></h4>
</div>
HTML;
    return $html;
}



function formatDateTime($argumentDateTime)
{
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
<?php 
include '../front-end/header.php'; 
include '../lib/utility.php'; 

$data = array(
    array(1, 'Alice', '2024-03-03 15:30:00', 'images/profiles/alice.jpg', 'Hey, how are you?'), 
    array(2, 'Bob', '2024-03-02 14:45:00', 'images/profiles/bob.jpg', 'Meeting at 2 PM today.'), 
    array(3, 'Charlie', '2024-03-02 14:15:00', 'images/profiles/charlie.jpg', 'Thanks for your help!'), 
    array(5, 'Eva', '2024-02-28 13:00:00', 'images/profiles/eva.jpg', 'Can you send me the report?'), 
    array(6, 'Frank', '2024-02-27 12:30:00', 'images/profiles/frank.jpg', 'See you later!'), 
    array(7, 'Grace', '2024-02-26 12:00:00', 'images/profiles/grace.jpg', 'Happy birthday! 🎉'), 
    array(8, 'Harry', '2024-02-25 11:30:00', 'images/profiles/harry.jpg', 'Where are you now?'), 
    array(9, 'Ivy', '2024-02-24 11:00:00', 'images/profiles/ivy.jpg', "I'll be there in 10 minutes."), 
    array(10, 'Jack', '2024-02-23 10:30:00', 'images/profiles/jack.jpg', "How's it going?")
);

?>


    <div class="row gx-2 h-100 mx-4">
        <div class="col-4 border">
            <!-- sidebar -->
            <div class="header">
                <!-- Profile Picture -->
                <?php profileimg("../assets/profile.svg") ?>

                <!-- Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">New group</a></li>
                        <li><a class="dropdown-item" href="#">Starred messages</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
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
                    foreach($data as $item){
                        generateChatListItem($item[1], formatDateTime($item[2]), $item[4], $item[3]);
                    }
                ?>
            </div>
        </div>
        <!-- messages -->
        <div class="col-8 border  h-100"></div>



<?php include '../front-end/footer.php'; ?>
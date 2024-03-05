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
            <?php include 'sidebar.php'; ?>
        </div>

        <!-- messages -->
        <div class="col-8 border  h-100">
            
        </div>



<?php include '../front-end/footer.php'; ?>
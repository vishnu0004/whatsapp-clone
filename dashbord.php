<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location: index.html");
}

$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

if ($_SESSION['userdata']['status'] == 0) {
    $status = '<b style = "color:red;">Not Voted</b>';
} else {
    $status = '<b style = "color:green;">Voted</b>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online voting system - dashbord</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashbord.css">
</head>

<body>
    <div id="mainsection">
        <center>
            <div id="head">
                <a href="../"> <button id="backbtn">Back</button></a>
                <a href="logout.php"><button id="outbtn">Logout</button></a>
                <h1>Online voting system</h1>
            </div>
        </center>
        <hr>
        <div id="profile">
            <center> <img class="photo" style="border-radius: 10px;" src="./uploads/<?php echo $userdata['photo'] ?>" height="100" width="95"></center><br>
            <b>Name: </b><?php echo $userdata['name'] ?><br><br>
            <b>Mobile: </b><?php echo $userdata['mobile'] ?><br><br>
            <b>Address: </b><?php echo $userdata['address'] ?><br><br>
            <b>Status: </b><?php echo $status ?><br><br>
        </div>
        <div id="group">
            <?php
            if ($_SESSION['groupsdata']) {
                for ($i = 0; $i < count($groupsdata); $i++) {
            ?>
                    <div>
                        <img  style="float:right; border-radius:10px" src="./uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" width="95">
                        <b>Group Name : <?php echo $groupsdata[$i]['name'] ?></b><br><br>
                        <b>Votes : <?php echo $groupsdata[$i]['votes'] ?></b><br>
                        <form action="vote.php" method="post">
                            <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                            <input type="hidden" name="gid" value=" <?php echo $groupsdata[$i]['id'] ?>"><br>
                            <?php
                            if ($_SESSION['userdata']['status'] == 0) {
                            ?>
                                <input type="submit" name="votebtn" value="Vote" id="votebtn1">
                            <?php
                            } else { ?>

                                <button disabled type="button" name="votebtn" value="Vote" id="votebtn">Voted</button>

                            <?php
                            }
                            ?>
                        </form>
                    </div><br>
                    <hr>
            <?php
                }
            } else {
            }
            ?>
        </div>
    </div>
</body>

</html>
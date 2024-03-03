<?php
// include 'pdo.php';
session_start();

// If user submit the user id
if (isset($_POST['user_id'])) {
   $_SESSION['user_id'] = $_POST['user_id'];
   header('location: index.php');
   return;
}
?>

<?php include 'header.php'; ?>


<div class=" d-flex flex-column vh-100  justify-content-center align-items-center bg-light">
   <div class="border rounded-1 p-4 shadow-sm ">
      <div class="row p-2 bg-color-green">
         <h2 class="col-12 fw-bold">Online Chat App</h2>
      </div>
      <div class="row p-2 bg-color-gray max-height-90">
         <div class="col-12 d-flex ">
            <form class="d-flex flex-column gap-4" action="../auth/login.php" method="POST">
               <div>
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control">
               </div>
               <div>
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control">
               </div>
               <button type="submit" class="btn btn-primary form-control ">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>


<?php include 'footer.php'; ?>
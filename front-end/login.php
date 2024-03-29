<?php
session_start();

$error = isset($_SESSION['login-error']) ? $_SESSION['login-error'] : '';

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
                  <input type="text" name="username" id="username" class="form-control" required>
               </div>
               <div>
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
               </div>
               <div class="h5 text-danger">
                  <?php echo $error; ?>
               </div>
               <button type="submit" class="btn btn-primary form-control ">Submit</button>
               <p>don't have a account! <a href="/register">Register</a></p>
            </form>

         </div>
      </div>
   </div>
</div>


<?php include 'footer.php'; ?>
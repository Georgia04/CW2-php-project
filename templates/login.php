<?php
echo template("templates/partials/header.php");
echo $message; ?>

<div class="Container">
   <div class="justify-content-center">
      <form class="border rounded" name="frmLogin" action="authenticate.php" method="post">
         <div class="form-group mb-3">
            <label for="inputStudentID"> Student ID: </label>
            <input name="txtid" type="text" class="form-control" />
         </div>
         <div class="form-group mb-3">
            <label for="inputPassword"> Password: </label>
            <input name="txtpwd" type="password" placeholder="Password" class="form-control" />
         </div>
         <button type="submit" class="btn btn-primary" value="Login" name="btnlogin">Login</button>
      </form>
   </div>
</div>
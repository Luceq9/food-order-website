  <?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1> </br></br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="text" name="password" placeholder="Enter Your Password"></td>
                </tr>
                <br>
                <tr>
                    <td colspan="2">
                        <input type="submit" nam="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
  <?php include('partials/footer.php') ?>

  <?php
  if(isset($_POST['submit']))
  {
      //button clicked
        echo $full_name = $_POST['full_name'];
  }
  ?>

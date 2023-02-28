<?php include "header.php";
$id=$_GET['id'];
$sql="SELECT * FROM user_tbl WHERE id=$id";
$query=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($query);
if (isset($_POST['update_emp'])) {
$fullname=mysqli_real_escape_string($con,$_POST['user_name']);
$des=mysqli_real_escape_string($con,$_POST['user_des']);
$res=mysqli_real_escape_string($con,$_POST['user_res']);
$scale=mysqli_real_escape_string($con,$_POST['user_scale']);
$u_role=mysqli_real_escape_string($con,$_POST['user_role']);
$update="UPDATE user_tbl SET fullname='$fullname',user_des='$des',user_res='$res',user_scale='$scale',user_role='$u_role' WHERE id='$id'";
$query=mysqli_query($con,$update);
if ($query) {
  $_SESSION['upadte']="Record Updated Successfully";
  header("location:users_list.php");
}
}
?>
<div class="container mt-2">
  <form action="" method="POST">
    <div class="row p-4 register_form border border-secondary">
      <h5 class="text-center">Edit Employee Information</h5>
      <div class="col-md-5 m-auto">
        <div class="mb-2">
          <label>Fullname</label>
          <input type="text" name="user_name" placeholder="Fullname" class="form-control" required value="<?= $result['fullname']?>" maxlength="30" minlength="3"> </div>
        <div class="mb-2">
          <label>Designation</label>
          <input type="text" name="user_des" placeholder="Designation" class="form-control" required value="<?= $result['user_des']?>" maxlength="30" minlength="3"> </div>
        <div class="mb-2">
          <label>Responsibilities</label>
          <textarea class="form-control" rows="6" name="user_res" maxlength="300" minlength="10"><?= $result['user_res']?></textarea>
        </div>
      </div>
      <div class="col-md-5 m-auto">
        <div class="mb-2">
          <label>Scale</label>
          <select class="form-control required" name="user_scale">
            <option value="<?= $result['user_scale']?>" selected><?= $result['user_scale']?></option>
            <option value="BPS-09">BPS-09</option>
            <option value="BPS-10">BPS-10</option>
            <option value="BPS-11">BPS-11</option>
            <option value="BPS-12">BPS-12</option>
            <option value="BPS-13">BPS-13</option>
            <option value="BPS-14">BPS-14</option>
            <option value="BPS-15">BPS-15</option>
            <option value="BPS-16">BPS-16</option>
            <option value="BPS-17">BPS-17</option>
            <option value="BPS-18">BPS-18</option>
            <option value="BPS-19">BPS-19</option>
            <option value="BPS-20">BPS-20</option>
          </select>
        </div>
        <div class="mb-2">
          <label>User ID</label>
          <input disabled type="text" name="user_id" class="form-control" value="" maxlength="30" minlength="4"> </div>
        <div class="mb-2">
          <label>Password</label>
          <input disabled type="password" name="user_pass" class="form-control" value="" maxlength="100" minlength="4"> </div>
        <div class="mb-2">
          <label>User Role</label>
          <select required name="user_role" class="form-control">
            <?php $role=$result['user_role']?>
            <option selected value="<?= $role ?>"><?= ($role==0)?'Admin':'Normal User'; ?></option>
            <option value="1">Normal User</option>
            <option value="0">Admin</option>
          </select>
        </div>
        <div class="mb-2">
          <button class="btn btn-primary" name="update_emp">Update</button> <a href="users_list.php" class="btn btn-secondary">Back</a> </div>
      </div>
    </div>
  </form>
</div>
<?php include "footer.php" ?>
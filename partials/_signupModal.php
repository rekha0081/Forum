<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Signup to pDiscussion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/forum/partials/_handleSignup.php" method="post">
                <div class="modal-body">

                <div class="form-group">
            <label for="username">Username</label>
            <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" maxlength="23" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <!-- <button type="submit" class="btn btn-primary">SignUp</button> -->
        <button type="submit" class="btn btn-outline-success">Signup</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-success">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
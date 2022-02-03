<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to pDiscussion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/forum/partials/_handleLogin.php" method="post">
                <div class="modal-body">

                <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       
         
        
                    <button type="submit" class="btn btn-outline-success">Login</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
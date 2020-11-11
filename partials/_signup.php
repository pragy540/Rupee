<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signupLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupLabel">Signup Here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action='/eurp/partials/_handle_signup.php' method="post">
                    <div class="form-group">
                        <label for="signupid">LDAP</label>
                        <input type="text" class="form-control" id="signupid" name="signupid">
                    </div>
                    <div class="form-group">
                        <label for="signup_pass">Password</label>
                        <input type="password" class="form-control" id="signup_pass" name="signup_pass">
                    </div>
                    <div class="form-group">
                        <label for="signup_cpass">Confirm Password</label>
                        <input type="password" class="form-control" id="signup_cpass" name="signup_cpass">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
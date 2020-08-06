<!--Login /signup / acount Button-->
<!-- Button trigger modal login or signup-->
<button type="button" class="btn login-button" data-toggle="modal" data-target="#loginModal">
    <i class="fas fa-sign-in-alt"></i>
    <span class='login-button-text'>Login</span>
</button>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                  
                        <h2 class="coal">Login</h2>
                        <!--Login panel-->
                        <form>
                        <div class="form-group">
                            <label for="loginEmail">Email</label>
                            <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="loginPassword" class="form-control" id="loginPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <!---->
                    </div>



                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">

                        <h2>Signup</h2>
                        <!--Login panel-->
                        <form>
                        <div class="form-group">
                            <label for="signupEmail">Email</label>
                            <input type="email" class="form-control" id="signupEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="signupPassword">Password</label>
                            <input type="signupPassword" class="form-control" id="signupPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Signup</button>
                        </form>
                        <!---->


                    </div>



                </div>

                <br>

                <p role="tablist">
                    You can 
                    <a class="" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    or
                    <a class="" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Signup</a>
                </p>

            </div>
        </div>
    </div>
</div>

    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form autocomplete="off" method="post" action="<?=URL?>Login/verify" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" autocomplete="off">
                        <label for="email">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                        <label for="password">Password</label>
                    </div>
                </div>
<!--                <div class="form-group">-->
<!--                    <div class="checkbox">-->
<!--                        <label>-->
<!--                            <input type="checkbox" value="remember-me">-->
<!--                            Remember Password-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </div>-->
                <button type="submit" class="btn btn-primary btn-block">Login</button>
<!--                <a class="btn btn-primary btn-block" href="index.html">Login</a>-->
            </form>
<!--            <div class="text-center">-->
<!--                <a class="d-block small mt-3" href="register.html">Register an Account</a>-->
<!--                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
<!--            </div>-->
        </div>
    </div>

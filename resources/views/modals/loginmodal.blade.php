<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <img class="img-circle" id="img_logo" src="/Carousel/o.jpg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" method="POST">
                        <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your email and password.</span>
                            </div>
                            <input id="login_email" class="form-control" name="email" type="text" placeholder="E-Mail" required>
                            <input id="login_password" class="form-control" name="password" type="password" placeholder="Password" required>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="login_remember" name="remember"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->

                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-lost-msg">
                                {{--<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>--}}
                                <span id="text-lost-msg">While OCGR is in Alpha, please contact your friendly admin on discord to reset your password.</span>
                            </div>
                            {{--<input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>--}}
                        </div>
                        <div class="modal-footer">
                            <div>
                                {{--<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>--}}
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Lost Password Form -->

                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register a new account.</span>
                            </div>
                            <input id="register_username" class="form-control" type="text" placeholder="Username" name="name" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" name="email" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" name="password" required>
							<input id="register_password_confirmation" class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Register Form -->

                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

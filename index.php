<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodThings</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body>
    <div class=" container-fluid  vh-100 bg-black">
        <div class=" row">
            <div class="col-6 d-none d-lg-block background"></div>
            <div class=" col-12  col-lg-6">
                <div class=" row justify-content-center">
                    <div class=" col-12 mt-1 logo "></div>
                    <div class=" col-12 col-lg-11 mx-1 mt-2 mb-4 rounded " style=" box-shadow: 0px 0px 10px 1px orange; margin-left: 2px;" id="signUpBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title2 text-warning fs-1 fw-bold">Create New Account</p>
                            </div>
                            <!-- <div class="col-12 d-none" id="msgdiv">
                                <span class="text-danger" id="msg"></span>

                            </div> -->
                            <div class="col-6 mt-2">
                                <label class="form-label text-warning fs-5 fw-bold" id="fname">First Name</label>
                                <input type="text" class="form-control" id="f" />
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label text-warning fs-5 fw-bold" id="lname">Last Name</label>
                                <input type="text" class="form-control" id="l" />
                            </div>
                            <div class="col-12 mt-2">
                                <label class="form-label text-warning fs-5 fw-bold" id="email">Email</label>
                                <input type="email" class="form-control" id="e" />
                            </div>
                            <div class="col-12 mt-2">
                                <label class="form-label text-warning fs-5 fw-bold" id="password">Password</label>
                                <input type="password" class="form-control" id="p" />
                            </div>
                            <div class="col-6 mt-2">
                                <label class="form-label text-warning fs-5 fw-bold" id="mobile">Mobile</label>
                                <input type="text" class="form-control" id="m" />
                            </div>
                         
                            <div class=" col-6 mt-2">
                                <label class=" form-label text-warning fs-5 fw-bold" id="gender">Gender</label>
                                <select class="form-select" id="g">
                                <option class=" rounded-2">Select Gender</option>
                                    <?php
                                    require "connection.php";
                                    $rs = Database::search("SELECT * FROM `gender` ");
                                    $n = $rs->num_rows;
                                    for ($x = 0; $x < $n; $x++) {

                                        $d = $rs->fetch_assoc();

                                    ?>



                                        <option class=" rounded-2" value="<?php echo $d["id"]; ?>"><?php echo $d["name"] ?></option>

                                    <?php
                                    }
                                    ?>


                                    

                                </select>
                            </div>
                            <div class=" mt-4 mb-2 col-12">
                                <button class=" btn btn-dark col-12 fw-bold text-warning" onclick="changeView();">Sign In</button>
                                <button class=" btn btn-warning col-12 mt-1 fw-bold" onclick="signUp();">Sign Up</button>
                            </div>

                        </div>

                    </div>
                    <div class=" col-12 col-lg-11 mt-2  rounded d-none" style=" box-shadow: 0px 0px 10px 1px orange;" id="signInBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title2 text-warning fs-1 fw-bold">Sign In</p>

                            </div>



                            <div class="col-12">
                                <label class="form-label text-warning fs-5 fw-bold">Email</label>
                                <input type="email" class="form-control" id="email2" />
                            </div>
                            <label class="form-label text-warning fs-5 fw-bold">Password</label>
                            <div class="input-group mb-3 col-12" >

                                <input type="password" class="form-control" id="password2" />

                            </div>

                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-label text-warning">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="link-warning" onclick="forgotPassword();">Forgot Password?</a>
                            </div>
                            <div class="col-12 col-lg-12 d-grid">
                                <button class="btn btn-dark text-warning" onclick="changeView();">Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-12 d-grid">
                                <button class="btn btn-warning mb-3" onclick="signIn();">Sign In</button>
                            </div>

                        </div>
                    </div>
                    <!-- modal -->

                    <div class="modal" tabindex="-1" id="forgotPasswordModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Reset Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3">

                                        <div class="col-6">
                                            <label class="form-label">New Password</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" id="np" />
                                                <button class=" btn btn-warning" type="button" id="npb" onclick="showPassword();">Show</button>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label">Re-type Password</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" id="rnp" />
                                                <button class=" btn btn-warning " type="button" id="rnpb" onclick="showPassword2();">Show</button>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Verification Code</label>
                                            <input type="text" class="form-control" id="vc" />
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-warning" onclick="resetPassword();">Reset Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal -->

                <div class="col-6 fixed-bottom  d-none  d-lg-block">
                    <p class="text-center  text-white">&copy; 2023 GoodThings || All Right Reserved</p>
                </div>

            </div>

        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>
<?php include 'header.php'; ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add User</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="users.html">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title user-info">
                                        User Information
                                        <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>

                                <!-- Username -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Username <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="Enter Username" />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Email <span class="login-danger">*</span></label>
                                        <input class="form-control" type="email" placeholder="Enter Email Address" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Password <span class="login-danger">*</span></label>
                                        <input class="form-control" type="password" placeholder="Enter Password" />
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Confirm Password <span class="login-danger">*</span></label>
                                        <input class="form-control" type="password" placeholder="Confirm Password" />
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" placeholder="Enter Phone Number" />
                                    </div>
                                </div>

                                <!-- Role -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Role <span class="login-danger">*</span></label>
                                        <select class="form-control select">
                                            <option>Please Select Role</option>
                                            <option>Admin</option>
                                            <option>User</option>
                                            <option>Manager</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Upload Profile Photo -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group students-up-files">
                                        <label>Upload Profile Photo (150px X 150px)</label>
                                        <div class="uplod">
                                            <label class="file-upload image-upbtn mb-0">
                                                Choose File <input type="file" />
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <div class="user-submit">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
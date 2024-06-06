<?php include 'header.php'; ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">User Management</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="users.html">Users</a>
                            </li>
                            <li class="breadcrumb-item active">All Users</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by ID ..." />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ..." />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Phone ..." />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-user-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Users</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                    <a href="students-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                        Download</a>
                                    <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-user table-hover table-center mb-0 datatable table-striped">
                                <thead class="user-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something" />
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>DOB</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something" />
                                            </div>
                                        </td>
                                        <td>USR2209</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="user-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image" /></a>
                                                <a href="user-details.html">Dr. Aaliyah</a>
                                            </h2>
                                        </td>
                                        <td>Doctor</td>
                                        <td>2 Feb 1982</td>
                                        <td>097 3584 5870</td>
                                        <td>911 Deer Ridge Drive, USA</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="javascript:;" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>
                                                <a href="edit-user.html" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something" />
                                            </div>
                                        </td>
                                        <td>USR2213</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="user-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image" /></a>
                                                <a href="user-details.html">Malynne</a>
                                            </h2>
                                        </td>
                                        <td>Patient</td>
                                        <td>3 June 1990</td>
                                        <td>242 362 3100</td>
                                        <td>Bacardi Rd P.O. Box N-4880, New Providence</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="javascript:;" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>
                                                <a href="edit-user.html" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something" />
                                            </div>
                                        </td>
                                        <td>USR1234</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="user-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image" /></a>
                                                <a href="user-details.html">Nathan Humphries</a>
                                            </h2>
                                        </td>
                                        <td>Administrator</td>
                                        <td>26 Apr 1984</td>
                                        <td>077 3499 9959</td>
                                        <td>86 Lamphey Road, Thelnetham</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="javascript:;" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>
                                                <a href="edit-user.html" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright © 2022 Dreamguys.</p>
    </footer>
</div>
<?php include 'footer.php'; ?>
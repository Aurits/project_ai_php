<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Manage Scans</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Scans</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Search Form -->
        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Scan ID ..." />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Patient Name ..." />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Scan Type ..." />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Search Form -->

        <!-- Scans Table -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Scans</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="scans.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                    <a href="scans-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                        Download</a>
                                    <a href="add-scan.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something" />
                                            </div>
                                        </th>
                                        <th>Scan ID</th>
                                        <th>Patient Name</th>
                                        <th>Scan Type</th>
                                        <th>Doctor</th>
                                        <th>Date</th>
                                        <th>Result</th>
                                        <th>Status</th>
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
                                        <td>SCAN1001</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="scan-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="Patient Image" /></a>
                                                <a href="scan-details.html">John Doe</a>
                                            </h2>
                                        </td>
                                        <td>CT Scan</td>
                                        <td>Dr. Smith</td>
                                        <td>2024-06-01</td>
                                        <td>Normal</td>
                                        <td>Completed</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="scan-details.html" class="btn btn-sm bg-success-light me-2">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="edit-scan.html" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check check-tables">
                                                <input class="form-check-input" type="checkbox" value="something" />
                                            </div>
                                        </td>
                                        <td>SCAN1002</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="scan-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="Patient Image" /></a>
                                                <a href="scan-details.html">Jane Smith</a>
                                            </h2>
                                        </td>
                                        <td>MRI</td>
                                        <td>Dr. Johnson</td>
                                        <td>2024-06-05</td>
                                        <td>Abnormal</td>
                                        <td>Pending</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="scan-details.html" class="btn btn-sm bg-success-light me-2">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="edit-scan.html" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- More rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Scans Table -->
    </div>

    <!-- Footer -->
    <footer>
        <p>Copyright © 2024 YourCompany.</p>
    </footer>
    <!-- /Footer -->
</div>

<?php include 'footer.php'; ?>
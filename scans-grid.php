<?php include 'header.php'; ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Scans</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Scans</li>
                    </ul>
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
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
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
                                    <a href="teachers.html" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                                    <a href="teachers-grid.html" class="btn btn-outline-gray me-2 active"><i class="feather-grid"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="student-pro-list">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="scan-details.php">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/skin/image.jpeg" />
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5>
                                                        <a href="scan-details.php">Scan 101</a>
                                                    </h5>
                                                    <h6>Type: X-Ray</h6>
                                                    <p>Date: 2024-06-01</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="scan-details.php">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/skin/disease.jpg" />
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5>
                                                        <a href="scan-details.php">Scan 101</a>
                                                    </h5>
                                                    <h6>Type: X-Ray</h6>
                                                    <p>Date: 2024-06-01</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="scan-details.php">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/skin/disease1.jpg" />
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5>
                                                        <a href="scan-details.php">Scan 101</a>
                                                    </h5>
                                                    <h6>Type: X-Ray</h6>
                                                    <p>Date: 2024-06-01</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="student-box flex-fill">
                                                <div class="student-img">
                                                    <a href="scan-details.php">
                                                        <img class="img-fluid" alt="Students Info" src="assets/img/skin/image.jpeg" />
                                                    </a>
                                                </div>
                                                <div class="student-content pb-0">
                                                    <h5>
                                                        <a href="scan-details.php">Scan 101</a>
                                                    </h5>
                                                    <h6>Type: X-Ray</h6>
                                                    <p>Date: 2024-06-01</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
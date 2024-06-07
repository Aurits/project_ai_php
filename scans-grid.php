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

        <div class="scan-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Scan ID ..." />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ..." />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Type ..." />
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-scan-btn">
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
                                    <a href="scans.html" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                                    <a href="scans-grid.html" class="btn btn-outline-gray me-2 active"><i class="feather-grid"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="scan-pro-list">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="scan-box flex-fill">
                                                <div class="scan-img">
                                                    <a href="scan-details.html">
                                                        <img class="img-fluid" alt="Scan Thumbnail" src="assets/img/scans/scan-01.jpg" />
                                                    </a>
                                                </div>
                                                <div class="scan-content pb-0">
                                                    <h5>
                                                        <a href="scan-details.html">Scan 101</a>
                                                    </h5>
                                                    <h6>Type: X-Ray</h6>
                                                    <p>Date: 2024-06-01</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat for other scan cards -->
                                <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="scan-box flex-fill">
                                                <div class="scan-img">
                                                    <a href="scan-details.html">
                                                        <img class="img-fluid" alt="Scan Thumbnail" src="assets/img/scans/scan-02.jpg" />
                                                    </a>
                                                </div>
                                                <div class="scan-content pb-0">
                                                    <h5>
                                                        <a href="scan-details.html">Scan 102</a>
                                                    </h5>
                                                    <h6>Type: MRI</h6>
                                                    <p>Date: 2024-06-03</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Continue for other scans -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright © 2024 YourCompanyName.</p>
    </footer>
</div>
<?php include 'footer.php'; ?>
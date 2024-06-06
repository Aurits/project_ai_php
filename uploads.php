<?php include 'header.php'; ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="uploads.html">Uploads</a>
                            </li>
                            <li class="breadcrumb-item active">All Images</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="upload-group-form">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Upload Skin Image</label>
                        <div class="change-photo-btn">
                            <div>
                                <p>Add Image</p>
                            </div>
                            <input type="file" class="upload" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-categories-btn pt-0">
            <div class="bank-details-btn">
                <a href="blog.html" class="btn bank-cancel-btn me-2">Add</a>
            </div>
        </div>

        <div class="scan-status">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">Scan Status</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 table-hover table-center mb-0 datatable table-striped">
                                    <thead class="scan-thread">
                                        <tr>
                                            <th>Image ID</th>
                                            <th>Image</th>
                                            <th>Upload Date</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>IMG001</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="scan-details.html" class="avatar avatar-sm me-2">
                                                        <img class="avatar-img rounded-circle" src="assets/img/skin/image.jpeg" alt="Skin Image" />
                                                    </a>
                                                    <a href="scan-details.html">Skin Lesion 1</a>
                                                </h2>
                                            </td>
                                            <td>1 Feb 2024</td>
                                            <td>
                                                <div class="spinner-border text-warning m-2" role="status">
                                                    <span class="visually-hidden">Pending...</span>
                                                </div>
                                                Pending
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="edit-scan.html" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>IMG002</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="scan-details.html" class="avatar avatar-sm me-2">
                                                        <img class="avatar-img rounded-circle" src="assets/img/skin/image.jpeg" alt="Skin Image" />
                                                    </a>
                                                    <a href="scan-details.html">Skin Lesion 2</a>
                                                </h2>
                                            </td>
                                            <td>2 Feb 2024</td>
                                            <td>
                                                <div class="spinner-grow text-info m-2" role="status">
                                                    <span class="visually-hidden">In Progress...</span>
                                                </div>
                                                In Progress
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="edit-scan.html" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>IMG003</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="scan-details.html" class="avatar avatar-sm me-2">
                                                        <img class="avatar-img rounded-circle" src="assets/img/skin/image.jpeg" alt="Skin Image" />
                                                    </a>
                                                    <a href="scan-details.html">Skin Lesion 3</a>
                                                </h2>
                                            </td>
                                            <td>3 Feb 2024</td>
                                            <td>
                                                <div class="spinner-border text-success m-2" role="status">
                                                    <span class="visually-hidden">Completed...</span>
                                                </div>
                                                Completed
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="edit-scan.html" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>
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
    </div>

    <footer>
        <p>Copyright © 2024 Dreamguys.</p>
    </footer>

    <?php include 'footer.php'; ?>
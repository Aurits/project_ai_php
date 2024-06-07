<?php include 'header.php'; ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Notification</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="notifications.html">Notifications</a>
                        </li>
                        <li class="breadcrumb-item active">Add Notification</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form id="add-notification-form">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Notification Information</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Notification ID <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Notification ID" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Title <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Title" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Type <span class="login-danger">*</span></label>
                                        <select class="form-control" required>
                                            <option value="" disabled selected>Select Type</option>
                                            <option value="System Alert">System Alert</option>
                                            <option value="User Message">User Message</option>
                                            <option value="System Update">System Update</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Recipient <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Recipient" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Date <span class="login-danger">*</span></label>
                                        <input type="date" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Status <span class="login-danger">*</span></label>
                                        <select class="form-control" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="Unread">Unread</option>
                                            <option value="Read">Read</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="4" placeholder="Enter Notification Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
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

<script>
    document.getElementById('add-notification-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
    });
</script>
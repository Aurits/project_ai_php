<?php include 'header.php'; ?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Welcome, Ronnie!</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Upcoming Appointments</h6>
                <h3>3</h3>
              </div>
              <div class="db-icon">
                <i class="fas fa-calendar"></i>
                <!-- Font Awesome calendar icon -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Pending Test Results</h6>
                <h3>2</h3>
              </div>
              <div class="db-icon">
                <i class="fas fa-flask"></i>
                <!-- Font Awesome test tube icon -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Prescriptions</h6>
                <h3>5</h3>
              </div>
              <div class="db-icon">
                <i class="fas fa-prescription-bottle"></i>
                <!-- Font Awesome prescription icon -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Consultations</h6>
                <h3>2</h3>
              </div>
              <div class="db-icon">
                <i class="fas fa-stethoscope"></i>
                <!-- Font Awesome stethoscope icon -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-12 col-xl-8">
        <div class="card flex-fill comman-shadow">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-6">
                <h5 class="card-title">Today’s Appointments</h5>
              </div>
              <div class="col-6">
                <ul class="chart-list-out">
                  <li>
                    <span class="circle-blue"></span><span class="circle-gray"></span><span class="circle-gray"></span>
                  </li>
                  <li class="lesson-view-all">
                    <a href="#">View All</a>
                  </li>
                  <li class="star-menus">
                    <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="dash-circle">
            <div class="row">
              <div class="col-lg-3 col-md-3 dash-widget1">
                <div class="circle-bar circle-bar2">
                  <div class="circle-graph2" data-percent="80">
                    <b>80%</b>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3">
                <div class="dash-details">
                  <div class="lesson-activity">
                    <div class="lesson-imgs">
                      <img src="assets/img/icons/doctor.svg" alt="" />
                    </div>
                    <div class="views-lesson">
                      <h5>Doctor</h5>
                      <h4>Dr. Smith</h4>
                    </div>
                  </div>
                  <div class="lesson-activity">
                    <div class="lesson-imgs">
                      <img src="assets/img/icons/time.svg" alt="" />
                    </div>
                    <div class="views-lesson">
                      <h5>Time</h5>
                      <h4>10:00 AM</h4>
                    </div>
                  </div>
                  <div class="lesson-activity">
                    <div class="lesson-imgs">
                      <img src="assets/img/icons/stethoscope.svg" alt="" />
                    </div>
                    <div class="views-lesson">
                      <h5>Department</h5>
                      <h4>Cardiology</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3">
                <div class="dash-details">
                  <div class="lesson-activity">
                    <div class="lesson-imgs">
                      <img src="assets/img/icons/test-tube.svg" alt="" />
                    </div>
                    <div class="views-lesson">
                      <h5>Tests</h5>
                      <h4>Blood Test</h4>
                    </div>
                  </div>
                  <div class="lesson-activity">
                    <div class="lesson-imgs">
                      <img src="assets/img/icons/prescription.svg" alt="" />
                    </div>
                    <div class="views-lesson">
                      <h5>Prescriptions</h5>
                      <h4>3</h4>
                    </div>
                  </div>
                  <div class="lesson-activity">
                    <div class="lesson-imgs">
                      <img src="assets/img/icons/notes.svg" alt="" />
                    </div>
                    <div class="views-lesson">
                      <h5>Notes</h5>
                      <h4>Update</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
                <div class="skip-group">
                  <button type="submit" class="btn btn-info skip-btn">
                    Cancel
                  </button>
                  <button type="submit" class="btn btn-info continue-btn">
                    Confirm
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="col-12 col-lg-12 col-xl-4 d-flex">
        <div class="card flex-fill comman-shadow">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-6">
                <h5 class="card-title">Activity Timeline</h5>
              </div>
              <div class="col-6">
                <ul class="chart-list-out">
                  <li><span class="circle-blue"></span></li>
                  <li class="star-menus">
                    <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="activity-set">
              <div class="activity-groups">
                <img src="assets/img/icons/buliding-icon.svg" alt="Activity" />
                <h6>Cardiology Consultation</h6>

                <div class="">
                  <p>Yesterday, 10:00 AM</p>
                </div>
              </div>
              <div class="activity-groups">
                <img src="assets/img/icons/buliding-icon.svg" alt="Activity" />
                <h6>Blood Test</h6>

                <div class="">
                  <p>Monday, 9:00 AM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
</div>
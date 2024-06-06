<?php include 'header.php'; ?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Welcome Admin!</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Admin</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Users Card -->
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Users</h6>
                <h3>1200</h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Scans Conducted Card -->
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Scans Conducted</h6>
                <h3>1500</h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Reports Card -->
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Pending Reports</h6>
                <h3>45</h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Revenue Card (Example Placeholder) -->
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Revenue</h6>
                <h3>$505</h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Charts Row -->
    <div class="row">
      <!-- Overview Chart -->
      <div class="col-md-12 col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-6">
                <h5 class="card-title">Overview</h5>
              </div>
              <div class="col-6">
                <ul class="chart-list-out">
                  <li><span class="circle-blue"></span>Scans</li>
                  <li><span class="circle-green"></span>Users</li>
                  <li class="star-menus">
                    <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="apexcharts-areas"></div>
          </div>
        </div>
      </div>
      <!-- Number of Scans Chart -->
      <div class="col-md-12 col-lg-6">
        <div class="card card-chart">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-6">
                <h5 class="card-title">Number of Scans</h5>
              </div>
              <div class="col-6">
                <ul class="chart-list-out">
                  <li><span class="circle-blue"></span>Completed</li>
                  <li><span class="circle-green"></span>Pending</li>
                  <li class="star-menus">
                    <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="bars"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Scans and Activities Row -->
    <div class="row">
      <!-- Recent Scans -->
      <div class="col-xl-6 d-flex">
        <div class="card flex-fill comman-shadow">
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title">Recent Scans</h5>
            <ul class="chart-list-out student-ellips">
              <li class="star-menus">
                <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-center table-borderless table-striped">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th class="text-center">Scan Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-end">Result</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-nowrap">
                      <div>SCAN2209</div>
                    </td>
                    <td class="text-nowrap">
                      <a href="profile.html">
                        <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" width="25" alt="User" />
                        John Smith
                      </a>
                    </td>
                    <td class="text-center">2023-05-01</td>
                    <td class="text-center">Completed</td>
                    <td class="text-end">
                      <div>Negative</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap">
                      <div>SCAN1245</div>
                    </td>
                    <td class="text-nowrap">
                      <a href="profile.html">
                        <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="25" alt="User" />
                        Jolie Hoskins
                      </a>
                    </td>
                    <td class="text-center">2023-04-28</td>
                    <td class="text-center">Pending</td>
                    <td class="text-end">
                      <div>N/A</div>
                    </td>
                  </tr>
                  <!-- Additional rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Activity Feed -->
      <div class="col-xl-6 d-flex">
        <div class="card flex-fill comman-shadow">
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title">Activity Feed</h5>
            <ul class="chart-list-out student-ellips">
              <li class="star-menus">
                <a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="activity-groups">
              <div class="activity-awards">
                <div class="award-boxs">
                  <img src="assets/img/icons/award-icon-01.svg" alt="Award" />
                </div>
                <div class="award-list-outs">
                  <h4>User John Doe uploaded a new scan</h4>
                  <h5>Scan ID: SCAN1234</h5>
                </div>
                <div class="award-time-list">
                  <span>1 Day ago</span>
                </div>
              </div>
              <div class="activity-awards">
                <div class="award-boxs">
                  <img src="assets/img/icons/award-icon-02.svg" alt="Award" />
                </div>
                <div class="award-list-outs">
                  <h4>User Jane Doe's scan completed</h4>
                  <h5>Result: Positive</h5>
                </div>
                <div class="award-time-list">
                  <span>2 Days ago</span>
                </div>
              </div>
              <!-- Additional activities as needed -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Chart Scripts -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Overview Chart
    var options = {
      chart: {
        type: "area",
        height: 300,
      },
      series: [{
          name: "Scans",
          data: [30, 40, 35, 50, 49, 60, 70, 91, 125],
        },
        {
          name: "Users",
          data: [20, 30, 25, 40, 49, 50, 60, 70, 91],
        },
      ],
      xaxis: {
        categories: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
        ],
      },
    };
    var chart = new ApexCharts(
      document.querySelector("#apexcharts-areas"),
      options
    );
    chart.render();

    // Number of Scans Chart
    var options = {
      chart: {
        type: "bar",
        height: 300,
      },
      series: [{
          name: "Completed",
          data: [44, 55, 41, 67, 22, 43, 21],
        },
        {
          name: "Pending",
          data: [13, 23, 20, 8, 13, 27, 33],
        },
      ],
      xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      },
    };
    var chart = new ApexCharts(document.querySelector("#bars"), options);
    chart.render();
  });
</script>

<?php include 'footer.php'; ?>
<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("Location: login.php");
}
include 'common.php';
$site_id = $_GET["site_id"];
$site_id_search = $_GET["site_id_search"];
$page_number = isset($_GET['page_number']) ? $_GET['page_number'] : 1;
$page_size = isset($_GET["page_size"]) ? $_GET["page_size"] : 10;

$hours_interval = 24;
$time = time() + GMT - (24 * 3600);
$date = date_create("@$time");
$time = strtotime($date->format("Y-m-d 23:59:59"));

$_SESSION['range_start'] = $_GET['range_start'] ? $_GET['range_start'] : unixToDate(($time + 1) - $hours_interval * 3600);
$_SESSION['range_end'] = $_GET['range_end'] ? $_GET['range_end'] : unixToDate($time);

$sites = GetSitesByUser();
if (!isset($site_id) && $sites) $site_id = $sites[0][1];

$report = GetAlarmTrackingReport($site_id, $page_number, $page_size, $_SESSION['range_start'], $_SESSION['range_end']);

$total_rows = $report["count"];
$total_pages = ceil($total_rows / $page_size);

// Pass filters from GET parameters to the function
$filters = [
    'site_id' => $_GET['site_id'] ?? '',
    'site_name' => $_GET['site_name'] ?? '',
    'global_id' => $_GET['global_id'] ?? '',
    'circle_name' => $_GET['circle_name'] ?? '',
    'cluster_name' => $_GET['cluster_name'] ?? '',
    'district_name' => $_GET['district_name'] ?? '',
    'from_date' => $_GET['from_date'] ?? '',
    'to_date' => $_GET['to_date'] ?? '',
];
// Fetch all possible filter values from database
$allClusters = GetAllClusters();
$allCircles = GetAllCircles();
$allDistricts = GetAllDistricts();

// Fetch fuel records (existing code)
$fuelRecords = GetAllFuelMaintenanceReports($filters);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fuel Maintenance Report</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fuel-maintenance-report.css">
</head>

<body>
  <div class="container-fluid background">
    <h1 class="page-heading baloo-bhaijaan-2 text-white">Fuel Maintenance Report</h1>
    <div class="filter-area">
      <form id="filterForm">
        <div class="dropdowns">

          <!-- Cluster Dropdown -->
          <div class="form-group">
            <label for="cluster_name" class="text-white">Cluster :</label>
            <select name="cluster_name" id="cluster_name" class="custom-select form-control">
              <option value="">All Clusters</option>
              <?php foreach ($allClusters as $cluster): ?>
              <option value="<?= htmlspecialchars($cluster) ?>">
                <?= htmlspecialchars($cluster) ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>

          <!-- Circle Dropdown -->
          <div class="form-group">
            <label for="circle_name" class="text-white">Circle :</label>
            <select name="circle_name" id="circle_name" class="custom-select form-control">
              <option value="">All Circles</option>
              <?php foreach ($allCircles as $circle): ?>
              <option value="<?= htmlspecialchars($circle) ?>">
                <?= htmlspecialchars($circle) ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>

          <!-- District Dropdown -->
          <div class="form-group">
            <label for="district_name" class="text-white">District :</label>
            <select name="district_name" id="district_name" class="custom-select form-control">
              <option value="">All Districts</option>
              <?php foreach ($allDistricts as $district): ?>
              <option value="<?= htmlspecialchars($district) ?>">
                <?= htmlspecialchars($district) ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="button" id="filterButton" class="btn btn-primary btn-custom">Apply Filter</button>

        </div>
        <div class="text-search">


          <div class="form-group">
            <label for="searchInput" class="text-white">Search By :</label>
            <input type="text" id="searchInput" class="form-control custom-select"
              placeholder="Site Name, Site ID, or Global ID">
          </div>
          <div class="form-group">
            <label for="from_date" class="text-white">From :</label>
            <input type="date" id="from_date" class="form-control custom-select">
          </div>
          <div class="form-group">
            <label for="to_date" class="text-white">To :</label>
            <input type="date" id="to_date" class="form-control custom-select">
          </div>
          <button type="button" id="downloadExcelButton" class="btn btn-success btn-custom">Download Excel</button>

        </div>

      </form>
    </div>



    <div class="table-container table-background">
      <table class="custom-responsive-table">
        <thead>
          <tr>
            <th class="custom-table-header">S. No.</th>
            <th class="custom-table-header">Site ID</th>
            <th class="custom-table-header">Site Name</th>
            <th class="custom-table-header">Global ID</th>
            <th class="custom-table-header">Circle</th>
            <th class="custom-table-header">Cluster</th>
            <th class="custom-table-header">District</th>
            <th class="custom-table-header">SAM Name</th>
            <th class="custom-table-header">From Date</th>
            <th class="custom-table-header">To Date</th>
            <th class="custom-table-header">DG (Run Hours)</th>
            <th class="custom-table-header">DG FEM</th>
            <th class="custom-table-header">Approved CPH</th>
            <th class="custom-table-header">Filling Date</th>
            <th class="custom-table-header">Filling Qty.</th>
            <th class="custom-table-header">Consumption (To Day)</th>
            <th class="custom-table-header">Tank Balance</th>
            <th class="custom-table-header">Remarks</th>
          </tr>
        </thead>
        <tbody>
          <!-- Data will be filled by JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- Pagination area start here.. -->
  <div>
    <div class="container">
      <div class="pagination-wrapper">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pagination-text">
              <b>Total Rows:</b>&nbsp;
              <span><?php echo $total_rows; ?></span>
              &nbsp;
              <b>Row/Page:</b>
              &nbsp;
              <sana><?php echo $page_size; ?></sana>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="text-center">
              <b>
                <a href="#" class="pagination-btn" onclick="goToFirstPage(event);">
                  <?php if (!($page_number <= 1)) echo "<img src=\"/media/icons/btnFirst.png\">"; ?>
                </a>
              </b>
              <b>
                <a href="#" class=" pagination-btn" onclick="goToPreviousPage(event);">
                  <?php if (!($page_number <= 1)) echo "<img src=\"/media/icons/btnPrevious.png\">"; ?>
                </a>
              </b>
              &nbsp; &nbsp;
              <select class="form-select" aria-label="Default select example" onchange="handlePageSelect(event);">
                <?php
                array_map(function ($page) use ($page_number) {
                  if ($page == $page_number) echo "<option selected value=\"$page\">$page</option>";
                  else echo "<option value=\"$page\">$page</option>";
                }, range(1, $total_pages));
                ?>
              </select>
              &nbsp;
              <b>
                <a href="#" class="pagination-btn" onclick="goToNextPage(event);">
                  <?php if (!($page_number >= $total_pages)) echo "<img src=\"/media/icons/btnNext.png\">"; ?>
                </a>
              </b>
              &nbsp;
              <b>
                <a href="#" class="pagination-btn" onclick="goToLastPage(event);">
                  <?php if (!($page_number >= $total_pages)) echo "<img src=\"/media/icons/btnLast.png\">"; ?>
                </a>
              </b>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="text-right pagination-text">
              <b>Current Page:</b>
              &nbsp;
              <span><?php echo $page_number; ?></span>
              &nbsp;
              <b>Of</b>
              &nbsp;
              <span><?php echo $total_pages; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- Pagination area close here.. -->

    <script>
    const fuelRecords = <?php echo json_encode($fuelRecords); ?>;

    document.getElementById('filterButton').addEventListener('click', function() {
      const selectedCluster = document.getElementById('cluster_name').value;
      const selectedCircle = document.getElementById('circle_name').value;
      const selectedDistrict = document.getElementById('district_name').value;
      const searchTerm = document.getElementById('searchInput').value.toLowerCase();
      const fromDate = document.getElementById('from_date').value;
      const toDate = document.getElementById('to_date').value;

      const filteredRecords = fuelRecords.filter(record => {
        const fillingDate = record.date_filling; // Make sure this field is in the correct format

        const dateInRange = (!fromDate || fillingDate >= fromDate) && (!toDate || fillingDate <= toDate);

        return (selectedCluster === '' || record.cluster_name === selectedCluster) &&
          (selectedCircle === '' || record.circle_name === selectedCircle) &&
          (selectedDistrict === '' || record.district_name === selectedDistrict) &&
          (searchTerm === '' ||
            (record.site_id && record.site_id.toLowerCase().includes(searchTerm)) ||
            (record.SiteName && record.SiteName.toLowerCase().includes(searchTerm)) ||
            (record.global_id && record.global_id.toLowerCase().includes(searchTerm))) &&
          dateInRange;
      });

      renderTable(filteredRecords);
    });

    function renderTable(records) {
      const tbody = document.querySelector('.table-container tbody');
      tbody.innerHTML = ''; // Clear existing rows

      if (records.length === 0) {
        tbody.innerHTML = '<tr><td colspan="17">No records found.</td></tr>';
        return;
      }

      records.forEach((record, index) => {
        const fillingQuantity = parseFloat(record.filling_quantity); // Convert to a number for comparison
        let remarksContent;

        // Determine remarks content based on filling quantity
        if (fillingQuantity <= 20) {
          remarksContent = `<div class="remarks-container"><span class="circle critical"></span> Critical</div>`;
        } else if (fillingQuantity <= 40) {
          remarksContent = `<div class="remarks-container"><span class="circle average"></span> Average</div>`;
        } else {
          remarksContent = `<div class="remarks-container"><span class="circle good"></span> Good</div>`;
        }

        const row = `<tr class="custom-table-row">
            <td class="custom-table-cell">${index + 1}</td> 
            <td class="custom-table-cell custom-btn-color" onclick="openDropdown('${record.date_filling}', '${record.remarks}', '${record.filling_quantity}', '${record.dg_kva}', '${record.dc_load}', '${record.approved_cph}', '${record.from_date}', '${record.to_date}', '${record.tank_balance}', '${record.consumption_today}', '${record.SiteName}', '${record.global_id}', '${record.site_type}', '${record.site_id}')">
                ${htmlEscape(record.site_id)}
            </td>
            <td class="custom-table-cell">${htmlEscape(record.SiteName)}</td>
            <td class="custom-table-cell">${htmlEscape(record.global_id)}</td>
            <td class="custom-table-cell">${htmlEscape(record.circle_name)}</td>
            <td class="custom-table-cell">${htmlEscape(record.cluster_name)}</td>
            <td class="custom-table-cell">${htmlEscape(record.district_name)}</td>
            <td class="custom-table-cell">${htmlEscape(record.SAM_Name)}</td>
            <td class="custom-table-cell">${htmlEscape(record.from_date)}</td>
            <td class="custom-table-cell">${htmlEscape(record.to_date)}</td>
            <td class="custom-table-cell">${htmlEscape(record.dg_run_hours)}</td>
            <td class="custom-table-cell">${htmlEscape(record.db_fem)}</td>
            <td class="custom-table-cell">${htmlEscape(record.approved_cph)}</td>
            <td class="custom-table-cell">${htmlEscape(record.date_filling)}</td>
            <td class="custom-table-cell">${htmlEscape(record.filling_quantity)}</td>
            <td class="custom-table-cell">${htmlEscape(record.consumption_today)}</td>
            <td class="custom-table-cell">${htmlEscape(record.tank_balance)}</td>
            <td class="custom-table-cell">${remarksContent}</td>
        </tr>`;

        tbody.innerHTML += row;
      });
    }



    function htmlEscape(str) {
      return str ? str.replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;") : 'NA';
    }

    document.getElementById('downloadExcelButton').addEventListener('click', function() {
      const filteredRecords = fuelRecords.filter(record => {
        const selectedCluster = document.getElementById('cluster_name').value;
        const selectedCircle = document.getElementById('circle_name').value;
        const selectedDistrict = document.getElementById('district_name').value;
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const fromDate = document.getElementById('from_date').value;
        const toDate = document.getElementById('to_date').value;
        const fillingDate = record.date_filling; // Ensure correct date format

        const dateInRange = (!fromDate || fillingDate >= fromDate) && (!toDate || fillingDate <= toDate);

        return (selectedCluster === '' || record.cluster_name === selectedCluster) &&
          (selectedCircle === '' || record.circle_name === selectedCircle) &&
          (selectedDistrict === '' || record.district_name === selectedDistrict) &&
          (searchTerm === '' ||
            (record.site_id && record.site_id.toLowerCase().includes(searchTerm)) ||
            (record.SiteName && record.SiteName.toLowerCase().includes(searchTerm)) ||
            (record.global_id && record.global_id.toLowerCase().includes(searchTerm))) &&
          dateInRange;
      });

      // Convert filtered records to CSV format
      const csvContent = "data:text/csv;charset=utf-8," + ["S. No.", "Site ID", "Site Name", "Global ID", "Circle",
          "Cluster", "District", "SAM Name", "From Date", "To Date", "DG (Run Hours)", "DG FEM", "Approved CPH",
          "Filling Date", "Filling Qty.", "Consumption (To Day)", "Tank Balance", "Remarks"
        ]
        .join(",") + "\n" +
        filteredRecords.map((record, index) => [
          index + 1,
          record.site_id,
          record.SiteName,
          record.global_id,
          record.circle_name,
          record.cluster_name,
          record.district_name,
          record.SAM_Name,
          record.from_date,
          record.to_date,
          record.dg_run_hours,
          record.db_fem,
          record.approved_cph,
          record.date_filling,
          record.filling_quantity,
          record.consumption_today,
          record.tank_balance,
          record.remarks
        ].join(",")).join("\n");

      // Create a link and download the file
      const encodedUri = encodeURI(csvContent);
      const link = document.createElement("a");
      link.setAttribute("href", encodedUri);
      link.setAttribute("download", "fuel_maintenance_report.csv");
      document.body.appendChild(link); // Required for Firefox
      link.click();
      document.body.removeChild(link);
    });

    // Render all records initially
    renderTable(fuelRecords);
    </script>
    <?php include 'fuel-maintenance-report-modal.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>
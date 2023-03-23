<?php
require "inc/header.php";
if (isset($_GET['header_id_admin'])) {
    $id = $_GET['header_id_admin'];
    $qry = "SELECT * FROM inter_form WHERE id='$id'";
    $res = $conn->query($qry);
} else {
    header('location: form.php');
}
if ($res->num_rows > 0) {
    $i = 0;
    while ($row = $res->fetch_assoc()) {
        $i++;
?>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header d-flex justify-content-between">FORM DATA <span class="alert_message"></span>

                    </div>
                    <div class="row p-5">
                        <h5 class="col-lg-3 col-md-4 col-12">Name:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['name']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Address:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Address']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">contact:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['contact']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Ownership:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Ownership']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Date:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Date']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">living at the premises</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['living_Years'] . ' Years & ' . $row['living_Months'] . ' Months'; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Tenure Of Employment</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Employment_year'] . ' Years & ' . $row['Employment_month'] . ' Months';  ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Occupation:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Occupation']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Place Of Employment:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Employment']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Purpose Of The Service</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Purpose']; ?></h5>
                        <hr />
                        <h5 class="col-lg-3 col-md-4 col-12">Type of Account:</h5>
                        <h5 class="col-lg-8 col-md-8 col-12"><?php echo $row['Account']; ?></h5>
                        <hr />
                    </div>

                </div>
            </div>
        </div>
<?php
    }
}
require('./inc/footer.php');
?>
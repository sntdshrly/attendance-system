<?php
// Get status message
if (!empty($_GET['status'])) {
    switch ($_GET['status']) {
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if (!empty($statusMsg)) { ?>
    <div class="col-xs-12">
        <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
    </div>
<?php } ?>

<div class="row">
    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
        </div>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="view/import-matkul.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>
</div>
<br>

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">Matkul</h3>
                    <div class="card-tools">
                        <a href="./file/Matkul.csv" download class="btn btn-tool btn-sm">
                            <i class="fas fa-download"> Download Template</i>
                        </a>
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
                <!-- <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle"> -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Program Studi</th>
                            <th>Jumlah SKS</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($matkul as $matkuls) {
                            echo '<tr>';
                            echo '<td>' . $matkuls->getKodeMk() . '</td>';
                            echo '<td>' . $matkuls->getNamaMk() . '</td>';
                            echo '<td>' . $matkuls->getProdi()->getNamaProdi() . '</td>';
                            echo '<td>' . $matkuls->getJumlahSks() . '</td>';
                            echo '<td> 
                    <button onclick="editMatkul(\'' . $matkuls->getKodeMk() . '\')" class="btn btn-success">Edit</button>
                    <button onclick="deleteMatkul(\'' . $matkuls->getKodeMk() . '\')" class="btn btn-danger">Delete</button></td>';
                            // echo '<th>' . $details->getJadwal()->getKelasJadwal() . '</th>';
                            echo '</tr>';
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.card -->
<script>
    // Fungsi editMatkul & deleteMatkul
    function editMatkul(id) {
        window.location = "index.php?webmenu=edgenMatkul&eidMatkul=" + id;
    }

    function deleteMatkul(id) {
        const confirmation = window.confirm("Are you sure want to delete this data?");
        if (confirmation) {
            window.location = "index.php?webmenu=matkul&delcomMatkul=1&didMatkul=" + id;
        }
    }

    // Show/hide CSV upload form
    function formToggle(ID) {
        var element = document.getElementById(ID);
        if (element.style.display === "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }
</script><?php
// Get status message
if (!empty($_GET['status'])) {
    switch ($_GET['status']) {
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>
<div data-spy="scroll" data-target="#navbar-user" data-offset="0">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 id ="home" class="display-4">Welcome, <?php echo $_SESSION['web_full_name']; ?>!</h1>
            <br>
            <a class="btn btn-outline-info active" href="index.php?webmenu=home"><b>HERE</b></a>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid bg-white">
        <div class="container">
            <h1 class="tengah" id ="status-order">Status</h1>
            <p class="tengah">Check Your Status Here.</p>
            <br>
            <table id="pagination" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Pick Up Schedule</th>
                    <th scope="col">Delivery Schedule</th>
                    <th scope="col">Address</th>
                    <th scope="col">Note</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ( $detail as $details){
                    echo '<tr>';
                    echo '<th>' . $details->getPertemuanKe() . '</th>';
                    echo '<th>' . $details->getTanggal() . '</th>';
                    echo '<th>' . $details->getWaktuMulai() . '</th>';
                    echo '<th>' . $details->getJumlahMahasiswa() . '</th>';
                    echo '<th>' . $details->getMateri() . '</th>';
                    echo '<th>' . $details->getKeterangan() . '</th>';
                    echo '<th>' . $details->getDibantuAsisten() . '</th>';
                    echo '<th>' . $details->getBukti() . '</th>';
                    echo '<th>' . $details->getJadwalKelasJadwal() . '</th>';
                    echo '</tr>';
                }

                ?>
                </tbody>
            </table>
        </div>
    </div>




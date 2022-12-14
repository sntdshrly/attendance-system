<!-- Main content -->
<section class="content">
    <!-- left column -->
    <div class="col-md-13">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Filter By Date</h3>
            </div>
            <form role="form" method="POST">
                <div class="card-body">
                    <div>
                        <div class="form-group">
                            <label for="labelTanggalFrom">From</label>
                            <input type="date" id="idFrom" name="from" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask required>
                        </div>
                        <div class="form-group">
                            <label for="labelTanggalTo">To</label>
                            <input type="date" id="idTo" name="to" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask required>
                        </div>
                        <div class="form-group">
                            <label for="labelNamaMahasiswa">Nama Mahasiswa</label>
                            <select class="form-control select2" style="width: 100%;" name="asisten" id="idAsisten">
                                <?php
                                /**@var $item Asisten*/
                                foreach ($asisten as $item) {
                                    echo '<option>' . $item->getNrp() . " - " . $item->getNamaMahasiswa() . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group" id="hasilJumlahJam">
                            <label for="labelJumlahJam">Jumlah Jam</label>
                            <?php
                            $total = 0;
                            foreach ($jadwalHasAsisten as $item) {
                                $total += $item->getJumlahJam();
                            }
                            echo '<p>' . $total . '</p>';
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" name="btnFilter" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>

<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Jadwal Has Asisten</h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
            <thead>
                <tr>
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Dosen</th>
                    <th>Matkul</th>
                    <th>Tipe</th>
                    <th>Asisten</th>
                    <th>Pertemuan</th>
                    <th>Tanggal</th>
                    <th>Jumlah Jam</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($jadwalHasAsisten as $item) {
                    echo '<tr>';
                    echo '<th>' . $item->getJadwal()->getKelasJadwal() . '</th>';
                    echo '<th>' . $item->getJadwal()->getSemester()->getNamaTahunSemester() . '</th>';
                    echo '<th>' . $item->getJadwal()->getDosen()->getNamaDosen() . '</th>';
                    echo '<th>' . $item->getJadwal()->getMatkul()->getNamaMk() . '</th>';
                    echo '<th>' . $item->getJadwal()->getTipeJadwal() . '</th>';
                    echo '<th>' . $item->getAsisten()->getNamaMahasiswa() . '</th>';
                    echo '<th>' . $item->getPertemuan() . '</th>';
                    echo '<th>' . $item->getTanggal() . '</th>';
                    echo '<th>' . $item->getJumlahJam() . '</th>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
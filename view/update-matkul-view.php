<!-- Main content -->
<section class="content">
    <!-- left column -->
    <div class="col-md-13">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Input Form Matkul</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST">
                <div class="card-body">
                    <!-- <div class="form-group">
                        <label for="labelProgramStudi">Program Studi</label>
                        <select class="form-control select2" style="width: 100%;" name="programStudi" id="idProgramStudi">
                            <?php
                    /**@var $item Dosen*/
                    // foreach($prodi as $item) {
                    //     echo '<option>'.$item->getNamaProdi().'</option>';
                    // }
                    // ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="labelKode">NIK</label>
                        <input type="text" id="idKodeMk" name="kodeMk" class="form-control" required
                               value="<?php echo $matkul->getKodeMk(); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="labelNamaMatkul">Nama Matkul</label>
                        <input type="text" id="idNamaMatkul" name="namaMatkul" class="form-control"
                               value="<?php echo $matkul->getNamaMk(); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="labeljumlahSks">Jumlah SKS</label>
                        <input type="text" id="idJumlahSks" name="jumlahSks" class="form-control"
                               value="<?php echo $matkul->getJumlahSks(); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="labelProdi">Prodi</label>
                        <select class="form-control select2" style="width: 100%;" name="role" id="idRole">
                            <?php
                            /**@var $item*/
                            foreach($prodi as $item) {
                                echo '<option>'.$item->getProdi().' - '.$item->getNameProdi().'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" name="btnUpdateMatkul" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>
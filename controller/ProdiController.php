<?php

class ProdiController
{
    private $prodiDao;

    public function __construct()
    {
        $this->prodiDao = new ProdiDaoImpl();
    }
    public function index()
    {
        /* fungsi delete prodi */
        $deleteApproved = filter_input(INPUT_GET, 'delcomProdi');
        if(isset($deleteApproved)&&$deleteApproved==1){
            $deletedId = filter_input(INPUT_GET,'didProdi');
            $result = $this->prodiDao->deleteProdi($deletedId);
        }
        $prodi = $this->prodiDao->fetchAllProdi();
        include_once 'view/prodi-view.php';
    }

     public function addProdi(){
         $buttonPressed = filter_input(INPUT_POST,'btnAddProdi');
         if(isset($buttonPressed)){
             var_dump("test");
             $idProdi = filter_input(INPUT_POST,'idProdi');
             $namaProdi = filter_input(INPUT_POST,'namaProdi');
             $tingkatanProdi = filter_input(INPUT_POST,'tingkatanProdi');

             $trimmedId = trim($idProdi);
             $trimmedNama = trim($namaProdi);
             $trimmedTingkatan = trim($tingkatanProdi);

             $prodi = new Prodi;
             $prodi->setIdProdi($trimmedId);
             $prodi->setNamaProdi($trimmedNama);
             $prodi->setTingkatanProdi($trimmedTingkatan);

             $result = $this->prodiDao->saveProdi($prodi);
         }
         $prodi = $this->prodiDao->fetchAllProdi();
         include_once 'view/prodi-form-view.php';
     }
}
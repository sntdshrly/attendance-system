<?php

class JadwalHasAsisten
{
    /**@var $jadwal Jadwal */
    private $jadwal;
    /**@var $asisten Asisten */
    private $asisten;
    private $pertemuan;
    private $tanggal;

    /**
     * @return Jadwal
     */
    public function getJadwal()
    {
        if (!isset($this->jadwal)) {
            $this->jadwal = new Jadwal();
        }
        return $this->jadwal;
    }

    /**
     * @param Jadwal $jadwal
     */
    public function setJadwal($jadwal)
    {
        $this->jadwal = $jadwal;
    }

    /**
     * @return Asisten
     */
    public function getAsisten()
    {
        if (!isset($this->asisten)) {
            $this->asisten = new Asisten();
        }
        return $this->asisten;
    }

    /**
     * @param Asisten $asisten
     */
    public function setAsisten($asisten)
    {
        $this->asisten = $asisten;
    }

    /**
     * @return mixed
     */
    public function getPertemuan()
    {
        return $this->pertemuan;
    }

    /**
     * @param mixed $pertemuan
     */
    public function setPertemuan($pertemuan)
    {
        $this->pertemuan = $pertemuan;
    }

    /**
     * @return mixed
     */
    public function getTanggal()
    {
        return $this->tanggal;
    }

    /**
     * @param mixed $tanggal
     */
    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;
    }

    public function __set($name, $value)
    {
        if (!isset($this->jadwal)) {
            $this->jadwal = new Jadwal();
        }
        if (!isset($this->asisten)) {
            $this->asisten = new Asisten();
        }
        switch ($name) {
            case 'jadwal_kelas_jadwal':
                $this->jadwal->setKelasJadwal($value);
                break;
            case 'jadwal_semester_id_semester':
                $this->jadwal->semester->setIdSemester($value);
                break;
            case 'jadwal_dosen_nik':
                $this->jadwal->dosen->setNik($value);
                break;
            case 'jadwal_matkul_kode_mk':
                $this->jadwal->matkul->setKodeMk($value);
                break;
            case 'jadwal_tipe_jadwal':
                $this->jadwal->setTipeJadwal($value);
                break;
            case 'asisten_nrp':
                $this->asisten->setNrp($value);
                break;
        }
    }
}
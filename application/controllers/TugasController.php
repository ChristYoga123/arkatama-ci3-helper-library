<?php 

class TugasController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("tugas");
        $this->load->library("dateformat");
    }

    public function index()
    {
        // Initial bilangan 
        $bilangan1 = 10;
        $bilangan2 = 7;
        $romawi1 = "X";
        $romawi2 = "VII";

        // Bilangan ke Romawi
        $data["intToRom1"] = intToRom($bilangan1);
        $data["intToRom2"] = intToRom($bilangan2);
        
        // Romawi ke bilangan
        $data["romToInt1"] = romToInt($romawi1);
        $data["romToInt2"] = romToInt($romawi2);


        $data["bilangan1"] = $bilangan1;
        $data["bilangan2"] = $bilangan2;
        $data["romawi1"] = $romawi1;
        $data["romawi2"] = $romawi2;
        $data["tanggal1"] = $this->dateformat->getTanggalYmd();
        $data["tanggal2"] = $this->dateformat->getTanggalDMy();
        $this->load->view("tugas/index", $data); 
    }


}

?>
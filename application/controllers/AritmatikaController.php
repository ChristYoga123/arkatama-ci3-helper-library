<?php 

class AritmatikaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("aritmatika");
    }

    public function index()
    {
        $a = 1;
        $b = 2;
        $data["add"] = $this->aritmatika->add($a, $b);
        $data["times"] = $this->aritmatika->times($a, $b);
        $data["divide"] = $this->aritmatika->divide($a, $b);
        $data["substract"] = $this->aritmatika->substract($a, $b);
        $data["a"] = $a;
        $data["b"] = $b;
        $this->load->view("aritmatika/index", $data);
    }
}

?>
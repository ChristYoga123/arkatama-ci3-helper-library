<?php

class IsPrimeNumberController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("prime_helper");
    }

    public function index()
    {
        $number = 2;
        $result = isPrimeNumber($number);
        $data["result"] = $result ? $number . " is prime number" : $number . " is not prime number";
        $this->load->view("primeNumber/index", $data);
    }

}
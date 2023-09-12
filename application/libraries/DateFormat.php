<?php 

class DateFormat {

    public function getTanggalYmd() {
        $tahun = date('Y');
        $bulan = date('m');
        $hari = date('d');
        return "$tahun-$bulan-$hari";
    }

    public function getTanggalDMy() {
        $hari = date('d');
        $bulan = $this->getBulan(date('m'));
        $tahun = date('Y');
        return "$hari $bulan $tahun";
    }

    private function getBulan($bulan) {
        $bulanArray = [
            '01' => 'Jan',
            '02' => 'Feb',
            '03' => 'Mar',
            '04' => 'Apr',
            '05' => 'Mei',
            '06' => 'Jun',
            '07' => 'Jul',
            '08' => 'Agu',
            '09' => 'Sept',
            '10' => 'Okt',
            '11' => 'Nov',
            '12' => 'Des'
        ];
        return $bulanArray[$bulan];
    }

}

?>
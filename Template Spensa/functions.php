<?php

// Fungsi format tanggal Indonesia
function format_tanggal_indo($tanggal) {
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tahun
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tanggal
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

// Fungsi untuk membatasi jumlah kata (excerpt)
function excerpt($string, $limit = 20) {
    $string = strip_tags($string);
    if (str_word_count($string, 0) > $limit) {
        $words = str_word_count($string, 2);
        $pos   = array_keys($words);
        $string = substr($string, 0, $pos[$limit]) . '...';
    }
    return $string;
}
?>

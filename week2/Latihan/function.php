<?php
function kelulusan ($rata){
    // jika rata2 di bawah 55 = tidak lulus
    // jika rata2 di atas 55 = lulus
    if($rata < 55){
        return 'Tidak Lulus';
    }else{
        return 'Lulus';
    }
}

// buat fungsi grade, lalu kasi keterangan :
// A = 85-100
// B = 70-84
// C = 56 - 69
// D = 36 - 55
// E = 10 - 35
// I = Tidak ada Nilai

function grade($rata){
    if($rata >= 85){
        return "A";
    }elseif($rata >= 70){
        return "B";
    }elseif($rata >= 56){
        return "C";
    }elseif($rata >= 36){
        return "D";
    }elseif($rata >= 10){
        return "E";
    }else{
        return "I";
    }
}
?>
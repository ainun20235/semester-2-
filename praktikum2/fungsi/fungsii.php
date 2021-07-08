<?php
// Fungsi Kelulusan
function kelulusan ($nilai_akhir) {
    if ($nilai_akhir > 55) {
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}
// Fungsi penilaian/grade
function grade ($nilai_akhir) {
    if ($nilai_akhir >= 85 && $uts <= 100){
        return 'A';
    }
    elseif ($nilai_akhir >= 70){
        return'B';
    }
    elseif ($nilai_akhir >= 56){
        return 'C';
    }
    elseif ($nilai_akhir >= 36){
        return 'D';
    }
    elseif ($nilai_akhir >= 0){
        return 'E';
    }
    else {
        return 'I';
    }
    
}
// Fungsi predikat
function predikat ($nilai_akhir) {
    if ($nilai_akhir >= 85 && $uts <= 100){
        return 'Sangat Memuaskan';
    }
    elseif ($nilai_akhir >= 70){
        return'Memuaskan';
    }
    elseif ($nilai_akhir >= 56){
        return 'Cukup';
    }
    elseif ($nilai_akhir >= 36){
        return 'Kurang';
    }
    elseif ($nilai_akhir >= 0){
        return 'Sangat Kurang';
    }
    else {
        return 'I';
    }
}

?>
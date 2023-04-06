<?php
// array indexing
$buah = ['alpukat','apel','mangga','pisang'];

// cara manggil array indexing
echo $buah[1];

// cetak jumlah buah
echo '<br/>Jumlah buah ' .count($buah);

// cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "</ol>";


// ===========================
// tambahkan buah baru ke dalam array
$buah[] = "durian";

//ubah buah index ke 1
$buah[1] = "apel";

// cetak seluruh buah
echo  "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "</ol>";
?>



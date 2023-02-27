<?php
// cara penulisan array
// cara lama
$ar_buah = array('pisang','mangga','jeruk');

// cara baru
// array indexing
$buah = ['alpukat','jeruk','mangga'];

// cara manggil array asossiatif
echo $buah[1];

// array assosiaitif
$buah = ["a"=>'alpukat',"j"=>'jeruk',"m"=>'mangga'];

// cara mencetak array assosiatif
echo "<ol>";
foreach ($buah as $fruit => $k ){
    echo "<li> $fruit - $k </li>";
}
echo "</ol>";
?>
<?php

$buku = array(
    array('judul' => 'Sherlock Holmes', 'pengarang' => 'Arthur Conan Doyle', 'harga' => '50000', 'stok' => '20'),
    array('judul' => 'Arsene Lupin', 'pengarang' => 'Maurice LeBlanc', 'harga' => '250000', 'stok' => '50'),
    array('judul' => 'Game Of Throne', 'pengarang' => 'George R.R. Martin', 'harga' => '125000', 'stok' => '60'),
);


$pembelian = array(
         array('judul' => 'Sherlock Holmes', 'jumlah' => '5' ),
         array('judul' => 'Arsene Lupin', 'jumlah' => '2' ),
         array('judul' => 'Game Of Throne', 'jumlah' => '4' ),
     );

echo "<center><table border ='1' cellpadding ='6'>";
    echo "<thead>
        <th>Judul Buku</th>
        <th>Jumlah Pembelian</th>
        <th>Harga</th>
        <th>Total Bayar</th>
    </thead>";

     $totalbayar = 0;
    for($a=0;$a<count($pembelian);$a++){
        echo "<tr>";
        echo "<td>".$pembelian[$a]['judul']."</td>";
        echo "<td>".$pembelian[$a]['jumlah']."</td>";
        echo "<td>".$buku[$a]['harga']."</td>";
        for($p=0;$p<count($buku);$p++){
            if($pembelian[$a]['judul']==$buku[$p]['judul']){
                $harga = $buku[$p]['harga']*$pembelian[$a]['jumlah'];

            }
        }
    $totalbayar = $totalbayar + $harga;
    echo "<td>".$harga."</td>";
    echo "</tr>";
    }

    echo "<tr>
            <th colspan ='3'>Total Harga Bayar</th>
            <td>$totalbayar</td>
            </tr>";
    
?>
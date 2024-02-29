<?php
class Hewan {

    public $name;
    public $gerak;

    function set_name($nama){
        $this->name = $nama;
        
    }
    function get_name(){
        return $this->name;
    }
    function set_gerak($gerak) {
        $this->gerak = $gerak;
    }
    function get_gerak() {
        return $this->gerak;
    }
}

$burung = new Hewan();
$burung->set_name('Burung');
$burung->set_gerak('Terbang');
echo "Name Hewan: " . $burung->get_name();
echo "<br>";
echo "Cara Bergerak: " . $burung->get_gerak();
echo "<br>";

$harimau = new Hewan();
$harimau->set_name('Harimau');
$harimau->set_gerak('Berlari');
echo "Name Hewan: " . $harimau->get_name();
echo "<br>";
echo "Cara Bergerak: " . $harimau->get_gerak();
echo "<br>";

$ikan = new Hewan();
$ikan->set_name('Ikan');
$ikan->set_gerak('Berenang');
echo "Name Hewan: " . $ikan->get_name();
echo "<br>";
echo "Cara Bergerak: " . $ikan->get_gerak();
echo "<br>";

$monyet = new Hewan();
$monyet->set_name('Monyet');
$monyet->set_gerak('Bergelantung');
echo "Name Hewan: " . $monyet->get_name();
echo "<br>";
echo "Cara Bergerak: " . $monyet->get_gerak();
echo "<br>";

$ular = new Hewan();
$ular->set_name('Ular');
$ular->set_gerak('meliuk-liukkan rangka tubuhnya ke kiri dan kanan');
echo "Name Hewan: " . $ular->get_name();
echo "<br>";
echo "Cara Bergerak: " . $ular->get_gerak();
echo "<br>";
 
?>
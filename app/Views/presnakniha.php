<?=$this->extend("layout/master");
$this->section("content");
echo"<p>Název: " .$seznam->nazev."</p>";
echo"<p>Autor: " .$seznam->jmeno." " .$seznam->prijmeniA."</p>";
echo"<p>Datum vydání : " .$seznam->datumVydani."</p>";
echo"<p>Počet stran : ".$seznam->pocetStran."</p>";
echo"<p>Hodnocení: ".$seznam->hodnoceni."</p>";
echo"<img src= ".base_url('obrazky/knihy/'.$seznam->pic)." style='height:350px' >";

$this->endSection();




?>
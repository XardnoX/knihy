<?=$this->extend("layout/master");?>

<?=$this->section("content");
echo "<div class='row row-cols-2 row-cols-md-2 g-5'>";
foreach($seznam as $knihy) {
    echo "<div class='col-lg-3 col-12 col-md-6'>

    <div class='card mr-3 style= width: 18rem;'>    
    <div class='card-header'>".anchor('knihyZanru/' .$knihy->idZanr, $knihy->nazevZ)."</div>
    <h5></h5>";
   
   
    echo "<div class='card-body'>
    </div>
    </div>";
    echo"</div>";    
}

echo "</div>";
echo "</div>";




$this->endSection();
?>

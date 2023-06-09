<?=$this->extend("layout/master");?>

<?=$this->section("content");
echo "<div class='row row-cols-2 row-cols-md-2 g-5'>";
foreach($seznam as $knihy) {
    echo "<div class='col-lg-3 col-12 col-md-6'>

    <div class='card mr-3 style= width: 18rem;'>    
    <div class='card-header'>".anchor('knihyZanru/' .$knihy->idZanr, $knihy->nazevZ)."</div>
    <h5></h5>";
   
    $data = array(
        "type" => "submit",
        "value" => "smazat",
      );
         
          echo anchor('seznamknih/odeber/'.$knihy->idZanr, 'Remove', 'class="btn alighns-items-center mb-4 tn-outline-primary"');
          echo anchor('editPage/edit/'.$knihy->idZanr,'Edit', 'class="btn alighns-items-center mb-1  btn-danger btn-sm"');
    // $edit = array(
    //     "type" => "submit",
    //     "value" => "edit"
    // );           
    echo "<div class='card-body'>
    </div>
    </div>";
            
   
   
 
    echo"</div>";
    


    
}

echo "</div>";
echo "</div>";

 $data = array(
    'class' => 'btn');
     echo anchor('seznamknih/novy', 'Přidat', $data);
     echo form_close();
    // var_dump($seznam);


$this->endSection();
?>
<?=$this->extend("layout/master");?>

<?=$this->section("content");

echo"<div class ='container h-100'>

<div class='row d-flex justify-content-center align-items-center h-100'>

 <div class='col-lg-12 col-xl-11'>

  <div class ='card text-black' style='border-radius: 25px;'>

   <div class='card-body p-md-5' style='background-color: rgb(51,135,248);'>

   <div class='row justify-content-center'>

    <div class='col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1'>";

echo "<h1 class='text-center'>Úprava žánru</h1>";

echo form_open('seznamknih/upraveni');

echo form_hidden("_method", "PUT");

echo form_hidden("id", $seznam -> idZanr);

echo"<div class='mb-3 mt-3'>";

$add = [

 'for' => 'Název'

];

echo form_label("Název","", $add);

$add = [

 'class' => 'd-flex flew-row align-items-center mb-4',

 'type' => 'text',
    
 'name' => 'nazevZ',

 'value' => $seznam -> nazevZ

];

echo form_input($add);

$add = [

 'for' => 'idZanr'

];

echo form_label("idZanr","", $add);

$add = [

 'class' => 'd-flex flex-row align-items-center mb-4',

 'type' => 'text',

 'name' => 'idZanr',

 'value' => $seznam -> idZanr

];

echo form_input($add);

$add = [
    
    'class' => 'btn btn-light d-flex flex-row align-items-center mb-4',
    'type' => 'submit',
    'value' => 'UPRAVIT'

];




echo form_input($add);

echo form_close();

echo"</div>

</div>

</div>

</div>

</div>

</div>

</div>";

$this->endSection();?>;
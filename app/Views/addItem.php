
<?=$this->extend("layout/master");
?><?=$this->section("content");
echo form_open('seznamknih/vytvorit');
echo"<div class ='mb-3 mt-3'>";
$add = [    'for' => 'Název'];
$add = ['class' => 'd-flex flex-row align-items-center mb-4','type' => 'text','placeholder' => 'Název žánru','name' => 'nazevZ'];
echo form_input($add);
$add = ['class' => 'd-flex flex-row align-items-center mb-4','type' => 'text','placeholder' => 'idZanr','name' => 'idZanr'];
echo form_input($add);
$add = ['class' => 'd-flex flex-row align-items-center mb-4','type' => 'submit','value' => 'ODESLAT'];
echo form_input($add);
echo form_close();
$this->endSection();
?>;


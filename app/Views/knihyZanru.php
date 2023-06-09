<?=$this->extend("layout/master");
?><?=$this->section("content");
echo "<div class='row'><div class='d-flex justify-content-center'>";

foreach($seznam as $knihy)
{echo " 
        <div class='card m-3 style= max-width: 18rem; height:auto'> 
        <div class='card-body'>
        <p class='text-bold'>".anchor('presnakniha/' .$knihy->idkniha, $knihy->nazev)."</p>  
        <img class='card-img-bottom img-fluid rounded mx-auto d-block' style='max-width:100px' src='".base_url('obrazky/knihy').'/' .$knihy->pic."' alt='Card image'>
        </div>"; 
        echo"</div>";}  
        echo"</div>";   
        
        echo $pager->links();
        $this->endSection();?>  
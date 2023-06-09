<html>
    <head> 
        <title>Titulek</title>
        <?= $this->include("layout/assets");?> 
 </head> 
 <body>
 <?= $this->include("layout/navbar");
 ?>
 <!--Dynamický obsah -->
 <div class="container-fluid">
 <?= $this->renderSection("content");?> 
</div>
 <?=$this->include("layout/footer");?>
</body>
</html>
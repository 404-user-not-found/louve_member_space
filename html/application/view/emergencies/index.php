<div>
</div>
<div class="container">
<?php
    $currentsEmergency = $emergency->getCurrents();


   
    foreach ( $currentsEmergency as $currentEmergency) :

?>

<div class="alert alert-info fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong> <?php echo  $currentEmergency["titre"];?> : </strong>
    <a href="<?php echo  $currentEmergency["lien"];?>"> <?php echo  $currentEmergency["info"];?> </a>
</div>
<?php endforeach; ?>
</div>

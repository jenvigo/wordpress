<?php
$nombre = get_sub_field("nombre");
$posicion = get_sub_field("posicion");
$imagen = get_sub_field("imagen");
//var_dump($imagen);
?>
<div class="card card-alf" >
    <?php
    //echo wp_get_attachment_image($imagen["ID"], "small", false, array("class"=>"img-responsive"));?>
    <div class="thumbnail-crop">
        <img class="card-img-top" src="<?php echo $imagen["url"];?>" alt="Card image">
    </div>

    <div class="card-body">
        <h4 class="card-title font-weight-light"><?php echo $nombre; ?></h4>
        <p class="card-text"><?php echo $posicion; ?></p>
        <a href="#" class="btn btn-primary bgc-main">Ver más</a>
    </div>
</div>
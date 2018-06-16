<?php
get_header();
?>
<body>
<div class="container-fluid">
    <div id="home"></div>
    <div id="seccion1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">

                    <br>
                    <h2 class="text-center">Jugadores</h2>
                    <h4 class="text-center">Fichas de la temporada</h4>

                    <?php
                    // check if the flexible content field has rows of data
                    if (have_rows('jugadores')):

                        // loop through the rows of data
                        while (have_rows('jugadores')) : the_row();

                            if (get_row_layout() == 'jugador'):

                                include(get_stylesheet_directory() . "/parts/home/card.php");

//                            the_sub_field('nombre');

                            elseif (get_row_layout() == 'jugador'):

                                $imagen = get_sub_field('imagen');

                            endif;

                        endwhile;

                    else :

                        // no layouts found

                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div id="seccion2"></div>
</div>

<?php
the_content();
?>
</body>
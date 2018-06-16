<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<?php wp_head(); ?>

<div class="container">
    <header id="masthead">
        <nav class="navbar sin-pb">
            <a class="navbar-brand sin-pb">
                <?php
                if ($logo):
                    echo wp_get_attachment_image($logo, 'medium');
                else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""/>

                <?php endif;
                ?>
            </a>
            <div class="">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#seccion1">Sección 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#seccion2">Sección 2</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
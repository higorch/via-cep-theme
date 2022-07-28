<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <div class="zip-box">

        <div class="pin">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/location.png">
        </div>

        <div class="heading">
            <h2>Consulte o endereço pelo CEP</h2>
        </div>

        <div class="entry">
            <label for="zip">Cep</label>
            <div class="group">
                <input type="text" id="zip" placeholder="01001000">
                <button type="button">Consultar</button>
            </div>
        </div>

    </div>
    <!-- zip-box -->

    <?php wp_footer(); ?>
</body>

</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>

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

    <div class="show-address">
        <div class="head">
            <div class="col">
                <b>Endereço</b>
            </div>
            <div class="col">
                <a href="#" title="Salvar">
                    <i class="fa-solid fa-floppy-disk"></i>
                </a>
            </div>
        </div>
        <p></p>
    </div>

</div>
<!-- zip-box -->

<?php get_template_part('templates/saved', 'addresses'); ?>

<?php

get_footer();

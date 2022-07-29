<?php
$addresses = get_posts([
    'posts_per_page' => -1,
    'post_type'   => 'address'
]);
?>

<?php if (count($addresses)) : ?>
    <div class="heading">
        <h2>Endereços salvos</h2>
    </div>

    <div class="items">

        <ul>
            <?php foreach ($addresses as $address) : ?>
                <li><?php echo $address->post_title; ?></li>
            <?php endforeach; ?>
        </ul>

    </div>
<?php else : ?>
    <div class="empty">
        <div class="icon">
            <i class="fa-regular fa-circle-xmark"></i>
        </div>
        <p>Nenhum endereço salvo.</p>
    </div>
<?php endif; ?>
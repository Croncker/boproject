<?php
// Defina a chave ou o índice do SDG que você deseja exibir
$sdgIndex = 0;

// Inclua o arquivo data.php para acessar as informações
include 'data.php';

// Verifique se o índice existe no array
if (array_key_exists($sdgIndex, $sdgs)) {
    $single = $sdgs[$sdgIndex];
?>

<!-- Conteúdo do SDG -->
<img src="<?= $single['image'] ?>" alt="<?= $single['title'] ?>" class="sdg-image">
<div class="sdg-info">
    <h1 class="sdg-title"><?= $single['title'] ?></h1>
    <img src="<?= $single['image2'] ?>" alt="<?= $single['title'] ?>" class="sdg-sub-image">
    <h2 class="sdg-subtitle"><?= $single['subtitle'] ?></h2>
    <p class="sdg-description"><?= $single['desc'] ?></p>
</div>

<?php
} else {
    echo "SDG não encontrado.";
}
?>

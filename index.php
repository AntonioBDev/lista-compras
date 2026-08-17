<?php

declare(strict_types=1);
include 'include/funciones.php';
incluirTemplate('header');
include 'admin/control/crear.php';
?>
<section class="contenedor seccion-compras">
    <h2 class="no-margin">Lista de compras</h2>
    <div class="lista-compras">
        <h3 class="no-margin">Nish man</h3>
        <article class="item-compra">
            <img src="src/img/ceramate-nisman.jpg" alt="Manzana" class="item-img">
            <span class="item-nombre">Manzanas (1 kg)</span>

            <label class="checkbox-container">
                <input type="checkbox" class="check-item">
                <span class="checkmark"></span>
                <span class="label-texto"></span>
            </label>
        </article>
    </div>
</section>

<?php
incluirTemplate('footer');
?>
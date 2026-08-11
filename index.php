<?php

declare(strict_types=1);
require 'include/funciones.php';

incluirTemplate('header');
?>
<section>
    <h3>Lista de compras</h3>
    <div class="lista-compras">
        <article class="item-compra">
            <img src="img/manzana.png" alt="Manzana" class="item-img">
            <span class="item-nombre">Manzanas (1 kg)</span>

            <label class="checkbox-container">
        <input type="checkbox" class="check-item">
        <span class="checkmark"></span>
        <span class="label-texto">Comprado</span>
      </label>
        </article>
    </div>
</section>

<?php
incluirTemplate('footer');
?>
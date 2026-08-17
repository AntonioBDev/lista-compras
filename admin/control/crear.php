<div id="modalCrear" class="modal">
  <div class="modal-contenido">
    <span class="cerrar-modal">&times;</span>
    <h2>Agregar Nuevo Producto</h2>

    <form action="/admin/control/crear.php" method="POST" enctype="multipart/form-data" class="formulario-modal">

      <div class="campo">
        <label for="nombre">Nombre del Producto:</label>
        <input
          type="text"
          id="nombre"
          name="nombre"
          placeholder="Ej. Cera para peinar"
          required>
      </div>

      <div class="campo">
        <label for="marca">Marca:</label>
        <select id="marca" name="marca" required>
          <option value="" disabled selected>-- Seleccione una marca --</option>
          <option value="Nishman">Nishman</option>
          <option value="4x4">4x4</option>
          <option value="Otra">Otra</option>
        </select>
      </div>

      <div class="campo">
        <label for="imagen">Imagen del Producto:</label>
        <input
          type="file"
          id="imagen"
          name="imagen"
          accept="image/jpeg, image/png, image/webp"
          required>
      </div>

      <button type="submit" class="btn-guardar">Guardar Producto</button>
    </form>
  </div>
</div>
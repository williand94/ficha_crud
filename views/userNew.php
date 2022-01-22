<h2>Registrar Nuevo jugador:</h2>

<form method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="names">Nombre</label>
            <input type="text" class="form-control" name="names" id="names" placeholder="Ingrese nombre del jugador">
        </div>
        <div class="form-group col-md-6">
            <label for="last_name">Apellido</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ingrese apellido del jugador">
        </div>
        <div class="form-group  col-md-4">
            <label for="gender">Género</label>
            <select class="form-control" name="gender" id="gender">
                <option>Masculino</option>
                <option>Femenino</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="date_birth" id="date_b">
        </div>
        <div class="form-group col-md-4">
            <label for="age">edad</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Ingrese edad del jugador">
        </div>
        <div class="form-group  col-md-4">
            <label for="categories">Categoría</label>
            <select class="form-control" name="categories" id="categories">
                <option>Benjamín</option>
                <option>Alevín</option>
                <option>Infantil</option>
                <option>Cadete</option>
                <option>Juvenil</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="tj_id">Tarjeta de Identidad</label>
            <input type="number" class="form-control" name="tj_id" id="tj_id" placeholder="Ingrese # documento del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="adress">Dirección</label>
            <input type="text" class="form-control" name="adress" id="adress" placeholder="Ingrese dírección del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="cel">Celular</label>
            <input type="number" class="form-control" name="cel" id="cel" placeholder="Ingrese # de celular del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="height">Altura</label>
            <input type="number" step="any" class="form-control" name="height" id="height" placeholder="Ingrese altura del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="weight">Peso</label>
            <input type="number" step="any" class="form-control" name="weight" id="weight" placeholder="Ingrese peso del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="size_shirt">Talla de Camisa</label>
            <input type="text" class="form-control" name="size_shirt" id="size_shirt" placeholder="Ingrese tallasize_shirt del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="size_shoes">Talla de Tenis</label>
            <input type="number" step="any" class="form-control" name="size_shoes" id="size_shoes" placeholder="Ingrese talla del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="status">Estatus</label>
            <input type="number" class="form-control" name="status" id="status" placeholder="Estatus del jugador">
        </div>
        <div class="form-group col-md-4">
            <label for="date_add">Fecha de Ingreso</label>
            <input type="date" class="form-control" name="date_add" id="date_add">
        </div>
        <div class="form-group col-md-4">
            <label for="photo">Subir Foto</label>
            <input type="file" class="form-control-file" name="photo" id="photo">
        </div>
    </div>
    <button type="submit" name="send" class="btn btn-primary">Submit</button>
</form>
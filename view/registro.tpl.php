<section>
    <h3>Crear una cuenta</h3>
    <p>
        Usa cualquier dirección de correo electrónico como nombre de
        usuario de tu nueva cuenta. Recomiendamos que la contraseña
        sea diferente a la del correo electrónico.
    </p>
    <form>
        <div class="row">
            <div class="medium-6 columns">
                <label for="FirstName">Nombre</label>
                <input type="text" id="FirstName" autofocus />
            </div>
            <div class="medium-6 columns">
                <label for="LastName">Apellidos</label>
                <input type="text" id="LastName" />
            </div>
        </div>
        <label for="UserName">Nombre de usuario</label>
        <input type="email" id="UserName" placeholder="alguien@example.com" />
        <div class="row">
            <div class="medium-6 columns">
                <label for="Password">Contraseña</label>
                <input type="password" id="Password" />
            </div>
            <div class="medium-6 columns">
                <label for="RePassword">Vuelve a escribir la contraseña</label>
                <input type="password" id="RePassword" />
            </div>
        </div>
        <label for="Address">Dirección</label>
        <input type="text" id="Address" />
        <div class="row">
            <div class="medium-6 columns">
                <label for="Telephone">Teléfono:</label>
                <input type="tel" id="Telephone" />
            </div>
            <div class="medium-6 columns">
                <label for="City">Ciudad:</label>
                <input type="text" id="City" />
            </div>
        </div>

        <label>Fecha de nacimiento:</label>
        <div class="row">
            <div class="medium-4 columns">
                <select id="BirthDay"></select>
            </div>
            <div class="medium-4 columns">
                <select id="BirthMonth"></select>
            </div>
            <div class="medium-4 columns">
                <select id="BirthYear"></select>
            </div>
        </div>
        <input type="button" class="button small" id="SignUp" value="Registrarse" />
        <input type="reset" class="button small" id="Reset" value="Limpiar registro" />
    </form>
</section>
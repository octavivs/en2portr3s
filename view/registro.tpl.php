<section>
    <h3>Crear una cuenta</h3>
    <p>
        Usa cualquier dirección de correo electrónico como nombre de
        usuario de tu nueva cuenta. Se Recomienda que la contraseña
        sea diferente a la del correo electrónico, por seguridad la
        contraseña debería contener letras mayuscula, letras minusculas
        y caracteres especiales (cualquiera de los siguientes @#$%).
    </p>
    <form>
        <div class="row">
            <div class="medium-6 columns">
                <label for="FirstName">Nombre</label>
                <input type="text" class="data-field" id="FirstName" autofocus />
            </div>
            <div class="medium-6 columns">
                <label for="LastName">Apellidos</label>
                <input type="text" class="data-field" id="LastName" />
            </div>
        </div>
        <label for="UserName">Nombre de usuario</label>
        <input type="email" class="data-field" id="UserName" placeholder="alguien@example.com" />
        <div class="row">
            <div class="medium-6 columns">
                <label for="Password">Contraseña</label>
                <input type="password" class="data-field" id="Password" />
            </div>
            <div class="medium-6 columns">
                <label for="RePassword">Vuelve a escribir la contraseña</label>
                <input type="password" class="data-field" id="RePassword" />
            </div>
        </div>
        <div class="row">
            <div class="medium-6 columns">
                <label for="Telephone">Teléfono:</label>
                <input type="tel" class="data-field" id="Telephone" />
            </div>
        </div>
        <label>Fecha de nacimiento:</label>
        <div class="row">
            <div class="medium-4 columns">
                <select class="data-field" id="BirthDay"></select>
            </div>
            <div class="medium-4 columns">
                <select class="data-field" id="BirthMonth"></select>
            </div>
            <div class="medium-4 columns">
                <select class="data-field" id="BirthYear"></select>
            </div>
        </div>
        <input type="button" class="button small" id="SignUp" value="Registrarse" />
        <input type="reset" class="button small" id="Reset" value="Limpiar registro" />
    </form>
</section>

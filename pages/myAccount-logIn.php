<?php /*Template Name: Mi cuenta */ ?>
<?php get_header(); ?>
<?php get_template_part("nav-main"); ?>
<section class = "section-risen">
    <h1>Mi cuenta:</h1>
    <!-- Formulario de logIn -->
    <form action="" id="form-logIn">
        <label for = "user">Nombre de usuario:</label>
        <input type = "text" placeholder="User123" name = "user" id = "user">
        <label for = "password">Contraseña:</label>
        <input type = "password" placeholder="Contraseña$123" name = "password" id = "password">
        <button>ACCEDER</button>
    </form>
    <button id="button-create-account" onclick="createAccount()">
        CREAR CUENTA
    </button>

    <!-- Formulario para registrar usuario -->
    <form action="" id="form-signUp">
        <div>
            <label for = "name">
                <span class="required">*</span> 
                Nombre:
            </label>
            <label for = "lastNameF">
                <span class="required">*</span> 
                Apellido paterno:
            </label>
            <label for = "lastNameM">
                <span class="required">*</span> 
                Apellido Materno:
            </label>
        </div>
        <div>
            <input type = "text" placeholder="Juan José" name = "name"      id = "name">
            <input type = "text" placeholder="Pérez"     name = "lastNameF" id = "lastNameF">
            <input type = "text" placeholder="Rodriguéz" name = "lastNameM" id = "lastNameM" class="lastInput">
        </div>
        <div>
            <label for = "email">
                <span class="required">*</span> 
                Correo electrónico:
            </label>
            <label for = "user">
                <span class="required">*</span> 
                Usuario:
            </label>
            <label for = "job">
                Ocupación:
            </label>
        </div>
        <div>
            <input 
                type = "email"   
                placeholder="email@domain.com"          
                name = "email"
                id = "email"
            >
            <input 
                type = "text"    
                placeholder="User123"
                name = "user" 
                id = "user"
            >
            <input 
                type = "text"
                placeholder="Desarrollo de software"
                name = "job" 
                id = "job" 
                class="lastInput"
            >
        </div>
        <div>
            <label for = "password">
                <span class="required">*</span> 
                Contraseña:
            </label>
            <label for = "c-password">
                <span class="required">*</span> 
                Confirmar contraseña:
            </label>
        </div>
        <div>
            <input type = "password" placeholder="Contraseña$123" name = "password" id = "password">
            <input type = "password" placeholder="Contraseña$123" name = "password" id = "password">
        </div>
        <button>Registrarse</button>
    </form>
</section>
<?php get_footer(); ?>
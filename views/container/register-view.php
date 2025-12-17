<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Registro</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container">
        <form id="register-form">
            <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required/>
            </div>
            <div class="form-group">
                <label>Correo Electronico</label>
                <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required/>
            </div>
            <div class="form-group">
                <label>Contrasena</label>
                <input type="password" class="form-control" id="register-password" name="password" placeholder="password" required/>
            </div>
            <div class="form-group">
                <label>Confirma contrasena</label>
                <input type="password" class="form-control" id="register-confirm-password" name="confirmpassword" placeholder="confirmpassword" required/>
            </div>
			<div class="form-group">
				<input type="summit" class="btn" id="register-btn" value="Registrar"/>
			</div>
			<div class="form-group">
				<a id="login-url" class="btn">Iniciar sesion aqui</a>
			</div>
        </form>
    </div>
</section>

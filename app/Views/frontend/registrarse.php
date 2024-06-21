<!-- aqui formulario registrarse -->
<div class="d-flex vh-100">
    <div class="container my-auto">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Registro</h2>
                <form>
                    <div class="mb-3">
                        <label for="registerFullName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="registerFullName" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="registerEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="registerPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerConfirmPassword" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="registerConfirmPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>
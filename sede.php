<?php include 'basico.php';?>
    <main class="container d-flex me-md-auto">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Acceso al área privada</h1>
                <p class="text-muted">
                    Selecciona tu perfil para acceder a tu espacio
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="fw-bold text-primary mb-3">Clientes</h3>
                            <p class="text-muted mb-4">
                            Consulta tu póliza, gestiona siniestros y accede a toda la información
                            de tu seguro.
                            </p>
                            <form>
                                <div class="mb-3">
                                    <label for="clientEmail" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control" id="clientEmail" placeholder="cliente@email.com">
                                </div>
                                <div class="mb-3">
                                    <label for="clientPassword" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="clientPassword" placeholder="••••••••">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberClient">
                                        <label class="form-check-label" for="rememberClient">Recordarme</label>
                                    </div>
                                    <a href="#" class="small">¿Olvidaste tu contraseña?</a>
                                </div>
                                <div class="mb-3 mt-3 row">
                                    <button type="submit" class="btn btn-primary btn-lg col-md-8">Acceder como cliente</button>
                                    <button type="reset" class="btn col-md-4">BORRAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm h-100 border-primary">
                        <div class="card-body p-4">
                            <h3 class="fw-bold text-primary mb-3">Profesionales</h3>
                            <p class="text-muted mb-4">
                            Acceso exclusivo para empleados y colaboradores autorizados
                            de la compañía.
                            </p>
                            <form>
                                <div class="mb-3">
                                    <label for="employeeUser" class="form-label">Usuario corporativo</label>
                                    <input type="text" class="form-control" id="employeeUser" placeholder="usuario">
                                </div>
                                <div class="mb-3">
                                    <label for="employeePassword" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="employeePassword" placeholder="••••••••">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberEmployee">
                                        <label class="form-check-label" for="rememberEmployee">Recordarme</label>
                                    </div>
                                    <a href="#" class="small">Soporte técnico</a>
                                </div>
                                <div class="mb-3 mt-3 row">
                                    <button type="submit" class="btn btn-outline-primary btn-lg col-md-8">Acceder como profesional</button>
                                    <button type="reset" class="btn col-md-4">BORRAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php';?>
</body>
</html>
<?php include 'basico.php';?>
    <main class="container mt-3 mb-4">
        <h2>Forma de comunicación</h2>
        <form action="#" method="post">
            <div class="col-sm-8 mb-3 mt-3">
                <label for="name">Nombre completo:</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos" name="name" required>
            </div>
            <div class="col-sm-8 mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="ejemplo@email.com" name="email" required>
            </div>
            <div class="col-sm-8 mb-3 mt-3">
                <label for="comment">Comentarios:</label>
                <textarea class="form-control" placeholder="Escribe aquí tu mensaje" id="comment" name="comment"></textarea>
            </div>
            <div class="col-cm-8 mb-3 mt-3">
                <button type="submit" class="btn btn-primary">ENVIAR</button>
                <button type="reset" class="btn">BORRAR</button>
            </div>  
        </form>
    </main>
    <?php include 'footer.php';?>
</body>
</html>
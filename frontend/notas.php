<body>
    <h2>Usuario: <span id="usuario"><?= $_SESSION["usuario"];?></span></h2>
    <div id="user_id" hidden><?= $_SESSION["user_id"] ; ?></div>
    <div id="dueToken" hidden><?= $_SESSION["token"] ; ?></div>
    <div class="container">
        <table id="notasTable" class="table">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
        
        <a class="btn btn-primary" href="salir.php" >Salir</a>
        <input type="button" class="btn btn-primary" value="Mostrar Notas" id="cargarnotas"/>
        <div style="display: none;" id="messages">
            <p></p>
        </div>
        <div style="display: none;" id="notaForm">
            <hr/>
            <h2>Agregar nota</h2>
            <table class="table" >
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Categoria</th>
                </tr>
            </thead>
                <tr>
                    
                    <td><input type="text" name="notaTitle" id="notaTitle"></td>
                    <td><input type="text" name="notaContenido" id="notaContenido" min="1"></td>
                    <td><input type="text" name="notaCategoria" id="notaCategoria" min="1"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><input type="button" value="Guardar" id="nuevaNota"/></td>
                </tr>
            </table>
        </div>
    </div>
</body>
    <?php include "footer.php"; ?>
    
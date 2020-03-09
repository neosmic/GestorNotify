<body>
    <h2>Usuario: <span id="usuario"><?= $_SESSION["usuario"];?></span></h2>
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
            <table>
                <tr>
                    <td>Titulo:</td>
                    <td><input type="text" name="notaTitle" id="notaTitle"></td>
                </tr>
                <tr>
                    <td>Contenido:</td>
                    <td><input type="number" name="notaContenidoId" id="notaContenidoId" min="1"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" value="Guardar" id="notaSave"/></td>
                </tr>
            </table>
        </div>
    </div>
</body>
    <?php include "footer.php"; ?>
    
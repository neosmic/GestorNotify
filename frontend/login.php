<div class="container" style="max-width:540px">
<form action="validate.php" method="POST"  >
  <div class="form-group">
    <label for="usuario" >Usuario</label>
    <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" name="usuario">
    
  </div>
  <div class="form-group">
    <label for="pswd">Password</label>
    <input type="password" class="form-control" id="pswd" placeholder="Password" name="pswd" >
  </div>
  
  <button type="submit" class="btn btn-primary" >Validar</button>
</form>
</div>
<?php include "footer.php"; ?>
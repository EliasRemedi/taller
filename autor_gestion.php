<?php
//class="table table-striped"
require_once './controladores/autorController.php';
$autor = new AutorController();
$resultado = $autor->ListarAutores();
?>
<link href="css/bootstrap.css" rel="stylesheet">
<div>
    <table class="table table-responsive" >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>

        </thead>
        <tbody>
            <?php
            while ($array = $resultado->fetch_assoc()) {
                ?>
                <tr><td> 
                        <?php
                        echo $array["nombre"];
                        echo '</br>';
                        ?>
                    </td>
                    <td> 
                        <?php
                        echo $array["apellido"];
                        echo '</br>';
                        ?></td>
            <form method="POST"> <td>
                    <input type="hidden" name="id_a" id="id_a" value="<?php echo $array["id_autor"];?>">
                    <input type="button" value="Modificar" class="btn btn-primary" onclick="this.form.action='autor_update.php'
                           ; this.form.submit()">
                    <input type="button" value="Eliminar" class="btn btn-danger" onclick="this.form.submit()">
                </td> </form>   </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<?php $resultado= $autor->eliminar()?>
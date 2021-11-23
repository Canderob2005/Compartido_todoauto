
<?php

function getProveedores($id_serv = '', $pueblo = '')
{
   include "./php/conn.php";
   try {
      $conn =
      new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(
         PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT *
          FROM clientes Where id_serv='{$id_serv}' AND pueblo='{$pueblo}' ORDER BY pueblo ASC;"
      );
      $stmt->execute();

      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // echo json_encode($data);

      for ($i = 0; $i < count($data); $i++) 
      { ?>
       <?php

$sql = "SELECT DISTINCT * FROM clientes WHERE (estatus= 'si') AND (id_serv =  'Accesorios para autos, camiones, motoras') ORDER BY pago='no' ASC";

?>
  
<div class="col-sm-6">
<div class="card " style="background-color:#d6eaf8; 	min-height:400px;">
<div class="card-body">
  <div class="card-img-top">
 <a href="contenido/<?php echo  $data[$i]['friendly_url']; ?>"> 
<img  style="margin-top:5%;" src="../../img-menu-contenido/<?php echo $data[$i]['imagen']; ?> ">
</div>
<div class="card-body info">
<h5 class="card-title" style="color:#0B0B61;"><?php echo $data[$i]['id_serv']; ?></h5>
<p class="card-title" style="color:#F00;">Click  aqui para comenzar...</p>
</div>
</a>
</div>
</div>
</div>

</div> 
</div>

   <?php   }

   } catch (PDOException $e) {

      //  NOTA se debe trabajar el error en caso de que ocurra.
   }
   $conn = null;
}

if (isset($_POST['id_serv']) && isset($_POST['pueblo'])) {
   getProveedores($_POST['id_serv'], $_POST['pueblo']);
}

// nombreNegocio
// pueblo
// id_serv

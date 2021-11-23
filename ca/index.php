<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  
   
  <!-- Custom styles for this template -->

</head>
<body>

	
		<div class="container-fluid">
      		<div class="row" >
            
        		
        		<div class="col-lg-12" >
        			
			  	<?php
					include('includes/db.php');

					$query = "select * from slider where estado=1 order by orden";
					$slides = $db->query($query);
					$rows = $slides->num_rows;

					if($slides->num_rows>0){
				?>
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  				<ol class="carousel-indicators">
				<?php
						for ($i = 0; $i < $rows; $i++) {

							$hasClass = '';

							$res = ($i == 0) ? $hasClass = 'class="active"'  : $hasClass = '';

				?>
						  
				<?php
						}
				?>
							</ol>
			  				<div class="carousel-inner">

						<?php

						$i = 0;

						while($row = $slides->fetch_assoc()){
								
							if($i == 0){
				?>
								<div class="carousel-item active">
									<img src="<?php echo "../slide-mysql/data1/images/".$row['imagen']; ?>" class="d-block w-100"/>
								</div>
				<?php
							}else{
				?>
								<div class="carousel-item">
									<img src="<?php echo "../slide-mysql/data1/images/".$row['imagen']; ?>" class="d-block w-100"/>
								</div>
				<?php
							}

								$i++;
					
					    }

					}
	            ?>
						    </div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							</a>
						</div>
					</div>
			    </div>
       			
      		</div>
    	
	
	

</body>
</html>
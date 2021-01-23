
<?php 

$con = mysqli_connect('localhost','root','','besttech1');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../favicon.ico" >
    <title>Compare Product | bestech.tn</title>

    <style>
    	.card{
    		border: 2px solid #ccc; border-radius: 3px; padding: 10px;
    	}

      .card_check{
        border: 3px solid red;
      }

    	.compare{
    		font-weight: 600; color:GREEN; cursor: pointer;
    	}
    </style>
  </head>
  <body style="background-color:#e1ecb4;">
  <p> <a class="btn " href="../index.php"> Home </a> </p>
      </br>
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12" style="margin-top: 50px;">
  				<h2 style="text-align: center;">Compare Product here to do the best choice!</h2>
          <h4 style="text-align: center;">Bestech Comparator</h4>
  			</div>	
  		</div>

      <div class="row" id="btn_compare" style="display:none;">
        <div class="col-sm-12" style="margin-top: 50px;">
          <form action="compare.php" method="post">
               <input style="color:#000000;" type="hidden" value="" id="card_one" name="card_one"/>
               <input type="hidden" value="" id="card_two" name="card_two"/>
               <input type="submit" value="Compare Product" class="btn hvr-hover" style="float:right;"/>
           </form>
        </div>  
      </div>


  		<div class="row" style="margin-top: 50px;">
  			<?php
				$sql = "select * from products";
				$query = mysqli_query($con, $sql);
				while($row = mysqli_fetch_array($query))
				{
			?>
  			<div class="col-sm-3" style="margin-bottom: 30px; padding: 5px;">
  				<div class="card compare_card<?php echo $row['product_id']; ?>">
	  				<p style="color: green; font-weight: 600;"><?php echo $row['product_title']; ?></p>
	  				<p style="color: green;">Dt.<?php echo $row['product_price']; ?></p>
	  				<button style="color: green;" class="btn  btn-xs compare" rel="<?php echo $row['product_id']; ?>">Compare</button>
  				</div>
  			</div>	
  			<?php 
  				} 
  			?>
  		</div>
  	</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	$(document).ready(function(){
           $(document).on('click','.compare',function(){
            var id = $(this).attr('rel');
            var size_class = $('.card_check').length;
            if(size_class > 1)
            {
                if($(".compare_card"+id).hasClass("card_check"))
                {
                    
                    $(".compare_card"+id).removeClass("card_check");
                    
                }
                else
                {
                    alert("You have already select maximum product");
                }
               
            }
            else
            {
                if(size_class>0)
                {
                     $('#btn_compare').show();
                }
                
                if($(".compare_card"+id).hasClass("card_check"))
                {
                    $(".compare_card"+id).removeClass("card_check");
                }
                else
                {
                    $(".compare_card"+id).addClass("card_check");
                    
                    var pro1 = $('#card_one').val();
                    var pro2 = $('#card_two').val();
                    
                    if(pro1=="")
                    {
                        $('#card_one').val(id);
                    }
                    else if(pro2=="")
                    {
                        $('#card_two').val(id);
                    }
                    
                }
            }
             
           }); 

       });
    </script>
  </body>
</html>

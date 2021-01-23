<?php
include ("includes/headerE.php");
$min = 100;
$max = 9000;

if (! empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (! empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"
    href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 9000,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>

<style>


.form-price-range-filter {
	text-align: center;
    width:75%;

}

.tutorial-table {
    width: 100%;
    font-size: 13px;
    border-top: #e5e5e5 1px solid;
    border-spacing: initial;
    margin: 20px 0px;
    word-break: break-word;
}

.tutorial-table th {
    background-color: #f5f5f5;
	padding: 10px 20px;
	text-align: left;
}

.tutorial-table td {
    border-bottom: #f0f0f0 1px solid;
    background-color: #ffffff;
	padding: 10px 20px;
}

.text-right {
	text-align: right;
}

th.text-right {
	text-align: right;
}

.btn-submit {
	margin-top: 20px;
	padding: 10px 20px;
	background: #FFF;
	border: #aaa 1px solid;
	border-radius: 4px;
	margin: 20px 0px;
}

#min {
	float: left;
	width: 70px;
	padding: 5px 10px;
	margin-right: 14px;
}

#slider-range {
	width: 75%;
	float: left;
	margin: 5px 0px 5px 0px;
}

#max {
	float: right;
	width: 70px;
	padding: 5px 10px;
}

.no-result {
	padding: 20px;
	background: #ffdddd;
	text-align: center;
	border-top: #d2aeb0 1px solid;
	color: #6f6e6e;
}

.product-thumb {
	width: 50px;
	height: 50px;
	margin-right: 15px;
	border-radius: 50%;
	vertical-align: middle;
}
</style>
</head>

<body>
    

    <div class="form-price-range-filter">
        <form method="post" action="">
            <div>
                <input type="" id="min" name="min_price"
                    value="<?php echo $min; ?>">
                <div id="slider-range"></div>
                <input type="" id="max" name="max_price"
                    value="<?php echo $max; ?>">
            </div>
            </br>
            <div>
                <input type="submit" class="btn hvr-hover"
                    value="Filter Product" class="btn-submit">
            </div>
        </form>
    </div>
  
<?php

$conn = mysqli_connect("localhost", "root", "", "besttech1");

$result = mysqli_query($conn, "SELECT * from products where product_price BETWEEN '$min' AND '$max'");

$count = mysqli_num_rows($result);
if ($count > 0) {
    ?>
<hr>
    <div class='container'>
        <table class='tutorial-table' cellspacing='1px'width='100%'>
            <tr>
                <th>Product name</th>
                <th>Price (dt)</th>
               
            </tr>
     <?php
    while ($row = mysqli_fetch_array($result)) {
        $pro_img=$row['product_img'];
        ?>
    
        <tr>
        <td><?php echo $row['product_title']; ?></td>
                <td class='text-right'><?php echo $row['product_price']; ?></td>
            </tr>
<?php
    } 
} else {
    ?>
<div class="no-result">No Results</div>
<?php
}

mysqli_free_result($result);

mysqli_close($conn);

?>
</table>
    </div>
</body>
</html>
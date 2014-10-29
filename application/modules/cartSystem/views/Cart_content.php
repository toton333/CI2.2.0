<h3>Products</h3>
<table width = "100%" border = "1"   >

<tr>
 <td width="37%" > <strong>ID</strong> </td>
 <td width="30%" > <strong>NAME</strong></td>
 <td width="16%" > <strong>PRICE</strong></td>
 <td width="16%" >&nbsp;</td>
</tr>


	<?php $product_index = 0; ?>
	<?php foreach($products as $product): ?>

	<tr>
		
		<td><?php echo $product['id'] ?></td>
		<td>
			<?php
			 echo $product['name'] ;
			 if (array_key_exists('options', $product)) {
			 	echo '<hr/>';
			 	foreach ($product['options'] as $option_name => $option_value) {
			 		echo '<i>' . $option_name . ' :</i> ' . $option_value . '<br/>' ;
			 	}
			 }
			 ?>
		</td>
		<td><?php echo '$'.$product['price'] ?></td>
		<td><a href="<?php base_url() ?> cartSystem?id=<?php echo $product_index; ?> ">Add To Cart</a></td>
	</tr>
    <?php $product_index ++ ; ?>
    <?php endforeach; ?>




</table>
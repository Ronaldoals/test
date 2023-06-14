    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

        <form name="frm" method="post" action="">
        <h1>Product Management</h1>
        <p>
        	<img src="images/add.png" alt="Thêm mới" width="16" height="16" border="0" /> Add new
        </p>
        <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Product ID</strong></th>
                    <th><strong>Product Name</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Quantity</strong></th>
                    <th><strong>Category ID</strong></th>
                    <th><strong>Image</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
				
			?>
			<tr>
              <td ><?php  ?></td>
              <td ><?php  ?></td>
              <td><?php  ?></td>
              <td><?php  ?></td>
              <td ><?php  ?></td>
              <td><?php  ?></td>
             <td align='center' class='cotNutChucNang'>
                 <img src='product-imgs/<?php ?>' border='0' width="50" height="50"  /></td>
             <td align='center' class='cotNutChucNang'><img src='images/edit.png' border='0'/></td>
             <td align='center' class='cotNutChucNang'><img src='images/delete.png' border='0' /></td>
            </tr>
            <?php
               
			?>
			</tbody>
        
        </table>  

 </form>

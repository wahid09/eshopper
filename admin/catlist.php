<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Ctegory.php'; ?>
<?php 
$cat = new Category();

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$getCat = $cat->getAllcat();
						if ($getCat) {
							$i = 0;
							while ($result = $getCat->fetch_assoc()) {
								$i++;
						?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $result['catName']; ?></td>
							<td><a href="catedit.php?catid = <?php echo $result['catId'];?>">Edit</a> || <a onclick="return confirm('Are you sure to delete category!!')" href=""">Delete</a></td>
						</tr>
						<?php }
						} ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>


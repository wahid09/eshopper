<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Ctegory.php'; ?>
<?php 
$cat = new Category();
//$id = '';
if (!isset($_GET['catid']) || $_GET['catid'] == Null) {
    echo "<script>window.location = 'catlist.php'; </script>";
    //header("location:catlist.php");
}else{
    $id = $_GET['catid'];
}

?>
<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){
 $catName = $_POST['catName'];
 $updateCat = $cat->catUpdate($catName, $id);
}

?>
<?php
$getcat = $cat->getCatById($id);
if ($getcat) {
    while ($result = $getcat->fetch_assoc()) {

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Category</h2>
               <div class="block copyblock">
                <?php 
                if (isset($updateCat)) {
                    echo $updateCat;
                }
                ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['catName']; ?>" class="medium" name="catName" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php   }
} 
?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
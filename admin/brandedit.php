<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Brand.php'; ?>
<?php 
$brand = new Brand();
//$id = '';
if (!isset($_GET['brandid']) || $_GET['brandid'] == Null) {
    echo "<script>window.location = 'brandlist.php'; </script>";
    //header("location:catlist.php");
}else{
    $id = $_GET['brandid'];
    $pattern = '/[^-a-zA-Z0-9_]/';
    $replacement = '';
    $id = preg_replace($pattern, $replacement, $id);
}

?>
<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){
 $brandName = $_POST['brandName'];
 $updatebrand = $brand->brandUpdate($brandName, $id);
}

?>
<?php
$getbrand = $brand->getbrandById($id);
if ($getbrand) {
    while ($result = $getbrand->fetch_assoc()) {

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Brand</h2>
               <div class="block copyblock">
                <?php 
                if (isset($updatebrand)) {
                    echo $updatebrand;
                }
                ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['brandName']; ?>" class="medium" name="brandName" />
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
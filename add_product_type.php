<?php
include 'header.php';
?>
<div class="row">
    <div class="page-header">
        <h1>
            Add Product Type 
        </h1>
    </div>
</div>
<div class="row">
    
        <form class="form-horizontal" role='form'>
            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อประเภทสินค้า</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="" id="" placeholder="ชื่อประเภทสินค้า">
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label">Product Type Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="" id="" placeholder="Product Type Name">
                </div>
            </div>
            <div>
                <input type="submit"  class="btn btn-success" name="save_product_type" value="Save" >
                <a href="product_types.php" class="btn btn-danger">Cancle</a>
            </div>
        </form>
    
</div>
<?php
include 'footer.php';
?>

<?php
include 'header.php';
?>
<div class="row">
    <div class="page-header">
        <h1>
            Add Product
        </h1>
    </div>
</div>
<div class="row">

    <form class="form-horizontal" role='form'>
        <div class="form-group">
            <label class="col-sm-2 control-label">Name(TH)</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="" id="" placeholder="ชื่อสินค้า">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Name(EN)</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="" id="" placeholder="Product Name">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Price</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name="" id="" placeholder="Price">
            </div>
        </div>
        <div class="col-sm-3" ></div>
        <div class="col-sm-3" >
            <div class="form-group">
                <label class="col-sm-2 control-label">Width</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="" id="" placeholder="Width">
                </div>
            </div>
        </div>
        <div class="col-sm-3" >
            <div class="form-group">
                <label class="col-sm-2 control-label">Hight</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="" id="" placeholder="Hight">
                </div>
            </div>
        </div>
        <div class="col-sm-3" >
            <div class="form-group">
                <label class="col-sm-3 control-label">Weight </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="" id="" placeholder="weight">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Detail(TH)</label>
            <div class="col-sm-5">
                <textarea class="form-control" rows="3"></textarea>                    
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Detail(EN)</label>
            <div class="col-sm-5">
                <textarea class="form-control" rows="3"></textarea>                    
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="" id="" placeholder="Product">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Type</label>
            <div class="col-sm-3">
                <select class="form-control">
                    <option>Type 1</option>
                    <option>Type 2</option>
                    <option>Type 3</option>
                    <option>Type 4</option>
                    <option>Type 5</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6" >
            <div class="form-group">
                <label class="col-sm-3 control-label">Image front</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" size="50" name='' id="" >
                </div>
            </div>
        </div>
        <div class="col-sm-6" >
            <div class="form-group">
                <label class="col-sm-3 control-label">Image back</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" size="50" name='' id="" >
                </div>
            </div>
        </div>
        <div class="col-sm-6" >
            <div class="form-group">
                <label class="col-sm-3 control-label">Image Right</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" size="50" name='' id="" >
                </div>
            </div>
        </div>
        <div class="col-sm-6" >
            <div class="form-group">
                <label class="col-sm-3 control-label">Image Left</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" size="50" name='' id="" >
                </div>
            </div>
        </div>   



        <div class="pull-right">
            <input type="submit"  class="btn btn-success" name="save_product_type" value="Save" >
            <a href="products.php" class="btn btn-danger">Cancle</a>
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>

<?php
include 'header.php';
?>
<div class="row">
    <div class="page-header">
        <h1>
            Add Promotion 
        </h1>
    </div>
</div>
<div class="row">
    
        <form class="form-horizontal" role='form'>
            <div class="form-group">
                <label class="col-sm-2 control-label">Name(TH)</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="" id="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Name(EN)</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="" id="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Detail(TH)</label>
                <div class="col-sm-3">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Name(EN)</label>
                <div class="col-sm-3">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label">Start Date</label>
                <div class="col-sm-5">
                    
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">End Date</label>
                <div class="col-sm-5">
                    
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" name="" id="">
                </div>
            </div>
            
            <div>
                <input type="submit"  class="btn btn-success btn-lg" name="save_product_type" value="Save" >
                <a href="promotions.php" class="btn btn-danger btn-lg">Cancle</a>
            </div>
        </form>
    
</div>
<?php
include 'footer.php';
?>

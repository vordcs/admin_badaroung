<?php
include 'header.php';
?>
<div class="row">
    <div class="col-lg-12">
        <h1>Crate Slide</h1>
    </div>
</div>
<hr>
<div class="row">
    <div class="container">
        <form class="form-horizontal" role="form">

            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อเรื่อง</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="ชื่อเรื่อง">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อเรื่องรอง</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="ชื่อเรื่องรอง">
                </div>
            </div>               

            <div class="form-group">
                <label class="col-sm-2 control-label">Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="Tltle">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Sub Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="Sub Tltle">
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Link</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="Link">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Image</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" size="50" id="" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-3">
                    <select class="form-control col-sm-3">
                        <option>ใช้งาน</option>
                        <option>ไม่ใช้งาน</option>                        
                    </select>
                </div>
            </div>

            <div>
                <input type="submit" class="btn btn-success" name="save_slide" value="Save" >
                <a href="slides.php" class="btn btn-danger">Cancle</a>
            </div>

        </form>
    </div>   
</div>

<?php
include 'footer.php';
?>


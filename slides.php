<?php
include 'header.php';
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Slide</h1>
    </div>
</div>
<hr>
<div class="row">    
    <a type="button" class="btn btn-success pull-right" href="crate_slide.php" ><i class="fa fa-plus fa-lg"></i> Create Slide</a>   
</div>
<div class="row">
    <table class="table">
        <thead>
        <th>Order</th>
        <th>Title</th>
        <th>Sub title</th>
        <th>Link</th>
        <th>image</th>
        <th>Status</th>
        <th></th>
        
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>ทดสอบชื่อเรื่องหลัก</td>
                <td>ชื่อเรื่องรอง</td>
                <td>Link 12345678910</td>
                <td><img src="" alt="" class="img-thumbnail"></td>
                <td><i class="fa fa-check-square-o fa-lg"></i> <i class="fa fa-check-square-0 fa-lg"></i></td>
                <td>
                    <button type="button" class="btn btn-info"><i class="fa fa-pencil fa-lg"></i> Edit</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
                </td>
                
            </tr>
        </tbody>
            
    </table>

</div>
<?php
include 'footer.php';
?>
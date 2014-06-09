<?php
include 'header.php';
?>

<div class="row">
    <div class="col-lg-12">
        <h1>Product Types</h1>
    </div>
</div>
<div class="container">
    <div class="row">    
        <a type="button" class="btn btn-success pull-right" href="add_product_type.php" ><i class="fa fa-plus fa-lg"></i>&nbsp;Add Product Type</a>   
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Name(TH)</th>
                    <th>Name(EN)</th>
                    <th>Product Number</th>
                    <th></th>
                </tr>        
            </thead>
            <tbody>
                <tr>
                    <td>ประเภทกระเป๋า</td>
                    <td>Bag Type</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-info"><i class="fa fa-pencil fa-lg"></i> Edit</button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
                    </td>
                </tr>

            </tbody>

        </table> 
    </div>
</div>




<?php
include 'footer.php';
?>


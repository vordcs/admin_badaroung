<?php
include 'header.php';
?>
<div class="row">
    <div class="page-header">
        <h1>Products</h1>
    </div>
</div>

<div class="row">    
    <a type="button" class="btn btn-success pull-right" href="add_product.php" ><i class="fa fa-plus fa-lg"></i>&nbsp;Add Product</a>   
</div>
<hr>
<div class="row">
    <table class="table-condensed table-responsive">
        <thead>
            <tr>
                <th style="width: 30%">Name(TH)</th>
                <th style="width: 30%">Name(EN)</th>
                <th style="width: 2%">Width(cm)</th>
                <th style="width: 2%">Hight(cm)</th>
                <th style="width: 2%">Weight(kg)</th>
                <th style="width: 8%">Detail</th>
                <th style="width: 2%">Price(THB)</th>
                <th style="width: 2%">Type</th>                    
                <th style="width: 2%">Images</th>
                <th style="width: 15%"></th>
            </tr>        
        </thead>
        <tbody>
            <tr>
                <td>กระเป๋า---กระเป๋า---กระเป๋า---กระเป๋า</td>
                <td>Bag---Bag---Bag---Bag---Bag</td>
                <td>158</td>
                <td>30</td>
                <td>52.5</td>
                <td><a href="#">Read more</a></td>
                <td>1390</td>
                <td>Bag Type</td>
                <td><a href="#" >view</a></td>
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


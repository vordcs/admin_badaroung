<?php
include 'header.php';
?>

<div class="row">
    <div class="page-header">
        <h1>Promotions</h1>
    </div>
</div>

<div class="row">    
    <a type="button" class="btn btn-success btn-lg pull-right" href="add_promotion.php" ><i class="fa fa-plus fa-lg"></i>&nbsp;Add Promotion</a> 
    
</div>
<hr>
<div class="row">
    <table class="table-condensed table-responsive">
        <thead>
            <tr>
                <th style="width: 5%">Status</th>
                <th style="width: 15%">Images</th>
                <th style="width: 20%">Name(TH)</th>
                <th style="width: 20%">Name(EN)</th>                    
                <th style="width: 8%">Detail</th>
                <th style="width: 2%">Price(THB)</th> 
                <th style="width: 2%">Promotion Price(THB)</th> 
                <th style="width: 12%"></th>
            </tr>        
        </thead>
        <tbody>
            <tr>
                <td>Active</td>
                <td><img data-src="holder.js/100x100/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail"></td>
                <td>กระเป๋า---กระเป๋า---กระเป๋า---กระเป๋า</td>
                <td>Bag---Bag---Bag---Bag---Bag</td>
                <td><a href="#">Read more</a></td>
                <td>1390</td>
                <td>199</td>
                <td>                    
                    <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil fa-lg"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
                </td>
            </tr>
            <tr>
                <td>unActive</td>
                <td><img data-src="holder.js/100x100/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail"></td>
                <td>กระเป๋า---กระเป๋า---กระเป๋า---กระเป๋า</td>
                <td>Bag---Bag---Bag---Bag---Bag</td>
                <td><a href="#">Read more</a></td>
                <td>1390</td>
                <td>199</td>
                <td class="center-block">
                    <button type="button" class="btn btn-info btn-xs"><i class="fa fa-refresh fa-lg"></i> Renew</button>                    
                    <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
                </td>
            </tr>

        </tbody>

    </table> 
    
</div>



<?php
include 'footer.php';
?>


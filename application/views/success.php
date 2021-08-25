<div class="container">
    <h2 class="my-4"><?= $title_heading ?></h2>

    <?php
    $product['price'];
    $prepaid_balance['value'];
    $persen = 500;
    $total = $prepaid_balance['value'] + $persen;

    $total = "Rp " . number_format($total,0,',','.');
    ?>

    <div class="row">
        <p class=col-sm-5>Ordeer no.</p>
        <p><?php echo "" ?></p>
    </div>
    <div class="row">
        <p class=col-sm-5>Total</p>
        <p><?php echo $total ?></p>
    </div>
    <div class="row">
        <p class="col-sm-5">{<?php echo $product['product'] ?>} that costs {Rp.<?php echo number_format($product['price'],0,',','.'); ?>} will be shipped to : {<?php echo $product['address'] ?>}</p><br>
    </div>
    <div class="row">
        <p class="col-sm-5">only after you pay</p>
    </div>

    <div class="row">
        <a href="<?php echo base_url('user/pay_order') ?>" class='btn btn-primary col-sm-6 mt-5'>Pay now</a>
    </div>
    
</div>


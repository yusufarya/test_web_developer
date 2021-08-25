<div class="container">
    <h2 class="my-4"><?= $title_heading ?></h2>
    <input type="text" class="form-control col-sm-6" value="<?php echo $product['no_order'] ?>" readonly>

    <a href="<?php echo base_url('user/history') ?>" class='btn btn-primary col-sm-6 mt-5'>Pay now</a>
</div>
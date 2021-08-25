<div class="container">
    <h2 class="my-4">Product Page</h2>

    <form action="<?php echo base_url('user/product_page'); ?>" method="post">
        <textarea class="form-control col-sm-4 mt-2" name="product" rows="3" placeholder="Product"></textarea>
        <?= form_error('product', '<small class="text-danger p-1">', ' </small>'); ?>
        <textarea class="form-control col-sm-4 mt-2" name="address" rows="3" placeholder="Shipping Address"></textarea>
        <?= form_error('address', '<small class="text-danger p-1">', ' </small>'); ?>

        <input type="text" name="price" class="form-control col-sm-4 mt-2" placeholder="Price">
        <?= form_error('price', '<small class="text-danger p-1">', ' </small>'); ?>
        <br>

        <button class="btn btn-primary form-control col-sm-4 mt-5" type="submit">
            Submit
        </button>
    </form>

</div>
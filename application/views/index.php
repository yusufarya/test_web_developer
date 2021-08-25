<div class="container">
    <h2 class="my-4"><?= $title_heading ?></h2>

    <form action="<?php echo base_url('user/topup'); ?>" method="post">
    <div class="form-group">
        <input type="text" name="mobile_number" class="form-control col-sm-4 mt-3" placeholder="Mobile Number">
        <?= form_error('mobile_number', '<small class="text-danger p-1">', ' </small>'); ?>
    </div>

    <div class="form-group">
        <select name="value" type="text" class="form-control col-lg-4 mt-3">
            <option value="">Value</option>
            <?php foreach ($value as $v) : ?>
                <option value="<?php echo $v['price'] ?>"><?php echo $v['price'] ?> </option>
            <?php endforeach; ?>
        </select>
        <?= form_error('value', '<small class="text-danger p-1">', ' </small>'); ?>
    </div>

    <div class="mt-1">
        <button class="btn btn-primary form-control col-sm-4 mt-5" type="submit">
            Submit
        </button>
    </div>
    </form>
</div>

</div>
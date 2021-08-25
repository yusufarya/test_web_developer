<div class="container">
    <h2 class="my-4"><?= $title_heading ?></h2>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-md">
            <form action="<?php echo base_url('user/history') ?>" method="post">
            <div class="input-group mb-3">
                <input type="text" name="keyword" class="form-control" placeholder="Search by order no." autocomplate="off" autofocus>
                <div class="input-group-append">
                    <input class="btn btn-primary" type="submit" name="submit">
                </div>
            </div>
            </form>
        </div>
    </div>

    <?php foreach ($topup as $t) : ?>

        <div class="form-group">
            <label class=" col-sm-4"><?php echo $t['no_order'] ?> Rp. <?php echo number_format($t['value'],0,',','.') ?></label> <a onclick="javascript: return confirm('Konfirmasi pembayaran?')" href="<?php echo base_url('user/lunas/') . $t['id'] ?>" class="btn btn-primary "><i class="fas fa-fw fa-book"></i> Pay Now. </a>
            <h6 class="col-sm-4">{Rp. <?php echo number_format($t['value'],0,',','.') ?>} for <td>{<?php echo $t['mobile_number'] ?>}</td></h6>
        </div><hr>
        
    <?php endforeach ; ?>


    <?php foreach ($product as $p) : ?>
        <div class="form-group">
            <label class=" col-sm-4"><?php echo $p['no_order'] ?> Rp. <?php echo number_format($p['price'],0,',','.') ?></label> <a onclick="javascript: return confirm('Konfirmasi pembayaran?')" href="<?php echo base_url('user/lunas/') . $p['id'] ?>" class="btn btn-primary "><i class="fas fa-fw fa-book"></i> Pay Now. </a>
            <h6 class="col-sm-4">{<?php echo $p['product'] ?>} that costs <td>{<?php echo $p['price'] ?>}</td></h6>
        </div><hr>
    <?php endforeach ; ?>

    <hr>
    <?php echo $this->pagination->create_links(); ?>

</div>
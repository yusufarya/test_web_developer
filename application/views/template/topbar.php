<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <a class="navbar-brand" href="#"><strong><?php echo $title ?> {<?php echo $user['name'] ?>}</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-primary" href="<?php echo base_url('user')?>">Prepaid Balance</a>
      </li>

      <div class="mt-1 pt-1">|</div>

      <li class="nav-item">
        <a class="nav-link text-primary" href="<?php echo base_url('user/product_page')?>">Product Page</a>
      </li>
    </ul>
  </div>
</nav>
<!-- container -->
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-block p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register!</h1>
                        </div>
                        <form class="user" method="post" action="<?php echo base_url('auth'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                <?= form_error('name', '<small class="text-danger pl-2">', ' </small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-2">', ' </small>'); ?>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-2">', ' </small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md btn-block">
                                Register
                            </button>

                        </form>
                        <hr>
                        
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url('auth/login'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End container -->
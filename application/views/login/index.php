
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-1 shadow-lg my-5" style="margin-top: 10rem !important">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">   
                    <div class="col-lg-12">
                        <?php if ($message = $this->session->flashdata('error')): ?>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>
                        
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="display-4 text-primary mb-4">Login</h1>
                            </div>
                            <div class="col-md-12">
                            <form class="user" name="form_auth" method="POST" action="<?php echo base_url('login/auth'); ?>">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Digite sua senha">
                                </div>
                                </div>
                                <div class="mx-auto col-md-4 col-md-offset-2">
                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                <a class="btn btn-secondary btn-block" href="<?php echo base_url('/') ?>">Voltar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
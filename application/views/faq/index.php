<?php $this->load->view('layout/main'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: false,
            responsive: true,
            lengthChange: true,
            pagingType: 'full_numbers',
            buttons: ['copy', 'pdf', 'colvis']
        });

        table.buttons().container()
            .insertBefore('#table_filter');
    });
</script>
<script type="text/javascript">
    $("div.header").click(function() {
        $("table").slideToggle();
    });
</script>
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<div class="card text-center">
    <div class="card-header">
        <h6 class="display-4" style="margin-top: 100px;">FAQ</h6>
    </div>
    <div class="">
        <div class="card-deck">
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="">
                        <?php if ($message = $this->session->flashdata('sucesso')) : ?>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>

                        <?php if ($message = $this->session->flashdata('error')) : ?>

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
                        <h6 class="m-0 mt-2 mr-2 font-weight-bold text-primary">
                            <?php if (!$this->ion_auth->logged_in()) : ?>
                            <?php else : ?>
                                <a href="<?php echo base_url('faq/add'); ?>"><i class="fa-solid fa-circle-plus fa-2x text-success float-right"></i></a>
                            <?php endif; ?>
                        </h6>
                    </div>
                    <div class="hero-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Sistema</th>
                                            <th class="text-center">Técnico</th>
                                            <th class="text-center">Tag</th>
                                            <th class="text-center">Problema</th>
                                            <th class="text-center">Solução</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($faqs as $faq) : ?>
                                            <tr>
                                                <td class="col-sm-1"><?php echo $faq->id ?></td>
                                                <td class="col-sm-1"><?php echo $faq->faq_sistema ?></td>
                                                <td class="col-sm-1"><?php echo $faq->faq_tecnico ?></td>
                                                <td class="col-sm-2"><?php echo $faq->faq_tag ?></td>
                                                <td class="col-sm-5" style="max-width: 1ch; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $faq->faq_problema ?></td>
                                                <td class="col-sm-4" style="max-width: 1ch; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $faq->faq_solucao ?></td>
                                                <td>
                                                    <a class="show" href="<?php echo base_url('faq/show/' . $faq->id); ?>"><i class="fa-solid fa-eye mr-2 show"></i></a>
                                                    <?php if (!$this->ion_auth->logged_in()) : ?>
                                                    <?php else : ?>
                                                        <a class="edit" href="<?php echo base_url('faq/edit/' . $faq->id); ?>"><i class="fa-solid fa-pen"></i></a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
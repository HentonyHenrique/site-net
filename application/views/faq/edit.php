<?php $this->load->view('layout/main'); ?>
<style>
    .sticky-wrapper {
        background-color: #051922;
    }
</style>

<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<form method="POST" autocomplete="off">
    <div id="criar-paciente" class="col-md-12">
        <div class="card">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active mx-auto" aria-current="page" style="margin-top: 100px;">Editar Registro: <?php echo ($faq->id) ?></li>
                </ol>
            </nav>
            <div class="form-group mt-2 mb-2 ml-2 mr-2 row">
                <div class="col-sm-3">
                    <label for="">Sistema</label>
                    <select name="faq_sistema" class="form-control">
                        <option value="Ello Master" <?php echo ($faq->faq_sistema == 'Ello Master' ? 'selected' : ''); ?>>Ello Master</option>
                        <option value="NFc-e" <?php echo ($faq->faq_sistema == 'NFC-e' ? 'selected' : ''); ?>>NFC-e</option>
                        <option value="Ello Mobile" <?php echo ($faq->faq_sistema == 'Ello Mobile' ? 'selected' : ''); ?>>Ello Mobile</option>
                        <option value="Ello/NFC-e" <?php echo ($faq->faq_sistema == 'Ello/NFC-e' ? 'selected' : ''); ?>>Ello/NFc-e</option>
                        <option value="Plataforma do Contador" <?php echo ($faq->faq_sistema == 'Plataforma do Contador' ? 'selected' : ''); ?>>Plataforma do Contador</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Técnico</label>
                    <input type="text" class="form-control" name="faq_tecnico" value="<?php echo $faq->faq_tecnico; ?>">
                </div>
                <div class="col-sm-3">
                    <label for="">Rotina Interna</label>
                    <select name="faq_interno" class="form-control">
                        <option value="1"<?php echo ($faq->faq_interno == '1' ? 'selected' : ''); ?>>Sim</option>
                        <option value="2"<?php echo ($faq->faq_interno == '2' ? 'selected' : ''); ?>>Não</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Tag Rotina</label>
                    <input type="text" class="form-control" name="faq_tag" value="<?php echo $faq->faq_tag; ?>">
                </div>
                <div class="col-sm-12">
                    <label for="">Problema</label>
                    <textarea style="resize: none" name="faq_problema" class="form-control mb-3" cols="30" rows="10"><?php echo $faq->faq_problema; ?></textarea>
                </div>
                <div class="col-sm-12">
                    <label for="">Solução</label>
                    <textarea style="resize: none" name="faq_solucao" class="form-control mb-3" cols="30" rows="10"><?php echo $faq->faq_solucao; ?></textarea>
                </div>
            </div>
        </div>
        <a title="Voltar" href="<?php echo base_url('faq'); ?>" class="btn btn-success mr-2 btn-sm"><i class="fas fa-arrow-left fa-2x"></i></a>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save fa-2x"></i></button>

    </div>
</form>
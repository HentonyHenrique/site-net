<?php $this->load->view('layout/main'); ?>

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
                    <li class="breadcrumb-item active mx-auto" aria-current="page" style="margin-top: 100px;">Novo Registro</li>
                </ol>
            </nav>
            <div class="form-group mt-2 mb-2 ml-2 mr-2 row">
                <div class="col-sm-3">
                    <label for="">Sistema</label>
                    <select name="faq_sistema" class="form-control">
                        <option value="Ello Master">Ello Master</option>
                        <option value="NFC-e">NFC-e</option>
                        <option value="Ello Mobile">Ello Mobile</option>
                        <option value="Ello/NFC-e">Ello/NFc-e</option>
                        <option value="Plataforma do Contador">Plataforma do Contador</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Técnico</label>
                    <input type="text" class="form-control" name="faq_tecnico">
                </div>
                <div class="col-sm-3">
                    <label for="">Rotina Interna</label>
                    <select name="faq_interno" class="form-control">
                        <option value="1">Sim</option>
                        <option value="2">Não</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Tag Rotina</label>
                    <input type="text" class="form-control" name="faq_tag">
                </div>
                <div class="col-sm-12">
                    <label for="">Problema</label>
                    <textarea style="resize: none" name="faq_problema" class="form-control mb-3" cols="30" rows="10"></textarea>
                </div>
                <div class="col-sm-12">
                    <label for="">Solução</label>
                    <textarea style="resize: none" name="faq_solucao" class="form-control mb-3" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-sm mt-3 ml-2"><i class="fa-solid fa-floppy-disk fa-2x"></i></button>
    </div>
</form>
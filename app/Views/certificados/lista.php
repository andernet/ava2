<div class="container mt-5">
    <h1>Pesquisar aluno</h1>

    <form class="" action="<?= base_url('/CertificadoController/select_certificado/'); ?>" method="get">
        <div class="container mt-5">
            <label for="nome_aluno">Nome</label>
            <input type="text" class="form-control" name="nome_aluno" placeholder="Ex: 2S Fulano" />
        </div>
        <div class="container mt-5">
            <div class="col-12 col-sm-4">
                <button type="submit" class="btn btn-primary">Pesquisar/Gerar</button>
            </div>
        </div>
        <!--  <a class="nav-link" href="/CertificadoController/geraPDF" target="_blank">Certificados</a> -->
    </form>
</div>

<?php $this->load->view('restrita/template/navbar'); ?>
<?php $this->load->view('restrita/template/sidebar'); ?>


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <!-- add content here -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-block">
                            <h4><?= isset($titulo) ? $titulo : 'Loja Virtual'; ?></h4>
                            <a href="<?= base_url('restrita/marcas/core'); ?>" class="btn btn-primary float-right">Cadastrar</a>
                        </div>
                        <div class="card-body">

                            <?php if ($message = $this->session->flashdata('sucesso')) : ?>
                                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                                    <div class="alert-icon"><i class="fa fa-check-circle"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">Perfeito!</div>
                                        <button class="close" data-dismiss="alert">
                                            <span>&times;</span>
                                        </button>
                                        <?= $message; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($message = $this->session->flashdata('erro')) : ?>
                                <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                                    <div class="alert-icon"><i class="fa fa-exclamation-circle"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">Atenção</div>
                                        <button class="close" data-dismiss="alert">
                                            <span>&times;</span>
                                        </button>
                                        <?= $message; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="table-responsive">
                                <table class="table table-striped data-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Nome da Marca</th>
                                            <th>Meta Link da Marca</th>
                                            <th>Data de Cadastro</th>
                                            <th>Ativa</th>
                                            <th class="nosort">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($marcas as $marca) : ?>
                                            <tr>
                                                <td><?= $marca->marca_id; ?></td>
                                                <td><?= $marca->marca_nome; ?></td>
                                                <td> <i class="fas fa-external-link-alt text-info"></i> &nbsp; <?= $marca->marca_meta_link; ?></td>
                                                <td><?= formata_data_banco_com_hora($marca->marca_data_criacao); ?></td>
                                                <td><?= ($marca->marca_ativa == 1) ? '<span class="badge badge-success">Ativo</span>' : '<span class="badge badge-danger">Inativo</span>'; ?></td>
                                                <td>
                                                    <a href="<?= base_url('restrita/marcas/core/' . $marca->marca_id); ?>" class="btn btn-icon btn-primary" title="Editar"><i class="far fa-edit"></i></a>
                                                    <a href="<?= base_url('restrita/marcas/delete/' . $marca->marca_id); ?>" class="btn btn-icon btn-danger delete" data-confirme="Tem certeza da Exclusão da Marca?" title="Excluir"><i class="fas fa-times"></i></a>
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
    </section>

    <?php $this->load->view('restrita/template/sidebar_settings'); ?>

</div>
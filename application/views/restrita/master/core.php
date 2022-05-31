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
                        <div class="card-header">
                            <h4><?= isset($titulo) ? $titulo : 'Loja Virtual'; ?></h4>
                        </div>
                        <div class="card-body">

                            <?php

                            $atributos = [
                                'name'   => 'form_core',
                                // 'class'  => 'casoTivesseUmaClasse',
                                // 'id'     => 'casoTivesseUmID',
                            ];

                            if (isset($master)) {
                                $categoria_pai_id = $master->categoria_pai_id;
                            } else {
                                $categoria_pai_id = "";
                            }


                            ?>
                            <?php echo form_open('restrita/master/core/' . $categoria_pai_id, $atributos); ?>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Nome da Categoria Pai</label>
                                    <input type="text" name="categoria_pai_nome" class="form-control" value="<?= isset($master) ? $master->categoria_pai_nome : set_value('categoria_pai_nome'); ?>">
                                    <?php echo form_error('categoria_pai_nome', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputState">Situação</label>
                                    <select id="inputState" class="form-control" name="categoria_pai_ativa">
                                        <?php if (isset($master)) : ?>
                                            <option value="1" <?= ($master->categoria_pai_ativa == 1) ? 'selected' : ''; ?>>Ativo</option>
                                            <option value="0" <?= ($master->categoria_pai_ativa == 0) ? 'selected' : ''; ?>>Inativo</option>
                                        <?php else : ?>
                                            <option value="1" selected>Ativo</option>
                                            <option value="0">Inativo</option>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <?php if (isset($master)) : ?>
                                    <div class="form-group col-md-4">
                                        <label>Meta Link da Categoria Pai</label>
                                        <input type="text" name="categoria_pai_meta_link" class="form-control border-0" value="<?= $master->categoria_pai_meta_link; ?>" readonly="">
                                        <?php echo form_error('categoria_pai_meta_link', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if (isset($master)) : ?>
                                <input type="hidden" name="categoria_pai_id" value="<?= $master->categoria_pai_id; ?>">
                            <?php endif; ?>

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-primary mr-2">Salvar</button>
                            <a href="<?= base_url('restrita/master'); ?>" class="btn btn-dark">Voltar</a>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php $this->load->view('restrita/template/sidebar_settings'); ?>

</div>
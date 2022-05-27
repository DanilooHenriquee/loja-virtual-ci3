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

                            if (isset($marca)) {
                                $marca_id = $marca->marca_id;
                            } else {
                                $marca_id = "";
                            }


                            ?>
                            <?php echo form_open('restrita/marcas/core/' . $marca_id, $atributos); ?>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Nome da Marca</label>
                                    <input type="text" name="marca_nome" class="form-control" value="<?= isset($marca) ? $marca->marca_nome : set_value('marca_nome'); ?>">
                                    <?php echo form_error('marca_nome', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputState">Situação</label>
                                    <select id="inputState" class="form-control" name="marca_ativa">
                                        <?php if (isset($marca)) : ?>
                                            <option value="1" <?= ($marca->marca_ativa == 1) ? 'selected' : ''; ?>>Ativo</option>
                                            <option value="0" <?= ($marca->marca_ativa == 0) ? 'selected' : ''; ?>>Inativo</option>
                                        <?php else : ?>
                                            <option value="1" selected>Ativo</option>
                                            <option value="0">Inativo</option>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <?php if (isset($marca)) : ?>
                                    <div class="form-group col-md-4">
                                        <label>Meta Link da Marca</label>
                                        <input type="text" name="marca_meta_link" class="form-control border-0" value="<?= $marca->marca_meta_link; ?>" readonly="">
                                        <?php echo form_error('marca_meta_link', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if (isset($marca)) : ?>
                                <input type="hidden" name="marca_id" value="<?= $marca->marca_id; ?>">
                            <?php endif; ?>

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-primary mr-2">Salvar</button>
                            <a href="<?= base_url('restrita/marcas'); ?>" class="btn btn-dark">Voltar</a>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php $this->load->view('restrita/template/sidebar_settings'); ?>

</div>
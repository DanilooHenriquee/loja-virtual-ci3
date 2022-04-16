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
                            <form action="#" method="POST" name="form_core">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Nome</label>
                                        <input type="text" name="first_name" class="form-control" value="<?= isset($usuario) ? $usuario->first_name : ''; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Sobrenome</label>
                                        <input type="text" name="last_name" class="form-control" value="<?= isset($usuario) ? $usuario->last_name : ''; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= isset($usuario) ? $usuario->email : ''; ?>">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="<?= isset($usuario) ? $usuario->username : ''; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Senha</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Confirma</label>
                                        <input type="password" name="confirma" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Situação</label>
                                        <select id="inputState" class="form-control" name="active">
                                            <?php if (isset($usuario)) : ?>
                                                <option value="1" <?= ($usuario->active == 1) ? 'selected' : ''; ?>>Ativo</option>
                                                <option value="0" <?= ($usuario->active == 0) ? 'selected' : ''; ?>>Inativo</option>
                                            <?php else : ?>
                                                <option value="1" selected>Ativo</option>
                                                <option value="0">Inativo</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Perfil de acesso</label>
                                        <select class="form-control" name="perfil">
                                            <?php foreach ($grupos as $grupo) : ?>
                                                <?php if ($usuario) : ?>
                                                    <option value="<?= $grupo->id; ?>" <?= ($grupo->id == $perfil->id) ? 'selected' : ''; ?>> <?= $grupo->name; ?> </option>
                                                <?php else : ?>
                                                    <option value="<?= $grupo->id; ?>"> <?= $grupo->name; ?> </option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <?php $this->load->view('restrita/template/sidebar_settings'); ?>

</div>
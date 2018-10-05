<?php
echo '
    <div class="container">
        <div class="row content mx-auto">
            <div class="col-lg-4">
                <div class="welcome">
                    <h4>Você ainda não possui uma conta?</h4>
                    <p>A inovação anda de mãos dadas com a <strong>Polícia RCC</strong>, registre-se hoje e aproveite os recursos do sistema de <strong>Gestão de Companhias</strong>.</p>
                    <a href="" id="trigger_register_button" class="btn btn-outline-secondary">Registrar</a>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="divider mx-auto my-3"></div>
            </div>
            <div class="col-lg-5">
                <div class="login">
                    <h6>Entrar</h6>
                    <div id="error-area" class="alert mt-1 alert-danger alert-dismissible fade show error-input" role="alert">
                        <div id="text-error-area"></div>
                    </div>
                    <form id="login_form">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control form-custom" placeholder="Usuário">
                            <span class="icon-input"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-custom" placeholder="Senha">
                            <span class="icon-input"><i class="fas fa-lock"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="cias">
                                <option selected>Selecione</option>
                                <option value="tre">Treinadores</option>
                                <option value="sup">Supervisores</option>
                                <option value="ins">Instrutores</option>
                                <option value="prof">Professores</option>
                                <option value="rond">Organizadores de Rondas</option>
                                <option value="efe">Escola de Formação de Executivos</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="cias">Companhias</label>
                            </div>
                        </div>
                        <a href="">Esqueceu sua senha?</a>
                        <button type="submit" class="btn btn-block btn-custom btn-secondary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
?>

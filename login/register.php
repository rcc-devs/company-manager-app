<?php
echo '
    <div class="container">
        <div class="row content mx-auto">
            <div class="col-lg-6">
                <div class="register">
                    <h6>Registre-se</h6>
                    <hr class="my-4">
                    <form>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control form-custom" placeholder="Usuário">
                            <span class="icon-input"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-custom" placeholder="E-mail">
                            <span class="icon-input"><i class="fas fa-at"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-custom" placeholder="Senha">
                            <span class="icon-input"><i class="fas fa-lock"></i></span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-custom" placeholder="Confirme sua senha">
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
                    </form>
                    <button class="mt-2 btn btn-block btn-secondary">Entrar</button>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="divider mx-auto my-3"></div>
            </div>
            <div class="col-lg-4">
                <div class="welcome">
                    <h4>Você já possui uma conta?</h4>
                    <p>Que tal entrar e conferir as novidades adicionadas por nossos desenvolvedores? Confira agora!</p>
                    <a href="" id="trigger_login_button" class="btn btn-outline-secondary">Entrar</a>
                </div>
        </div>
    </div>
';
?>

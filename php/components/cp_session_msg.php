<?php if (isset($_SESSION['cadastrado'])):?>
    <div id="usuarioCadastrado">
        <i class="fas fa-check-circle" style="color: #1CA212;"></i> Usuário cadastrado! Verifique o email para confirmar o cadastro.
    </div>
<?php elseif (isset($_SESSION['nao_autenticado'])):?>
    <div id="naoAutenticado">
        <i class="fas fa-times-circle" style="color: #a21e12;"></i> Dados de login inválidos!
    </div>
<?php
endif;
unset($_SESSION['cadastrado']);
unset($_SESSION['nao_autenticado']);
?>
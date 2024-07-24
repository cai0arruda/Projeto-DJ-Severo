<?php
    session_start();
    // Destroi a sessão e redireciona para a página de login
    session_unset();
    session_destroy();
    header("Location: index");
    exit();
?>
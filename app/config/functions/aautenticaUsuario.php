<?php


require_once("../../../../wp-load.php");

//VERIFICA SE O USUARIO ESTA LOGADO
//$login_ok;

session_start();

//VERIFICA SE O USUARIO ESTA LOGADO
$login_ok = 0;

if ( is_user_logged_in() ) {
        //$current_user = wp_get_current_user();    
        $user = wp_get_current_user(); // getting & setting the current user 
        $roles = ( array ) $user->roles; // obtaining the role 
        
        //print_r( $roles );
        foreach($roles as $funcao) {
            //echo $funcao;
            if ($funcao == 'vendedor' or $funcao == 'shop_manager') {
                $login_ok = 1;
                $_SESSION['funcao'] = $funcao;
            }
        } 
        if ($login_ok == 1) {
          //echo '<hr><b>login ok</b><hr>';
          $usuario = $user->user_firstname;
          $_SESSION['vendedor'] =  $usuario;
        }
        else { 
            
            ?>

    <div id="tela-redirect" class="container-fluid main-content">
        <div class="jumbotron text-center">
            <h2>ROTA COMERCIO E DISTRIBUIÇÃO</h2>
            <img src="/../../../wp-content/uploads/2021/03/logo1.png" width="100px">
            <hr>
            <h3 style="color: red; font-size: 20px;">Conteúdo Restrito</h3>
            Desculpe, mas seu usuário não tem permissão para visualizar este conteúdo!
            <br>
            <p>Função de <b>Usuário</b> não permitida.</p>

           <?php
            header( "refresh:5;url=https://rotaapp.local/" );

            session_destroy();
            echo 'Aguarde. Você será redirecionado em 5 segundos.';
            echo 'Para logar com outro usuário <a href="https://rotaapp.local/login/">CLIQUE AQUI!</a>.';                   
            echo '</div></div>';    
            exit;       
        
        }
        // return the role for the current user   
}
else {
            session_destroy();
            header('Location: https://rotaapp.local/');
            exit;
    } 
    ?>
<?php

require_once("../../../../wp-load.php");
session_start();


//VERIFICA SE O USUARIO ESTA LOGADO
$login_ok = 0;

if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();    
        $user = wp_get_current_user(); // getting & setting the current user 
        $roles = ( array ) $user->roles; // obtaining the role 
        //print_r($user);

        //print_r( $roles );
        foreach($roles as $funcao) {
            //echo $funcao;
            if ($funcao == 'shop_manager' or $funcao == 'vendedor') {
                if ($funcao == 'shop_manager') { $_SESSION['funcao'] = 'Gerente'; }
                if ($funcao == 'vendedor') { $_SESSION['funcao'] = 'Vendedor'; }
                $login_ok = 1;
            }
        } 
        if ($login_ok == 1) {
          //echo '<hr><b>login ok</b><hr>';
          $usuario = $user->user_firstname;
          $_SESSION['vendedor'] = $usuario; 
          $_SESSION['id_usuario'] = $user->ID;
          $_SESSION['login_usuario'] = $user->user_login;
        }
        else { 
            
            ?>

    <div id="tela-redirect" class="container-fluid main-content">
        <div class="jumbotron text-center">
            <h2>ROTA COMERCIO E DISTRIBUIÇÃO</h2>
            <img src="https://rotaapp.local/wp-content/uploads/elementor/thumbs/logo150-p499ct4jdv77tawkehwjbx5k1g9puqmz7cltx4bh8s.png"
                alt="ROTA COMERCIO E DISTRIBUIÇÃO">

            &nbsp;

            <hr>

            &nbsp;
            <h3 style="color: red; font-size: 20px;">Conteúdo Restrito</h3>
            Desculpe, mas seu usuário não tem permissão para visualizar este conteúdo!
            <br>
            <p>Função de <b>Usuário</b> não permitida.</p>


            <?php
            session_destroy();
            header( "refresh:5;url=https://rotaapp.local/login/" );
            echo 'Aguarde. Você será redirecionado em 5 segundos.';
            echo 'Para logar com outro usuário <a href="https://rotaapp.local/login/">CLIQUE AQUI!</a>.';                   
            echo '</div></div></div>';    
            exit;       
        
        }
        // return the role for the current user   
}
else {
    
    ?>

            <div id="tela-redirect" class="container-fluid main-content">
                <div class="jumbotron text-center">
                    <h2>ROTA COMERCIO E DISTRIBUIÇÃO</h2>
                    <img src="https://rotaapp.local/wp-content/uploads/elementor/thumbs/logo150-p499ct4jdv77tawkehwjbx5k1g9puqmz7cltx4bh8s.png"
                        alt="ROTA COMERCIO E DISTRIBUIÇÃO">

                    &nbsp;

                    <hr>

                    &nbsp;
                    <h3 style="color: red; font-size: 20px;">Conteúdo Restrito</h3>
                    Desculpe, mas você não tem permissão para visualizar este conteúdo!
                    <br>
                    <p>Faça o login para acessar!</p>

                    <?php
                    session_destroy();
                    header("Location: ../../../../login/");
                    header( "refresh:5;url=https://rotaapp.local/login/" );                    
                    echo 'Aguarde. Você será redirecionado em 5 segundos.';
                    echo 'Para fazer login no sistema <a href="https://rotaapp.local/login/">CLIQUE AQUI!</a>';
                    echo '</div></div></div>';
                    exit;
    } 
?>

<?php

/* 
if ( is_user_logged_in() ) {

    //echo 'Welcome, registered user!';
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
        echo 'Não Autorizado!';
        header( "refresh:2;url=https://rotaapp.local/" );
        echo 'Aguarde. Você será redirecionado em 5 segundos.';     
        exit;   
    }

} else {    
    header( "refresh:0;url=https://rotaapp.local/" );       
    exit;      

}; */

?>
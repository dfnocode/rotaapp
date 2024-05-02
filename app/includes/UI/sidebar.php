<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;" id="menu-lateral-app">
    <!-- Brand Logo -->
    
    <!-- <a href="../../index.html" class="brand-link"> -->
    <a href="../../view/inicio/" class="brand-link">

        <!--  <img src="../../includes/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <img src="../../includes/dist/img/logo/rotalogo.png" alt="logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light" style="padding-left: 20px;">Home</span>
    </a>

  
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<!-- 
                <li class="nav-item has-treeview">
                    <a href="../acomodacoes" class="nav-link">
                       
                        <i class="nav-icon fa fa-bed"></i>
                        <p>
                            Acomodações
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li> -->

                <li class="nav-item has-treeview">
                    <a href="../calendario_geral/" class="nav-link">
                        <!--  nav-icon fas fa-headset -->
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>
                            Calendário
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
             <!--    <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            NEW CRUD
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      
                        <li class="nav-item">
                            <a href="../crud_classes/clientes.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../crud_classes/views/produtos/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Produtos</p>
                            </a>
                        </li>                     
                    </ul>
                </li> -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Cadastros
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      
                        <li class="nav-item">
                            <a href="../crud_classes/clientes.php" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../fornecedores/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Fornecedores</p>
                            </a>
                        </li>
                      
                   <!--      <li class="nav-item">
                            <a href="../pessoas" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="../produtos/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Produtos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../vendedores/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Vendedores</p>
                            </a>
                        </li>
                        <?php 
                        if ($_SESSION['funcao'] == 'Gerente') {                        
                        ?>
                        <li class="nav-item">
                            <a href="../painel_usuarios/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Painel de Usuários</p>
                            </a>
                        </li>
                        <?php } ?>
                     
                    </ul>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-globe-americas"></i>
                        <p>
                            Vendas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- <li class="nav-item">
                            <a href="../caracteristicas_empreendimento" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Car. Empreendimento</p>
                            </a>
                        </li> -->
                      <!--   <li class="nav-item">
                            <a href="../acomodacoes" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Acomodações</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="../lista_vendas/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Todas as Vendas</p>
                            </a>
                        </li>
                <!--         <li class="nav-item">
                            <a href="../fatura-pedidos-de-venda/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Fatura do Pedido</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="../pedidos-de-compra/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Pedidos de Compra</p>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="../comissoes/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Comissões</p>
                            </a>
                        </li>
                      
                    </ul>
                </li>
            <!--     <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        
                        <i class="nav-icon fa fa-th-list"></i>
                        <p>
                            Central de Reservas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                      
                        <li class="nav-item">
                            <a href="../recepcao" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Recepção</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../fazer_reserva" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Fazer Reserva</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../achar_reserva" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Achar Reserva</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../reservas_incompletas" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Reservas incompletas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../avaliacao_hospedes" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Avaliação de Hóspedes</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
     <!--            <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Relatórios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li> -->

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-th-list"></i>
                        <p>
                            Relatórios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                            <a href="../rel-pedidos-venda/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Pedidos de Venda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../empreendimentos/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Novo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../listaempreendimentos/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Visualizar</p>
                            </a>
                        </li>
                    </ul>
                </li>
            <!--     <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Acomodações
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../acomodacoes/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Adicionar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../lista_acomodacoes/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Listar</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Configurações
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../num_fatura/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Número da Fatura</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../ftp/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>FTP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logs/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Logs</p>
                            </a>
                        </li>
                    </ul>
                </li>
              <!--   <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-battle-net"></i>
                        <p>
                            Canais de Integração
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li> -->

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-money-bill-alt"></i>
                        <p>
                            Financeiro
                            <i class=" fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                            <a href="../dashboard_financeiro/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Dashboard Financeiro</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../contas_a_pagar/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Contas a Pagar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../contas_a_receber/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Contas a Receber</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../extrato_de_contas/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Extrato de Contas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../balanco_de_proprietarios/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Balanço de Proprietário</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../formas_pagto/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Formas de Pagamento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../grupo_comissao/" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Grupos de Comissão</p>
                            </a>
                        </li>
                      
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="../../login/auth/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Sair
                            <i class=" fas fa-angle-left right"></i>
                        </p>
                    </a>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
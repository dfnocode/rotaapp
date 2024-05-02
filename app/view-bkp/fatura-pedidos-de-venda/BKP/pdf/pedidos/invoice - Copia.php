<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php do_action( 'wpo_wcpdf_before_document', $this->type, $this->order ); ?>


<?php
//VARIAVEIS DA FATURA

//soma das quantidades
$soma_qtde = 0;

?>

<table class="head container">
    <tr>
        <td class="header">ttt
            <?php
		if( $this->has_header_logo() ) {
			$this->header_logo();
		} else {
			echo $this->get_title();
		}
		?>
        </td>

        <td class="shop-info">
            <?php do_action( 'wpo_wcpdf_before_shop_name', $this->type, $this->order ); ?>
            <div class="shop-name">
                <h3><?php $this->shop_name(); ?></h3>
            </div>
            <?php do_action( 'wpo_wcpdf_after_shop_name', $this->type, $this->order ); ?>
            <?php do_action( 'wpo_wcpdf_before_shop_address', $this->type, $this->order ); ?>
            <div class="shop-address"><?php $this->shop_address(); ?></div>
            <?php do_action( 'wpo_wcpdf_after_shop_address', $this->type, $this->order ); ?>
        </td>
    </tr>
</table>

<!-- CABEÇALHO -->
<h1 class="document-type-label" style="text-align: center;">
    <?php //if( $this->has_header_logo() ) echo $this->get_title(); ?>
    <?php _e( 'Pedido', 'woocommerce-pdf-invoices-packing-slips' ); ?>
</h1>

<?php do_action( 'wpo_wcpdf_after_document_label', $this->type, $this->order ); ?>


<b><?php _e( 'Cliente', 'woocommerce-pdf-invoices-packing-slips' ); ?></b>
<table class="order-data-addresses" style="margin-bottom: 3px;">
    <tr>
        <!-- COLUNA DADOS DO CLIENTE -->
        <td class="" style="border: 1px solid #c3c3c3; padding: 5px;">
            <?php
		/* 	echo $order->get_billing_email();
	echo $order->get_id(); */
		$email_cliente = $order->get_billing_email();
		$user = get_user_by( 'email', $email_cliente );
		//echo '<b>' . $user->first_name . '</b><br>' . $user->last_name;
		$billing_company = get_user_meta( $user->ID, 'billing_company', true );    
		$billing_address_1 = get_user_meta( $user->ID, 'billing_address_1', true );
		//$billing_address_2 = get_user_meta( $user->ID, 'billing_address_2', true );    
		$billing_city = get_user_meta( $user->ID, 'billing_city', true );
		$billing_state = get_user_meta( $user->ID, 'billing_state', true );
		//$billing_country = get_user_meta( $user->ID, 'billing_country', true );
		$billing_postcode = get_user_meta( $user->ID, 'billing_postcode', true );
		$billing_email = get_user_meta( $user->ID, 'billing_email', true );
		$billing_phone = get_user_meta( $user->ID, 'billing_phone', true );

		//MOSTRA DADOS DO FATURAMENTO PELO EMAIL FORNECIDO email_fornecedor
		echo '<b>' . $billing_company . '</b>';
		echo '<br><b>Endereço: </b>' . $billing_address_1;
		echo '<br>' . $billing_city.'-' . $billing_state . '. <b>CEP: </b>' . $billing_postcode;
		echo '<br><b>Tel: </b>' . $billing_phone . ' - ' . $billing_email;
		//CUSTOM FIELDS
		$data = get_user_meta ( $user->ID );    
		echo '<br><b>CNPJ: </b>' . $data['cnpj'][0];
		echo '<br><b>IE: </b>' . $data['ie'][0]; 


	?>
        </td>



        <!--  PARTE APAGADA
		
		 	<td class="address shipping-address">
			<?php //if ( !empty($this->settings['display_shipping_address']) && ( $this->ships_to_different_address() || $this->settings['display_shipping_address'] == 'always' ) ) { ?>
			<h3><?php //_e( 'Ship To:', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
			<?php //do_action( 'wpo_wcpdf_before_shipping_address', $this->type, $this->order ); ?>
			<?php //$this->shipping_address(); ?>
			<?php //do_action( 'wpo_wcpdf_after_shipping_address', $this->type, $this->order ); ?>
			<?php //} ?>
		</td> -->


        <td class="order-data">
            <table style="padding-left: 5px;">
                <?php do_action( 'wpo_wcpdf_before_order_data', $this->type, $this->order ); ?>
                <?php if ( isset($this->settings['display_number']) ) { ?>
                <tr class="invoice-number">
                    <th><?php //_e( 'Invoice Number:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
                    <td><?php //$this->invoice_number(); ?></td>
                </tr>
                <?php } ?>
                <?php if ( isset($this->settings['display_date']) ) { ?>
                <tr class="invoice-date">
                    <th><?php //_e( 'Invoice Date:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
                    <td><?php //$this->invoice_date(); ?></td>
                </tr>
                <?php } ?>
                <tr class="order-number">
                    <th style="background-color:#ddd; padding: 3px;">
                        <?php _e( 'Nº do Pedido:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
                    <td style="background-color:#f2f2f2; padding: 3px;"><?php $this->order_number(); ?></td>
                </tr>
                <tr class="order-date">
                    <th style="background-color:#ddd; padding: 3px;">
                        <?php _e( 'Data:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
                    <td style="background-color:#f2f2f2; padding: 3px;"><?php $this->order_date(); ?></td>
                </tr>
                <tr class="payment-method">
                    <th style="background-color:#ddd; padding: 3px;">
                        <?php _e( 'Payment Method:', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
                    <td style="background-color:#f2f2f2; padding: 3px;"><?php 
					
			
					$parcelado = implode(', ', (array) $this->order->get_meta('parcelado') ); 
                    $parcelas = implode(', ', (array) $this->order->get_meta('parcelas') );
                   
					
					if ($parcelado == 'Sim') {
						
						echo "<b>Parcelado</b><br>";
                        $nparcelas = explode('/', $parcelas);

                        for($i=0; $i < count($nparcelas); $i++) {
                            if ($nparcelas[$i] == 0) {
                                echo "<cite>1ª na Entrega</cite><br>";
                            }
                            
                            else {
                                echo '<cite>' . $nparcelas[$i] . ' dias</cite><br>';
                            }
                            
                            if(count($nparcelas)>3) {
                                echo 'Total ' . count($nparcelas) . ' parcelas';
                                break; 
                            }
                        }
					}
					else {
						echo '<b>À vista</b>';
					}
                    
					?></td>
                </tr>
                <?php do_action( 'wpo_wcpdf_after_order_data', $this->type, $this->order ); ?>
            </table>
        </td>
    </tr>

</table>
<!-- PEGA O NOME COMPLETO DO VENDEDOR E LANÇA   -->
<b><?php _e( 'Vendedor', 'woocommerce-pdf-invoices-packing-slips' ); ?></b>
<table style="width: 100%; margin-bottom: 5px;">
    <tr>
        <td style="border: 1px solid #c2c2c2; padding: 6px; background-color:#f2f2f2;">
            <?php 
	$current_user = wp_get_current_user();
	printf( '%s', esc_html( $current_user->first_name ) );

?>
        </td>
    </tr>
</table>

<?php do_action( 'wpo_wcpdf_before_order_details', $this->type, $this->order ); ?>

<table class="order-details" style="margin-top: 8px;">
    <thead>
        <tr>
            <th class="product"><?php _e('Product', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
            <th class="unidade" style="width:10%"><?php echo 'Unid'; ?></th>
            <th class="quantity"><?php _e('Quantity', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
            <th class="price"><?php _e('Price', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php $items = $this->get_order_items(); if( sizeof( $items ) > 0 ) : foreach( $items as $item_id => $item ) : ?>
        <tr
            class="<?php echo apply_filters( 'wpo_wcpdf_item_row_class', $item_id, $this->type, $this->order, $item_id ); ?>">
            <td class="product">
                <?php $description_label = __( 'Description', 'woocommerce-pdf-invoices-packing-slips' ); // registering alternate label translation ?>
                <span class="item-name"><?php echo $item['name']; ?></span>
                <?php do_action( 'wpo_wcpdf_before_item_meta', $this->type, $item, $this->order  ); ?>
                <span class="item-meta"><?php echo $item['meta']; ?></span>
                <!-- <dl class="meta"> -->
                    <?php //$description_label = __( 'SKU', 'woocommerce-pdf-invoices-packing-slips' ); // registering alternate label translation ?>
                    <?php //if( !empty( $item['sku'] ) ) : ?><!-- <dt class="sku"> -->
                        <?php //_e( 'SKU:', 'woocommerce-pdf-invoices-packing-slips' ); ?><!-- </dt> -->
                    <!-- <dd class="sku"> --><?php //echo $item['sku']; ?><!-- </dd> --><?php //endif; ?>
                    <?php //if( !empty( $item['weight'] ) ) : ?><!-- <dt class="weight"> -->
                        <?php //_e( 'Weight:', 'woocommerce-pdf-invoices-packing-slips' ); ?><!-- </dt> -->
                  <!--   <dd class="weight"> -->
                        <?php //echo $item['weight']; ?><?php //echo get_option('woocommerce_weight_unit'); ?></dd>
                    <?php //endif; ?>
              <!--   </dl> -->
                <?php do_action( 'wpo_wcpdf_after_item_meta', $this->type, $item, $this->order  ); ?>
            </td>

            <td class="Unidade">
            <?php

                // ADICIONA A COLUNA DO ATRIBUTO UNIDADE               
                $pid =  $item['product_id'];
                global $product; 
                $product = new WC_Product($pid);
                echo $product->get_attribute('Unidade');         
            
            ?>
            </td>
            <td class="quantity"><?php 
			
			echo $item['quantity'];
			$soma_qtde += $item['quantity'];
			
			?></td>
            <td class="price"><?php echo $item['order_price']; ?></td>
        </tr>
        <?php endforeach; endif; ?>
    </tbody>
    <tfoot>
        <tr class="no-borders">
            <td class="no-borders">
                <div class="document-notes">
                    <?php //do_action( 'wpo_wcpdf_before_document_notes', $this->type, $this->order ); ?>
                    <?php //if ( $this->get_document_notes() ) : ?>
                    <h3><?php //_e( 'Notes', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
                    <?php //$this->document_notes(); ?>
                    <?php //endif; ?>
                    <?php //do_action( 'wpo_wcpdf_after_document_notes', $this->type, $this->order ); ?>
                </div>
                <div class="customer-notes">
                    <?php //do_action( 'wpo_wcpdf_before_customer_notes', $this->type, $this->order ); ?>
                    <?php //if ( $this->get_shipping_notes() ) : ?>
                    <h3><?php //_e( 'Observações', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
                    <?php //$this->shipping_notes(); ?>
                    <?php //endif; ?>
                    <?php do_action( 'wpo_wcpdf_after_customer_notes', $this->type, $this->order ); ?>
                </div>
            </td><td></td>
            <td class="no-borders" colspan="2">
                <table class="totals">
                    <tfoot>

                        <tr>
                            <th class="description">
                                Total Quantidades
                            </th>

                            <td class="price">
                                <?php echo $soma_qtde; ?>
                            </td>

                        </tr>

                        <?php foreach( $this->get_woocommerce_totals() as $key => $total ) : ?>
                        <tr class="<?php echo $key; ?>">
                            <th class="description"><?php echo $total['label']; ?></th>
                            <td class="price"><span class="totals-price"><?php echo $total['value']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tfoot>
                </table>
            </td>
        </tr>
    </tfoot>
    
</table>

<table style="width: 100%; margin-top: 1px;">
    
    <tr>
        <td>
        <?php 
        $data_da_entrega = implode(', ', (array) $this->order->get_meta('data_da_entrega') );

        $parcelado = implode(', ', (array) $this->order->get_meta('parcelado') ); 
        $parcelas = implode(', ', (array) $this->order->get_meta('parcelas') );

        $t = strtotime($data_da_entrega);
        $d_parcela = date('d-m-Y',$t);
        $d_parcela2 = date('d/m/Y',$t);

        echo '<b>Data da Entrega: </b>' . $d_parcela2 . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Parcelado: </b>' . $parcelado;


        if ($parcelado == 'Sim') {
            //echo $parcelas;
                        
            $arr = explode("/",$parcelas);

            //FAZ O CALCULO DAS PARCELAS
            $order = wc_get_order( $order_id );
            $subtotal = $order->get_total();
            $total_pedido = $subtotal;

            $valor_parcelas = $total_pedido / count($arr);

            echo '<table style="padding: 0px; border: 1px solid #ddd; width: 100%; background-color:#f2f2f2;"><tr><th style="border-bottom: 1px solid silver;">Dias</th><th style="border-bottom: 1px solid silver;">Data</th><th style="border-bottom: 1px solid silver;">Valor</th></tr>';

            for ($i=0; $i < count($arr); $i++) {

                echo '<tr>';
                if ($arr[$i] == "0"){
                    $dias = "Na Entrega";
                }
                else {
                    $dias = $arr[$i];
                }
                echo '<td>' . $dias . '</td>';
                
              
            
                $calc_dias = '+'.$arr[$i].' days';

                $data_da_parcela = date('d/m/Y', strtotime($calc_dias, strtotime($d_parcela)));
                echo '<td>' . $data_da_parcela . '</td>';

                echo '<td>' . converteDinheiro($valor_parcelas) . '</td>';
                echo '</tr>';
            }
            echo '</table>';

        }
        else {
            echo "";
        }

        ?>
        </td>
    </tr>
    
    <tr>
        <td style="border: 1px solid #ddd; padding: 12px;">
            <div class="document-notes">
                <?php do_action( 'wpo_wcpdf_before_document_notes', $this->type, $this->order ); ?>
                <?php if ( $this->get_document_notes() ) : ?>
                <h3><?php _e( 'Notas Adicionais', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
                <?php $this->document_notes(); ?>
                <?php endif; ?>
                <?php do_action( 'wpo_wcpdf_after_document_notes', $this->type, $this->order ); ?>
            </div>
            <div class="customer-notes">
                <?php do_action( 'wpo_wcpdf_before_customer_notes', $this->type, $this->order ); ?>
                <?php if ( $this->get_shipping_notes() ) : ?>
                <h3><?php _e( 'Observações', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
                <?php $this->shipping_notes(); ?>
                <?php endif; ?>
                <?php do_action( 'wpo_wcpdf_after_customer_notes', $this->type, $this->order ); ?>
            </div>
        </td>
    </tr>
</table>
<br>
<table style="border: 1px dotted #c2c2c2; background-color:#F2FAF8; width:100%;">
    <tr>        <td>

		<!-- SESSAO OPCIONAL PARA INSERIR FOTOS NO PEDIDO -->
            <div class="document-notes">
			<p>
                <?php
            $notas_da_fatura = implode(',', (array) $this->order->get_meta('dados_adicionais') );

            echo $notas_da_fatura;
            ?>
			</p>
            </div>

        </td>
    </tr>
</table>


<div class="bottom-spacer"></div>

<?php do_action( 'wpo_wcpdf_after_order_details', $this->type, $this->order ); ?>

<?php if ( $this->get_footer() ): ?>
<div id="footer">
    <?php $this->footer(); ?>
</div><!-- #letter-footer -->
<?php endif; ?>
<?php do_action( 'wpo_wcpdf_after_document', $this->type, $this->order ); ?>
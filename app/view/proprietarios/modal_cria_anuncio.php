<!-- modal -->
<div id="cria_anuncio" class="modal fade in" tabindex="-1" role="dialog" style="padding-left: 6px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header payment-flow payment-header text-center">
                <h4 class="active-payment-step">
                    <i class="fa fa-2x fa-home"></i>
                    <i class="fa fa-2x fa-building"></i>
                    <br>
                    Criando uma acomodação
                </h4>
            </div>
            <div class="panel panel-lg panel-default panel-space-sm" style="margin: 0;">
                <div class="apt_item">
                    <div class="media" style="margin: 0px;">
                        <div class="btn media-right media-middle text-center media-sm">
                            <i class="fa fa-building text-muted fa-3x"></i>
                        </div>
                        <div class="media-body panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>
                                        <a href="#">Criar um anúncio com várias unidades</a>
                                    </h4>
                                </div>
                            </div>
                            <p class="text-muted">Hotéis, Pousadas, Prédios com diversos apartamentos ou condomínios com diversas casas são anúncios com várias unidades. Você poderá adicionar cada acomodação e gerenciar o calendário delas.</p>
                        </div>
                        <a id="btn-add-new-building" href="#" class="btn media-right media-middle text-center media-sm goNextBuilding">
                            <i class="fa fa-chevron-right text-muted fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-lg panel-default panel-space-sm" style="margin: 0;">
                <div class="apt_item">
                    <div class="media" style="margin: 0px;">
                        <div class="btn media-right media-middle text-center media-sm">
                            <i class="fa fa-home text-muted fa-3x"></i>
                        </div>
                        <div class="media-body panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>
                                        <a href="#">Crie um anúncio independente</a>
                                    </h4>
                                </div>
                            </div>
                            <p class="text-muted">Casas, Apartamentos, Bangalôs... Anúncios que possuem infraestrutura e endereços de maneira independente. Eles não fazem parte de um complexo maior de acomodações, como por exemplo um Edifício, ou seja, eles serão comercializados de maneira individualizada no site e nas OTA's.</p>
                        </div>
                        <a id="btn-add-new-apartment" href="#" class="btn media-right media-middle text-center media-sm goNextListing">
                            <i class="fa fa-chevron-right text-muted fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div data-dismiss="modal" class="btn btn-default pull-left">
                    Fechar
                </div>
            </div>
        </div>
    </div>
    <script>
        requirejs(["jquery", "safe", "clitpl"], function($, safe, tf) {
            var $modal = $("#CWOUIAMGU");
            $modal.on("hidden.bs.modal", function() {
                $modal.remove();
            });
            $modal.on("click", ".goNextListing", function() {
                tf.render("apartment/apartment_new_modal", {
                    type: 'listingTypes'
                }, safe.sure_result(appError, function(text) {
                    $modal.modal("hide");
                    $(text).modal("show");
                }));
                return false;
            });
            $modal.on("click", ".goNextBuilding", function() {
                tf.render("building/building_new_modal", {}, safe.sure_result(appError, function(text) {
                    $modal.modal("hide");
                    $(text).modal("show");
                }));
                return false;
            });
        }, appError);
    </script>
</div>
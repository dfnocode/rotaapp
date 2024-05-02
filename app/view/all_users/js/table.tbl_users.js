/*
 * Editor client script for DB table tbl_users
 * Created by http://editor.datatables.net/generator
 */

(function($) {

    $(document).ready(function() {
        var editor = new $.fn.dataTable.Editor({
            ajax: 'php/table.tbl_users.php',
            table: '#tbl_users',
            fields: [{
                    "label": "registro:",
                    "name": "registro",
                    "type": "datetime",
                    "format": "DD\/MM\/YYYY"
                },
                {
                    "label": "tipopessoa:",
                    "name": "tipopessoa",
                    "type": "select",
                    "options": [
                        "Cliente",
                        "Fornecedor",
                        "Vendedor"
                    ]
                },
                {
                    "label": "nome:",
                    "name": "nome"
                },
                {
                    "label": "fantasia:",
                    "name": "fantasia"
                },
                {
                    "label": "Email:",
                    "name": "email"
                },
                {
                    "label": "telefone:",
                    "name": "telefone"
                },
                {
                    "label": "situacao:",
                    "name": "situacao",
                    "type": "select",
                    "options": [
                        "Ativo",
                        "Inativo",
                        "Sem Movimento"
                    ]
                },
                {
                    "label": "endereco:",
                    "name": "endereco"
                },
                {
                    "label": "numero:",
                    "name": "numero"
                },
                {
                    "label": "complemento:",
                    "name": "complemento"
                },
                {
                    "label": "bairro:",
                    "name": "bairro"
                },
                {
                    "label": "cep:",
                    "name": "cep"
                },
                {
                    "label": "cidade:",
                    "name": "cidade"
                },
                {
                    "label": "estado:",
                    "name": "estado",
                    "type": "select",
                    "options": [
                        "AC",
                        "AL",
                        "AP",
                        "AM",
                        "BA",
                        "CE",
                        "DF",
                        "ES",
                        "GO",
                        "MA",
                        "MT",
                        "MS",
                        "MG",
                        "PA",
                        "PB",
                        "PR",
                        "PE",
                        "PI",
                        "RJ",
                        "RN",
                        "RS",
                        "RO",
                        "RR",
                        "SC",
                        "SP",
                        "SE",
                        "TO"
                    ]
                },
                {
                    "label": "contatos:",
                    "name": "contatos"
                },
                {
                    "label": "celular:",
                    "name": "celular"
                },
                {
                    "label": "fax:",
                    "name": "fax"
                },
                {
                    "label": "website:",
                    "name": "website"
                },
                {
                    "label": "cnpjcpf:",
                    "name": "cnpjcpf"
                },
                {
                    "label": "idrg:",
                    "name": "idrg"
                },
                {
                    "label": "obs:",
                    "name": "obs"
                },
                {
                    "label": "emailnfe:",
                    "name": "emailnfe"
                },
                {
                    "label": "vendedor:",
                    "name": "vendedor"
                }
            ],
            i18n: {
                create: {
                    button: "Novo",
                    title: "Cadastrar Usuário",
                    submit: "Add"
                },
                edit: {
                    button: "Editar",
                    title: "Editar Usuário",
                    submit: "Atualizar"
                },
                remove: {
                    button: "Deletar",
                    title: "Deletar Usuário",
                    submit: "Delete",
                    confirm: {
                        _: "Deseja remover %d Registro?",
                        1: "Tem certeza de que deseja excluir este registro?"
                    }
                }
            }
        });


        // Activate an inline edit on click of a table cell
        // Activate an inline edit on click of a table cell
        $('#tbl_users').on('click', 'tbody td:not(:first-child)', function(e) {
            if ($(this).hasClass('control') || $(this).hasClass('select-checkbox')) {
                return;
            }
            editor.inline(this);
        });


        // Inline editing in responsive cell
        $('#tbl_users').on('click', 'tbody ul.dtr-details li', function(e) {
            // Edit the value, but this selector allows clicking on label as well
            editor.inline($('span.dtr-data', this));
        });


        var table = $('#tbl_users').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            ajax: 'php/table.tbl_users.php',
            columns: [{ // Responsive control column
                    data: null,
                    defaultContent: '',
                    className: 'control',
                    orderable: false
                },
                { // Checkbox select column
                    data: null,
                    defaultContent: '',
                    className: 'select-checkbox',
                    orderable: false
                },
                {
                    "data": "registro"
                },
                {
                    "data": "tipopessoa"
                },
                {
                    "data": "nome"
                },
                {
                    "data": "fantasia"
                },
                {
                    "data": "email"
                },
                {
                    "data": "telefone"
                },
                {
                    "data": "situacao"
                },
                {
                    "data": "endereco"
                },
                {
                    "data": "numero"
                },
                {
                    "data": "complemento"
                },
                {
                    "data": "bairro"
                },
                {
                    "data": "cep"
                },
                {
                    "data": "cidade"
                },
                {
                    "data": "estado"
                },
                {
                    "data": "contatos"
                },
                {
                    "data": "celular"
                },
                {
                    "data": "fax"
                },
                {
                    "data": "website"
                },
                {
                    "data": "cnpjcpf"
                },
                {
                    "data": "idrg"
                },
                {
                    "data": "obs"
                },
                {
                    "data": "emailnfe"
                },
                {
                    "data": "vendedor"
                }
            ],
            order: [0, 'asc'],
            select: true,
            lengthChange: true,
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            buttons: [
                { extend: 'create', editor: editor },
                { extend: 'edit', editor: editor },
                { extend: 'remove', editor: editor }
            ]

        });
    });

}(jQuery));
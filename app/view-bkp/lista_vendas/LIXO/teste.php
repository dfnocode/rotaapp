<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
    function TestaCPF(strCPF) {
        var Soma;
        var Resto;
        Soma = 0;

        var res = strCPF.replace(".", "");
        res = res.replace(".", "");
        res = res.replace("-", "");
        strCPF = res;
        //return strCPF;

        if (strCPF == "00000000000") return false;

        for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10))) return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11))) return false;
        return true;
    }
    </script>


    <script>
    function validarCNPJ(cnpj) {

        cnpj = cnpj.replace(/[^\d]+/g, '');

        if (cnpj == '') return false;

        if (cnpj.length != 14)
            return false;

        // Elimina CNPJs invalidos conhecidos
        if (cnpj == "00000000000000" ||
            cnpj == "11111111111111" ||
            cnpj == "22222222222222" ||
            cnpj == "33333333333333" ||
            cnpj == "44444444444444" ||
            cnpj == "55555555555555" ||
            cnpj == "66666666666666" ||
            cnpj == "77777777777777" ||
            cnpj == "88888888888888" ||
            cnpj == "99999999999999")
            return false;

        // Valida DVs
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            return false;

        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            return false;

        return true;

    }
    </script>

    <script>
    //var strCPF = "510.477.131-87";
    //var resultado = TestaCPF(strCPF);


    function mandaVer(mensagem) {
        if (mensagem == false) {
            mensagem = 'CPF Inválido';
        } else {
            mensagem = 'CPF Válido';
        }
        Swal.fire({
            title: "Good job!",
            text: mensagem,
            icon: "success"
        });
    }

    
    function mandaVer2(mensagem) {
        if (mensagem == false) {
            mensagem = 'CNPJ Inválido';
        } else {
            mensagem = 'CNPJ Válido';
        }
        Swal.fire({
            title: "Good job!",
            text: mensagem,
            icon: "success"
        });
    }



    //var strCPF = "510.477.131-87";
    //var resultado = TestaCPF(strCPF);

    /* 
    Swal.fire({
                            title: "",
                            text: "Item atualizado com sucesso!",
                            icon: "success",
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "OK"
                        }); */
    </script>


</head>

<body>
   <!--  <button id="clickme" onclick="mandaVer(TestaCPF('510.377.131-87'));">Clica Safado!</button> -->

   <!-- 19.182.612/0001-70   19182612000170 -->
   <button id="clickme" onclick="mandaVer2(validarCNPJ('19.182.612/0d01-70'));">Clica Safado!</button>
   



</body>

</html>
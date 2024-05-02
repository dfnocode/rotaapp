var imagem = document.getElementById("imagem");
imagem.addEventListener("click", function(event) {
    document.getElementById("nome_imagem").value = imagem.title;
});
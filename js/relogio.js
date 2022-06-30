window.onload  = function(){
    $(".loading").fadeOut(500);
};

$(document).ready(function(){

    //Função que verifica se há novas mensagens dos contatos e notifica-me 
    setInterval(function(){
        $(".relogio").load('funcoes/hora_exata.php');
    }, 1000);

});



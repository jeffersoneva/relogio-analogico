<?php

    //Definindo a configuração de caracteres
	header('Content-type: text/html; charset=utf-8');

	//Define Local e Timezone
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');

    function retornaHora(){
        $hora_exata = date("h");
        $porcentagem = ($hora_exata / 12) * 100;
        $angulo = (($porcentagem / 100) * 360) + retornaMinuto() / 60;

        return $angulo;
    }
    function retornaMinuto(){
        $hora_exata = date("i");
        $porcentagem = ($hora_exata / 60) * 100;
        $angulo = (($porcentagem / 100) * 360) + retornaSegundo() / 60;

        return $angulo;
    }
    function retornaSegundo(){
        $hora_exata = date("s");
        $porcentagem = ($hora_exata / 60) * 100;

        $angulo = ($porcentagem / 100) * 360;

        return $angulo;
    }

    echo '<img src="img/relogio.png" alt="pontos-relogio"/>';
    echo '<div class="ponteiro-horas" style="transform: rotate('.retornaHora().'deg);"></div>';
    echo '<div class="ponteiro-minutos" style="transform: rotate('.retornaMinuto().'deg);"></div>';
    echo '<div class="ponteiro-segundos" style="transform: rotate('.retornaSegundo().'deg);"></div>';
    echo '<div class="pontinho"></div>';

?>
<?php
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # 
# Descricao  :     Conceito de FILA em PHP                  #
#                  FIFO (first-in first-out)                #

#                      Como Funciona?                       # 
#           Onde o primeiro elemento a ser inserido         # 
#               será o primeiro a ser retirado              #
                                                           
# Autor      : Sergio Ferreira - sergio.soft@email.com      #
# Data       : 27/09/2021                                   #
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #


####################### FILA Vazia ##########################
$fila_bradesco = array();   #array vazio
echo "<div style='background-color:#606060; color:#fff;padding: 5px;'> Fila Vazia </div>";
var_dump($fila_bradesco);   #exibir array


################### Adição de Elementos na FILA #############
echo "<div style='background-color:#606060; color:#fff;padding: 5px;'> Pessoas chegaram... </div>";

array_push($fila_bradesco, "Maria");    #adiciona elemento ao final do array
array_push($fila_bradesco, "José");     #adiciona elemento ao final do array
array_push($fila_bradesco, "João");     #adiciona elemento ao final do array

var_dump($fila_bradesco);   #exibir array


################### Remoção de Elementos na FILA #############
foreach($fila_bradesco as $pessoa) {

    echo "<div style='background-color:#606060; color:#fff;padding: 5px;'> {$pessoa} já passou por atendimento, restou na fila... </div>";

    array_shift($fila_bradesco);#remover pessoa do início da fila

    var_dump($fila_bradesco);   #exibir array

    if(empty($fila_bradesco))
    echo "<span><i>Fila vazia</i></span>";

}

?>
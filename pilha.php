<?php
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # 
# Descricao  :     Conceito de PILHA em PHP                 #
#                  LIFO (last-in first-out)                 #

#                      Como Funciona?                       # 
#            Onde o último elemento a ser inserido          # 
#              será o primeiro a ser retirado               #
                                                           
# Autor      : Sergio Ferreira - sergio.soft@email.com      #
# Data       : 27/09/2021                                   #
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #


####################### PILHA Vazia ##########################
$pilha_pratos_sujos = array();   #array vazio
echo "<div style='background-color:#606060; color:#fff;padding: 5px;'> A Pilha de Pratos está Vazia </div>";
var_dump($pilha_pratos_sujos);   #exibir array


################### Adição de Elementos na PILHA #############
echo "<div style='background-color:#606060; color:#fff;padding: 5px;'> Pratos Sujos chegaram... </div>";

array_push($pilha_pratos_sujos, "Prato 1");    #adiciona elemento ao final do array
array_push($pilha_pratos_sujos, "Prato 2");    #adiciona elemento ao final do array
array_push($pilha_pratos_sujos, "Prato 3");    #adiciona elemento ao final do array

var_dump($pilha_pratos_sujos);   #exibir array

################### Remoção de Elementos na PILHA #############

$max = sizeof($pilha_pratos_sujos)-1;#tamanho do array -1 para contagem de 0 a MAX no laço abaixo.

/*
    É necessário percorrer a pilha de modo inverso, onde pegamos o tamanho máximo da pilha, 
    que é 3, retirando um elemento do tamanho para podermos percorrer o array no índice
    de 0 a 2 (3 itens), decrementamos o laço até retirarmos todos os elementos.
*/

for($i=$max; $i>=0; $i--) {
    echo "<div style='background-color:#606060; color:#fff;padding: 5px;'> {$pilha_pratos_sujos[$i]} já foi lavado, restou na pilha... </div>";

    array_pop($pilha_pratos_sujos); #remover prato do final da pilha

    var_dump($pilha_pratos_sujos);  #exibir array

    if(empty($pilha_pratos_sujos))
        echo "<span><i>Pilha vazia</i></span>";

}

?>
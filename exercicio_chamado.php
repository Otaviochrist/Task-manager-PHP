<?php

class chamados 
{
    public int $id;
    public string $equipamento;
    public string $defeito;
}
$chamado = new chamados();


$chamado->id = 123;
$chamado-> equipamento = "Notebook dell";
$chamado-> defeito = "teclado não funcionando";

echo "Chamado nº: ", $chamado->id ," este ", $chamado->equipamento, " está com o ", $chamado->defeito;



<?php

function Moyenne(array $tab):float
{
    return array_sum($tab)/count($tab);
};
function doublee(array $tab)
{
    $tabDobNotes=array_filter($tab, fn($valeur) => $valeur >= 10);//tfalter eli hachtekk bihh

    return $tabDobNotes;
};
function affichageTab(array $tabl)
{
    print_r($tabl);
   
};
function affichageMsg(string $msg)
{
    print_r($msg);
}
function trier(array $tab)
{
    rsort($tab);
    return $tab;
}

function tabPlus1(array $tab)
{
    $doub =array_map(fn($valuer) => $valuer+1, $tab);
    return $doub;
}








?>
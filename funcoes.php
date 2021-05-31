<?php
function carrega_pagina(){
  (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
  if(file_exists('page_'.$pagina.'.php')):
    require_once('page_'.$pagina.'.php');
  else:
    require_once('page_home.php');
  endif;
}

function gera_titulos(){
  (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
  switch($pagina):
    case 'home':
      $titulo = 'CST';
      break;

    case 'sobre':
      $titulo = 'Sobre - CST';
      break;
    
    case 'produtos':
      $titulo = 'Produtos - CST';
      break;

    default;
      $titulo = 'CST';
      break;
    
    endswitch;
    return $titulo;
}


?>
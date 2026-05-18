<?php

$infoEmpresa = [
 'nome' => 'Senac Americana',
 'funcionario' => 'Paulo Santos',
 'anoAtual' => 2026,
];

$infoCursos = [
 'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'totalCursos' => 26,
];

echo '<pre>'; // <pre> Preformatação de Texto

//var_dump(array_keys($infoEmpresa)); 
/*(array_keys) ele retorna como chave as informações.*/

//var_dump(array_values($infoEmpresa));  
/*(array_values)ele mostra os valores.*/

//var_dump(count($infoEmpresa));  
/*Ele mostra a quantidades de elementos de uma Array.*/

//$infoEmpresa = array_merge($infoEmpresa, $infoCursos);
/*(array_merge) serve para juntar os valores.*/

//print_r($infoEmpresa);
echo '</pre>'
?>
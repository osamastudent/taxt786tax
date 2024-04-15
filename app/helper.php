<?php

use PhpParser\Node\Expr\FuncCall;

 function myHelper($date,$formate){
$dateformate=date($formate,strtotime($date));
return $dateformate;
}

?>
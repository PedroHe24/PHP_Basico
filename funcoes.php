<?php
  function sacar($conta, $valorASacar)
  {
    if ($valorASacar> $conta['saldo'] )
    {
    exibeMensagem( "Você não pode sacar este valor");
  }  else $conta ['saldo'] -=$valorASacar;
  return $conta;
  }
  function exibeMensagem($mensagem) 
  {
    echo $mensagem . '<br>';
  }

  function depositar($conta, $valorADepositar){
  if ($valorADepositar > 0) {
    $conta ['saldo'] += $valorADepositar;
  } else {
    exibeMensagem ("Depositos precisam ser positivos");
  }
    
    return $conta;
  }

  function titularComLetrasMaiusculas(array $conta)

{
  $conta['Titular']  = strtoupper($conta['Titular']);
    
}

  function exibeConta(array $conta)
{  
    ['Titular' => $Titular,'saldo'=> $Saldo] = $conta;
    echo "<li>Titular: $Titular. Saldo: $Saldo}</li";
}

      
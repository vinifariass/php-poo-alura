<?php

function funcao1(){
  try {
    funcao2();
  } catch(Throwable $problema) {
    echo $problema-> getMessage() . PHP_EOL;
    echo $problema-> getLine() . PHP_EOL;
    echo $problema-> getTraceAsString() . PHP_EOL;
    throw new RuntimeException('Exceção foi tratada, mas, pega aí',1,
     $problema
    );

  }


  echo "Saindo da funcao1" . PHP_EOL;
}

function funcao2(){
  echo 'Entrei na função 2' . PHP_EOL;

 // Exceção em tempo de execução
 intdiv(1,0);
  throw new RuntimeException('Essa é a mensagem de exceção
  ');
  
  echo "Saindo da função 2" . PHP_EOL;
}

echo "Iniciando o  programa principal" . PHP_EOL;
funcao1();
echo "Fechando a funcao principal" . PHP_EOL;
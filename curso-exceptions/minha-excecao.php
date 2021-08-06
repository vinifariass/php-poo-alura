<?php

class MinhaExcecao extends Exception{
  public function exibeVinicius(){
    echo "Vinicius";
  }
}
try{

} catch(MinhaExcecao $e){
  $e-
}
throw new MinhaExcecao();

$lista_frutas = ['banana', 'abacaxi', 'melão', 'morango'];
print "Teste 0: ";
var_dump(count($lista_frutas));
print "\nTeste 1: ";
var_dump(in_array('banana', $lista_frutas));
print "\nTeste 2: ";
var_dump(in_array('alface', $lista_frutas));
print "\nTeste 3: ";
var_dump(array_search('morango', $lista_frutas));
print "\nTeste 4: ";
var_dump(sort($lista_frutas));
print "\nTeste 5: ";
var_dump(shuffle($lista_frutas));

CONSOLE
Teste 0: int(4)     

Teste 1: bool(true) 

Teste 2: bool(false)

Teste 3: int(3)     

Teste 4: bool(true) 

Teste 5: bool(true) 

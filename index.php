<?php
declare(strict_types=1);

require_once "vendor/autoload.php";

use \Application\{ TypeDeclaration,
    ReturnTypeDeclaration,
    NullCoalescingOperator,
    SpaceshipOperator,
    ConstantArrays,
    AnonymousClasses,
    ClousureCall,
    Unserialize };

/*
 * Há três cenários onde um TypeError podem ser lançadas.
 * A primeira é que o tipo de argumento que está sendo passado para uma função
 * não corresponde ao seu correspondente tipo de parâmetro declarados.
 * O segundo é o lugar onde um valor a ser retornado de uma função não coincide
 * com o tipo de retorno da função declarada.
 * O terceiro é o lugar onde um número inválido de argumentos é passado para uma
 * função interna do PHP (strict mode only).
 */

try {
    $td  = new TypeDeclaration();
    $rtd = new ReturnTypeDeclaration();
    $nco = new NullCoalescingOperator();
    $so  = new SpaceshipOperator();
    $co  = new ConstantArrays();
    $ac  = new AnonymousClasses();
    $un  = new Unserialize();

    $ac->setLogger(new class implements \Application\Logger {
        public function log(string $msg) {
            return $msg;
        }
    });

    $getX = function() { return $this->x; };

    echo "TypeDeclaration => {$td->test('Test',1,2,3,4)}";
    echo "<br>";
    echo "ReturnTypeDeclaration => {$rtd->test('Anderson Vinicius')}";
    echo "<br>";
    echo "CoalescingOperator => {$nco->test('Test')}";
    echo "<br>";
    echo "SpaceshipOperator => {$so->test()}";
    echo "<br>";
    echo "ConstantArrays => {$co->test()}";
    echo "<br>";
    echo "AnonymousClasses => {$ac->getLogger()->log('Logger')}";
    echo "<br>";
    echo "ClousureCall => {$getX->call(new ClousureCall)}";
    
} catch (TypeError $e) {
    echo $e->getMessage();
}

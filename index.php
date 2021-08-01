<?php



include './src/text/clientView.php';
include './src/number/InterfaceNumber.php';
include './src/text/InterfaceText.php';
include './src/text/HelloAmerica.php';
include './src/text/HelloWord.php';
include './src/number/NumberMaxAge.php';



//*test Number

$number =  new NumberMaxAge( 18 );
print $number->getNumber();

//*Test 
$view = new UsertHtml(new HelloAmerica);
print $view->onTxt()
    ->getText();
print '------------';
print $view->onTxt()
    ->setText('Hola America , como estan?')
    ->getText();

$viewWord = new UsertHtml(new HelloWord('Hola mundo'));
print $viewWord->onTxt()
    ->getText();
print '------------';
print $viewWord->onTxt()
    ->setText('Hola Mundo, como estan?')
    ->getText();

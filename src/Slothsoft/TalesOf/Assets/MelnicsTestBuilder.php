<?php
declare(strict_types = 1);
namespace Slothsoft\TalesOf\Assets;

use Slothsoft\Farah\FarahUrl\FarahUrlArguments;
use Slothsoft\Farah\Module\Asset\AssetInterface;
use Slothsoft\Farah\Module\Asset\ExecutableBuilderStrategy\ExecutableBuilderStrategyInterface;
use Slothsoft\Farah\Module\Executable\ExecutableStrategies;
use Slothsoft\Farah\Module\Executable\ResultBuilderStrategy\NullResultBuilder;

class MelnicsTestBuilder implements ExecutableBuilderStrategyInterface {

    public function buildExecutableStrategies(AssetInterface $context, FarahUrlArguments $args): ExecutableStrategies {
/*
$abc = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z'
];

$kanaList = [];
foreach ($abc as $c) {
    $kanaList[] = $c;
    // $kanaList[] = strtoupper($c);
}
$kanaList = array_merge($kanaList, range(0, 9));
$kanaList = array_merge($kanaList, [
    ',',
    '.',
    '!',
    '?'
]);
$randLimit = 10;

$dataRoot = $dataDoc->createDocumentFragment();

foreach ($kanaList as $c) {
    $node = $dataDoc->createElement('character');
    $node->setAttribute('name', $c);
    $dataRoot->appendChild($node);
}

if (isset($_REQUEST['testOutput'], $_REQUEST['testInput'])) {
    $testKana = $_REQUEST['testOutput'];
    $testLatin = $_REQUEST['testInput'];
    $testKana = explode(' ', $testKana);
    $testLatin = explode(' ', $testLatin);

    $resNode = $dataDoc->createElement('testResult');
    $dataRoot->appendChild($resNode);

    for ($i = 0; $i < count($testKana); $i ++) {
        $kana = $testKana[$i];
        $latin = (isset($testLatin[$i]) and strlen($testLatin[$i])) ? $testLatin[$i] : '-';
        $node = $dataDoc->createElement('character');
        $node->setAttribute('name', $kana);
        $node->setAttribute('input', $latin);
        $node->setAttribute('latin', $kana);
        $resNode->appendChild($node);
    }
}

if ($kanaList) {
    $max = count($kanaList) - 1;
    $randList = [];
    $lastKana = null;
    while (count($randList) < $randLimit) {
        $kana = array_rand($kanaList);
        if ($kana !== $lastKana) {
            $randList[] = $kanaList[$kana];
            $lastKana = $kana;
        }
    }

    $kanaNode = $dataDoc->createElement('testOutput');
    $kanaNode->setAttribute('text', implode(' ', $randList));
    $dataRoot->appendChild($kanaNode);
}

return $dataRoot;
//*/
        return new ExecutableStrategies(new NullResultBuilder());
    }
}


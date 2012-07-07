<?php

include_once("prolog.preprocessor.php");
include_once("prolog.scanner.php");
include_once("prolog.parser.php");
include_once("prolog.machine.php");

$prolog_source_code = file_get_contents($argv[1]);

error_reporting(E_WARNING);
ini_set('display_errors', false);

$preprocessor = new PrologPreprocessor($prolog_source_code);
$scanner = new PrologScanner($preprocessor->program());

$parser = new PrologParser($scanner);

$wimcode = $parser->parse(); // compile inclusive!
echo $wimcode;
if (!$parser->hasErrors()) {

    $machine = new PrologMachine($wimcode);
    $results = $machine->execute();
    echo $results;
}
else {
    print_r($parser->errors);
}
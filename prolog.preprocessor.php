<?php

/* * ************************* Under Construction! ************************** */

/* INTERFACE
 *
 * class PrologPreprocessor {
 *   var $source = "";
 *   function PrologPreprocessor(&$source); // PUBLIC
 *   function program(); // PUBLIC
 * }
 */

/* EXAMPLE
 *
 * <?php
 *
 *   include_once("prolog.preprocessor.php");
 *
 *   $prolog_source_code = "isequal(X, X). ?- isequal(a, b).";
 *
 *   $preprocessor = &new PrologPreprocessor($prolog_source_code);
 *
 *   echo $preprocessor->program();
 *
 * ?>
 *
 * OUTPUT
 *
 *   isequal(X, X). ?- isequal(a, b).
 *
 */

class PrologPreprocessor
{

    var $source = "";

    function PrologPreprocessor(&$source)
    {
        $this->source = &$source;
    }

// end of PrologPreprocessor

    function program()
    {
        return $this->source;
    }

// end of program
}

// end of class PrologPreprocessor
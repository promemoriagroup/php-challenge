<?php
/** Mariano 25/10 Promemoria */

/** @var $dir */
$dir = getcwd();
$result = cerca_dupes($dir);
$collection_dupes = [];

// Printo il risultato :)
showResult($result);

/** Scansioni la directory ricorsivamente per le subs */
function scandir_recursive($dir, &$result = array())
{
    $dir = rtrim($dir, DIRECTORY_SEPARATOR);

    foreach (scandir($dir) as $node) {
        if ($node !== '.' and $node !== '..') {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $node)) {
                scandir_recursive($dir . DIRECTORY_SEPARATOR . $node, $result);
            } else {
                $result[$node][] = $dir . DIRECTORY_SEPARATOR . $node;
            }
        }
    }
    return $result;
}

/** Cerco i duplicati **/
function cerca_dupes($directory)
{
    $names = scandir_recursive($directory);
    foreach ($names as $name) {
        if (count($name) > 1) {
            $filename = (basename($name[1]));
            $collection_dupes[] = $filename;
        }
    }

    return $collection_dupes;
}

/**
 * @param $collector
 * @return void
 */
function showResult($collector){
    /** Ciclo gli elementi univoci */
    echo ("==== Lista Doppioni ====\r\n");
    foreach ($collector as $elem) {
        print_r($elem."\r\n");
    }
    echo("==== Lista Doppioni ====\r\n");
}

?>
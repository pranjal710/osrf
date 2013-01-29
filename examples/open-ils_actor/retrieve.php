<?php
include ("./../../lib/OsrfSession.php");

/* print_names()
 *
 * A simple function to print only the name field in a tree of objects
 * where child nodes are stored in an array in the "children" field.
 */
function print_names($node, $depth = 0) {
    echo str_repeat("    ", $depth) . $node->name . "\n";
    foreach ($node->children as $child) {
        print_names($child, $depth + 1);
    }
}

$ses = new osrfSession("hostname"); // e.g.: localhost  remembers server & loads fieldmapper.
if ($ses->checkhost() == 200) {

    try {
        $ses->loadFieldmapper(false); //FALSE to parse fieldmapper anew and create classes no matter what. TRUE to rely on cached fieldmapper classes if found.
    } catch (Exception $e_load_idl) {
        echo 'Error: ', $e_load_idl->getMessage() , "\n";
    }
    $result = $ses->request("open-ils.actor", "open-ils.actor.org_tree.retrieve", 1)->parse();
    if ($result) {
        if (Is_Open_Ils_event($result)) {
            echo "Could not place hold because of error: " . $result["desc"];
        }
        else {
            echo "<pre>";

            /* This would print a tree of aou objects. */
            //print_r($result);

            /* This will print only the name field of each aou object */
            print_names($result);

            echo "</pre>";
        }
    }
    else echo "Errors were encountered.";
}
else echo "Could not locate fieldmapper. Invalid hostname!";
?>


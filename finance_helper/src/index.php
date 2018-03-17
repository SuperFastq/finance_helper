<?php

echo "hello\n";

try {
    include 'includes.php';

    $type = new Type();

    $typeManager = new TypeManager();
    $typeManager->save($type);
    echo $typeManager->get($type->id);
}
catch (Exception $e){
    echo $e->getFile()."\n";
    echo $e->getMessage()."\n";
    echo $e->getTraceAsString()."\n";
}


<?php

try {
    $controle = -1;

    for (--$controle; true; $controle--) {
        if (($controle / --$controle)) throw new Exception();
    }
} catch (Exception $exception) {
    print_r('A' . PHP_EOL);
} catch (BadMethodCallException $exception) {
    print_r('B' . PHP_EOL);
} finally {
    print_r('C' . PHP_EOL);
}

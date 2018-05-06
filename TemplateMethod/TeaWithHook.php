<?php

declare(strict_types=1);

namespace Code\TemplateMethod;

class TeaWithHook extends CaffeineBeverageWithHook
{
    protected function brew(): void
    {
        echo 'Steeping the tea' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo '(Hook with condiment) Adding Lemon' . PHP_EOL;
    }

    // Based on user input we overwrite the hook.
    // If we want to overwrite behavior of the hook method we return true.
    protected function customerWantsCondiments(): bool
    {
        $answer = '';
        if (isset($_SERVER['argv'][1])) {
            $answer = $_SERVER['argv'][1];
        }

        if ('y' == strtolower(substr($answer, 0))) {
            return true;
        }

        return false;
    }
}

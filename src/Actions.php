<?php

namespace LaravelSchema\Actions;

class Actions
{
    public function holamundo(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}
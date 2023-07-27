<?php

trait msg
{
    public function __destruct()
    {
        echo "I am fine";
    }
    public function __construct()
    {
        echo "me";
    }
    public function me()
    {
        return "yeah";
    }
}

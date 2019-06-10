<?php


namespace App\Http\Controllers\Pay;


interface PayableInterface
{
    public function pay();
}
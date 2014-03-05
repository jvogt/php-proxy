<?php
include('proxy.php');

$proxy = new Proxy();
$proxy->forward(base64_decode(ltrim($_SERVER['REQUEST_URI'],'/'));
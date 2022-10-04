<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITULO; ?></title>
    <link rel="stylesheet" href="./includes/css/estilo.css">
    <link rel="stylesheet" href="./includes/css/<?php echo htmlspecialchars( $style, ENT_COMPAT, 'UTF-8', FALSE ); ?>.css">
</head>
<body>
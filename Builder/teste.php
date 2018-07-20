<?php
    require_once 'NotaFiscalBuilder.php';
    require_once 'Itens.php';
    
    $builder = new NotaFiscalBuilder();
    
    $builder->comCnpj("3433545454-6");
    $builder->paraEmpresa("Empresa do Luiz");
    $builder->addIten(new Itens("Parafuso", 50.0));
    $builder->addIten(new Itens("Saco de cimento", 25.0));
    $novaNotaFiscal = $builder->build();
    
    echo("<pre>");
    var_dump($novaNotaFiscal);
    
    
    
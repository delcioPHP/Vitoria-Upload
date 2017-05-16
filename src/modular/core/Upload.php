<?php
/**
 * Development by: Delcio Cabanga.
 * Date: 4/2/2017
 * Time: 11:44 PM
 */

//Vitoria Upload
//Versao:1.0
//Micro biblioteca escrita em PHP
//carrega m]ultiplos arquivos
//para tal, basta adicionar varios imputs

namespace src\modular\core;
use src\codeface\UploadInterface;


class Upload
{
    public function __construct(UploadInterface $uploadInterface)
    {
        $this->uploadInterface = $uploadInterface;
    }
    
    public function render()
    {
        return $this->uploadInterface->load();
    }
}
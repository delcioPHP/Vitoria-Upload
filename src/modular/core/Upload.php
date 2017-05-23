<?php
/**
 * Development by: Délcio Cabanga.
 * Date: 4/2/2017
 * Time: 11:44 PM
 */

/**
####  Vitória Upload   ####
Versao:1.0
 * Descrição:
Micro bibliteca escrita em PHP para 
upload de um ou mais (múltiplos) arquivos.
Para tal, basta adicionar vários campos em forma de array
 */


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
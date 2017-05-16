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

namespace src\codeface;


interface UploadInterface
{
    public function validate();
    public function checkTypeFile();
    public function moveUpload();
    public function countFile();
    public function load();
    public function finalyName();
    
}
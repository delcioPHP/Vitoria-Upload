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

namespace src\modular\core\method;


use src\codeface\UploadInterface;

class MethodUpload implements UploadInterface
{
    private $randId;
    private $date;
    private $extension;
    private $fileName;
    private $newName;
    private $fileTmp;
    private $loadfiles;
    private $dirFiles;
    private $numFile;
    private $count;
    private $checkFile;
    private $save;
    private $fileType = [];
    

//    public function __construct($loadFile, $dirFile)
//    {
//        $this->loadfiles = $loadFile;
//        $this->dirFiles = $dirFile;
//    }


    /**
     * @param mixed $loadfiles
     */
    public function setLoadfiles($loadfiles)
    {
        $this->loadfiles = $loadfiles;
    }

    /**
     * @param mixed $dirFiles
     */
    public function setDirFiles($dirFiles = "public/upload-file/")
    {
        $this->dirFiles = $dirFiles;
    }


    /**
     * @param array $fileType
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    public function validate()
    {
        //Future;
    }

    public function countFile()
    {
        return $this->numFile = count($this->loadfiles['name']);
    }


    public function checkTypeFile()
    {

        $this->checkFile = in_array($this->loadfiles['type'][$this->count], $this->fileType);
        return $this->checkFile;

    }

    public function moveUpload()
    {
        $this->fileTmp = $this->loadfiles['tmp_name'][$this->count];
        $this->fileName = $this->loadfiles['name'][$this->count];
        
        if(is_uploaded_file($this->fileTmp))
        {
            $this->save = move_uploaded_file($this->fileTmp, $this->dirFiles . $this->finalyName());
            if($this->save)
            {
                 echo "The file {$this->fileName} was loaded</br>";
            }
        }
    }

    public function finalyName()
    {
        //Set timezone;
        date_default_timezone_set('Africa/Luanda');
        //Set extension;
        $this->extension = @end(explode(".", $this->loadfiles['name'][$this->count]));
        //Set random value;
        $this->randId = uniqid(rand());
        //Set date;
        $this->date = date('D_M_Y_h_i_s');
        //Creat new file name
        return $this->newName = "File_vitoria_{$this->randId}_{$this->date}.{$this->extension}";

    }

    public function load()
    {
        for ($this->count = 0; $this->count < $this->countFile(); $this->count++)
         {
             if($this->checkTypeFile())
             {
                 $this->moveUpload();
             }
             else
             {
                 echo "file not suported </br>";
             }
         }
    }

}

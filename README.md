#**Basic Usage**#
#**Uso Básico**#
#/**#
# * Development by: Delcio Cabanga.#
# * Date: 4/2/2017#
# * Time: 11:44 PM#
# */#


#/**#
####  Vitória Upload   ####
#Versao:1.0#
# * Descrição:#
#Micro bibliteca escrita em PHP para #
#upload de um ou mais (múltiplos) arquivos.#
#Para tal, basta adicionar vários campos em forma de array#
# */#



include_once "load.php";


//load input [HTML]
//Carrega o valor da variavel HTML
$loadfile = $_FILES['loadfile'];

//Default Dir: public/upload-file/
//Pasta padrao: public/upload-file/
//$dirFile = "public/upload-file/";
$dirFile = "public/upload-file/";

//set namespace;
//Define os namespaces
use src\modular\core\Upload,
    src\modular\core\method\MethodUpload;

//call Class
//Instanciar as classes
$methodUp = new MethodUpload();
$render = new  Upload($methodUp);

//Define MIMI Type
//Default MIMI: ['image/jpeg', 'image/gif', 'image/png', 'application/pdf', 'audio/mp3']
//Define as extensões
//Por padrão, o mimi é:['image/jpeg', 'image/gif', 'image/png', 'application/pdf', 'audio/mp3']

$mimi = ['image/jpeg', 'image/gif', 'image/png', 'application/pdf', 'audio/mp3'];

//set file MIMI
//Carrega as extensoes
$methodUp->setFileType($mimi );

//set variable or value of input [HTML]
//carrega a(s) variavel (is) vinda(s) do Formulario HTML
$methodUp->setLoadfiles($loadfile);

//set Dir - Optional
//Define a pasta para os arquivos - Opcional
$methodUp->setDirFiles($dirFile);

//load files
//Carrega os arquivos
$render->render();



**made in Luanda/Angola**

  


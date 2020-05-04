<?php
    abstract class StringsMatyBejvl { protected static function substrMatyBejvl($points)
  {
    define($points, 'sedmsetdevadesatsedm'); 
  }
    protected static function substr_replaceMatyBejvl($nahrada){
     define($nahrada, 'nejakanahrada'); 
  }
    protected static function strtrMatyBejvl($oprava){
    define($oprava, 'oprava,doufam,zetoopravi'); 
 }
    protected static function strtoupperMatyBejvl($velkepismo){
    define($velkepismo, 'velkeeee pismoooo'); 
  }
    protected static function strtolowerMatyBejvl($malepismo){
    define($malepismo, 'taktadyzasemalepismo'); 
  }
    protected static function strrposMatyBejvl($urcizdaje){
    define($urcizdaje, 'hdfkhgdůkjfjhgdhgkjdf'); 
  }
    protected static function strriposMatyBejvl($presnenajdi){
    define($presnenajdi, 'ABCDEBEEE'); 
  }
    protected static function strposMatyBejvl($najdi){
    define($points, 'sedmsetdevadesatsedm'); 
  }
    protected static function strlenMatyBejvl ($pocet){
    define($pocet, 'POCET'); 
  }
    protected static function strchrMatyBejvl (); //stejny jako Strstr 
    
    protected static function str_replaceMatyBejvl ($smazepismena){
    define($smazepismena, array('a','e','t','m','u')); 
  }
    protected static function md5MatyBejvl($kodujeheslo){
    define($kodujeheslo, 'xcv'); 
  }
    protected static function implodeMatyBejvl($vlozicarku){
    define($vlozicarku, array('kresni','prijmeni','cislo')); 
  }
    protected static function explodeMatyBejvl($rozrhnestring){
    define($rozrhnestring, 'Caukymnauky trham strink'); 
  }
    protected static function addcslashesMatyBejvl($vypiseoddo){
    define($vypiseoddo, '1,2,3,4,5,6,7,8,9,10'); 
  }
    protected static function addslashesMatyBejvl($vlozilomeno){
    define($vlozilomeno, 'MB´Bjvl'); 
  }
    protected static function trimMatyBejvl($vynechcast){
    define($vynechcast, '\m\mno nevim\m\m'); 
  }
    protected static function ucfirstMatyBejvl($prvnivelke){
    define($prvnivelke, 'Matyas a Pavlinka'); 
  }
    protected static function ucwordsMatyBejvl($kazdeprvnivelke){
    define($kazdeprvnivelke, 'Matyas a TY'); 
  }
}
class SringMatyBejvl extends StringsMatyBejvl{
  //prepise string jinacim stringem
    public static function substrMatyBejvl() {
        parent::substrMatyBejvl();
        return substr($points, null);
}
  //nahradi dany vyraz od urcenego bitu
    public function substr_replaceMatyBejvl($nahrada) {
        return substr_replace($nahrada, 'zzzzzz', 0);
     }

                     //dá zmenu urciteho slova na jine
    public function strtrMatyBejvl($oprava) {
       return  strtr($oprava, 'AHOJ', 'ZDAR');
  }
    //zmeni ve vete vsechno na velka pismena
    public function strtoupperMatyBejvl($velkepismo) {
       return  strtoupper($velkepismo);
  }
    //zmeni ve vete vsechno na mala pismena
    public function strtolowerMatyBejvl($malepismo) {
       return  strtolower($malepismo);
  }
    //urci zda je 5 od 4bitu dal
    public function strrposMatyBejvl($urcizdaje) {
       return  strrpos($urcizdaje, '5',4);
  }
    public function strriposMatyBejvl($presnenajdi) { //vyhledava zda to v tehle kombinaci tam je
       return  strripos($presnenajdi, '2B', 0);
    }
    public function strlenMatyBejvl($pocet) {  //rekne jak dlouhy je retezec
        return strlen($pocet);
  }
    public function str_replaceMatyBejvl($smazepismena) {    //smaze pismena
       return  str_replace($smazepismena, '', 'tak ja jsem matyas');
  }
    public function md5MatyBejvl($kodujeheslo) {      //koduje heslo
       return  md5($kodujeheslo, 'psiduhfgouirhgfouiergtheruiogheruiogheriougherguhergheruiozghrzeghoerg');
  }
    public function implodeMatyBejvl($vlozicarku) {    // vlozi element z array element do stringu
       return  implode(',', $vlozicarku);
  }
    public function explodeMatyBejvl($roztrhnestring) { //rozlozi string na jednotlive stringy vice stringu
       return  explode('', $roztrhnestring);
 }
    //vypise retezec od do
    public function addcslashesMatyBejvl($vypiseoddo) {
        return addcslashes($vypiseoddo, '\1->\10');
  }
    public function addslashesMatyBejvl($vlozilomenno) {           // vloží lomeno
       return  addslashes($vlozilomenno);
  }
    //vyjme cast retezce a zbytek promitne
    public function trimMatyBejvl($vynechcast) {
       return  trim($vynechcast, '\m.');
  }
    //  první pismeno v celém retezci bude velke
    public function ucfirstMatyBejvl($prvnivelke) {
        return ucfirst($prvnivelke);
    }
    //kazde prvni pismeno v kazdem slove velke
    public function ucwordsMatyBejvl($kazdeprvnivelke) {
       return ucwords($kazdeprvnivelke);
  }
   }
echo 'StringsMatyBejvl';
var_dump(StringMatyBejvl::substrMatyBejvl(points));
?>
<?php
use Tracy\Debugger;

Debugger::enable();





?>

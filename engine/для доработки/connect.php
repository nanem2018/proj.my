<?php 
class Connect{
    const HOST = 'localhost';
    const  NAME = 'geekbrains';
    const  USER ='root';
     const PASS='';
    const  DRIVER='mysql';
    public function connecting () {
        return new PDO(self::DRIVER . ':host='. self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
    }
    function clear($val){
        $value=htmlspecialchars(strip_tags($val));
        return $value;
    }

}
?>
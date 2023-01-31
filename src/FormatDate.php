<?php declare(strict_types=1);

namespace Luispachs;

use  Luispachs\Interface\iFormatDate;




class FormatDate implements iFormatDate
{

    private $_dateTime="";
    private $_formatedDateTime="";
    private $regex="/\d{4}[-\/]\d{2}[-\/]\d{2}/i";

    private function validateDate(){
      if(preg_match($this->regex,$this->_dateTime)!=1){
        throw new Exception("Error, format date is bad. you need format should this format YYYY-MM-DD");
      } 
      return true;
    }

    private function quitExtra(){
        
        return preg_match($this->regex,$this->_dateTime,$this->_formatedDateTime);

    }

    public function  getFormatedDate():string{
        $this->validateDate();
        $this->quitExtra();
        return $this->_formatedDateTime[0];
        
    }

  

    public function setDate(string $date):void{
        $this->_dateTime=$date;
    }
}




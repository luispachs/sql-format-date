<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Luispachs\FormatDate;


class FormatDate_test extends TestCase{

    /**
     * 
     * @dataProvider dateProvider
     */

    public function testAssertDate(string $Date,string $expected):void{
        $date= new FormatDate();

        $date->setDate($Date);


        $this->assertEquals($expected,$date->getFormatedDate());
        
    }

    

    public function dateProvider():array{

        return [
            ["adasd2021-11-15asdadsda","2021-11-15"],
            ["q weeff 2023-01-15ss","2023-01-15"],
            ["2023-01-31","2023-01-31"],
            ["qqq 2019-05-31 asa","2019-05-31"], ["adasd2022-12-12asdadsda","2022-12-12"],
            ["q weeff 2023-02-12ss","2023-02-12"],
            ["2023-01-31","2023-01-31"],
            ["qqq 2019-11-11 asa","2019-11-11"], ["adasd2001-09-11asdadsda","2001-09-11"],
            ["q weeff 2023-01-16ss","2023-01-16"],
            ["2022-12-31","2022-12-31"],
            ["qqq cleardads2019-01-31sas asa","2019-01-31"],
            ["dsasd2021as-11-asd23","2021-11-23"],
            ["dsasd2011as-11-asd23","2021-11-23"],
            ["dsasd2023as-11-asd23","2021-11-23"]
            
        ];
    }
}
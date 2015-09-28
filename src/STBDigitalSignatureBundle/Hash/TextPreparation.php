<?php
/**
 * Created by PhpStorm.
 * User: itm
 * Date: 22.09.15
 * Time: 14:31
 */

namespace STBDigitalSignatureBundle\Hash;


/**
 * Class TextPreparation
 * @package STBDigitalSignatureBundle\Hash
 * Класс предназначен для подготовки текста к хешированию
 * по требованию пункта 5.3 "Дополнение и разбиение на блоки" СТБ 1176.1-99
 */
class TextPreparation {

    private $text;

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array
     */
    public function getMRow()
    {
        $hexString = unpack('H*', $this->text);
        $result = str_split($hexString[1], 2);
        foreach ($result as &$number) {
            $number = hexdec($number);
        }
        return $result;
    }

    /**
     * Метод дополняет последовательность нулями и разбиение на блоки в соответствии с требованиями
     * используются операции повышенной точности
     */
    public function getMNumbers()
    {
        $mRow = $this->getMRow();
        // Здесь буквы переменных соответствуют параметрам СТБ
        $l = count($mRow);
        $lRemainder = $l%32;

        if ($lRemainder == 0) {
            $k = 0;
        } else {
            $k = 32 - $lRemainder;
        }

        $n = ($l + $k)/32;

        $mRow = array_pad($mRow, $l + $k, "0");

        $M = array();
        for ($i=1; $i<=$n; $i++){
            $M[$i] = 0;
            for ($j=0; $j<32; $j++) {
                $M[$i] = bcadd($M[$i], bcmul($mRow[($i-1)*32+$j], bcpow(2, $j*8)));
            }
        }

        $M[$n+1] = $l;

        return $M;
    }

    /**
     * Метод возвращает код символа в десятичной системе счисления
     * @param $u
     * @return array
     */
    private function uniord($u) {
        $k = mb_convert_encoding($u, 'UCS-2LE', 'UTF-8');
        $k1 = ord(substr($k, 0, 1));
        $k2 = ord(substr($k, 1, 1));
        return $k2 * 256 + $k1;
    }

} 
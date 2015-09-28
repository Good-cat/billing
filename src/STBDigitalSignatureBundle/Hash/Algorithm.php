<?php
/**
 * Created by PhpStorm.
 * User: itm
 * Date: 23.09.15
 * Time: 18:14
 */

namespace STBDigitalSignatureBundle\Hash;


class Algorithm {
    private $M;
    private $H;
    private $L;
    private $V = array(
        'D1845AC6',
        'AC3D25C6',
        'F467247D',
        '079294AB',
        'F19A24CD',
        'B47D25C6',
        'D4522491',
        '0D817489',
        '87D45A6F',
        '3D5721C6',
        '573714C8',
        '078274DB',
        '2A8A1A76',
        'DC6715C6',
        'B4F1257D',
        '0B1294AC'
    );
    private $C = array(
        '2BDA732E',
        '3920FE85',
        'BC1641F9',
        '75FE243B'
    );
    private $T = array(
        '1' => array(
            'AA2AA82E',
            '8A0A088E',
            'A222A026',
            '82020086',
            'AE2CAC28',
            '8C0E0C88',
            'A624A420',
            '84061E9A',
            'AB2BA92F',
            '8B0B098F',
            'A323A127',
            'B32133A7',
            '8D0F9F1B',
            'AF2D3FBB',
            '07870583',
            '17859D19',
            'BA3AB83E',
            '98381ABE',
            'B231B025',
            '806312A5',
            'AD3DBF29',
            '89B94B6F',
            'BD3CEF6A',
            'CFBC1532',
            'EB3BE96D',
            '9B396BCD',
            'B130E336',
            'E11003B6',
            '9E1C9C18',
            'EACA4A6E',
            '4EDF4C99',
            '5E7FB481',
            'E868FA6C',
            'C8485ACE',
            'E262E034',
            '92424096',
            'EE7EEC7A',
            'DD0D1FCB',
            'E666E460',
            '971D4F93',
            'FB697BED',
            'C949DB4D',
            'F36137F1',
            '0173B771',
            '5B5C0459',
            'CC5F5D16',
            '47945291',
            '35FEF813',
            'F272787C',
            '907058FC',
            '147946B5',
            'DAD9C267',
            'E765E511',
            'C0F0437D',
            'F764C344',
            'C6FFF9C4',
            'F5775654',
            '9545FD75',
            'C1D8D376',
            'C77441DE',
            'D25351D0',
            'C5D7D5F6',
            '50D6D157',
            'D455DCF4',
        ),
        '3' => array(
            '4DCDCF4F',
            '69E9EB6B',
            '65E5E767',
            '41C1C343',
            '49C9CB4B',
            '6DEDEF6F',
            '61E1E363',
            '45C5C747',
            '5DDDCC4C',
            '79F9E868',
            'F17140C0',
            'D55564E4',
            '51D1C242',
            '75F5EC6C',
            'FD7D4ECE',
            'D95960EA',
            '5CDCDE5E',
            '6AF8FA78',
            '66E6E062',
            '48C88C0C',
            '7AA8AA28',
            '8E0E4ACA',
            '53D3C444',
            'FF7F6EEE',
            '1C9CDF5F',
            '2AB8FB7B',
            'E2700181',
            '9E0D7CAD',
            '72F48357',
            '46D0A92D',
            '8D5B0FDB',
            'F3747E91',
            '54C6D456',
            '20F0F222',
            '2CFC1EFE',
            '58D838BA',
            '50D28052',
            '30A0A232',
            '3A825ADA',
            '08889092',
            '04D6D705',
            '73A1ACAE',
            'BC0AAB1D',
            '8F2F842E',
            '188A8909',
            '29B9F63D',
            'A406F721',
            '853F8677',
            '07879515',
            '23BBA32B',
            'A5AF1A98',
            '009A25BD',
            '31B19303',
            '0B19A7B5',
            '3C3E14BF',
            'B33927B7',
            '1F117624',
            '26948B35',
            '991B9B97',
            '9D34963B',
            '3337B0BE',
            '02101716',
            '12A69FB4',
            'B61336B2',
        ),
        '5' => array(
            '5557455D',
            '5557455D',
            '4715547C',
            '5644465C',
            '1416177D',
            '51534159',
            '43115078',
            '7072607A',
            'F8FAF9D1',
            '5F4D4F05',
            '1D1F5EF4',
            '585A4852',
            '4A185BF1',
            '494B1913',
            '1B091AF0',
            '7E6C6E74',
            'F6E4F50D',
            '7577657F',
            '6735764C',
            '64626668',
            '3430710F',
            '7332616A',
            '63313840',
            '420710D8',
            'DADCD5FB',
            'FDFFEDF7',
            'EFBDDE36',
            'E8FCEAE6',
            'B8FEDD33',
            'E9BAEBA8',
            'D9DBF212',
            '4E0B2408',
            'B4E0C83C',
            'D7C5C726',
            '9597D03A',
            'D4D6C41C',
            'C694D379',
            'C1C3917B',
            '9381963E',
            'E2B0F369',
            '282A2C84',
            'DFCDCFE1',
            'CCD2B99D',
            'AA9FB28D',
            'BBE58521',
            'C9CB9901',
            'CA86BF9B',
            'CE9C87A9',
            '6D03ABC0',
            'E7B5B76F',
            'A5A7A00A',
            'B6A29E2E',
            'A4A6E38C',
            'B18EB389',
            'A1A3EC04',
            'C2EE8B98',
            '9A880020',
            '372527AD',
            '8A6B223D',
            '02061E90',
            'BC0C0E23',
            'BE928FAC',
            '80AF3F83',
            '39AE823B',
            '2D292F2B',
        ),
        '7' => array(
            'B2B03212',
            'B2B03212',
            '921A13BF',
            'BAB83A18',
            '9A101BB7',
            'B6B43616',
            '961E17BB',
            'BEBC1C3E',
            '9E143F11',
            'B3B13303',
            '931902AE',
            'BDAF3715',
            '9F0706AA',
            'B5A73505',
            '970E04B9',
            'ABA90131',
            '9B0A3057',
            'A2A02200',
            '900853AD',
            'A8FA380C',
            '98520BA3',
            'A6A43455',
            '943C1F82',
            'ACFE5623',
            '9C263D24',
            'A1217391',
            '839D502A',
            'FC2E7680',
            '8ED2473B',
            '954599F6',
            'A58A2C74',
            '885A288F',
            'F8FF092F',
            'F2F02042',
            'D05851FD',
            'EAE87A4A',
            'DA405BF7',
            'F4F5668B',
            '861D890F',
            '7E2DD8FB',
            '5E87F984',
            'F3F17143',
            '8159D3EE',
            'EFE7E58D',
            'EC7CDFDB',
            'DDE62754',
            '850D4625',
            '3972776E',
            '78E2416C',
            'E06A6444',
            'C248D9EB',
            '685FCB2B',
            'CAC95D29',
            'E44FC870',
            '7BEDE975',
            '4D7F7DC0',
            '8C67DED7',
            'E36365D5',
            'D1C76FE1',
            'C379625C',
            '4ED6606D',
            'CFDC6B4B',
            '69CDD4CE',
            'C649614C',
            'C5CCC1C4',
        )
    );

    private $errors = array();

    public function addError($text)
    {
        $this->errors[] = $text;
        var_dump($text);die;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setM($M)
    {
        $this->M = $M;
        return $this;
    }

    public function getM($i=null)
    {
        if ($i === null) {
            return $this->M;
        } else {
            return $this->M[$i];
        }
    }

    private function setH($H)
    {
        $this->H = $H;
        return $this;
    }

    private function getH()
    {
        return $this->H;
    }

    private function setL($L)
    {
        $this->L = $L;
        return $this;
    }

    private function getV($i)
    {
        return base_convert($this->V[$i], 16, 10);
    }

    private function getC($i)
    {
        return base_convert($this->C[$i], 16, 10);
    }

    private function getT($i, $j)
    {
        return base_convert($this->T[$i][$j], 16, 10);
    }

    public function getL()
    {
        return $this->L;
    }

    public function __construct($M)
    {
        $this->setH(base_convert('2739370C5AD3445D782A6045308942FB6798CEF93BF4AB10685D846094334AC4', 16, 10))->setL(256)->setM($M);
    }

    public function hash()
    {
        $h = $this->getH();
        // здесь и далее - проверка на принадлежность полю Z(n) в соответствии с алгоритмом
        if (bccomp($h, bcpow(2, 256)) > 0) {
            $this->addError('Число ' . $h . ' больше 2^256 (т.е. вне поля Z(256)).');
        }

        for ($d=1; $d<=count($this->M); $d++) {

            /* на вход алгоритма поступает последовательность М_1, M_2, ..., M_(n+1) -
             * дополненная и преобразованная исходная последовательность
             * (m1, m2, ..., mz), где mi принадлежит Z(8)
             * $k принадлежит Z(256)
             */
            $k = $this->getM($d);

            if (bccomp($k, bcpow(2, 256)) > 0) {$this->addError('Число ' . $k . ' больше 2^256 (т.е. вне поля Z(256)).');}
            $K = $this->basisDecomposition($k, bcpow(2, 32));
            // здесь и далее - проверка количества коэффициентов разложения в соответствии с алгоритмом
            if (count($K) > 8) {$this->addError('Результат декомпозиции '. $k .' по основанию 2^32 содержит больше 8 коэффициентов.');}
            $H = $this->basisDecomposition($h, bcpow(2, 32));
            if (count($H) > 8) {$this->addError('Результат декомпозиции '. $h .' по основанию 2^32 содержит больше 8 коэффициентов.');}

            $K128 = $this->basisDecomposition($k, bcpow(2, 128), 2);
            if (count($K128) > 2) {$this->addError('Результат декомпозиции '. $k .' по основанию 2^128 содержит больше 2 коэффициентов.');}
            $k0 = $K128[0]; $k1 = $K128[1];
            $H128 = $this->basisDecomposition($h, bcpow(2, 128), 2);
            if (count($H128) > 2) {$this->addError('Результат декомпозиции '. $k .' по основанию 2^128 содержит больше 2 коэффициентов.');}
            $h0 = $H128[0]; $h1 = $H128[1];

            $V1 = 0;
            for ($i=0; $i<=7; $i++) {
                $V1 = bcadd($V1, bcmul(bcmod(bcadd($this->getV($i), $K[$i]), bcpow(2, 32)), bcpow(2, 32*$i)));
            }

            $V2 = 0;
            for ($i=8; $i<=15; $i++) {
                $V2 = bcadd($V2, bcmul(bcmod(bcadd($this->getV($i), $H[$i-8]), bcpow(2, 32)), bcpow(2, 32*$i)));
            }

            $V = bcadd($V1, $V2);
            if (bccomp($V, bcpow(2, 512)) > 0) {$this->addError('Число ' . $V . ' больше 2^512 (т.е. вне поля Z(512)).');}
            $R = array();
            for ($i=0; $i<=6; $i=$i+2) {
                $V = $this->operationPower('rhoTransformation', 29, $V, 0);
                if (bccomp($V, bcpow(2, 512)) > 0) {$this->addError('Число ' . $V . ' больше 2^512 (т.е. вне поля Z(512)).');}
                $R[$i][] = $V;
                $V = $this->operationPower('rhoTransformation', 18, $V, 1);
                if (bccomp($V, bcpow(2, 512)) > 0) {$this->addError('Число ' . $V . ' больше 2^512 (т.е. вне поля Z(512)).');}
                $R[$i][] = $V;
                $V = $this->operationPower('rhoTransformation', 19, $V, 2);
                if (bccomp($V, bcpow(2, 512)) > 0) {$this->addError('Число ' . $V . ' больше 2^512 (т.е. вне поля Z(512)).');}
                $R[$i][] = $V;
                $V = $this->operationPower('rhoTransformation', 17, $V, 3);
                if (bccomp($V, bcpow(2, 512)) > 0) {$this->addError('Число ' . $V . ' больше 2^512 (т.е. вне поля Z(512)).');}
                $R[$i][] = $V;
            }

            $w = $this->binaryOperation($k, $h);
            if (bccomp($w, bcpow(2, 256)) > 0) {$this->addError('Число ' . $w . ' больше 2^256 (т.е. вне поля Z(256)).');}
            $W = $this->basisDecomposition($w, bcpow(2, 128), 2);
            if (count($W) > 2) {$this->addError('Результат декомпозиции '. $w .' по основанию 2^128 содержит больше 2 коэффициентов.');}

            $T = $this->getTCoefficients($R);

            $w0 = $this->omegaTransformation(array_merge(array($W[0]), $T));
            $w1 = $this->omegaTransformation(array($W[1], $T[4], $T[1], $T[0], $T[3], $T[6], $T[5], $T[2], $T[7]));
            $w = $this->composition(0, 1, bcpow(2, 128), array($w0, $w1));

            $w = $this->operationPower('ksiTransformation', 31, $w);
            if (bccomp($w, bcpow(2, 256)) > 0) {$this->addError('Число ' . $w . ' больше 2^256 (т.е. вне поля Z(256)).');}

            $w = $this->phiTransformation($h0, $this->phiTransformation($h0, $w));
            if (bccomp($w, bcpow(2, 256)) > 0) {$this->addError('Число ' . $w . ' больше 2^256 (т.е. вне поля Z(256)).');}
            $w = $this->phiTransformation($k0, $this->phiTransformation($k0, $w));
            if (bccomp($w, bcpow(2, 256)) > 0) {$this->addError('Число ' . $w . ' больше 2^256 (т.е. вне поля Z(256)).');}
            $w = $this->phiTransformation($h1, $this->phiTransformation($h1, $w));
            if (bccomp($w, bcpow(2, 256)) > 0) {$this->addError('Число ' . $w . ' больше 2^256 (т.е. вне поля Z(256)).');}
            $w = $this->phiTransformation($k1, $this->phiTransformation($k1, $w));
            if (bccomp($w, bcpow(2, 256)) > 0) {$this->addError('Число ' . $w . ' больше 2^256 (т.е. вне поля Z(256)).');}

            $h = $w;
        }
        var_dump($this->hexWrapper($this->basisDecomposition($h, 16)));
        return $this->hexWrapper($this->basisDecomposition(bcmod($h, bcpow(2, $this->getL())), 16, 64));
    }

    /**
     * Разложение числа $number, которое находится в десятичной системе, по базису $basis
     * @param $number
     * @param $basis
     * @param $bits
     * @return array массив коэффициентов разложения: младший индекс массива - коэффициент
     * при нулевой степени и т.д., дополненный до $bits разрядов
     */
    public function basisDecomposition($number, $basis, $bits = 8)
    {
        $coefficients = array();

        while ($number) {
            $remainder = bcmod($number, $basis);
            $coefficients[] = $remainder;
            $number = bcdiv(bcsub($number, $remainder), $basis);
        }

        return array_pad($coefficients, $bits, 0);
    }

    /**
     * Обертка для декомпозиции по основанию 16 (т.е. перевод в 16-ричную систему счисления)
     * с произвольной точностью
     * @param $coefficients
     * @return string
     */
    private function hexWrapper($coefficients)
    {
        $hexNumbers = array('a', 'b', 'c', 'd', 'e', 'f');
        $result = '';
        foreach ($coefficients as &$coefficient) {
            if ($coefficient>9) {
                $coefficient = $hexNumbers[$coefficient%10];
            }
            $result = $coefficient.$result;
        }

        return $result;
    }

    private function binaryOperation($a, $b)
    {
        $A = $this->basisDecomposition($a, 2);
        $B = $this->basisDecomposition($b, 2);
        if (count($B) > count($A)) {
            $k = count($B);
            $A = array_pad($A, $k, 0);
        } else {
            $k = count($A);
            $B = array_pad($B, $k, 0);
        }

        $result = 0;
        for ($i=0; $i<=$k-1; $i++)
        {
            $result = bcadd($result, bcmul(bcmod(bcadd($A[$i], $B[$i]), 2), bcpow(2, $i)));
        }
        return $result;
    }

    private function rhoTransformation($x, $transformationIndex=null)
    {
        $transformationIndex = (int) $transformationIndex;
        if (bccomp($x, bcpow(2, 512)) > 0) {$this->addError('Число ' . $x . ' больше 2^512 (т.е. вне поля Z(512)).');}

        $X = $this->basisDecomposition($x, bcpow(2, 32), 16);
        $C = base_convert($this->getC($transformationIndex), 16, 10);

        $rho = 0;
        for ($j=0; $j<=14; $j++) {
            $rho = bcadd($rho, bcmul($X[$j+1], bcpow(2, 32*$j)));
        }
        switch($transformationIndex) {
            case 0:
                $operand = $this->binaryOperation($this->binaryOperation($X[15], $X[13]), $X[3]);
                break;
            case 1:
                $operand = $this->binaryOperation($X[15], $X[2]);
                break;
            case 2:
                $operand = $this->binaryOperation($X[9], $X[4]);
                break;
            case 3:
                $operand = $this->binaryOperation($X[13], $X[8]);
                break;
        }
        $operand = $this->binaryOperation($operand, $X[0]);
        $rho = bcadd($rho, bcmul(bcmod(bcadd($operand, $C), bcpow(2, 32)), bcpow(2, 480)));
        return $rho;
    }

    private function operationPower($operation, $power, $param, $transformationIndex=null)
    {
        $i=1;
        $result = $param;
        while($i<=$power) {
            $result = $this->$operation($result, $transformationIndex);
            ++$i;
        }
        return $result;
    }

    private function omegaTransformation(array $params)
    {
        $X = $this->basisDecomposition($params[0], bcpow(2, 64), 2);
        $x0 = $X[0]; $X0 = $this->basisDecomposition($x0, bcpow(2,8), 8);
        $x1 = $X[1]; $X1 = $this->basisDecomposition($x1, bcpow(2,8), 8);

        $y0 = $params[1]; $Y0 = $this->basisDecomposition($y0, bcpow(2,8), 256);
        $y1 = $params[2]; $Y1 = $this->basisDecomposition($y1, bcpow(2,8), 256);
        $y2 = $params[3]; $Y2 = $this->basisDecomposition($y2, bcpow(2,8), 256);
        $y3 = $params[4]; $Y3 = $this->basisDecomposition($y3, bcpow(2,8), 256);
        $y4 = $params[5]; $Y4 = $this->basisDecomposition($y4, bcpow(2,8), 256);
        $y5 = $params[6]; $Y5 = $this->basisDecomposition($y5, bcpow(2,8), 256);
        $y6 = $params[7]; $Y6 = $this->basisDecomposition($y6, bcpow(2,8), 256);
        $y7 = $params[8]; $Y7 = $this->basisDecomposition($y7, bcpow(2,8), 256);
        $Y = array($Y0, $Y1, $Y2, $Y3, $Y4, $Y5, $Y6, $Y7);

        for ($m=0; $m<33; $m++) {
            $p=0;
            for ($i=0; $i<=7; $i++) {
                $p = bcadd($p, bcmul($Y[$i][$X0[$i]], bcpow(2, 8*$i)));
            }
            $P = $this->basisDecomposition($p, 2, 64);
            $operand1=0;
            for ($i=0; $i<=60; $i++) {
                $operand1 = bcadd($operand1, bcmul($P[$i], bcpow(2, $i+3)));
            }
            $operand2 = bcadd(bcadd(bcmul(bcpow(2, 2), $P[63]), bcmul(2, $P[62])), $P[61]);

            $p = bcadd($operand1, $operand2);

            $p = $this->binaryOperation($p, $x1);
            $x1= $x0; $x0 = $p;
        }
        $result = bcadd(bcmul($x1, bcpow(2, 64)), $x0);
        return $result;
    }

    private function getTCoefficients($R)
    {
        $T = array();
        for ($i=0; $i<=7; $i++) {
            if ($i%2) {
                $t=0;
                for ($j=0; $j<=63; $j++) {
                    $t = bcadd($t, bcmul($this->getT($i, $j), bcpow(2, 32*$j)));
                }
                $T[$i] = $t;
            } else {
                $t=0;
                for ($j=0; $j<=3; $j++) {
                    $t = bcadd($t, bcmul($R[$i][$j], bcpow(2, 512*$j)));
                }
                $T[$i] = $t;
            }
        }
        return $T;
    }

    private function ksiTransformation($x, $indexTransformation=null)
    {
        $X = $this->basisDecomposition($x, bcpow(2, 32), 8);

        $operand1 = 0;
        for ($i=1; $i<=7; $i++) {
            $operand1 = bcadd($operand1, bcmul($X[$i-1], bcpow(2, 32*$i)));
        }

        $operand2 = $this->binaryOperation($this->binaryOperation($this->binaryOperation($X[0], $X[2]), $X[4]), $X[7]);

        $ksi = bcadd($operand1, $operand2);

        return $ksi;
    }

    /* преобразование 5.2.4
     * на выходе Y принадлежит Z(256)
     *
     */
    private function phiTransformation($x, $y)
    {
        $X = $this->basisDecomposition($x, bcpow(2, 32), 4);
        $Y = $this->basisDecomposition($y, bcpow(2, 32), 8);

        // шаг 1
        $s = $this->composition(0, 3, bcpow(2, 32), $Y);

        // шаг 2
        $XY =array();
        for ($i=0; $i<=3; $i++) {
            $XY[$i] = bcmod(bcadd($X[$i], $Y[$i]), bcpow(2, 32));
        }
        $operand1 = $this->composition(4, 7, bcpow(2, 32), $Y);
        $operand2 = $this->composition(0, 3, bcpow(2, 32), $XY);
        $y = bcadd($operand1, $operand2);
        $Y = $this->basisDecomposition($y, bcpow(2, 32), 8);

        // шаг 3
        $YY = array();
        for ($i=0; $i<=3; $i++) {
            $YY[$i] = $this->binaryOperation($Y[$i], $Y[$i+4]);
        }
        $operand1 = bcmul($s, bcpow(2, 32*4));
        $operand2 = $this->composition(0, 3, bcpow(2, 32), $YY);
        $y = bcadd($operand1, $operand2);

        return $y;

    }

    public function composition($start, $end, $basis, $coefficients) {
        $result = 0;
        for ($i=$start; $i<=$end; $i++) {
            $result = bcadd($result, bcmul($coefficients[$i], bcpow($basis, $i)));
        }
        return $result;
    }
}


@extends('_ik.master')
@section('content')
<h2>Számrendszerek</h2>
<ol>
    <li>
        <strong>Számoljuk át tízes számrendszerbe az alábbi számokat!</strong>
        <ul>
            <li>1011.011<sub>2</sub> = 11.375<sub>10</sub></li>
            <li>1011.01<sub>5</sub> = 131.04<sub>10</sub></li>
            <li>123.45<sub>16</sub> = 291.2695<sub>10</sub></li>
            <li>123.45<sub>8</sub> = 83.57813<sub>10</sub></li>
            <li>1A9.DB<sub>16</sub> = 425.85547<sub>10</sub></li>
            <li>4172.53<sub>8</sub> = 2170.671875<sub>10</sub></li>
        </ul>
    </li>
    <li>
        <strong>Írjuk át kettes számrendszerbe a tizenhatos számrendszerbeli, illetve tizenhatos számrendszerbe a kettes számrendszerbeli számokat!</strong>
        <ul>
            <li>BABA<sub>16</sub> = 1011101010111010<sub>2</sub> = 1011 1010 1011 1010<sub>2</sub> = 1011|1010|1011|1010<sub>2</sub></li>
            <li>ABBA.CD<sub>16</sub> = 1010 1011 1011 1010 . 1100 1101<sub>2</sub></li>
            <li>DADA<sub>16</sub> = 1101 1010 1101 1010<sub>2</sub></li>
            <li>ECCE<sub>16</sub> = 1110 1100 1100 1110<sub>2</sub></li>
            <li>1011 0111 0011<sub>2</sub> = B73<sub>16</sub></li>
            <li>1110 1111 0001 0111<sub>2</sub> = EF17<sub>16</sub></li>
        </ul>
    </li>
    <li>
        <strong>Írjuk át kettes számrendszerbe a nyolcas számrendszerbeli, illetve nyolcas számrendszerbe a kettes számrendszerbeli számokat!</strong>
        <ul>
            <li>4567<sub>8</sub> = 100101110111<sub>2</sub> = 100 101 110 111<sub>2</sub> = 100|101|110|111<sub>2</sub></li>
            <li>2635.24<sub>8</sub> = 010 110 011 101 . 010 100<sub>2</sub></li>
            <li>101 101 110 011<sub>2</sub> = 5563<sub>8</sub></li>
            <li>1 110 111 100 010 111<sub>2</sub> = 167427<sub>8</sub></li>
            <li>11 100 111 101 100 010<sub>2</sub> = 347542<sub>8<sub></li> 
                        </ul>
                        </li>
                        <li>
                            <strong>Írjuk fel bináris számrendszerben az alábbi decimális számokat!</strong>
                            <ul>
                                <li>3496.326<sub>10</sub> = 110110101000.01010011011101<sub>2</sub></li>
                                <li>1000<sub>10</sub> = 1111101000<sub>2</sub></li>
                                <li>1512.1533<sub>10</sub> = 10111101000.00100111<sub>2</sub></li>
                                <li>112.3<sub>10</sub> = 1110000.01'0011'0011'...<sub>2</sub></li> 
                            </ul>
                        </li>
                        <li>
                            <strong>Írjuk fel octális és hexadecimális számrendszerben az alábbi decimális számokat!</strong>
                            <ul>
                                <li>12438.964<sub>10</sub> = 30226.75544<sub>8</sub> = 3096.F6C8<sub>16</sub></li>
                                <li>3096.123<sub>10</sub> = 6030.0767<sub>8</sub> = C18.1F7C<sub>16</sub></li>
                                <li>12345.678<sub>10</sub> = 30071.533<sub>8</sub> = 3039.AD9<sub>16</sub></li>
                                <li>9977<sub>10</sub> = 23371<sub>8</sub> = 26F9<sub>16</sub></li> 
                            </ul>
                        </li>
                        </ol>
                        @stop
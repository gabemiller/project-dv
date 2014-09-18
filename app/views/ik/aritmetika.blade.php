@extends('_ik.master')
@section('content')
<h2>Aritmetikai műveletek</h2>
<ol>
    <li>
        <strong>Végezzük el az alábbi műveleteket bináris számrendszerben!</strong>
        <ul>
            <li>1011010111<sub>2</sub> + 100010001111<sub>2</sub> = 101101100110<sub>2</sub></li>
            <li>1110011<sub>2</sub> + 1010101010<sub>2</sub> = 1100011101<sub>2</sub></li>
            <li>1000.111<sub>2</sub> + 11100.101<sub>2</sub> = 100101.100<sub>2</sub></li>
            <li>101001001000<sub>2</sub> - 1101001011<sub>2</sub> = 11011111101<sub>2</sub></li>
            <li>101010100<sub>2</sub> - 111111<sub>2</sub> = 100010101<sub>2</sub></li>
            <li>1000111.01<sub>2</sub> - 11110.11<sub>2</sub> = 101000.10<sub>2</sub></li>
        </ul>
    </li>
    <li>
        <strong>Végezzük el az alábbi műveleteket oktális számrendszerben!</strong>
        <ul>
            <li>1327<sub>8</sub> + 4217<sub>8</sub> = 5546<sub>8</sub></li>
            <li>5463.102<sub>8</sub> + 3332.2<sub>8</sub> = 11015.302<sub>8</sub></li>
            <li>66475<sub>8</sub> + 3216547<sub>8</sub> = 3305244<sub>8</sub></li>
            <li>5110<sub>8</sub> - 1513<sub>8</sub> = 3375<sub>8</sub></li>
            <li>56463<sub>8</sub> - 34557<sub>8</sub> = 21704<sub>8</sub></li>
            <li>1000111<sub>8</sub> - 11117<sub>8</sub> = 76672<sub>8</sub></li>
        </ul>
    </li>
    <li>
        <strong>Végezzük el az alábbi műveleteket hexadecimális számrendszerben!</strong>
        <ul>
            <li>2D7<sub>16</sub> + 88F<sub>16</sub> = B66<sub>16</sub></li>
            <li>B789ABB<sub>16</sub> + BFBFAE<sub>16</sub> = C385A69<sub>16</sub></li>
            <li>123456789<sub>16</sub> + ABCDEF<sub>16</sub> = 123F13578<sub>16</sub></li>
            <li>A48<sub>16</sub> - 34B<sub>16</sub> = 6FD<sub>16</sub></li>
            <li>123456789<sub>16</sub> - ABCDEF<sub>16</sub> = 12299999A<sub>16</sub></li>
            <li>1000111<sub>16</sub> - 11B17<sub>16</sub> = FEE5FA<sub>16</sub></li>
        </ul>
    </li>
</ol>

@stop
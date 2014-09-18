@extends('_ik.master')
@section('content')
<div class="table-responsive">
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th colspan="7" class="text-center">Fixpontos számábrázolás</th>
            </tr>
            <tr >
                <th></th>
                <th>Előjeles abszolútértékes</th>
                <th>1-es komplemens</th>
                <th>2-es komplemens</th>
                <th>128 többletes</th>
                <th>127 többletes</th>
                <th>Előjel nélküli</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>+</strong>25</td>
                <td>0001 1001</td>
                <td>0001 1001</td>
                <td>0001 1001</td>
                <td>1001 1001</td>
                <td>1001 1000</td>
                <td>0001 1001</td>
            </tr>
            <tr>
                <td><strong>-</strong>25</td>
                <td>1001 1001</td>
                <td>1110 0110</td>
                <td>1110 0111</td>
                <td>0110 0111</td>
                <td>0110 0110</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Legnagyobb érték</td>
                <td>+127</td>
                <td>+127</td>
                <td>+127</td>
                <td>+127</td>
                <td>+128</td>
                <td>+255</td>
            </tr>
            <tr>
                <td>Legkisebb érték</td>
                <td>-127</td>
                <td>-127</td>
                <td>-128</td>
                <td>-128</td>
                <td>-127</td>
                <td>0</td>
            </tr>
            <tr>
                <td rowspan="2">Nulla ábrázolása</td>
                <td colspan="2">+0</td>
                <td colspan="4" rowspan="2">+0</td>
            </tr>
            <tr>
                <td colspan="2">-0</td>
            </tr>
        </tbody>

    </table>
</div>
<div class="row">
    <div class="col-lg-6">
        <ol>
            <li>
                <strong>Ábrázold a számot a megfelelő módon 8 biten!</strong>
                <ul>
                    <li>-56<sub>10</sub> = 1011 1000<sub>2</sub> - Előjeles abszolútértékes</li>
                    <li>41<sub>10</sub> =  0010 1001<sub>2</sub> - Előjeles abszolútértékes</li>
                    <li>-126<sub>10</sub> = 1000 0001<sub>2</sub> - 1-es komplemens</li>
                    <li>-13<sub>10</sub> = 1111 0010<sub>2</sub> - 1-es komplemens</li>
                    <li>-98<sub>10</sub> = 1001 1110<sub>2</sub> - 2-es komplemens</li>
                    <li>-63<sub>10</sub> = 1100 0001<sub>2</sub> - 2-es komplemens</li>
                </ul>
            </li>
            <li>
                <strong>Mely számokat ábrázoltuk a megfelelő módon 8 biten?</strong>
                <ul>
                    <li>0101 0101<sub>2</sub> = 85<sub>10</sub> - Előjeles abszolútértékes</li>
                    <li>1001 0110<sub>2</sub> = -22<sub>10</sub> - Előjeles abszolútértékes</li>
                    <li>1001 1100<sub>2</sub> = -99<sub>10</sub> - 1-es komplemens</li>
                    <li>1101 1110<sub>2</sub> = -33<sub>10</sub> - 1-es komplemens</li>
                    <li>1000 0000<sub>2</sub> = -128<sub>10</sub> - 2-es komplemens</li>
                    <li>1000 0101<sub>2</sub> = -123<sub>10</sub> - 2-es komplemens</li>
                </ul>
            </li>
            <li>
                <strong>Mely számokat ábrázoltuk hexadecimális számrendszerben?</strong>
                <ul>
                    <li>B7<sub>16</sub> = 1011 0111<sub>2</sub> = -55<sub>10</sub> - Előjeles abszolútértékes</li>
                    <li>A3<sub>16</sub> = 1010 0011<sub>2</sub> = -92<sub>10</sub> - 1-es komplemens</li>
                    <li>83<sub>16</sub> = 1000 0011<sub>2</sub> = -125<sub>10</sub> - 2-es komplemens</li>
                </ul>
            </li>
            <li>
                <strong>Mely számokat ábrázoltuk a megfelelő módon 16 biten?</strong>
                <ul>
                    <li>1001 0100 0110 0111<sub>2</sub> = -5223<sub>10</sub> - Előjeles abszolútértékes</li>
                    <li>1111 0001 1001 1010<sub>2</sub> = -3685<sub>10</sub> - 1-es komplemens</li>
                    <li>1101 1001 0111 1001<sub>2</sub> = -9863<sub>10</sub> - 2-es komplemens</li>
                </ul>
            </li>
        </ol>
    </div>
    <div class="col-lg-6">
        <ol>
            <li>
                <strong>Mely számokat ábrázoltuk a megfelelő módon 8 biten?</strong>
                <ul>
                    <li>1010 0011<sub>2</sub> = 35<sub>10</sub> - 128 többletes</li>
                    <li>1101 1000<sub>2</sub> = 88<sub>10</sub> - 128 többletes</li>
                    <li>0100 0000<sub>2</sub> = -64<sub>10</sub> - 128 többletes</li>
                    <li>1100 0011<sub>2</sub> = 68<sub>10</sub> - 127 többletes</li>
                    <li>0101 0110<sub>2</sub> = -41<sub>10</sub> - 127 többletes</li>
                    <li>0001 0110<sub>2</sub> = -105<sub>10</sub> - 127 többletes</li>
                </ul>
            </li>
            <li>
                <strong>Ábrázold a számot a megfelelő módon 8 biten!</strong>
                <ul>
                    <li>-114<sub>10</sub> = 0000 1110<sub>2</sub> - 128 többletes</li>
                    <li>-59<sub>10</sub> = 0100 0101<sub>2</sub> - 128 többletes</li>
                    <li>99<sub>10</sub> = 1110 0011<sub>2</sub> - 128 többletes</li>
                    <li>76<sub>10</sub> = 1100 1011<sub>2</sub> - 127 többletes</li>
                    <li>-120<sub>10</sub> = 0000 0111<sub>2</sub> - 127 többletes</li>
                    <li>44<sub>10</sub> = 1010 1011<sub>2</sub> - 127 többletes</li>
                </ul>
            </li>
        </ol>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th class="text-center" colspan="33">Lebegőpontos számábrázolás 32bit</th>
            </tr>
            <tr>
                <th></th>
                <th class="text-center" >Előjelbit (S) 1bit</th>
                <th class="text-center" colspan="8">Karakterisztika (k) 8bit</th>
                <th class="text-center" colspan="23">Mantissza (M) 23bit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>+</strong>416</td>
                <td>0</td>

                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>

                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td><strong>-</strong>416</td>
                <td>1</td>

                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>

                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="alert alert-danger">
    <h3 class="text-center">szám = (-1)<sup>S</sup> × (1 + M) × (2<sup>k-127</sup>)</h3>
</div>
<ol>
    <li>
        <strong>Mely számokat ábrázoltuk lebegőpontosan 32 biten?</strong>
        <ul>
            <li>0 01111111 00000000000000000000000<sub>2</sub> = 0<sub>10</sub></li>
            <li>1 10000010 00010100000000000000000<sub>2</sub> = -0.625<sub>10</sub></li>
        </ul>
    </li>
    <li>
        <strong>Ábrázold az alábbi számokat lebegőpontosan 32 biten?</strong>
        <ul>
            <li>-300<sub>10</sub> = 1 10001000 10010110000000000000000<sub>2</sub></li>
            <li>-8.625<sub>10</sub> = 1 10000100 10001010000000000000000 <sub>2</sub></li>
        </ul>
    </li>
</ol>

<h4>Lebegőpontos számánrázolás lépései</h4>
<p>Példa: <strong>+</strong>25</p>
<ol>
    <li>
        Lépés: Megállapítjuk az S, azaz előjel bitet. <strong>Esetünkben 0, mivel pozitív.</strong>
    </li>
    <li>
        Lépés: Átváltjuk a számot kettes számrendszerbe. <strong>Átváltás után ezt a számot kapjuk: 11001</strong>
    </li>
    <li>
        Lépés: Normalizáljuk ezt a számot. Mindig bal oldalt az utolsó egyes lesz az egészrész.
        Az egészrészt nem tároljuk, ugyanis visszaalakításnál hozzáadjuk. <strong>(képletben az  1 + M)</strong>
        <strong>Normál alak: 1.1001 × 2<sup>4</sup></strong>
    </li>
    <li>
        Lépés: A kitevőhöz 127 többletet adunk hozzá. 131-et kapunk, ez a karakterisztika. Átváltjuk és 8 biten ábrázoljuk.
        <strong>Átváltás után a karakterisztika: 1000 0011</strong>
    </li>
    <li>
        Lépés: Felírjuk a számot lebegőpontos alakban. S = 0, k = 1000 0011, M = 0.10010...0 (23 bit). 
        <strong>A szám lebegőpontos alakja: 0 10000011 . 10010000000000000000000</strong>
    </li>
</ol>

@stop
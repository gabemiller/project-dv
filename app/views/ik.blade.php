@extends('_ik.master')
@section('content')
<h2>Bevezetés az Informatikába</h2>

<h3>Információk</h3>

<div class="alert alert-danger">
    Írásbeli vizsga a vizsgaidőszakban.<br>
    <ul>
        <li>a félév során nyújtott teljesítmény: két zárthelyi dolgozat eredménye, a vizsgajegy 40%-át adja</li>
        <li>vizsgaidőszak: vizsgadolgozat, a vizsgajegy 60%-át adja</li>
        <li>a félév során nyújtott teljesítmény: előadáson szerzett pontok</li>
    </ul>
</div>

<p>{{HTML::link('http://www.inf.unideb.hu/~csernochmaria/bev_info/','Tantárgy honlapja',array('target'=>'_blank'))}}</p>

<p>Számrendszerek gyakorló {{HTML::link('ik/szamrendszerek','feladatsor',array('target'=>'_blank'))}} megoldással.</p>
<p>Számábrázolás gyakorló {{HTML::link('ik/szamabrazolas','feladatsor',array('target'=>'_blank'))}} megoldással + segédanyag.</p>
<p>Aritmetikai feladatok gyakorló {{HTML::link('ik/aritmetika','feladatsor',array('target'=>'_blank'))}} megoldással.</p>

<p>C programozáshoz egy kis {{HTML::link('http://mezeic.uw.hu/','segédanyag',array('target'=>'_blank'))}}</p>
<p class="alert alert-danger">CodeBlocks <a href="http://www.codeblocks.org/downloads/26" target="_blank">letöltés</a> és itt ezt kell letölteni: <strong>codeblocks-12.11mingw-setup.exe</strong>. Fontos, hogy a mingw benne legyen, mert az a compiler.</p>

<hr />

<h3>Ráépülő tárgyak</h3>
<ul>
    <li><strong>Adatszerkezetek és algoritmusok</strong> - 2. félév</li>
    <li><strong>Magas szintű programozási nyelvek 1</strong> - 2. félév</li>
    <li><strong>Operációs rendszerek</strong> - 2. félév</li>
</ul>
@stop
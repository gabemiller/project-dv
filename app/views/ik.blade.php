@extends('_ik.master')
@section('content')
<h2>Bevezetés az Informatikába</h2>

<h3>Információk</h3>

<div class="alert alert-danger">
    Írásbeli vizsga a vizsgaidőszakban.
</div>

<p>{{HTML::link('http://www.inf.unideb.hu/~csernochmaria/bev_info/','Tantárgy honlapja',array('target'=>'_blank'))}}</p>
<p>Tanuláshoz egy kis <a href="http://www.tankonyvtar.hu/hu/tartalom/tamop425/0046_bevezetes_az_informatikaba/index.html" target="_blank">jegyzet</a>. 
    <a class="btn btn-sm btn-primary" href="http://ik.divide.hu/file/bevinfo.pdf" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> letöltés <small>(pdf)</small></a><p>
<p>Számrendszerek gyakorló <a href="feladatok.html">feladatsor</a> megoldással.</p>
<p>Számábrázolás gyakorló <a href="szamabrazolas.html">feladatsor</a> megoldással + segédanyag.</p>
<p>Aritmetikai feladatok gyakorló <a href="aritmetika.html">feladatsor</a> megoldással.</p>
<p>UTF-8 kódoláshoz <a href="http://hu.wikipedia.org/wiki/UTF-8" target="_blank">anyag</a>.</p>

<p>C programozáshoz egy kis <a href="http://mezeic.uw.hu/" target="_blank">segédanyag</a>.</p>
<p class="alert alert-danger">CodeBlocks <a href="http://www.codeblocks.org/downloads/26" target="_blank">letöltés</a> és itt ezt kell letölteni: <strong>codeblocks-12.11mingw-setup.exe</strong>. Fontos, hogy a mingw benne legyen, mert az a compiler.</p>

<div class="alert alert-warning">
    <h4 style="margin-top: 0 !important;">Elmélet</h4>
    <p>2. Zárthelyi elméleti <a href="elmelet2.html">kérdéssor</a>.</p>
</div>

<hr />

<h3>Zárthelyi dolgozat</h3>

<div class="alert alert-danger">
    
</div>


<hr />

<h3>Ráépülő tárgyak</h3>
<ul>
    <li><strong>Adatszerkezetek és algoritmusok</strong> - 2. félév</li>
    <li><strong>Magas szintű programozási nyelvek 1</strong> - 2. félév</li>
    <li><strong>Operációs rendszerek</strong> - 2. félév</li>
</ul>
@stop
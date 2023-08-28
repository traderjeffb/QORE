@extends('layouts.app')

@section('content')
<div class="container col-md-10">
    <div class="form-group">
        <h3>Totals:</h3>
        <ul>
            <li>Gold: {{$totals['gold']}}</li>
            <li>Silver: {{$totals['silver']}}</li>
            <li>Platinum: {{$totals['platinum']}}</li>
            <li>Palladium: {{$totals['palladium']}}</li>
            <li>Scandium: {{$totals['scandium']}}</li>
            <li>Yttrium: {{$totals['yttrium']}}</li>
            <li>Lanthanum: {{$totals['lanthanum']}}</li>
            <li>Cerium: {{$totals['cerium']}}</li>
            <li>Praseodymium: {{$totals['praseodymium']}}</li>
            <li>Neodymium: {{$totals['neodymium']}}</li>
            <li>Promethium: {{$totals['promethium']}}</li>
        </ul>
    </div>
    <div id="DMPC_1" data-pym-src="//dailymetalprice.com/charts.php"></div>
    <div id="DMP_1" data-pym-src="//dailymetalprice.com/prices.php"></div>

</div>
    <script type="text/javascript" src="//dailymetalprice.com/js/pym.min.js"></script>

@extends('layouts.body')

@section('content')

    <h1>Zgodovina bitk</h1>
    <br>
    <?php $cnt=0; ?>
    <div class="container">
        <a href="/history/all"> Vsi </a> - 
        <a href="/history/offense"> Napadi </a> - 
        <a href="/history/defense"> Obramba </a> - 
        <a href="/history/unsolved"> Nereseni / Nepregledani</a>
        <br><br>
            
            @if(count($attackedTerritoryData) == 0)
                    Zgodovina bitk je prazna.
            @endif

            @if(count($attackedTerritoryData) > 0)
                Prikazanih {{ count($attackedTerritoryData) }} od {{ $all }}<br>
                @foreach($quizIDs as $quizID)
                        @if(isset($insideTimeLimit))
                            @if($insideTimeLimit[0])
                            <?php
                            $solved = ($solvedQuizes[$cnt]) ? " " : " - še nerešeno"; 
                            ?>
                            @else
                            <?php
                            $solved = ($solvedQuizes[$cnt]) ? " " : " - še nepregledano"; 
                            ?>
                            @endif
                        @else
                            <?php
                            $solved = ($solvedQuizes[$cnt]) ? " " : " - še nerešeno";
                            ?>
                        @endif
                         <li>Napad na naselje: 
                                 {{ $territoryName[$cnt] }} ({{$territoryPosX[$cnt]}},{{$territoryPosY[$cnt]}})
                                 <a href="/map/territory/{{ $territoryIDs[$cnt] }}/{{ $territoryPosX[$cnt] }}/{{ $territoryPosY[$cnt] }}/"> Pojdi na mapo</a>
                                 <br>
                                &nbsp;&nbsp;&nbsp;
                                <a href="/quiz/show/{{$quizID}}"> Poročilo bitke - {{ $quizDates[$cnt]}} {{ $solved }}</a></li>
                         <?php $cnt++; ?>
                @endforeach
            @endif
            @if($all > count($attackedTerritoryData))
            <?php $i = ($all/5)-1 > 0 ? ($all/5)-1 : 1;?>
             <a href="{{ $url }}">Vec...</a>
            @endif
    </div>
@stop
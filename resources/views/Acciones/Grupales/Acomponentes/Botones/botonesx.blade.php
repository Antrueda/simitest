<div class="form-group card-footer text-muted text-center">
    @foreach ($todoxxxx['botoform'] as $botoform)
        @if(!is_null($botoform['formhref']) && !is_null($botoform['routingx']))
            @switch($botoform['formhref'])
                @case(1)
                    {{ Form::submit($botoform['tituloxx'], ['class'=>$botoform['clasexxx']]) }}
                    @break
                @case(2)
                    <a href="{{route($botoform['routingx'][0],$botoform['routingx'][1])}}"
                    class="{{ $botoform['clasexxx']}}">{{$botoform['tituloxx']}}</a>
                    @break
            @endswitch
        @endif
    @endforeach
</div>

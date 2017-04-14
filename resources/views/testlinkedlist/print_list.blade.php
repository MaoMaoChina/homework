<h1 align="center">
    <body bgcolor="#7cfc00">
    @if($length==0)
        Sorry, the data is null.
    @else
        @foreach($data as $out)
            {{$out->theindex }} =>&nbsp{{$out->value}} <br>
            @endforeach
    @endif
    <div class="links">
        <a href="http://localhost/demo/public/">return</a>
    </div>
    </body>
</h1>
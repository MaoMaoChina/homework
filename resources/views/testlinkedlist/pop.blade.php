<h1 align="center">
    <body bgcolor="#9400d3">
    @if($length==0)
        Sorry, the data is null.
        <div class="links">
            <a href="http://localhost/demo/public/">return main menu</a>
        </div>

    @else
        @foreach($data as $out)
            {{$out->theindex }} =>&nbsp{{$out->value}} <br>
            <p>and this data has been delated</p>
        @endforeach
        <div class="links">
            <a href="http://localhost/demo/public/">return main menu</a>
        </div>
    @endif
    </body>
</h1>
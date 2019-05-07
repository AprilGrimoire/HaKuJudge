<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        @foreach ($problems as $problem)
            <a href="{{ route('problems.show', $problem) }}">{{ $problem->title }}</a><br />
        @endforeach
        {!! $problems->render() !!}
    </body>
</html>

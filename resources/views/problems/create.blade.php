<html>
    <head>
    </head>
    <body>
        <form action="{{ route('problems.store') }}" method="POST" enctype="multipart/form-data">
            <textarea name="description"></textarea>
            <input type="file" name="testdata" />
            {{ csrf_field() }}
            <input type="submit" />
        </form>
    </body>
</html>

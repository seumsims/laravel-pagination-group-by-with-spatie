<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
<div><h1>Test</h1></div>
{{--dd($names)--}}
<div>
    @foreach($names as $name)
        <h2>{{ $name->name }}</h2>
        <h2>{{ $name->date }}</h2>

    @endforeach
{{ $names->links() }}
</div>

</body>
</html>

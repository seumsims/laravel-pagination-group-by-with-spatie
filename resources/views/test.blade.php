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
<div></div>
{{--dd($names)--}}
<div>
    @foreach ($data as $date=> $post)

        <div class="grad1"> @foreach ($post as $item)

            <h1 class="k_1">
                {{-- <a> {{dd($item->date)}}</a> --}}
                <a> {{$item->date}}</a>
                @break
            </h1>
        @endforeach</div>

        @foreach ($post as $item)

            <h1 class="k_1">
                <a> {{$item->name}}</a>
            </h1>
        @endforeach
    @endforeach

    {{-- <a href="{{$paginator->nextPageUrl()}}">next</a> --}}
    @for ($i = 1; $i < $data->total(); $i++)
        <a href="?page={{$i}}"> {{$i}} </a>
    @endfor
</div>

</body>
</html>

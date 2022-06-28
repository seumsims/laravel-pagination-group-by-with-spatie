<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Custom Group BY Pagination on Laravel 8</title>
</head>
<body>

{{--dd($names)--}}

    @foreach ($data as $date=> $post)

        <div class="grad1">
            @foreach ($post as $item)


                <h1 class="k_1">
                    {{-- <a> {{dd($item->date)}}</a> --}}
                    <a> {{$item->CurrentDate}}</a>
                    @break
                </h1>

            @endforeach
        </div>


        @foreach ($post as $item)

            <h1 class="k_1">
                <a> {{$item->name}}</a>
            </h1>
        @endforeach


    @endforeach
    @php
        $page = $data->currentPage();
        $total = $data->total();
        $last = $data->lastPage();
        $next = $page + 1;
        $prev = $page - 1;
    @endphp
    <a href="?page={{$prev}}">Previous page</a>
    {{-- <a href="{{$paginator->nextPageUrl()}}">next</a> --}}
    @for ($i = 1; $i < $data->total(); $i++)
        <a href="?page={{$i}}">{{$i}}</a>
    @endfor
    <a href="?page={{$next}}">Next page</a>



</body>
</html>

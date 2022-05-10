<ul>
    @foreach($posts as $post)
        <li>{{ $post->active }} - {{ $post->title }}</li>
    @endforeach
</ul>

{{$posts->appends(request()->input())->links()}}

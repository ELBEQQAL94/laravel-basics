    <div>
        <label>Title</label>
        <input name="title" type="text" placeholder="title" value="{{ old('title', $post->title ?? null) }}" />
    </div>
    <div>
        <label>Content</label>
        <input name="content" type="text" placeholder="content" value="{{ old('content', $post->content ?? null) }}" />
    </div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
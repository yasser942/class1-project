<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required>{{ old('content') }}</textarea>
        @if ($errors->has('content'))
            <span class="text-danger">{{ $errors->first('content') }}</span>
        @endif
    </div>
    <button type="submit">Create Post</button>
</form>

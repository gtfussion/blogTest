<!-- create a form to create a new blog post -->
<!DOCTYPE html>
 <html>
    <body>
        <h1>Edit a new blog</h1>
        @if(session('success'))
            <p style="color:green">{{ session('success') }}</p>
        @endif
        <!-- Display validation errors -->
        @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <form action="/blog/{{$blog->id}}" method="POST">
            @method('PUT')
            @csrf <!-- Laravel's CSRF protection -->
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{$blog->title}}"><br>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content">{{$blog->description}}</textarea><br>
            <label for='author'>Author:</label><br>
            <input type="text" id="author" name="author"  value="{{$blog->author}}"><br>
            <button type="submit">Edit</button>
            <button><a href="{{ route('blog.index') }}">Show all</a></button>
        </form>
</body>
</html>
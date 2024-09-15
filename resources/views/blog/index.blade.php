<p>  Blogs</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Author</th>
      <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($blogs as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->author}}</td>
        <td><a href="/blog/{{$item->id}}">View</a></td>
        <td><a href="/blog/{{$item->id}}/edit">Edit</a></td>
        <td><a href="/blog/{{$item->id}}/delete">Delete</a></td>
        </tr>
    @endforeach

</tbody>
</table>
<button><a href="/blog/create">Create a new blog</a></button>
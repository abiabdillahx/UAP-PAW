<h1>Edit Artikel</h1>

<form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="title" value="{{ $article->title }}" required><br>
    <textarea name="body">{{ $article->body }}</textarea><br>
    <select name="status">
        <option value="draft"{{ $article->status=='draft'?'selected':'' }}>Draft</option>
        <option value="publish"{{ $article->status=='publish'?'selected':'' }}>Publish</option>
    </select><br>
    <button type="submit">Update</button>
</form>
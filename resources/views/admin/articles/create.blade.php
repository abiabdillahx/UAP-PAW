<h1>Buat Artikel</h1>

<form action="{{ route('admin.articles.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Judul" required><br>
    <textarea name="body" placeholder="Isi"></textarea><br>
    <select name="status">
        <option value="draft">Draft</option>
        <option value="publish">Publish</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
<h1>Data Artikel</h1>

<a href="{{ route('admin.articles.create') }}">➕ Tambah</a>

@foreach ($articles as $a)
    <div>
        <h2>{{ $a->title }}</h2>
        <p>{{ Str::limit($a->body, 50) }}</p>
        <small>Status: {{ $a->status }}</small>

        <a href="{{ route('admin.articles.edit', $a->id) }}">✍️ Edit</a>

        <form action="{{ route('admin.articles.destroy', $a->id) }}", method="POST">
            @csrf @method('DELETE')
            <button type="submit">🗑️ Haous</button>
        </form>
    </div>
@endforeach
<x-appadmin-layout>
    <div class="container mt-5">
        <h1>Products List</h1>
        <a href="/admin/products/create" class="btn btn-primary mb-3">Add Product</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->kode_barang }}</td>
                        <td>{{ $product->nama_barang }}</td>
                        <td>{{ $product->satuan }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->category->name ?? 'No Category' }}</td>
                        <td>
                            <a href="/admin/products/{{ $product->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/admin/products/{{ $product->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-appadmin-layout>
<x-appadmin-layout>
    <div class="container mt-5">
        <h1>Customers List</h1>
    </div>
    <a href="{{ route('admin.customers.create') }}" class="btn btn-primary mb-3">Add Customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->kode }}</td>
                        <td>{{ $customer->nama }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->telepon }}</td>
                        <td>
                            <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" class="d-inline">
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
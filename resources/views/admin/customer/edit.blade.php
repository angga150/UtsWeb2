<x-appadmin-layout>
    <div class="container mt-5">
        <h1>Edit Customer</h1>
            <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
                @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $customer->kode }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $customer->nama }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $customer->alamat }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $customer->telepon }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
</x-appadmin-layout>
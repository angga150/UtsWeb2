<x-appadmin-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Add New Product</h1>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/admin/products" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" 
                               id="kode_barang" name="kode_barang" placeholder="Masukkan kode barang" 
                               value="{{ old('kode_barang') }}" required>
                        @error('kode_barang')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" 
                               id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" 
                               value="{{ old('nama_barang') }}" required>
                        @error('nama_barang')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="satuan" class="form-label">Satuan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('satuan') is-invalid @enderror" 
                               id="satuan" name="satuan" placeholder="Contoh: pcs, box, kg, m" 
                               value="{{ old('satuan') }}" required>
                        @error('satuan')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="harga" class="form-label">Harga <span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" 
                               id="harga" name="harga" placeholder="Masukkan harga" 
                               value="{{ old('harga') }}" step="0.01" min="0" required>
                        @error('harga')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Create Product</button>
                        <a href="/admin/products" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appadmin-layout>

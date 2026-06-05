<x-appadmin-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Add New Customer</h1>
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

                <form action="{{ route('admin.customers.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="kode" class="form-label">Kode <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" 
                               id="kode" name="kode" placeholder="Masukkan kode customer" 
                               value="{{ old('kode') }}" required>
                        @error('kode')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                               id="nama" name="nama" placeholder="Masukkan nama customer" 
                               value="{{ old('nama') }}" required>
                        @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" 
                               id="alamat" name="alamat" placeholder="Masukkan alamat customer" 
                               value="{{ old('alamat') }}" required>
                        @error('alamat')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" placeholder="Masukkan email customer" 
                               value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="telepon" class="form-label">Telepon <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" 
                               id="telepon" name="telepon" placeholder="Masukkan telepon customer" 
                               value="{{ old('telepon') }}" required>
                        @error('telepon')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Create Customer</button>
                        <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-appadmin-layout>

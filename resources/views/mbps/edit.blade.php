@extends('layouts.app') <!-- Jika Anda menggunakan layout -->

@section('content')
    <div class="container">
        <h1>Edit Mbps Package</h1>

        <form action="{{ route('mbps.update', $mbps->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $mbps->name }}" required>
            </div>
            
            <div class="form-group">
                <label for="image">Image:</label>
                <div>
                    <img src="{{ asset('storage/' . $mbps->image) }}" alt="{{ $mbps->name }}" style="width: 100px; height: auto; margin-bottom: 10px;">
                </div>
                <input type="file" name="image" class="form-control">
                <small class="form-text text-muted">Leave blank if you don't want to change the image.</small>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" required>{{ $mbps->deskripsi }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
@endsection

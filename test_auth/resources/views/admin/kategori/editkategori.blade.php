@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Kategori</div>
                    <div class="card-body">
                            <form action="/admin/kategori/{{ $data1->id }}" method="POST">
                                @csrf
                                @method('PUT')
                            <input class="form-control" type="text" name="nama_kategori" value="{{ $data1->category_name }}" placeholder="nama kategori"><br>
                                <input type="submit" value="submit" class="btn btn-primary">
                            </form>
                    </div>                
                </div>
            </div>
        </div>
    </div>
@endsection
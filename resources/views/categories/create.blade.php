@extends('layouts.master')

@section('title')
    Category Page | {{ env('APP_NAME') }}
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center py-3">Store Category Page</h1>

        <div class="row">
            <div class="col-md-6">
                <section class="card card-body p-4">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
        
                       @include('partials.messages')
        
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your category" id="" class="form-control">

                        <div class="row mt-3">
                            <div class="col-6">
                                Category Image
                            </div>
                            <div class="col-6">
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
        
                        <button class="btn btn-primary mt-3 text-center">
                            Save
                        </button>
                    </form>
                </section>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <img src="{{ Storage::url($category->image) }}" alt="" width="100">                                    
                                </td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection

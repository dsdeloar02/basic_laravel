@extends('layouts.master')

@section('title')
    Category Page | {{ env('APP_NAME') }}
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center py-3">Store Multiple Documents Add </h1>

        <div class="row">
            <div class="col-md-6">
                <section class="card card-body p-4">
                    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
        
                       @include('partials.messages')
        
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your Document" id="" class="form-control">

                        <div class="row mt-3">
                            <div class="col-6">
                                Multiple documents or files
                            </div>
                            <div class="col-6">
                                <input type="file" name="documents[]" id="documents" class="form-control" multiple>
                            </div>
                        </div>
        
                        <button class="btn btn-primary mt-3 text-center">
                            Add..
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
                            <th>Documents Links</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $document)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $document->name }}</td>
                                <td>
                                    <a href="{{ Storage::url($document->file) }}" target="_blank">
                                        {{ Storage::url($document->file) }}                                    
                                    </a>
                                </td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>
                {{ $documents->links() }}
            </div>
        </div>
    </div>
@endsection

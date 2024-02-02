@extends('layouts.admin')

    @section('content')
    <div class="container-fluid mt-4 overflow-y-scroll">
    	<div class="row justify-content-center">
            <h1 class="text-center">Tags</h1>
            @foreach ($tags as $tag)
            <div class="col-md-4 py-2">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            {{ $tag->name }}
                        </h4>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="d-inline-block">Link:</h5>
                        <p>{{ $tag->link }}</p>
                    </div>
                    
                    <div class="row py-2">
                        <div class="col-4 d-flex justify-content-center">
                            <a class="btn btn-outline-warning" href="{{ route("admin.tags.show", $tag->id) }}">D</a>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <a class="btn btn-outline-info text-body" href="{{ route("admin.tags.edit", $tag->id) }}">M</a>
                        </div>

                        <div class="col-4 d-flex justify-content-center">
                            <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="X" class="btn btn-outline-danger text-body">
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach
    	</div>
    </div>
@endsection

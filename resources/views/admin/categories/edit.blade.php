@extends("layouts.admin")

@section("content")
<div class="container py-3">
    
    <div class="row">
        <h1>Edit new Category</h1>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="{{ route("admin.categories.update", $category->id) }}" method="POST">
                {{-- cross scripting request forgery --}}
                @csrf

                {{-- per la sintassi corretta --}}
                @method("PUT")

                {{-- name  --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error("name") is-invalid @enderror" id="name" name="name" value="{{ old("name") ?? $category->name }}">

                    {{-- error message --}}
                    @error("name")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                {{-- description  --}}
                <div class="mb-3">
                    <label for="description"  class="form-label">Description</label>
                    <textarea class="form-control @error("description") is-invalid @enderror" rows="2" id="description" name="description" value="{{ old("description") ?? $category->description }}"></textarea>

                    {{-- error message --}}
                    @error("description")
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-dark">Edit</button>
                </form>
        </div>
    </div>
</div>
@endsection

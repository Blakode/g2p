@extends('layout.admin')

@section('title', 'manage categories')

@section('content')

    <div class='box-besidebar'>

   @if(session('success'))
    <div class="alert alert-success ms-5">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger ms-5">
            {{ session('error') }}
        </div>
    @endif

    <div class="container">
        <h2 class='ms-3'>Manage Categories</h2>
        <ul class="list-group  ms-4">
            @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href='{{route('category-edit', $category->id)}}'>{{ $category->name }}</a>
                    <div class="d-flex">

                        <a href='{{route('category-edit', $category->id)}}' class="px-4"> 
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="{{ route('category-delete', ['id' => $category->id]) }}" class="text-danger" onclick="event.preventDefault(); deleteCategory({{ $category->id }})">
                            <i class="icofont-ui-close"></i>
                        </a>

                        <form id="delete-form-{{ $category->id }}" action="{{ route('category-delete', ['id' => $category->id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

        <h6 class='alert text-danger ms-3'>Deleting a category means deleting a portfolio and all it's content !!</h6>
    </div>
        <div class="row ms-4">
            <div class="col-md-6  text-left ml-20 mt-60">
                <a href="{{route('category-create')}}" class="btn-portfolio">Add Category +</a>
                <br/>
                <a href="{{route('create-catDetails')}}" class="btn-portfolio">Add Category Portfolio +</a>
            </div>
        </div>
    </div>
    
<script>
function deleteCategory(id) {
    if (confirm('Are you sure you want to delete this category?')) {
        document.getElementById('delete-form-' + id).submit();
    }
}
</script>
@endsection
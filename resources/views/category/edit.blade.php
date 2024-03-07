@extends('layout.admin')

@section('title', 'Edit Category')

@section('content')
   <div class='box-besidebar'>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

<form class="contact-form-wrapper" id="contact-form" action="{{ route('category-update', ['id' => $category->id]) }}" method="post">
    @csrf
    @method('PATCH')

   <div class="row ms-5">
        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="form-group">
                <input class="form-control" type="text" name="name" value="{{ old('name', $category->name) }}" placeholder="Category Title">
            </div>
        </div>

        <div class="col-md-4 aos-init aos-animate mb-3" data-aos="fade-up" data-aos-delay="900">
            <div class="form-group">
                <input class="form-control" type="text" name="key_word" value="{{ old('key_word', $category->key_word) }}" placeholder="Tags (optional)">
            </div>
        </div>
    </div>

    <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <div class="form-group mb-0">
            <button class="btn-submit" type="submit">Update</button>
        </div>
    </div>
</form>
    <div class='container mt-2'>
         <ul class="list-group ms-4">
        @forelse ($categoryDetails as $detail)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('edit-catDetails', $detail->id)}}"> 
                    {{ $detail->name }}
                    </a>
                <div class="d-flex">
                    <!-- Add link or action for editing CategoryDetail -->
                    <a href="{{route('edit-catDetails', $detail->id)}}" class="px-4"> 
                        <i class="icofont-edit"></i>
                    </a>
                     <a href="{{ route('categoryDetail-delete', ['id' => $detail->id]) }}" class="text-danger" onclick="event.preventDefault(); deleteCategory({{ $detail->id }})">
                            <i class="icofont-ui-close"></i>
                    </a>

                        <form id="delete-form-{{ $detail->id }}" action="{{ route('categoryDetail-delete', ['id' => $detail->id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                </div>
            </li>
        @empty
            <li class="list-group-item">No Category Details found.</li>
        @endforelse
    </ul>
    </div>
   
      <div class="row ms-4">
            <div class="col-md-6  text-left ml-20 mt-60">
                <br/>
                <a href="{{route('create-catDetails')}}" class="btn-portfolio"><h6>Add Category Detail + </h6></a>
            </div>
        </div>
    </div>
        <script>
        function deleteCategory(id) {
            if (confirm('Are you sure you want to delete this category details?')) {
            document.getElementById('delete-form-' + id).submit();
            }
        }
        </script>
@endsection
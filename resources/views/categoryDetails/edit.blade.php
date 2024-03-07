@extends('layout.admin')

@section('title', 'Edit categories Details')

@section('content')

    <div class='box-besidebar'>
        @if($errors->any())
        <div class="alert-danger ms-5">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert-success ms-5">
            {{ session('success') }}
        </div>
    @endif

    <div class='container ms-5'>
      <form class="contact-form-wrapper" id="contact-form" action="{{ route('categoryDetails-update', ['id' => $categoryDetail->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH') 

    <div class="row">
        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="form-group">
                <label for="name">Category Detail Title</label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $categoryDetail->name) }}" placeholder="Category Detail Title">
            </div>
        </div>

        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" disabled>
                    <option value="{{ $categoryDetail->category_id }}" selected>{{ $categoryDetail->category->name }}</option>
                </select>
                <small class="text-muted">Category cannot be changed for an existing detail.</small>
            </div>
        </div>

        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description" value="{{ old('description', $categoryDetail->description) }}" placeholder="Description">
            </div>
        </div>

        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
            <div class="form-group">
            <label for="description">Client</label>
                <input class="form-control" type="text" name="client" value="{{ old('client', $categoryDetail->client) }}" placeholder="Client Name">
            </div>
        </div>

        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
            <div class="form-group">
            <label for="description">Date</label>
                <input class="form-control" type="date" name="date" value="{{ old('date', $categoryDetail->date) }}" placeholder="Date">
            </div>
        </div>
        <div class="col-md-4 aos-init aos-animate mb-10" data-aos="fade-up" data-aos-delay="900">
         <label for="description">Services</label>
            <div class="form-group">
                <input class="form-control" type="text" name="services" value="{{ old('services', $categoryDetail->services)}}" placeholder="Services">
            </div>
        </div>


        <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="form-group mb-0">
                <input type="hidden" name="dimension" id="dimension" value="">
                <button class="btn-submit" type="submit">Update</button>
            </div>
        </div>
    </div>
        </form>
    </div>
</div>
    
@endsection
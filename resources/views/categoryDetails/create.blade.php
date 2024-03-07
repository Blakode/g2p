@extends('layout.admin')

@section('title', 'Create Details')

@section('content')
    <div class="row box-besidebar">
    
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

        <div class="col-lg-12 col-xl-10 m-auto">
        <div class="contact-form mb-50"> <!--  -->
            <div class="text-center aos-init aos-animate" data-aos="fade-up">

                <h2 class="title">Create Category Details</h2>
            </div>
            <form class="contact-form-wrapper" id="contact-form" action="{{ route('store-catDetails') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Category Detail Title">
                        </div>
                    </div>

                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <input class="form-control" type="text" name="description" value="{{ old('description') }}" placeholder="Description">
                        </div>
                    </div>

                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <input class="form-control" type="text" name="client" value="{{ old('client') }}" placeholder="Client Name">
                        </div>
                    </div>

                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <input class="form-control" type="date" name="date" value="{{ old('date') }}" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <input class="form-control" type="text" name="services" value="{{ old('services') }}" placeholder="Services">
                        </div>
                    </div>

                    <div class="col-md-12 aos-init aos-animate mb-20" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <label for="images">Upload Images (multiple)</label>
                            <input type="file" name="images[]" id="images" multiple>
                            <br/ class='mb-20'>
                            <div class="image-preview"></div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="form-group mb-0">
                            <input type="hidden" name="dimension" id="dimension" value="">
                            <button class="btn-submit" type="submit">Submit</button>
                        </div>
                    </div>



                </div>
            </form>
            <!-- Message Notification -->
        </div>
    </div>
</div>
@endsection
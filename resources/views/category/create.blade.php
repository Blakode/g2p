@extends('layout.admin')

@section('title', 'Create Category')

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
         <div class="contact-form">
            <div class="text-center aos-init aos-animate" data-aos="fade-up">
                <h2 class="title">Create Category</h2>
            </div>
            <form class="contact-form-wrapper" id="contact-form" action="{{route('category-store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Category Title">
                        </div>
                    </div>

                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
                        <div class="form-group">
                            <input class="form-control" type="text" name="key_word" value="{{ old('key_word') }}" placeholder="Tags (optional)">
                        </div>
                    </div>

                    <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="form-group mb-0">
                            <button class="btn-submit" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
         <!-- Message Notification -->
            <div class="form-message"></div>
</div>
@endsection
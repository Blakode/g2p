@extends('layout.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <main class="main-content site-wrapper-reveal box-besidebar">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

    <!--== Start Portfolio Area Wrapper ==-->
    <div class="portfolio-area portfolio-default-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Filter Menu Start -->
            <div class="messonry-button text-center mb-50">
              <button data-filter=".cat--{{$first_category->id}}" class="is-checked"><span class="filter-text">{{$first_category->name}}</span></button>
          @foreach($categories as $category)
              <button data-filter=".cat--{{ $category->id }}"><span class="filter-text">{{ $category->name }}</span></button>
              @endforeach 
            </div>
            <!-- Filter Menu End -->
          </div>
        </div>
         
 
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 portfolio-list mb-n30">
          <div class="col resizer"></div>

          @if ($first_category->categoryDetails->isNotEmpty())
              @foreach ($first_category->categoryDetails as $categoryDetail)
                  <div class="col cat--{{ $first_category->id }} mb-30">
                      <!-- Single Portfolio Start -->
                      <div class="single-portfolio">
                          <div class="thumbnail">
                        <a href="{{ Storage::url($categoryDetail->images->first()->url) }}" class="gallery-popup">
                            <img src="{{ Storage::url($categoryDetail->images->first()->url) }}" alt="portfolio">
                        </a>
                          </div>
                          <div class="content">
                              <h3 class="title"><a href="{{ route('category-show', $categoryDetail->id) }}">{{ $categoryDetail->name }}</a></h3>
                              <p class="desc">{{ Str::words($categoryDetail->description, 4, ' ...') }}</p>
                          </div>
                      </div>
                      <!-- Single Portfolio End -->
                  </div>
              @endforeach
          @else
           
          @endif

        @foreach ($categories as $category)
            <div class="col mb-30 cat--{{ $category->id }}">
                @foreach ($category->categoryDetails as $categoryDetail)
                    @if ($categoryDetail->images->isNotEmpty())
                        <!-- Single Portfolio Start -->
                        <div class="single-portfolio">
                            <div class="thumbnail">
                                <a href="{{ Storage::url($categoryDetail->images->first()->url) }}" class="gallery-popup">
                                    <img src="{{ Storage::url($categoryDetail->images->first()->url) }}" alt="portfolio">
                                </a>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="{{ route('category-show', $categoryDetail->id) }}">{{ $categoryDetail->name }}</a></h3>
                                <p class="desc">{{ $categoryDetail->description }}</p>
                            </div>
                        </div>
                        <!-- Single Portfolio End -->
                    @endif
                @endforeach
            </div>
        @endforeach

        </div>
        
      </div>
    </div>
    <!--== End Portfolio Area Wrapper ==-->
  </main>
@endsection
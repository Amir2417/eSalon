@extends('frontend.layouts.master')

@push("css")
    
@endpush

@section('content') 
<!-- banner-searching -->
<section class="find-parlour-section">
    @include('frontend.section.banner-search')
</section>
<!-- serching data -->
<section class="parlour-list-area pb-80">
    <div class="container">
        <div class="row justify-content-center mb-20-none">
            @forelse ($parlour_lists ?? [] as $item )
                <div class="col-xl-6 col-md-12 mb-20">
                    <div class="parlor-item">
                        <div class="parlor-img">
                            <img src="{{ get_image($item?->image , 'site-section') }}" alt="img">
                        </div>
                        <div class="parlor-details">
                            <h3 class="title">{{ $item->name ?? '' }}</h3>
                            <p>{{ $item->manager_name ?? '' }}</p>
                            <p>{{ $item->experience ?? '' }}</p>
                            <p>{{ $item->address ?? '' }}</p>
                            <div class="booking-btn">
                                <a href="{{ setRoute('frontend.get.service.index',$item->slug) }}" class="btn--base">{{ __("Get Service") }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            <div class="col-xl-8">
                <div class="alert alert-primary alert-section-bg text-center">
                    {{ __("No Record Found!") }}
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection

@push("script")
    <script>
        var message     = '@json($message)';
        throwMessage('error',JSON.parse(message));
    </script>
@endpush
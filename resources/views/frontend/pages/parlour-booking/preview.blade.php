@php
    $app_local      = get_default_language_code();
@endphp     
@extends('frontend.layouts.master')

@push("css")
    
@endpush

@section('content') 
<section class="appointment-preview pt-150 pb-60">
    <div class="container">
        <form action="{{ setRoute('parlour.booking.confirm',$booking->slug) }}" method="POST">
        @csrf
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-8 col-lg-8 col-md-12 mb-30">
                    <div class="booking-area">
                        <div class="content pt-0">
                            <h3 class="title"><i class="fas fa-info-circle text--base mb-20"></i>{{ __("Appointment Preview") }}</h3>
                            <div class="list-wrapper">
                                <div class="preview-area">
                                    <div class="preview-item">
                                    <p>{{ __("Parlour Name") }} :</p>
                                    </div>
                                    <div class="preview-details">
                                        <p>{{ @$booking->parlour->name ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="preview-area">
                                    <div class="preview-item">
                                    <p>{{ __("Service Type") }} :</p>
                                    </div>
                                    <div class="preview-details">
                                        <p>{{ implode(', ',@$booking->service) }}</p>
                                    </div>
                                </div>
                                <div class="preview-area">
                                    <div class="preview-item">
                                    <p>{{ __("Schedule") }} :</p>
                                    </div>
                                    <div class="preview-details">
                                        <p>{{ @$booking->schedule->week->day ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="preview-area">
                                    <div class="preview-item">
                                    <p>{{ __("Total Amount") }} :</p>
                                    </div>
                                    <div class="preview-details">
                                        <p>{{ get_amount(@$booking->price, get_default_currency_symbol()) ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-type pt-4">
                                <div class="form-group">
                                    <h5 class="title">{{ __("Select Payment Method") }}<span>*</span></h5>
                                    <div class="radio-wrapper pt-2" id="pg-view">
                                        <div class="radio-item">
                                            <input type="radio" id="level" value="{{ global_const()::CASH_PAYMENT }}" name="payment_method">
                                            <label for="level">{{ __("Cash-Payment") }}</label>
                                        </div>
                                        @foreach ($payment_gateway as $item)
                                            <div class="radio-item">
                                                <input type="radio" id="level_{{ $item->id }}" name="payment_method">
                                                <label for="level_{{ $item->id }}">{{ $item->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="btn-area mt-30">
                                <button type="submit" class="btn--base w-100">{{ __("Confirm Booking") }} <i class="fas fa-check-circle ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
@push('script')
    
@endpush
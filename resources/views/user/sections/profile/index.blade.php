@extends('user.layouts.master')

@push('css')
    
@endpush
@section('breadcrumb')
    @include('user.components.breadcrumb',['breadcrumbs' => [
        [
            'name'  => __("Profile"),
            'url'   => setRoute("user.dashboard"),
        ]
    ], 'active' => __("My Profile")])
@endsection
@section('content')
<div class="body-wrapper">
    <div class="row mb-20-none">
        <div class="col-xl-6 col-lg-6 mb-20">
            <div class="custom-card mt-10">
                <div class="dashboard-header-wrapper">
                    <div class="header-title">
                        <h4 class="title">{{ __("Profile Settings") }}</h4>
                    </div>
                    <div class="account-delate">
                        <a href="javascript:void(0)" class="btn--base btn delete-btn">{{ __("Delete Account") }}</a>
                    </div>
                </div>
                <div class="card-body profile-body-wrapper">
                    <form class="card-form"method="POST" action="{{ setRoute('user.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="profile-settings-wrapper">
                            <div class="preview-thumb profile-wallpaper">
                                <div class="avatar-preview">
                                    <div class="profilePicPreview bg_img" data-background="{{ asset('public/frontend') }}/images/element/profile-thumb.jpg"></div>
                                </div>
                            </div>
                            <div class="profile-thumb-content">
                                <div class="preview-thumb profile-thumb">
                                    <div class="avatar-preview">
                                        <div class="profilePicPreview bg_img" data-background="{{ auth()->user()->userImage ?? '' }}"></div>
                                    </div>
                                    <div class="avatar-edit">
                                        <input type='file' class="profilePicUpload" name="image" id="profilePicUpload2"
                                            accept=".png, .jpg, .jpeg">
                                        <label for="profilePicUpload2"><i class="las la-upload"></i></label>
                                    </div>
                                </div>
                                <div class="profile-content">
                                    <h6 class="username">{{ auth()->user()->username ?? '' }}</h6>
                                    <ul class="user-info-list mt-md-2">
                                        <li><i class="las la-envelope"></i>{{ auth()->user()->email ?? '' }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="profile-form-area">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 form-group">
                                    @include('admin.components.form.input',[
                                        'label'         => __("First Name").'<span>*</span>',
                                        'name'          => "firstname",
                                        'placeholder'   => __("Enter First Name") .'...',
                                        'value'         => old('firstname',auth()->user()->firstname)
                                    ])
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    @include('admin.components.form.input',[
                                        'label'         => __("Last Name")."<span>*</span>",
                                        'name'          => "lastname",
                                        'placeholder'   => __("Enter Last Name")."...",
                                        'value'         => old('lastname',auth()->user()->lastname)
                                    ])
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <label>{{__("Country")}}<span>*</span></label>
                                    <select class="form--control select2-auto-tokenize country-select" data-placeholder="{{ __("Select Country") }}" data-old="{{ old('country',auth()->user()->address->country ?? "") }}" name="country"></select>
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    @include('admin.components.form.input',[
                                        'label'         => __("Phone"),
                                        'name'          => "phone",
                                        'type'          => "number",
                                        'placeholder'   => __("Enter Number")."...",
                                        'value'         => old('full_mobile',auth()->user()->full_mobile ?? "" )
                                    ])
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    @include('admin.components.form.input',[
                                        'label'         => __("Address"),
                                        'name'          => "address",
                                        'placeholder'   => __("Enter Address")."...",
                                        'value'         => old('address',auth()->user()->address->address ?? "")
                                    ])
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    @include('admin.components.form.input',[
                                        'label'         => __("City"),
                                        'name'          => "city",
                                        'placeholder'   => __("Enter City")."...",
                                        'value'         => old('city',auth()->user()->address->city ?? "")
                                    ])
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    @include('admin.components.form.input',[
                                        'label'         => __("State"),
                                        'name'          => "state",
                                        'placeholder'   => __("Enter State")."...",
                                        'value'         => old('state',auth()->user()->address->state ?? "")
                                    ])
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    @include('admin.components.form.input',[
                                        'label'         => __("Zip Code"),
                                        'name'          => "zip_code",
                                        'placeholder'   => __("Enter ZipCode")."...",
                                        'value'         => old('zip_code',auth()->user()->address->zip ?? "")
                                    ])
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <button type="submit" class="btn--base w-100">{{ __("Update") }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 mb-20">
            <div class="custom-card mt-10">
                <div class="dashboard-header-wrapper">
                    <h4 class="title">{{ __("Change Password") }}</h4>
                </div>
                <div class="card-body">
                    <form class="card-form" method="POST" action="{{ setRoute('user.profile.password.update') }}">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 form-group show_hide_password">
                                <label>{{ __("Current Password") }}<span>*</span></label>
                                <input type="password" class="form--control" name="current_password" placeholder="{{ __("Enter Password") }}...">
                                <a href="javascript:void(0)" class="show-pass field-icon"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>

                            <div class="col-xl-12 col-lg-12 form-group show_hide_password-2">
                                <label>{{ __("New Password") }}<span>*</span></label>
                                <input type="password" class="form--control" name="password" placeholder="{{ __("Enter Password") }}...">
                                <a href="javascript:void(0)" class="show-pass field-icon"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-xl-12 col-lg-12 form-group show_hide_password-3">
                                <label>{{ __("Confirm Password") }}<span>*</span></label>
                                <input type="password" class="form--control" name="password_confirmation" placeholder="{{ __("Enter Password") }}...">
                                <a href="javascript:void(0)" class="show-pass field-icon"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <button type="submit" class="btn--base w-100">{{ __("Change") }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        getAllCountries("{{ setRoute('global.countries') }}");
        $(document).ready(function(){
            $("select[name=country]").change(function(){
                var phoneCode = $("select[name=country] :selected").attr("data-mobile-code");
                placePhoneCode(phoneCode);
            });

            countrySelect(".country-select",$(".country-select").siblings(".select2"));
            stateSelect(".state-select",$(".state-select").siblings(".select2"));
        });

        //delete profile modal
        $(".delete-btn").click(function(){
            var actionRoute =  "{{ setRoute('user.delete.account') }}";
            var target      = 1;
            var btnText     = "Delete Account";
            var projectName = "{{ @$basic_settings->site_name }}";
            var name        = $(this).data('name');
            var message     = `Are you sure to delete <strong>your account</strong>?<br>If you do not think you will use “<strong>${projectName}</strong>”  again and like your account deleted, we can take card of this for you. Keep in mind you will not be able to reactivate your account or retrieve any of the content or information you have added. If you would still like your account deleted, click “Delete Account”.?`;
            openAlertModal(actionRoute,target,message,btnText,"DELETE");
        });
    </script>
@endpush
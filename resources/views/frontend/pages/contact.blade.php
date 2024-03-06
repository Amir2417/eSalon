@php
    $app_local      = get_default_language_code();
@endphp
@extends('frontend.layouts.master')

@push("css")
    
@endpush

@section('content') 
<div class="contact-location pt-150 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-title pb-40">
                    <h2 class="title text--base">{{ $contact->value->language->$app_local->title ?? ''}}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="contact-widget">
                    <div class="contact-item-icon">
                        <svg id="fi_3037818" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m511.512 501.837-74.82-196.997c-1.106-2.911-3.896-4.836-7.01-4.837l-104.509-.022 51.447-81.572c14.314-22.714 21.881-48.963 21.881-75.909-.001-78.575-63.926-142.5-142.501-142.5s-142.5 63.925-142.5 142.5c0 26.953 7.57 53.203 21.892 75.911.383.609 51.415 81.542 51.415 81.542l-104.495-.022c-3.117 0-5.908 1.926-7.013 4.838l-40.551 106.821c-1.47 3.873.478 8.204 4.35 9.674.876.333 1.775.49 2.66.49 3.025 0 5.876-1.844 7.013-4.84l38.713-101.982 108.781.023 9.459 15.001-26.997-.006c-3.604 0-6.698 2.562-7.37 6.102l-14.625 77.05c-.417 2.194.167 4.461 1.592 6.182s3.543 2.717 5.777 2.717h183.797c2.234 0 4.352-.996 5.776-2.717s2.009-3.987 1.592-6.183l-14.624-77.025c-.672-3.539-3.766-6.101-7.368-6.101h-27.019l9.457-14.995 108.792.023 69.125 181.997h-475.26l18.775-49.458c1.47-3.873-.478-8.204-4.35-9.674-3.871-1.472-8.204.477-9.673 4.35l-22.632 59.62c-.875 2.305-.562 4.893.839 6.922 1.4 2.029 3.708 3.24 6.173 3.24h497c2.466 0 4.773-1.212 6.174-3.241 1.398-2.029 1.712-4.617.837-6.922zm-363.433-291.428c-12.808-20.309-19.579-43.792-19.579-67.909 0-70.304 57.196-127.5 127.5-127.5s127.5 57.196 127.5 127.5c0 24.112-6.768 47.596-19.569 67.909-.554.878-100.781 159.803-101.547 161.006-.016.023-.03.047-.045.07-1.391 2.2-3.76 3.515-6.339 3.515-2.581 0-4.961-1.321-6.353-3.511-.448-.71-100.702-159.699-101.534-161.025-.011-.018-.022-.036-.034-.055zm178.986 134.566 11.776 62.025h-165.682l11.778-62.049 30.248.007 21.79 34.557c4.173 6.565 11.286 10.485 19.025 10.485 7.756 0 14.866-3.927 19.021-10.505.381-.6 21.775-34.521 21.775-34.521h30.269z"></path><path d="m151.038 443.102-5.694 30c-.417 2.194.167 4.461 1.592 6.182s3.543 2.717 5.777 2.717h308.302c2.466 0 4.773-1.212 6.174-3.241 1.399-2.029 1.713-4.617.838-6.922l-11.394-30c-1.106-2.912-3.896-4.837-7.012-4.837h-291.214c-3.603-.001-6.697 2.561-7.369 6.101zm13.579 8.898h279.83l5.696 15h-288.373z"></path><path d="m55.354 441.838-11.388 30c-.875 2.305-.562 4.893.839 6.922 1.4 2.028 3.708 3.24 6.173 3.24h71.199c3.603 0 6.697-2.562 7.369-6.102l5.694-30c.417-2.194-.167-4.461-1.592-6.182s-3.543-2.716-5.777-2.716h-65.505c-3.115 0-5.906 1.926-7.012 4.838zm63.459 10.162-2.847 15h-54.119l5.694-15z"></path><path d="m148.192 329.944-45.182-.01c-3.117 0-5.908 1.926-7.013 4.838l-29.255 77.065c-.875 2.305-.562 4.893.839 6.922 1.4 2.028 3.708 3.24 6.173 3.24h59.811c3.603 0 6.697-2.562 7.369-6.102l14.626-77.056c.417-2.194-.167-4.46-1.591-6.181-1.425-1.719-3.543-2.715-5.777-2.716zm-20.838 77.056h-42.731l23.561-62.064 30.95.007z"></path><path d="m378.436 422h59.791c2.466 0 4.773-1.212 6.174-3.241 1.399-2.029 1.713-4.617.838-6.922l-29.245-77.001c-1.106-2.911-3.896-4.836-7.01-4.837l-45.172-.01c-2.235 0-4.354.996-5.778 2.717s-2.009 3.987-1.592 6.183l14.626 77.011c.671 3.539 3.765 6.1 7.368 6.1zm25.371-77.002 23.549 62.002h-42.71l-11.777-62.009z"></path><path d="m256 225c45.49 0 82.5-37.01 82.5-82.5s-37.01-82.5-82.5-82.5c-45.491 0-82.5 37.01-82.5 82.5s37.009 82.5 82.5 82.5zm0-150c37.22 0 67.5 30.28 67.5 67.5s-30.28 67.5-67.5 67.5-67.5-30.28-67.5-67.5 30.28-67.5 67.5-67.5z"></path><path d="m256 195c28.948 0 52.5-23.552 52.5-52.5s-23.552-52.5-52.5-52.5c-28.949 0-52.5 23.552-52.5 52.5s23.551 52.5 52.5 52.5zm0-90c20.678 0 37.5 16.822 37.5 37.5s-16.822 37.5-37.5 37.5-37.5-16.822-37.5-37.5 16.822-37.5 37.5-37.5z"></path></g></svg>
                    </div>
                    <div class="contact-item-content">
                        <h3 class="title">{{ __("Our Location") }}</h3>
                        <span class="sub-title">{{ $contact->value->address ?? '' }}</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="contact-widget">
                    <div class="contact-item-icon">
                        <svg version="1.1" id="fi_950299" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M402.524,432l-18.52-55.568c-6.472-19.4-22.984-33.72-43.112-37.384l-53.464-9.728v-4.144
                                        c9.304-5.4,17.4-12.624,23.848-21.176h16.152c13.232,0,24-10.768,24-24v-96c0-57.344-46.656-104-104-104s-104,46.656-104,104v56
                                        c0,15.424,10.968,28.328,25.512,31.336c4.488,22.992,18.856,42.448,38.488,53.84v4.144l-53.472,9.728
                                        c-20.12,3.664-36.64,17.984-43.104,37.384l-3.2,9.608l-27.248-27.248c-3.12-3.12-3.12-8.2,0-11.32l31.6-31.592l-59.312-59.312
                                        L16.98,292.28c-10.576,10.576-16.4,24.64-16.4,39.6s5.824,29.016,16.4,39.592l108.12,108.12C135.676,490.168,149.74,496,164.7,496
                                        c14.96,0,29.016-5.832,39.344-16.168l38.968-35.704L230.86,432H402.524z M335.428,280c0,4.416-3.592,8-8,8H320.7
                                        c2.32-5.288,4.08-10.864,5.216-16.664c3.424-0.712,6.576-2.072,9.512-3.784V280z M327.428,253.776v-27.552
                                        c4.76,2.776,8,7.88,8,13.776S332.188,251,327.428,253.776z M167.428,253.776c-4.76-2.776-8-7.88-8-13.776s3.24-11,8-13.776
                                        V253.776z M167.428,200v9.136c-2.848,0.744-5.52,1.864-8,3.312V184c0-48.52,39.48-88,88-88s88,39.48,88,88v28.448
                                        c-2.48-1.448-5.152-2.576-8-3.312V200h-8c-23.656,0-45.896-9.216-62.632-25.944l-9.368-9.368l-9.368,9.368
                                        C221.324,190.784,199.084,200,175.428,200H167.428z M183.428,256v-40.304c24.024-1.808,46.424-11.72,64-28.432
                                        c17.576,16.712,39.976,26.632,64,28.432V256c0,11.664-3.184,22.576-8.656,32h-55.344v16h42.192c-11.28,9.928-26.024,16-42.192,16
                                        C212.14,320,183.428,291.288,183.428,256z M271.428,332.312v0.376l-24,24l-24-24v-0.376c7.584,2.384,15.64,3.688,24,3.688
                                        S263.844,334.696,271.428,332.312z M126.02,381.488c4.616-13.856,16.416-24.088,30.792-26.712l55.92-10.16l34.696,34.696
                                        l34.688-34.688l55.912,10.16c14.376,2.624,26.176,12.848,30.792,26.712L380.332,416H214.86l-31.16-31.16l-34.624,31.32
                                        c-3.016,3.032-8.288,3.032-11.312,0l-17.472-17.472L126.02,381.488z M52.684,279.192l36.688,36.688l-8.688,8.688L43.996,287.88
                                        L52.684,279.192z M192.964,468.296c-7.552,7.536-17.6,11.704-28.28,11.704c-10.68,0-20.728-4.168-28.288-11.72L28.276,360.168
                                        c-7.552-7.552-11.712-17.6-11.712-28.28c0-10.688,4.16-20.736,11.712-28.288l4.4-4.4l36.688,36.688l-0.288,0.288
                                        c-9.352,9.36-9.352,24.584,0,33.944l57.368,57.368c4.536,4.528,10.56,7.032,16.976,7.032s12.44-2.496,16.68-6.752l0.6-0.536
                                        l36.856,36.856L192.964,468.296z M209.364,453.256l-36.776-36.776l10.568-9.552l36.712,36.712L209.364,453.256z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M471.428,0h-112c-13.232,0-24,10.768-24,24v64c0,13.232,10.768,24,24,24h21.368l-8.272,48.248l77.2-48.248h21.704
                                        c13.232,0,24-10.768,24-24V24C495.428,10.768,484.66,0,471.428,0z M479.428,88c0,4.408-3.592,8-8,8h-26.296l-50.808,31.752
                                        L399.772,96h-40.344c-4.408,0-8-3.592-8-8V24c0-4.408,3.592-8,8-8h112c4.408,0,8,3.592,8,8V88z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="367.428" y="32" width="96" height="16"></rect>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="367.428" y="64" width="64" height="16"></rect>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="447.428" y="64" width="16" height="16"></rect>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M247.428,24C142.9,24,52.86,96.304,29.452,197.16l-15.16-25.272l-13.72,8.232l28.12,46.856l46.856-28.12l-8.232-13.72
                                        l-21.68,13.008C68.308,105.88,151.276,40,247.428,40c21.016,0,41.752,3.12,61.632,9.28L313.796,34
                                        C292.38,27.36,270.052,24,247.428,24z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M491.54,177.136l-46.856-28.12l-28.112,46.864l13.72,8.232l14-23.336c7.368,21.56,11.136,44.112,11.136,67.224
                                        c0,47.576-16.48,94.088-46.392,130.96l12.424,10.08c32.224-39.712,49.968-89.808,49.968-141.04
                                        c0-24.472-3.944-48.368-11.632-71.248l23.512,14.104L491.54,177.136z"></path>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            </svg>
                    </div>
                    <div class="contact-item-content">
                        <h3 class="title">{{ __("Call us on") }}: {{ $contact->value->phone ?? '' }}</h3>
                        @foreach ($contact->value->schedules ?? [] as $item)
                            <span class="sub-title">{{ __("Our office hours") }} {{ $item->schedule ?? '' }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="contact-widget">
                    <div class="contact-item-icon">
                        <svg version="1.1" id="fi_482138" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M405.333,213.874V106.667c0-23.531-19.135-42.667-42.667-42.667h-320C19.135,64,0,83.135,0,106.667V320
                                        c0,23.531,19.135,42.667,42.667,42.667h239.215C295.858,411.84,341.073,448,394.667,448c20.625,0,40.906-5.427,58.677-15.708
                                        c5.094-2.948,6.844-9.469,3.885-14.573c-2.948-5.104-9.479-6.865-14.573-3.885c-14.521,8.396-31.115,12.833-47.99,12.833
                                        c-52.938,0-96-43.063-96-96s43.063-96,96-96s96,43.063,96,96v10.667c0,11.76-9.573,21.333-21.333,21.333
                                        c-11.76,0-21.333-9.573-21.333-21.333v-42.667c0-5.896-4.771-10.667-10.667-10.667c-2.869,0-5.447,1.161-7.362,3
                                        c-9.428-8.401-21.714-13.667-35.305-13.667c-29.406,0-53.333,23.927-53.333,53.333S365.26,384,394.667,384
                                        c15.896,0,30.03-7.131,39.81-18.202c7.727,10.977,20.44,18.202,34.857,18.202C492.865,384,512,364.865,512,341.333v-10.667
                                        C512,269.569,465.044,219.288,405.333,213.874z M42.667,85.333h320c0.444,0,0.816,0.227,1.254,0.254L211.438,210.75
                                        c-5.427,3.417-13.292,2.708-16.823,0.542L41.426,85.585C41.859,85.559,42.227,85.333,42.667,85.333z M384,213.874
                                        c-59.711,5.414-106.667,55.695-106.667,116.793c0,3.6,0.221,7.148,0.54,10.667H42.667c-11.76,0-21.333-9.573-21.333-21.333
                                        V106.667c0-3.021,0.667-5.874,1.805-8.48l158.883,130.293c6.208,4.052,13.344,6.188,20.646,6.188
                                        c7.021,0,13.885-1.979,19.927-5.729c0.604-0.323,1.177-0.708,1.719-1.156l157.88-129.598c1.139,2.608,1.807,5.461,1.807,8.483
                                        V213.874z M394.667,362.667c-17.646,0-32-14.354-32-32c0-17.646,14.354-32,32-32s32,14.354,32,32
                                        C426.667,348.313,412.313,362.667,394.667,362.667z"></path>
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            </svg>
                    </div>
                    <div class="contact-item-content">
                        <h3 class="title">{{ __("Email us directly") }}</h3>
                        <span class="sub-title">{{ $contact->value->email ?? '' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-section ptb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
                <div class="contact-page-img">
                    <img src="{{ get_image($contact?->value?->image,'site-section') }}" alt="img">
                </div>
            </div>
             <div class="col-lg-6">
                <div class="contact-form-area">
                    <div class="contact-header">
                        <h4>{{ $contact->value->language->$app_local->description ?? '' }}</h4>
                    </div>
                    <form class="contact-form" action="{{ setRoute('contact.request') }}" method="POST">
                        @csrf
                        <div class="row justify-content-center mb-10-none">
                            <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                <label>{{ __("Name") }}<span>*</span></label>
                                <input type="text" name="name" class="form--control" placeholder="{{ __("Enter Name") }}...">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 form-group">
                                <label>{{ __("Email") }}<span>*</span></label>
                                <input type="email" name="email" class="form--control" placeholder="{{ __("Enter Email") }}...">
                            </div>
                            <div class="col-xl-12 col-lg-12 form-group">
                                <label>{{ __("Message") }}<span>*</span></label>
                                <textarea class="form--control" name="message" placeholder="{{ __("Write Here") }}..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" class="btn--base">{{ __("Send Message") }}</button>
                            </div>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection


@push("script")
    
@endpush
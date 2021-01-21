@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/contact_responsive.css">
@endsection

@section('title')
    {{$setting->title}} | Contact
@endsection

@section('content')

    <!-- Contact Info -->

    <div class="contact_info">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 offset-1">
                    {!! $setting->contact !!}
                </div>

                <div class="col-lg-6 offset-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="contact_form_title">İletişim Formu</div>
                            @include('home.message')
                            <form class="forms-sample" action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Subject</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="subject" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Message</label>
                                    <div class="contact_form_text col-sm-9">
                                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                    </div>
                                </div>
                                <div class="contact_form_button">
                                    <button type="submit" class="button contact_submit_button">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

@extends('blog.layout')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('assets/img/contact-bg.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                        as possible!</p>
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" method="POST" action="{{ route('blog.contact_data') }} "
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating">
                                <input id="name" type="text" placeholder="Enter your name..."
                                    data-sb-validations="required"
                                    class="form-control name-field @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" />
                                @error('name')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                                <label for="name">Name</label>
                                {{-- <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div> --}}
                            </div>
                            <div class="form-floating">
                                <input id="email" type="email" placeholder="Enter your email..."
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                                <label for="email">Email address</label>
                                {{-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> --}}
                            </div>
                            <div class="form-floating">
                                <input id="phone" type="tel" placeholder="Enter your phone number..."
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" />
                                @error('phone')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                                <label for="phone">Phone</label>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Image</label>
                                    <input type="file" id="cv"
                                        class="form-control @error('cv') is-invalid @enderror" name="cv"
                                        value="{{ old('cv') }}" />
                                    @error('cv')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-floating">
                                <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem"
                                    @error('massage') is-invalid @enderror" name="massage">{{ old('massage') }}</textarea>
                                @error('massage')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                                <label for="massage">Message</label>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="">Massage:</label>
                                    <textarea id="message" placeholder="Enter your message here..."
                                        class="form-control @error('massage') is-invalid @enderror" name="massage" style="height: 12rem">{{ old('massage') }}</textarea>
                                    @error('massage')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success">Send</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- Footer-->
@endsection

@extends('front.master')
@section('title', 'Əlaqə')
@section('css')
    <style>
        .email a {
            font-size: 18px;
            line-height: 18px;
            gap: 10px;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg + xml,
                %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;);">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Ana Səhifə</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Əlaqə
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-left-wrapper">
                        <div class="contact-heading">Bizimlə əlaqə</div>
                        <ul class="info">
                            <li>
                                <span class="text">
                                    {!! $contact->work_hours !!}
                                </span>
                            </li>
                            <li class="num">
                                <a href="tel:{{ $contact->phone }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001"
                                         style="enable-background: new 0 0 512.001 512.001" xml:space="preserve">
                        <path
                            d="M442.346 338.529c-14.194-14.326-33.11-22.212-53.275-22.212h-.062c-20.186.016-39.115 7.934-53.301 22.297l-30.374 30.753c-72.944-30.572-131.228-88.912-161.758-161.815l31.002-31.39c29.014-29.376 28.757-76.918-.573-105.979L103.173 0H97C43.514 0 0 43.514 0 97c0 56.018 10.975 110.368 32.618 161.541 20.903 49.42 50.824 93.8 88.932 131.908 38.108 38.108 82.489 68.029 131.908 88.932C304.631 501.025 358.982 512 415 512c53.486 0 97-43.514 97.001-97v-6.172l-69.655-70.299zM415 482C202.71 482 30 309.29 30 97c0-34.953 26.901-63.74 61.088-66.741l61.801 61.233c17.598 17.437 17.753 45.962.344 63.588l-44.689 45.249 3.443 9.02c33.281 87.194 102.221 156.694 189.143 190.679l11.605 4.537 44.318-44.871c8.511-8.617 19.868-13.368 31.98-13.378h.037c12.098 0 23.449 4.732 31.965 13.327l60.707 61.269C478.74 455.099 449.953 482 415 482zM437.02 74.982C388.667 26.63 324.38 0 256 0v30c124.617 0 226 101.383 226 226h30c0-68.38-26.629-132.667-74.98-181.018z"></path>
                                        <path
                                            d="M256 90v30c74.991 0 136 61.009 136 136h30c0-91.533-74.467-166-166-166z"></path>
                      </svg>
                                    {{ $contact->phone }}
                                </a>
                            </li>
                            <li class="email">
                                <a href="mailto:{{ $contact->email }}" class="text-decoration-none fw-bold d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"
                                         fill="#15a9e3" style="enable-background: new 0 0 512 512" xml:space="preserve">
                            <path
                                d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/>
                        </svg>
                                    {{ $contact->email }}
                                </a>
                            </li>
                            <li>
                                <div class="address">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         style="enable-background: new 0 0 512 512" xml:space="preserve">
                        <path
                            d="M256 0C153.755 0 70.573 83.182 70.573 185.426c0 126.888 165.939 313.167 173.004 321.035 6.636 7.391 18.222 7.378 24.846 0 7.065-7.868 173.004-194.147 173.004-321.035C441.425 83.182 358.244 0 256 0zm0 469.729c-55.847-66.338-152.035-197.217-152.035-284.301 0-83.834 68.202-152.036 152.035-152.036s152.035 68.202 152.035 152.035C408.034 272.515 311.861 403.37 256 469.729z"></path>
                                        <path
                                            d="M256 92.134c-51.442 0-93.292 41.851-93.292 93.293S204.559 278.72 256 278.72s93.291-41.851 93.291-93.293S307.441 92.134 256 92.134zm0 153.194c-33.03 0-59.9-26.871-59.9-59.901s26.871-59.901 59.9-59.901 59.9 26.871 59.9 59.901-26.871 59.901-59.9 59.901z"></path>
                      </svg>
                                    {{ $contact->address }}
                                </div>
                            </li>

                        </ul>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.006934170329!2d49.858509112188635!3d40.4086971713218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d56dfaccdb9%3A0xe0d193e42c9ced95!2zMyBBxZ_EsXEgTW9sbGEgQ8O8bcmZLCBCYWvEsQ!5e0!3m2!1saz!2saz!4v1718020245763!5m2!1saz!2saz"
                            width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="contact-right-wrapper">
                        <div class="contact-heading">Bizə yazın</div>
                        <div class="d-sm-flex justify-content-between">
                            <div class="text w-70 mb-2">
                                Got any problems with purchase? Wanna ask for a piece of advice or leave a suggestion?
                                Don’t hesitate and write to our Email!
                            </div>
                            <ul class="social-icons mb-2">
                                <li>
                                    <a href="{{ $contact->facebook }}">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $contact->instagram }}">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $contact->whatsapp }}">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <form method="POST">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input type="text" id="name" name="name"/>
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="email">Your email</label>
                                <input type="email" id="email" name="email"/>
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject"/>
                            </div>
                            @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="message">Your message</label>
                                <textarea rows="12" id="message" name="message"></textarea>
                            </div>
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button class="submit-btn" type="submit">göndər</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

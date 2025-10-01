<!-- Call To Action Section Starts -->
        <section id="contact" class="call-to-action">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                     <!-- Main Heading Starts -->
        <div class="text-center top-text">
            <h1><span>{{ __('common.contact.title') }}</span></h1>
            <h4>{{ __('common.contact.subtitle') }}</h4>
        </div>
        <!-- Main Heading Ends -->
        <!-- Divider Starts -->
        <div class="divider text-center">
            <span class="outer-line"></span>
            <span class="fa fa-envelope-o" aria-hidden="true"></span>
            <span class="outer-line"></span>
        </div>
        <!-- Divider Ends -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('contact.send') }}" method="POST" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">{{ __('common.contact.name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name') }}"
                                       placeholder="{{ __('common.contact.name_placeholder') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">{{ __('common.contact.phone') }}</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                       id="phone" name="phone" value="{{ old('phone') }}"
                                       placeholder="{{ __('common.contact.phone_placeholder') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('common.contact.email') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               id="email" name="email" value="{{ old('email') }}"
                               placeholder="{{ __('common.contact.email_placeholder') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">{{ __('common.contact.message') }}</label>
                        <textarea class="form-control @error('message') is-invalid @enderror"
                                  id="message" name="message" rows="5"
                                  placeholder="{{ __('common.contact.message_placeholder') }}">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="custom-button">
                            {{ __('common.contact.submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
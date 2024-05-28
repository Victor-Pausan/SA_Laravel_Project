@extends('layouts/app')

@vite(['resources/css/contact.css'])

@section('content')
<section class="sec-1 py-5">
    <div class="container">
      <div class="row">
        <div class="main-content col-5">
          <h1>CONTACT US</h1>
        </div>
        <div class="contact-text col">
          <h2>Email</h2>
          <p>anchorathletics@iron.com</p>
          <br>
          <h2>Address</h2>
          <p>16 Lakeview Rd, Boothbay Harbor, ME, 04538</p>
          <br>
          <h2>Facebook</h2>
          <p>Iron Anchor Athletics</p>
          <br>
          <h2>Instagram</h2>
          <p>@ironanchorath</p>
          <br>
          <h2>Call Us</h2>
          <p>+1 (207) 401 1908</p>
          <br>
          <h2>Sponsors</h2>
          <a href="https://gsdgroup.net/" class="link-secondary link-offset-2 link-underline link-underline-opacity-50" target="_blank">GSD</a>
          <a href="http://www.csac.ro" class="link-secondary link-offset-2 link-underline link-underline-opacity-50" target="_blank">CSAC</a>
          <a href="https://scanstart.ro/" class="link-secondary link-offset-2 link-underline link-underline-opacity-50" target="_blank">Scanstart</a>
          <a href="https://graffino.com/" class="link-secondary link-offset-2 link-underline link-underline-opacity-50" target="_blank">Graffino</a>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-2">
    <div class="container">
      <div class="row">
        <div class="form-title col-5">
          <h1>SUBMIT A QUESTION</h1>
        </div>
        <div class="col">
          <form id="form" class="contact-form" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="first-name form-floating mb-3">
              <input type="text" id="first-name" name="first-name" class="form-control @error('first-name') is-invalid @enderror" value="{{ old('first-name') }}">
                @error('first-name')
                <div id="first-name-error" class="error-message">{{ $message }}</div>
                @enderror
              <label for="first-name" id="first-name-label">First Name:</label>
            </div>

            <div class="last-name form-floating mb-3">
              <input type="text" id="last-name" name="last-name" class="form-control @error('last-name') is-invalid @enderror" value="{{ old('last-name') }}">
                @error('last-name')
                <div id="last-name-error" class="error-message">{{ $message }}</div>
                @enderror
              <label for="last-name" id="last-name-label">Last Name:</label>
            </div>

            <div class="email form-floating mb-3">
              <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                <div id="email-error" class="error-message">{{ $message }}</div>
                @enderror

              <label for="email" id="email-label">Email Address:</label>
            </div>

            <div class="subject form-floating mb-3">
              <input type="text" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                @error('subject')
                <div id="subject-error" class="error-message">{{ $message }}</div>
                @enderror
              <label for="subject" id="subject-label">Subject:</label>
            </div>

            <div class="message form-floating mb-3">
              <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                @error('message')
                <div id="message-error" class="error-message">{{ $message }}</div>
                @enderror
              <label for="message" id="message-label">Message:</label>
            </div>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-3">
    <div class="container">
      <div class="row">
        <div class="mailing-address col-5">
          <h1>MAILING ADRESS</h1>
        </div>
        <div class="map col">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.140104702882!2d-69.64560042391108!3d43.85292467109335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cad98e229b289ef%3A0x8b60318191192084!2s16%20Lakeview%20Rd%2C%20Boothbay%20Harbor%2C%20ME%2004538%2C%20Statele%20Unite%20ale%20Americii!5e0!3m2!1sro!2sro!4v1706900766848!5m2!1sro!2sro"
            height="500" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection
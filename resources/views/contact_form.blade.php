<!DOCTYPE html>
<html>

<head>
  <link href="{{ asset('css/contact_form.css') }}" rel="stylesheet">
  <title>Contact Form</title>
</head>

<body>
  <div class="contact-form">
    <h1>Contact us</h1>
    <form action="/contact-form" method="POST">
      <!-- Blade syntax: Is a directive that is used to generate a
     CSRF (cross-site request forgery) token field in the form. 
     This field is used to protect the form from cross-site 
     request forgery attacks.

     Laravel automatically adds a hidden input field containing a
     token.This token is used to verify that the authenticated 
     user is the one actually making the requests to the application.
    -->
      @csrf

      <div class="name-fields">
        <div>
          <label class="field-label" for="first_name">First name</label>
          <input class="text-field" type="text" id="first_name" name="first_name" maxlength="50" placeholder="Enter your first name">
        </div>
        <div class="last-name-field">
          <label class="field-label" for="last_name">Last name</label>
          <input class="text-field" type="text" id="last_name" name="last_name" maxlength="50" placeholder="Enter you last name"><br><br>
        </div>


      </div>

      <label class="field-label" for="email">Email</label><br>
      <input class="text-field" type="email" id="email" name="email" maxlength="50" placeholder="Enter your email"><br>
      <span>example@example.com</span><br><br>
      <label class="field-label" for="subject">Subject</label><br>
      <input class="text-field" type="text" id="subject" name="subject" size=53 maxlength="100" placeholder="Enter the subject of your message"> <br><br>
      <label class="field-label" for="message">Message</label><br>
      <textarea class="text-field" id="message" name="message" rows="10" cols="53" maxlength="16535" placeholder="Enter your message here. Be as detailed as possible."></textarea><br><br>
      @if (session('success'))
      <div class="alert-success">
        {{ session('success') }}
      </div>
      @endif
      <input id="submit" type="submit" value="Submit" style="color: blue">

    </form>


  </div>
</body>

</html>
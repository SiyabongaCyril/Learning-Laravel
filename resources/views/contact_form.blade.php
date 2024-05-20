<!DOCTYPE html>
<html>
<head>
  <style>
    .alert-success {
      color: green;
    }
  </style>
  <title>Contact Form</title>
</head>
<body>
  <div style="padding-left: 10px">
  <h1 style="color: blue">Contact us</h1>
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
    <label for="first_name">First name:</label><br>
    <input type="text" id="first_name" name="first_name" maxlength="50"><br><br>
    <label for="last_name">Last name:</label><br>
    <input type="text" id="last_name" name="last_name" maxlength="50"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" maxlength="50"><br><br>
    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject" size=53 maxlength="100"> <br><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="10" cols="50" maxlength="165353"></textarea><br><br>
    @if (session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
     @endif
    <input type="submit" value="Submit" style="color: blue">
    
  </form>

 
  </div>
</body>
</html>
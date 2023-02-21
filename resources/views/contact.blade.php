@extends('master')
@section('content')

<section id="page-header" class="article-header">
    <h1 style="color: rgb(204, 80, 80)">RUNWAY </h1>
    <h3>Make your fashion like runway in your way</h3>
</section>
<section id="contact-det" class="sec-1">
    <div class="dets">
        <span>KEEP IN TOUCH</span>
        <h2>visit one of our agency locations or contact us</h2>
        <h3>head office</h3>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>hamra street//damascus</p>
            </li>
            <li>
                <i class="far fa-envelope"></i>
                <p>contact@gmail.com</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>+963---------------------</p>
            </li>
            <li>
                <i class="far fa-clock"></i>
                <p>sunday to  thursday 8:00am to 16:00pm </p>
            </li>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.305443940318!2d36.28884735086167!3d33.519443380659816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518e730c2453175%3A0x3b0c919d09a62fc4!2sAl%20Hamra%20Street%2C%20Damascus%2C%20Syria!5e0!3m2!1sen!2s!4v1655632476643!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<section id="form-det">
    <form action="/add_message" method="POST">
        {{ csrf_field() }}
        <span>LEAVE YOUR MESSAGE</span>
        <h2>love to hear your opinion</h2>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
        </div>
        <div class="mb-3">
            <input type="text" name="message" class="form-control" id="message" placeholder="Let's have a talk">
        </div>
        <div class="mb-3">
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="mb-3">
            <label for="type">Type of message:</label>
            <select name="type" id="type">
              <option value="complaint">complaint</option>
              <option value="suggestion">suggestion</option>
              <option value="message">message</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
</section>

@endsection
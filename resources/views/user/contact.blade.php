@extends('layouts.headerfooter')

@section('header-foot')
<!-- contact section -->
<section class="contact_section ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="img-box">
                    <img src="theme/images/contact-img.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
                    <div class="heading_container">
                        <h2>
                            Contact Us
                        </h2>
                    </div>
                    @if(session("Message"))
                    <br>
                    <br>
                        <div class="alert alert-success ">
                        
                      
                            <h3 class="text display-3 text-center text-dark ">We Will be answering You Later!</h3>
                        </div>
                        @endif
                    <form action="{{ url('/insert') }}" method="post" id="contactForm">
                        @csrf
                        <br><br>
                        
                        <div>
                            <input class="forminput" type="text" name="contactname" placeholder=" Enter Your Name"
                                required />
                        </div>
                        <div>
                            <input type="email" name="contactemail" placeholder=" Enter Your Email" required />
                        </div>
                        <div>
                            <input type="text" name="contactphonenumber" placeholder=" Enter Your Phone Number"
                                required />
                        </div>
                        <div>
                            <input type="text" class="message-box" name="contactmessage"
                                placeholder="Enter Your Message" required />
                        </div>
                        <div class="d-flex ">
                            <button type="submit" id="submitButton">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->

<!-- info section -->
<section class="info_section layout_padding2">
    <div class="container">
        <div class="info_items">
            <a href="">
                <div class="item ">
                    <div class="img-box box-1">
                        <img src="" alt="">
                    </div>
                    <div class="detail-box">
                        <p>
                            Location
                        </p>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="item ">
                    <div class="img-box box-2">
                        <img src="" alt="">
                    </div>
                    <div class="detail-box">
                        <p>
                            +02 1234567890
                        </p>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="item ">
                    <div class="img-box box-3">
                        <img src="" alt="">
                    </div>
                    <div class="detail-box">
                        <p>
                            demo@gmail.com
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- end info_section -->
<!-- ... (previous HTML code) ... -->

@if(session("Message"))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Hide the form and submit button
            document.getElementById('contactForm').style.display = 'none';
            document.getElementById('submitButton').disabled = true;

            // Display a beautiful message
            var messageContainer = document.createElement('div');
            messageContainer.className = 'alert alert-info text-dark';
            messageContainer.innerHTML = '<h3 class="display1">We will contact you very soon!</h3>';
            document.getElementById('contactForm').appendChild(messageContainer);

            // Set a timeout to show the form after 30 seconds
            setTimeout(function () {
                document.getElementById('contactForm').style.display = 'block';
                document.getElementById('submitButton').disabled = false;

                // Remove the beautiful message after 30 seconds
                document.getElementById('contactForm').removeChild(messageContainer);
            }, 30000);
        });
    </script>
@endif

<!-- ... (remaining HTML code) ... -->


@endsection

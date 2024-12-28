<x-web-layout title="Contact - Glowera">
    <style>
        .bg-img {
            background-image: url('path/to/your/background-image.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .c-page {
            padding: 60px 0;
        }
        .form-heading {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            color: #e91e63;
        }
        .form-subheading {
            font-family: 'Arial', sans-serif;
            color: #f8bbd0;
        }
        .form-style {
            background-color: #f7e1ea;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-label {
            font-family: 'Arial', sans-serif;
            color: #e91e63;
        }
        .login-input {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #e91e63;
        }
        .login-btn {
            background-color: #e91e63;
            color: white;
            border-radius: 8px;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
        }
        .login-btn:hover {
            background-color: #d81b60;
        }
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            border-radius: 50%;
            padding: 15px;
            font-size: 30px;
            color: white;
        }
        .whatsapp-float:hover {
            background-color: #128C7E;
        }
    </style>

    <div class="container-fluid c-page bg-img">
        <div class="row">
            <div class="text-center pt-16 md:pt-0">
                <h1 class="form-heading pt-1">Contact Us</h1>
                <h3 class="form-subheading pt-1">Feel Free To Ask</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <form class="form-style mt-4" id="myForm">
                        <label for="email" class="form-label login-label mt-1 h5">Enter Your Email:</label>
                        <input type="email" class="form-control login-input mt-1" id="email" required>

                        <label for="query" class="form-label login-label mt-1 h5">Your Query:</label>
                        <textarea class="form-control mt-1" id="query" rows="4" required></textarea>

                        <div class="text-center">
                            <button class="btn login-btn mt-4" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <a href="https://wa.me/YOUR_NUMBER" target="_blank" class="whatsapp-float" title="Chat with us on WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</x-web-layout>

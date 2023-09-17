@extends('app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <header>
    <nav>
        <div class="logo">
            <a href="{{ route('home') }}">Cool Tech</a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('search') }}">Search</a></li> <!-- Add this line for the Search page -->
            <li><a href="{{ route('legal') }}">Legal</a></li> <!-- Add this line for the Legal page -->
            <!-- Add links for other pages as needed -->
        </ul>
    </nav>
</header>

</head>
@section('content')
<body>
    <h1>Terms of Use</h1>
    <p>Welcome to Cool Tech!</p>

<p>By accessing this website, you agree to comply with and be bound by the following terms and conditions of use. If you disagree with any part of these terms and conditions, please do not use our website.</p>

<h2>Use of Website</h2>

<p>This website is for general information and entertainment purposes only. It is subject to change without notice.</p>

<h2>Intellectual Property</h2>

<p>The content, design, and graphics on this website are owned or licensed to us and are protected by intellectual property laws. You may not reproduce, republish, distribute, or use our content without our express written permission.</p>
</p>

    <h1>Privacy Policy</h1>
    <p>Your privacy is important to us. This Privacy Policy outlines how Cool Tech collects, uses, and protects your personal information when you use our website.</p>

<h2>Information We Collect</h2>

<p>We may collect the following information:</p>

<ul>
    <li>Your name</li>
    <li>Contact information including email address</li>
    <li>Demographic information such as postcode, preferences, and interests</li>
    <li>Other information relevant to customer surveys and/or offers</li>
</ul>

<h2>How We Use Your Information</h2>

<p>We use your information to:</p>

<ul>
    <li>Improve our products and services</li>
    <li>Send promotional emails about new products, special offers, or other information we think you may find interesting</li>
    <li>Customize the website according to your interests</li>
</ul>

<h2>Security</h2>

<p>We are committed to ensuring that your information is secure. We have implemented suitable physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</p>

<h2>Links to Other Websites</h2>

<p>Our website may contain links to other websites. However, once you have used these links to leave our site, you should note that we do not have any control over other websites. Therefore, we cannot be responsible for the protection and privacy of any information that you provide while visiting such sites.</p></p>
</body>
@endsection
</html>
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->
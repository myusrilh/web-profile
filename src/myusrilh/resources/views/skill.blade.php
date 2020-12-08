@extends('master')

@section('judul_halaman', 'Kemampuan')

@section('konten')

    <div class="skill-container">
        <h2 style="text-align: center; color: #80b8ff; padding-bottom: 30px;">Kemampuan yang dikuasai</h2>
        <ol>
            <li>
                <p>Android Development</p>
            </li>
            <li>
                <p>Fullstack Web Development</p>
            </li>
            <li>
                <p>Logo Design</p>
            </li>
            <li>
                <p>UI/UX Design</p>
            </li>
        </ol>
    </div>

    <div class="scroll">
        <h3>Scroll</h3>
        <i class="fa fa-arrow-circle-down"></i>
    </div>

    <div class="software-container">
        <h3 style="padding:15px;margin-top:50px; background:#FFFFFF40;color:#000000;border-radius:10px;display:inline-block;">Bahasa pemrograman dan Software design yang dikuasai</h3>
        
        <hr style="border: 1px solid #ffffff30">
        
        <div id="programming-container" class="software">
            <h2 style="text-align: center; color: #fff; padding-bottom: 30px;">Programming</h2>
            <ul>
                <li class="programming-logo">
                    <img title="HTML CSS and JavaScript" src="{{ URL::to('/') }}/images/html-css-js.png" width="250"
                        alt="html-css-js logo">
                </li>
                <li class="programming-logo">
                    <img title="PHP" src="{{ URL::to('/') }}/images/php.png" width="130" alt="php logo">
                </li>
                <li class="programming-logo">
                    <img title="Java" src="{{ URL::to('/') }}/images/java_logo.png" width="150" alt="java logo">
                </li>
            </ul>
        </div>

        <hr style="border: 1px solid #ffffff30">

        <div id="design-container" class="software">
            <h2 style="text-align: center; color: #fff; padding-bottom: 30px;">Design</h2>
            <ul>
                <li class="design-logo">
                    <img title="Photoshop" src="{{ URL::to('/') }}/images/photoshop.png" width="100" alt="photoshop">
                </li>
                <li class="design-logo">
                    <img title="GIMP" src="{{ URL::to('/') }}/images/gimp.png" width="130" alt="gimp">
                </li>
                <li class="design-logo">
                    <img title="Figma" src="{{ URL::to('/') }}/images/figma-logo.png" width="150" alt="figma-logo">
                </li>
                <li class="design-logo">
                    <img title="Inkscape" src="{{ URL::to('/') }}/images/inkscape-icon.png" width="120" alt="inkscape-icon">
                </li>
            </ul>
        </div>
    </div>

@endsection

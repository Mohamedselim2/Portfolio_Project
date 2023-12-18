<?php
use App\Http\Controllers\UserController;
$user_controller = new UserController();
$facebook= $user_controller->facebook_link();
$linkedin= $user_controller->linkedin_link();
$github= $user_controller->github_link();
$link= $user_controller->link();
$gmail= $user_controller->gmail_link();

?>
<footer class="page-footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <p> Developed By <script></script> &copy; <a title="Linkedin" target="_blank" href="https://www.linkedin.com/in/meemseen/">Mohamed Selim</a></p>
            </div>
            <div class="col-sm-6">
                <div class="socials">
                    <a class="social-item" title="Facebook" target="_blank" href="{{$facebook}}"><i class="ti-facebook"></i></a>
                    <a class="social-item" title="Linkedin" target="_blank" href="{{$linkedin}}"><i class="ti-linkedin"></i></a>
                    <a class="social-item" title="Github" target="_blank" href="{{$github}}"><i class="ti-github"></i></a>
                    <a class="social-item" title="Codeforces" target="_blank"  href="{{$link}}"><i class="ti-link"></i></a>
                    <a class="social-item" title="Gmail" target="_blank"  href="mailto:{{$gmail}}"><i class="ti-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

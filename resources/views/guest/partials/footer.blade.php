
 <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="{{ $setting->facebook }}">Facebook</a></li>
                    <li><a href="{{ $setting->twitter }}">Twitter</a></li>
                    <li><a href="{{ $setting->googleplus }}">googleplus</a></li>
                    <li><a href="{{ $setting->instagram }}">Instagram</a></li>
                    <li><a href="{{ $setting->linkedin }}">Linkedin</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>{{ $setting->copyright }} © {{ date("Y")}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

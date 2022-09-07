    <!-- Section Footer -->

    <section class="section-footer">
        <div class="texture-handler-top"></div>
        <div class="row">
            <div class="col-left">
                <img src="{{ asset('img/logo-unitama.png') }}" alt="logo unitama" width="100">
                <p>Made with <i class="fas fa-heart red"></i> by Nensi</p>
                <p>Copyright &copy; 2022</p>
                <p>Jl. bung, makassar <br> Phone : +62 851 2343 9090 <br> Email : nensi@mail.com </p>
                <a href="https://www.facebook.com/besttoraja/" target="_blank"><span class="ion-social-facebook icon-social"></span></a>
                <a href="https://www.instagram.com/exploretoraja/" target="_blank"><span class="ion-social-instagram icon-social"></span></a>
                <a href="https://twitter.com/hashtag/exploretoraja?lang=en" target="_blank"><span class="ion-social-twitter icon-social"></span></a>
            </div>
            <div class="col-right">
                <b>EXPERIENCE</b>
                <ul>
                    <li><a href="#">Natural</a></li>
                    <li><a href="#">Culture</a></li>
                    <li><a href="#">Religi</a></li>
                    <li><a href="#">Culnary</a></li>
                    <li><a href="#">Adventure</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>TRAVEL GUIDE</b>
                <ul>
                    <li><a href="#">Tourism Guide</a></li>
                    <li><a href="#">Travel Agent</a></li>
                    <li><a href="#">Accomodations</a></li>
                    <li><a href="#">On Budget</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>WHAT'S HAPPEN</b>
                <ul>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Tips & Info</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Created With <span class="fas fa-heart red"></span> to toraja's people</p>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/home/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/home/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/home/swipe.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.0.2/esm/ionicons.min.js" integrity="sha512-qFRjtFs1SsmZHbyvBqGiM8idmNed7AmDUkHHhRSR6JD1sSmv7HsQtdVeQ2jVuTCzcstSIcd+l/2DlGEl58dMRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script>
    $('.btn-login').on('click',function(){
        document.location.href = $(this).data('path');
    })
</script>

</html>

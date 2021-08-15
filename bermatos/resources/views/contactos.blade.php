@include('components.head')
<body>
<header>
    <!DOCTYPE html>
    <link href="{{ asset('css/contactos.css') }}" rel="stylesheet">

</header>
<main>
    @include('components.nav')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well well-sm">
                    <!--<form class="" method="post">-->
                        <fieldset>
                            <legend class="text-xs-center header">Contacte-nos!</legend>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <input id="fname" name="name" type="text" placeholder="Primeiro Nome"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <input id="lname" name="name" type="text" placeholder="Sobrenome"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <input id="phone" name="phone" type="text" placeholder="Telefone"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <textarea class="form-control" id="message" name="message"
                                              placeholder="A sua mensagem." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-xs-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submeter</button>
                                </div>
                            </div>
                        </fieldset>
                    <!--</form>-->
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="text-xs-center header">Localização</div>
                    <div class="card-block text-xs-center">
                        <div><br>
                            <h4>Morada</h4>
                            Avenida São Salvador 1162<br>
                            4415-943 Seixezelo<br><br>
                            <h4>Contactos</h4>
                            bermatos@sapo.pt<br/>
                            Telefone: 227447175<br><br>
                        </div>
                        <hr/>
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            function init_map1() {
                var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
                var mapOptions = {
                    center: myLocation,
                    zoom: 16
                };
                var marker = new google.maps.Marker({
                    position: myLocation,
                    title: "Property Location"
                });
                var map = new google.maps.Map(document.getElementById("map1"),
                    mapOptions);
                marker.setMap(map);
            }

            init_map1();
        });
    </script>

    @include('components.footer')

</main>
</body>

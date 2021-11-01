<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="description" content="">
    <link href="{{ asset('css/contactos.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Contactos Bermatos</title>
</head>
<body>
@include('components.nav')
<main>
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
                let myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
                const mapOptions = {
                    center: myLocation,
                    zoom: 16
                };
                let marker = new google.maps.Marker({
                    position: myLocation,
                    title: "Property Location"
                });
                let map = new google.maps.Map(document.getElementById("map1"),
                    mapOptions);
                marker.setMap(map);
            }

            init_map1();
        });
    </script>

    <div id="mymap"></div>


    <script type="text/javascript">


        var locations = <?php print_r(json_encode($locations)) ?>;


        class GMaps {
            constructor(param) {
                
            }

        }

        var mymap = new GMaps({

            el: '#mymap',

            lat: 21.170240,

            lng: 72.831061,

            zoom: 6

        });


        $.each(locations, function (index, value) {

            mymap.addMarker({

                lat: value.lat,

                lng: value.lng,

                title: value.city,

                click: function (e) {

                    alert('This is ' + value.city + ', gujarat from India.');

                }

            });

        });


    </script>
</main>
@include('components.footer')
</body>

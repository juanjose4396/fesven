
@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

    <div class="contenedor">
        <h2>Información general</h2>
        <p>Ingrese a continuación los detalles generales del evento.</p>
        <form class="form-horizontal" role="form" method="POST"
              action="{{ route('admin.eventos.store') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="comp-form">
                <label for="nombre_del_evento">Nombre del evento:</label>
                <span class="obligatorio">*</span>
                <input name="nombre" type="text" placeholder="Ingresa el nombre del evento" id="nombre_del_evento" class="form-control">
            </div>
            <hr>
            <div class="comp-form">
                <label for="tipo_de_evento">Tipo de evento:</label>
                <span class="obligatorio">*</span>
                <select name="tipo_de_evento" id="tipo_de_evento" class="form-control">
                    @foreach($tipos as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>

                        @endforeach
                </select>
            </div>
            <hr>
            <div class="comp-form">
                <label for="fecha_del_evento">Fecha del evento:</label>
                <span class="obligatorio">*</span>
                <div class="fecha-del-evento-inner inicia">
                    <span class="fecha-inner">Inicia el:</span>
                    <input type="date" id="fecha_del_evento" name="fecha_inicio" class="form-control elegir-fecha">
                </div>
                <div class="fecha-del-evento-inner termina">
                    <span class="fecha-inner">Termina el:</span>
                    <input type="date" id="fecha_del_evento"name="fecha_fin" class="form-control elegir-fecha">
                </div>
            </div>
            <hr>
            <div class="comp-form">
                <div id="locationField">
                    <label for="autocomplete">Ubicación del evento:</label>
                    <span class="obligatorio">*</span>
                    <input id="autocomplete" placeholder="Ingresa la ubicación" onFocus="geolocate()" type="text" class="form-control">
                </div>
            </div>
            <hr>
            <div class="comp-form">
                <label for="direccion_del_evento">Dirección del evento:</label>
                <span class="obligatorio">*</span>
                <input type="text"name="direccion" placeholder="Ingresa la dirección del evento" id="direccion_del_evento" class="form-control">
            </div>
            <hr>
            <div class="comp-form">
                <label for="descripcion_del_evento">Descripción del evento:</label>
                <span class="obligatorio">*</span>
                <textarea name="descripcion_corta" id="descripcion_del_evento" placeholder="Describe tu evento" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <hr>
            <div class="comp-form">
                <label for="portada_del_evento">Portada del evento:</label>
                <span class="obligatorio">*</span>
                <div class="agregue-portada">
                    <p class="mensaje-portada">Agregue una portada para el evento. Ésta debe ser de 250*90 px en formato .jpg o .png
                    </p>
                </div>
                <input type="file" id="portada_del_evento" name="portada" class="form-control">
            </div>
            <hr>
            <div class="comp-form cont-btn">
                <div class="cont-cancelar">
                    <button class="btn btn-danger">Cancelar</button>
                </div>
                <div class="cont-guardar">
                    <input type="submit" class="btn btn-primary" value="Guardar y continuar">
                </div>
            </div>
            <table id="address" style="display:none;" >
                <tr>
                    <td class="label">Street address</td>
                    <td class="slimField"><input class="field" id="street_number"
                                                 disabled="true"></input></td>
                    <td class="wideField" colspan="2"><input class="field" id="route"
                                                             disabled="true"></input></td>
                </tr>
                <tr>
                    <td class="label">City</td>
                    <!-- Note: Selection of address components in this example is typical.
                        You may need to adjust it for the locations relevant to your app. See
                        https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
                    -->
                    <td class="wideField" colspan="3"><input class="field" id="locality" name="ciudad"
                                                             disabled="true"></input></td>
                </tr>
                <tr>
                    <td class="label">State</td>
                    <td class="slimField"><input class="field" name="estado"
                                                 id="administrative_area_level_1" disabled="true"></input></td>
                    <td class="label">Zip code</td>
                    <td class="wideField"><input class="field" id="postal_code"
                                                 disabled="true"></input></td>
                </tr>
                <tr>
                    <td class="label">Country</td>
                    <td class="wideField" colspan="3"><input class="field" name="pais"
                                                             id="country" disabled="true"></input></td>
                </tr>
            </table>
        </form>

    </div>

    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    console.log(addressType);
                    console.log(val);
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2ldQ8piJfVteOOpQTvaCNQMal0coYCM&libraries=places&callback=initAutocomplete"
            async defer></script>

@endsection
@include ('footer')
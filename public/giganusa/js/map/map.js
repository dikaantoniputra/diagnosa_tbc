(function ($) {
    "use strict";
    var markerIcon = {
        anchor: new google.maps.Point(22, 16),
        url: 'giganusa/img/marker.png',
    }

    function mainMap() {
        function locationData(locationURL, locationImg, companylocationURL, jobname, companyname, sallery, joblocation, jobtypeclass, jobtype, joblocationURL) {
            return ('<div class="map-popup-wrap"><div class="map-popup"><div class="infoBox-close"><i class="fa fa-times"></i></div><div class="map-job-box"><div class="job-title"><img src="' + locationImg + '" alt=""/><a href="' + locationURL + '">' + jobname + '</a></div><div class="job-company"><i class="fa-solid fa-briefcase"></i><a href="' + companylocationURL + '">' + companyname + '</a></div><div class="job-package"><i class="fa-solid fa-wallet"></i><span>' + sallery + '</span></div><div class="job-location"><i class="fa-solid fa-location-dot"></i><a href="' + joblocationURL + '">' + joblocation + '</a></div><div class="job-status"><div class="job-map-status"><a href="#" class="jb-name ' + jobtypeclass + '">' + jobtype + '</a></div><a href="#" class="jb-like"><i class="fa-solid fa-heart"></i></a></div></div></div></div>')
        }
        var locations = [
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Jr. PHP Developer', 'Tripadvisor', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.72956781, -73.99726866, 0, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Exp. Project manager', 'Pinterest', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.76221766, -73.96511769, 1, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Sr. WordPress Developer', 'Shopify', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.88496706, -73.88191222, 2, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Jr. Laravel Developer', 'Photoshop', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.72228267, -73.99246214, 3, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Sr. UI/UX Designer', 'Dreezoo', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.94982541, -73.84357452, 4, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Java & Python Developer', 'Firefox', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.90261483, -74.15737152, 5, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Sr. Code Ignetor Developer', 'Dribbble', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.79145927, -74.08252716, 6, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Sr. Magento Developer', 'Instagram', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.58423508, -73.96099091, 7, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'New Shopify Developer', 'Skype', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.58110616, -73.97678375, 8, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Expert Team Leader', 'Megroo Soft', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.73112881, -74.07897948, 9, markerIcon],
            [locationData('job-detail-1.html', 'https://placehold.co/250x250', 'employer-detail.html', 'Front-end Developer', 'BootstrapWire', '$2000 - $3500', '302 Blue Market, CA', 'full-time', 'Full Time', '#'), 40.67386831, -74.10438536, 10, markerIcon],
        ];

        var map = new google.maps.Map(document.getElementById('map-main'), {
            zoom: 9,
            scrollwheel: false,
            center: new google.maps.LatLng(40.7, -73.87),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            fullscreenControl: true,
            navigationControl: false,
            streetViewControl: false,
            animation: google.maps.Animation.BOUNCE,
            gestureHandling: 'cooperative',
            styles: [{
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#444444"
                }]
            }]
        });


        var boxText = document.createElement("div");
        boxText.className = 'map-box'
        var currentInfobox;
        var boxOptions = {
            content: boxText,
            disableAutoPan: true,
            alignBottom: true,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-145, -45),
            zIndex: null,
            boxStyle: {
                width: "260px"
            },
            closeBoxMargin: "0",
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false,
        };
        var markerCluster, marker, i;
        var allMarkers = [];
        var clusterStyles = [{
            textColor: 'white',
            url: '',
            height: 50,
            width: 50
        }];


        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: locations[i][4],
                id: i
            });
            allMarkers.push(marker);
            var ib = new InfoBox();
            
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    ib.setOptions(boxOptions);
                    boxText.innerHTML = locations[i][0];
                    ib.close();
                    ib.open(map, marker);
                    currentInfobox = marker.id;
                    var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                    map.panTo(latLng);
                    map.panBy(0, -180);
                    google.maps.event.addListener(ib, 'domready', function () {
                        $('.infoBox-close').click(function (e) {
                            e.preventDefault();
                            ib.close();
                        });
                    });
                }
            })(marker, i));
        }
        var options = {
            imagePath: 'img/',
            styles: clusterStyles,
            minClusterSize: 2
        };
        markerCluster = new MarkerClusterer(map, allMarkers, options);
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });

        $('.nextmap-nav').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            if (index + 1 < allMarkers.length) {
                google.maps.event.trigger(allMarkers[index + 1], 'click');
            } else {
                google.maps.event.trigger(allMarkers[0], 'click');
            }
        });
        $('.prevmap-nav').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            if (typeof (currentInfobox) == "undefined") {
                google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
            } else {
                var index = currentInfobox;
                if (index - 1 < 0) {
                    google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
                } else {
                    google.maps.event.trigger(allMarkers[index - 1], 'click');
                }
            }
        });
        $('.map-item').click(function (e) {
            e.preventDefault();
     		map.setZoom(15);
            var index = currentInfobox;
            var marker_index = parseInt($(this).attr('href').split('#')[1], 10);
            google.maps.event.trigger(allMarkers[marker_index], "click");
			if ($(this).hasClass("scroll-top-map")){
			  $('html, body').animate({
				scrollTop: $(".map-container").offset().top+ "-80px"
			  }, 500)
			}
			else if ($(window).width()<1064){
			  $('html, body').animate({
				scrollTop: $(".map-container").offset().top+ "-80px"
			  }, 500)
			}
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, map);

        function ZoomControl(controlDiv, map) {
            zoomControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "mapzoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "mapzoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function () {
                map.setZoom(map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function () {
                map.setZoom(map.getZoom() - 1);
            });
        }


    }
    var map = document.getElementById('map-main');
    if (typeof (map) != 'undefined' && map != null) {
        google.maps.event.addDomListener(window, 'load', mainMap);
    }

})(this.jQuery);
$(document).ready(function() {

	var stylesArray = [

		{
			featureType: "all",
			stylers: [
				{color: "#65a7d8"},
				{saturation: -80},
				{visibility: "simplified"}
			]
		},{
			featureType: "all",
			elementType: "labels",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "poi",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "road",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "road.highway",
			stylers: [
				{visibility: "on"},
				{color: "#fb6349"},
				{saturation: 30}
			]
		},{
			featureType: "road.highway",
			elementType: "labels",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "road.arterial",
			stylers: [
				{visibility: "on"},
				{color: "#fb6349"},
				{saturation: 30}
			]
		},{
			featureType: "road.arterial",
			elementType: "labels",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "transit",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "administrative",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "administrative.locality",
			elementType: "labels",
			stylers: [
				{visibility: "on"}
			]
		},{
			featureType: "administrative.locality",
			elementType: "labels.text.stroke",
			stylers: [
				{visibility: "off"}
			]
		},{
			featureType: "administrative.locality",
			elementType: "labels.text",
			stylers: [
				{saturation: -100},
				{lightness: 50}
			]
		},{
			featureType: "landscape",
			stylers: [
				{lightness: -65}
			]
		},{
			featureType: "water",
			stylers: [
				{lightness: -35}
			]
		}

	];

	var styledMap = new google.maps.StyledMapType (stylesArray, {name: "contactMap"});
 
 	var mapOptions = {

	    zoom: 11,
	    center: new google.maps.LatLng(32.716822,-117.230288),
	    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style'],
	    disableDefaultUI: true,
		scrollwheel: false

	};

  	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

  	map.mapTypes.set('map_style', styledMap);
  	map.setMapTypeId('map_style');

});
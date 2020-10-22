<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
// If we wanted to change the base currency, we would uncomment the following line
// $geoplugin->currency = 'EUR';
 
$geoplugin->locate();
 
echo "Your location {$geoplugin->ip}: <br />\n".
	"City: {$geoplugin->city} <br />\n".
	"Region: {$geoplugin->region} <br />\n".
	"Region Code: {$geoplugin->regionCode} <br />\n".
	"Region Name: {$geoplugin->regionName} <br />\n".
	"Country Name: {$geoplugin->countryName} <br />\n".
	"Country Code: {$geoplugin->countryCode} <br />\n".
	"Latitude: {$geoplugin->latitude} <br />\n".
	"Longitude: {$geoplugin->longitude} <br />\n".
	"Radius of Accuracy (Miles): {$geoplugin->locationAccuracyRadius} <br />\n".
	"Timezone: {$geoplugin->timezone}  <br />\n";
 
}
 


?>

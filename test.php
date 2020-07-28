<?php

class Proj4Class
{

    private $proj4string;
    public function getString()
    {
        return $this->proj4string;
    }

    private $datumString;
    public function getDatumString()
    {
        return $this->datumString;
    }

    private $ellipse = array(
        "MERIT" => array("a" => 6378137.0, "rf" => 298.257, "comment" => "MERIT 1983"),
        "SGS85" => array("a" => 6378136.0, "rf" => 298.257, "comment" => "Soviet Geodetic System 85"),
        "GRS80" => array("a" => 6378137.0, "rf" => 298.257222101, "comment" => "GRS 1980(IUGG, 1980)"),
        "IAU76" => array("a" => 6378140.0, "rf" => 298.257, "comment" => "IAU 1976"),
        "airy" => array("a" => 6377563.396, "rf" => 299.3249646, "comment" => "Airy 1830"),
        "APL4.9" => array("a" => 6378137.0, "rf" => 298.25, "comment" => "Appl. Physics. 1965"),
        "NWL9D" => array("a" => 6378145.0, "rf" => 298.25, "comment" => "Naval Weapons Lab., 1965"),
        "mod_airy" => array("a" => 6377340.189, "b" => 6356034.446, "comment" => "Modified Airy"),
        "andrae" => array("a" => 6377104.43, "rf " => 300.0, "comment" => "Andrae 1876 (Den., Iclnd.)"),
        "danish" => array("a" => 6377019.2563, "rf " => 300.0, "comment" => "Andrae 1876 (Denmark, Iceland)"),
        "aust_SA" => array("a" => 6378160.0, "rf " => 298.25, "comment" => "Australian Natl & S. Amer. 1969"),
        "GRS67" => array("a" => 6378160.0, "rf " => 298.2471674270, "comment" => "GRS 67(IUGG 1967)"),
        "GSK2011" => array("a" => 6378136.5, "rf " => 298.2564151, "comment" => "GSK-2011"),
        "bessel" => array("a" => 6377397.155, "rf " => 299.1528128, "comment" => "Bessel 1841"),
        "bess_nam" => array("a" => 6377483.865, "rf " => 299.1528128, "comment" => "Bessel 1841 (Namibia)"),
        "clrk66" => array("a" => 6378206.4, "b" => 6356583.8, "comment" => "Clarke 1866"),
        "clrk80" => array("a" => 6378249.145, "rf" => 293.4663, "comment" => "Clarke 1880 mod."),
        "clrk80ign" => array("a" => 6378249.2, "rf" => 293.4660212936269, "comment" => "Clarke 1880 (IGN)."),
        "CPM" => array("a" => 6375738.7, "rf" => 334.29, "comment" => "Comm. des Poids et Mesures 1799"),
        "delmbr" => array("a" => 6376428., "rf" => 311.5, "comment" => "Delambre 1810 (Belgium)"),
        "engelis" => array("a" => 6378136.05, "rf" => 298.2566, "comment" => "Engelis 1985"),
        "evrst30" => array("a" => 6377276.345, "rf" => 300.8017, "comment" => "Everest 1830"),
        "evrst48" => array("a" => 6377304.063, "rf" => 300.8017, "comment" => "Everest 1948"),
        "evrst56" => array("a" => 6377301.243, "rf" => 300.8017, "comment" => "Everest 1956"),
        "evrst69" => array("a" => 6377295.664, "rf" => 300.8017, "comment" => "Everest 1969"),
        "evrstSS" => array("a" => 6377298.556, "rf" => 300.8017, "comment" => "Everest (Sabah & Sarawak)"),
        "fschr60" => array("a" => 6378166., "rf" => 298.3, "comment" => "Fischer (Mercury Datum) 1960"),
        "fschr60m" => array("a" => 6378155., "rf" => 298.3, "comment" => "Modified Fischer 1960"),
        "fschr68" => array("a" => 6378150., "rf" => 298.3, "comment" => "Fischer 1968"),
        "helmert" => array("a" => 6378200., "rf" => 298.3, "comment" => "Helmert 1906"),
        "hough" => array("a" => 6378270.0, "rf" => 297., "comment" => "Hough"),
        "intl" => array("a" => 6378388.0, "rf" => 297., "comment" => "International 1909 (Hayford)"),
        "krass" => array("a" => 6378245.0, "rf" => 298.3, "comment" => "Krassovsky, 1942"),
        "kaula" => array("a" => 6378163., "rf" => 298.24, "comment" => "Kaula 1961"),
        "lerch" => array("a" => 6378139., "rf" => 298.257, "comment" =>  "Lerch 1979"),
        "mprts" => array("a" => 6397300., "rf" => 191., "comment" => "Maupertius 1738"),
        "new_intl" => array("a" => 6378157.5, "b" => 6356772.2, "comment" => "New International 1967"),
        "plessis" => array("a" => 6376523., "b" => 6355863., "comment" => "Plessis 1817 (France)"),
        "PZ90" => array("a" => 6378136.0, "rf" => 298.25784, "comment" => "PZ-90"),
        "SEasia" => array("a" => 6378155.0, "b" => 6356773.3205, "comment" => "Southeast Asia"),
        "walbeck" => array("a" => 6376896.0, "b" => 6355834.8467, "comment" => "Walbeck"),
        "WGS60" => array("a" => 6378165.0, "rf" => 298.3, "comment" => "WGS 60"),
        "WGS66" => array("a" => 6378145.0, "rf" => 298.25, "comment" => "WGS 66"),
        "WGS72" => array("a" => 6378135.0, "rf" => 298.26, "comment" => "WGS 72"),
        "WGS84" => array("a" => 6378137.0, "rf" => 298.257223563, "comment" => "WGS 84"),
        "sphere" => array("a" => 6370997.0, "b" => 6370997.0, "comment" => "Normal Sphere (r=6370997)"),
    );

    private $datum = array(
        "WGS84"  => array("towgs84" => "0,0,0", "ellips" => "WGS84", "comment" => ""),
        "GGRS87"  => array(
            "towgs84" => "-199.87,74.79,246.62",
            "ellips" => "GRS80",
            "comment" => "Greek_Geodetic_Reference_System_1987"
        ),
        "NAD83"  => array(
            "towgs84" => "0,0,0", "ellips" => "GRS80",
            "comment" => "North_American_Datum_1983"
        ),
        "potsdam"  => array("towgs84" => "598.1,73.7,418.2,0.202,0.045,-2.455,6.7",  "ellips" => "bessel", "comment" => "Potsdam Rauenberg 1950 DHDN"),
        "carthage"  => array(
            "towgs84" => "-263.0,6.0,431.0", "ellips" => "clrk80ign",
            "comment" => "Carthage 1934 Tunisia"
        ),
        "hermannskogel"  => array(
            "towgs84" => "577.326,90.129,463.919,5.137,1.474,5.297,2.4232",
            "ellips" => "bessel",
            "comment" => "Hermannskogel"
        ),
        "ire65"  => array(
            "towgs84" => "482.530,-130.596,564.557,-1.042,-0.214,-0.631,8.15",
            "ellips" => "mod_airy",
            "comment" => "Ireland 1965"
        ),
        "nzgd49"  => array(
            "towgs84" => "59.47,-5.04,187.44,0.47,-0.1,1.024,-4.5993",
            "ellips" => "intl", "comment" => "New Zealand Geodetic Datum 1949"
        ),
        "OSGB36"  => array(
            "towgs84" => "446.448,-125.157,542.060,0.1502,0.2470,0.8421,-20.4894",
            "ellips" => "airy", "comment" => "Airy 1830"
        ),
    );


    function __construct($proj4string)
    {

        $this->proj4string = $proj4string;

        // Compute datum string and proj string.
        $rf = $this->ellipse["krass"]["rf"];
    }
}

// Dans le constructeur de Proj4Class
$obj = new Proj4Class("+proj=utm +zone=29 +ellps=clrk80 +towgs84=-124.76,53,466.79,0,0,0,0 +units=m +no_defs");

printf('Returned string %s', $obj->getDatumString());

?>
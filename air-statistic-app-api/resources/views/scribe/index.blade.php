<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.19.1.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.19.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-station">
                        <a href="#endpoints-GETapi-station">show all stations</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-voivodeships">
                        <a href="#endpoints-GETapi-voivodeships">GET api/voivodeships</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-getStationsAdv">
                        <a href="#endpoints-POSTapi-getStationsAdv">show stations - advanced query</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-getStationsAdv2">
                        <a href="#endpoints-POSTapi-getStationsAdv2">show stations - advanced query</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-station-a--station_code-">
                        <a href="#endpoints-GETapi-station-a--station_code-">get all stands for station</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-stand--stand_code-">
                        <a href="#endpoints-GETapi-stand--stand_code-">get all stands for station</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-station--station_code-">
                        <a href="#endpoints-GETapi-station--station_code-">show one station</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-station-getCords">
                        <a href="#endpoints-GETapi-station-getCords">show all station coordinates</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-measurements-toppolluted">
                        <a href="#endpoints-GETapi-measurements-toppolluted">show top 3 polluted locations</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-measurements-leastpolluted">
                        <a href="#endpoints-GETapi-measurements-leastpolluted">show least 3 polluted locations</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-measurements-archive--stand_code-">
                        <a href="#endpoints-GETapi-measurements-archive--stand_code-">GET api/measurements/archive/{stand_code}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-measurements-station--station_name-">
                        <a href="#endpoints-GETapi-measurements-station--station_name-">show top 3 polluted locations</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 9 2021</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-station">show all stations</h2>

<p>
</p>



<span id="example-requests-GETapi-station">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/station" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/station"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-station">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;station_code&quot;: &quot;DsBialka&quot;,
                &quot;international_code&quot;: null,
                &quot;station_name&quot;: &quot;Białka&quot;,
                &quot;old_station_code&quot;: &quot;DsBialka&quot;,
                &quot;start_date&quot;: &quot;1990-01-03&quot;,
                &quot;close_date&quot;: &quot;2005-12-31&quot;,
                &quot;station_type&quot;: &quot;przemysłowa&quot;,
                &quot;location_type&quot;: &quot;podmiejski&quot;,
                &quot;station_kind&quot;: &quot;kontenerowa stacjonarna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Białka&quot;,
                &quot;adress&quot;: null,
                &quot;wgs84_n&quot;: &quot;51.197784&quot;,
                &quot;wgs84_e&quot;: &quot;16.11739&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;station_code&quot;: &quot;DsBielGrot&quot;,
                &quot;international_code&quot;: null,
                &quot;station_name&quot;: &quot;Bielawa - ul. Grota Roweckiego&quot;,
                &quot;old_station_code&quot;: &quot;DsBielGrot&quot;,
                &quot;start_date&quot;: &quot;1994-01-02&quot;,
                &quot;close_date&quot;: &quot;2003-12-31&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;w budynku&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Bielawa&quot;,
                &quot;adress&quot;: &quot;ul. Grota Roweckiego 6&quot;,
                &quot;wgs84_n&quot;: &quot;50.68251&quot;,
                &quot;wgs84_e&quot;: &quot;16.617348&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;station_code&quot;: &quot;DsBogatFrancMOB&quot;,
                &quot;international_code&quot;: &quot;PL0602A&quot;,
                &quot;station_name&quot;: &quot;Bogatynia Mobil&quot;,
                &quot;old_station_code&quot;: &quot;DsBogatMob&quot;,
                &quot;start_date&quot;: &quot;2015-01-01&quot;,
                &quot;close_date&quot;: &quot;2015-12-31&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;mobilna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Bogatynia&quot;,
                &quot;adress&quot;: &quot;ul. Francuska/Kręta&quot;,
                &quot;wgs84_n&quot;: &quot;50.940998&quot;,
                &quot;wgs84_e&quot;: &quot;14.91679&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;station_code&quot;: &quot;DsBogChop&quot;,
                &quot;international_code&quot;: &quot;PL0315A&quot;,
                &quot;station_name&quot;: &quot;Bogatynia - Chopina&quot;,
                &quot;old_station_code&quot;: &quot;DsBogChop&quot;,
                &quot;start_date&quot;: &quot;1996-01-01&quot;,
                &quot;close_date&quot;: &quot;2013-12-31&quot;,
                &quot;station_type&quot;: &quot;przemysłowa&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;kontenerowa stacjonarna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Bogatynia&quot;,
                &quot;adress&quot;: &quot;ul. Chopina 35&quot;,
                &quot;wgs84_n&quot;: &quot;50.905857&quot;,
                &quot;wgs84_e&quot;: &quot;14.967175&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;station_code&quot;: &quot;DsBogZatonieMob&quot;,
                &quot;international_code&quot;: &quot;PL0576A&quot;,
                &quot;station_name&quot;: &quot;Bogatynia - Mobil&quot;,
                &quot;old_station_code&quot;: &quot;DsBogZatonieMob&quot;,
                &quot;start_date&quot;: &quot;2012-01-01&quot;,
                &quot;close_date&quot;: &quot;2012-12-31&quot;,
                &quot;station_type&quot;: &quot;przemysłowa&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;mobilna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Bogatynia&quot;,
                &quot;adress&quot;: &quot;ul. Konrada, Zatonie&quot;,
                &quot;wgs84_n&quot;: &quot;50.943245&quot;,
                &quot;wgs84_e&quot;: &quot;14.913327&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;station_code&quot;: &quot;DsBoleslaMOB&quot;,
                &quot;international_code&quot;: &quot;PL0658A&quot;,
                &quot;station_name&quot;: &quot;Bolesławiec&quot;,
                &quot;old_station_code&quot;: &quot;DsBoleslaMOB&quot;,
                &quot;start_date&quot;: &quot;2017-01-01&quot;,
                &quot;close_date&quot;: &quot;2018-01-02&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;mobilna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Bolesławiec&quot;,
                &quot;adress&quot;: &quot;Juliusza Słowackiego 2&quot;,
                &quot;wgs84_n&quot;: &quot;51.263245&quot;,
                &quot;wgs84_e&quot;: &quot;15.570354&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;station_code&quot;: &quot;DsBrzegGlog&quot;,
                &quot;international_code&quot;: null,
                &quot;station_name&quot;: &quot;Brzeg Głogowski&quot;,
                &quot;old_station_code&quot;: &quot;DsBrzegGlog&quot;,
                &quot;start_date&quot;: &quot;1980-01-01&quot;,
                &quot;close_date&quot;: &quot;2003-12-31&quot;,
                &quot;station_type&quot;: &quot;przemysłowa&quot;,
                &quot;location_type&quot;: &quot;pozamiejski&quot;,
                &quot;station_kind&quot;: &quot;w budynku&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Brzeg Głogowski&quot;,
                &quot;adress&quot;: null,
                &quot;wgs84_n&quot;: &quot;51.691437&quot;,
                &quot;wgs84_e&quot;: &quot;15.91784&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;station_code&quot;: &quot;DsChojnowKil&quot;,
                &quot;international_code&quot;: &quot;PL0185A&quot;,
                &quot;station_name&quot;: &quot;Chojn&oacute;w,ul.Kilińskiego&quot;,
                &quot;old_station_code&quot;: &quot;DsChojnowKil&quot;,
                &quot;start_date&quot;: &quot;2004-01-06&quot;,
                &quot;close_date&quot;: &quot;2005-12-31&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;kontenerowa stacjonarna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Chojn&oacute;w&quot;,
                &quot;adress&quot;: &quot;ul. Kilińskiego&quot;,
                &quot;wgs84_n&quot;: &quot;51.26889&quot;,
                &quot;wgs84_e&quot;: &quot;15.940278&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;station_code&quot;: &quot;DsCzar07&quot;,
                &quot;international_code&quot;: &quot;PL0186A&quot;,
                &quot;station_name&quot;: &quot;Czarna G&oacute;ra&quot;,
                &quot;old_station_code&quot;: &quot;DsCzar07&quot;,
                &quot;start_date&quot;: &quot;1996-12-01&quot;,
                &quot;close_date&quot;: &quot;2008-09-30&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;pozamiejski&quot;,
                &quot;station_kind&quot;: &quot;kontenerowa stacjonarna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Czarna G&oacute;ra&quot;,
                &quot;adress&quot;: null,
                &quot;wgs84_n&quot;: &quot;50.255074&quot;,
                &quot;wgs84_e&quot;: &quot;16.801641&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;station_code&quot;: &quot;DsCzerStraza&quot;,
                &quot;international_code&quot;: &quot;PL0028A&quot;,
                &quot;station_name&quot;: &quot;Czerniawa&quot;,
                &quot;old_station_code&quot;: &quot;DsCzer02&quot;,
                &quot;start_date&quot;: &quot;1996-07-01&quot;,
                &quot;close_date&quot;: null,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;pozamiejski&quot;,
                &quot;station_kind&quot;: &quot;kontenerowa stacjonarna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Czerniawa&quot;,
                &quot;adress&quot;: &quot;ul. Strażacka 7&quot;,
                &quot;wgs84_n&quot;: &quot;50.912476&quot;,
                &quot;wgs84_e&quot;: &quot;15.31219&quot;
            },
            {
                &quot;id&quot;: 11,
                &quot;station_code&quot;: &quot;DsCzLasMob&quot;,
                &quot;international_code&quot;: &quot;PL0599A&quot;,
                &quot;station_name&quot;: &quot;Czarny Las - Mobil Mercedes&quot;,
                &quot;old_station_code&quot;: &quot;DsCzLasMob&quot;,
                &quot;start_date&quot;: &quot;2013-01-01&quot;,
                &quot;close_date&quot;: &quot;2013-12-31&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;pozamiejski&quot;,
                &quot;station_kind&quot;: &quot;mobilna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Czarny Las&quot;,
                &quot;adress&quot;: null,
                &quot;wgs84_n&quot;: &quot;51.541656&quot;,
                &quot;wgs84_e&quot;: &quot;16.937063&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;station_code&quot;: &quot;DsDusznikMOB&quot;,
                &quot;international_code&quot;: &quot;PL0733A&quot;,
                &quot;station_name&quot;: &quot;Duszniki-Zdr&oacute;j&quot;,
                &quot;old_station_code&quot;: &quot;DsDusznikMOB&quot;,
                &quot;start_date&quot;: &quot;2019-01-01&quot;,
                &quot;close_date&quot;: &quot;2019-12-31&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;mobilna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Duszniki-Zdr&oacute;j&quot;,
                &quot;adress&quot;: &quot;Sportowa 2a&quot;,
                &quot;wgs84_n&quot;: &quot;50.402645&quot;,
                &quot;wgs84_e&quot;: &quot;16.393318&quot;
            },
            {
                &quot;id&quot;: 13,
                &quot;station_code&quot;: &quot;DsDuszZiel&quot;,
                &quot;international_code&quot;: null,
                &quot;station_name&quot;: &quot;Duszniki Zdr&oacute;j - ul. Zielona&quot;,
                &quot;old_station_code&quot;: &quot;DsDuszZiel&quot;,
                &quot;start_date&quot;: &quot;1993-01-02&quot;,
                &quot;close_date&quot;: &quot;2003-12-31&quot;,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;w budynku&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Duszniki-Zdr&oacute;j&quot;,
                &quot;adress&quot;: &quot;ul. Zielona 23&quot;,
                &quot;wgs84_n&quot;: &quot;50.393394&quot;,
                &quot;wgs84_e&quot;: &quot;16.38247&quot;
            },
            {
                &quot;id&quot;: 14,
                &quot;station_code&quot;: &quot;DsDzialoszyn&quot;,
                &quot;international_code&quot;: &quot;PL0054A&quot;,
                &quot;station_name&quot;: &quot;Działoszyn&quot;,
                &quot;old_station_code&quot;: &quot;DsDzia01&quot;,
                &quot;start_date&quot;: &quot;1996-07-01&quot;,
                &quot;close_date&quot;: null,
                &quot;station_type&quot;: &quot;przemysłowa&quot;,
                &quot;location_type&quot;: &quot;pozamiejski&quot;,
                &quot;station_kind&quot;: &quot;kontenerowa stacjonarna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Działoszyn&quot;,
                &quot;adress&quot;: &quot;bez ulicy&quot;,
                &quot;wgs84_n&quot;: &quot;50.972168&quot;,
                &quot;wgs84_e&quot;: &quot;14.941319&quot;
            },
            {
                &quot;id&quot;: 15,
                &quot;station_code&quot;: &quot;DsDziePilsud&quot;,
                &quot;international_code&quot;: &quot;PL0187A&quot;,
                &quot;station_name&quot;: &quot;Dzierżoni&oacute;w - Piłsudskiego&quot;,
                &quot;old_station_code&quot;: &quot;DsDzierPilsA&quot;,
                &quot;start_date&quot;: &quot;2005-01-01&quot;,
                &quot;close_date&quot;: null,
                &quot;station_type&quot;: &quot;tło&quot;,
                &quot;location_type&quot;: &quot;miejski&quot;,
                &quot;station_kind&quot;: &quot;kontenerowa stacjonarna&quot;,
                &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;,
                &quot;location&quot;: &quot;Dzierżoni&oacute;w&quot;,
                &quot;adress&quot;: &quot;ul. Piłsudskiego 26&quot;,
                &quot;wgs84_n&quot;: &quot;50.73282&quot;,
                &quot;wgs84_e&quot;: &quot;16.64805&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost/api/station?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 71,
        &quot;last_page_url&quot;: &quot;http://localhost/api/station?page=71&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=8&quot;,
                &quot;label&quot;: &quot;8&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=9&quot;,
                &quot;label&quot;: &quot;9&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=10&quot;,
                &quot;label&quot;: &quot;10&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;...&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=70&quot;,
                &quot;label&quot;: &quot;70&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=71&quot;,
                &quot;label&quot;: &quot;71&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/station?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost/api/station?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost/api/station&quot;,
        &quot;per_page&quot;: 15,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 15,
        &quot;total&quot;: 1055
    },
    &quot;message&quot;: &quot;Stations retrieved successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-station" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-station"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-station"></code></pre>
</span>
<span id="execution-error-GETapi-station" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-station"></code></pre>
</span>
<form id="form-GETapi-station" data-method="GET"
      data-path="api/station"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-station', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-station"
                    onclick="tryItOut('GETapi-station');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-station"
                    onclick="cancelTryOut('GETapi-station');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-station" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/station</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-voivodeships">GET api/voivodeships</h2>

<p>
</p>



<span id="example-requests-GETapi-voivodeships">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/voivodeships" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/voivodeships"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-voivodeships">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;voivodeship&quot;: &quot;PODLASKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;PODKARPACKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;MAŁOPOLSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;Ł&Oacute;DZKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;POMORSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;MAZOWIECKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;ŚLĄSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;OPOLSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;ŚWIĘTOKRZYSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;LUBELSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;LUBUSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;ZACHODNIOPOMORSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;WARMIŃSKO-MAZURSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;WIELKOPOLSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;DOLNOŚLĄSKIE&quot;
        },
        {
            &quot;voivodeship&quot;: &quot;KUJAWSKO-POMORSKIE&quot;
        }
    ],
    &quot;message&quot;: &quot;Station retrieved successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-voivodeships" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-voivodeships"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-voivodeships"></code></pre>
</span>
<span id="execution-error-GETapi-voivodeships" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-voivodeships"></code></pre>
</span>
<form id="form-GETapi-voivodeships" data-method="GET"
      data-path="api/voivodeships"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-voivodeships', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-voivodeships"
                    onclick="tryItOut('GETapi-voivodeships');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-voivodeships"
                    onclick="cancelTryOut('GETapi-voivodeships');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-voivodeships" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/voivodeships</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-getStationsAdv">show stations - advanced query</h2>

<p>
</p>



<span id="example-requests-POSTapi-getStationsAdv">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/getStationsAdv" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"voivodeship\": \"aut\",
    \"location\": \"et\",
    \"adress\": \"facere\",
    \"indicator\": \"expedita\",
    \"measurement_type\": \"temporibus\",
    \"start_date\": \"2021-12-09T20:20:30\",
    \"close_date\": \"2051-09-24\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getStationsAdv"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "voivodeship": "aut",
    "location": "et",
    "adress": "facere",
    "indicator": "expedita",
    "measurement_type": "temporibus",
    "start_date": "2021-12-09T20:20:30",
    "close_date": "2051-09-24"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-getStationsAdv">
</span>
<span id="execution-results-POSTapi-getStationsAdv" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-getStationsAdv"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-getStationsAdv"></code></pre>
</span>
<span id="execution-error-POSTapi-getStationsAdv" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-getStationsAdv"></code></pre>
</span>
<form id="form-POSTapi-getStationsAdv" data-method="POST"
      data-path="api/getStationsAdv"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-getStationsAdv', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-getStationsAdv"
                    onclick="tryItOut('POSTapi-getStationsAdv');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-getStationsAdv"
                    onclick="cancelTryOut('POSTapi-getStationsAdv');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-getStationsAdv" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/getStationsAdv</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>voivodeship</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="voivodeship"
               data-endpoint="POSTapi-getStationsAdv"
               value="aut"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="location"
               data-endpoint="POSTapi-getStationsAdv"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="POSTapi-getStationsAdv"
               value="facere"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>indicator</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="indicator"
               data-endpoint="POSTapi-getStationsAdv"
               value="expedita"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>measurement_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="measurement_type"
               data-endpoint="POSTapi-getStationsAdv"
               value="temporibus"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>start_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="start_date"
               data-endpoint="POSTapi-getStationsAdv"
               value="2021-12-09T20:20:30"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>close_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="close_date"
               data-endpoint="POSTapi-getStationsAdv"
               value="2051-09-24"
               data-component="body" hidden>
    <br>
<p>Must be a valid date. Must be a date after or equal to <code>start_date</code>.</p>
        </p>
        </form>

            <h2 id="endpoints-POSTapi-getStationsAdv2">show stations - advanced query</h2>

<p>
</p>



<span id="example-requests-POSTapi-getStationsAdv2">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/getStationsAdv2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"station_type\": \"amet\",
    \"location_type\": \"est\",
    \"voivodeship\": \"rerum\",
    \"location\": \"magnam\",
    \"station_code\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/getStationsAdv2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "station_type": "amet",
    "location_type": "est",
    "voivodeship": "rerum",
    "location": "magnam",
    "station_code": "et"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-getStationsAdv2">
</span>
<span id="execution-results-POSTapi-getStationsAdv2" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-getStationsAdv2"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-getStationsAdv2"></code></pre>
</span>
<span id="execution-error-POSTapi-getStationsAdv2" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-getStationsAdv2"></code></pre>
</span>
<form id="form-POSTapi-getStationsAdv2" data-method="POST"
      data-path="api/getStationsAdv2"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-getStationsAdv2', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-getStationsAdv2"
                    onclick="tryItOut('POSTapi-getStationsAdv2');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-getStationsAdv2"
                    onclick="cancelTryOut('POSTapi-getStationsAdv2');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-getStationsAdv2" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/getStationsAdv2</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>station_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="station_type"
               data-endpoint="POSTapi-getStationsAdv2"
               value="amet"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>location_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="location_type"
               data-endpoint="POSTapi-getStationsAdv2"
               value="est"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>voivodeship</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="voivodeship"
               data-endpoint="POSTapi-getStationsAdv2"
               value="rerum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="location"
               data-endpoint="POSTapi-getStationsAdv2"
               value="magnam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>station_code</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="station_code"
               data-endpoint="POSTapi-getStationsAdv2"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-station-a--station_code-">get all stands for station</h2>

<p>
</p>



<span id="example-requests-GETapi-station-a--station_code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/station/a/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/station/a/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-station-a--station_code-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Data not found&quot;,
    &quot;data&quot;: 404
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-station-a--station_code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-station-a--station_code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-station-a--station_code-"></code></pre>
</span>
<span id="execution-error-GETapi-station-a--station_code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-station-a--station_code-"></code></pre>
</span>
<form id="form-GETapi-station-a--station_code-" data-method="GET"
      data-path="api/station/a/{station_code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-station-a--station_code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-station-a--station_code-"
                    onclick="tryItOut('GETapi-station-a--station_code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-station-a--station_code-"
                    onclick="cancelTryOut('GETapi-station-a--station_code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-station-a--station_code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/station/a/{station_code}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>station_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="station_code"
               data-endpoint="GETapi-station-a--station_code-"
               value="et"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="endpoints-GETapi-stand--stand_code-">get all stands for station</h2>

<p>
</p>



<span id="example-requests-GETapi-stand--stand_code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/stand/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stand/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stand--stand_code-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Data not found&quot;,
    &quot;data&quot;: 404
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stand--stand_code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stand--stand_code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stand--stand_code-"></code></pre>
</span>
<span id="execution-error-GETapi-stand--stand_code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stand--stand_code-"></code></pre>
</span>
<form id="form-GETapi-stand--stand_code-" data-method="GET"
      data-path="api/stand/{stand_code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stand--stand_code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-stand--stand_code-"
                    onclick="tryItOut('GETapi-stand--stand_code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-stand--stand_code-"
                    onclick="cancelTryOut('GETapi-stand--stand_code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-stand--stand_code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stand/{stand_code}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>stand_code</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="stand_code"
               data-endpoint="GETapi-stand--stand_code-"
               value="20"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="endpoints-GETapi-station--station_code-">show one station</h2>

<p>
</p>



<span id="example-requests-GETapi-station--station_code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/station/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/station/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-station--station_code-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Station not found&quot;,
    &quot;data&quot;: 404
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-station--station_code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-station--station_code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-station--station_code-"></code></pre>
</span>
<span id="execution-error-GETapi-station--station_code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-station--station_code-"></code></pre>
</span>
<form id="form-GETapi-station--station_code-" data-method="GET"
      data-path="api/station/{station_code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-station--station_code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-station--station_code-"
                    onclick="tryItOut('GETapi-station--station_code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-station--station_code-"
                    onclick="cancelTryOut('GETapi-station--station_code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-station--station_code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/station/{station_code}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>station_code</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="station_code"
               data-endpoint="GETapi-station--station_code-"
               value="17"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="endpoints-GETapi-station-getCords">show all station coordinates</h2>

<p>
</p>



<span id="example-requests-GETapi-station-getCords">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/station/getCords" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/station/getCords"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-station-getCords">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;station_code&quot;: &quot;DsBialka&quot;,
            &quot;station_name&quot;: &quot;Białka&quot;,
            &quot;wgs84_n&quot;: &quot;51.197784&quot;,
            &quot;wgs84_e&quot;: &quot;16.11739&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsBielGrot&quot;,
            &quot;station_name&quot;: &quot;Bielawa - ul. Grota Roweckiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.68251&quot;,
            &quot;wgs84_e&quot;: &quot;16.617348&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsBogatFrancMOB&quot;,
            &quot;station_name&quot;: &quot;Bogatynia Mobil&quot;,
            &quot;wgs84_n&quot;: &quot;50.940998&quot;,
            &quot;wgs84_e&quot;: &quot;14.91679&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsBogChop&quot;,
            &quot;station_name&quot;: &quot;Bogatynia - Chopina&quot;,
            &quot;wgs84_n&quot;: &quot;50.905857&quot;,
            &quot;wgs84_e&quot;: &quot;14.967175&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsBogZatonieMob&quot;,
            &quot;station_name&quot;: &quot;Bogatynia - Mobil&quot;,
            &quot;wgs84_n&quot;: &quot;50.943245&quot;,
            &quot;wgs84_e&quot;: &quot;14.913327&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsBoleslaMOB&quot;,
            &quot;station_name&quot;: &quot;Bolesławiec&quot;,
            &quot;wgs84_n&quot;: &quot;51.263245&quot;,
            &quot;wgs84_e&quot;: &quot;15.570354&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsBrzegGlog&quot;,
            &quot;station_name&quot;: &quot;Brzeg Głogowski&quot;,
            &quot;wgs84_n&quot;: &quot;51.691437&quot;,
            &quot;wgs84_e&quot;: &quot;15.91784&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsChojnowKil&quot;,
            &quot;station_name&quot;: &quot;Chojn&oacute;w,ul.Kilińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.26889&quot;,
            &quot;wgs84_e&quot;: &quot;15.940278&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsCzar07&quot;,
            &quot;station_name&quot;: &quot;Czarna G&oacute;ra&quot;,
            &quot;wgs84_n&quot;: &quot;50.255074&quot;,
            &quot;wgs84_e&quot;: &quot;16.801641&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsCzerStraza&quot;,
            &quot;station_name&quot;: &quot;Czerniawa&quot;,
            &quot;wgs84_n&quot;: &quot;50.912476&quot;,
            &quot;wgs84_e&quot;: &quot;15.31219&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsCzLasMob&quot;,
            &quot;station_name&quot;: &quot;Czarny Las - Mobil Mercedes&quot;,
            &quot;wgs84_n&quot;: &quot;51.541656&quot;,
            &quot;wgs84_e&quot;: &quot;16.937063&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsDusznikMOB&quot;,
            &quot;station_name&quot;: &quot;Duszniki-Zdr&oacute;j&quot;,
            &quot;wgs84_n&quot;: &quot;50.402645&quot;,
            &quot;wgs84_e&quot;: &quot;16.393318&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsDuszZiel&quot;,
            &quot;station_name&quot;: &quot;Duszniki Zdr&oacute;j - ul. Zielona&quot;,
            &quot;wgs84_n&quot;: &quot;50.393394&quot;,
            &quot;wgs84_e&quot;: &quot;16.38247&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsDzialoszyn&quot;,
            &quot;station_name&quot;: &quot;Działoszyn&quot;,
            &quot;wgs84_n&quot;: &quot;50.972168&quot;,
            &quot;wgs84_e&quot;: &quot;14.941319&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsDziePilsud&quot;,
            &quot;station_name&quot;: &quot;Dzierżoni&oacute;w - Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.73282&quot;,
            &quot;wgs84_e&quot;: &quot;16.64805&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsDzierKras&quot;,
            &quot;station_name&quot;: &quot;Dzierżoni&oacute;w - ul. Krasickiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.726337&quot;,
            &quot;wgs84_e&quot;: &quot;16.647285&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGlogMob&quot;,
            &quot;station_name&quot;: &quot;Głog&oacute;w - Wita Stwosza - mobil&quot;,
            &quot;wgs84_n&quot;: &quot;51.65702&quot;,
            &quot;wgs84_e&quot;: &quot;16.097822&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGlogNorw&quot;,
            &quot;station_name&quot;: &quot;Głog&oacute;w - Norwida&quot;,
            &quot;wgs84_n&quot;: &quot;51.65713&quot;,
            &quot;wgs84_e&quot;: &quot;16.086187&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGlogNorwArch&quot;,
            &quot;station_name&quot;: &quot;Głog&oacute;w - Norwida Arch&quot;,
            &quot;wgs84_n&quot;: &quot;51.65715&quot;,
            &quot;wgs84_e&quot;: &quot;16.086184&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGlogOrzech&quot;,
            &quot;station_name&quot;: &quot;Głog&oacute;w, ul. Orzechowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.648544&quot;,
            &quot;wgs84_e&quot;: &quot;16.092285&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGlogowko&quot;,
            &quot;station_name&quot;: &quot;Głog&oacute;wko&quot;,
            &quot;wgs84_n&quot;: &quot;51.731823&quot;,
            &quot;wgs84_e&quot;: &quot;16.097769&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGlogSikor&quot;,
            &quot;station_name&quot;: &quot;Głog&oacute;w, ul. Sikorskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.66451&quot;,
            &quot;wgs84_e&quot;: &quot;16.040821&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGlogWiStwo&quot;,
            &quot;station_name&quot;: &quot;Głog&oacute;w - Wita Stwosza&quot;,
            &quot;wgs84_n&quot;: &quot;51.65702&quot;,
            &quot;wgs84_e&quot;: &quot;16.097822&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsGrodziec&quot;,
            &quot;station_name&quot;: &quot;Grodziec Mały&quot;,
            &quot;wgs84_n&quot;: &quot;51.687496&quot;,
            &quot;wgs84_e&quot;: &quot;16.073214&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJasnaSport&quot;,
            &quot;station_name&quot;: &quot;Jasna G&oacute;ra - Sportowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.87369&quot;,
            &quot;wgs84_e&quot;: &quot;14.954236&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJawDmow&quot;,
            &quot;station_name&quot;: &quot;Jawor - Dmowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.05712&quot;,
            &quot;wgs84_e&quot;: &quot;16.179853&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJaworMOB&quot;,
            &quot;station_name&quot;: &quot;Jawor&quot;,
            &quot;wgs84_n&quot;: &quot;51.049213&quot;,
            &quot;wgs84_e&quot;: &quot;16.202316&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJedlZdroj&quot;,
            &quot;station_name&quot;: &quot;Jedlina Zdr&oacute;j - Plac Zdrojowy&quot;,
            &quot;wgs84_n&quot;: &quot;50.72838&quot;,
            &quot;wgs84_e&quot;: &quot;16.345482&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJelGorOgin&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Ogińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.913433&quot;,
            &quot;wgs84_e&quot;: &quot;15.765608&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJelGorSoko&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Sokoliki&quot;,
            &quot;wgs84_n&quot;: &quot;50.871216&quot;,
            &quot;wgs84_e&quot;: &quot;15.700947&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJelw05&quot;,
            &quot;station_name&quot;: &quot;Jeleni&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;51.224842&quot;,
            &quot;wgs84_e&quot;: &quot;15.232984&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJgCiep&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Cieplice&quot;,
            &quot;wgs84_n&quot;: &quot;50.862965&quot;,
            &quot;wgs84_e&quot;: &quot;15.681788&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJgCiepA&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Cieplice (AUT)&quot;,
            &quot;wgs84_n&quot;: &quot;50.861855&quot;,
            &quot;wgs84_e&quot;: &quot;15.678761&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJgGrottgeraPM&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Grottgera (PM10)&quot;,
            &quot;wgs84_n&quot;: &quot;50.897495&quot;,
            &quot;wgs84_e&quot;: &quot;15.736629&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJgGrottgeraPMArch&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Grottgera (PM10-Arch)&quot;,
            &quot;wgs84_n&quot;: &quot;50.897495&quot;,
            &quot;wgs84_e&quot;: &quot;15.736629&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJgScieg&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Ściegiennego&quot;,
            &quot;wgs84_n&quot;: &quot;50.865875&quot;,
            &quot;wgs84_e&quot;: &quot;15.679301&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJgWoln&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Wolności&quot;,
            &quot;wgs84_n&quot;: &quot;50.885635&quot;,
            &quot;wgs84_e&quot;: &quot;15.717597&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsJgZabob&quot;,
            &quot;station_name&quot;: &quot;Jelenia G&oacute;ra - Zabobrze&quot;,
            &quot;wgs84_n&quot;: &quot;50.91447&quot;,
            &quot;wgs84_e&quot;: &quot;15.764693&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKalinowka&quot;,
            &quot;station_name&quot;: &quot;Kalin&oacute;wka&quot;,
            &quot;wgs84_n&quot;: &quot;51.5226&quot;,
            &quot;wgs84_e&quot;: &quot;16.244146&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKamGoraMOB&quot;,
            &quot;station_name&quot;: &quot;Kamienna G&oacute;ra&quot;,
            &quot;wgs84_n&quot;: &quot;50.78808&quot;,
            &quot;wgs84_e&quot;: &quot;16.035122&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKawice&quot;,
            &quot;station_name&quot;: &quot;Kawice&quot;,
            &quot;wgs84_n&quot;: &quot;51.23083&quot;,
            &quot;wgs84_e&quot;: &quot;16.428888&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKgMob&quot;,
            &quot;station_name&quot;: &quot;Kamienna G&oacute;ra - Mobil Horiba&quot;,
            &quot;wgs84_n&quot;: &quot;50.786873&quot;,
            &quot;wgs84_e&quot;: &quot;16.029129&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKgSien&quot;,
            &quot;station_name&quot;: &quot;Kamienna G&oacute;ra - Sienkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;50.781208&quot;,
            &quot;wgs84_e&quot;: &quot;16.029156&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKlodzOkrz&quot;,
            &quot;station_name&quot;: &quot;Kłodzko - ul. Okrzei&quot;,
            &quot;wgs84_n&quot;: &quot;50.433388&quot;,
            &quot;wgs84_e&quot;: &quot;16.650177&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKlodzSzkol&quot;,
            &quot;station_name&quot;: &quot;Kłodzko - Szkolna&quot;,
            &quot;wgs84_n&quot;: &quot;50.433495&quot;,
            &quot;wgs84_e&quot;: &quot;16.65366&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKobierz&quot;,
            &quot;station_name&quot;: &quot;Kobierzyce - Robotnicza&quot;,
            &quot;wgs84_n&quot;: &quot;50.968056&quot;,
            &quot;wgs84_e&quot;: &quot;16.928057&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKowMaj&quot;,
            &quot;station_name&quot;: &quot;Kowary - 1-go Maja&quot;,
            &quot;wgs84_n&quot;: &quot;50.793144&quot;,
            &quot;wgs84_e&quot;: &quot;15.835843&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKozDoly&quot;,
            &quot;station_name&quot;: &quot;Kozie Doły&quot;,
            &quot;wgs84_n&quot;: &quot;51.727524&quot;,
            &quot;wgs84_e&quot;: &quot;16.02597&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKromolin&quot;,
            &quot;station_name&quot;: &quot;Kromolin&quot;,
            &quot;wgs84_n&quot;: &quot;51.68496&quot;,
            &quot;wgs84_e&quot;: &quot;15.894901&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKudowaMOB&quot;,
            &quot;station_name&quot;: &quot;Kudowa-Zdr&oacute;j&quot;,
            &quot;wgs84_n&quot;: &quot;50.447098&quot;,
            &quot;wgs84_e&quot;: &quot;16.238508&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsKudSlon&quot;,
            &quot;station_name&quot;: &quot;Kudowa Zdr&oacute;j - ul. Słoneczna&quot;,
            &quot;wgs84_n&quot;: &quot;50.439976&quot;,
            &quot;wgs84_e&quot;: &quot;16.248312&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLadekMOB&quot;,
            &quot;station_name&quot;: &quot;Lądek-Zdr&oacute;j&quot;,
            &quot;wgs84_n&quot;: &quot;50.341866&quot;,
            &quot;wgs84_e&quot;: &quot;16.889898&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLadekWol&quot;,
            &quot;station_name&quot;: &quot;Lądek Zdr&oacute;j - ul. Wolności&quot;,
            &quot;wgs84_n&quot;: &quot;50.345684&quot;,
            &quot;wgs84_e&quot;: &quot;16.888803&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegAlRzecz&quot;,
            &quot;station_name&quot;: &quot;Legnica - Rzeczypospolitej&quot;,
            &quot;wgs84_n&quot;: &quot;51.204502&quot;,
            &quot;wgs84_e&quot;: &quot;16.180513&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegIwasz&quot;,
            &quot;station_name&quot;: &quot;Legnica - Iwaszkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;51.208187&quot;,
            &quot;wgs84_e&quot;: &quot;16.216705&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegJaworz&quot;,
            &quot;station_name&quot;: &quot;Legnica - Jaworzyńska&quot;,
            &quot;wgs84_n&quot;: &quot;51.19117&quot;,
            &quot;wgs84_e&quot;: &quot;16.156158&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegKsiez&quot;,
            &quot;station_name&quot;: &quot;Legnica - Księżycowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.20873&quot;,
            &quot;wgs84_e&quot;: &quot;16.190277&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegMick&quot;,
            &quot;station_name&quot;: &quot;Legnica - Mickiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;51.20283&quot;,
            &quot;wgs84_e&quot;: &quot;16.164608&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegPolarna&quot;,
            &quot;station_name&quot;: &quot;Legnica - Polarna&quot;,
            &quot;wgs84_n&quot;: &quot;51.208103&quot;,
            &quot;wgs84_e&quot;: &quot;16.183784&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegPoraz&quot;,
            &quot;station_name&quot;: &quot;Legnica - Porazińskiej&quot;,
            &quot;wgs84_n&quot;: &quot;51.19352&quot;,
            &quot;wgs84_e&quot;: &quot;16.135193&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegRzecz&quot;,
            &quot;station_name&quot;: &quot;Legnica - Aleja Rzeczypospolitej&quot;,
            &quot;wgs84_n&quot;: &quot;51.204197&quot;,
            &quot;wgs84_e&quot;: &quot;16.17982&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegRzeczPM&quot;,
            &quot;station_name&quot;: &quot;Legnica, al. Rzeczypospolitej (PSSE)&quot;,
            &quot;wgs84_n&quot;: &quot;51.20423&quot;,
            &quot;wgs84_e&quot;: &quot;16.180763&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegSmok&quot;,
            &quot;station_name&quot;: &quot;Legnica - Smokowicka&quot;,
            &quot;wgs84_n&quot;: &quot;51.180775&quot;,
            &quot;wgs84_e&quot;: &quot;16.098375&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLegZlotor&quot;,
            &quot;station_name&quot;: &quot;Legnica - Złotoryjska&quot;,
            &quot;wgs84_n&quot;: &quot;51.18802&quot;,
            &quot;wgs84_e&quot;: &quot;16.12906&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLesnaRyn&quot;,
            &quot;station_name&quot;: &quot;Leśna - Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;51.02303&quot;,
            &quot;wgs84_e&quot;: &quot;15.263245&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubanMieszMOB&quot;,
            &quot;station_name&quot;: &quot;Lubań - Mieszka II&quot;,
            &quot;wgs84_n&quot;: &quot;51.11901&quot;,
            &quot;wgs84_e&quot;: &quot;15.275539&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubanMOB&quot;,
            &quot;station_name&quot;: &quot;Lubań - Łączna&quot;,
            &quot;wgs84_n&quot;: &quot;51.118412&quot;,
            &quot;wgs84_e&quot;: &quot;15.285835&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubanRyn&quot;,
            &quot;station_name&quot;: &quot;Lubań - Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;51.12017&quot;,
            &quot;wgs84_e&quot;: &quot;15.290536&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubanZaw&quot;,
            &quot;station_name&quot;: &quot;Lubań - Zawidowska&quot;,
            &quot;wgs84_n&quot;: &quot;51.1166&quot;,
            &quot;wgs84_e&quot;: &quot;15.27208&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubinMaj&quot;,
            &quot;station_name&quot;: &quot;Lubin - 1-go Maja&quot;,
            &quot;wgs84_n&quot;: &quot;51.398415&quot;,
            &quot;wgs84_e&quot;: &quot;16.199642&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubinMob&quot;,
            &quot;station_name&quot;: &quot;Lubin - Mobil Mercedes&quot;,
            &quot;wgs84_n&quot;: &quot;51.406742&quot;,
            &quot;wgs84_e&quot;: &quot;16.187307&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubinSowia&quot;,
            &quot;station_name&quot;: &quot;Lubin,ul.Sowia&quot;,
            &quot;wgs84_n&quot;: &quot;51.38&quot;,
            &quot;wgs84_e&quot;: &quot;16.212564&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLubiWierzb&quot;,
            &quot;station_name&quot;: &quot;Lubin - Wierzbowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.406506&quot;,
            &quot;wgs84_e&quot;: &quot;16.18833&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsLwowekPart&quot;,
            &quot;station_name&quot;: &quot;Lw&oacute;wek Śl.- Partyzant&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;51.111732&quot;,
            &quot;wgs84_e&quot;: &quot;15.579598&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsNowRudJezi&quot;,
            &quot;station_name&quot;: &quot;Nowa Ruda - Jeziorna&quot;,
            &quot;wgs84_n&quot;: &quot;50.581493&quot;,
            &quot;wgs84_e&quot;: &quot;16.498245&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsNowRudSreb&quot;,
            &quot;station_name&quot;: &quot;Nowa Ruda - Srebrna&quot;,
            &quot;wgs84_n&quot;: &quot;50.579914&quot;,
            &quot;wgs84_e&quot;: &quot;16.514421&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsNRudaPil&quot;,
            &quot;station_name&quot;: &quot;Nowa Ruda - ul. Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.58389&quot;,
            &quot;wgs84_e&quot;: &quot;16.502459&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsNRudaSlupPM&quot;,
            &quot;station_name&quot;: &quot;Nowa Ruda - Słupiec (PM10)&quot;,
            &quot;wgs84_n&quot;: &quot;50.550007&quot;,
            &quot;wgs84_e&quot;: &quot;16.553644&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsNRudaSrebA&quot;,
            &quot;station_name&quot;: &quot;Nowa Ruda - ul. Srebrna (AUT)&quot;,
            &quot;wgs84_n&quot;: &quot;50.579926&quot;,
            &quot;wgs84_e&quot;: &quot;16.514303&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsNRudaSrebPArch&quot;,
            &quot;station_name&quot;: &quot;Nowa Ruda - ul. Srebrna (PM10-Arch)&quot;,
            &quot;wgs84_n&quot;: &quot;50.579914&quot;,
            &quot;wgs84_e&quot;: &quot;16.514421&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsOla3Maj&quot;,
            &quot;station_name&quot;: &quot;Oława - 3 Maja&quot;,
            &quot;wgs84_n&quot;: &quot;50.945755&quot;,
            &quot;wgs84_e&quot;: &quot;17.29615&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsOlawZolnAK&quot;,
            &quot;station_name&quot;: &quot;Oława - Żołnierzy AK&quot;,
            &quot;wgs84_n&quot;: &quot;50.942074&quot;,
            &quot;wgs84_e&quot;: &quot;17.291332&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsOlesBrzozo&quot;,
            &quot;station_name&quot;: &quot;Oleśnica - Brzozowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.217484&quot;,
            &quot;wgs84_e&quot;: &quot;17.389997&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsOlesnicaPM-Arch&quot;,
            &quot;station_name&quot;: &quot;Oleśnica - Brzozowa (PM10-Arch)&quot;,
            &quot;wgs84_n&quot;: &quot;51.217495&quot;,
            &quot;wgs84_e&quot;: &quot;17.389997&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsOlesRyn&quot;,
            &quot;station_name&quot;: &quot;Oleśnica - Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;51.20949&quot;,
            &quot;wgs84_e&quot;: &quot;17.379688&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsOsieczow21&quot;,
            &quot;station_name&quot;: &quot;Osiecz&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;51.31763&quot;,
            &quot;wgs84_e&quot;: &quot;15.431719&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsPolanPark&quot;,
            &quot;station_name&quot;: &quot;Polanica Zdr&oacute;j - ul. Parkowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.407433&quot;,
            &quot;wgs84_e&quot;: &quot;16.511192&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsPolanSportMOB&quot;,
            &quot;station_name&quot;: &quot;Polanica-Zdr&oacute;j - Sportowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.415756&quot;,
            &quot;wgs84_e&quot;: &quot;16.513058&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsPolKasztan&quot;,
            &quot;station_name&quot;: &quot;Polkowice - Kasztanowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.50237&quot;,
            &quot;wgs84_e&quot;: &quot;16.07505&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsPolkDabr&quot;,
            &quot;station_name&quot;: &quot;Polkowice - Dąbrowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.50366&quot;,
            &quot;wgs84_e&quot;: &quot;16.075062&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsPrzerzZdr&quot;,
            &quot;station_name&quot;: &quot;Przerzeczyn Zdr&oacute;j - ul. Zdrojowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.685276&quot;,
            &quot;wgs84_e&quot;: &quot;16.831781&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsRadomierz&quot;,
            &quot;station_name&quot;: &quot;Radomierzyce&quot;,
            &quot;wgs84_n&quot;: &quot;51.0583&quot;,
            &quot;wgs84_e&quot;: &quot;14.973735&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsRudna&quot;,
            &quot;station_name&quot;: &quot;Rudna&quot;,
            &quot;wgs84_n&quot;: &quot;51.512505&quot;,
            &quot;wgs84_e&quot;: &quot;16.25171&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsRudnaWit&quot;,
            &quot;station_name&quot;: &quot;Rudna - W.Witosa&quot;,
            &quot;wgs84_n&quot;: &quot;51.504337&quot;,
            &quot;wgs84_e&quot;: &quot;16.26138&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSlone&quot;,
            &quot;station_name&quot;: &quot;Słone&quot;,
            &quot;wgs84_n&quot;: &quot;51.661053&quot;,
            &quot;wgs84_e&quot;: &quot;16.022652&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSnie04&quot;,
            &quot;station_name&quot;: &quot;Śnieżne Kotły&quot;,
            &quot;wgs84_n&quot;: &quot;50.778374&quot;,
            &quot;wgs84_e&quot;: &quot;15.557425&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSniezkaObs&quot;,
            &quot;station_name&quot;: &quot;Śnieżka&quot;,
            &quot;wgs84_n&quot;: &quot;50.73639&quot;,
            &quot;wgs84_e&quot;: &quot;15.739722&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSobczyce&quot;,
            &quot;station_name&quot;: &quot;Sobczyce&quot;,
            &quot;wgs84_n&quot;: &quot;51.70209&quot;,
            &quot;wgs84_e&quot;: &quot;16.06723&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSoko08&quot;,
            &quot;station_name&quot;: &quot;Sokolec&quot;,
            &quot;wgs84_n&quot;: &quot;50.668056&quot;,
            &quot;wgs84_e&quot;: &quot;16.475&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSpal06&quot;,
            &quot;station_name&quot;: &quot;Spalona&quot;,
            &quot;wgs84_n&quot;: &quot;50.27657&quot;,
            &quot;wgs84_e&quot;: &quot;16.5383&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSrodaSlMOB&quot;,
            &quot;station_name&quot;: &quot;Środa Śląska&quot;,
            &quot;wgs84_n&quot;: &quot;51.166237&quot;,
            &quot;wgs84_e&quot;: &quot;16.597559&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsStrzMob&quot;,
            &quot;station_name&quot;: &quot;Strzelin - Mobil Mercedes&quot;,
            &quot;wgs84_n&quot;: &quot;50.784386&quot;,
            &quot;wgs84_e&quot;: &quot;17.079435&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSwidnFolwa&quot;,
            &quot;station_name&quot;: &quot;Świdnica - Folwarczna&quot;,
            &quot;wgs84_n&quot;: &quot;50.84443&quot;,
            &quot;wgs84_e&quot;: &quot;16.494005&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSwidnMarciMOB&quot;,
            &quot;station_name&quot;: &quot;Świdnica - Marcinkowskiego MOB&quot;,
            &quot;wgs84_n&quot;: &quot;50.846558&quot;,
            &quot;wgs84_e&quot;: &quot;16.466928&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSwidnRynek&quot;,
            &quot;station_name&quot;: &quot;Świdnica - Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;50.842365&quot;,
            &quot;wgs84_e&quot;: &quot;16.486704&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSwidRynekArch&quot;,
            &quot;station_name&quot;: &quot;Świdnica - Rynek Arch&quot;,
            &quot;wgs84_n&quot;: &quot;50.84236&quot;,
            &quot;wgs84_e&quot;: &quot;16.486704&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSwidWalb&quot;,
            &quot;station_name&quot;: &quot;Świdnica - ul. Wałbrzyska&quot;,
            &quot;wgs84_n&quot;: &quot;50.838047&quot;,
            &quot;wgs84_e&quot;: &quot;16.480394&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzczaKolej&quot;,
            &quot;station_name&quot;: &quot;Szczawno-Zdr&oacute;j - Kolejowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.804188&quot;,
            &quot;wgs84_e&quot;: &quot;16.25411&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzczAzalMob&quot;,
            &quot;station_name&quot;: &quot;Szczawno-Zdr&oacute;j - Azalia - Mobil&quot;,
            &quot;wgs84_n&quot;: &quot;50.806473&quot;,
            &quot;wgs84_e&quot;: &quot;16.253263&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzczKopPM&quot;,
            &quot;station_name&quot;: &quot;Szczawno Zdr&oacute;j - ul. Kopernika (PM10)&quot;,
            &quot;wgs84_n&quot;: &quot;50.801537&quot;,
            &quot;wgs84_e&quot;: &quot;16.250145&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzczMagMob&quot;,
            &quot;station_name&quot;: &quot;Szczawno-Zdr&oacute;j - Magnolia - Mobil&quot;,
            &quot;wgs84_n&quot;: &quot;50.80152&quot;,
            &quot;wgs84_e&quot;: &quot;16.250181&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzczOgr&quot;,
            &quot;station_name&quot;: &quot;Szczawno Zdr&oacute;j - ul. Ogrodowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.805023&quot;,
            &quot;wgs84_e&quot;: &quot;16.257246&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzczRat&quot;,
            &quot;station_name&quot;: &quot;Szczawno Zdr&oacute;j - ul. Ratuszowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.8027&quot;,
            &quot;wgs84_e&quot;: &quot;16.254862&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzklarkiMob&quot;,
            &quot;station_name&quot;: &quot;Szklarki - Mobil&quot;,
            &quot;wgs84_n&quot;: &quot;51.515907&quot;,
            &quot;wgs84_e&quot;: &quot;15.747383&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsSzkPor1MajMOB&quot;,
            &quot;station_name&quot;: &quot;Szklarska Poręba - 1 Maja&quot;,
            &quot;wgs84_n&quot;: &quot;50.822704&quot;,
            &quot;wgs84_e&quot;: &quot;15.528251&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsTarnowek&quot;,
            &quot;station_name&quot;: &quot;Tarn&oacute;wek&quot;,
            &quot;wgs84_n&quot;: &quot;51.513298&quot;,
            &quot;wgs84_e&quot;: &quot;16.166761&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsTrzebBoch&quot;,
            &quot;station_name&quot;: &quot;Trzebnica-Bochenka&quot;,
            &quot;wgs84_n&quot;: &quot;51.31028&quot;,
            &quot;wgs84_e&quot;: &quot;17.062778&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsTrzebLes&quot;,
            &quot;station_name&quot;: &quot;Trzebnica - Leśna&quot;,
            &quot;wgs84_n&quot;: &quot;51.30389&quot;,
            &quot;wgs84_e&quot;: &quot;17.07&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsTrzebMob&quot;,
            &quot;station_name&quot;: &quot;Trzebnica - Mobil Mercedes&quot;,
            &quot;wgs84_n&quot;: &quot;51.30527&quot;,
            &quot;wgs84_e&quot;: &quot;17.060139&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWalbBator&quot;,
            &quot;station_name&quot;: &quot;Wałbrzych - ul. Batorego&quot;,
            &quot;wgs84_n&quot;: &quot;50.77403&quot;,
            &quot;wgs84_e&quot;: &quot;16.278034&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWalbGrodz&quot;,
            &quot;station_name&quot;: &quot;Wałbrzych - ul. Grodzka&quot;,
            &quot;wgs84_n&quot;: &quot;50.823624&quot;,
            &quot;wgs84_e&quot;: &quot;16.275475&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWalbJord&quot;,
            &quot;station_name&quot;: &quot;Wałbrzych - ul. Jordana&quot;,
            &quot;wgs84_n&quot;: &quot;50.759445&quot;,
            &quot;wgs84_e&quot;: &quot;16.241388&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWalbKost&quot;,
            &quot;station_name&quot;: &quot;Wałbrzych - ul. Kosteckiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.762703&quot;,
            &quot;wgs84_e&quot;: &quot;16.244247&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWalbrzWyso&quot;,
            &quot;station_name&quot;: &quot;Wałbrzych - Wysockiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.76873&quot;,
            &quot;wgs84_e&quot;: &quot;16.269676&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWalbWysPArch&quot;,
            &quot;station_name&quot;: &quot;Wałbrzych - ul. Wysockiego (PM10-Arch)&quot;,
            &quot;wgs84_n&quot;: &quot;50.768745&quot;,
            &quot;wgs84_e&quot;: &quot;16.269585&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWitk09&quot;,
            &quot;station_name&quot;: &quot;Witk&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;50.81652&quot;,
            &quot;wgs84_e&quot;: &quot;16.122028&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWitka&quot;,
            &quot;station_name&quot;: &quot;Witka&quot;,
            &quot;wgs84_n&quot;: &quot;51.041138&quot;,
            &quot;wgs84_e&quot;: &quot;14.980327&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWlen03&quot;,
            &quot;station_name&quot;: &quot;Wleń&quot;,
            &quot;wgs84_n&quot;: &quot;51.01225&quot;,
            &quot;wgs84_e&quot;: &quot;15.668279&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocAlWisn&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Wiśniowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.086224&quot;,
            &quot;wgs84_e&quot;: &quot;17.01269&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocBartni&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Bartnicza&quot;,
            &quot;wgs84_n&quot;: &quot;51.115932&quot;,
            &quot;wgs84_e&quot;: &quot;17.141125&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocGrun&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Grunwald&quot;,
            &quot;wgs84_n&quot;: &quot;51.109898&quot;,
            &quot;wgs84_e&quot;: &quot;17.056492&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocKorzPMArch&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Korzeniowskiego (PM10-Arch)&quot;,
            &quot;wgs84_n&quot;: &quot;51.12941&quot;,
            &quot;wgs84_e&quot;: &quot;17.029552&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocKrom&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Kromera&quot;,
            &quot;wgs84_n&quot;: &quot;51.13275&quot;,
            &quot;wgs84_e&quot;: &quot;17.064493&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocNaGrob&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Na Grobli&quot;,
            &quot;wgs84_n&quot;: &quot;51.103455&quot;,
            &quot;wgs84_e&quot;: &quot;17.059225&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocOlsz&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Olszewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.102734&quot;,
            &quot;wgs84_e&quot;: &quot;17.09676&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocOpor&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Oporowska&quot;,
            &quot;wgs84_n&quot;: &quot;51.098026&quot;,
            &quot;wgs84_e&quot;: &quot;17.002064&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocOrzech&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Orzechowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.077526&quot;,
            &quot;wgs84_e&quot;: &quot;17.042816&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocOrzechArch&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Orzechowa (PM10-Arch)&quot;,
            &quot;wgs84_n&quot;: &quot;51.077526&quot;,
            &quot;wgs84_e&quot;: &quot;17.042816&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocPret&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Pretficza&quot;,
            &quot;wgs84_n&quot;: &quot;51.090897&quot;,
            &quot;wgs84_e&quot;: &quot;17.013681&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocSklad&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Składowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.11972&quot;,
            &quot;wgs84_e&quot;: &quot;17.0275&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocTech&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Mł.Technik&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;51.11361&quot;,
            &quot;wgs84_e&quot;: &quot;17.013056&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocUkr&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Ukryta&quot;,
            &quot;wgs84_n&quot;: &quot;51.117027&quot;,
            &quot;wgs84_e&quot;: &quot;17.05386&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocWie&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Wierzbowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.10549&quot;,
            &quot;wgs84_e&quot;: &quot;17.03647&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWrocWybCon&quot;,
            &quot;station_name&quot;: &quot;Wrocław - Korzeniowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.12938&quot;,
            &quot;wgs84_e&quot;: &quot;17.02925&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsWyszkow&quot;,
            &quot;station_name&quot;: &quot;Wyszk&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;50.963535&quot;,
            &quot;wgs84_e&quot;: &quot;14.993653&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZabkKlodz&quot;,
            &quot;station_name&quot;: &quot;Ząbkowice Śląskie - ul. Kłodzka&quot;,
            &quot;wgs84_n&quot;: &quot;50.586033&quot;,
            &quot;wgs84_e&quot;: &quot;16.809694&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZabkPowWar&quot;,
            &quot;station_name&quot;: &quot;Ząbkowice Śląskie&quot;,
            &quot;wgs84_n&quot;: &quot;50.592323&quot;,
            &quot;wgs84_e&quot;: &quot;16.819786&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZameczno&quot;,
            &quot;station_name&quot;: &quot;Zameczno&quot;,
            &quot;wgs84_n&quot;: &quot;51.669506&quot;,
            &quot;wgs84_e&quot;: &quot;15.932111&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZgorBohGet&quot;,
            &quot;station_name&quot;: &quot;Zgorzelec - Bohater&oacute;w Getta&quot;,
            &quot;wgs84_n&quot;: &quot;51.15039&quot;,
            &quot;wgs84_e&quot;: &quot;15.008175&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZgorzMar&quot;,
            &quot;station_name&quot;: &quot;Zgorzelec - Maratońska&quot;,
            &quot;wgs84_n&quot;: &quot;51.14578&quot;,
            &quot;wgs84_e&quot;: &quot;15.012233&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZgorzOrz&quot;,
            &quot;station_name&quot;: &quot;Zgorzelec - Orzeszkowej&quot;,
            &quot;wgs84_n&quot;: &quot;51.130157&quot;,
            &quot;wgs84_e&quot;: &quot;15.001958&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZgorzWar&quot;,
            &quot;station_name&quot;: &quot;Zgorzelec - Warszawska&quot;,
            &quot;wgs84_n&quot;: &quot;51.14842&quot;,
            &quot;wgs84_e&quot;: &quot;15.007949&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZlotKosc&quot;,
            &quot;station_name&quot;: &quot;Złotoryja - Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;51.123325&quot;,
            &quot;wgs84_e&quot;: &quot;15.911288&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZlotoryjaPMArch&quot;,
            &quot;station_name&quot;: &quot;Złotoryja - Staszica (PM10-Arch)&quot;,
            &quot;wgs84_n&quot;: &quot;51.1239&quot;,
            &quot;wgs84_e&quot;: &quot;15.920289&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZlotoStasz&quot;,
            &quot;station_name&quot;: &quot;Złotoryja - Staszica&quot;,
            &quot;wgs84_n&quot;: &quot;51.1239&quot;,
            &quot;wgs84_e&quot;: &quot;15.920289&quot;
        },
        {
            &quot;station_code&quot;: &quot;DsZukowice&quot;,
            &quot;station_name&quot;: &quot;Żukowice&quot;,
            &quot;wgs84_n&quot;: &quot;51.66727&quot;,
            &quot;wgs84_e&quot;: &quot;15.984407&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpAirpKoluda&quot;,
            &quot;station_name&quot;: &quot;Kołuda Wielka Airpointer&quot;,
            &quot;wgs84_n&quot;: &quot;52.73575&quot;,
            &quot;wgs84_e&quot;: &quot;18.148678&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBrodKochan&quot;,
            &quot;station_name&quot;: &quot;Brodnica, Kochanowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.249264&quot;,
            &quot;wgs84_e&quot;: &quot;19.415087&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBrodnZwirki&quot;,
            &quot;station_name&quot;: &quot;Brodnica \&quot;Żwirki\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.2575&quot;,
            &quot;wgs84_e&quot;: &quot;19.406668&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydBerling&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz Fieldorfa&quot;,
            &quot;wgs84_n&quot;: &quot;53.15145&quot;,
            &quot;wgs84_e&quot;: &quot;18.132063&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgATRKalisk&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz \&quot;Fordon ATR\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.142776&quot;,
            &quot;wgs84_e&quot;: &quot;18.126944&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgBlota&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz Białe Błota&quot;,
            &quot;wgs84_n&quot;: &quot;53.100277&quot;,
            &quot;wgs84_e&quot;: &quot;17.920279&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgChemEC&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz Chemiczna EC&quot;,
            &quot;wgs84_n&quot;: &quot;53.104443&quot;,
            &quot;wgs84_e&quot;: &quot;18.07361&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgCO&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz Centrum Onkologiczne&quot;,
            &quot;wgs84_n&quot;: &quot;53.150833&quot;,
            &quot;wgs84_e&quot;: &quot;18.13139&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgMorska&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz \&quot;Morska\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.1275&quot;,
            &quot;wgs84_e&quot;: &quot;18.054443&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgUjejskiego&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz \&quot;Szpital XXX-lecia\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.114723&quot;,
            &quot;wgs84_e&quot;: &quot;18.027222&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgWPola&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz \&quot;W. Pola\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.125&quot;,
            &quot;wgs84_e&quot;: &quot;17.975834&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgWzgWolnosci&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz Wzg&oacute;rze Wolności&quot;,
            &quot;wgs84_n&quot;: &quot;53.115833&quot;,
            &quot;wgs84_e&quot;: &quot;18.016111&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgZachemHutn&quot;,
            &quot;station_name&quot;: &quot;Zachem - Hutnicza&quot;,
            &quot;wgs84_n&quot;: &quot;53.101665&quot;,
            &quot;wgs84_e&quot;: &quot;18.106112&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydgZachemWojska&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz \&quot;Zachem2\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.102222&quot;,
            &quot;wgs84_e&quot;: &quot;18.059444&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydPlPozna&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz Plac Poznański&quot;,
            &quot;wgs84_n&quot;: &quot;53.121773&quot;,
            &quot;wgs84_e&quot;: &quot;17.987883&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpBydWarszaw&quot;,
            &quot;station_name&quot;: &quot;Bydgoszcz Warszawska&quot;,
            &quot;wgs84_n&quot;: &quot;53.134087&quot;,
            &quot;wgs84_e&quot;: &quot;17.995712&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpChelmLunawMOB&quot;,
            &quot;station_name&quot;: &quot;Chełmno, Łunawska 3A&quot;,
            &quot;wgs84_n&quot;: &quot;53.351974&quot;,
            &quot;wgs84_e&quot;: &quot;18.447498&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpChelmnLunawska&quot;,
            &quot;station_name&quot;: &quot;Chełmno \&quot;Łunawska\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.34861&quot;,
            &quot;wgs84_e&quot;: &quot;18.445278&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpCiechTezni&quot;,
            &quot;station_name&quot;: &quot;Ciechocinek&quot;,
            &quot;wgs84_n&quot;: &quot;52.88842&quot;,
            &quot;wgs84_e&quot;: &quot;18.780909&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFAleksandrowK&quot;,
            &quot;station_name&quot;: &quot;Aleksandr&oacute;w Kujawski&quot;,
            &quot;wgs84_n&quot;: &quot;52.878334&quot;,
            &quot;wgs84_e&quot;: &quot;18.6975&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFBrzescK&quot;,
            &quot;station_name&quot;: &quot;Brześć Kujawski&quot;,
            &quot;wgs84_n&quot;: &quot;52.605&quot;,
            &quot;wgs84_e&quot;: &quot;18.906944&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFChelmza&quot;,
            &quot;station_name&quot;: &quot;Chełmża (stacja mobilna)&quot;,
            &quot;wgs84_n&quot;: &quot;53.18639&quot;,
            &quot;wgs84_e&quot;: &quot;18.610556&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFChodecz&quot;,
            &quot;station_name&quot;: &quot;Chodecz&quot;,
            &quot;wgs84_n&quot;: &quot;52.40167&quot;,
            &quot;wgs84_e&quot;: &quot;19.029444&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFDobrzynUM&quot;,
            &quot;station_name&quot;: &quot;Dobrzyń UM&quot;,
            &quot;wgs84_n&quot;: &quot;52.63778&quot;,
            &quot;wgs84_e&quot;: &quot;19.321667&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFGolub&quot;,
            &quot;station_name&quot;: &quot;Golub - Dobrzyń (stacja mobilna)&quot;,
            &quot;wgs84_n&quot;: &quot;53.120556&quot;,
            &quot;wgs84_e&quot;: &quot;19.050556&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFIzbica&quot;,
            &quot;station_name&quot;: &quot;Izbica Kujawska&quot;,
            &quot;wgs84_n&quot;: &quot;52.41948&quot;,
            &quot;wgs84_e&quot;: &quot;18.767221&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFLasin&quot;,
            &quot;station_name&quot;: &quot;Łasin (stacja mobilna)&quot;,
            &quot;wgs84_n&quot;: &quot;53.518333&quot;,
            &quot;wgs84_e&quot;: &quot;19.089443&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFMarusza&quot;,
            &quot;station_name&quot;: &quot;Marusza (stacja mobilna)&quot;,
            &quot;wgs84_n&quot;: &quot;53.453888&quot;,
            &quot;wgs84_e&quot;: &quot;18.791668&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFNieszawa&quot;,
            &quot;station_name&quot;: &quot;Nieszawa&quot;,
            &quot;wgs84_n&quot;: &quot;52.83861&quot;,
            &quot;wgs84_e&quot;: &quot;18.895&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFRadziejowRPGK&quot;,
            &quot;station_name&quot;: &quot;Radziej&oacute;w RPGK&quot;,
            &quot;wgs84_n&quot;: &quot;52.629723&quot;,
            &quot;wgs84_e&quot;: &quot;18.530277&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFRadzyn&quot;,
            &quot;station_name&quot;: &quot;Radzyń Chełmiński (stacja mobilna)&quot;,
            &quot;wgs84_n&quot;: &quot;53.381943&quot;,
            &quot;wgs84_e&quot;: &quot;18.936943&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpDAFRypinKOMES&quot;,
            &quot;station_name&quot;: &quot;RypinKOMES&quot;,
            &quot;wgs84_n&quot;: &quot;53.065556&quot;,
            &quot;wgs84_e&quot;: &quot;19.405277&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpGrudPilsud&quot;,
            &quot;station_name&quot;: &quot;Grudziądz Airpointer&quot;,
            &quot;wgs84_n&quot;: &quot;53.49355&quot;,
            &quot;wgs84_e&quot;: &quot;18.762138&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpGrudSienki&quot;,
            &quot;station_name&quot;: &quot;Grudziądz Star&oacute;wka&quot;,
            &quot;wgs84_n&quot;: &quot;53.491833&quot;,
            &quot;wgs84_e&quot;: &quot;18.752588&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpGrudzIkara&quot;,
            &quot;station_name&quot;: &quot;Grudziądz \&quot;Ikara\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.46417&quot;,
            &quot;wgs84_e&quot;: &quot;18.769444&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpGrudzKosynierow&quot;,
            &quot;station_name&quot;: &quot;Grudziądz \&quot;Kosynier&oacute;w\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.49278&quot;,
            &quot;wgs84_e&quot;: &quot;18.754168&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowOsMatwMOB&quot;,
            &quot;station_name&quot;: &quot;Inowrocław Mątwy airponter&quot;,
            &quot;wgs84_n&quot;: &quot;52.755688&quot;,
            &quot;wgs84_e&quot;: &quot;18.25438&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowrKleeberga&quot;,
            &quot;station_name&quot;: &quot;Inowrocław \&quot;Rąbin\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.786667&quot;,
            &quot;wgs84_e&quot;: &quot;18.250557&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowrMatewska&quot;,
            &quot;station_name&quot;: &quot;Soda-Mątwy \&quot;Mątewska\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.751945&quot;,
            &quot;wgs84_e&quot;: &quot;18.2625&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowrPlacKlaszt&quot;,
            &quot;station_name&quot;: &quot;Inowrocław \&quot;Śr&oacute;dmieście\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.796665&quot;,
            &quot;wgs84_e&quot;: &quot;18.258888&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowrPoznanska&quot;,
            &quot;station_name&quot;: &quot;Inowrocław \&quot;Poznańska\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.75&quot;,
            &quot;wgs84_e&quot;: &quot;18.2525&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowrSolan&quot;,
            &quot;station_name&quot;: &quot;Inowrocław Solankowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.794724&quot;,
            &quot;wgs84_e&quot;: &quot;18.245&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowrSolankowa&quot;,
            &quot;station_name&quot;: &quot;Inowrocław \&quot;Uzdrowisko\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.79361&quot;,
            &quot;wgs84_e&quot;: &quot;18.243334&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpInowSolank&quot;,
            &quot;station_name&quot;: &quot;Inowrocław Airpointer&quot;,
            &quot;wgs84_n&quot;: &quot;52.79312&quot;,
            &quot;wgs84_e&quot;: &quot;18.241043&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpKoniczynka&quot;,
            &quot;station_name&quot;: &quot;Koniczynka&quot;,
            &quot;wgs84_n&quot;: &quot;53.080647&quot;,
            &quot;wgs84_e&quot;: &quot;18.684258&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpKruszwicamob&quot;,
            &quot;station_name&quot;: &quot;Kruszwica&quot;,
            &quot;wgs84_n&quot;: &quot;52.678055&quot;,
            &quot;wgs84_e&quot;: &quot;18.314167&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpKruszynLotnisko&quot;,
            &quot;station_name&quot;: &quot;Lotnisko Kruszyn&quot;,
            &quot;wgs84_n&quot;: &quot;52.586113&quot;,
            &quot;wgs84_e&quot;: &quot;19.01&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpMogilKosciuszki&quot;,
            &quot;station_name&quot;: &quot;Mogilno&quot;,
            &quot;wgs84_n&quot;: &quot;52.65917&quot;,
            &quot;wgs84_e&quot;: &quot;17.949722&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpMogiNowMOB&quot;,
            &quot;station_name&quot;: &quot;Mogilno,Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;52.65684&quot;,
            &quot;wgs84_e&quot;: &quot;17.949566&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpNakloSkargi&quot;,
            &quot;station_name&quot;: &quot;Nakło&quot;,
            &quot;wgs84_n&quot;: &quot;53.139442&quot;,
            &quot;wgs84_e&quot;: &quot;17.607779&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpNaklSkargi&quot;,
            &quot;station_name&quot;: &quot;Nakło Piotra Skargi&quot;,
            &quot;wgs84_n&quot;: &quot;53.13836&quot;,
            &quot;wgs84_e&quot;: &quot;17.605139&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpNwiesNaftobazy&quot;,
            &quot;station_name&quot;: &quot;Naftobazy&quot;,
            &quot;wgs84_n&quot;: &quot;52.97028&quot;,
            &quot;wgs84_e&quot;: &quot;18.091389&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpPiech&quot;,
            &quot;station_name&quot;: &quot;Lafarge-Piechcin&quot;,
            &quot;wgs84_n&quot;: &quot;52.816387&quot;,
            &quot;wgs84_e&quot;: &quot;18.032778&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpPrzysRCRRiOW&quot;,
            &quot;station_name&quot;: &quot;Przysiek - RCRRiOW&quot;,
            &quot;wgs84_n&quot;: &quot;53.029446&quot;,
            &quot;wgs84_e&quot;: &quot;18.504444&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpSadlog&quot;,
            &quot;station_name&quot;: &quot;Lafarge-Sadłogoszcz&quot;,
            &quot;wgs84_n&quot;: &quot;52.844723&quot;,
            &quot;wgs84_e&quot;: &quot;18.005&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpSepolno&quot;,
            &quot;station_name&quot;: &quot;Sęp&oacute;lno Krajeńskie&quot;,
            &quot;wgs84_n&quot;: &quot;53.4475&quot;,
            &quot;wgs84_e&quot;: &quot;17.527779&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpSwiecGruczno&quot;,
            &quot;station_name&quot;: &quot;Frantschach - Gruczno&quot;,
            &quot;wgs84_n&quot;: &quot;53.364723&quot;,
            &quot;wgs84_e&quot;: &quot;18.316668&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpSwiecGruczno2&quot;,
            &quot;station_name&quot;: &quot;02 - Gruczno&quot;,
            &quot;wgs84_n&quot;: &quot;53.355556&quot;,
            &quot;wgs84_e&quot;: &quot;18.318333&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpSwiecKolejowa&quot;,
            &quot;station_name&quot;: &quot;Frantschach - stacja nr 1&quot;,
            &quot;wgs84_n&quot;: &quot;53.398056&quot;,
            &quot;wgs84_e&quot;: &quot;18.41639&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpSwiecPrzechowo&quot;,
            &quot;station_name&quot;: &quot;01 Przechowo&quot;,
            &quot;wgs84_n&quot;: &quot;53.398056&quot;,
            &quot;wgs84_e&quot;: &quot;18.41639&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpSwiecSadowa&quot;,
            &quot;station_name&quot;: &quot;Świecie \&quot;Sądowa\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.407223&quot;,
            &quot;wgs84_e&quot;: &quot;18.45389&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpToruDziewu&quot;,
            &quot;station_name&quot;: &quot;Toruń POLICJA&quot;,
            &quot;wgs84_n&quot;: &quot;53.02865&quot;,
            &quot;wgs84_e&quot;: &quot;18.666103&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpToruKaszow&quot;,
            &quot;station_name&quot;: &quot;Toruń, KASZOWNIK&quot;,
            &quot;wgs84_n&quot;: &quot;53.017628&quot;,
            &quot;wgs84_e&quot;: &quot;18.612808&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTorunGagarina&quot;,
            &quot;station_name&quot;: &quot;Toruń \&quot;Gagarina\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.018333&quot;,
            &quot;wgs84_e&quot;: &quot;18.565&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTorunKonstytucji&quot;,
            &quot;station_name&quot;: &quot;Toruń \&quot;Konstytucji\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.023888&quot;,
            &quot;wgs84_e&quot;: &quot;18.681667&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTorunKopernika&quot;,
            &quot;station_name&quot;: &quot;Toruń \&quot;Kopernika\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;53.009167&quot;,
            &quot;wgs84_e&quot;: &quot;18.604168&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTorunLotnisko&quot;,
            &quot;station_name&quot;: &quot;Toruń, LOTNISKO&quot;,
            &quot;wgs84_n&quot;: &quot;53.02833&quot;,
            &quot;wgs84_e&quot;: &quot;18.561678&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTorunOPSIS&quot;,
            &quot;station_name&quot;: &quot;Toruń, OPSIS&quot;,
            &quot;wgs84_n&quot;: &quot;53.01361&quot;,
            &quot;wgs84_e&quot;: &quot;18.604721&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTorunPoznanska&quot;,
            &quot;station_name&quot;: &quot;Toruń \&quot;Poznańska\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.99361&quot;,
            &quot;wgs84_e&quot;: &quot;18.595278&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdKutnoWIOSMWilcza&quot;,
            &quot;station_name&quot;: &quot;Kutno Wilcza&quot;,
            &quot;wgs84_n&quot;: &quot;52.22849&quot;,
            &quot;wgs84_e&quot;: &quot;19.372206&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTorunSzpMiejski&quot;,
            &quot;station_name&quot;: &quot;Toruń Szpital Miejski&quot;,
            &quot;wgs84_n&quot;: &quot;53.0225&quot;,
            &quot;wgs84_e&quot;: &quot;18.620832&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpToruStorczMOB&quot;,
            &quot;station_name&quot;: &quot;Toruń, ul. Storczykowa&quot;,
            &quot;wgs84_n&quot;: &quot;53.041946&quot;,
            &quot;wgs84_e&quot;: &quot;18.595036&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpToruWSikor&quot;,
            &quot;station_name&quot;: &quot;Toruń Airpointer&quot;,
            &quot;wgs84_n&quot;: &quot;53.012474&quot;,
            &quot;wgs84_e&quot;: &quot;18.60568&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTuchPiast&quot;,
            &quot;station_name&quot;: &quot;Tuchola Piastowska&quot;,
            &quot;wgs84_n&quot;: &quot;53.58596&quot;,
            &quot;wgs84_e&quot;: &quot;17.86935&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpTuchPiastowska&quot;,
            &quot;station_name&quot;: &quot;Tuchola&quot;,
            &quot;wgs84_n&quot;: &quot;53.585835&quot;,
            &quot;wgs84_e&quot;: &quot;17.871668&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWabrzMuzeum&quot;,
            &quot;station_name&quot;: &quot;Wąbrzeźno - muzeum&quot;,
            &quot;wgs84_n&quot;: &quot;53.27972&quot;,
            &quot;wgs84_e&quot;: &quot;18.954166&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWabrzstmob&quot;,
            &quot;station_name&quot;: &quot;Wąbrzeźno (stacja mobilna)&quot;,
            &quot;wgs84_n&quot;: &quot;53.27833&quot;,
            &quot;wgs84_e&quot;: &quot;18.966667&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWieniecZdrMOB&quot;,
            &quot;station_name&quot;: &quot;Airponter Wieniec Zdr&oacute;j&quot;,
            &quot;wgs84_n&quot;: &quot;52.656864&quot;,
            &quot;wgs84_e&quot;: &quot;18.987368&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWieniZdroj&quot;,
            &quot;station_name&quot;: &quot;Wieniec Zdr&oacute;j, ul. Wieniecka&quot;,
            &quot;wgs84_n&quot;: &quot;52.656864&quot;,
            &quot;wgs84_e&quot;: &quot;18.987368&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWienSanatorium&quot;,
            &quot;station_name&quot;: &quot;Wieniec-Zdr&oacute;j Sanatorium \&quot;Jutrzenka\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.656944&quot;,
            &quot;wgs84_e&quot;: &quot;18.988611&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWiktorowoG&quot;,
            &quot;station_name&quot;: &quot;Lafarge- Airpointer&quot;,
            &quot;wgs84_n&quot;: &quot;52.82294&quot;,
            &quot;wgs84_e&quot;: &quot;17.859032&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclChelmMOB&quot;,
            &quot;station_name&quot;: &quot;Airpointer Włocławek&quot;,
            &quot;wgs84_n&quot;: &quot;52.67265&quot;,
            &quot;wgs84_e&quot;: &quot;19.079262&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclGnia2&quot;,
            &quot;station_name&quot;: &quot;Włocławek, ul. Gniazdowskiego2&quot;,
            &quot;wgs84_n&quot;: &quot;52.65156&quot;,
            &quot;wgs84_e&quot;: &quot;19.051886&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclGniaz&quot;,
            &quot;station_name&quot;: &quot;Włocławek, ul. Gniazdowskiego 7&quot;,
            &quot;wgs84_n&quot;: &quot;52.65156&quot;,
            &quot;wgs84_e&quot;: &quot;19.051886&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclKalis&quot;,
            &quot;station_name&quot;: &quot;Włocławek, ul. Kaliska&quot;,
            &quot;wgs84_n&quot;: &quot;52.637394&quot;,
            &quot;wgs84_e&quot;: &quot;19.044485&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclKilinskiego&quot;,
            &quot;station_name&quot;: &quot;Włocławek \&quot;Kilińskiego\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.656387&quot;,
            &quot;wgs84_e&quot;: &quot;19.062778&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclLady&quot;,
            &quot;station_name&quot;: &quot;Włocławek \&quot;Łady\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.641945&quot;,
            &quot;wgs84_e&quot;: &quot;19.0475&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclMalinowa&quot;,
            &quot;station_name&quot;: &quot;Włocławek \&quot;Malinowa\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.67861&quot;,
            &quot;wgs84_e&quot;: &quot;19.051666&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclOkrze&quot;,
            &quot;station_name&quot;: &quot;Włocławek OKRZEI&quot;,
            &quot;wgs84_n&quot;: &quot;52.658466&quot;,
            &quot;wgs84_e&quot;: &quot;19.059315&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclOpsis&quot;,
            &quot;station_name&quot;: &quot;OPSIS Włocławek&quot;,
            &quot;wgs84_n&quot;: &quot;52.663055&quot;,
            &quot;wgs84_e&quot;: &quot;19.07&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclPlocka&quot;,
            &quot;station_name&quot;: &quot;Włocławek \&quot;Płocka\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.654446&quot;,
            &quot;wgs84_e&quot;: &quot;19.101667&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclSiels&quot;,
            &quot;station_name&quot;: &quot;Włocławek Sielska \&quot;DMD\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.664722&quot;,
            &quot;wgs84_e&quot;: &quot;19.036386&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWloclWSHE&quot;,
            &quot;station_name&quot;: &quot;Włocławek WSHE&quot;,
            &quot;wgs84_n&quot;: &quot;52.663055&quot;,
            &quot;wgs84_e&quot;: &quot;19.056389&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWlocZytnia&quot;,
            &quot;station_name&quot;: &quot;Włocławek \&quot;Żytnia\&quot;&quot;,
            &quot;wgs84_n&quot;: &quot;52.64639&quot;,
            &quot;wgs84_e&quot;: &quot;19.09111&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpWolice&quot;,
            &quot;station_name&quot;: &quot;Lafarge-Wolice&quot;,
            &quot;wgs84_n&quot;: &quot;52.854168&quot;,
            &quot;wgs84_e&quot;: &quot;17.900278&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpZielBoryTu&quot;,
            &quot;station_name&quot;: &quot;Bory Tucholskie&quot;,
            &quot;wgs84_n&quot;: &quot;53.662136&quot;,
            &quot;wgs84_e&quot;: &quot;17.933987&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpZninBrowarowa&quot;,
            &quot;station_name&quot;: &quot;Żnin&quot;,
            &quot;wgs84_n&quot;: &quot;52.851665&quot;,
            &quot;wgs84_e&quot;: &quot;17.715555&quot;
        },
        {
            &quot;station_code&quot;: &quot;KpZninPotock&quot;,
            &quot;station_name&quot;: &quot;Żnin Starostwo Potockiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.848454&quot;,
            &quot;wgs84_e&quot;: &quot;17.734085&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbBialaPKopernika&quot;,
            &quot;station_name&quot;: &quot;PSSE-Biała-Kopernika&quot;,
            &quot;wgs84_n&quot;: &quot;52.034187&quot;,
            &quot;wgs84_e&quot;: &quot;23.102736&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbBialaPPl.TrzechKrzyzy&quot;,
            &quot;station_name&quot;: &quot;PSSE-Biała-Pl.TrzechKrzyży&quot;,
            &quot;wgs84_n&quot;: &quot;52.023857&quot;,
            &quot;wgs84_e&quot;: &quot;23.116041&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbBialySlupRPN&quot;,
            &quot;station_name&quot;: &quot;Biały Słup&quot;,
            &quot;wgs84_n&quot;: &quot;50.591743&quot;,
            &quot;wgs84_e&quot;: &quot;22.99781&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbBiaPodOrze&quot;,
            &quot;station_name&quot;: &quot;BiałaP-Orzechowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.029194&quot;,
            &quot;wgs84_e&quot;: &quot;23.14939&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbBiaSlupRPN&quot;,
            &quot;station_name&quot;: &quot;Biały Słup (RPN)&quot;,
            &quot;wgs84_n&quot;: &quot;50.590805&quot;,
            &quot;wgs84_e&quot;: &quot;22.997889&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbBilgorajWSSE&quot;,
            &quot;station_name&quot;: &quot;Biłgoraj ul. Dąbrowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.53389&quot;,
            &quot;wgs84_e&quot;: &quot;22.716667&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbChelJagiel&quot;,
            &quot;station_name&quot;: &quot;Chełm ul. Jagiellońska&quot;,
            &quot;wgs84_n&quot;: &quot;51.13095&quot;,
            &quot;wgs84_e&quot;: &quot;23.514603&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbChelmPolWSSE&quot;,
            &quot;station_name&quot;: &quot;Chełm ul. Połaniecka&quot;,
            &quot;wgs84_n&quot;: &quot;51.12278&quot;,
            &quot;wgs84_e&quot;: &quot;23.473333&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbChelmSzpWSSE&quot;,
            &quot;station_name&quot;: &quot;Chełm ul. Szpitalna&quot;,
            &quot;wgs84_n&quot;: &quot;51.150276&quot;,
            &quot;wgs84_e&quot;: &quot;23.4575&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbChelPolan&quot;,
            &quot;station_name&quot;: &quot;Chełm ul.Połaniecka&quot;,
            &quot;wgs84_n&quot;: &quot;51.12219&quot;,
            &quot;wgs84_e&quot;: &quot;23.47287&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbDorohWIOS&quot;,
            &quot;station_name&quot;: &quot;Dorohusk&quot;,
            &quot;wgs84_n&quot;: &quot;51.175556&quot;,
            &quot;wgs84_e&quot;: &quot;23.801666&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbFlorianRPN&quot;,
            &quot;station_name&quot;: &quot;Florianka RPN&quot;,
            &quot;wgs84_n&quot;: &quot;50.551895&quot;,
            &quot;wgs84_e&quot;: &quot;22.98286&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbHrubieszowWIOS&quot;,
            &quot;station_name&quot;: &quot;Hrubiesz&oacute;w Gr&oacute;decka&quot;,
            &quot;wgs84_n&quot;: &quot;50.80472&quot;,
            &quot;wgs84_e&quot;: &quot;23.913055&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbHrubieszowWSSE&quot;,
            &quot;station_name&quot;: &quot;Hrubiesz&oacute;w Mickiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;50.802776&quot;,
            &quot;wgs84_e&quot;: &quot;23.89611&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbJarczWolaM&quot;,
            &quot;station_name&quot;: &quot;IMGW-Jarczew&quot;,
            &quot;wgs84_n&quot;: &quot;51.814365&quot;,
            &quot;wgs84_e&quot;: &quot;21.972376&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbKra-awWSSE&quot;,
            &quot;station_name&quot;: &quot;Krasnystaw ul. Sikorskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.98155&quot;,
            &quot;wgs84_e&quot;: &quot;23.170486&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZaryWIOS_MAN&quot;,
            &quot;station_name&quot;: &quot;Żary ul. Podchorążych&quot;,
            &quot;wgs84_n&quot;: &quot;51.6399&quot;,
            &quot;wgs84_e&quot;: &quot;15.136131&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbKrasKoszar&quot;,
            &quot;station_name&quot;: &quot;Kraśnik ul. Koszarowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.928238&quot;,
            &quot;wgs84_e&quot;: &quot;22.228308&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbKrasnikSpoldziel&quot;,
            &quot;station_name&quot;: &quot;Kraśnik Ul. Sp&oacute;łdzielcza&quot;,
            &quot;wgs84_n&quot;: &quot;50.927486&quot;,
            &quot;wgs84_e&quot;: &quot;22.228567&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbKrasnobrod&quot;,
            &quot;station_name&quot;: &quot;Krasnobr&oacute;d&quot;,
            &quot;wgs84_n&quot;: &quot;50.549297&quot;,
            &quot;wgs84_e&quot;: &quot;23.197317&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbKrasnobrodWSSELel&quot;,
            &quot;station_name&quot;: &quot;Krasnobr&oacute;d ul. Lelewela 2&quot;,
            &quot;wgs84_n&quot;: &quot;50.54385&quot;,
            &quot;wgs84_e&quot;: &quot;23.215858&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLeczna1000Lecia&quot;,
            &quot;station_name&quot;: &quot;Łęczna ul. 1000-Lecia&quot;,
            &quot;wgs84_n&quot;: &quot;51.30445&quot;,
            &quot;wgs84_e&quot;: &quot;22.883331&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublin_Chmielna&quot;,
            &quot;station_name&quot;: &quot;Lublin ul. Chmielna&quot;,
            &quot;wgs84_n&quot;: &quot;51.25129&quot;,
            &quot;wgs84_e&quot;: &quot;22.5558&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublin_Krasn&quot;,
            &quot;station_name&quot;: &quot;Lublin Al. Kraśnicka&quot;,
            &quot;wgs84_n&quot;: &quot;51.247227&quot;,
            &quot;wgs84_e&quot;: &quot;22.523884&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublinMaszynowa&quot;,
            &quot;station_name&quot;: &quot;Lublin ul. Maszynowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.24443&quot;,
            &quot;wgs84_e&quot;: &quot;22.595297&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublinNadrzecz&quot;,
            &quot;station_name&quot;: &quot;Lublin Ul. Nadrzeczna&quot;,
            &quot;wgs84_n&quot;: &quot;51.222225&quot;,
            &quot;wgs84_e&quot;: &quot;22.581821&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublinObywat_13&quot;,
            &quot;station_name&quot;: &quot;Lublin ul. Obywatelska 13&quot;,
            &quot;wgs84_n&quot;: &quot;51.25927&quot;,
            &quot;wgs84_e&quot;: &quot;22.568521&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublinOgrod&quot;,
            &quot;station_name&quot;: &quot;Lublin Ogr&oacute;d Botaniczny&quot;,
            &quot;wgs84_n&quot;: &quot;51.263966&quot;,
            &quot;wgs84_e&quot;: &quot;22.514582&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublinPiel&quot;,
            &quot;station_name&quot;: &quot;Lublin Ul. Pielęgniarek&quot;,
            &quot;wgs84_n&quot;: &quot;51.239445&quot;,
            &quot;wgs84_e&quot;: &quot;22.5075&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLublinSpokojna&quot;,
            &quot;station_name&quot;: &quot;Lublin Ul. Spokojna (Śr&oacute;dmieście)&quot;,
            &quot;wgs84_n&quot;: &quot;51.250732&quot;,
            &quot;wgs84_e&quot;: &quot;22.55477&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLubObywate&quot;,
            &quot;station_name&quot;: &quot;Lublin ul. Obywatelska&quot;,
            &quot;wgs84_n&quot;: &quot;51.25943&quot;,
            &quot;wgs84_e&quot;: &quot;22.569134&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLubSliwins&quot;,
            &quot;station_name&quot;: &quot;Lublin Ul. Śliwińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.27308&quot;,
            &quot;wgs84_e&quot;: &quot;22.551676&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLukowBrowarna&quot;,
            &quot;station_name&quot;: &quot;WIOŚ-Łuk&oacute;w-Browarna&quot;,
            &quot;wgs84_n&quot;: &quot;51.928562&quot;,
            &quot;wgs84_e&quot;: &quot;22.377758&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbLukowSpoldzielcza&quot;,
            &quot;station_name&quot;: &quot;PSSE-Łuk&oacute;w-Sp&oacute;łdzielcza&quot;,
            &quot;wgs84_n&quot;: &quot;51.92972&quot;,
            &quot;wgs84_e&quot;: &quot;22.38057&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbMiedzPModrzewiowa&quot;,
            &quot;station_name&quot;: &quot;PSSE-MiędzyrzecP-Modrzewiowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.996063&quot;,
            &quot;wgs84_e&quot;: &quot;22.80254&quot;
        },
        {
            &quot;station_code&quot;: &quot;LBMiedzPStaromiejska&quot;,
            &quot;station_name&quot;: &quot;PSSE-MiędzyrzecP-Staromiejska&quot;,
            &quot;wgs84_n&quot;: &quot;51.98528&quot;,
            &quot;wgs84_e&quot;: &quot;22.787098&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbNaleczow&quot;,
            &quot;station_name&quot;: &quot;Nałęcz&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;51.28493&quot;,
            &quot;wgs84_e&quot;: &quot;22.210241&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbNaleczowKasztan&quot;,
            &quot;station_name&quot;: &quot;Nałęcz&oacute;w Ul. Kasztanowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.28736&quot;,
            &quot;wgs84_e&quot;: &quot;22.208233&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbPulaKarpin&quot;,
            &quot;station_name&quot;: &quot;Puławy ul. Karpińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.41905&quot;,
            &quot;wgs84_e&quot;: &quot;21.961088&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbPulaSkowie&quot;,
            &quot;station_name&quot;: &quot;Puławy ul. Skowieszyńska&quot;,
            &quot;wgs84_n&quot;: &quot;51.410614&quot;,
            &quot;wgs84_e&quot;: &quot;21.976376&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbPulawyLubelska&quot;,
            &quot;station_name&quot;: &quot;Puławy Ul. Lubelska&quot;,
            &quot;wgs84_n&quot;: &quot;51.41726&quot;,
            &quot;wgs84_e&quot;: &quot;21.972761&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbRadzPodSit&quot;,
            &quot;station_name&quot;: &quot;RadzyńP-Sitkowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.78&quot;,
            &quot;wgs84_e&quot;: &quot;22.625944&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbRadzyPPocztowa&quot;,
            &quot;station_name&quot;: &quot;PSSE-RadzyńP-Pocztowa&quot;,
            &quot;wgs84_n&quot;: &quot;51.784557&quot;,
            &quot;wgs84_e&quot;: &quot;22.619614&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbRejowiecFabrWIOS&quot;,
            &quot;station_name&quot;: &quot;Rejowiec Fabryczny&quot;,
            &quot;wgs84_n&quot;: &quot;51.11028&quot;,
            &quot;wgs84_e&quot;: &quot;23.246944&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbSwidnikWPolskiego&quot;,
            &quot;station_name&quot;: &quot;Świdnik ul. Wojska Polskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.22192&quot;,
            &quot;wgs84_e&quot;: &quot;22.687218&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbSwidnikWyszyns&quot;,
            &quot;station_name&quot;: &quot;Świdnik Ul. Wyszyńskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.217625&quot;,
            &quot;wgs84_e&quot;: &quot;22.698713&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbSzczebPartyzantow&quot;,
            &quot;station_name&quot;: &quot;Szczebrzeszyn&quot;,
            &quot;wgs84_n&quot;: &quot;50.698055&quot;,
            &quot;wgs84_e&quot;: &quot;22.971945&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbTomaszowLubWIOS&quot;,
            &quot;station_name&quot;: &quot;Tomasz&oacute;w Lubelski ul. Lwowska 68&quot;,
            &quot;wgs84_n&quot;: &quot;50.4475&quot;,
            &quot;wgs84_e&quot;: &quot;23.414444&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbTomaszowLubWSSE&quot;,
            &quot;station_name&quot;: &quot;Tomasz&oacute;w Lubelski ul. Lwowska 51&quot;,
            &quot;wgs84_n&quot;: &quot;50.447777&quot;,
            &quot;wgs84_e&quot;: &quot;23.416945&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbWilczopole&quot;,
            &quot;station_name&quot;: &quot;Lublin-Podmiejska&quot;,
            &quot;wgs84_n&quot;: &quot;51.163544&quot;,
            &quot;wgs84_e&quot;: &quot;22.598608&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbWlodawWSSE&quot;,
            &quot;station_name&quot;: &quot;Włodawa ul. Pilsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.552307&quot;,
            &quot;wgs84_e&quot;: &quot;23.554407&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbZamoHrubie&quot;,
            &quot;station_name&quot;: &quot;Zamość ul. Hrubieszowska 69A&quot;,
            &quot;wgs84_n&quot;: &quot;50.71663&quot;,
            &quot;wgs84_e&quot;: &quot;23.290247&quot;
        },
        {
            &quot;station_code&quot;: &quot;LbZamoscWSSE&quot;,
            &quot;station_name&quot;: &quot;Zamość ul. Peowiak&oacute;w 96&quot;,
            &quot;wgs84_n&quot;: &quot;50.71611&quot;,
            &quot;wgs84_e&quot;: &quot;23.260834&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdAlekslWSSEMSklodow&quot;,
            &quot;station_name&quot;: &quot;Aleksandr&oacute;w Ł.-Skłodowskiej Curie1&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdBelchatEdward&quot;,
            &quot;station_name&quot;: &quot;Bełchat&oacute;w-Edward&oacute;w 5&quot;,
            &quot;wgs84_n&quot;: &quot;51.35661&quot;,
            &quot;wgs84_e&quot;: &quot;19.365807&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdBelchaWSSEMOkrzei&quot;,
            &quot;station_name&quot;: &quot;Bełchat&oacute;w-Okrzei49&quot;,
            &quot;wgs84_n&quot;: &quot;51.36028&quot;,
            &quot;wgs84_e&quot;: &quot;19.367779&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdBrzeReform&quot;,
            &quot;station_name&quot;: &quot;Brzeziny-Reformacka1&quot;,
            &quot;wgs84_n&quot;: &quot;51.797813&quot;,
            &quot;wgs84_e&quot;: &quot;19.75577&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdBrzeziWSSEMReforma&quot;,
            &quot;station_name&quot;: &quot;Brzeziny-Reformacka&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdGajewUjWod&quot;,
            &quot;station_name&quot;: &quot;Gajew&quot;,
            &quot;wgs84_n&quot;: &quot;52.14325&quot;,
            &quot;wgs84_e&quot;: &quot;19.233225&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdKutn1Maja7MOB&quot;,
            &quot;station_name&quot;: &quot;Kutno-1 Maja 7&quot;,
            &quot;wgs84_n&quot;: &quot;52.231728&quot;,
            &quot;wgs84_e&quot;: &quot;19.353743&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdKutnKosciu&quot;,
            &quot;station_name&quot;: &quot;Kutno-Kościuszki 26&quot;,
            &quot;wgs84_n&quot;: &quot;52.23448&quot;,
            &quot;wgs84_e&quot;: &quot;19.368187&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdKutnoWSSEMGrunwal&quot;,
            &quot;station_name&quot;: &quot;Kutno-Grunwaldzka2&quot;,
            &quot;wgs84_n&quot;: &quot;52.229168&quot;,
            &quot;wgs84_e&quot;: &quot;19.372223&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLaskWSSEMWarszaw&quot;,
            &quot;station_name&quot;: &quot;Łask-Warszawska&quot;,
            &quot;wgs84_n&quot;: &quot;51.59&quot;,
            &quot;wgs84_e&quot;: &quot;19.147223&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzCzerni&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Widzew&quot;,
            &quot;wgs84_n&quot;: &quot;51.75805&quot;,
            &quot;wgs84_e&quot;: &quot;19.529785&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzGdansk&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Gdańska 16&quot;,
            &quot;wgs84_n&quot;: &quot;51.77541&quot;,
            &quot;wgs84_e&quot;: &quot;19.4509&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzJanPaw&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Jana Pawła II 15&quot;,
            &quot;wgs84_n&quot;: &quot;51.754612&quot;,
            &quot;wgs84_e&quot;: &quot;19.434925&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzKilins&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Kilińskiego 102/102a&quot;,
            &quot;wgs84_n&quot;: &quot;51.7638&quot;,
            &quot;wgs84_e&quot;: &quot;19.467133&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzLegion&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Legion&oacute;w 1&quot;,
            &quot;wgs84_n&quot;: &quot;51.776417&quot;,
            &quot;wgs84_e&quot;: &quot;19.452936&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzRudzka&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Rudzka60&quot;,
            &quot;wgs84_n&quot;: &quot;51.70558&quot;,
            &quot;wgs84_e&quot;: &quot;19.434841&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWIOSARubinst&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Śr&oacute;dmieście&quot;,
            &quot;wgs84_n&quot;: &quot;51.767292&quot;,
            &quot;wgs84_e&quot;: &quot;19.45534&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMAstrona&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Astronaut&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;51.726112&quot;,
            &quot;wgs84_e&quot;: &quot;19.461945&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMDeczyns&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Deczyńskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.80389&quot;,
            &quot;wgs84_e&quot;: &quot;19.471111&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMPrzybys&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Przybyszewskiego10&quot;,
            &quot;wgs84_n&quot;: &quot;51.744167&quot;,
            &quot;wgs84_e&quot;: &quot;19.467228&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMRokicin&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Rokicińska144&quot;,
            &quot;wgs84_n&quot;: &quot;51.758057&quot;,
            &quot;wgs84_e&quot;: &quot;19.560278&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMWici3&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Wici3&quot;,
            &quot;wgs84_n&quot;: &quot;51.79861&quot;,
            &quot;wgs84_e&quot;: &quot;19.384722&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMWilensk&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Wileńska25&quot;,
            &quot;wgs84_n&quot;: &quot;51.752777&quot;,
            &quot;wgs84_e&quot;: &quot;19.428333&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMWodna40&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-WSSE Wodna40&quot;,
            &quot;wgs84_n&quot;: &quot;51.761665&quot;,
            &quot;wgs84_e&quot;: &quot;19.476944&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzWSSEMZachodn&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Zachodnia81&quot;,
            &quot;wgs84_n&quot;: &quot;51.774723&quot;,
            &quot;wgs84_e&quot;: &quot;19.455004&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLodzZachod&quot;,
            &quot;station_name&quot;: &quot;Ł&oacute;dź-Zachodnia 40&quot;,
            &quot;wgs84_n&quot;: &quot;51.777603&quot;,
            &quot;wgs84_e&quot;: &quot;19.452408&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLowiczSien&quot;,
            &quot;station_name&quot;: &quot;Łowicz-Henryka Sienkiewicza 62&quot;,
            &quot;wgs84_n&quot;: &quot;52.105854&quot;,
            &quot;wgs84_e&quot;: &quot;19.939552&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdLowiczWSSEMSwFlori&quot;,
            &quot;station_name&quot;: &quot;Łowicz-Św.Floriana3&quot;,
            &quot;wgs84_n&quot;: &quot;52.108055&quot;,
            &quot;wgs84_e&quot;: &quot;19.936943&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdOpocCurieSk&quot;,
            &quot;station_name&quot;: &quot;Opoczno-Curie-Skłodowskiej 5&quot;,
            &quot;wgs84_n&quot;: &quot;51.379128&quot;,
            &quot;wgs84_e&quot;: &quot;20.28217&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdOpocPlKosc&quot;,
            &quot;station_name&quot;: &quot;Opoczno-Pl Kościuszki 15&quot;,
            &quot;wgs84_n&quot;: &quot;51.375843&quot;,
            &quot;wgs84_e&quot;: &quot;20.289236&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdOpocznWSSEMPlKosci&quot;,
            &quot;station_name&quot;: &quot;Opoczno-Pl Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;51.375&quot;,
            &quot;wgs84_e&quot;: &quot;20.275007&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdOzorkoWSSEMWigury1&quot;,
            &quot;station_name&quot;: &quot;Ozork&oacute;w-Wigury 1&quot;,
            &quot;wgs84_n&quot;: &quot;51.96722&quot;,
            &quot;wgs84_e&quot;: &quot;19.290283&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPabianWSSEMNowa&quot;,
            &quot;station_name&quot;: &quot;Pabianice-Nowa1&quot;,
            &quot;wgs84_n&quot;: &quot;51.65917&quot;,
            &quot;wgs84_e&quot;: &quot;19.320833&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPabiKilins&quot;,
            &quot;station_name&quot;: &quot;Pabianice-Kilińskiego 4&quot;,
            &quot;wgs84_n&quot;: &quot;51.66318&quot;,
            &quot;wgs84_e&quot;: &quot;19.355486&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPabiKonsta&quot;,
            &quot;station_name&quot;: &quot;Pabianice-Polfa&quot;,
            &quot;wgs84_n&quot;: &quot;51.66798&quot;,
            &quot;wgs84_e&quot;: &quot;19.368683&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPajeczWSSEMZeromsk&quot;,
            &quot;station_name&quot;: &quot;Pajęczno-Żeromskiego 7&quot;,
            &quot;wgs84_n&quot;: &quot;51.150555&quot;,
            &quot;wgs84_e&quot;: &quot;18.987782&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdParzniUjWo&quot;,
            &quot;station_name&quot;: &quot;Parzniewice&quot;,
            &quot;wgs84_n&quot;: &quot;51.291176&quot;,
            &quot;wgs84_e&quot;: &quot;19.517555&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPiotrkMZGKMkarolin&quot;,
            &quot;station_name&quot;: &quot;Piotrk&oacute;w Tryb. - Karolinowska 51&quot;,
            &quot;wgs84_n&quot;: &quot;51.425&quot;,
            &quot;wgs84_e&quot;: &quot;19.682222&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPioTrKraPr&quot;,
            &quot;station_name&quot;: &quot;Piotrk&oacute;w Tryb.-Krakowskie Przedmieście&quot;,
            &quot;wgs84_n&quot;: &quot;51.404408&quot;,
            &quot;wgs84_e&quot;: &quot;19.696957&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPiotrkWIOSABelzack&quot;,
            &quot;station_name&quot;: &quot;Piotrk&oacute;w Belzacka&quot;,
            &quot;wgs84_n&quot;: &quot;51.406944&quot;,
            &quot;wgs84_e&quot;: &quot;19.673056&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPiotrkWSSEM3goMaja&quot;,
            &quot;station_name&quot;: &quot;Piotrk&oacute;wTryb.-3-goMaja8&quot;,
            &quot;wgs84_n&quot;: &quot;51.405&quot;,
            &quot;wgs84_e&quot;: &quot;19.693333&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdPioTrSienk&quot;,
            &quot;station_name&quot;: &quot;Piotrk&oacute;wTryb.-Sienkiewicza 16&quot;,
            &quot;wgs84_n&quot;: &quot;51.407845&quot;,
            &quot;wgs84_e&quot;: &quot;19.688694&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRadomsFAMEGMGlinia&quot;,
            &quot;station_name&quot;: &quot;Radomsko-Gliniana26&quot;,
            &quot;wgs84_n&quot;: &quot;51.068054&quot;,
            &quot;wgs84_e&quot;: &quot;19.426666&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRadomsFAMEGMGolebi&quot;,
            &quot;station_name&quot;: &quot;Radomsko-Gołębia&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRadomsMETALMPrzedb&quot;,
            &quot;station_name&quot;: &quot;Radomsko-Przedborska&quot;,
            &quot;wgs84_n&quot;: &quot;51.074722&quot;,
            &quot;wgs84_e&quot;: &quot;19.461111&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRadomsRoln&quot;,
            &quot;station_name&quot;: &quot;Radomsko-Rolna2&quot;,
            &quot;wgs84_n&quot;: &quot;51.06744&quot;,
            &quot;wgs84_e&quot;: &quot;19.448694&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRadomsSoko&quot;,
            &quot;station_name&quot;: &quot;Radomsko-Sokola4&quot;,
            &quot;wgs84_n&quot;: &quot;51.06399&quot;,
            &quot;wgs84_e&quot;: &quot;19.451164&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRadomsWSSEMKomunyP&quot;,
            &quot;station_name&quot;: &quot;Radomsko-KomunyParyskiej5&quot;,
            &quot;wgs84_n&quot;: &quot;51.069443&quot;,
            &quot;wgs84_e&quot;: &quot;19.44111&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRadomsWSSEMZeromsk&quot;,
            &quot;station_name&quot;: &quot;Radomsko-Żeromskiego 15&quot;,
            &quot;wgs84_n&quot;: &quot;51.066113&quot;,
            &quot;wgs84_e&quot;: &quot;19.441944&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRawaMaWIOSMKoscius&quot;,
            &quot;station_name&quot;: &quot;Rawa Mazowiecka-Kościuszki 5&quot;,
            &quot;wgs84_n&quot;: &quot;51.76336&quot;,
            &quot;wgs84_e&quot;: &quot;20.249977&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdRawaNiepod&quot;,
            &quot;station_name&quot;: &quot;Rawa Mazowiecka-Niepodległości 8&quot;,
            &quot;wgs84_n&quot;: &quot;51.760876&quot;,
            &quot;wgs84_e&quot;: &quot;20.250568&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSieradWIOSMKoscius&quot;,
            &quot;station_name&quot;: &quot;Sieradz-Kościuszki6&quot;,
            &quot;wgs84_n&quot;: &quot;51.594444&quot;,
            &quot;wgs84_e&quot;: &quot;18.73611&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSieradWSSEMArmiiKr&quot;,
            &quot;station_name&quot;: &quot;Sieradz-ArmiiKrajowej7&quot;,
            &quot;wgs84_n&quot;: &quot;51.58389&quot;,
            &quot;wgs84_e&quot;: &quot;18.710556&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSieradWSSEMPOW52&quot;,
            &quot;station_name&quot;: &quot;Sieradz-POW52&quot;,
            &quot;wgs84_n&quot;: &quot;51.595833&quot;,
            &quot;wgs84_e&quot;: &quot;18.720278&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSieraPolna&quot;,
            &quot;station_name&quot;: &quot;Sieradz-Polna 18/20&quot;,
            &quot;wgs84_n&quot;: &quot;51.59211&quot;,
            &quot;wgs84_e&quot;: &quot;18.734898&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSierGrunwa&quot;,
            &quot;station_name&quot;: &quot;Sieradz-Grunwaldzka 28&quot;,
            &quot;wgs84_n&quot;: &quot;51.590126&quot;,
            &quot;wgs84_e&quot;: &quot;18.717333&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSkierKonop&quot;,
            &quot;station_name&quot;: &quot;Skierniewice-Marii Konopnickiej 5&quot;,
            &quot;wgs84_n&quot;: &quot;51.954315&quot;,
            &quot;wgs84_e&quot;: &quot;20.149378&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSkiernWIOSMJagiell&quot;,
            &quot;station_name&quot;: &quot;Skierniewice-Jagiellońska 28&quot;,
            &quot;wgs84_n&quot;: &quot;51.95956&quot;,
            &quot;wgs84_e&quot;: &quot;20.146183&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSkiernWIOSMWitaStw&quot;,
            &quot;station_name&quot;: &quot;Skierniewice-Wita Stwosza2/4&quot;,
            &quot;wgs84_n&quot;: &quot;51.96072&quot;,
            &quot;wgs84_e&quot;: &quot;20.147408&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSkiernWSSEMKoperni&quot;,
            &quot;station_name&quot;: &quot;Skierniewice-Kopernika5&quot;,
            &quot;wgs84_n&quot;: &quot;51.952778&quot;,
            &quot;wgs84_e&quot;: &quot;20.152222&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSkiernWSSEMReymont&quot;,
            &quot;station_name&quot;: &quot;Skierniewice-Reymonta 33&quot;,
            &quot;wgs84_n&quot;: &quot;51.96&quot;,
            &quot;wgs84_e&quot;: &quot;20.147223&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdSkiernWSSEMWankowi&quot;,
            &quot;station_name&quot;: &quot;Skierniewice-Wańkowicza10&quot;,
            &quot;wgs84_n&quot;: &quot;51.97361&quot;,
            &quot;wgs84_e&quot;: &quot;20.14889&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdToMaSwAnto&quot;,
            &quot;station_name&quot;: &quot;Tomasz&oacute;wMaz.-Św. Antoniego43&quot;,
            &quot;wgs84_n&quot;: &quot;51.526257&quot;,
            &quot;wgs84_e&quot;: &quot;20.016787&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdTomaszWSSEMSw.Anto&quot;,
            &quot;station_name&quot;: &quot;Tomasz&oacute;wMaz.-Św.Antoniego24&quot;,
            &quot;wgs84_n&quot;: &quot;51.52889&quot;,
            &quot;wgs84_e&quot;: &quot;20.010834&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdUniejTermy&quot;,
            &quot;station_name&quot;: &quot;Uniej&oacute;w-Termy&quot;,
            &quot;wgs84_n&quot;: &quot;51.971664&quot;,
            &quot;wgs84_e&quot;: &quot;18.79035&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdWielunWSSEMPOW14&quot;,
            &quot;station_name&quot;: &quot;Wieluń-POW14&quot;,
            &quot;wgs84_n&quot;: &quot;51.218613&quot;,
            &quot;wgs84_e&quot;: &quot;18.581388&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdWielunWSSEMWojskaP&quot;,
            &quot;station_name&quot;: &quot;Wieluń-WojskaPolskiego&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdWieluPOW12&quot;,
            &quot;station_name&quot;: &quot;Wieluń-POW 12&quot;,
            &quot;wgs84_n&quot;: &quot;51.217827&quot;,
            &quot;wgs84_e&quot;: &quot;18.581827&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZduWoKrole&quot;,
            &quot;station_name&quot;: &quot;ZduńskaWola-Kr&oacute;lewska10&quot;,
            &quot;wgs84_n&quot;: &quot;51.60144&quot;,
            &quot;wgs84_e&quot;: &quot;18.940123&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZdWolaWSSEMDabrows&quot;,
            &quot;station_name&quot;: &quot;ZduńskaWola-Dąbrowskiego1&quot;,
            &quot;wgs84_n&quot;: &quot;51.601112&quot;,
            &quot;wgs84_e&quot;: &quot;18.936943&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZdWolaWSSEMPlWolno&quot;,
            &quot;station_name&quot;: &quot;Zduńska Wola-Plac Wolności 20&quot;,
            &quot;wgs84_n&quot;: &quot;51.603058&quot;,
            &quot;wgs84_e&quot;: &quot;18.934444&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZdWolaWSSEMSzadkow&quot;,
            &quot;station_name&quot;: &quot;ZduńskaWola-Szadkowska4&quot;,
            &quot;wgs84_n&quot;: &quot;51.606667&quot;,
            &quot;wgs84_e&quot;: &quot;18.939722&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZgieMielcz&quot;,
            &quot;station_name&quot;: &quot;Zgierz-Śr&oacute;dmieście&quot;,
            &quot;wgs84_n&quot;: &quot;51.856693&quot;,
            &quot;wgs84_e&quot;: &quot;19.42123&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZgierzWSSEMDabrows&quot;,
            &quot;station_name&quot;: &quot;Zgierz-Dąbrowskiego 12&quot;,
            &quot;wgs84_n&quot;: &quot;51.856945&quot;,
            &quot;wgs84_e&quot;: &quot;19.411943&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZgierzWSSEMStRynek&quot;,
            &quot;station_name&quot;: &quot;Zgierz-Pl Jana Pawła II&quot;,
            &quot;wgs84_n&quot;: &quot;51.856388&quot;,
            &quot;wgs84_e&quot;: &quot;19.404444&quot;
        },
        {
            &quot;station_code&quot;: &quot;LdZloczeWSSEMWieluns&quot;,
            &quot;station_name&quot;: &quot;Złoczew-Wieluńksa(szkoła)&quot;,
            &quot;wgs84_n&quot;: &quot;51.406944&quot;,
            &quot;wgs84_e&quot;: &quot;18.610832&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuDrezdeWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Drezdenko&quot;,
            &quot;wgs84_n&quot;: &quot;52.83917&quot;,
            &quot;wgs84_e&quot;: &quot;15.835578&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuGorzKosGdy&quot;,
            &quot;station_name&quot;: &quot;Gorz&oacute;w Wlkp. ul. Kosynier&oacute;w Gdyńskich&quot;,
            &quot;wgs84_n&quot;: &quot;52.738213&quot;,
            &quot;wgs84_e&quot;: &quot;15.228667&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuGorzowWSSE_1&quot;,
            &quot;station_name&quot;: &quot;WSSE - Gorz&oacute;w ul. Borowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.73722&quot;,
            &quot;wgs84_e&quot;: &quot;15.232222&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuGorzowWSSE_5&quot;,
            &quot;station_name&quot;: &quot;WSSE - Gorz&oacute;w ul. Mickiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;52.739723&quot;,
            &quot;wgs84_e&quot;: &quot;15.23&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuGorzowWSSE_6&quot;,
            &quot;station_name&quot;: &quot;WSSE - Gorz&oacute;w ul. Wr&oacute;blewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.754723&quot;,
            &quot;wgs84_e&quot;: &quot;15.241944&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuGorzPilsud&quot;,
            &quot;station_name&quot;: &quot;Gorz&oacute;w Wlkp. ul. Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.747044&quot;,
            &quot;wgs84_e&quot;: &quot;15.246294&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuMiedzyWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Międzyrzecz&quot;,
            &quot;wgs84_n&quot;: &quot;52.44278&quot;,
            &quot;wgs84_e&quot;: &quot;15.581389&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuNowaSolMOB&quot;,
            &quot;station_name&quot;: &quot;Nowa S&oacute;l, ul. T. Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;51.808662&quot;,
            &quot;wgs84_e&quot;: &quot;15.708193&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuNowasoWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Nowa S&oacute;l&quot;,
            &quot;wgs84_n&quot;: &quot;51.8025&quot;,
            &quot;wgs84_e&quot;: &quot;15.715014&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSlubWIOS_AUT&quot;,
            &quot;station_name&quot;: &quot;Słubice ul. Woj Pol&quot;,
            &quot;wgs84_n&quot;: &quot;52.35583&quot;,
            &quot;wgs84_e&quot;: &quot;14.564167&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSlubWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Słubice&quot;,
            &quot;wgs84_n&quot;: &quot;52.350277&quot;,
            &quot;wgs84_e&quot;: &quot;14.557222&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSmolBytnic&quot;,
            &quot;station_name&quot;: &quot;Smolary Bytnickie&quot;,
            &quot;wgs84_n&quot;: &quot;52.172222&quot;,
            &quot;wgs84_e&quot;: &quot;15.206667&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSulecDudka&quot;,
            &quot;station_name&quot;: &quot;Sulęcin ul. Dudka&quot;,
            &quot;wgs84_n&quot;: &quot;52.43772&quot;,
            &quot;wgs84_e&quot;: &quot;15.122444&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSuleciWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Sulęcin&quot;,
            &quot;wgs84_n&quot;: &quot;52.449722&quot;,
            &quot;wgs84_e&quot;: &quot;15.116944&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSwiebodMOB&quot;,
            &quot;station_name&quot;: &quot;Świebodzin,ul. Gen.W.Sikorskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.245445&quot;,
            &quot;wgs84_e&quot;: &quot;15.527571&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSwieboWIOS_MOB&quot;,
            &quot;station_name&quot;: &quot;Świebodzin, ul. Łąki Zamkowe&quot;,
            &quot;wgs84_n&quot;: &quot;52.24778&quot;,
            &quot;wgs84_e&quot;: &quot;15.534722&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuSwieboWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Świebodzin&quot;,
            &quot;wgs84_n&quot;: &quot;52.25111&quot;,
            &quot;wgs84_e&quot;: &quot;15.531667&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuWsKaziWiel&quot;,
            &quot;station_name&quot;: &quot;Wschowa ul. Kazimierza Wielkiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.79972&quot;,
            &quot;wgs84_e&quot;: &quot;16.3175&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZaganWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Żagań&quot;,
            &quot;wgs84_n&quot;: &quot;51.6125&quot;,
            &quot;wgs84_e&quot;: &quot;15.328889&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZarySzyman&quot;,
            &quot;station_name&quot;: &quot;Żary, ul. Szymanowskiego 8&quot;,
            &quot;wgs84_n&quot;: &quot;51.642654&quot;,
            &quot;wgs84_e&quot;: &quot;15.127808&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZaryWIOS_MOB&quot;,
            &quot;station_name&quot;: &quot;Żary ul. Chopina&quot;,
            &quot;wgs84_n&quot;: &quot;51.6415&quot;,
            &quot;wgs84_e&quot;: &quot;15.1275&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZaryWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE - Żary&quot;,
            &quot;wgs84_n&quot;: &quot;51.64&quot;,
            &quot;wgs84_e&quot;: &quot;15.135556&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZaryWSSE_2&quot;,
            &quot;station_name&quot;: &quot;WSSE - Żary ul. 1Maja&quot;,
            &quot;wgs84_n&quot;: &quot;51.634445&quot;,
            &quot;wgs84_e&quot;: &quot;15.141111&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZgoraWSSE_1&quot;,
            &quot;station_name&quot;: &quot;WSSE - Zielona G&oacute;ra ul. Jasna&quot;,
            &quot;wgs84_n&quot;: &quot;51.93&quot;,
            &quot;wgs84_e&quot;: &quot;15.503056&quot;
        },
        {
            &quot;station_code&quot;: &quot;LuZielKrotka&quot;,
            &quot;station_name&quot;: &quot;Zielona G&oacute;ra ul. Kr&oacute;tka&quot;,
            &quot;wgs84_n&quot;: &quot;51.93978&quot;,
            &quot;wgs84_e&quot;: &quot;15.518861&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpAndrycWSSEKrak1801&quot;,
            &quot;station_name&quot;: &quot;Andrych&oacute;w Krakowska&quot;,
            &quot;wgs84_n&quot;: &quot;49.853333&quot;,
            &quot;wgs84_e&quot;: &quot;19.340555&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBochKonfed&quot;,
            &quot;station_name&quot;: &quot;Bochnia, ul. Konfederat&oacute;w Barskich&quot;,
            &quot;wgs84_n&quot;: &quot;49.969017&quot;,
            &quot;wgs84_e&quot;: &quot;20.43951&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBochniWSSEKazi0104&quot;,
            &quot;station_name&quot;: &quot;Bochnia Kazimierza Wielkiego 67&quot;,
            &quot;wgs84_n&quot;: &quot;49.959167&quot;,
            &quot;wgs84_e&quot;: &quot;20.420555&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBochniWSSEKons0105&quot;,
            &quot;station_name&quot;: &quot;Bochnia Kostytucji 3 Maja Nr 5&quot;,
            &quot;wgs84_n&quot;: &quot;49.97278&quot;,
            &quot;wgs84_e&quot;: &quot;20.428057&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBochniWSSESoln0102&quot;,
            &quot;station_name&quot;: &quot;Bochnia Solna&quot;,
            &quot;wgs84_n&quot;: &quot;49.97&quot;,
            &quot;wgs84_e&quot;: &quot;20.432222&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBrzeskWIOSWiej0202&quot;,
            &quot;station_name&quot;: &quot;Brzesko, ul. Wiejska&quot;,
            &quot;wgs84_n&quot;: &quot;49.975952&quot;,
            &quot;wgs84_e&quot;: &quot;20.603222&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBrzeskWSSEGlow0201&quot;,
            &quot;station_name&quot;: &quot;Brzesko Głowackiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.9675&quot;,
            &quot;wgs84_e&quot;: &quot;20.607782&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBrzeszKosc&quot;,
            &quot;station_name&quot;: &quot;Brzeszcze, ul. Kościelna&quot;,
            &quot;wgs84_n&quot;: &quot;49.966667&quot;,
            &quot;wgs84_e&quot;: &quot;19.14606&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpBukowKolejMOB&quot;,
            &quot;station_name&quot;: &quot;Bukowno, ul. Kolejowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.26624&quot;,
            &quot;wgs84_e&quot;: &quot;19.462286&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpChrzanWSSEGrzy0301&quot;,
            &quot;station_name&quot;: &quot;Chrzan&oacute;w Grzybowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.136944&quot;,
            &quot;wgs84_e&quot;: &quot;19.397223&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpChrzaPlTysMOB&quot;,
            &quot;station_name&quot;: &quot;Chrzan&oacute;w, Pl. Tysiąclecia&quot;,
            &quot;wgs84_n&quot;: &quot;50.144028&quot;,
            &quot;wgs84_e&quot;: &quot;19.406555&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpDabrowWIOSZare0401&quot;,
            &quot;station_name&quot;: &quot;Dabrowa Tarnowska, ul. Zaręby&quot;,
            &quot;wgs84_n&quot;: &quot;50.17752&quot;,
            &quot;wgs84_e&quot;: &quot;20.984028&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpDobczSzkolMOB&quot;,
            &quot;station_name&quot;: &quot;Dobczyce, ul. Szkolna&quot;,
            &quot;wgs84_n&quot;: &quot;49.881107&quot;,
            &quot;wgs84_e&quot;: &quot;20.100819&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpDobrowWSSEPils0401&quot;,
            &quot;station_name&quot;: &quot;Dąbrowa Tarnowska Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.170834&quot;,
            &quot;wgs84_e&quot;: &quot;20.98361&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpGorlicWSSELegi0501&quot;,
            &quot;station_name&quot;: &quot;Gorlice Legion&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;49.655&quot;,
            &quot;wgs84_e&quot;: &quot;21.15611&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpGorlKrasin&quot;,
            &quot;station_name&quot;: &quot;Gorlice, ul. Krasińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.65889&quot;,
            &quot;wgs84_e&quot;: &quot;21.163336&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKalZebRyneMOB&quot;,
            &quot;station_name&quot;: &quot;Kalwaria Zebrzydowska, Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;49.867344&quot;,
            &quot;wgs84_e&quot;: &quot;19.676722&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKaszowLisz&quot;,
            &quot;station_name&quot;: &quot;Kasz&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;50.02503&quot;,
            &quot;wgs84_e&quot;: &quot;19.726833&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKetyWyspiaMOB&quot;,
            &quot;station_name&quot;: &quot;Kęty, ul. Wyspiańskiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.876938&quot;,
            &quot;wgs84_e&quot;: &quot;19.2156&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakAlKras&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, Aleja Krasińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.05768&quot;,
            &quot;wgs84_e&quot;: &quot;19.92619&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakBujaka&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, ul. Bujaka&quot;,
            &quot;wgs84_n&quot;: &quot;50.010574&quot;,
            &quot;wgs84_e&quot;: &quot;19.949188&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakBulwar&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, ul. Bulwarowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.06931&quot;,
            &quot;wgs84_e&quot;: &quot;20.053492&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakDietla&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, ul. Dietla&quot;,
            &quot;wgs84_n&quot;: &quot;50.057446&quot;,
            &quot;wgs84_e&quot;: &quot;19.946009&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakOsPias&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, os. Piast&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;50.098507&quot;,
            &quot;wgs84_e&quot;: &quot;20.018269&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakowWIOSPrad6115&quot;,
            &quot;station_name&quot;: &quot;Krowodrza-Krak&oacute;w, szpital Jana Pawła II&quot;,
            &quot;wgs84_n&quot;: &quot;50.0875&quot;,
            &quot;wgs84_e&quot;: &quot;19.926111&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakowWSSEKapi6108&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w Swoszowice Kąpielowa&quot;,
            &quot;wgs84_n&quot;: &quot;49.99167&quot;,
            &quot;wgs84_e&quot;: &quot;19.935&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakowWSSEPrad6102&quot;,
            &quot;station_name&quot;: &quot;Krakow Pradnicka 76&quot;,
            &quot;wgs84_n&quot;: &quot;50.0875&quot;,
            &quot;wgs84_e&quot;: &quot;19.938057&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakowWSSERPod6113&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w Rynek Podg&oacute;rski&quot;,
            &quot;wgs84_n&quot;: &quot;50.04&quot;,
            &quot;wgs84_e&quot;: &quot;19.943333&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakSwoszo&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, os. Swoszowice&quot;,
            &quot;wgs84_n&quot;: &quot;49.991444&quot;,
            &quot;wgs84_e&quot;: &quot;19.936792&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakTelime&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, ul. Telimeny&quot;,
            &quot;wgs84_n&quot;: &quot;50.019035&quot;,
            &quot;wgs84_e&quot;: &quot;20.016823&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakWadow&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, os. Wad&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;50.10057&quot;,
            &quot;wgs84_e&quot;: &quot;20.12256&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrakZloRog&quot;,
            &quot;station_name&quot;: &quot;Krak&oacute;w, ul. Złoty R&oacute;g&quot;,
            &quot;wgs84_n&quot;: &quot;50.081196&quot;,
            &quot;wgs84_e&quot;: &quot;19.895357&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrynicDiet&quot;,
            &quot;station_name&quot;: &quot;Krynica, ul. Bulwary Dietla&quot;,
            &quot;wgs84_n&quot;: &quot;49.416977&quot;,
            &quot;wgs84_e&quot;: &quot;20.956146&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrynicWIOSNowo1008&quot;,
            &quot;station_name&quot;: &quot;Krynica Nowotarskiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.417778&quot;,
            &quot;wgs84_e&quot;: &quot;20.9575&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrynicWIOSPark1009&quot;,
            &quot;station_name&quot;: &quot;Krynica, ul. Park Sportowy&quot;,
            &quot;wgs84_n&quot;: &quot;49.427532&quot;,
            &quot;wgs84_e&quot;: &quot;20.9512&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrynicWSSENowo1002&quot;,
            &quot;station_name&quot;: &quot;Krynica Nowotarskiego RWM&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpKrzeszWIOSKulc0605&quot;,
            &quot;station_name&quot;: &quot;Krzeszowice Plac Kulczyńskiego&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpLimanoBoleMOB&quot;,
            &quot;station_name&quot;: &quot;Limanowa, ul. Matki Bożej Bolesnej&quot;,
            &quot;wgs84_n&quot;: &quot;49.698524&quot;,
            &quot;wgs84_e&quot;: &quot;20.42412&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.08.s077m&quot;,
            &quot;station_name&quot;: &quot;WSSE Łeba&quot;,
            &quot;wgs84_n&quot;: &quot;54.76472&quot;,
            &quot;wgs84_e&quot;: &quot;17.563889&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMaPodhWIOSKosc1508&quot;,
            &quot;station_name&quot;: &quot;Mak&oacute;w Podhalański&quot;,
            &quot;wgs84_n&quot;: &quot;49.730278&quot;,
            &quot;wgs84_e&quot;: &quot;19.681389&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMiechoWIOSKono0802&quot;,
            &quot;station_name&quot;: &quot;Miech&oacute;w, ul. Konopnickiej&quot;,
            &quot;wgs84_n&quot;: &quot;50.360035&quot;,
            &quot;wgs84_e&quot;: &quot;20.038671&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMiechoWIOSKsSk0801&quot;,
            &quot;station_name&quot;: &quot;Miech&oacute;w Księdza Skorupki&quot;,
            &quot;wgs84_n&quot;: &quot;50.35472&quot;,
            &quot;wgs84_e&quot;: &quot;20.024721&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMuszynKity&quot;,
            &quot;station_name&quot;: &quot;Muszyna, ul. A. Kity 17&quot;,
            &quot;wgs84_n&quot;: &quot;49.354446&quot;,
            &quot;wgs84_e&quot;: &quot;20.894361&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMuszynKityMOB&quot;,
            &quot;station_name&quot;: &quot;Muszyna, ul. Kity&quot;,
            &quot;wgs84_n&quot;: &quot;49.354465&quot;,
            &quot;wgs84_e&quot;: &quot;20.894375&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMuszynWSSERyne1001&quot;,
            &quot;station_name&quot;: &quot;Muszyna Rynek 14 Szkoła Podst.&quot;,
            &quot;wgs84_n&quot;: &quot;49.35361&quot;,
            &quot;wgs84_e&quot;: &quot;20.891945&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMuszynZloc&quot;,
            &quot;station_name&quot;: &quot;Muszyna Złockie&quot;,
            &quot;wgs84_n&quot;: &quot;49.374146&quot;,
            &quot;wgs84_e&quot;: &quot;20.879581&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMyslenWIOSKazi0901&quot;,
            &quot;station_name&quot;: &quot;Myslenice Kazimierza Wielkiego&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMyslenWIOSKosc0902&quot;,
            &quot;station_name&quot;: &quot;Myślenice Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;49.826668&quot;,
            &quot;wgs84_e&quot;: &quot;19.93639&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMyslenWIOSRyne0905&quot;,
            &quot;station_name&quot;: &quot;Mobilna Myślenice Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;49.835&quot;,
            &quot;wgs84_e&quot;: &quot;19.938057&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMyslenWIOSRyne0906&quot;,
            &quot;station_name&quot;: &quot;Myślenice Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;49.835&quot;,
            &quot;wgs84_e&quot;: &quot;19.938057&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpMysleRynekMOB&quot;,
            &quot;station_name&quot;: &quot;Myślenice, Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;49.834923&quot;,
            &quot;wgs84_e&quot;: &quot;19.938114&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNiepo3Maja&quot;,
            &quot;station_name&quot;: &quot;Niepołomice, ul. 3 Maja&quot;,
            &quot;wgs84_n&quot;: &quot;50.03512&quot;,
            &quot;wgs84_e&quot;: &quot;20.212688&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNiepolWIOSRyne1907&quot;,
            &quot;station_name&quot;: &quot;Niepołomice Rynek mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNoSaczNadb&quot;,
            &quot;station_name&quot;: &quot;Nowy Sącz, ul. Nadbrzeżna&quot;,
            &quot;wgs84_n&quot;: &quot;49.61928&quot;,
            &quot;wgs84_e&quot;: &quot;20.714403&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNoSaczWSSENawo17a&quot;,
            &quot;station_name&quot;: &quot;Nowy Sącz Nawojowska 17a&quot;,
            &quot;wgs84_n&quot;: &quot;49.613888&quot;,
            &quot;wgs84_e&quot;: &quot;20.704445&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNoTargPSlo&quot;,
            &quot;station_name&quot;: &quot;Nowy Targ, Plac Słowackiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.483597&quot;,
            &quot;wgs84_e&quot;: &quot;20.028992&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNoTargWSSESzaf1102&quot;,
            &quot;station_name&quot;: &quot;Nowy Targ Szaflarska&quot;,
            &quot;wgs84_n&quot;: &quot;49.474445&quot;,
            &quot;wgs84_e&quot;: &quot;20.025833&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNowyTaWIOSPows1114&quot;,
            &quot;station_name&quot;: &quot;Nowy Targ, ul. Powstańc&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;49.476097&quot;,
            &quot;wgs84_e&quot;: &quot;20.02688&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNSaczWIOSPija6204&quot;,
            &quot;station_name&quot;: &quot;Nowy Sącz, Pijarska&quot;,
            &quot;wgs84_n&quot;: &quot;49.62722&quot;,
            &quot;wgs84_e&quot;: &quot;20.688334&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpNSaczWSSETarn6202&quot;,
            &quot;station_name&quot;: &quot;Nowy Sącz Tarnowska 28&quot;,
            &quot;wgs84_n&quot;: &quot;49.635277&quot;,
            &quot;wgs84_e&quot;: &quot;20.693056&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpOlkuCegiel&quot;,
            &quot;station_name&quot;: &quot;Olkusz, ul. Cegielniana&quot;,
            &quot;wgs84_n&quot;: &quot;50.284&quot;,
            &quot;wgs84_e&quot;: &quot;19.564045&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpOlkuFrNull&quot;,
            &quot;station_name&quot;: &quot;Olkusz, ul. Francesco Nullo&quot;,
            &quot;wgs84_n&quot;: &quot;50.27757&quot;,
            &quot;wgs84_e&quot;: &quot;19.569868&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpOswiecBema&quot;,
            &quot;station_name&quot;: &quot;Oświęcim, ul. J. Bema&quot;,
            &quot;wgs84_n&quot;: &quot;50.033085&quot;,
            &quot;wgs84_e&quot;: &quot;19.245275&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpOswiecWIOSSnia1302&quot;,
            &quot;station_name&quot;: &quot;Oświęcim, ul. Śniadeckiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.035446&quot;,
            &quot;wgs84_e&quot;: &quot;19.23933&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpOswiecWIOSSnia1304&quot;,
            &quot;station_name&quot;: &quot;Oświęcim mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;50.03417&quot;,
            &quot;wgs84_e&quot;: &quot;19.245277&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpOswiecWSSEWiez1301&quot;,
            &quot;station_name&quot;: &quot;Oświęcim Więźni&oacute;w Oświęcimia&quot;,
            &quot;wgs84_n&quot;: &quot;50.03417&quot;,
            &quot;wgs84_e&quot;: &quot;19.200556&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpPiwnicWSSERyne1004&quot;,
            &quot;station_name&quot;: &quot;Piwniczna Rynek 2&quot;,
            &quot;wgs84_n&quot;: &quot;49.4375&quot;,
            &quot;wgs84_e&quot;: &quot;20.70861&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpPiwnZdrojoMOB&quot;,
            &quot;station_name&quot;: &quot;Piwniczna-Zdr&oacute;j, ul. Zdrojowa&quot;,
            &quot;wgs84_n&quot;: &quot;49.444057&quot;,
            &quot;wgs84_e&quot;: &quot;20.719889&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpProszoWIOS3Maj1402&quot;,
            &quot;station_name&quot;: &quot;Proszowice UmiG&quot;,
            &quot;wgs84_n&quot;: &quot;50.188057&quot;,
            &quot;wgs84_e&quot;: &quot;20.29&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpProszWIOSKrol1404&quot;,
            &quot;station_name&quot;: &quot;Proszowice, ul. Kr&oacute;lewska&quot;,
            &quot;wgs84_n&quot;: &quot;50.19218&quot;,
            &quot;wgs84_e&quot;: &quot;20.299711&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpRabkaOrkan&quot;,
            &quot;station_name&quot;: &quot;Rabka-Zdr&oacute;j, ul. Orkana&quot;,
            &quot;wgs84_n&quot;: &quot;49.608646&quot;,
            &quot;wgs84_e&quot;: &quot;19.966007&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpRabkaWIOSChop1113&quot;,
            &quot;station_name&quot;: &quot;Rabka-Zdr&oacute;j, ul. Chopina&quot;,
            &quot;wgs84_n&quot;: &quot;49.608753&quot;,
            &quot;wgs84_e&quot;: &quot;19.965895&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpRabkaWIOSRudn1112&quot;,
            &quot;station_name&quot;: &quot;Rabka ul. Rudnika&quot;,
            &quot;wgs84_n&quot;: &quot;49.60361&quot;,
            &quot;wgs84_e&quot;: &quot;19.9675&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpRabkaWSSEOrka1105&quot;,
            &quot;station_name&quot;: &quot;Rabka Orkana&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSkawOsOgro&quot;,
            &quot;station_name&quot;: &quot;Skawina, os. Ogrody&quot;,
            &quot;wgs84_n&quot;: &quot;49.971046&quot;,
            &quot;wgs84_e&quot;: &quot;19.830421&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSkawStudzi&quot;,
            &quot;station_name&quot;: &quot;Skawina, ul. Studzińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.98336&quot;,
            &quot;wgs84_e&quot;: &quot;19.839573&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSlomWolnosMOB&quot;,
            &quot;station_name&quot;: &quot;Słomniki, ul. Wolności&quot;,
            &quot;wgs84_n&quot;: &quot;50.243443&quot;,
            &quot;wgs84_e&quot;: &quot;20.082193&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSuchaBWIOSHand1512&quot;,
            &quot;station_name&quot;: &quot;Sucha Beskidzka, ul. Handlowa&quot;,
            &quot;wgs84_n&quot;: &quot;49.740643&quot;,
            &quot;wgs84_e&quot;: &quot;19.588326&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSuchaNiesz&quot;,
            &quot;station_name&quot;: &quot;Sucha Beskidzka, ul. Nieszczyńskiej&quot;,
            &quot;wgs84_n&quot;: &quot;49.74313&quot;,
            &quot;wgs84_e&quot;: &quot;19.60034&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSuchaWIOSBeni1501&quot;,
            &quot;station_name&quot;: &quot;Sucha Beskidzka Beniowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSuchaWIOSMick1502&quot;,
            &quot;station_name&quot;: &quot;Sucha Beskidzka Mickiewicza LOK&quot;,
            &quot;wgs84_n&quot;: &quot;49.738335&quot;,
            &quot;wgs84_e&quot;: &quot;19.592777&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSuchSemika&quot;,
            &quot;station_name&quot;: &quot;Sucha Beskidzka, ul. Semika&quot;,
            &quot;wgs84_n&quot;: &quot;49.74071&quot;,
            &quot;wgs84_e&quot;: &quot;19.592276&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSzarowSpok&quot;,
            &quot;station_name&quot;: &quot;Szar&oacute;w, ul. Spokojna&quot;,
            &quot;wgs84_n&quot;: &quot;50.0075&quot;,
            &quot;wgs84_e&quot;: &quot;20.259167&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSzarowWIOS1901&quot;,
            &quot;station_name&quot;: &quot;Szar&oacute;w1901&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSzarowWIOS1908&quot;,
            &quot;station_name&quot;: &quot;Szar&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;50.007015&quot;,
            &quot;wgs84_e&quot;: &quot;20.258474&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSzczawJanaMOB&quot;,
            &quot;station_name&quot;: &quot;Szczawnica, ul. Jana Wiktora&quot;,
            &quot;wgs84_n&quot;: &quot;49.425884&quot;,
            &quot;wgs84_e&quot;: &quot;20.484947&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpSzymbaGorl&quot;,
            &quot;station_name&quot;: &quot;Szymbark&quot;,
            &quot;wgs84_n&quot;: &quot;49.633713&quot;,
            &quot;wgs84_e&quot;: &quot;21.116833&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTarBitStud&quot;,
            &quot;station_name&quot;: &quot;Tarn&oacute;w, ul. Bitwy pod Studziankami&quot;,
            &quot;wgs84_n&quot;: &quot;50.02017&quot;,
            &quot;wgs84_e&quot;: &quot;21.004168&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTarnowWIOSSoli6303&quot;,
            &quot;station_name&quot;: &quot;Tarn&oacute;w Al. Solidarności&quot;,
            &quot;wgs84_n&quot;: &quot;50.01611&quot;,
            &quot;wgs84_e&quot;: &quot;20.98361&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTarnowWSSEMosc6301&quot;,
            &quot;station_name&quot;: &quot;Tarn&oacute;w ul.Mościckiego 10&quot;,
            &quot;wgs84_n&quot;: &quot;50.006668&quot;,
            &quot;wgs84_e&quot;: &quot;20.975279&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTarnowWSSEWest6302&quot;,
            &quot;station_name&quot;: &quot;Tarn&oacute;w Westerplatte&quot;,
            &quot;wgs84_n&quot;: &quot;50.023335&quot;,
            &quot;wgs84_e&quot;: &quot;21.005&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTarRoSitko&quot;,
            &quot;station_name&quot;: &quot;Tarn&oacute;w, ul. Ks. Romana Sitko&quot;,
            &quot;wgs84_n&quot;: &quot;50.018253&quot;,
            &quot;wgs84_e&quot;: &quot;20.992579&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTrzebiWIOSPils0303&quot;,
            &quot;station_name&quot;: &quot;Trzebinia&quot;,
            &quot;wgs84_n&quot;: &quot;50.16083&quot;,
            &quot;wgs84_e&quot;: &quot;19.472778&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTrzebOsZWM&quot;,
            &quot;station_name&quot;: &quot;Trzebinia, os. Związku Walki Młodych&quot;,
            &quot;wgs84_n&quot;: &quot;50.159405&quot;,
            &quot;wgs84_e&quot;: &quot;19.477465&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpTuchChopin&quot;,
            &quot;station_name&quot;: &quot;Tuch&oacute;w, ul. Chopina&quot;,
            &quot;wgs84_n&quot;: &quot;49.89417&quot;,
            &quot;wgs84_e&quot;: &quot;21.051062&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpWadowiWIOSPSka1805&quot;,
            &quot;station_name&quot;: &quot;Wadowice, os. Pod Skarpą&quot;,
            &quot;wgs84_n&quot;: &quot;49.87276&quot;,
            &quot;wgs84_e&quot;: &quot;19.497942&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpWadowiWIOSPska1807&quot;,
            &quot;station_name&quot;: &quot;wadowice mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;49.871944&quot;,
            &quot;wgs84_e&quot;: &quot;19.498333&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpWadowiWIOSTeat1802&quot;,
            &quot;station_name&quot;: &quot;Wadowice Teatralna&quot;,
            &quot;wgs84_n&quot;: &quot;49.884724&quot;,
            &quot;wgs84_e&quot;: &quot;19.489721&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpWielDembowMOB&quot;,
            &quot;station_name&quot;: &quot;Wieliczka, ul. Dembowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.98825&quot;,
            &quot;wgs84_e&quot;: &quot;20.059&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpWielicWIOSOSP1902&quot;,
            &quot;station_name&quot;: &quot;Wieliczka OSP&quot;,
            &quot;wgs84_n&quot;: &quot;49.975834&quot;,
            &quot;wgs84_e&quot;: &quot;20.057777&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpWolbroWIOSFabr1204&quot;,
            &quot;station_name&quot;: &quot;Wolbrom Fabryczna&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpWysowaWSSE0502&quot;,
            &quot;station_name&quot;: &quot;Uście Gorlickie Wysowa&quot;,
            &quot;wgs84_n&quot;: &quot;49.42472&quot;,
            &quot;wgs84_e&quot;: &quot;21.17639&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpZabieWapie&quot;,
            &quot;station_name&quot;: &quot;Zabierz&oacute;w, ul. Wapienna&quot;,
            &quot;wgs84_n&quot;: &quot;50.116028&quot;,
            &quot;wgs84_e&quot;: &quot;19.800638&quot;
        },
        {
            &quot;station_code&quot;: &quot;MpZakopaSien&quot;,
            &quot;station_name&quot;: &quot;Zakopane, ul. Sienkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;49.293564&quot;,
            &quot;wgs84_e&quot;: &quot;19.960083&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzBelsIGFPAN&quot;,
            &quot;station_name&quot;: &quot;Belsk-IGFPAN&quot;,
            &quot;wgs84_n&quot;: &quot;51.835243&quot;,
            &quot;wgs84_e&quot;: &quot;20.791912&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzBialaKmiciMOB&quot;,
            &quot;station_name&quot;: &quot;Biała-Kmicica&quot;,
            &quot;wgs84_n&quot;: &quot;52.602535&quot;,
            &quot;wgs84_e&quot;: &quot;19.6451&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzCiechSienkWSSE&quot;,
            &quot;station_name&quot;: &quot;Ciechan&oacute;w-Sienkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;52.88265&quot;,
            &quot;wgs84_e&quot;: &quot;20.594755&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzCiechStrazacka&quot;,
            &quot;station_name&quot;: &quot;Ciechan&oacute;w-Strażacka&quot;,
            &quot;wgs84_n&quot;: &quot;52.878437&quot;,
            &quot;wgs84_e&quot;: &quot;20.613289&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzGostMajaWSSE&quot;,
            &quot;station_name&quot;: &quot;Gostynin-Maja&quot;,
            &quot;wgs84_n&quot;: &quot;52.425533&quot;,
            &quot;wgs84_e&quot;: &quot;19.46044&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzGranicaKPN&quot;,
            &quot;station_name&quot;: &quot;Granica-KPN&quot;,
            &quot;wgs84_n&quot;: &quot;52.28586&quot;,
            &quot;wgs84_e&quot;: &quot;20.454653&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzGrodziskWSSE&quot;,
            &quot;station_name&quot;: &quot;Grodzisk Maz-Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;52.10908&quot;,
            &quot;wgs84_e&quot;: &quot;20.625174&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzGutyDuCzer&quot;,
            &quot;station_name&quot;: &quot;Guty Duże&quot;,
            &quot;wgs84_n&quot;: &quot;52.943172&quot;,
            &quot;wgs84_e&quot;: &quot;21.288168&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzKonJezMos&quot;,
            &quot;station_name&quot;: &quot;Konstancin-Jeziorna-Wierzejewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.080624&quot;,
            &quot;wgs84_e&quot;: &quot;21.111185&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzKonJezZrodWSSE&quot;,
            &quot;station_name&quot;: &quot;Konstancin Jeziorna - Źr&oacute;dlana&quot;,
            &quot;wgs84_n&quot;: &quot;52.08454&quot;,
            &quot;wgs84_e&quot;: &quot;21.113747&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzKozienSwierWSSE&quot;,
            &quot;station_name&quot;: &quot;Kozienice-Świerczewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.58563&quot;,
            &quot;wgs84_e&quot;: &quot;21.545647&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzLegionBronWSSE&quot;,
            &quot;station_name&quot;: &quot;Legionowo-Broniewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.399685&quot;,
            &quot;wgs84_e&quot;: &quot;20.927147&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzLegZegrzyn&quot;,
            &quot;station_name&quot;: &quot;Legionowo-Zegrzyńska&quot;,
            &quot;wgs84_n&quot;: &quot;52.407578&quot;,
            &quot;wgs84_e&quot;: &quot;20.955929&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzMakMMickWSSE&quot;,
            &quot;station_name&quot;: &quot;Mak&oacute;w-Mazowiecki-Mickiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;52.86469&quot;,
            &quot;wgs84_e&quot;: &quot;21.094027&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzMinMazKaziMOB&quot;,
            &quot;station_name&quot;: &quot;Mińsk Mazowiecki-Kazikowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.178764&quot;,
            &quot;wgs84_e&quot;: &quot;21.560968&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzMinskKilinWSSE&quot;,
            &quot;station_name&quot;: &quot;Mińsk-Kilińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.17981&quot;,
            &quot;wgs84_e&quot;: &quot;21.56651&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzMinskKoscWSSE&quot;,
            &quot;station_name&quot;: &quot;Mińsk-Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;52.18047&quot;,
            &quot;wgs84_e&quot;: &quot;21.558659&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzMlawaMajaWSSE&quot;,
            &quot;station_name&quot;: &quot;Mława-Maja&quot;,
            &quot;wgs84_n&quot;: &quot;53.11236&quot;,
            &quot;wgs84_e&quot;: &quot;20.38105&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzMlawOrdona&quot;,
            &quot;station_name&quot;: &quot;Mława-Ordona&quot;,
            &quot;wgs84_n&quot;: &quot;53.111908&quot;,
            &quot;wgs84_e&quot;: &quot;20.371725&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzNowDwChemWSSE&quot;,
            &quot;station_name&quot;: &quot;Nowy Dw&oacute;r-Chemik&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;52.429424&quot;,
            &quot;wgs84_e&quot;: &quot;20.72413&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzOstMazSikorWSSE&quot;,
            &quot;station_name&quot;: &quot;Ostr&oacute;w Mazowiecka-Sikorskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.80326&quot;,
            &quot;wgs84_e&quot;: &quot;21.890476&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzOstroHalle&quot;,
            &quot;station_name&quot;: &quot;Ostrołęka-Hallera&quot;,
            &quot;wgs84_n&quot;: &quot;53.083736&quot;,
            &quot;wgs84_e&quot;: &quot;21.579323&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzOstrolKoscWSSE&quot;,
            &quot;station_name&quot;: &quot;Ostrołęka-Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;53.08532&quot;,
            &quot;wgs84_e&quot;: &quot;21.568983&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzOstrolTargowa&quot;,
            &quot;station_name&quot;: &quot;Ostrołęka-Targowa&quot;,
            &quot;wgs84_n&quot;: &quot;53.084023&quot;,
            &quot;wgs84_e&quot;: &quot;21.589205&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzOtwoBrzozo&quot;,
            &quot;station_name&quot;: &quot;Otwock-Brzozowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.115726&quot;,
            &quot;wgs84_e&quot;: &quot;21.237297&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzOtwockBrzozWSSE&quot;,
            &quot;station_name&quot;: &quot;Otwock-BrzozowaWSSE&quot;,
            &quot;wgs84_n&quot;: &quot;52.115444&quot;,
            &quot;wgs84_e&quot;: &quot;21.237658&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPiaseczDworWSSE&quot;,
            &quot;station_name&quot;: &quot;Piaseczno-Dworska&quot;,
            &quot;wgs84_n&quot;: &quot;52.051445&quot;,
            &quot;wgs84_e&quot;: &quot;21.005583&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPiasPulask&quot;,
            &quot;station_name&quot;: &quot;Piast&oacute;w-Pułaskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.191727&quot;,
            &quot;wgs84_e&quot;: &quot;20.837488&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPiastWarszWSSE&quot;,
            &quot;station_name&quot;: &quot;Piast&oacute;w-Warszawska&quot;,
            &quot;wgs84_n&quot;: &quot;52.18658&quot;,
            &quot;wgs84_e&quot;: &quot;20.843525&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPionkiSienWSSE&quot;,
            &quot;station_name&quot;: &quot;Pionki-Sienkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;51.478027&quot;,
            &quot;wgs84_e&quot;: &quot;21.451384&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockJasnaWSSE&quot;,
            &quot;station_name&quot;: &quot;Płock-Jasna&quot;,
            &quot;wgs84_n&quot;: &quot;52.554005&quot;,
            &quot;wgs84_e&quot;: &quot;19.667702&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockKolegWSSE&quot;,
            &quot;station_name&quot;: &quot;Płock-Kolegialna&quot;,
            &quot;wgs84_n&quot;: &quot;52.54222&quot;,
            &quot;wgs84_e&quot;: &quot;19.695557&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockKolodWSSE&quot;,
            &quot;station_name&quot;: &quot;Płock-Piasta Kołodzieja&quot;,
            &quot;wgs84_n&quot;: &quot;52.550865&quot;,
            &quot;wgs84_e&quot;: &quot;19.69058&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockLaczWSSE&quot;,
            &quot;station_name&quot;: &quot;Płock-Łączniczek&quot;,
            &quot;wgs84_n&quot;: &quot;52.539936&quot;,
            &quot;wgs84_e&quot;: &quot;19.751333&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockOpsis&quot;,
            &quot;station_name&quot;: &quot;Płock-Opsis&quot;,
            &quot;wgs84_n&quot;: &quot;52.549778&quot;,
            &quot;wgs84_e&quot;: &quot;19.691923&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockPiaskaWSSE&quot;,
            &quot;station_name&quot;: &quot;Płock-Piaska&quot;,
            &quot;wgs84_n&quot;: &quot;52.54434&quot;,
            &quot;wgs84_e&quot;: &quot;19.724451&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockPKN1&quot;,
            &quot;station_name&quot;: &quot;Płock-Trzepowo&quot;,
            &quot;wgs84_n&quot;: &quot;52.5888&quot;,
            &quot;wgs84_e&quot;: &quot;19.724289&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockPKN2&quot;,
            &quot;station_name&quot;: &quot;Płock-Maszewo&quot;,
            &quot;wgs84_n&quot;: &quot;52.584167&quot;,
            &quot;wgs84_e&quot;: &quot;19.6114&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlockPKN3&quot;,
            &quot;station_name&quot;: &quot;Płock-Chełpowo&quot;,
            &quot;wgs84_n&quot;: &quot;52.5675&quot;,
            &quot;wgs84_e&quot;: &quot;19.6875&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlocKroJad&quot;,
            &quot;station_name&quot;: &quot;Płock-Gimnazjum&quot;,
            &quot;wgs84_n&quot;: &quot;52.55628&quot;,
            &quot;wgs84_e&quot;: &quot;19.687672&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlocMiReja&quot;,
            &quot;station_name&quot;: &quot;Płock-Reja&quot;,
            &quot;wgs84_n&quot;: &quot;52.550938&quot;,
            &quot;wgs84_e&quot;: &quot;19.709791&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPlonskSienWSSE&quot;,
            &quot;station_name&quot;: &quot;Płońsk-Sienkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;52.62978&quot;,
            &quot;wgs84_e&quot;: &quot;20.37556&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPruszKraszeWSSE&quot;,
            &quot;station_name&quot;: &quot;Pruszk&oacute;w-Kraszewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.162262&quot;,
            &quot;wgs84_e&quot;: &quot;20.812832&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPruszMajWSSE&quot;,
            &quot;station_name&quot;: &quot;Pruszk&oacute;w-Majowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.17154&quot;,
            &quot;wgs84_e&quot;: &quot;20.810253&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPultusKoscWSSE&quot;,
            &quot;station_name&quot;: &quot;Pułtusk-Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;52.709644&quot;,
            &quot;wgs84_e&quot;: &quot;21.083912&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzPultusMajaWSSE&quot;,
            &quot;station_name&quot;: &quot;Pułtusk-Maja&quot;,
            &quot;wgs84_n&quot;: &quot;52.707684&quot;,
            &quot;wgs84_e&quot;: &quot;21.084497&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzRad25Czerw&quot;,
            &quot;station_name&quot;: &quot;Radom-Czerwca&quot;,
            &quot;wgs84_n&quot;: &quot;51.40608&quot;,
            &quot;wgs84_e&quot;: &quot;21.166819&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzRadHallera&quot;,
            &quot;station_name&quot;: &quot;Radom-Hallera&quot;,
            &quot;wgs84_n&quot;: &quot;51.415325&quot;,
            &quot;wgs84_e&quot;: &quot;21.171286&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzRadomAlekWSSE&quot;,
            &quot;station_name&quot;: &quot;Radom-J&oacute;zef&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;51.43774&quot;,
            &quot;wgs84_e&quot;: &quot;21.161865&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzRadomCzWSSE&quot;,
            &quot;station_name&quot;: &quot;Radom-CzerwcaWSSE&quot;,
            &quot;wgs84_n&quot;: &quot;51.400127&quot;,
            &quot;wgs84_e&quot;: &quot;21.162634&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzRadomLubonWSSE&quot;,
            &quot;station_name&quot;: &quot;Radom-Lubońskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.390408&quot;,
            &quot;wgs84_e&quot;: &quot;21.170235&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzRadomPulask&quot;,
            &quot;station_name&quot;: &quot;Radom-Pułaskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.42521&quot;,
            &quot;wgs84_e&quot;: &quot;21.158278&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzRadTochter&quot;,
            &quot;station_name&quot;: &quot;Radom-Tochtermana&quot;,
            &quot;wgs84_n&quot;: &quot;51.399082&quot;,
            &quot;wgs84_e&quot;: &quot;21.147474&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSiedChrobWSSE&quot;,
            &quot;station_name&quot;: &quot;Siedlce-Chrobrego&quot;,
            &quot;wgs84_n&quot;: &quot;52.18308&quot;,
            &quot;wgs84_e&quot;: &quot;22.27501&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSiedKonars&quot;,
            &quot;station_name&quot;: &quot;Siedlce-Konarskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.172146&quot;,
            &quot;wgs84_e&quot;: &quot;22.282001&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSiedPodlasWSSE&quot;,
            &quot;station_name&quot;: &quot;Siedlce-Podlaska&quot;,
            &quot;wgs84_n&quot;: &quot;52.160793&quot;,
            &quot;wgs84_e&quot;: &quot;22.255203&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSiedPoniatWSSE&quot;,
            &quot;station_name&quot;: &quot;Siedlce-Poniatowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.176296&quot;,
            &quot;wgs84_e&quot;: &quot;22.28874&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSiedSienkWSSE&quot;,
            &quot;station_name&quot;: &quot;Siedlce-Sienkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;52.165962&quot;,
            &quot;wgs84_e&quot;: &quot;22.278046&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSiedStarowWSSE&quot;,
            &quot;station_name&quot;: &quot;Siedlce-Starowiejska&quot;,
            &quot;wgs84_n&quot;: &quot;52.166473&quot;,
            &quot;wgs84_e&quot;: &quot;22.292955&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSiedWoszczWSSE&quot;,
            &quot;station_name&quot;: &quot;Siedlce-Woszczerowicza&quot;,
            &quot;wgs84_n&quot;: &quot;52.164444&quot;,
            &quot;wgs84_e&quot;: &quot;22.279722&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSierpcPiastWSSE&quot;,
            &quot;station_name&quot;: &quot;Sierpc-Piastowska&quot;,
            &quot;wgs84_n&quot;: &quot;52.853176&quot;,
            &quot;wgs84_e&quot;: &quot;19.666716&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSochPlocWSSE&quot;,
            &quot;station_name&quot;: &quot;Sochaczew-Płocka&quot;,
            &quot;wgs84_n&quot;: &quot;52.231792&quot;,
            &quot;wgs84_e&quot;: &quot;20.219172&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSochSierpWSSE&quot;,
            &quot;station_name&quot;: &quot;Sochaczew-Sierpnia&quot;,
            &quot;wgs84_n&quot;: &quot;52.22177&quot;,
            &quot;wgs84_e&quot;: &quot;20.23465&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzSokPodSierpWSSE&quot;,
            &quot;station_name&quot;: &quot;Sokoł&oacute;w Podlaski-Sierpnia&quot;,
            &quot;wgs84_n&quot;: &quot;52.40572&quot;,
            &quot;wgs84_e&quot;: &quot;22.234814&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzTluszczJKiel&quot;,
            &quot;station_name&quot;: &quot;Tłuszcz-Kielaka&quot;,
            &quot;wgs84_n&quot;: &quot;52.425835&quot;,
            &quot;wgs84_e&quot;: &quot;21.429167&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarAKrzywo&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Anieli Krzywoń&quot;,
            &quot;wgs84_n&quot;: &quot;52.22865&quot;,
            &quot;wgs84_e&quot;: &quot;20.917513&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarAKrzywWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Anieli KrzywońWSSE&quot;,
            &quot;wgs84_n&quot;: &quot;52.22865&quot;,
            &quot;wgs84_e&quot;: &quot;20.917513&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarAlNiepo&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Komunikacyjna&quot;,
            &quot;wgs84_n&quot;: &quot;52.2193&quot;,
            &quot;wgs84_e&quot;: &quot;21.004725&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarBajkowa&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Bajkowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.188473&quot;,
            &quot;wgs84_e&quot;: &quot;21.176233&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarChrosci&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Chrościckiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.20774&quot;,
            &quot;wgs84_e&quot;: &quot;20.906073&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarKondrat&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Targ&oacute;wek&quot;,
            &quot;wgs84_n&quot;: &quot;52.290863&quot;,
            &quot;wgs84_e&quot;: &quot;21.042458&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarMarszal&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Marszałkowska&quot;,
            &quot;wgs84_n&quot;: &quot;52.22516&quot;,
            &quot;wgs84_e&quot;: &quot;21.014803&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarPodlesn&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Podleśna&quot;,
            &quot;wgs84_n&quot;: &quot;52.280937&quot;,
            &quot;wgs84_e&quot;: &quot;20.962156&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarPorajow&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Poraj&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;52.314514&quot;,
            &quot;wgs84_e&quot;: &quot;20.958614&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarPuszSol&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Puszczy Solskiej&quot;,
            &quot;wgs84_n&quot;: &quot;52.226406&quot;,
            &quot;wgs84_e&quot;: &quot;20.908632&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszAlJerozol&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Aleje Jerozolimskie&quot;,
            &quot;wgs84_n&quot;: &quot;52.231632&quot;,
            &quot;wgs84_e&quot;: &quot;21.0189&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszArmLudWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Armii Ludowej&quot;,
            &quot;wgs84_n&quot;: &quot;52.217724&quot;,
            &quot;wgs84_e&quot;: &quot;21.011723&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszBednarWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Bednarska&quot;,
            &quot;wgs84_n&quot;: &quot;52.245975&quot;,
            &quot;wgs84_e&quot;: &quot;21.02043&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszBernWoda&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Bernardyńska&quot;,
            &quot;wgs84_n&quot;: &quot;52.191734&quot;,
            &quot;wgs84_e&quot;: &quot;21.051052&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszBialobWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Białobrzeska&quot;,
            &quot;wgs84_n&quot;: &quot;52.213226&quot;,
            &quot;wgs84_e&quot;: &quot;20.973755&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszBorKomWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Bora Komorowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.225193&quot;,
            &quot;wgs84_e&quot;: &quot;21.087355&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszHertzaWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Hertza&quot;,
            &quot;wgs84_n&quot;: &quot;52.224537&quot;,
            &quot;wgs84_e&quot;: &quot;21.152748&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszKochanWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Kochanowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.267162&quot;,
            &quot;wgs84_e&quot;: &quot;20.94953&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszKrucza&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Krucza&quot;,
            &quot;wgs84_n&quot;: &quot;52.224583&quot;,
            &quot;wgs84_e&quot;: &quot;21.01904&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszLazurowa&quot;,
            &quot;station_name&quot;: &quot;Warszawa - Lazurowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.22028&quot;,
            &quot;wgs84_e&quot;: &quot;20.8975&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszOskLanWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Oskara Lange&quot;,
            &quot;wgs84_n&quot;: &quot;52.18154&quot;,
            &quot;wgs84_e&quot;: &quot;21.008873&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszSGGW&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Nowoursynowska&quot;,
            &quot;wgs84_n&quot;: &quot;52.160557&quot;,
            &quot;wgs84_e&quot;: &quot;21.047777&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszSuwalWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Suwalska&quot;,
            &quot;wgs84_n&quot;: &quot;52.295467&quot;,
            &quot;wgs84_e&quot;: &quot;21.029064&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarszZelazWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Żelazna&quot;,
            &quot;wgs84_n&quot;: &quot;52.2375&quot;,
            &quot;wgs84_e&quot;: &quot;20.98793&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarTolstoj&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Tołstoja&quot;,
            &quot;wgs84_n&quot;: &quot;52.285072&quot;,
            &quot;wgs84_e&quot;: &quot;20.933018&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarWokalna&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Ursyn&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;52.16077&quot;,
            &quot;wgs84_e&quot;: &quot;21.03382&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWarZeganWSSE&quot;,
            &quot;station_name&quot;: &quot;Warszawa-Żegańska&quot;,
            &quot;wgs84_n&quot;: &quot;52.20577&quot;,
            &quot;wgs84_e&quot;: &quot;21.169521&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWolOgrodowa&quot;,
            &quot;station_name&quot;: &quot;Wołomin-Ogrodowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.344673&quot;,
            &quot;wgs84_e&quot;: &quot;21.239511&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWolomLegionWSSE&quot;,
            &quot;station_name&quot;: &quot;Wołomin-Legion&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;52.33876&quot;,
            &quot;wgs84_e&quot;: &quot;21.241823&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzWyszDaszynWSSE&quot;,
            &quot;station_name&quot;: &quot;Wyszk&oacute;w-Daszyńskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.593994&quot;,
            &quot;wgs84_e&quot;: &quot;21.458078&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzZwolenWSSE&quot;,
            &quot;station_name&quot;: &quot;Zwoleń-Kościuszki&quot;,
            &quot;wgs84_n&quot;: &quot;51.35581&quot;,
            &quot;wgs84_e&quot;: &quot;21.578566&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzZyrardMoniuszWSSE&quot;,
            &quot;station_name&quot;: &quot;Żyrard&oacute;w-Moniuszki&quot;,
            &quot;wgs84_n&quot;: &quot;52.057148&quot;,
            &quot;wgs84_e&quot;: &quot;20.450546&quot;
        },
        {
            &quot;station_code&quot;: &quot;MzZyraRoosev&quot;,
            &quot;station_name&quot;: &quot;Żyrard&oacute;w-Roosevelta&quot;,
            &quot;wgs84_n&quot;: &quot;52.05381&quot;,
            &quot;wgs84_e&quot;: &quot;20.429892&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpBrzeg101&quot;,
            &quot;station_name&quot;: &quot;Brzeg manualna 101&quot;,
            &quot;wgs84_n&quot;: &quot;50.8575&quot;,
            &quot;wgs84_e&quot;: &quot;17.463612&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpGlubKochan&quot;,
            &quot;station_name&quot;: &quot;Głubczyce manualna 1&quot;,
            &quot;wgs84_n&quot;: &quot;50.200943&quot;,
            &quot;wgs84_e&quot;: &quot;17.816454&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpGlubRatusz&quot;,
            &quot;station_name&quot;: &quot;Głubczyce manualna&quot;,
            &quot;wgs84_n&quot;: &quot;50.20078&quot;,
            &quot;wgs84_e&quot;: &quot;17.83051&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpGora12728&quot;,
            &quot;station_name&quot;: &quot;G&oacute;ra Św. Anny lokalna 12728&quot;,
            &quot;wgs84_n&quot;: &quot;50.451668&quot;,
            &quot;wgs84_e&quot;: &quot;18.163334&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpJanusz12394&quot;,
            &quot;station_name&quot;: &quot;Januszkowice lokalna 12394&quot;,
            &quot;wgs84_n&quot;: &quot;50.395832&quot;,
            &quot;wgs84_e&quot;: &quot;18.138332&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKKozBSmial&quot;,
            &quot;station_name&quot;: &quot;K-Koźle automat 1&quot;,
            &quot;wgs84_n&quot;: &quot;50.34961&quot;,
            &quot;wgs84_e&quot;: &quot;18.236574&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKkozle243&quot;,
            &quot;station_name&quot;: &quot;K-Koźle manualna 243&quot;,
            &quot;wgs84_n&quot;: &quot;50.338333&quot;,
            &quot;wgs84_e&quot;: &quot;18.134167&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKkozle61&quot;,
            &quot;station_name&quot;: &quot;K-Koźle manualna 61&quot;,
            &quot;wgs84_n&quot;: &quot;50.334442&quot;,
            &quot;wgs84_e&quot;: &quot;18.147223&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKkozleSP10&quot;,
            &quot;station_name&quot;: &quot;K-Koźle BASKI-SP10&quot;,
            &quot;wgs84_n&quot;: &quot;50.369446&quot;,
            &quot;wgs84_e&quot;: &quot;18.327778&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKkozleSP3&quot;,
            &quot;station_name&quot;: &quot;K-Koźle BASKI-SP3&quot;,
            &quot;wgs84_n&quot;: &quot;50.323612&quot;,
            &quot;wgs84_e&quot;: &quot;18.251389&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKkozleSP7&quot;,
            &quot;station_name&quot;: &quot;K-Koźle BASKI-SP7&quot;,
            &quot;wgs84_n&quot;: &quot;50.344444&quot;,
            &quot;wgs84_e&quot;: &quot;18.227777&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKlucz227&quot;,
            &quot;station_name&quot;: &quot;Kluczbork manualna 227&quot;,
            &quot;wgs84_n&quot;: &quot;50.973057&quot;,
            &quot;wgs84_e&quot;: &quot;18.214167&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKlucz235&quot;,
            &quot;station_name&quot;: &quot;Kluczbork manualna 235&quot;,
            &quot;wgs84_n&quot;: &quot;50.974445&quot;,
            &quot;wgs84_e&quot;: &quot;18.217508&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpKluczMicki&quot;,
            &quot;station_name&quot;: &quot;Kluczbork manualna 2&quot;,
            &quot;wgs84_n&quot;: &quot;50.97218&quot;,
            &quot;wgs84_e&quot;: &quot;18.207575&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpNamys2pyl&quot;,
            &quot;station_name&quot;: &quot;Namysł&oacute;w manualna 2&quot;,
            &quot;wgs84_n&quot;: &quot;51.072224&quot;,
            &quot;wgs84_e&quot;: &quot;17.71889&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpNysa237&quot;,
            &quot;station_name&quot;: &quot;Nysa manualna 237&quot;,
            &quot;wgs84_n&quot;: &quot;50.47361&quot;,
            &quot;wgs84_e&quot;: &quot;17.333555&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpNysaRodzie&quot;,
            &quot;station_name&quot;: &quot;Nysa manualna 3&quot;,
            &quot;wgs84_n&quot;: &quot;50.45899&quot;,
            &quot;wgs84_e&quot;: &quot;17.331905&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOlesno3pyl&quot;,
            &quot;station_name&quot;: &quot;Olesno manualna 3&quot;,
            &quot;wgs84_n&quot;: &quot;50.87639&quot;,
            &quot;wgs84_e&quot;: &quot;18.418612&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOlesSlowac&quot;,
            &quot;station_name&quot;: &quot;Olesno automat 4&quot;,
            &quot;wgs84_n&quot;: &quot;50.876984&quot;,
            &quot;wgs84_e&quot;: &quot;18.416878&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOpole244&quot;,
            &quot;station_name&quot;: &quot;Opole manualna 244&quot;,
            &quot;wgs84_n&quot;: &quot;50.68222&quot;,
            &quot;wgs84_e&quot;: &quot;17.946112&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOpole246&quot;,
            &quot;station_name&quot;: &quot;Opole manualna 246&quot;,
            &quot;wgs84_n&quot;: &quot;50.675278&quot;,
            &quot;wgs84_e&quot;: &quot;17.937222&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOpole45&quot;,
            &quot;station_name&quot;: &quot;Opole manualna 45&quot;,
            &quot;wgs84_n&quot;: &quot;50.66611&quot;,
            &quot;wgs84_e&quot;: &quot;17.937778&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOpole45p&quot;,
            &quot;station_name&quot;: &quot;Opole manualna 45p&quot;,
            &quot;wgs84_n&quot;: &quot;50.66611&quot;,
            &quot;wgs84_e&quot;: &quot;17.937778&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOpoleKoszy&quot;,
            &quot;station_name&quot;: &quot;Opole automat 5&quot;,
            &quot;wgs84_n&quot;: &quot;50.666737&quot;,
            &quot;wgs84_e&quot;: &quot;17.899137&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOpoleMinor&quot;,
            &quot;station_name&quot;: &quot;Opole automat 3&quot;,
            &quot;wgs84_n&quot;: &quot;50.66696&quot;,
            &quot;wgs84_e&quot;: &quot;17.922796&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpOpoleOsAKr&quot;,
            &quot;station_name&quot;: &quot;Opole manualna 4&quot;,
            &quot;wgs84_n&quot;: &quot;50.676857&quot;,
            &quot;wgs84_e&quot;: &quot;17.950277&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpPrud189&quot;,
            &quot;station_name&quot;: &quot;Prudnik manualna 189&quot;,
            &quot;wgs84_n&quot;: &quot;50.32111&quot;,
            &quot;wgs84_e&quot;: &quot;17.5775&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpPrud189p&quot;,
            &quot;station_name&quot;: &quot;Prudnik manualna 189p&quot;,
            &quot;wgs84_n&quot;: &quot;50.32111&quot;,
            &quot;wgs84_e&quot;: &quot;17.577778&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpPrudPodgor&quot;,
            &quot;station_name&quot;: &quot;Prudnik mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;50.320858&quot;,
            &quot;wgs84_e&quot;: &quot;17.59191&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpSkozleSP5&quot;,
            &quot;station_name&quot;: &quot;K-Koźle BASKI-SP5&quot;,
            &quot;wgs84_n&quot;: &quot;50.306946&quot;,
            &quot;wgs84_e&quot;: &quot;18.219444&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpStrzel239&quot;,
            &quot;station_name&quot;: &quot;Strzelce manualna 239&quot;,
            &quot;wgs84_n&quot;: &quot;50.509445&quot;,
            &quot;wgs84_e&quot;: &quot;18.303612&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpStrzel247&quot;,
            &quot;station_name&quot;: &quot;Strzelce manualna 247&quot;,
            &quot;wgs84_n&quot;: &quot;50.51389&quot;,
            &quot;wgs84_e&quot;: &quot;18.303892&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpStrzOpWysz&quot;,
            &quot;station_name&quot;: &quot;Strzelce Opolskie mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;50.509335&quot;,
            &quot;wgs84_e&quot;: &quot;18.288206&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpZdze12392&quot;,
            &quot;station_name&quot;: &quot;Zdzieszowice lokalna 12392&quot;,
            &quot;wgs84_n&quot;: &quot;50.43528&quot;,
            &quot;wgs84_e&quot;: &quot;18.132515&quot;
        },
        {
            &quot;station_code&quot;: &quot;OpZdziePiast&quot;,
            &quot;station_name&quot;: &quot;Zdzieszowice automat 2&quot;,
            &quot;wgs84_n&quot;: &quot;50.423534&quot;,
            &quot;wgs84_e&quot;: &quot;18.120739&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdAugSzpitalna&quot;,
            &quot;station_name&quot;: &quot;August&oacute;w ul.Szpitalna 12&quot;,
            &quot;wgs84_n&quot;: &quot;53.85134&quot;,
            &quot;wgs84_e&quot;: &quot;22.993628&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdAugustowUm&quot;,
            &quot;station_name&quot;: &quot;August&oacute;w-Miejska&quot;,
            &quot;wgs84_n&quot;: &quot;53.85264&quot;,
            &quot;wgs84_e&quot;: &quot;22.984612&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdAugustoZdrMOB&quot;,
            &quot;station_name&quot;: &quot;August&oacute;w - mobilne&quot;,
            &quot;wgs84_n&quot;: &quot;53.859528&quot;,
            &quot;wgs84_e&quot;: &quot;23.00075&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialPulPie&quot;,
            &quot;station_name&quot;: &quot;Białystok-Podmiejska&quot;,
            &quot;wgs84_n&quot;: &quot;53.138615&quot;,
            &quot;wgs84_e&quot;: &quot;23.229902&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialWarsza&quot;,
            &quot;station_name&quot;: &quot;Białystok-Warszawska&quot;,
            &quot;wgs84_n&quot;: &quot;53.129307&quot;,
            &quot;wgs84_e&quot;: &quot;23.181744&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialWaszyn&quot;,
            &quot;station_name&quot;: &quot;Białystok-Miejska&quot;,
            &quot;wgs84_n&quot;: &quot;53.12669&quot;,
            &quot;wgs84_e&quot;: &quot;23.155869&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialyBroniewsk&quot;,
            &quot;station_name&quot;: &quot;Bialystok ul. Broniewskiego 1&quot;,
            &quot;wgs84_n&quot;: &quot;53.14047&quot;,
            &quot;wgs84_e&quot;: &quot;23.134272&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialyLegionowa&quot;,
            &quot;station_name&quot;: &quot;Białystok ul Legionowa 8&quot;,
            &quot;wgs84_n&quot;: &quot;53.13093&quot;,
            &quot;wgs84_e&quot;: &quot;23.159853&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialyLegionowa8&quot;,
            &quot;station_name&quot;: &quot;BIAŁYSTOK LEGIONOWA 8 POSESJA&quot;,
            &quot;wgs84_n&quot;: &quot;53.13111&quot;,
            &quot;wgs84_e&quot;: &quot;23.15889&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialyPorzeczkowa&quot;,
            &quot;station_name&quot;: &quot;Białystok ul Porzeczkowa 11&quot;,
            &quot;wgs84_n&quot;: &quot;53.151188&quot;,
            &quot;wgs84_e&quot;: &quot;23.11917&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBialyWarszaw&quot;,
            &quot;station_name&quot;: &quot;Białystok ul. Warszawska 57 A&quot;,
            &quot;wgs84_n&quot;: &quot;53.131077&quot;,
            &quot;wgs84_e&quot;: &quot;23.174143&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBiePodKosciuszki&quot;,
            &quot;station_name&quot;: &quot;Bielsk Podlaski ul Kościuszki 16&quot;,
            &quot;wgs84_n&quot;: &quot;52.76947&quot;,
            &quot;wgs84_e&quot;: &quot;23.187025&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdBorsukowiz&quot;,
            &quot;station_name&quot;: &quot;Borsukowizna-Wiejska&quot;,
            &quot;wgs84_n&quot;: &quot;53.215492&quot;,
            &quot;wgs84_e&quot;: &quot;23.642153&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdGrajewKonsty3M&quot;,
            &quot;station_name&quot;: &quot;Grajewo ul Konstytucji 3 Maja 3&quot;,
            &quot;wgs84_n&quot;: &quot;53.643993&quot;,
            &quot;wgs84_e&quot;: &quot;22.461245&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdGrajewoWPoMOB&quot;,
            &quot;station_name&quot;: &quot;Grajewo - mobilne&quot;,
            &quot;wgs84_n&quot;: &quot;53.639793&quot;,
            &quot;wgs84_e&quot;: &quot;22.470274&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdGrajNowickiego&quot;,
            &quot;station_name&quot;: &quot;Grajewo - lab. mobilne&quot;,
            &quot;wgs84_n&quot;: &quot;53.648506&quot;,
            &quot;wgs84_e&quot;: &quot;22.4509&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdHajnowkJagMOB&quot;,
            &quot;station_name&quot;: &quot;Hajn&oacute;wka-mobilne&quot;,
            &quot;wgs84_n&quot;: &quot;52.73953&quot;,
            &quot;wgs84_e&quot;: &quot;23.58614&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdLomSikorsk&quot;,
            &quot;station_name&quot;: &quot;Lomza Sikorskiego 48/94&quot;,
            &quot;wgs84_n&quot;: &quot;53.181393&quot;,
            &quot;wgs84_e&quot;: &quot;22.05438&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdLomzaKopernika16&quot;,
            &quot;station_name&quot;: &quot;Lomza Kopernika16&quot;,
            &quot;wgs84_n&quot;: &quot;53.174835&quot;,
            &quot;wgs84_e&quot;: &quot;22.075947&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdLomzaSadowa&quot;,
            &quot;station_name&quot;: &quot;Łomża ul Sadowa 3&quot;,
            &quot;wgs84_n&quot;: &quot;53.177776&quot;,
            &quot;wgs84_e&quot;: &quot;22.0825&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdSiemPilsudskiego&quot;,
            &quot;station_name&quot;: &quot;Siemiatycze - lab. mobilne&quot;,
            &quot;wgs84_n&quot;: &quot;52.42302&quot;,
            &quot;wgs84_e&quot;: &quot;22.863832&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdSokol1Maja&quot;,
            &quot;station_name&quot;: &quot;Sok&oacute;łka ul 1- go Maja 13&quot;,
            &quot;wgs84_n&quot;: &quot;53.40472&quot;,
            &quot;wgs84_e&quot;: &quot;23.499443&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdSuw1Maja&quot;,
            &quot;station_name&quot;: &quot;Suwałki ul. 1 - go Maja 12&quot;,
            &quot;wgs84_n&quot;: &quot;54.099674&quot;,
            &quot;wgs84_e&quot;: &quot;22.935966&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdSuwPulaski&quot;,
            &quot;station_name&quot;: &quot;Suwałki, ul. Pułaskiego 73&quot;,
            &quot;wgs84_n&quot;: &quot;54.117878&quot;,
            &quot;wgs84_e&quot;: &quot;22.934608&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdSuwPulaskp&quot;,
            &quot;station_name&quot;: &quot;Suwałki, ul. Pułaskiego 26&quot;,
            &quot;wgs84_n&quot;: &quot;54.116055&quot;,
            &quot;wgs84_e&quot;: &quot;22.93875&quot;
        },
        {
            &quot;station_code&quot;: &quot;PdZambObronZamb&quot;,
            &quot;station_name&quot;: &quot;Zambr&oacute;w ul Obrońc&oacute;w Zambrowa 50&quot;,
            &quot;wgs84_n&quot;: &quot;52.985558&quot;,
            &quot;wgs84_e&quot;: &quot;22.253332&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkCzarnaWSSENafGaz&quot;,
            &quot;station_name&quot;: &quot;Czarna-OśrNaftaGaz-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.308887&quot;,
            &quot;wgs84_e&quot;: &quot;22.663902&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkDebicaWSSEParkow&quot;,
            &quot;station_name&quot;: &quot;Dębica-Parkowa-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.046665&quot;,
            &quot;wgs84_e&quot;: &quot;21.402222&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkDebiGrottg&quot;,
            &quot;station_name&quot;: &quot;Dębica-Grottgera&quot;,
            &quot;wgs84_n&quot;: &quot;50.054787&quot;,
            &quot;wgs84_e&quot;: &quot;21.416256&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkGorzycWSSEKEN&quot;,
            &quot;station_name&quot;: &quot;Gorzyce-KEN-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.65779&quot;,
            &quot;wgs84_e&quot;: &quot;21.84528&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkHorZdrParkMOB&quot;,
            &quot;station_name&quot;: &quot;Horyniec-Zdr&oacute;j-Park&quot;,
            &quot;wgs84_n&quot;: &quot;50.1921&quot;,
            &quot;wgs84_e&quot;: &quot;23.361425&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkHorZdrWSSESobies&quot;,
            &quot;station_name&quot;: &quot;Horyniec-Zdr&oacute;j-Sobieskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.189167&quot;,
            &quot;wgs84_e&quot;: &quot;23.362223&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkIwonZdrRab&quot;,
            &quot;station_name&quot;: &quot;Iwonicz-Zdr&oacute;j-Rąba&quot;,
            &quot;wgs84_n&quot;: &quot;49.56518&quot;,
            &quot;wgs84_e&quot;: &quot;21.791307&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkIwZdrWSSEToros&quot;,
            &quot;station_name&quot;: &quot;IwoniczZdr-Torosiewicza-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.561386&quot;,
            &quot;wgs84_e&quot;: &quot;21.78888&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJarosPruch&quot;,
            &quot;station_name&quot;: &quot;Jarosław-PWSTE-Pruchnicka&quot;,
            &quot;wgs84_n&quot;: &quot;50.01208&quot;,
            &quot;wgs84_e&quot;: &quot;22.674772&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJarosWIOSJanPawII&quot;,
            &quot;station_name&quot;: &quot;Jarosław-JanaPawłaII-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;50.015835&quot;,
            &quot;wgs84_e&quot;: &quot;22.672777&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJarosWSSE3Maja&quot;,
            &quot;station_name&quot;: &quot;Jarosław - 3 Maja -WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.013332&quot;,
            &quot;wgs84_e&quot;: &quot;22.693056&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJarosWSSEGrunw&quot;,
            &quot;station_name&quot;: &quot;Jarosław-Grunwaldzka-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.016388&quot;,
            &quot;wgs84_e&quot;: &quot;22.680279&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloSikor&quot;,
            &quot;station_name&quot;: &quot;Jaslo-Sikorskiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.744884&quot;,
            &quot;wgs84_e&quot;: &quot;21.454617&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWIOSFabr&quot;,
            &quot;station_name&quot;: &quot;Jasło-Fabryczna-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;49.754444&quot;,
            &quot;wgs84_e&quot;: &quot;21.541117&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWIOSFlor&quot;,
            &quot;station_name&quot;: &quot;Jasło-Floriańska-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;49.739166&quot;,
            &quot;wgs84_e&quot;: &quot;21.482779&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWIOSFlor2&quot;,
            &quot;station_name&quot;: &quot;Jasło-Floriańska-WIOS2&quot;,
            &quot;wgs84_n&quot;: &quot;49.739445&quot;,
            &quot;wgs84_e&quot;: &quot;21.482222&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWIOSMickiew&quot;,
            &quot;station_name&quot;: &quot;Jasło-Mickiewicza-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;49.748055&quot;,
            &quot;wgs84_e&quot;: &quot;21.463888&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWSSE3Maja&quot;,
            &quot;station_name&quot;: &quot;Jasło-3Maja-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.739445&quot;,
            &quot;wgs84_e&quot;: &quot;21.483055&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWSSEFloria&quot;,
            &quot;station_name&quot;: &quot;Jasło-Floriańska-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.7475&quot;,
            &quot;wgs84_e&quot;: &quot;21.471666&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWSSEKoralew&quot;,
            &quot;station_name&quot;: &quot;Jasło-Koralewskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.747223&quot;,
            &quot;wgs84_e&quot;: &quot;21.47139&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkJasloWSSESrocz&quot;,
            &quot;station_name&quot;: &quot;Jasło-Sroczyńskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.751945&quot;,
            &quot;wgs84_e&quot;: &quot;21.482779&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKolbWSSETyszk&quot;,
            &quot;station_name&quot;: &quot;Kobuszowa-Tyszkiew-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.248055&quot;,
            &quot;wgs84_e&quot;: &quot;21.778889&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKomanWSSEOsZdr&quot;,
            &quot;station_name&quot;: &quot;Komańcza-OśrodekZdr-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.33611&quot;,
            &quot;wgs84_e&quot;: &quot;22.06889&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKrempnaMPN&quot;,
            &quot;station_name&quot;: &quot;Krempna-MPN&quot;,
            &quot;wgs84_n&quot;: &quot;49.511295&quot;,
            &quot;wgs84_e&quot;: &quot;21.498606&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKrempWIOSGrab&quot;,
            &quot;station_name&quot;: &quot;Grab-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;49.433613&quot;,
            &quot;wgs84_e&quot;: &quot;21.445&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKrosKletow&quot;,
            &quot;station_name&quot;: &quot;Krosno-Klet&oacute;wki&quot;,
            &quot;wgs84_n&quot;: &quot;49.69017&quot;,
            &quot;wgs84_e&quot;: &quot;21.7497&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKrosnoWSSEKisiel&quot;,
            &quot;station_name&quot;: &quot;Krosno-Kisielewskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.683887&quot;,
            &quot;wgs84_e&quot;: &quot;21.755278&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKrosnoWSSEKisielewskiego&quot;,
            &quot;station_name&quot;: &quot;Krosno-Kisielewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;49.683613&quot;,
            &quot;wgs84_e&quot;: &quot;21.755556&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKrosnoWSSELewak&quot;,
            &quot;station_name&quot;: &quot;Krosno-Lewakowskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.69389&quot;,
            &quot;wgs84_e&quot;: &quot;21.755278&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkKrosnoWSSEStasz&quot;,
            &quot;station_name&quot;: &quot;Krosno-Staszica-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.691666&quot;,
            &quot;wgs84_e&quot;: &quot;21.767221&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkLeskoWSSERynek&quot;,
            &quot;station_name&quot;: &quot;Lesko-Rynek-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.468887&quot;,
            &quot;wgs84_e&quot;: &quot;22.331112&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkLubaczWSSEMickiew&quot;,
            &quot;station_name&quot;: &quot;Lubacz&oacute;w-Mickiewicza-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.16083&quot;,
            &quot;wgs84_e&quot;: &quot;23.120832&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkMielBierna&quot;,
            &quot;station_name&quot;: &quot;Mielec-Biernackiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.29913&quot;,
            &quot;wgs84_e&quot;: &quot;21.440943&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkMielPogodn&quot;,
            &quot;station_name&quot;: &quot;Mielec-Pogodna&quot;,
            &quot;wgs84_n&quot;: &quot;50.318035&quot;,
            &quot;wgs84_e&quot;: &quot;21.486372&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkMielSolski&quot;,
            &quot;station_name&quot;: &quot;Mielec-MOSIR-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;50.300762&quot;,
            &quot;wgs84_e&quot;: &quot;21.434332&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkMielWSSEGrunw&quot;,
            &quot;station_name&quot;: &quot;MIelec-Grunwaldzka-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.296665&quot;,
            &quot;wgs84_e&quot;: &quot;21.435833&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkMielWSSESklodow&quot;,
            &quot;station_name&quot;: &quot;MIelec-M.C.Skłodowskiej-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.295277&quot;,
            &quot;wgs84_e&quot;: &quot;21.441668&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkMielZaStre&quot;,
            &quot;station_name&quot;: &quot;Mielec - Zarząd Strefy&quot;,
            &quot;wgs84_n&quot;: &quot;50.30401&quot;,
            &quot;wgs84_e&quot;: &quot;21.4712&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkNiskoSzkla&quot;,
            &quot;station_name&quot;: &quot;Nisko-Szklarniowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.529892&quot;,
            &quot;wgs84_e&quot;: &quot;22.112467&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPolanWSSEStPomp&quot;,
            &quot;station_name&quot;: &quot;Polańczyk-St.pomp-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.37&quot;,
            &quot;wgs84_e&quot;: &quot;22.42639&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPolanZdrojMOB&quot;,
            &quot;station_name&quot;: &quot;Polanczyk-mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;49.374207&quot;,
            &quot;wgs84_e&quot;: &quot;22.439453&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPrzemGrunw&quot;,
            &quot;station_name&quot;: &quot;Przemysl-Grunwaldzka&quot;,
            &quot;wgs84_n&quot;: &quot;49.78434&quot;,
            &quot;wgs84_e&quot;: &quot;22.756239&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPrzemWIOSDolin&quot;,
            &quot;station_name&quot;: &quot;Przemyśl-Dolińskiego-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;49.786667&quot;,
            &quot;wgs84_e&quot;: &quot;22.758057&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPrzemWIOSPDom&quot;,
            &quot;station_name&quot;: &quot;Przemyśl-Pl.Dominikański-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;49.78278&quot;,
            &quot;wgs84_e&quot;: &quot;22.766666&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPrzemWSSEGlaz&quot;,
            &quot;station_name&quot;: &quot;Przemyśl-Glazera-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.786667&quot;,
            &quot;wgs84_e&quot;: &quot;22.759167&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPrzemWSSEMariac&quot;,
            &quot;station_name&quot;: &quot;Przemyśl-Mariacka-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.77833&quot;,
            &quot;wgs84_e&quot;: &quot;22.78861&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPrzemyslWIOSMick&quot;,
            &quot;station_name&quot;: &quot;Przemyśl-Mickiewicza-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;49.782433&quot;,
            &quot;wgs84_e&quot;: &quot;22.782907&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkPrzewWSSERynek&quot;,
            &quot;station_name&quot;: &quot;Przeworsk-Rynek-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.05639&quot;,
            &quot;wgs84_e&quot;: &quot;22.478056&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRymZdrPark&quot;,
            &quot;station_name&quot;: &quot;Ryman&oacute;w-Zdr&oacute;j-Parkowa&quot;,
            &quot;wgs84_n&quot;: &quot;49.54654&quot;,
            &quot;wgs84_e&quot;: &quot;21.851006&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRymZdrWSSEZdr&quot;,
            &quot;station_name&quot;: &quot;Ryman&oacute;w Zdr&oacute;j - Zdrojowa - WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.546944&quot;,
            &quot;wgs84_e&quot;: &quot;21.849443&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszPilsu&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.040676&quot;,
            &quot;wgs84_e&quot;: &quot;22.004656&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszRejta&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Nowe Miasto&quot;,
            &quot;wgs84_n&quot;: &quot;50.024242&quot;,
            &quot;wgs84_e&quot;: &quot;22.010574&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszWIOSLang&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Langiewicza WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;50.031113&quot;,
            &quot;wgs84_e&quot;: &quot;21.985&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszWIOSSzop&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Szopena WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;50.03403&quot;,
            &quot;wgs84_e&quot;: &quot;22.010733&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszWSSEGrunw&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Grunwaldzka-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.04028&quot;,
            &quot;wgs84_e&quot;: &quot;22.001944&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszWSSEPilsud&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Pilsudskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.04139&quot;,
            &quot;wgs84_e&quot;: &quot;22.001667&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszWSSEPoniat&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Poniatowskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.03389&quot;,
            &quot;wgs84_e&quot;: &quot;21.996944&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszWSSESkubisz&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Skubisza-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.05389&quot;,
            &quot;wgs84_e&quot;: &quot;21.981943&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkRzeszWSSEWierzb&quot;,
            &quot;station_name&quot;: &quot;Rzesz&oacute;w-Wierzbowa-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.03417&quot;,
            &quot;wgs84_e&quot;: &quot;22.014444&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkSanokWSSEJanPawl&quot;,
            &quot;station_name&quot;: &quot;Sanok-JanaPawła-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.57111&quot;,
            &quot;wgs84_e&quot;: &quot;22.197779&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkSanokWSSEJezier&quot;,
            &quot;station_name&quot;: &quot;Sanok-Jezierskiego-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.550278&quot;,
            &quot;wgs84_e&quot;: &quot;22.20111&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkSanokWSSEMickew&quot;,
            &quot;station_name&quot;: &quot;Sanok-Mickiewicza-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.56028&quot;,
            &quot;wgs84_e&quot;: &quot;22.201944&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkSanoSadowa&quot;,
            &quot;station_name&quot;: &quot;Sanok-Sadowa&quot;,
            &quot;wgs84_n&quot;: &quot;49.57173&quot;,
            &quot;wgs84_e&quot;: &quot;22.195892&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkStWolWoPol&quot;,
            &quot;station_name&quot;: &quot;Stalowa Wola - Woj. Polskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.577827&quot;,
            &quot;wgs84_e&quot;: &quot;22.054337&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkStWolWSSENiezl&quot;,
            &quot;station_name&quot;: &quot;StalowaWola-Niezłomnych-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.57083&quot;,
            &quot;wgs84_e&quot;: &quot;22.04861&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkTarnDabrow&quot;,
            &quot;station_name&quot;: &quot;Tarnobrzeg-M.Dabrowskiej&quot;,
            &quot;wgs84_n&quot;: &quot;50.57574&quot;,
            &quot;wgs84_e&quot;: &quot;21.688368&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkTarnobWIOSSwBarb&quot;,
            &quot;station_name&quot;: &quot;Tarnobrzeg-Św Barbary-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;50.56889&quot;,
            &quot;wgs84_e&quot;: &quot;21.683893&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkTarnobWSSE1Maja&quot;,
            &quot;station_name&quot;: &quot;Tarnobrzeg-1goMaja-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.56972&quot;,
            &quot;wgs84_e&quot;: &quot;21.664444&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkTarnobWSSEWarszaw&quot;,
            &quot;station_name&quot;: &quot;Tarnobrzeg-Warszawska-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.636112&quot;,
            &quot;wgs84_e&quot;: &quot;21.75389&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkTarnobWSSEWiejs&quot;,
            &quot;station_name&quot;: &quot;Tarnobrzeg-Wiejska-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.58611&quot;,
            &quot;wgs84_e&quot;: &quot;21.686111&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkUsDolWSSEKoper&quot;,
            &quot;station_name&quot;: &quot;Ustrzyki Dolne-Kopernika-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.430832&quot;,
            &quot;wgs84_e&quot;: &quot;22.590555&quot;
        },
        {
            &quot;station_code&quot;: &quot;PkUstDolWSSEBelz&quot;,
            &quot;station_name&quot;: &quot;UstrzykiDln-Bełska-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.430557&quot;,
            &quot;wgs84_e&quot;: &quot;22.588612&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s218m&quot;,
            &quot;station_name&quot;: &quot;WSSE Gdynia Środmieście&quot;,
            &quot;wgs84_n&quot;: &quot;54.515556&quot;,
            &quot;wgs84_e&quot;: &quot;18.538889&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s231m&quot;,
            &quot;station_name&quot;: &quot;WSSE Sopot&quot;,
            &quot;wgs84_n&quot;: &quot;54.44&quot;,
            &quot;wgs84_e&quot;: &quot;18.568333&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s234m&quot;,
            &quot;station_name&quot;: &quot;WSSE Gdynia Karwiny&quot;,
            &quot;wgs84_n&quot;: &quot;54.47333&quot;,
            &quot;wgs84_e&quot;: &quot;18.498333&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s237m&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Gdynia - Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;54.5081&quot;,
            &quot;wgs84_e&quot;: &quot;18.539852&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s428m&quot;,
            &quot;station_name&quot;: &quot;WSSE Gdańsk Wrzeszcz Dębinki&quot;,
            &quot;wgs84_n&quot;: &quot;54.365833&quot;,
            &quot;wgs84_e&quot;: &quot;18.627777&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s473m&quot;,
            &quot;station_name&quot;: &quot;WSSE Gdańsk Nowy Port&quot;,
            &quot;wgs84_n&quot;: &quot;54.40222&quot;,
            &quot;wgs84_e&quot;: &quot;18.664167&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s476m&quot;,
            &quot;station_name&quot;: &quot;WSSE Gdańsk Wrzeszcz&quot;,
            &quot;wgs84_n&quot;: &quot;54.386112&quot;,
            &quot;wgs84_e&quot;: &quot;18.612223&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s477m&quot;,
            &quot;station_name&quot;: &quot;WSSE Gdańsk Śr&oacute;dmieście&quot;,
            &quot;wgs84_n&quot;: &quot;54.355278&quot;,
            &quot;wgs84_e&quot;: &quot;18.650557&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.00.s479m&quot;,
            &quot;station_name&quot;: &quot;WSSE Gdańsk Morena&quot;,
            &quot;wgs84_n&quot;: &quot;54.358334&quot;,
            &quot;wgs84_e&quot;: &quot;18.586111&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.01w.01m&quot;,
            &quot;station_name&quot;: &quot;WIOŚ-Gdynia&quot;,
            &quot;wgs84_n&quot;: &quot;54.494446&quot;,
            &quot;wgs84_e&quot;: &quot;18.554167&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.02.s631m&quot;,
            &quot;station_name&quot;: &quot;WSSE Chojnice&quot;,
            &quot;wgs84_n&quot;: &quot;53.695&quot;,
            &quot;wgs84_e&quot;: &quot;17.557777&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.04.s472m&quot;,
            &quot;station_name&quot;: &quot;WSSE Pruszcz Gdański&quot;,
            &quot;wgs84_n&quot;: &quot;54.259724&quot;,
            &quot;wgs84_e&quot;: &quot;18.633612&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.06.s711m&quot;,
            &quot;station_name&quot;: &quot;WSSE Kościerzyna&quot;,
            &quot;wgs84_n&quot;: &quot;54.1225&quot;,
            &quot;wgs84_e&quot;: &quot;17.978611&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.06.s712m&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Kościerzyna - Staszica&quot;,
            &quot;wgs84_n&quot;: &quot;54.119167&quot;,
            &quot;wgs84_e&quot;: &quot;17.96861&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.07.s005m&quot;,
            &quot;station_name&quot;: &quot;WSSE Kwidzyn&quot;,
            &quot;wgs84_n&quot;: &quot;53.733055&quot;,
            &quot;wgs84_e&quot;: &quot;18.926111&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.08.s076m&quot;,
            &quot;station_name&quot;: &quot;WSSE Lębork&quot;,
            &quot;wgs84_n&quot;: &quot;54.539165&quot;,
            &quot;wgs84_e&quot;: &quot;17.742779&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.09.s067m&quot;,
            &quot;station_name&quot;: &quot;WSSE Malbork&quot;,
            &quot;wgs84_n&quot;: &quot;54.031666&quot;,
            &quot;wgs84_e&quot;: &quot;19.034166&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.12.s063m&quot;,
            &quot;station_name&quot;: &quot;WSSE Ustka&quot;,
            &quot;wgs84_n&quot;: &quot;54.588055&quot;,
            &quot;wgs84_e&quot;: &quot;16.854168&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.13.s618m&quot;,
            &quot;station_name&quot;: &quot;WSSE Starogard&quot;,
            &quot;wgs84_n&quot;: &quot;53.966667&quot;,
            &quot;wgs84_e&quot;: &quot;18.534445&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.14.s512m&quot;,
            &quot;station_name&quot;: &quot;WSSE Tczew&quot;,
            &quot;wgs84_n&quot;: &quot;54.09028&quot;,
            &quot;wgs84_e&quot;: &quot;18.797222&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm14TCZEw06m&quot;,
            &quot;station_name&quot;: &quot;Tczew manualny&quot;,
            &quot;wgs84_n&quot;: &quot;54.086945&quot;,
            &quot;wgs84_e&quot;: &quot;18.797222&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.15.s128m&quot;,
            &quot;station_name&quot;: &quot;WSSE Wejherowo&quot;,
            &quot;wgs84_n&quot;: &quot;54.608612&quot;,
            &quot;wgs84_e&quot;: &quot;18.248056&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.63.s073m&quot;,
            &quot;station_name&quot;: &quot;WSSE Słupsk&quot;,
            &quot;wgs84_n&quot;: &quot;54.468613&quot;,
            &quot;wgs84_e&quot;: &quot;17.036112&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.63.s079m&quot;,
            &quot;station_name&quot;: &quot;WSSE Słupsk - Towarowa/Piotra Skargi&quot;,
            &quot;wgs84_n&quot;: &quot;54.464443&quot;,
            &quot;wgs84_e&quot;: &quot;17.013056&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.63.wDSMm&quot;,
            &quot;station_name&quot;: &quot;WIOŚ DS Słupsk - Kniaziewicza malualny&quot;,
            &quot;wgs84_n&quot;: &quot;54.46361&quot;,
            &quot;wgs84_e&quot;: &quot;17.046667&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.a09a&quot;,
            &quot;station_name&quot;: &quot;AM9 Gdynia Redłowo&quot;,
            &quot;wgs84_n&quot;: &quot;54.483334&quot;,
            &quot;wgs84_e&quot;: &quot;18.55&quot;
        },
        {
            &quot;station_code&quot;: &quot;Pm.aw07m&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Tczew - Targowa&quot;,
            &quot;wgs84_n&quot;: &quot;54.082165&quot;,
            &quot;wgs84_e&quot;: &quot;18.786156&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmChojnMOB&quot;,
            &quot;station_name&quot;: &quot;CHojnice - mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;53.696545&quot;,
            &quot;wgs84_e&quot;: &quot;17.5645&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGac&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Gać - Słowiński Park Narodowy&quot;,
            &quot;wgs84_n&quot;: &quot;54.693806&quot;,
            &quot;wgs84_e&quot;: &quot;17.458067&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaGleboka&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Gdańsk - Głęboka&quot;,
            &quot;wgs84_n&quot;: &quot;54.352722&quot;,
            &quot;wgs84_e&quot;: &quot;18.673416&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaKacze02&quot;,
            &quot;station_name&quot;: &quot;AM2 Gdańsk Stogi&quot;,
            &quot;wgs84_n&quot;: &quot;54.36778&quot;,
            &quot;wgs84_e&quot;: &quot;18.70111&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaLecz08m&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Gdańsk - Leczkowa&quot;,
            &quot;wgs84_n&quot;: &quot;54.38028&quot;,
            &quot;wgs84_e&quot;: &quot;18.620274&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaLeczk08&quot;,
            &quot;station_name&quot;: &quot;AM8 Gdańsk Wrzeszcz&quot;,
            &quot;wgs84_n&quot;: &quot;54.38028&quot;,
            &quot;wgs84_e&quot;: &quot;18.620274&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaOstrz05&quot;,
            &quot;station_name&quot;: &quot;AM5 Gdańsk Szad&oacute;łki&quot;,
            &quot;wgs84_n&quot;: &quot;54.328335&quot;,
            &quot;wgs84_e&quot;: &quot;18.557781&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaPoWie01&quot;,
            &quot;station_name&quot;: &quot;AM1 Gdańsk Śr&oacute;dmieście&quot;,
            &quot;wgs84_n&quot;: &quot;54.353336&quot;,
            &quot;wgs84_e&quot;: &quot;18.635283&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaPowWiel&quot;,
            &quot;station_name&quot;: &quot;Zaspa&quot;,
            &quot;wgs84_n&quot;: &quot;54.39864&quot;,
            &quot;wgs84_e&quot;: &quot;18.614332&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdaWyzwo03&quot;,
            &quot;station_name&quot;: &quot;AM3 Gdańsk Nowy Port&quot;,
            &quot;wgs84_n&quot;: &quot;54.400833&quot;,
            &quot;wgs84_e&quot;: &quot;18.657497&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdyJozBema&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Gdynia - Bema&quot;,
            &quot;wgs84_n&quot;: &quot;54.50805&quot;,
            &quot;wgs84_e&quot;: &quot;18.539831&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdyPoreb04&quot;,
            &quot;station_name&quot;: &quot;AM4 Gdynia Pog&oacute;rze&quot;,
            &quot;wgs84_n&quot;: &quot;54.560837&quot;,
            &quot;wgs84_e&quot;: &quot;18.493332&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdySzaf09N&quot;,
            &quot;station_name&quot;: &quot;AM9 Gdynia Dąbrowa&quot;,
            &quot;wgs84_n&quot;: &quot;54.46576&quot;,
            &quot;wgs84_e&quot;: &quot;18.46491&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmGdyWendy10&quot;,
            &quot;station_name&quot;: &quot;AM10 Gdynia Śr&oacute;dmieście&quot;,
            &quot;wgs84_n&quot;: &quot;54.525272&quot;,
            &quot;wgs84_e&quot;: &quot;18.536383&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmKartWejher&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Kartuzy&quot;,
            &quot;wgs84_n&quot;: &quot;54.334194&quot;,
            &quot;wgs84_e&quot;: &quot;18.199944&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmKosTargo12&quot;,
            &quot;station_name&quot;: &quot;AM12 Kościerzyna Targowa&quot;,
            &quot;wgs84_n&quot;: &quot;54.120693&quot;,
            &quot;wgs84_e&quot;: &quot;17.97586&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmKwiSportow&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Kwidzyn - Sportowa&quot;,
            &quot;wgs84_n&quot;: &quot;53.722363&quot;,
            &quot;wgs84_e&quot;: &quot;18.936916&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmLebaRabkaE&quot;,
            &quot;station_name&quot;: &quot;IMGW Łeba - Rąbka&quot;,
            &quot;wgs84_n&quot;: &quot;54.75414&quot;,
            &quot;wgs84_e&quot;: &quot;17.534529&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmLebMalcz16&quot;,
            &quot;station_name&quot;: &quot;AM16 Lębork Malczewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;54.546165&quot;,
            &quot;wgs84_e&quot;: &quot;17.746195&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmLinieKos17&quot;,
            &quot;station_name&quot;: &quot;AM17 Liniewko Kościerskie&quot;,
            &quot;wgs84_n&quot;: &quot;54.10411&quot;,
            &quot;wgs84_e&quot;: &quot;18.182972&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmMalMicki15&quot;,
            &quot;station_name&quot;: &quot;AM15 Malbork Mickiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;54.031246&quot;,
            &quot;wgs84_e&quot;: &quot;19.0329&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmSlupKniazi&quot;,
            &quot;station_name&quot;: &quot;AM11 Słupsk Kniaziewicza&quot;,
            &quot;wgs84_n&quot;: &quot;54.46361&quot;,
            &quot;wgs84_e&quot;: &quot;17.046722&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmSlupOrzesz&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Słupsk Orzeszkowej&quot;,
            &quot;wgs84_n&quot;: &quot;54.475613&quot;,
            &quot;wgs84_e&quot;: &quot;17.030733&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmSopBitPl06&quot;,
            &quot;station_name&quot;: &quot;AM6 Sopot&quot;,
            &quot;wgs84_n&quot;: &quot;54.431667&quot;,
            &quot;wgs84_e&quot;: &quot;18.579721&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmStaGdaLubi&quot;,
            &quot;station_name&quot;: &quot;POLPHARMA Starogard Gdański - Lubichowska&quot;,
            &quot;wgs84_n&quot;: &quot;53.965664&quot;,
            &quot;wgs84_e&quot;: &quot;18.527636&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmTczeTarg07&quot;,
            &quot;station_name&quot;: &quot;AM7 Tczew&quot;,
            &quot;wgs84_n&quot;: &quot;54.085835&quot;,
            &quot;wgs84_e&quot;: &quot;18.787506&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmWejhPlWejh&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Wejherowo - Jakuba Wejhera&quot;,
            &quot;wgs84_n&quot;: &quot;54.60114&quot;,
            &quot;wgs84_e&quot;: &quot;18.23936&quot;
        },
        {
            &quot;station_code&quot;: &quot;PmWladywHallera&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Władysławowo - Hallera&quot;,
            &quot;wgs84_n&quot;: &quot;54.79364&quot;,
            &quot;wgs84_e&quot;: &quot;18.409945&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkBuskoRzew&quot;,
            &quot;station_name&quot;: &quot;WSSE Busko Zdr&oacute;j ul. Rzewuskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.45647&quot;,
            &quot;wgs84_e&quot;: &quot;20.719294&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkBuskoWios&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Busko Zdr&oacute;j, ul. Rzewuskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.456085&quot;,
            &quot;wgs84_e&quot;: &quot;20.71942&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkBuskRokosz&quot;,
            &quot;station_name&quot;: &quot;Busko-Zdr&oacute;j, ul. Rokosza&quot;,
            &quot;wgs84_n&quot;: &quot;50.45362&quot;,
            &quot;wgs84_e&quot;: &quot;20.71564&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkChecBiaZag&quot;,
            &quot;station_name&quot;: &quot;Chęciny ul. Białego Zagłębia&quot;,
            &quot;wgs84_n&quot;: &quot;50.80448&quot;,
            &quot;wgs84_e&quot;: &quot;20.469887&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkGoluUjWody&quot;,
            &quot;station_name&quot;: &quot;Gołuch&oacute;w, Ujęcie Wody&quot;,
            &quot;wgs84_n&quot;: &quot;50.621483&quot;,
            &quot;wgs84_e&quot;: &quot;20.614058&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkJedrMieszkMOB&quot;,
            &quot;station_name&quot;: &quot;Jędrzej&oacute;w, MOBILNA&quot;,
            &quot;wgs84_n&quot;: &quot;50.643673&quot;,
            &quot;wgs84_e&quot;: &quot;20.284885&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielGalcz&quot;,
            &quot;station_name&quot;: &quot;WSSE Kielce ul. Gałczyńskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.88361&quot;,
            &quot;wgs84_e&quot;: &quot;20.646667&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielIXWiek&quot;,
            &quot;station_name&quot;: &quot;WSSE Kielce Al. IX Wiek&oacute;w Kielc&quot;,
            &quot;wgs84_n&quot;: &quot;50.87594&quot;,
            &quot;wgs84_e&quot;: &quot;20.629326&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielJagiel&quot;,
            &quot;station_name&quot;: &quot;Kielce, ul. Jagiellońska&quot;,
            &quot;wgs84_n&quot;: &quot;50.872547&quot;,
            &quot;wgs84_e&quot;: &quot;20.604998&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielJagielWSSE&quot;,
            &quot;station_name&quot;: &quot;WSSE Kielce ul. Jagiellońska&quot;,
            &quot;wgs84_n&quot;: &quot;50.87254&quot;,
            &quot;wgs84_e&quot;: &quot;20.605045&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielKusoci&quot;,
            &quot;station_name&quot;: &quot;Kielce, ul. Kusocińskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.854218&quot;,
            &quot;wgs84_e&quot;: &quot;20.602583&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielTargow&quot;,
            &quot;station_name&quot;: &quot;Kielce, ul. Targowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.878998&quot;,
            &quot;wgs84_e&quot;: &quot;20.633692&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielTransp&quot;,
            &quot;station_name&quot;: &quot;Kielce WIOŚ Al. IX Wiek&oacute;w Kielc&quot;,
            &quot;wgs84_n&quot;: &quot;50.875&quot;,
            &quot;wgs84_e&quot;: &quot;20.629168&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKielWarsza&quot;,
            &quot;station_name&quot;: &quot;Kielce, ul. Warszawska&quot;,
            &quot;wgs84_n&quot;: &quot;50.894375&quot;,
            &quot;wgs84_e&quot;: &quot;20.657988&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKonsGranatMOB&quot;,
            &quot;station_name&quot;: &quot;Końskie, MOBILNA&quot;,
            &quot;wgs84_n&quot;: &quot;51.189526&quot;,
            &quot;wgs84_e&quot;: &quot;20.408892&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkKonskArmKr&quot;,
            &quot;station_name&quot;: &quot;WSSE Końskie ul. Armii Krajowej&quot;,
            &quot;wgs84_n&quot;: &quot;51.197887&quot;,
            &quot;wgs84_e&quot;: &quot;20.412947&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkMalo11List&quot;,
            &quot;station_name&quot;: &quot;Małogoszcz, ul. 11 Listopada&quot;,
            &quot;wgs84_n&quot;: &quot;50.808304&quot;,
            &quot;wgs84_e&quot;: &quot;20.271141&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkMalogCemen&quot;,
            &quot;station_name&quot;: &quot;Małogoszcz Cementownia&quot;,
            &quot;wgs84_n&quot;: &quot;50.82747&quot;,
            &quot;wgs84_e&quot;: &quot;20.288277&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkMalogCemen2&quot;,
            &quot;station_name&quot;: &quot;Małogoszcz, ul. 11 Listopada_cem2&quot;,
            &quot;wgs84_n&quot;: &quot;50.80831&quot;,
            &quot;wgs84_e&quot;: &quot;20.271166&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkMaloSlonec&quot;,
            &quot;station_name&quot;: &quot;Małogoszcz, ul. Słoneczna&quot;,
            &quot;wgs84_n&quot;: &quot;50.809563&quot;,
            &quot;wgs84_e&quot;: &quot;20.2661&quot;
        },
        {
            &quot;station_code&quot;: &quot;SKNowinyCemen&quot;,
            &quot;station_name&quot;: &quot;Nowiny&quot;,
            &quot;wgs84_n&quot;: &quot;50.803894&quot;,
            &quot;wgs84_e&quot;: &quot;20.543278&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkNowiParkow&quot;,
            &quot;station_name&quot;: &quot;Nowiny, ul. Parkowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.82311&quot;,
            &quot;wgs84_e&quot;: &quot;20.533506&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOstrOsSlonMOB&quot;,
            &quot;station_name&quot;: &quot;Ostrowiec Świętokrzyski, MOBILNA&quot;,
            &quot;wgs84_n&quot;: &quot;50.946705&quot;,
            &quot;wgs84_e&quot;: &quot;21.394491&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOstrowKatD&quot;,
            &quot;station_name&quot;: &quot;Ostrowiec Św. Kąty Denkowskie&quot;,
            &quot;wgs84_n&quot;: &quot;50.945915&quot;,
            &quot;wgs84_e&quot;: &quot;21.462008&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOstrowOsSl&quot;,
            &quot;station_name&quot;: &quot;WSSE Ostrowiec Świętokrzyski Os. Słoneczne&quot;,
            &quot;wgs84_n&quot;: &quot;50.94594&quot;,
            &quot;wgs84_e&quot;: &quot;21.389984&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOstrowSams&quot;,
            &quot;station_name&quot;: &quot;Ostrowiec Świętokrzyski ul. Samsonowicza&quot;,
            &quot;wgs84_n&quot;: &quot;50.948627&quot;,
            &quot;wgs84_e&quot;: &quot;21.433542&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOstrowWios&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Ostrowiec Świętokrzyski, os. Słoneczne&quot;,
            &quot;wgs84_n&quot;: &quot;50.945942&quot;,
            &quot;wgs84_e&quot;: &quot;21.390118&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOzarOsWzgo&quot;,
            &quot;station_name&quot;: &quot;Ożar&oacute;w, Os. Wzg&oacute;rze 52&quot;,
            &quot;wgs84_n&quot;: &quot;50.88713&quot;,
            &quot;wgs84_e&quot;: &quot;21.660727&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOzarowMiec&quot;,
            &quot;station_name&quot;: &quot;Mieczysław&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;50.947777&quot;,
            &quot;wgs84_e&quot;: &quot;21.72924&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkOzarowOsWz&quot;,
            &quot;station_name&quot;: &quot;Ożar&oacute;w Os. Wzg&oacute;rze&quot;,
            &quot;wgs84_n&quot;: &quot;50.89317&quot;,
            &quot;wgs84_e&quot;: &quot;21.655157&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkPolaRuszcz&quot;,
            &quot;station_name&quot;: &quot;Połaniec, ul. Ruszczańska&quot;,
            &quot;wgs84_n&quot;: &quot;50.429012&quot;,
            &quot;wgs84_e&quot;: &quot;21.277367&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkSandomMac&quot;,
            &quot;station_name&quot;: &quot;WSSE Sandomierz ul. Maciejowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;50.685&quot;,
            &quot;wgs84_e&quot;: &quot;21.729168&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkSkarZielnaMOB&quot;,
            &quot;station_name&quot;: &quot;Skarżysko-Kamienna, MOBILNA&quot;,
            &quot;wgs84_n&quot;: &quot;51.1211&quot;,
            &quot;wgs84_e&quot;: &quot;20.88063&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkSkarzSlow&quot;,
            &quot;station_name&quot;: &quot;WSSE Skarżysko-Kamienna ul. Słowackiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.114445&quot;,
            &quot;wgs84_e&quot;: &quot;20.866112&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkSolecZdroj&quot;,
            &quot;station_name&quot;: &quot;Solec-Zdr&oacute;j&quot;,
            &quot;wgs84_n&quot;: &quot;50.358658&quot;,
            &quot;wgs84_e&quot;: &quot;20.886185&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkStaracMur&quot;,
            &quot;station_name&quot;: &quot;WSSE Starachowice ul. Murarska&quot;,
            &quot;wgs84_n&quot;: &quot;51.050518&quot;,
            &quot;wgs84_e&quot;: &quot;21.092157&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkStaracZlota&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Starachowice, ul. Złota&quot;,
            &quot;wgs84_n&quot;: &quot;51.05048&quot;,
            &quot;wgs84_e&quot;: &quot;21.0847&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkStaraZlota&quot;,
            &quot;station_name&quot;: &quot;Starachowice, ul. Złota&quot;,
            &quot;wgs84_n&quot;: &quot;51.05061&quot;,
            &quot;wgs84_e&quot;: &quot;21.084175&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkSwietKrzyz&quot;,
            &quot;station_name&quot;: &quot;Stacja ZMŚP UJK w Kielcach&quot;,
            &quot;wgs84_n&quot;: &quot;50.86225&quot;,
            &quot;wgs84_e&quot;: &quot;21.053005&quot;
        },
        {
            &quot;station_code&quot;: &quot;SkTrzciOsiek&quot;,
            &quot;station_name&quot;: &quot;Trzcianka&quot;,
            &quot;wgs84_n&quot;: &quot;50.486298&quot;,
            &quot;wgs84_e&quot;: &quot;21.394102&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBedziBedz_kosci&quot;,
            &quot;station_name&quot;: &quot;Będzin_kosci-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBielbBiel_broni&quot;,
            &quot;station_name&quot;: &quot;BielskoB_broniew-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBielbBiel_langi&quot;,
            &quot;station_name&quot;: &quot;BielskoB_langiew-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBielKossak&quot;,
            &quot;station_name&quot;: &quot;Bielsko-Biała, ul. Kossak-Szczuckiej 19&quot;,
            &quot;wgs84_n&quot;: &quot;49.813465&quot;,
            &quot;wgs84_e&quot;: &quot;19.027317&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBielPartyz&quot;,
            &quot;station_name&quot;: &quot;Bielsko-Biała, ul.Partyzant&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;49.802074&quot;,
            &quot;wgs84_e&quot;: &quot;19.04861&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBielSterni&quot;,
            &quot;station_name&quot;: &quot;Bielsko-Biała, ul. Sternicza&quot;,
            &quot;wgs84_n&quot;: &quot;49.80639&quot;,
            &quot;wgs84_e&quot;: &quot;19.023193&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBytomByto_modrz&quot;,
            &quot;station_name&quot;: &quot;Bytom_modrz-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;50.333332&quot;,
            &quot;wgs84_e&quot;: &quot;18.89611&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlBytomByto_parko&quot;,
            &quot;station_name&quot;: &quot;Bytom_park-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlChorzChor_bator&quot;,
            &quot;station_name&quot;: &quot;Chorz&oacute;w_batory-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;50.254166&quot;,
            &quot;wgs84_e&quot;: &quot;18.936943&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCiesMickie&quot;,
            &quot;station_name&quot;: &quot;Cieszyn, ul. Mickiewicza 13&quot;,
            &quot;wgs84_n&quot;: &quot;49.738136&quot;,
            &quot;wgs84_e&quot;: &quot;18.639069&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCieszCies_dojaz&quot;,
            &quot;station_name&quot;: &quot;Cieszyn-dojazdowa-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.751667&quot;,
            &quot;wgs84_e&quot;: &quot;18.6275&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCieszCies_rynek&quot;,
            &quot;station_name&quot;: &quot;Cieszyn_rynek-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzerKopaln&quot;,
            &quot;station_name&quot;: &quot;Czerwionka-Leszczyny, ul. Kopalniana&quot;,
            &quot;wgs84_n&quot;: &quot;50.16385&quot;,
            &quot;wgs84_e&quot;: &quot;18.659977&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzestCzes_arkra&quot;,
            &quot;station_name&quot;: &quot;Częstochowa_ak - WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;50.81778&quot;,
            &quot;wgs84_e&quot;: &quot;19.1175&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzestCzes_biega&quot;,
            &quot;station_name&quot;: &quot;Częstochowa_biegan-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzestCzes_boyaz&quot;,
            &quot;station_name&quot;: &quot;Częstochowa_boya-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzestCzes_rzasa&quot;,
            &quot;station_name&quot;: &quot;Częstochowa_rząsawska-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzestoArmK&quot;,
            &quot;station_name&quot;: &quot;Częstochowa, ul. AK/Jana Pawła II&quot;,
            &quot;wgs84_n&quot;: &quot;50.81722&quot;,
            &quot;wgs84_e&quot;: &quot;19.118998&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzestoBacz&quot;,
            &quot;station_name&quot;: &quot;Częstochowa, ul. Baczyńskiego 2&quot;,
            &quot;wgs84_n&quot;: &quot;50.836388&quot;,
            &quot;wgs84_e&quot;: &quot;19.130112&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlCzestoZana&quot;,
            &quot;station_name&quot;: &quot;Częstochowa, ul. Zana 6&quot;,
            &quot;wgs84_n&quot;: &quot;50.801918&quot;,
            &quot;wgs84_e&quot;: &quot;19.10696&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlDabro1000L&quot;,
            &quot;station_name&quot;: &quot;Dąbrowa G&oacute;rnicza, ul. Tysiąclecia 25a&quot;,
            &quot;wgs84_n&quot;: &quot;50.32911&quot;,
            &quot;wgs84_e&quot;: &quot;19.231222&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlDabroDabr_legio&quot;,
            &quot;station_name&quot;: &quot;DąbrG&oacute;r_leg-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlDabroDabr_ziolo&quot;,
            &quot;station_name&quot;: &quot;DąbG&oacute;r_zioł-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlGliwicMewy&quot;,
            &quot;station_name&quot;: &quot;Gliwice, ul. Mewy 34&quot;,
            &quot;wgs84_n&quot;: &quot;50.27948&quot;,
            &quot;wgs84_e&quot;: &quot;18.655737&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlGliwiGliw_kujaw&quot;,
            &quot;station_name&quot;: &quot;Gliwice_kujaw-WIOŚ/WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlGoczaUzdroMOB&quot;,
            &quot;station_name&quot;: &quot;Goczałkowice Zdr&oacute;j, ul. Parkowa&quot;,
            &quot;wgs84_n&quot;: &quot;49.93785&quot;,
            &quot;wgs84_e&quot;: &quot;18.975594&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlGodGliniki&quot;,
            &quot;station_name&quot;: &quot;God&oacute;w, ul. Gliniki&quot;,
            &quot;wgs84_n&quot;: &quot;49.921875&quot;,
            &quot;wgs84_e&quot;: &quot;18.471277&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlJastrJast_harce&quot;,
            &quot;station_name&quot;: &quot;Jastrzębie_harcer-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;49.95222&quot;,
            &quot;wgs84_e&quot;: &quot;18.610277&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlJaworJawo_poczt&quot;,
            &quot;station_name&quot;: &quot;Jaworzno_pocztowa-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.20222&quot;,
            &quot;wgs84_e&quot;: &quot;19.277222&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlKatoKossut&quot;,
            &quot;station_name&quot;: &quot;Katowice, ul. Kossutha 6&quot;,
            &quot;wgs84_n&quot;: &quot;50.26461&quot;,
            &quot;wgs84_e&quot;: &quot;18.975027&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlKatoPlebA4&quot;,
            &quot;station_name&quot;: &quot;Katowice, ul. Plebiscytowa/A4&quot;,
            &quot;wgs84_n&quot;: &quot;50.246796&quot;,
            &quot;wgs84_e&quot;: &quot;19.019468&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlKatowKato_racib&quot;,
            &quot;station_name&quot;: &quot;Katowice_raciborska-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.25528&quot;,
            &quot;wgs84_e&quot;: &quot;19.004168&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlKatowKato_weste&quot;,
            &quot;station_name&quot;: &quot;Katowice_wester-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlKlobuKlob_zamko&quot;,
            &quot;station_name&quot;: &quot;Kłobuck_zamkowa-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlKnurJedNar&quot;,
            &quot;station_name&quot;: &quot;Knur&oacute;w, ul. Jedności Narodowej 5&quot;,
            &quot;wgs84_n&quot;: &quot;50.233166&quot;,
            &quot;wgs84_e&quot;: &quot;18.655722&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlKuzniGliw_wiejs&quot;,
            &quot;station_name&quot;: &quot;Kuźnia Nieb_gliwic-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlLubliLubl_dworc&quot;,
            &quot;station_name&quot;: &quot;Lubliniec_dworcowa-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlLublPiasko&quot;,
            &quot;station_name&quot;: &quot;Lubliniec, ul. Piaskowa&quot;,
            &quot;wgs84_n&quot;: &quot;50.658356&quot;,
            &quot;wgs84_e&quot;: &quot;18.69622&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlLublSzymal&quot;,
            &quot;station_name&quot;: &quot;Lubliniec, ul. ks. Szymały&quot;,
            &quot;wgs84_n&quot;: &quot;50.675694&quot;,
            &quot;wgs84_e&quot;: &quot;18.682064&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlMiastMias_norwi&quot;,
            &quot;station_name&quot;: &quot;Miasteczko ŚL._norwida-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.489723&quot;,
            &quot;wgs84_e&quot;: &quot;18.918333&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlMiastMias_wycis&quot;,
            &quot;station_name&quot;: &quot;Miasteczko Śl_wycislika-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlMiastMias_zygli&quot;,
            &quot;station_name&quot;: &quot;Miasteczko Śl._Zyglinek-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlMyszkMysz_straz&quot;,
            &quot;station_name&quot;: &quot;Myszk&oacute;w_strazacka-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlMyszMiedzi&quot;,
            &quot;station_name&quot;: &quot;Myszk&oacute;w, ul. Miedziana 3&quot;,
            &quot;wgs84_n&quot;: &quot;50.579735&quot;,
            &quot;wgs84_e&quot;: &quot;19.3267&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlPiekaPiek_darwi&quot;,
            &quot;station_name&quot;: &quot;PiekaryŚl-darw-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlPiekaPiek_party&quot;,
            &quot;station_name&quot;: &quot;PiekaryŚl_part-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlPszczBoged&quot;,
            &quot;station_name&quot;: &quot;Pszczyna, ul. Bogedaina&quot;,
            &quot;wgs84_n&quot;: &quot;49.972176&quot;,
            &quot;wgs84_e&quot;: &quot;18.947218&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRaciborzWPMOB&quot;,
            &quot;station_name&quot;: &quot;Racib&oacute;rz, Wojska Polskiego 8&quot;,
            &quot;wgs84_n&quot;: &quot;50.09114&quot;,
            &quot;wgs84_e&quot;: &quot;18.21626&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRacibRaci_boruc&quot;,
            &quot;station_name&quot;: &quot;Racib&oacute;rz_borucin-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRacibRaci_studz&quot;,
            &quot;station_name&quot;: &quot;Racib&oacute;rz_studzienna-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;50.060833&quot;,
            &quot;wgs84_e&quot;: &quot;18.19111&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRacibRaci_towar&quot;,
            &quot;station_name&quot;: &quot;Racib&oacute;rz_towarzy-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRudasRuda_1maja&quot;,
            &quot;station_name&quot;: &quot;RudaŚl_1maja_WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;50.271942&quot;,
            &quot;wgs84_e&quot;: &quot;18.863056&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRybniBorki&quot;,
            &quot;station_name&quot;: &quot;Rybnik, ul. Borki 37 d&quot;,
            &quot;wgs84_n&quot;: &quot;50.11118&quot;,
            &quot;wgs84_e&quot;: &quot;18.516138&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRybniRybn_janie&quot;,
            &quot;station_name&quot;: &quot;Rybnik_janie-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlRybniRybn_szafr&quot;,
            &quot;station_name&quot;: &quot;Rybnik_szafr-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.095554&quot;,
            &quot;wgs84_e&quot;: &quot;18.5475&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlSosnoLubel&quot;,
            &quot;station_name&quot;: &quot;Sosnowiec, ul. Lubelska 51&quot;,
            &quot;wgs84_n&quot;: &quot;50.285957&quot;,
            &quot;wgs84_e&quot;: &quot;19.184399&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlSosnoSosn_narut&quot;,
            &quot;station_name&quot;: &quot;Sosnowiec_narut-WIOŚ/WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.273888&quot;,
            &quot;wgs84_e&quot;: &quot;19.146955&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlTarnoLitew&quot;,
            &quot;station_name&quot;: &quot;Tarnowskie G&oacute;ry, ul. Litewska&quot;,
            &quot;wgs84_n&quot;: &quot;50.444736&quot;,
            &quot;wgs84_e&quot;: &quot;18.82964&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlTychyTolst&quot;,
            &quot;station_name&quot;: &quot;Tychy, ul. Tołstoja 1&quot;,
            &quot;wgs84_n&quot;: &quot;50.099903&quot;,
            &quot;wgs84_e&quot;: &quot;18.990236&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlUstroCies_sanat&quot;,
            &quot;station_name&quot;: &quot;Ustroń_sanat-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;49.724724&quot;,
            &quot;wgs84_e&quot;: &quot;18.825&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlUstronSana&quot;,
            &quot;station_name&quot;: &quot;Ustroń, ul. Sanatoryjna 7&quot;,
            &quot;wgs84_n&quot;: &quot;49.71973&quot;,
            &quot;wgs84_e&quot;: &quot;18.826721&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlWodzGalczy&quot;,
            &quot;station_name&quot;: &quot;Wodzisław Śląski, ul. Gałczyńskiego 1&quot;,
            &quot;wgs84_n&quot;: &quot;50.00763&quot;,
            &quot;wgs84_e&quot;: &quot;18.455547&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlWodziWodz_bogum&quot;,
            &quot;station_name&quot;: &quot;Wodzisław_boguminska-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.000557&quot;,
            &quot;wgs84_e&quot;: &quot;18.458332&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlWojkoBedz_pader&quot;,
            &quot;station_name&quot;: &quot;Wojkowice_pader-WIOŚ&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZabrzZabr_3maja&quot;,
            &quot;station_name&quot;: &quot;Zabrze_3maja-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZabrzZabr_wolno&quot;,
            &quot;station_name&quot;: &quot;Zabrze_wolno-WIOS&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZabSkloCur&quot;,
            &quot;station_name&quot;: &quot;Zabrze, ul. M. Curie-Skłodowskiej 34&quot;,
            &quot;wgs84_n&quot;: &quot;50.3165&quot;,
            &quot;wgs84_e&quot;: &quot;18.772375&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZawGalczyn&quot;,
            &quot;station_name&quot;: &quot;Zawiercie, ul. K.I.Gałczyńskiego 3&quot;,
            &quot;wgs84_n&quot;: &quot;50.493046&quot;,
            &quot;wgs84_e&quot;: &quot;19.439013&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZawieZawi_listo&quot;,
            &quot;station_name&quot;: &quot;Zawiercie-11listop-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZawieZawi_pilsu&quot;,
            &quot;station_name&quot;: &quot;Zawiercie_piłsuds-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZawSkloCur&quot;,
            &quot;station_name&quot;: &quot;Zawiercie, ul. M. Skłodowskiej-Curie 16&quot;,
            &quot;wgs84_n&quot;: &quot;50.47954&quot;,
            &quot;wgs84_e&quot;: &quot;19.43301&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZlotPotLes&quot;,
            &quot;station_name&quot;: &quot;Złoty Potok, Leśnicz&oacute;wka&quot;,
            &quot;wgs84_n&quot;: &quot;50.710888&quot;,
            &quot;wgs84_e&quot;: &quot;19.458797&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZorymZory_wojsk&quot;,
            &quot;station_name&quot;: &quot;Żory_wojska-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;50.045277&quot;,
            &quot;wgs84_e&quot;: &quot;18.684444&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZorySikor2&quot;,
            &quot;station_name&quot;: &quot;Żory, Os. Gen. Władysława Sikorskiego 52_(2)&quot;,
            &quot;wgs84_n&quot;: &quot;50.029415&quot;,
            &quot;wgs84_e&quot;: &quot;18.689528&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZorySikors&quot;,
            &quot;station_name&quot;: &quot;Żory, Os. Gen. Władysława Sikorskiego 52&quot;,
            &quot;wgs84_n&quot;: &quot;50.028683&quot;,
            &quot;wgs84_e&quot;: &quot;18.691221&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZywieKoper&quot;,
            &quot;station_name&quot;: &quot;Żywiec, ul. Kopernika 83 a&quot;,
            &quot;wgs84_n&quot;: &quot;49.6716&quot;,
            &quot;wgs84_e&quot;: &quot;19.234446&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZywieSlowa&quot;,
            &quot;station_name&quot;: &quot;Żywiec, ul.Słowackiego 2&quot;,
            &quot;wgs84_n&quot;: &quot;49.687897&quot;,
            &quot;wgs84_e&quot;: &quot;19.205877&quot;
        },
        {
            &quot;station_code&quot;: &quot;SlZywieZywi_krasi&quot;,
            &quot;station_name&quot;: &quot;Żywiec_krasin-WSSE&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmBartoWSSE_Boh_War&quot;,
            &quot;station_name&quot;: &quot;Bartoszyce-PSSE&quot;,
            &quot;wgs84_n&quot;: &quot;54.25222&quot;,
            &quot;wgs84_e&quot;: &quot;20.810278&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmBiskupMickMOB&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Biskupiec-Mobilna&quot;,
            &quot;wgs84_n&quot;: &quot;53.860703&quot;,
            &quot;wgs84_e&quot;: &quot;20.957891&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmDzialdWSSE_Biedraw&quot;,
            &quot;station_name&quot;: &quot;Dzialdowo-PSSE&quot;,
            &quot;wgs84_n&quot;: &quot;53.232777&quot;,
            &quot;wgs84_e&quot;: &quot;20.177778&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElbBazynsk&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Elbląg ul. Bażyńskiego&quot;,
            &quot;wgs84_n&quot;: &quot;54.167847&quot;,
            &quot;wgs84_e&quot;: &quot;19.410942&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElblagWSSE_Hetma&quot;,
            &quot;station_name&quot;: &quot;Elblag - GSSE - Hetmanska&quot;,
            &quot;wgs84_n&quot;: &quot;54.18528&quot;,
            &quot;wgs84_e&quot;: &quot;19.405556&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElblagWSSE_Kalen&quot;,
            &quot;station_name&quot;: &quot;Elblag - GSSE - Kalenkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;54.15472&quot;,
            &quot;wgs84_e&quot;: &quot;19.406944&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElblagWSSE_Krole&quot;,
            &quot;station_name&quot;: &quot;Elblag - GSSE - Kr&oacute;lewiecka&quot;,
            &quot;wgs84_n&quot;: &quot;54.17917&quot;,
            &quot;wgs84_e&quot;: &quot;19.430555&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElblagWSSE_Zajchow&quot;,
            &quot;station_name&quot;: &quot;Elblag - GSSE - Zajchowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;54.164722&quot;,
            &quot;wgs84_e&quot;: &quot;19.415833&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElkStadion&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Ełk&quot;,
            &quot;wgs84_n&quot;: &quot;53.828457&quot;,
            &quot;wgs84_e&quot;: &quot;22.34845&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElkWIOS_PM10&quot;,
            &quot;station_name&quot;: &quot;Ełk - ul. Toruńska - WIOŚ PM10&quot;,
            &quot;wgs84_n&quot;: &quot;53.83139&quot;,
            &quot;wgs84_e&quot;: &quot;22.350279&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmElk_WSSE_Toru&quot;,
            &quot;station_name&quot;: &quot;Elk-PSSE-Torunska&quot;,
            &quot;wgs84_n&quot;: &quot;53.83139&quot;,
            &quot;wgs84_e&quot;: &quot;22.350279&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmGizyckWIOS_Wodoc&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Giżycko ul.Wodociągowa&quot;,
            &quot;wgs84_n&quot;: &quot;54.0425&quot;,
            &quot;wgs84_e&quot;: &quot;21.78139&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmGizyckWSSE_Suwals&quot;,
            &quot;station_name&quot;: &quot;Gizycko-PSSE-Suwalska&quot;,
            &quot;wgs84_n&quot;: &quot;54.03639&quot;,
            &quot;wgs84_e&quot;: &quot;21.786388&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmGlitajn&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Glitajny&quot;,
            &quot;wgs84_n&quot;: &quot;54.184727&quot;,
            &quot;wgs84_e&quot;: &quot;21.152914&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmGoldJacwie&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Gołdap ul. Jaćwieska&quot;,
            &quot;wgs84_n&quot;: &quot;54.30591&quot;,
            &quot;wgs84_e&quot;: &quot;22.30768&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmGoldUzdrowMOB&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Gołdap-Uzdrowisko&quot;,
            &quot;wgs84_n&quot;: &quot;54.328175&quot;,
            &quot;wgs84_e&quot;: &quot;22.332172&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmIlawAnders&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Iława ul.Andersa&quot;,
            &quot;wgs84_n&quot;: &quot;53.58795&quot;,
            &quot;wgs84_e&quot;: &quot;19.564703&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmIlawaWSSE_Anders&quot;,
            &quot;station_name&quot;: &quot;Ilawa-PSSE-Andersa&quot;,
            &quot;wgs84_n&quot;: &quot;53.586945&quot;,
            &quot;wgs84_e&quot;: &quot;19.583332&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmKetrzWSSE_Pilsud&quot;,
            &quot;station_name&quot;: &quot;Ketrzyn-PSSE-Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;54.078335&quot;,
            &quot;wgs84_e&quot;: &quot;21.371944&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmKorszeR&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Korsze&quot;,
            &quot;wgs84_n&quot;: &quot;54.170326&quot;,
            &quot;wgs84_e&quot;: &quot;21.13505&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmMragowWSSE_Krolew&quot;,
            &quot;station_name&quot;: &quot;Mragowo-WSSE-Krolewiecka&quot;,
            &quot;wgs84_n&quot;: &quot;53.874443&quot;,
            &quot;wgs84_e&quot;: &quot;21.303612&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmMragParkow&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Mrągowo ul. Parkowa&quot;,
            &quot;wgs84_n&quot;: &quot;53.866135&quot;,
            &quot;wgs84_e&quot;: &quot;21.296122&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmNiTraugutt&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Nidzica ul.Traugutta&quot;,
            &quot;wgs84_n&quot;: &quot;53.361145&quot;,
            &quot;wgs84_e&quot;: &quot;20.422035&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmOlsPuszkin&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Olsztyn ul. Puszkina&quot;,
            &quot;wgs84_n&quot;: &quot;53.789234&quot;,
            &quot;wgs84_e&quot;: &quot;20.486074&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmOlsztyWSSE_Niepodl&quot;,
            &quot;station_name&quot;: &quot;Olsztyn - WSSE - Niepodległości&quot;,
            &quot;wgs84_n&quot;: &quot;53.770832&quot;,
            &quot;wgs84_e&quot;: &quot;20.49&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmOlsztyWSSE_Zolnier&quot;,
            &quot;station_name&quot;: &quot;Olsztyn - WSEE Żołnierska&quot;,
            &quot;wgs84_n&quot;: &quot;53.770832&quot;,
            &quot;wgs84_e&quot;: &quot;20.49&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmOstrChrobr&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Ostr&oacute;da ul. Chrobrego&quot;,
            &quot;wgs84_n&quot;: &quot;53.69247&quot;,
            &quot;wgs84_e&quot;: &quot;19.969778&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmOstrodWSSE_Czarnec&quot;,
            &quot;station_name&quot;: &quot;Ostroda-PSSE-Czarneckiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.69611&quot;,
            &quot;wgs84_e&quot;: &quot;19.963333&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmOstrPilsud&quot;,
            &quot;station_name&quot;: &quot;WIOŚ Ostr&oacute;da Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.69463&quot;,
            &quot;wgs84_e&quot;: &quot;19.968891&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmPuszczaBor&quot;,
            &quot;station_name&quot;: &quot;KMŚ Puszcza Borecka&quot;,
            &quot;wgs84_n&quot;: &quot;54.12482&quot;,
            &quot;wgs84_e&quot;: &quot;22.038055&quot;
        },
        {
            &quot;station_code&quot;: &quot;WmSzczytWSSE_Sklodow&quot;,
            &quot;station_name&quot;: &quot;Szczytno-PSSE-Skłodowskiej&quot;,
            &quot;wgs84_n&quot;: &quot;53.565277&quot;,
            &quot;wgs84_e&quot;: &quot;20.98889&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpBoroDrapal&quot;,
            &quot;station_name&quot;: &quot;Borowiec-Drapalka&quot;,
            &quot;wgs84_n&quot;: &quot;52.276794&quot;,
            &quot;wgs84_e&quot;: &quot;17.074114&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpChodziez57196&quot;,
            &quot;station_name&quot;: &quot;Chodzież ul. Reymonta 12&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpGniePaczko&quot;,
            &quot;station_name&quot;: &quot;Gniezno, ul. Paczkowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.53986&quot;,
            &quot;wgs84_e&quot;: &quot;17.611961&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpGniezno63302&quot;,
            &quot;station_name&quot;: &quot;Gniezno, ul. Jana Pawła II 2&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpGnieznoPM10&quot;,
            &quot;station_name&quot;: &quot;Gniezno, ul Jana Pawła II 2PM10&quot;,
            &quot;wgs84_n&quot;: &quot;52.53611&quot;,
            &quot;wgs84_e&quot;: &quot;17.605278&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpGostyn41153&quot;,
            &quot;station_name&quot;: &quot;Gostyń, ul. K. Marcinkowskiego 8/9&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpJarocin25218&quot;,
            &quot;station_name&quot;: &quot;Jarocin, ul. Wąska 2&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKaliSawick&quot;,
            &quot;station_name&quot;: &quot;Kalisz-Wyszynskiego&quot;,
            &quot;wgs84_n&quot;: &quot;51.748104&quot;,
            &quot;wgs84_e&quot;: &quot;18.04931&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKalisz25001&quot;,
            &quot;station_name&quot;: &quot;Kalisz, ul. Serbinowska 5&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKalisz25002&quot;,
            &quot;station_name&quot;: &quot;Kalisz, ul. Nowy Świat 2a&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKaliszMajkow&quot;,
            &quot;station_name&quot;: &quot;Kalisz, ul. Tuwima 4&quot;,
            &quot;wgs84_n&quot;: &quot;51.775&quot;,
            &quot;wgs84_e&quot;: &quot;18.080557&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKaliszPM10&quot;,
            &quot;station_name&quot;: &quot;Kalisz, ul. Nowy Świat 2aPM10&quot;,
            &quot;wgs84_n&quot;: &quot;51.75722&quot;,
            &quot;wgs84_e&quot;: &quot;18.086666&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKaliszRynek251010&quot;,
            &quot;station_name&quot;: &quot;Kalisz, Rynek Gł&oacute;wny&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKolo31186&quot;,
            &quot;station_name&quot;: &quot;Koło, ul. Sportowa&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKonin31017&quot;,
            &quot;station_name&quot;: &quot;Konin, ul. Wieniawskiego 8&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKonin31018&quot;,
            &quot;station_name&quot;: &quot;Konin, ul. Leśna 23&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKoninStaszica&quot;,
            &quot;station_name&quot;: &quot;Konin, ul. Staszica 16&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKoniWyszyn&quot;,
            &quot;station_name&quot;: &quot;Konin-Wyszynskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.22563&quot;,
            &quot;wgs84_e&quot;: &quot;18.269035&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKoscian41251&quot;,
            &quot;station_name&quot;: &quot;Kościan, ul Piaskowa 42a&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKozieosLes&quot;,
            &quot;station_name&quot;: &quot;Kozieglowy-os.Lesne&quot;,
            &quot;wgs84_n&quot;: &quot;52.44933&quot;,
            &quot;wgs84_e&quot;: &quot;16.999683&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpKrotoszyn25315&quot;,
            &quot;station_name&quot;: &quot;Krotoszyn, ul. Floriańska 10&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpLeszKiepur&quot;,
            &quot;station_name&quot;: &quot;Leszno, ul. Kiepury&quot;,
            &quot;wgs84_n&quot;: &quot;51.84046&quot;,
            &quot;wgs84_e&quot;: &quot;16.605043&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpLeszno411000&quot;,
            &quot;station_name&quot;: &quot;Leszno, ul Paderewskiego 8&quot;,
            &quot;wgs84_n&quot;: &quot;51.84778&quot;,
            &quot;wgs84_e&quot;: &quot;16.574722&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpLeszno41501&quot;,
            &quot;station_name&quot;: &quot;Leszno, ul. Kr&oacute;tka 5&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpLesznoOkrezna&quot;,
            &quot;station_name&quot;: &quot;Leszno, ul. Okrężna&quot;,
            &quot;wgs84_n&quot;: &quot;51.492653&quot;,
            &quot;wgs84_e&quot;: &quot;16.345728&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpLubon63217&quot;,
            &quot;station_name&quot;: &quot;Luboń, ul. Powstańc&oacute;w Wlkp 42&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpNoTomSzpit&quot;,
            &quot;station_name&quot;: &quot;NowyTomysl, ul. Sienkiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;52.316727&quot;,
            &quot;wgs84_e&quot;: &quot;16.141903&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpNoweSkalmierzyce&quot;,
            &quot;station_name&quot;: &quot;Nowe Skalmierzyce, ul. Ok&oacute;lna 8&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpNTomysl63700&quot;,
            &quot;station_name&quot;: &quot;Nowy Tomyśl, ul. Poznańska 30&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpOborniki63&quot;,
            &quot;station_name&quot;: &quot;Oborniki&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpOdolanow&quot;,
            &quot;station_name&quot;: &quot;Odolan&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpOpatowek&quot;,
            &quot;station_name&quot;: &quot;Opat&oacute;wek&quot;,
            &quot;wgs84_n&quot;: &quot;51.44252&quot;,
            &quot;wgs84_e&quot;: &quot;18.125622&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpOstrowWlkp.25103&quot;,
            &quot;station_name&quot;: &quot;Ostr&oacute;w Wlkp.,ul. Rowińskiego 3&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpOstWieWyso&quot;,
            &quot;station_name&quot;: &quot;Ostrow Wlkp., ul. Wysocka&quot;,
            &quot;wgs84_n&quot;: &quot;51.637573&quot;,
            &quot;wgs84_e&quot;: &quot;17.823156&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPiaskiKrzy&quot;,
            &quot;station_name&quot;: &quot;Piaski-Krzyzowka&quot;,
            &quot;wgs84_n&quot;: &quot;52.50139&quot;,
            &quot;wgs84_e&quot;: &quot;17.773464&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPila57192&quot;,
            &quot;station_name&quot;: &quot;Piła, ul. Okrzei 8&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPilaKusoci&quot;,
            &quot;station_name&quot;: &quot;Pila, ul. Kusocinkiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.154408&quot;,
            &quot;wgs84_e&quot;: &quot;16.759571&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPleszAlMic&quot;,
            &quot;station_name&quot;: &quot;Pleszew, Al. Mickiewicza&quot;,
            &quot;wgs84_n&quot;: &quot;51.884922&quot;,
            &quot;wgs84_e&quot;: &quot;17.791105&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznan63003&quot;,
            &quot;station_name&quot;: &quot;Poznań, ul. Rycerska 10&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznan63043&quot;,
            &quot;station_name&quot;: &quot;Poznań, ul. Polna 33&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznan63047&quot;,
            &quot;station_name&quot;: &quot;Poznań, os. Armii Krajowej 100&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznan63097&quot;,
            &quot;station_name&quot;: &quot;Poznań, ul. Kościuszki 118&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznan63099&quot;,
            &quot;station_name&quot;: &quot;Poznan, ul. Słowiańska 78&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznan63117&quot;,
            &quot;station_name&quot;: &quot;Poznań, ul. Kościuszki 92/98&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznan63123&quot;,
            &quot;station_name&quot;: &quot;Poznan, ul. Chłapowskiego 12&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznanPM10szpital&quot;,
            &quot;station_name&quot;: &quot;Poznan, ul. 28czerwca1956&quot;,
            &quot;wgs84_n&quot;: &quot;52.389442&quot;,
            &quot;wgs84_e&quot;: &quot;16.920834&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznChwial&quot;,
            &quot;station_name&quot;: &quot;Poznan, ul. Chwialkowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.392967&quot;,
            &quot;wgs84_e&quot;: &quot;16.928429&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznDabrow&quot;,
            &quot;station_name&quot;: &quot;Poznan-Dabrowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.42032&quot;,
            &quot;wgs84_e&quot;: &quot;16.877289&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznPolank&quot;,
            &quot;station_name&quot;: &quot;Poznan-Polanka&quot;,
            &quot;wgs84_n&quot;: &quot;52.398174&quot;,
            &quot;wgs84_e&quot;: &quot;16.959518&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznRatajeMOB&quot;,
            &quot;station_name&quot;: &quot;Poznań - RatajeMOB&quot;,
            &quot;wgs84_n&quot;: &quot;52.391727&quot;,
            &quot;wgs84_e&quot;: &quot;16.998577&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpPoznSzyman&quot;,
            &quot;station_name&quot;: &quot;Poznan, ul. Szymanowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;52.45919&quot;,
            &quot;wgs84_e&quot;: &quot;16.9062&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpRawicz41303&quot;,
            &quot;station_name&quot;: &quot;Rawicz, Wały Dąbrowskiego 2&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpSwarzedz&quot;,
            &quot;station_name&quot;: &quot;Swarzędz, ul. Mielżyńskiego 1&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpSwarzedz63224&quot;,
            &quot;station_name&quot;: &quot;Swarzędz, ul. A.Mickiewicza 1&quot;,
            &quot;wgs84_n&quot;: &quot;52.244133&quot;,
            &quot;wgs84_e&quot;: &quot;17.044071&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpSzamotuly63602&quot;,
            &quot;station_name&quot;: &quot;Szamotuły, ul. Dworcowa 28&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpTarPodZach&quot;,
            &quot;station_name&quot;: &quot;TarnowoPodgorne, ul. Zachodnia&quot;,
            &quot;wgs84_n&quot;: &quot;52.467407&quot;,
            &quot;wgs84_e&quot;: &quot;16.645903&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpTurek31046&quot;,
            &quot;station_name&quot;: &quot;Turek, ul. Uniejowska 1a&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpWagrowiec57203&quot;,
            &quot;station_name&quot;: &quot;Wągrowiec, ul. Kr&oacute;tka 4&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpWagrowLipo&quot;,
            &quot;station_name&quot;: &quot;Wagrowiec, ul. Lipowa&quot;,
            &quot;wgs84_n&quot;: &quot;52.81554&quot;,
            &quot;wgs84_e&quot;: &quot;17.208061&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpWKP003&quot;,
            &quot;station_name&quot;: &quot;WKPMscigniew&quot;,
            &quot;wgs84_n&quot;: &quot;51.894722&quot;,
            &quot;wgs84_e&quot;: &quot;16.296944&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpWKP008&quot;,
            &quot;station_name&quot;: &quot;WKPKalisz-Nowy Swiat&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpWKP009&quot;,
            &quot;station_name&quot;: &quot;WKPPiotrkowice09&quot;,
            &quot;wgs84_n&quot;: &quot;52.353806&quot;,
            &quot;wgs84_e&quot;: &quot;18.345575&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpWKP010&quot;,
            &quot;station_name&quot;: &quot;WpWKPAdam&oacute;w10&quot;,
            &quot;wgs84_n&quot;: &quot;52.15385&quot;,
            &quot;wgs84_e&quot;: &quot;18.362574&quot;
        },
        {
            &quot;station_code&quot;: &quot;WpWrzesnia63346&quot;,
            &quot;station_name&quot;: &quot;Września, ul. Legii Wrzesińskiej 22&quot;,
            &quot;wgs84_n&quot;: &quot;-999&quot;,
            &quot;wgs84_e&quot;: &quot;-999&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpGolGoleniowWSSE&quot;,
            &quot;station_name&quot;: &quot;Goleni&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;53.5635&quot;,
            &quot;wgs84_e&quot;: &quot;14.833255&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpGryfGryfinoDO&quot;,
            &quot;station_name&quot;: &quot;Gryfino&quot;,
            &quot;wgs84_n&quot;: &quot;53.248333&quot;,
            &quot;wgs84_e&quot;: &quot;14.493611&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpGryficeWSSE&quot;,
            &quot;station_name&quot;: &quot;Gryfice&quot;,
            &quot;wgs84_n&quot;: &quot;53.91257&quot;,
            &quot;wgs84_e&quot;: &quot;15.1929&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpGryfinoWSSE&quot;,
            &quot;station_name&quot;: &quot;Gryfino_Flisacza&quot;,
            &quot;wgs84_n&quot;: &quot;53.261894&quot;,
            &quot;wgs84_e&quot;: &quot;14.493203&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpGryfMarwiceDO&quot;,
            &quot;station_name&quot;: &quot;Marwice&quot;,
            &quot;wgs84_n&quot;: &quot;53.165&quot;,
            &quot;wgs84_e&quot;: &quot;14.413889&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpGryfStokiDO&quot;,
            &quot;station_name&quot;: &quot;Stoki&quot;,
            &quot;wgs84_n&quot;: &quot;52.946945&quot;,
            &quot;wgs84_e&quot;: &quot;14.342222&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKamKamienPWSSE&quot;,
            &quot;station_name&quot;: &quot;Kamień Pomorski&quot;,
            &quot;wgs84_n&quot;: &quot;53.96189&quot;,
            &quot;wgs84_e&quot;: &quot;14.77514&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKolKolobrzegWSSE&quot;,
            &quot;station_name&quot;: &quot;KołobrzegWSSE&quot;,
            &quot;wgs84_n&quot;: &quot;54.1833&quot;,
            &quot;wgs84_e&quot;: &quot;15.568399&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKolobrzegWSSE_1&quot;,
            &quot;station_name&quot;: &quot;KołobrzegWSSE_1&quot;,
            &quot;wgs84_n&quot;: &quot;54.18486&quot;,
            &quot;wgs84_e&quot;: &quot;15.562999&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKolobrzegWSSE_2&quot;,
            &quot;station_name&quot;: &quot;KołobrzegWar&quot;,
            &quot;wgs84_n&quot;: &quot;54.180103&quot;,
            &quot;wgs84_e&quot;: &quot;15.572321&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKolZolkiew&quot;,
            &quot;station_name&quot;: &quot;Kołobrzeg_Ż&oacute;łkiewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;54.179325&quot;,
            &quot;wgs84_e&quot;: &quot;15.596342&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKoszalinWSSE&quot;,
            &quot;station_name&quot;: &quot;Koszalin_Żwirowa&quot;,
            &quot;wgs84_n&quot;: &quot;54.190258&quot;,
            &quot;wgs84_e&quot;: &quot;16.196066&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKoszArKraj&quot;,
            &quot;station_name&quot;: &quot;Koszalin_ArmiiKrajowej&quot;,
            &quot;wgs84_n&quot;: &quot;54.193985&quot;,
            &quot;wgs84_e&quot;: &quot;16.172544&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKoszChopin&quot;,
            &quot;station_name&quot;: &quot;Koszalin_Chopina&quot;,
            &quot;wgs84_n&quot;: &quot;54.194115&quot;,
            &quot;wgs84_e&quot;: &quot;16.211672&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKoszSpasow&quot;,
            &quot;station_name&quot;: &quot;Koszalin_Spasowskiego&quot;,
            &quot;wgs84_n&quot;: &quot;54.20715&quot;,
            &quot;wgs84_e&quot;: &quot;16.193235&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKoszWSSEMors&quot;,
            &quot;station_name&quot;: &quot;KoszalinMorska&quot;,
            &quot;wgs84_n&quot;: &quot;54.199585&quot;,
            &quot;wgs84_e&quot;: &quot;16.162706&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpKoszWSSEMtCas&quot;,
            &quot;station_name&quot;: &quot;KoszalinMonteCasino&quot;,
            &quot;wgs84_n&quot;: &quot;54.19719&quot;,
            &quot;wgs84_e&quot;: &quot;16.188194&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpMysDebnoWSSE&quot;,
            &quot;station_name&quot;: &quot;Dębno&quot;,
            &quot;wgs84_n&quot;: &quot;52.740654&quot;,
            &quot;wgs84_e&quot;: &quot;14.713149&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpMyslMWSSE&quot;,
            &quot;station_name&quot;: &quot;Myślib&oacute;rz_Rynek&quot;,
            &quot;wgs84_n&quot;: &quot;52.924614&quot;,
            &quot;wgs84_e&quot;: &quot;14.865751&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpMyslZaBram&quot;,
            &quot;station_name&quot;: &quot;Myślib&oacute;rz_ZaBramką&quot;,
            &quot;wgs84_n&quot;: &quot;52.926285&quot;,
            &quot;wgs84_e&quot;: &quot;14.862809&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpMysMysliborzWSSE&quot;,
            &quot;station_name&quot;: &quot;Myślib&oacute;rz&quot;,
            &quot;wgs84_n&quot;: &quot;52.916004&quot;,
            &quot;wgs84_e&quot;: &quot;14.857194&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpPolczSolanMOB&quot;,
            &quot;station_name&quot;: &quot;Uzdrowisko_Połczyn-Zdr&oacute;j&quot;,
            &quot;wgs84_n&quot;: &quot;53.755653&quot;,
            &quot;wgs84_e&quot;: &quot;16.089277&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpPolczynZdrWSSE&quot;,
            &quot;station_name&quot;: &quot;Połczyn&quot;,
            &quot;wgs84_n&quot;: &quot;53.766388&quot;,
            &quot;wgs84_e&quot;: &quot;16.0975&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpPolPoliceWSSE&quot;,
            &quot;station_name&quot;: &quot;Police&quot;,
            &quot;wgs84_n&quot;: &quot;53.54688&quot;,
            &quot;wgs84_e&quot;: &quot;14.561364&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpStarLipnikDO&quot;,
            &quot;station_name&quot;: &quot;Lipnik&quot;,
            &quot;wgs84_n&quot;: &quot;53.341667&quot;,
            &quot;wgs84_e&quot;: &quot;14.963889&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpStarStargardWSSE&quot;,
            &quot;station_name&quot;: &quot;Stargard Szczeciński&quot;,
            &quot;wgs84_n&quot;: &quot;53.337414&quot;,
            &quot;wgs84_e&quot;: &quot;15.039209&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSwinoujscieWSSE&quot;,
            &quot;station_name&quot;: &quot;Świnoujście&quot;,
            &quot;wgs84_n&quot;: &quot;53.921852&quot;,
            &quot;wgs84_e&quot;: &quot;14.23995&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzcStorkowoDO&quot;,
            &quot;station_name&quot;: &quot;Storkowo&quot;,
            &quot;wgs84_n&quot;: &quot;53.77972&quot;,
            &quot;wgs84_e&quot;: &quot;16.497223&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzcSzczecinek009&quot;,
            &quot;station_name&quot;: &quot;Szczecinek_Artyleryjska&quot;,
            &quot;wgs84_n&quot;: &quot;53.701977&quot;,
            &quot;wgs84_e&quot;: &quot;16.70707&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzcSzczecinekPSSE&quot;,
            &quot;station_name&quot;: &quot;Szczecinek_PSSE&quot;,
            &quot;wgs84_n&quot;: &quot;53.701977&quot;,
            &quot;wgs84_e&quot;: &quot;16.70607&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzcSzczecinekWSSE&quot;,
            &quot;station_name&quot;: &quot;Szczecinek&quot;,
            &quot;wgs84_n&quot;: &quot;53.700085&quot;,
            &quot;wgs84_e&quot;: &quot;16.701065&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczAndr01&quot;,
            &quot;station_name&quot;: &quot;Szczecin_Andrzejewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.380974&quot;,
            &quot;wgs84_e&quot;: &quot;14.663347&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczBudzWosMOB&quot;,
            &quot;station_name&quot;: &quot;Szczecin_Budzysza Wosia&quot;,
            &quot;wgs84_n&quot;: &quot;53.446762&quot;,
            &quot;wgs84_e&quot;: &quot;14.507294&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczec1Maj&quot;,
            &quot;station_name&quot;: &quot;Szczecinek_1Maja&quot;,
            &quot;wgs84_n&quot;: &quot;53.712112&quot;,
            &quot;wgs84_e&quot;: &quot;16.692516&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczecinDO&quot;,
            &quot;station_name&quot;: &quot;Szczecin_Ż&oacute;łkiewskiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.428814&quot;,
            &quot;wgs84_e&quot;: &quot;14.532333&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczecinLukasza&quot;,
            &quot;station_name&quot;: &quot;Szczecin_Łukasza&quot;,
            &quot;wgs84_n&quot;: &quot;53.443478&quot;,
            &quot;wgs84_e&quot;: &quot;14.552232&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczecinWSSE&quot;,
            &quot;station_name&quot;: &quot;Szczecin_WojskaPolskiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.45078&quot;,
            &quot;wgs84_e&quot;: &quot;14.514745&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczecPrze&quot;,
            &quot;station_name&quot;: &quot;Szczecinek_Przemysłowa&quot;,
            &quot;wgs84_n&quot;: &quot;53.698902&quot;,
            &quot;wgs84_e&quot;: &quot;16.704556&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczLacz04&quot;,
            &quot;station_name&quot;: &quot;Szczecin_Łączna&quot;,
            &quot;wgs84_n&quot;: &quot;53.47089&quot;,
            &quot;wgs84_e&quot;: &quot;14.55625&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczPils02&quot;,
            &quot;station_name&quot;: &quot;Szczecin_Piłsudskiego&quot;,
            &quot;wgs84_n&quot;: &quot;53.43217&quot;,
            &quot;wgs84_e&quot;: &quot;14.5539&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczWSSEEnerg&quot;,
            &quot;station_name&quot;: &quot;Energetyk&oacute;w&quot;,
            &quot;wgs84_n&quot;: &quot;53.420475&quot;,
            &quot;wgs84_e&quot;: &quot;14.561934&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpSzczWSSESped6&quot;,
            &quot;station_name&quot;: &quot;Spedytorska&quot;,
            &quot;wgs84_n&quot;: &quot;53.415043&quot;,
            &quot;wgs84_e&quot;: &quot;14.555347&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpWalWalczWSSE&quot;,
            &quot;station_name&quot;: &quot;Wałcz&quot;,
            &quot;wgs84_n&quot;: &quot;53.263668&quot;,
            &quot;wgs84_e&quot;: &quot;16.492596&quot;
        },
        {
            &quot;station_code&quot;: &quot;ZpWiduBulRyb&quot;,
            &quot;station_name&quot;: &quot;Widuchowa&quot;,
            &quot;wgs84_n&quot;: &quot;53.263687&quot;,
            &quot;wgs84_e&quot;: &quot;16.492598&quot;
        }
    ],
    &quot;message&quot;: &quot;Cords retrieved successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-station-getCords" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-station-getCords"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-station-getCords"></code></pre>
</span>
<span id="execution-error-GETapi-station-getCords" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-station-getCords"></code></pre>
</span>
<form id="form-GETapi-station-getCords" data-method="GET"
      data-path="api/station/getCords"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-station-getCords', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-station-getCords"
                    onclick="tryItOut('GETapi-station-getCords');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-station-getCords"
                    onclick="cancelTryOut('GETapi-station-getCords');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-station-getCords" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/station/getCords</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-measurements-toppolluted">show top 3 polluted locations</h2>

<p>
</p>



<span id="example-requests-GETapi-measurements-toppolluted">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/measurements/toppolluted" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/measurements/toppolluted"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-measurements-toppolluted">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 381818,
            &quot;stand_code&quot;: &quot;OpKKozBSmial-C6H6-1g&quot;,
            &quot;measurement_date&quot;: &quot;2020-08-01&quot;,
            &quot;measurement_value&quot;: &quot;153.436&quot;,
            &quot;stand&quot;: [
                {
                    &quot;id&quot;: 3050,
                    &quot;stand_code&quot;: &quot;OpKKozBSmial-C6H6-1g&quot;,
                    &quot;station_code&quot;: &quot;OpKKozBSmial&quot;,
                    &quot;indicator_code&quot;: &quot;C6H6&quot;,
                    &quot;indicator&quot;: &quot;benzen&quot;,
                    &quot;averaging_time&quot;: &quot;1-godzinny&quot;,
                    &quot;measurement_type&quot;: &quot;automatyczny&quot;,
                    &quot;zone_name&quot;: &quot;strefa opolska&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 427618,
            &quot;stand_code&quot;: &quot;OpKKozBSmial-C6H6-1g&quot;,
            &quot;measurement_date&quot;: &quot;2020-09-04&quot;,
            &quot;measurement_value&quot;: &quot;131.879&quot;,
            &quot;stand&quot;: [
                {
                    &quot;id&quot;: 3050,
                    &quot;stand_code&quot;: &quot;OpKKozBSmial-C6H6-1g&quot;,
                    &quot;station_code&quot;: &quot;OpKKozBSmial&quot;,
                    &quot;indicator_code&quot;: &quot;C6H6&quot;,
                    &quot;indicator&quot;: &quot;benzen&quot;,
                    &quot;averaging_time&quot;: &quot;1-godzinny&quot;,
                    &quot;measurement_type&quot;: &quot;automatyczny&quot;,
                    &quot;zone_name&quot;: &quot;strefa opolska&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 427674,
            &quot;stand_code&quot;: &quot;OpKKozBSmial-C6H6-1g&quot;,
            &quot;measurement_date&quot;: &quot;2020-09-04&quot;,
            &quot;measurement_value&quot;: &quot;125.957&quot;,
            &quot;stand&quot;: [
                {
                    &quot;id&quot;: 3050,
                    &quot;stand_code&quot;: &quot;OpKKozBSmial-C6H6-1g&quot;,
                    &quot;station_code&quot;: &quot;OpKKozBSmial&quot;,
                    &quot;indicator_code&quot;: &quot;C6H6&quot;,
                    &quot;indicator&quot;: &quot;benzen&quot;,
                    &quot;averaging_time&quot;: &quot;1-godzinny&quot;,
                    &quot;measurement_type&quot;: &quot;automatyczny&quot;,
                    &quot;zone_name&quot;: &quot;strefa opolska&quot;
                }
            ]
        }
    ],
    &quot;message&quot;: &quot;Station retrieved successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-measurements-toppolluted" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-measurements-toppolluted"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-measurements-toppolluted"></code></pre>
</span>
<span id="execution-error-GETapi-measurements-toppolluted" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-measurements-toppolluted"></code></pre>
</span>
<form id="form-GETapi-measurements-toppolluted" data-method="GET"
      data-path="api/measurements/toppolluted"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-measurements-toppolluted', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-measurements-toppolluted"
                    onclick="tryItOut('GETapi-measurements-toppolluted');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-measurements-toppolluted"
                    onclick="cancelTryOut('GETapi-measurements-toppolluted');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-measurements-toppolluted" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/measurements/toppolluted</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-measurements-leastpolluted">show least 3 polluted locations</h2>

<p>
</p>



<span id="example-requests-GETapi-measurements-leastpolluted">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/measurements/leastpolluted" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/measurements/leastpolluted"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-measurements-leastpolluted">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 108111,
            &quot;stand_code&quot;: &quot;MpKrakBulwar-C6H6-1g&quot;,
            &quot;measurement_date&quot;: &quot;2020-01-05&quot;,
            &quot;measurement_value&quot;: &quot;0&quot;,
            &quot;stand&quot;: [
                {
                    &quot;id&quot;: 2180,
                    &quot;stand_code&quot;: &quot;MpKrakBulwar-C6H6-1g&quot;,
                    &quot;station_code&quot;: &quot;MpKrakBulwar&quot;,
                    &quot;indicator_code&quot;: &quot;C6H6&quot;,
                    &quot;indicator&quot;: &quot;benzen&quot;,
                    &quot;averaging_time&quot;: &quot;1-godzinny&quot;,
                    &quot;measurement_type&quot;: &quot;automatyczny&quot;,
                    &quot;zone_name&quot;: &quot;Aglomeracja Krakowska&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 108248,
            &quot;stand_code&quot;: &quot;MpKrakBulwar-C6H6-1g&quot;,
            &quot;measurement_date&quot;: &quot;2020-01-05&quot;,
            &quot;measurement_value&quot;: &quot;0&quot;,
            &quot;stand&quot;: [
                {
                    &quot;id&quot;: 2180,
                    &quot;stand_code&quot;: &quot;MpKrakBulwar-C6H6-1g&quot;,
                    &quot;station_code&quot;: &quot;MpKrakBulwar&quot;,
                    &quot;indicator_code&quot;: &quot;C6H6&quot;,
                    &quot;indicator&quot;: &quot;benzen&quot;,
                    &quot;averaging_time&quot;: &quot;1-godzinny&quot;,
                    &quot;measurement_type&quot;: &quot;automatyczny&quot;,
                    &quot;zone_name&quot;: &quot;Aglomeracja Krakowska&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 108294,
            &quot;stand_code&quot;: &quot;MpKrakBulwar-C6H6-1g&quot;,
            &quot;measurement_date&quot;: &quot;2020-01-05&quot;,
            &quot;measurement_value&quot;: &quot;0&quot;,
            &quot;stand&quot;: [
                {
                    &quot;id&quot;: 2180,
                    &quot;stand_code&quot;: &quot;MpKrakBulwar-C6H6-1g&quot;,
                    &quot;station_code&quot;: &quot;MpKrakBulwar&quot;,
                    &quot;indicator_code&quot;: &quot;C6H6&quot;,
                    &quot;indicator&quot;: &quot;benzen&quot;,
                    &quot;averaging_time&quot;: &quot;1-godzinny&quot;,
                    &quot;measurement_type&quot;: &quot;automatyczny&quot;,
                    &quot;zone_name&quot;: &quot;Aglomeracja Krakowska&quot;
                }
            ]
        }
    ],
    &quot;message&quot;: &quot;Station retrieved successfully.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-measurements-leastpolluted" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-measurements-leastpolluted"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-measurements-leastpolluted"></code></pre>
</span>
<span id="execution-error-GETapi-measurements-leastpolluted" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-measurements-leastpolluted"></code></pre>
</span>
<form id="form-GETapi-measurements-leastpolluted" data-method="GET"
      data-path="api/measurements/leastpolluted"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-measurements-leastpolluted', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-measurements-leastpolluted"
                    onclick="tryItOut('GETapi-measurements-leastpolluted');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-measurements-leastpolluted"
                    onclick="cancelTryOut('GETapi-measurements-leastpolluted');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-measurements-leastpolluted" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/measurements/leastpolluted</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-measurements-archive--stand_code-">GET api/measurements/archive/{stand_code}</h2>

<p>
</p>



<span id="example-requests-GETapi-measurements-archive--stand_code-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/measurements/archive/sit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/measurements/archive/sit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-measurements-archive--stand_code-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Station not found&quot;,
    &quot;data&quot;: 404
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-measurements-archive--stand_code-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-measurements-archive--stand_code-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-measurements-archive--stand_code-"></code></pre>
</span>
<span id="execution-error-GETapi-measurements-archive--stand_code-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-measurements-archive--stand_code-"></code></pre>
</span>
<form id="form-GETapi-measurements-archive--stand_code-" data-method="GET"
      data-path="api/measurements/archive/{stand_code}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-measurements-archive--stand_code-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-measurements-archive--stand_code-"
                    onclick="tryItOut('GETapi-measurements-archive--stand_code-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-measurements-archive--stand_code-"
                    onclick="cancelTryOut('GETapi-measurements-archive--stand_code-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-measurements-archive--stand_code-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/measurements/archive/{stand_code}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>stand_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="stand_code"
               data-endpoint="GETapi-measurements-archive--stand_code-"
               value="sit"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="endpoints-GETapi-measurements-station--station_name-">show top 3 polluted locations</h2>

<p>
</p>



<span id="example-requests-GETapi-measurements-station--station_name-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/measurements/station/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/measurements/station/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-measurements-station--station_name-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Station 4 not found&quot;,
    &quot;data&quot;: 404
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-measurements-station--station_name-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-measurements-station--station_name-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-measurements-station--station_name-"></code></pre>
</span>
<span id="execution-error-GETapi-measurements-station--station_name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-measurements-station--station_name-"></code></pre>
</span>
<form id="form-GETapi-measurements-station--station_name-" data-method="GET"
      data-path="api/measurements/station/{station_name}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-measurements-station--station_name-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-measurements-station--station_name-"
                    onclick="tryItOut('GETapi-measurements-station--station_name-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-measurements-station--station_name-"
                    onclick="cancelTryOut('GETapi-measurements-station--station_name-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-measurements-station--station_name-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/measurements/station/{station_name}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>station_name</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="station_name"
               data-endpoint="GETapi-measurements-station--station_name-"
               value="4"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>

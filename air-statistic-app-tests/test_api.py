import requests


def test_get_voivodeships(supply_url):
    url = f'{supply_url}/voivodeships'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert len(resp.json()['data']) == 16, "Wrong number of voivodeships"


def test_get_stations_all(supply_url):
    url = f'{supply_url}/station'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert 'DsBialka' in resp.json()['data']['data'][0].values()


def test_get_station_single(supply_url):
    url = f'{supply_url}/station/DsBielGrot'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert 'DsBielGrot' in resp.json()['data'][0].values()


def test_get_all_station_coordinates(supply_url):
    url = f'{supply_url}/station/getCords'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert 'wgs84_e' in resp.json()['data'][0].keys()
    assert 'wgs84_n' in resp.json()['data'][0].keys()
    assert '51.197784' in resp.json()['data'][0].values()


def test_get_all_station_stands(supply_url):
    url = f'{supply_url}/station/a/DsWalbrzWyso'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert 'DsWalbrzWyso-As(PM10)-24g' in resp.json()['data'][0].values()


def test_get_station_faulty(supply_url):
    url = f'{supply_url}/station/a/ImNotExisting'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert not resp.json()['data'][0].values()


def test_post_station_adv_minimal(supply_url):
    url = f'{supply_url}/getStationsAdv'
    body = {"voivodeship": "DOLNOŚLĄSKIE"}
    resp = requests.post(url=url, data=body)
    resp.raise_for_status()
    assert resp.json()['data']['data']


def test_post_station_adv_cjk(supply_url):
    url = f'{supply_url}/getStationsAdv'
    body = {"voivodeship": "KUJAWSKO-POMORSKIE", 'location': 'sdf344asfasf天地方益3権sdfsdf'}
    resp = requests.post(url=url, data=body)
    resp.raise_for_status()
    assert not resp.json()['data']['data']


def test_post_station_adv_full(supply_url):
    url = f'{supply_url}/getStationsAdv'
    body = {"voivodeship": "DOLNOŚLĄSKIE", "location": "", "adress": "", "indicator": "",
            "measurement_type": "", "close_date": "2003-12-31"}
    resp = requests.post(url=url, data=body)
    resp.raise_for_status()
    assert "DsBielGrot-NO2-24g" in resp.text
    assert "DsBielGrot" in resp.text


def test_post_station_adv_faulty(supply_url):
    url = f'{supply_url}/getStationsAdv'
    body = {"voivodeship": "Krakowskie"}
    resp = requests.post(url=url, data=body)
    resp.raise_for_status()
    assert '"data": [{}]' in resp.text


def test_post_station_adv_2_minial(supply_url):
    url = f'{supply_url}/getStationsAdv2'
    body = {'voivodeship': "DOLNOŚLĄSKIE"}
    resp = requests.post(url=url, data=body)
    resp.raise_for_status()
    assert 'DsBialka' in resp.text
    assert 'DsBielGrot-SO2-24g' in resp.text


def test_post_station_adv_2_full(supply_url):
    url = f'{supply_url}/getStationsAdv2'
    body = {'station_type': 'tło', 'voivodeship': "DOLNOŚLĄSKIE",
            'location': "Wałbrzych", 'station_code': 'DsWalbrzWyso'}
    resp = requests.post(url=url, data=body)
    resp.raise_for_status()
    assert 'DsWalbrzWyso' in resp.text
    assert 'DsWalbrzWyso-As(PM10)-24g' in resp.text
    assert 'Wysockiego' in resp.text


def test_post_station_adv_wrong_body(supply_url):
    url = f'{supply_url}/getStationsAdv2'
    body = {'WrongParameter': 'I should not work'}
    resp = requests.post(url=url, data=body)
    resp.raise_for_status()
    assert '' in resp.text


def test_get_stand_single(supply_url):
    url = f'{supply_url}/stand/SlKatoKossut-As(PM10)-24g'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert '2.53, 2.53, 2.53, 2.53, 2.53, 0.5, 0.5, 0.5, 0.5, 0.5' in resp.text
    assert '2020-01-03, 2020-01-04, 2020-01-05, 2020-01-06, 2020-01-07,' in resp.text


def test_get_measurement_top(supply_url):
    url = f'{supply_url}/measurements/toppolluted'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert '"values":' in resp.text
    assert '"station_type":' in resp.text
    assert '"DsNowRudJezi"' in resp.text
    assert '"71.809"' in resp.text


def test_get_measurement_least(supply_url):
    url = f'{supply_url}/measurements/leastpolluted'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert '"values":' in resp.text
    assert '"station_type":' in resp.text
    assert '"DsOsieczow"' in resp.text
    assert '"0.027"' in resp.text


def test_get_measurement_middle(supply_url):
    url = f'{supply_url}/measurements/middlepolluted'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert '"values":' in resp.text
    assert '"station_type":' in resp.text
    assert '"DsOsieczow"' in resp.text
    assert '"2.429"' in resp.text


def test_get_measurement_archive(supply_url):
    url = f'{supply_url}/measurements/archive/MzOtwoBrzozo-As(PM10)-24g'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert '"id":24890,"stand_code":"MzOtwoBrzozo-As(PM10)-24g","measurement_date":"2020-12-31",' \
           '"measurement_value":"0.7602","stand":[{"id":2668,"stand_code":"MzOtwoBrzozo-As(PM10)-24g",' \
           '"station_code":"MzOtwoBrzozo","indicator_code":"As(PM10)","indicator":"arsen w PM10",' \
           '"averaging_time":"24-godzinny","measurement_type":"manualny","zone_name":"strefa mazowiecka"}]' in resp.text


def test_get_measurement_archive_empty(supply_url):
    url = f'{supply_url}/measurements/archive/NonExistingStation'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert '' in resp.text


def test_get_measurement_station(supply_url):
    url = f'{supply_url}/measurements/station/KpGrudSienki'
    resp = requests.get(url=url)
    resp.raise_for_status()
    assert '"id":968,"stand_code":"KpGrudSienki-As(PM10)-24g","measurement_date":"2020-01-01",' \
           '"measurement_value":"0.7799","station_code":"KpGrudSienki","indicator_code":"As(PM10)",' \
           '"indicator":"arsen w PM10","averaging_time":"24-godzinny","measurement_type":"manualny",' \
           '"zone_name":"strefa kujawsko - pomorska","voivodeship":"KUJAWSKO-POMORSKIE"}' in resp.text

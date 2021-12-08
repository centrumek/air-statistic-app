import { Component, OnInit } from '@angular/core';
import Map from 'ol/Map';
import View from 'ol/View';
import VectorLayer from 'ol/layer/Vector';
import Style from 'ol/style/Style';
import Icon from 'ol/style/Icon';
import OSM from 'ol/source/OSM';
import * as olProj from 'ol/proj';
import TileLayer from 'ol/layer/Tile';
import { Feature } from 'ol';
import Point from 'ol/geom/Point';
import VectorSource from 'ol/source/Vector';

@Component({
  selector: 'app-map',
  templateUrl: './map.component.html',
  styleUrls: ['./map.component.scss']
})
export class MapComponent implements OnInit {

  map: any;
  warsaw: any;
  krakow: any;
  vectorSource: any;
  vectorLayer: any;
  rasterLayer: any;
  constructor() { }

  ngOnInit(): void {

    this.warsaw = new Feature({
      geometry: new Point(olProj.fromLonLat([21.017532, 52.237049]))
    });
    this.warsaw.setStyle(new Style({
      image: new Icon(({
        color: '#E289F2',
        crossOrigin: 'anonymous',
        src:'assets/marker.svg',
        imgSize: [25, 25],
      }))
    }));

    this.krakow = new Feature({
      geometry: new Point(olProj.fromLonLat([19.944544, 50.049683	]))
    })

    this.krakow.setStyle(new Style({
      image: new Icon(({
        color: '#E289F2',
        crossOrigin: 'anonymous',
        src:'assets/marker.svg',
        imgSize: [25, 25],
      }))
    }));
    this.vectorSource = new VectorSource({
      features: [this.warsaw, this.krakow]
    });
    this.vectorLayer = new VectorLayer({
      source: this.vectorSource
    });

    this.initialize();
  }

  initialize() {
    this.map = new Map({
      target: 'map',
      layers: [
        new TileLayer({
          source: new OSM()
        }),
        this.vectorLayer
      ],
      view: new View({
        center: olProj.fromLonLat([21.017532, 52.237049]),
        zoom: 7
      })
    });
  }

}

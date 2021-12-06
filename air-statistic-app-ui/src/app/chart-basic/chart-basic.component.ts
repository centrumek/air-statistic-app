import { Component, EventEmitter, Output, ViewChild } from '@angular/core';

import {
  ChartComponent,
  ApexAxisChartSeries,
  ApexChart,
  ApexXAxis,
  ApexDataLabels,
  ApexStroke,
  ApexYAxis,
  ApexTitleSubtitle,
  ApexLegend
} from "ng-apexcharts";
import { StationMeasurement } from '../model/station-measurement';

export type ChartOptions = {
  series: ApexAxisChartSeries;
  chart: ApexChart;
  xaxis: ApexXAxis;
  stroke: ApexStroke;
  dataLabels: ApexDataLabels;
  yaxis: ApexYAxis;
  title: ApexTitleSubtitle;
  labels: string[];
  legend: ApexLegend;
  subtitle: ApexTitleSubtitle;
};

@Component({
  selector: 'app-chart-basic',
  templateUrl: './chart-basic.component.html',
  styleUrls: ['./chart-basic.component.scss']
})
export class ChartBasicComponent {
  @ViewChild("basic") chart?: ChartComponent;
  public chartOptions!: Partial<ChartOptions> | any;
  @Output() navigateFunction: EventEmitter<any> = new EventEmitter();

  public measurements!: StationMeasurement;

  constructor() {
    this.measurements = {
      stand_code: "",
      indicator_code: "",
      indicator: "",
      measurement_values: [],
      measurement_dates: [],
    };

    this.chartOptions = {
      chart: {
        id: "chart-basic",
        type: "area",
        height: 350,
        width: 260,
        zoom: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      stroke: {
        curve: "straight",
        width: 3,
        colors: ['#C084FC'],
      },
      grid: {
        show: false,
      },
      dataLabels: {
        enabled: false
      },
      fill: {
        colors: ["#C084FC"],
        opacity: 0.9,
        type: "gradient",
      },
      series: [
        {
          name: '',
          data: [],
        }
      ],
      tooltip: {
        enable: true,
        marker: {
          show: true,
        }
      },
      markers: {
        colors: ["#855CF8"]
      },
      title: {
        text: "",
        align: "left",
        style: {
          fontSize: '18px',
          fontWeight:  'normal',
          color: '#263238',
        }
      },
      subtitle: {
        text: "",
        align: "left",
        style: {
          fontSize: '15px',
          fontWeight:  'normal',
          color: '#607D8B',
        },
      },
      labels: [],
      xaxis: {
        show: false,
        type: "datetime",
        labels: {
          show: false,
        },
      },
      yaxis: {
        show: false,
        opposite: true
      },
      legend: {
        show: false,
      },
    };
  }

  public ngOnInit(): void {
    this.chartOptions = {
      chart: {
        id: "chart-basic",
        type: "area",
        height: 350,
        width: 260,
        zoom: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      colors: ['#C084FC'],
      stroke: {
        curve: "straight",
        width: 3,
        colors: ['#C084FC'],
      },
      grid: {
        show: false,
      },
      dataLabels: {
        enabled: false
      },
      fill: {
        colors: ["#C084FC"],
        opacity: 0.9,
        type: "gradient",
      },
      series: [
        {
          name: this.measurements.indicator_code,
          data: this.measurements.measurement_values,
        }
      ],
      tooltip: {
        enable: true,
        marker: {
          show: true,
        }
      },
      markers: {
        colors: ["#855CF8"]
      },
      title: {
        text: this.measurements.indicator_code,
        align: "left",
        style: {
          fontSize: '18px',
          fontWeight:  'normal',
          color: '#263238',
        }
      },
      subtitle: {
        text: this.measurements.indicator,
        align: "left",
        style: {
          fontSize: '15px',
          fontWeight:  'normal',
          color: '#607D8B',
        },
      },
      labels: this.measurements.measurement_dates,
      xaxis: {
        show: false,
        type: "datetime",
        labels: {
          show: false,
        },
      },
      yaxis: {
        show: false,
        opposite: true
      },
      legend: {
        show: false,
      },
    };
  }

  public navigateToDetailPage = () => {
    this.navigateFunction.next(this.measurements.stand_code);
  }
}

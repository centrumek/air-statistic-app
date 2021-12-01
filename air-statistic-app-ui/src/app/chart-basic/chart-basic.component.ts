import { Component, ViewChild } from '@angular/core';

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

import { series } from "./data";

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
  @ViewChild("chart") chart?: ChartComponent;
  public chartOptions!: Partial<ChartOptions> | any;

  constructor() {
    this.chartOptions = {
      chart: {
        id: "chart-basic",
        type: "area",
        height: 350,
        width: 260,
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
          name: "STOCK ABC",
          data: series.monthDataSeries1.prices,
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
        text: "Pył zawieszony PM10",
        align: "left",
        style: {
          fontSize: '18px',
          fontWeight:  'normal',
          color: '#263238',
        }
      },
      subtitle: {
        text: "Mierzone zanieczyszczenie",
        align: "left",
        style: {
          fontSize: '15px',
          fontWeight:  'normal',
          color: '#607D8B',
        },
      },
      labels: series.monthDataSeries1.dates,
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

}

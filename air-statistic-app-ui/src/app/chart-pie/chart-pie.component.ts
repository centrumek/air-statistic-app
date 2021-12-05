import { Component, ViewChild } from "@angular/core";
import { ChartComponent } from "ng-apexcharts";

import {
  ApexNonAxisChartSeries,
  ApexResponsive,
  ApexChart
} from "ng-apexcharts";

import { series } from "./data";

export type ChartOptions = {
  series: ApexNonAxisChartSeries;
  chart: ApexChart;
  responsive: ApexResponsive[];
  labels: any;
};

@Component({
  selector: 'app-chart-pie',
  templateUrl: './chart-pie.component.html',
  styleUrls: ['./chart-pie.component.scss']
})
export class ChartPieComponent {
  @ViewChild("chart") chart?: ChartComponent;
  public chartOptions!: Partial<ChartOptions> | any;

  constructor() { 
    this.chartOptions = {
      series: series.measurement_values_light ,
      chart: {
        width: 260,
        height: 450,
        type: "pie"
      },
      colors: ['#855CF8', '#E289F2', '#ACB9FF', '#C084FC', '#6643A4'],
      title: {
        text: "Nikiel w PM10",
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
      labels: series.measurement_dates_light,
      legend: {
        position: "bottom"
      },
    };
  }

}

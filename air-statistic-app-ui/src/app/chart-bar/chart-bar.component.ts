import { Component, ViewChild } from "@angular/core";
import {
  ApexAxisChartSeries,
  ApexChart,
  ChartComponent,
  ApexDataLabels,
  ApexXAxis,
  ApexPlotOptions,
  ApexStroke
} from "ng-apexcharts";

import { series } from "./data";

export type ChartOptions = {
  series: ApexAxisChartSeries;
  chart: ApexChart;
  dataLabels: ApexDataLabels;
  plotOptions: ApexPlotOptions;
  xaxis: ApexXAxis;
  stroke: ApexStroke;
};

@Component({
  selector: 'app-chart-bar',
  templateUrl: './chart-bar.component.html',
  styleUrls: ['./chart-bar.component.scss']
})
export class ChartBarComponent {
  @ViewChild("chart") chart?: ChartComponent;
  public chartOptions!: Partial<ChartOptions> | any;

  constructor() { 
    this.chartOptions = {
      series: [
        {
          name: series.parameter_name,
          data: series.measurement_values_light
        },
      ],
      chart: {
        type: "bar",
        height: 380,
        width: 260,
        toolbar: {
          show: false,
        },
      },
      colors: ['#C084FC'],
      grid: {
        show: false,
      },
      plotOptions: {
        bar: {
          horizontal: true,
          dataLabels: {
            position: "top"
          }
        }
      },
      dataLabels: {
        enabled: true,
        offsetX: -6,
        style: {
          fontSize: "12px",
          colors: ["#fff"]
        }
      },
      stroke: {
        show: true,
        width: 1,
        colors: ["#fff"]
      },
      xaxis: {
        labels: {
          show: false,
        },
        categories: series.measurement_dates_light
      },
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
    };
  }

}

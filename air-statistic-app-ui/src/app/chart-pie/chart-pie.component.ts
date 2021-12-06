import { Component, Output, ViewChild, EventEmitter } from "@angular/core";
import { ChartComponent } from "ng-apexcharts";

import {
  ApexNonAxisChartSeries,
  ApexResponsive,
  ApexChart
} from "ng-apexcharts";
import { StationMeasurement } from "../model/station-measurement";

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
  @ViewChild("pie") chart?: ChartComponent;
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
      series: [],
      chart: {
        width: 260,
        height: 450,
        type: "pie"
      },
      colors: ['#855CF8', '#E289F2', '#ACB9FF', '#C084FC', '#6643A4'],
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
      legend: {
        position: "bottom"
      },
    };
  }

  public ngOnInit(): void {
    this.chartOptions = {
      series: this.measurements.measurement_values,
      chart: {
        width: 260,
        height: 450,
        type: "pie"
      },
      colors: ['#855CF8', '#E289F2', '#ACB9FF', '#C084FC', '#6643A4'],
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
      legend: {
        position: "bottom"
      },
    };
  }

  public navigateToDetailPage = () => {
    this.navigateFunction.next(this.measurements.stand_code);
  }
}

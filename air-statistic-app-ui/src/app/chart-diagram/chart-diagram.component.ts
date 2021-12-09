import { Component, Input, ViewChild } from "@angular/core";
import { StandMeasurement } from '../model/stand-measurements';
import { ChartComponent } from "ng-apexcharts";
import {
  ApexAxisChartSeries,
  ApexChart,
  ApexTitleSubtitle,
  ApexDataLabels,
  ApexFill,
  ApexMarkers,
  ApexYAxis,
  ApexXAxis,
  ApexTooltip
} from "ng-apexcharts";

export type ChartOptions = {
  series: ApexAxisChartSeries;
   chart: ApexChart;
   dataLabels: ApexDataLabels;
   markers: ApexMarkers;
   title: ApexTitleSubtitle;
   fill: ApexFill;
   yaxis: ApexYAxis;
   xaxis: ApexXAxis;
   tooltip: ApexTooltip;
};

@Component({
  selector: 'app-chart-diagram',
  templateUrl: './chart-diagram.component.html',
  styleUrls: ['./chart-diagram.component.scss']
})
export class ChartDiagramComponent {
  @ViewChild("chartdiagram") chart?: ChartComponent;
  public chartOptions!: Partial<ChartOptions> | any;
  public chartOptions2!: Partial<ChartOptions> | any;
  public measurements!: StandMeasurement | any;

  @Input("measurements")
  public set setMeasurement(value: StandMeasurement) {
    this.measurements = value;
    if(this.measurements && this.measurements.measurement_values) {
      this.updateChart();
    }
  }

  constructor() {
    this.chartOptions = {
      series: [],
      chart: {
        width: 260,
        height: 450,
        type: "area"
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
      tooltip: {
        enabled: true,
      },
      labels: [],
      legend: {
        position: "bottom"
      },
    };
  }

  public updateChart(): void {
    this.chartOptions = {
      series: [{
        name: this.measurements.indicator_code,
        data: this.measurements.measurement_values,
      }],
      chart: {
        height: 500,
        width: '100%',
        type: "area"
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
      dataLabels: {
        enabled: false,
      },
      tooltip: {
        enabled: true,
      },
      xaxis: {
        categories: this.measurements.measurement_dates,
        labels: {
          show: true,
        },
      },
      legend: {
        position: "bottom"
      },
    }; 
  }
}

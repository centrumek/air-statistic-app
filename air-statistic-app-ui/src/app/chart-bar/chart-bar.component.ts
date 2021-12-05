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
import { StationMeasurementDto } from "../model/api/station-measurement.dto";

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
  @ViewChild("bar") chart?: ChartComponent;
  public chartOptions!: Partial<ChartOptions> | any;
  public measurements!: StationMeasurementDto;

  constructor() { 
    this.measurements = {
      stand_code: "",
      indicator_code: "",
      indicator: "",
      measurement_values: [],
      measurement_dates: [],
    };

    this.chartOptions = {
      series: [
        {
          name: "",
          data: []
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
        categories: []
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
    };
  }

  public ngOnInit(): void {
    this.chartOptions = {
      series: [
        {
          name: this.measurements.indicator,
          data: this.measurements.measurement_values
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
        categories: this.measurements.measurement_dates
      },
      yaxis: {
        labels: {
          show: false,
        }
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
    };
  }

}

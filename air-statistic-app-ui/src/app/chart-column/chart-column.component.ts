import { Component, ViewChild } from "@angular/core";
import {
  ApexAxisChartSeries,
  ApexChart,
  ChartComponent,
  ApexDataLabels,
  ApexPlotOptions,
  ApexYAxis,
  ApexTitleSubtitle,
  ApexXAxis,
  ApexFill
} from "ng-apexcharts";

import { series } from "./data";

export type ChartOptions = {
  series: ApexAxisChartSeries;
  chart: ApexChart;
  dataLabels: ApexDataLabels;
  plotOptions: ApexPlotOptions;
  yaxis: ApexYAxis;
  xaxis: ApexXAxis;
  fill: ApexFill;
  title: ApexTitleSubtitle;
};

@Component({
  selector: 'app-chart-column',
  templateUrl: './chart-column.component.html',
  styleUrls: ['./chart-column.component.scss']
})
export class ChartColumnComponent {
  @ViewChild("chart") chart?: ChartComponent;
  public chartOptions!: Partial<ChartOptions> | any;

  constructor() { 
    this.chartOptions = {
      series: [
        {
          name: series.parameter_name,
          data: series.measurement_values_light
        }
      ],
      grid: {
        show: false,
        xaxis: {
          lines: {
            show: false,
          },
        },
        yaxis: {
          lines: {
            show: false,
          },
        },
      },
      chart: {
        height: 350,
        width: 260,
        type: "bar",
        toolbar: {
          show: false,
        },
      },
      plotOptions: {
        bar: {
          dataLabels: {
            position: "top" // top, center, bottom
          }
        }
      },
      labels: series.measurement_dates_light,
      dataLabels: {
        enabled: true,
        formatter: function(val: any) {
          return val + "%";
        },
        offsetY: -20,
        style: {
          fontSize: "12px",
          colors: ["#304758"]
        }
      },

      xaxis: {
        labels: {
          show: false,
        },
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        crosshairs: {
          fill: {
            type: "gradient",
            gradient: {
              colorFrom: "#C084FC",
              colorTo: "#C084FC",
              stops: [0, 100],
              opacityFrom: 0.4,
              opacityTo: 0.5
            }
          }
        },
        tooltip: {
          enabled: true,
          offsetY: -35
        }
      },
      fill: {
        colors: ["#C084FC"],
        type: "gradient",
        gradient: {
          shade: "light",
          type: "vertical",
          shadeIntensity: 0.25,
          gradientToColors: undefined,
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [50, 0, 100, 100]
        }
      },
      yaxis: {
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          show: false,
          formatter: function(val: any) {
            return val + "%";
          }
        }
      },
      title: {
        text: "Nikiel w PM10",
        align: "left",
        style: {
          fontSize: '18px',
          fontWeight:  'normal',
          color: '#263238',
        }
      }
    };
  }


}

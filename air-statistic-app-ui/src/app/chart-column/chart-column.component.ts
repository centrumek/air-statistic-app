import { Component, Output, ViewChild, EventEmitter } from "@angular/core";
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
import { StationMeasurement } from "../model/station-measurement";

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
  @ViewChild("column") chart?: ChartComponent;
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
      series: [
        {
          name: "",
          data: []
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
      labels: [],
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
        text: this.measurements.indicator_code,
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
          name: this.measurements.indicator_code,
          data: this.measurements.measurement_values
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
      labels: this.measurements.measurement_dates,
      dataLabels: {
        enabled: true,
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
      colors: ['#C084FC'],
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

  public navigateToDetailPage = () => {
    this.navigateFunction.next(this.measurements.stand_code);
  }

}

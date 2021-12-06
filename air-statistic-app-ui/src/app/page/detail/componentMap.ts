import { ChartBarComponent } from "src/app/chart-bar/chart-bar.component";
import { ChartBasicComponent } from "src/app/chart-basic/chart-basic.component";
import { ChartColumnComponent } from "src/app/chart-column/chart-column.component";
import { ChartPieComponent } from "src/app/chart-pie/chart-pie.component";

export const componentMap: any = {
  bar: ChartBarComponent ,
  basic: ChartBasicComponent ,
  column: ChartColumnComponent,
  pie: ChartPieComponent,
};

export const componentTypes = [
  'bar', 'basic', 'column', 'pie',
];
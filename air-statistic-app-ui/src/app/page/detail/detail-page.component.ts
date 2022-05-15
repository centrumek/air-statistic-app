import { Component, ComponentFactoryResolver, EventEmitter, OnDestroy, OnInit, ViewChild, ViewContainerRef } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { DetailPageService } from './detail-page.service';
import { takeUntil } from 'rxjs/operators';
import { StationMeasurement } from '../../model/station-measurement';
import { componentMap, componentTypes } from './componentMap';
import { ApiService } from '../../service/api.service';
import { StationDto } from '../../model/api/station.dto';

@Component({
  selector: 'app-detail-page',
  templateUrl: './detail-page.component.html',
  styleUrls: ['./detail-page.component.scss']
})
export class DetailPageComponent implements OnInit, OnDestroy {

  @ViewChild('chartContainer', { read: ViewContainerRef, static: true })
  chartContainer?: ViewContainerRef;


  private unsubscribe = new EventEmitter<boolean>();
  private stationCode: string;
  private measurements: StationMeasurement[] = [];
  private componentList: any[] = [];

  public loaded = false;
  public noData = false;

  constructor(private router: Router,
              private route: ActivatedRoute,
              private detailPageService: DetailPageService,
              private factoryResolver: ComponentFactoryResolver) {
    this.stationCode = this.route.snapshot.params['stationCode'];
  }

  public ngOnInit(): void {


    this.detailPageService.getMeasurements(this.stationCode)
      .pipe(takeUntil(this.unsubscribe))
      .subscribe(data => {
        this.measurements = data.map(chart => {
          return {
            stand_code: chart.stand_code,
            indicator_code: chart.indicator_code,
            indicator: chart.indicator,
            measurement_values: chart.measurement_values.split(',').map(Number),
            measurement_dates: chart.measurement_dates.split(','),
          }
        })
        this.loadChartList();
        this.loaded = true;
      }, error => {
        this.loaded = true;
        this.noData = true;
        console.log(error);
      });
  }

  public navigateToDiagramDetailPage(parametr: string): void {
    this.router.navigate(['diagram', parametr], {relativeTo: this.route});
  }

  public navigateToTableDetailPage(parametr: string): void {
    this.router.navigate(['table', parametr], {relativeTo: this.route});
  }

  private createComponent(componentClass: any) {
    const componentFactory = this.factoryResolver.resolveComponentFactory(componentClass);
    return this.chartContainer?.createComponent(componentFactory);
  }

  private loadChartList() {
    let chartsIndex = 0;
    const chartsLengthOptions = componentTypes.length;
    this.measurements.forEach((chart, index) => {
      if (chartsIndex === chartsLengthOptions ) chartsIndex = 0;
      const component = this.createComponent(componentMap[componentTypes[chartsIndex]]);
      chartsIndex++;

      (component?.instance as any).measurements = chart;
      (component?.instance as any).navigateFunction.pipe(takeUntil(this.unsubscribe)).subscribe((parametr: string) => this.navigateToDiagramDetailPage(parametr));

      component?.changeDetectorRef.detectChanges();
      this.componentList[index] = component;
    });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
    this.detailPageService.resetMeasurements();
  }
}

import { Component, ComponentFactoryResolver, EventEmitter, OnDestroy, OnInit, ViewChild, ViewContainerRef } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { DetailPageService } from './detail-page.service';
import { StationMeasurementDto } from '../../model/api/station-measurement.dto';
import { takeUntil } from 'rxjs/operators';
import { componentMap, componentTypes } from './componentMap';

import { chartData } from "./dataMockups";

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
  private measurements: StationMeasurementDto[] = [];
  private componentList: any[] = [];

  constructor(private router: Router,
              private route: ActivatedRoute,
              private detailPageService: DetailPageService,
              private factoryResolver: ComponentFactoryResolver) {
    this.stationCode = this.route.snapshot.params['stationCode'];
  }

  public ngOnInit(): void {
    // this.detailPageService.getMeasurements(this.stationCode)
    //   .pipe(takeUntil(this.unsubscribe))
    //   .subscribe(data => {
    //     this.measurements = data;
    //     console.log(data)
    //   });
    this.measurements = chartData;
  }

  public ngAfterViewInit() {
    this.loadChartList();
  }

  public navigateToDiagramDetailPage(): void {
    this.router.navigate(['diagram'], {relativeTo: this.route});
  }

  public navigateToTableDetailPage(): void {
    this.router.navigate(['table'], {relativeTo: this.route});
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

      component?.changeDetectorRef.detectChanges();
      this.componentList[index] = component;
    });
  }

  public ngOnDestroy(): void {
    this.unsubscribe.emit(true);
  }
}

import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EnterosComponent } from './enteros.component';

describe('EnterosComponent', () => {
  let component: EnterosComponent;
  let fixture: ComponentFixture<EnterosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EnterosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(EnterosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-enteros',
  templateUrl: './enteros.component.html',
  styleUrls: ['./enteros.component.scss']
})
export class EnterosComponent{

  enteros :number[] =[];

  
  constructor() {
    
   
    for (let i = 1; i <= 100; i++){

      this.enteros[this.enteros.length] = i;

    }

  }
  

}

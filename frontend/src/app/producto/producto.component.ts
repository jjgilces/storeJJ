import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/service/api.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-producto',
  templateUrl: './producto.component.html',
  styleUrls: ['./producto.component.css']
})
export class ProductoComponent implements OnInit {
  items:any
  constructor(private api : ApiService,
    private router:Router) { 
      let url = this.router.url.split('/')
      let id =url[url.length-1]

      this.api.getOneProduct(id).subscribe(respuesta => {
        this.items = respuesta
      })
    }

  ngOnInit(): void {
  }

}

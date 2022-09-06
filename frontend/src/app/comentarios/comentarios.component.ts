import { Component, OnInit } from '@angular/core';
import { ProductsComponent } from '../products/products.component';
import { ApiService } from 'src/app/service/api.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-comentarios',
  templateUrl: './comentarios.component.html',
  styleUrls: ['./comentarios.component.css']
})
export class ComentariosComponent implements OnInit {
  public comentarios:any
  public total:any = 0
  public rating:any = 0
  titulo:string =""

  constructor(private api : ApiService, private router:Router) { }

  ngOnInit(): void {
    let url = this.router.url.split('/')
    let id =url[url.length-1]

    this.api.getComent()
    .subscribe(res=>{
      this.comentarios = res
      .filter((a:any)=>{
        if(a.id_producto == id){
          this.total++
          return a;
        }
      });

      this.total = this.comentarios.length 
      for (const coment of res) {
        this.rating += coment.calificacion
      }
      if (this.rating>0) {
        this.rating /= this.total
      }
      
    });    

   
  }

  guardar(){
    
  }

}

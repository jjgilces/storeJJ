import { Component, OnInit } from '@angular/core';
import { ProductsComponent } from '../products/products.component';
import { ApiService } from 'src/app/service/api.service';

@Component({
  selector: 'app-comentarios',
  templateUrl: './comentarios.component.html',
  styleUrls: ['./comentarios.component.css']
})
export class ComentariosComponent implements OnInit {
  public comentarios:any
  public filtradosComentarios:any
  public total:any = 0
  public rating:any = 0
  titulo:string =""

  constructor(private api : ApiService) { }

  ngOnInit(): void {
    this.api.getComent()
    .subscribe(res=>{
      this.comentarios = res;
      this.total = this.comentarios.length 
      for (const coment of res) {
        this.rating += coment.calificacion
      }
      this.rating /= this.total
    });

    this.filtradosComentarios = this.comentarios
    .filter((a:any)=>{
      if(a.id_producto == ProductsComponent.selected){
        this.total++
        return a;
      }
    })
  }

  guardar(){
    
  }

}

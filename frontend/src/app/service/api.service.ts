import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import {map} from 'rxjs/operators';
@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private http : HttpClient) { }

  getProduct(){
    return this.http.get<any>("http://127.0.0.1:8000/api/productos")
    .pipe(map((res:any)=>{
      return res;
    }))
  }

  getOneProduct(producto:any){
    return this.http.get<any>("http://127.0.0.1:8000/api/productos/${producto}")
    .pipe(map((res:any)=>{
      return res;
    }))
  }

  getComent(){
    return this.http.get<any>("http://127.0.0.1:8000/api/comentarios")
    .pipe(map((res:any)=>{
      return res;
    }))
  }
}

import { Component, OnInit } from '@angular/core';
import { ProductsComponent } from '../products/products.component';
import { ApiService } from 'src/app/service/api.service';
import { CartService } from 'src/app/service/cart.service';

@Component({
  selector: 'app-producto',
  templateUrl: './producto.component.html',
  styleUrls: ['./producto.component.css']
})
export class ProductoComponent implements OnInit {
  items:any ={}
  searchKey:string =""
  constructor(private api : ApiService, private cartService : CartService) { }

  ngOnInit(): void {
    this.api.getOneProduct(ProductsComponent.selected)
    .subscribe(res=>{
      this.items = res;
    });

    this.cartService.search.subscribe((val:any)=>{
      this.searchKey = val;
    })
  }
  addtocart(item: any){
    this.cartService.addtoCart(item);
  }

}
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CartComponent } from './cart/cart.component';
import { ProductsComponent } from './products/products.component';
import { ProductoComponent } from './producto/producto.component';
import { HomeComponent } from './home/home.component';


const routes: Routes = [
  { path: "home", component: HomeComponent },
  { path: "products", component: ProductsComponent },
  { path: "products/:id", component: ProductoComponent },
  { path: "cart", component: CartComponent },
  { path: "**", redirectTo: "home" }

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

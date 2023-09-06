

import ProductComponent from './components/ProductComponent.vue';
import CreateProductComponent from './components/CreateProductComponent.vue';

export const routes = [
    { path: '/testproducts', component: ProductComponent },
    { path: '/products/create', component: CreateProductComponent },
];

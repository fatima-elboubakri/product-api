<template>
    <div>
        <h1>Liste des produits</h1>
        <ul>
            <li v-for="product in products" :key="product.id">
                {{ product.name }} - {{ product.price }}€
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            products: []
        }
    },
    mounted() {
        axios.get('/api/products').then(response => {
            this.products = response.data;
        });
    }
}
</script>

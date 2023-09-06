<template>
    <div>
        <h1>Créer un produit</h1>
        <form @submit.prevent="createProduct">
            <input v-model="name" placeholder="Nom du produit" />
            <input v-model="description" placeholder="Description" />
            <input v-model="price" placeholder="Prix" />
            <button type="submit">Créer</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            description: '',
            price: 0
        }
    },
    methods: {
        createProduct() {
            axios.post('/api/products', {
                name: this.name,
                description: this.description,
                price: this.price
            }).then(response => {
                // redirigez vers la liste des produits ou affichez un message de succès
                console.log("Produit créé avec succès !");
            });
        }
    }
}
</script>

<template>
    <div>
        <select name="country" id="country" autocomplete="country-name" v-model="selectedCountry">
            <option v-for="country in countries" :key="country.id" :value="country.id">{{ country.name }}</option>
        </select>
        <br/>
        <select name="city" id="city" autocomplete="city-name">
            <option v-for="city in cities" :key="city.id" :value="city.id">{{ city.name }}</option>
        </select>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';

export default {
    name: "Dropdown",

    setup() {
        const countries = ref([]);
        const selectedCountry = ref(1);

        const getCountries = () => {
            axios.get('/api/countries')
            .then( response => (countries.value = response.data));
        }

        onMounted( () => {
            getCountries();
        })

        const cities = ref([]);

        const getCities = () => {
            axios.get('/api/countries' + selectedCountry.value + '/cities')
                .then( response => (cities.value = response.data));
        }

        return { countries, cities, selectedCountry, getCountries, getCities }
    }

}
</script>

<style scoped>

</style>

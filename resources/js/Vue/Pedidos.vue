<script setup>

import Navbar from "@/components/Navbar.vue";
import {onMounted, ref} from "vue";
import servicesMenu from "../services/menu.service.js";

const menus = ref({});
const menu = ref([]);

//funcion eventos
onMounted(() => {
    getListar();
});

async function getListar() {
    const {data} = await servicesMenu.listar();
    menus.value = data;
    console.log(data);
}

</script>

<template>
    <navbar></navbar>

    <main>
        <div class="row ">
            <div class="col-12">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../../public/images/CarruselIMG1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../public/images/CarruselIMG2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../public/images/CarruselIMG3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div v-for="menu in menus" class="col-3 col-sm-4 m-5">
                    <div  class="card">
                        <img :src="menu.FotoMenu" class="card-img-top w-25" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ menu.Nombre }}</h5>
                            <p class="card-text">{{ menu.Descripcion }}</p>
                            <a href="#" class="btn btn-primary">Añadir al carrito</a>
                        </div>
                        <div class="card-footer footer">
                            <div class="row">
                                <div class="col-6">
                                    Precio: {{ menu.Precio }}
                                </div>
                                <div class="col-6">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--        Agregando los menus -->

    </main>


</template>

<style scoped>
.carousel-item {
    height: 50rem;
}
</style>

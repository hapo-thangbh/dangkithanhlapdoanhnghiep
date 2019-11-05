<template>
    <div>
        <div class="container-scroller">
            <Header/>
            <div class="container-fluid page-body-wrapper">
                <Sidebar/>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <router-view></router-view>
                    </div>
                    <Footer/>
                </div>
            </div>
        </div>
        <Loader/>
    </div>
</template>

<script>
import Header from './Header.vue'
import Sidebar from './Sidebar.vue'
import Footer from './Footer.vue'
import Loader from '@/components/Loader.vue'
export default {
    components: {
        Header,
        Sidebar,
        Footer,
        Loader
    },
    mounted(){
        var sidebar = document.getElementById('navbar-toggler');
        var menu = document.getElementById('sidebar');
        sidebar.addEventListener('click',function(){
            menu.classList.toggle('active');
        });
    }
}
</script>
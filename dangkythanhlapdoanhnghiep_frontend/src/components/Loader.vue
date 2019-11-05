<template>
    <transition name="fade">
        <div class="preload" v-if="show">
            <!-- <div class="circles">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div> -->

            <b-spinner type="grow" label="Loading..."></b-spinner>

        </div>
        
    </transition>
</template>
<script>
export default {
    name: 'Loader',
    data(){
        return {
            show: true
        }
    },
    mounted(){
        this.showToggle();
    },
    methods:{
        showToggle(){
            setTimeout(() => {
                this.show = false
            },1000)
        }
    }
}
</script>
<style lang="scss">
    .preload{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content:center;
        width:100%;
        height: 100%;
        top: 0;
        left:0;
        right:0;
        position: absolute;
        z-index: 1111;
        background-color: white;
        opacity: 0.8;
        .circles{
            display: flex;
            flex-direction: row;
            .circle{
                width: 1.5rem;
                height:1.5rem;
                border-radius: 50%;
                background:#149f11;
                animation: scaleIn 1s;
                //  infinite
                transform: scale(0);
                margin:1px;
                &:nth-child(1){
                    animation-delay: 0s;
                }
                &:nth-child(2){
                    animation-delay: .1s;
                }
                &:nth-child(3){
                    animation-delay: .2s;
                }
                &:nth-child(4){
                    animation-delay: .3s;
                }
                &:nth-child(5){
                    animation-delay: .4s;
                }
            }
        }

    }
    .fade-enter-active, 
    .fade-leave-active{
        transition: opacity 1s;
        p{
            animation-name: scaleOut;
            animation-duration: 1s;
        }
        
    }
    .fade-enter, .fade-leave-to{
        opacity: 0;
    }

    @keyframes scaleOut {
        0%{
            transform: scale(1)
        }
        100%{
            transform: scale(0)
        }
    }

    @keyframes scaleIn {
        0%{
            transform: scale(0)
        }
        100%{
            transform: scale(1)
        }
    }




    

</style>
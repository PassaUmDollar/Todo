var app = new Vue({
    el: "#app",
    data:{
        logo: "NekoTodo"
    },
    mounted(){
        window.addEventListener('keydown', (e) => {
              console.log(e)
        });
    },
    methods:{

    }
});
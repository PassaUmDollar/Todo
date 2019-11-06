<style scoped>
    body, html{
        overflow-x: hidden;
        overflow-y: auto;
    }
    

    header{
        position: fixed;
        width: 100%;
        background: #0079bf;
        z-index: 4000;
        box-shadow: 2px 1px 3px rgba(0,0,0,.40);
        color: #fff;
        height: 60px;
    }

    header a{
        text-decoration: none;
        font-weight: bold;
        top: 20px;
        position: relative;
    }

    header .right{
        float: right;
        position: absolute;
        right: 50px
    }

    .center{
        position: relative;
        margin: 0px auto;
        max-width: 800px;
        padding: 30px;
        top: 80px;
        height: 100%;
    }

    .card{
        width: calc(33.33% - 43px);
        background: #fff;
        display: inline-block;
        height: 160px;
        margin: 20px;
        box-shadow: -7px 6px 17px 6px rgba(95, 91, 91, 0.24);
        border-radius: 4px;
        cursor: pointer;
        transition: 0.4s cubic-bezier(0.6, -0.28, 0.74, 0.05);
    }

    .card h1{
        transition: 0.3s !important;
    }

    .dog{
        background: #fdf5ec;
        overflow: hidden;
    }

    .card h2{
        position: relative;
        left: 50%;
        color: #000000;
        top: 50%;
        background: #ffffff85;
        width: 100%;
        text-align: center;
        -webkit-transform: translate(-50%);
        transform: translate(-50%);
        z-index: 5;
        padding: 30px;
        font-size: 16px;
    }
    
    .card img{
        width: 100%;
    }

    .center h1{
        padding: 10px;
    }

    .card h1{
        position: absolute;
        padding: 6.3% 11%;
        font-size: 322%;
    }


    .card:hover{
        box-shadow: -5px -1px 30px 21px rgba(95, 91, 91, 0.24);
        transform: scale(1.1) translateY(-10px);
    }

    @media screen and (max-width: 800px){
       .card{
           width: calc(50% - 43px);
           position: relative;
           left: -20px;
       }

        .card h1{
            padding: 50px 104px;
        }

        .popup{
            width: 100%;
            height: 100%;
        }

        .tuto1{
            top: 7vw !important;
            left: 11vw !important;
        }
    }

    @media screen and (max-width: 610px){
       .card{
           width: 100%;
           position: relative;
           left: -20px;
       }

       .card h1{
        position: relative;
        text-align: center;
        }

        header input{
            width: 45% !important;
            left: -6px !important;
            top: -26px !important;
        }

        header .right{
            right: 11px !important;
        }

        .tuto1{
            top: 16vw !important;
            left: 2vw !important;
        }
    }

    @media screen and (max-width: 587px){
        .tuto1{
            top: 9vw !important;
            left: 3vw !important;
        }
    }

    .blue{
        background: #0079bf;
    }

    .green{
        background: #6dbf00;
    }

    .red{
        background: #bf0023;
    }

    .avatar{
        background: #6dbf00;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: absolute;
        right: 130px;
        top: 5px;
        transform: scale(0.8);
        cursor: pointer;
    }

    .avatar span{
        padding: 12px 15px;
        top: 10px;
        position: relative;
        font-size: 166%;
        font-weight: bold;
    }

    .overlay{
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: 5000;
        background: rgba(0,0,0,.40);
        top: 0%;
    }

    .popup{
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        background: #fff;
        padding: 40px;
        box-shadow: -5px -1px 30px 21px rgba(95, 91, 91, 0.24);
        animation: leaves 5s ease-in-out alternate;
        -webkit-animation: leaves 0.4s ease-in-out alternate;
    }

    @keyframes shadow-pulse
    {
        0% {
            box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.2);
        }
        100% {
            box-shadow: 0 0 0 35px rgba(0, 0, 0, 0);
        }
    }

    @keyframes leaves {
        0% {
            transform: translate(-50%, -50%) scale(0);
        }
        100% {
            transform: translate(-50%, -50%) scale(1);
        }
    }

    input{
        width: 100%;
        background: rgba(0,0,0,.40);
        padding: 15px;
        position: relative;
        margin: 0px;
        border-radius: 5px;
        outline: none;
        border: none;
        top: 20px;
        color: #fff;
        margin-top: 30px;
    }

    input::placeholder{
        color: #fff;
    }

    button{
        position: relative;
        top: 70px;
        width: 70%;
        left: 50%;
        transform: translate(-50%);
        padding: 10px;
        font-size: 18px;
        margin-top: 5px;
    }

    button:focus{
        box-shadow: 0 0 0 0.2rem rgba(97,189,79,0.5);
    }

    .red:focus{
         box-shadow: 0 0 0 0.2rem #ea4462b0;
    }

    header input{
        color: #fff;
        width: calc(100% - 20em);
        position: absolute;
        top: -25px;
        background: #ffffff59;
        left: 40px;
        transform: scale(0.8);
    }

    header input::placeholder{
        color: #fff;
    }

    .card span{
        position: relative;
        top: 81%;
        padding: 20px;
        color: #fff;
        text-shadow: 1px 2px 1px #00000075;
    }

    .cores{
        position: relative;
        width: 40px;
        height: 40px;
        top: 39px;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        margin-left: -11px;
    }
    
    .ativo{
        border: 7px solid #00000075;
    }

    .error{
        border: 2px solid var(--red);
    }

    .overlay_trans{
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: 5000;
        background: transparent;
        top: 0%;
    }

    .tuto{
        position: absolute;
        width: 150px;
        height: auto;
        background: #fdf5ec;
        box-shadow: -5px -1px 30px 21px rgba(95, 91, 91, 0.24);
        borde-radius: 4px;
        padding: 13px;
        transition: 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .tuto1{
        left: 11vw;
        top: 5vw;
    }

    .tring{
        width: 0;
        height: 0;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-bottom: 15px solid #fdf5ec;
        position: absolute;
        top: -15px;
        left: 40%;
    }

    .tuto button{
        background: #0079bf;
        color: #fff;
        position: relative;
        -webkit-animation: shadow-pulse-data-v-040e2ab9 1s infinite;
        animation: shadow-pulse-data-v-040e2ab9 1s infinite;
        top: 25px;
    }

    .tuto2{
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .tuto3{
        top: 130px;
        right: 56px;
        transform: translate(-50%, -50%);
    }
</style>

<template>
<div>
    <header>
        <input placeholder="Busque cards e pessoas"/>
            <div class="right">
                <div class="avatar">
                    <span>A</span>
                </div>
                <a href="/logout" style="background: #fff; padding: 7px; color: #0079bf; border-radius: 2px;">Logout</a>
            </div>
    </header>
    <div class="center">
        <h1>Olá {{ user.name }}</h1>
        <br>
        <div class="card dog">
        <h2> Crie seu primeiro card hoje :D </h2>
        <img src="dog.svg"/>
        </div>
        <div class="card criar" @click="abrirCriar">
            <h1>
            +
            </h1>
        </div>
        <h1>Seus cards</h1>
        <div class="card blue" v-for="card in cards" v-bind:class="card.color">
            <span>{{ card.name }}</span>
        </div>
        <br>
        <span style="font-size: 1.6em; padding: 0px;" v-if="cards.length == 0">
            Nenhum card :/, crie um agora    
        </span>  
    </div>

    <div class="overlay" v-if="criando">
        <div class="popup">
            <h1>Que legal, você está criando um card!</h1>
            <input v-model="criandoCard.name" v-bind:class="{ error: hasError}" placeholder="Qual nome do card?">
            <div v-for="cor in cores" class="cores" v-bind:class="{ ativo: cor.ativo}" v-bind:style="{ backgroundColor: 'var(--' +cor.cor + ')' }" @click="selectColor(cor)"></div>
            <br>
            <button class="green" @click="criarCard">Criar</button>
            <button @click="fecharCriar" class="red" style="color: #fff;">Cancelar</button>
        </div>
    </div>

    <div class="overlay_trans" v-if="tuturials.length > 0">
        <div class="tuto" v-bind:class="'tuto'+whereTuto">
            <div class="tring"></div>
            <span style="position: relative; text-align: center;">{{ tuto.texto }}</span>
            <button @click="nextTuto">OK</button>
        </div>
    </div>

</div>
</template>

<script>
export default{
    data (){
        return{ 
            user: {
            "name": "Alexandre Silva",
            "email": "admin@nekotodo.com",
            "password": "xande123"
            },
            criando: false,
            cards: [  
            ],
            criandoCard: {"name" : "", "color": "red"},
            cores: [
                {"cor" : "red", "ativo": true},
                {"cor" : "blue", "ativo": false},
                {"cor" : "green", "ativo": false}
            ],
            hasError: false,
            tuturials: [
                {"texto" : "Aqui é a barra de pesquisa :D"},
                {"texto" : "Aqui são os seus cards :D"},
                {"texto" : "Aqui é o seu perfil :D"},
            ],
            tuto: {"texto" : "Aqui é a barra de pesquisa :D"},
            whereTuto: 1
        }
    },
    mounted(){
        console.log(this.user.name)
    },
    methods:{
        abrirCriar(){
            this.criando = true
        },
        fecharCriar(){
            this.criando = false
        },
        criarCard(){
            if(this.criandoCard.name == "" || this.criandoCard.name == null){
                this.hasError = true
            } else{
                this.cards.push({
                    "name" : this.criandoCard.name,
                    "color" : this.criandoCard.color
                })
                this.hasError = false
                this.criando = false
                this.criandoCard.name = ""
            }
        },
        selectColor(cor){
            var index = this.cores.indexOf(cor)
            this.criandoCard.color = this.cores[index].cor
            for(var i = 0; i < this.cores.length; i++){
                this.cores[i].ativo = false
            }
            this.cores[index].ativo = true
        },
        nextTuto(){
            this.tuturials.splice(0, 1);
            this.tuto.texto = this.tuturials[0].texto
            this.whereTuto++;
        }
    }
}
</script>
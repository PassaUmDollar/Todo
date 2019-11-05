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
</style>

<template>
    <div id="app">
    <header>
            <div class="right">
                <div class="avatar">
                    <span>A</span>
                </div>
                <a href="/logout" style="background: #fff; padding: 7px; color: #0079bf; border-radius: 2px;">Logout</a>
            </div>
    </header>
    <div class="center">
        <h1>Olá Alexandre</h1>
        <br>
        <div class="card dog">
        <h2> Crie seu primeiro card hoje :D </h2>
        <img src="dog.svg"/>
        </div>
        <div class="card">
            <h1>
            +
            </h1>
        </div>
        <h1>Seus cards</h1>
        <div class="card blue">

        </div>
        <div class="card green">

        </div>
        <div class="card red">

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
        }
        }
    },
    mounted(){
        console.log(this.user.name)
    },
    methods(){

    }
}
</script>
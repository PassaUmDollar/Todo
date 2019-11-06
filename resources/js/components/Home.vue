<style scoped>
    .hero{
        background: linear-gradient(135deg, #0079bf, #5067c5);
        position: fixed;
        width: 100%;
        height: 199vw;
        padding: 30px;
        color: #fff;
        overflow-x: hidden;
        overflow-y: auto;
    }

    body, html{
        background-color: linear-gradient(135deg, #0079bf, #5067c5) !important;
    }

    .hero h1{
        padding: 40px;
        width: 450px;
    }

    .hero h2{
        width: 450px;
        padding-left: 40px;
    }

    .img{
        position: absolute;
        right: 10%;
        top: 5%;
        background-image: url('https://d2k1ftgv7pobq7.cloudfront.net/meta/p/res/images/308998dcb3ed5ab3d01217a4d24ffa03/hero-a.svg');
        height: 500px;
        width: 600px;
    }

    .center{
        position: relative;
        max-width: 1000px;
        margin: 50px auto;
    }

    input{
        width: 450px;
        background: #fff;
        padding: 15px;
        position: relative;
        margin: 0px;
        border-radius: 5px;
        outline: none;
        border: none;
        color: #151515;
        top: 50px;
    }

    input{
        width: 360px;
    }

    .hero button{
        position: relative;
        right: 21px;
        top: 48px;
        padding: 13px;
        z-index: 10;
    }

    .hero button:focus{
        box-shadow: 0 0 0 0.2rem rgba(97,189,79,0.5);
    }

    @media screen and (max-width: 1450px){
        .img{
            position: relative;
            width: 650px;
            height: 720px;
            margin: 0px auto;
            left: 50%;
            top: -100px;
            transform: translate(-50%, -50%) scale(0.7);
        }
        
        .hero h1,h2{
            left: -50px;
            position: relative;
        }
    }

    @media screen and (max-width: 1089px){
        .img{
            display: none;
        }

        .hero h1,h2, input{
            position: relative;
            text-align: center;
            left: 50%;
            width: 100%;
            transform: translate(-50%) scale(0.89);
        }

        .hero h2{
            display: none;
        }

        .hero h2{
            width: 100%;
        }

        .hero{
            height: 300vw;
        }

        .hero input{
            width: 100%;
        }

        .hero button{
            left: 50%;
            top: 50px;
            width: 90%;
            transform: translate(-50%);
        }

        
    }

    header{
        position: fixed;
        width: 100%;
        background: #0079bf;
        z-index: 4000;
        box-shadow: 2px 1px 3px rgba(0,0,0,.40);
        color: #fff;
    }

    header a{
        text-decoration: none;
        font-weight: bold;
        top: 20px;
        position: relative;
        font-size: 14px;
    }

    header .right{
        float: right;
        position: absolute;
        right: 50px
    }

</style>

<template>
    <div>

        <header>
            <div class="right">
                <a href="/login">Fazer Login</a>
                <a href="/register" style="background: #fff; padding: 7px; color: #0079bf; border-radius: 2px;">Cadastrar-se</a>
            </div>
        </header>


    <div class="hero">
        <div class="center">
        <h1>O NekoTodo permite trabalhar com mais colaboração e ter mais produtividade.</h1>
        <h2>
            Com os quadros, listas e cartões do NekoTodo, você pode organizar e priorizar seus projetos de um jeito divertido, flexível e gratificante.
        </h2>
        <div class="input">
        <input type="email" name="" id="" placeholder="E-mail">
        <button class="sucess">Cadastra-se, é grátis!</button>
        </div>
        <br>
        </div>
        <div class="img">
            
        </div>
    </div>
    </div>
</template>
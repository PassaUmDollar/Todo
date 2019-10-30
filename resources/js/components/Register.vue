<style scoped>
    .app{
        position: fixed;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #0079bf, #5067c5);
    }

    .app .background{
        width: 100%;
        height: 100%;
        background-image: url('https://wallpaperaccess.com/full/19233.jpg');
        position: fixed;
        background-size: cover;
    }

    .app .background::after{
        content: '';
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0,0,0,.70);
    }

    .form{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: linear-gradient(135deg, #0079bf, #5067c5);
        width: 100%;
        max-width: 560px;
        height: auto;
        z-index: 200;
        border-radius: 3px;
        padding: 40px;
        color: #fff;
    }

    h1,h2{
        text-align: center;
        padding: 10px;
        font-size: 23px;
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
    }

    button:focus{
        box-shadow: 0 0 0 0.2rem rgba(97,189,79,0.5);
    }

    i{
        cursor: pointer;
        font-size: 22px;
    }

    @media screen and (max-width: 800px){
        .form{
            height: 100%;
            width: 100%;
        }
    }
</style>

<template>
<div class="app">
    <div class="background"></div>
    <div class="form">
        <a href="/"><i class="fas fa-arrow-left"></i></a>
        <h1>Faça o registro</h1>
        <h2>E desfrute de tudo!</h2>
        <input type="email" name="" id="" placeholder="E-mail">
        <input type="password" name="" id="" placeholder="Senha">
        <button class="sucess">Registrar</button>
    </div>
</div>
</template
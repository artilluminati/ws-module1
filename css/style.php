<style>
        /* REBOOT */
        *{
            margin: 0;
            padding: 0;

            --nav-height: 80px;
            --gu: calc(100vw / 12);

            --c-blue: #35D5FF;
            --c-purple: #ED2292;
            --c-darkpurple: #984874;

            font-family: 'Open Sans', Arial, Helvetica, sans-serif;

            max-width: 100vw;
        }

        body{
            overflow-x: hidden;
        }

        input{
            font-size: 20px;
            font-weight: 400;
            word-wrap: break-word;
            box-sizing: border-box;
            border-radius: 8px;
            border: 2px #2D1422 solid;
        }
        input::placeholder{
            color: var(--c-darkpurple);
            padding-left: 10px;
        }
        input[type=submit]:hover{
            background: transparent;
        }

        input[type=checkbox]{
            width: 30px;
            height: 30px;
            border-radius: 8px;
            border: 2px black solid;
        }


        /* ОСНОВНЫЕ КЛАССЫ */
        .hidden{
            display: none!important;
            opacity: 0;
        }

        .text-center{
            text-align: center;
        }

        .text-right{
            text-align: right;
        }

        .text-left{
            text-align: left;
        }

        .text-blue{
            color: var(--c-blue);
        }

        .text-purple{
            color: var(--c-purple);
        }

        .text-darkpurple{
            color: var(--c-darkpurple);
        }

        .reg-to-log{
            margin-top: 30px;
            cursor: pointer;
            text-decoration: underline;
            padding: 10px;
            border: 2px transparent solid;
            box-sizing: border-box;
            border-radius: 1000px;
        }
        .reg-to-log:hover{
            text-decoration: none;
            border: 2px #000000 solid;
            
        }

        section h1{
            font-size: 40px;
            font-weight: 800;
        }

        section h2{
            font-size: 36px;
            font-weight: 700;
        }

        .btn{
            background: #000000;
            border-radius: 1000px!important;
            border: 2px transparent solid!important;
            box-sizing: border-box;

            color: #ffffff;
            font-weight: 600;
            font-size: 16px;
            padding: 10px;
            display: flex;
            justify-content: center;
            text-decoration: none;
            margin: 10px 0;
        }

        .btn:hover{
            cursor: pointer;
            background: transparent;
            border: 2px #000000 solid!important;
            color: #000000;
            transition: 0.1s;
        }

        .container{
            padding-left: calc(2*var(--gu));
            padding-right: calc(2*var(--gu));
            width: calc(8 * var(--gu));
        }
        
        .col-2{
            display: flex;
            flex-direction: row;
            align-content: space-between;
            justify-content: space-between;
        }

        .col-2 > div{
            /* width: calc(4 * var(--gu)); */
            width: calc(4 * var(--gu) - 10px);
            max-width: 66.6666666667vh;
        }


        /* НАВИГАЦИЯ */
        nav{
            width: 100%;
            height: var(--nav-height);
            background: var(--c-blue);
            display: flex;
            justify-content: space-between;
        }
        
        .logo, .logo img{
            width: max-content;
            height: var(--nav-height);
        }
        

        .nav-menu{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: calc(4 * var(--gu));
        }
        .nav-menu a{
            text-decoration: none;
            color: #ffffff;
            text-transform: uppercase;
        }
        
        .nav-login{
            display: flex;
            align-items: center;
        }
        .nav-login span{
            margin-right: 10px;
        }


        /* ХЕДЕР */
        header{
            height: calc(50vh - var(--nav-height));
        }

        header img{
            max-height: calc(50vh - var(--nav-height));
        }

        header h1{
            color: var(--c-purple);
            font-weight: 800;
            font-size: 48px;
        }

        header h3{
            color: var(--c-darkpurple);
            font-weight: 600;
            font-size: 16px;
        }

        header a{
            width: calc(3 * var(--gu));
        }

        header div:last-child{
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .burger-container {
            position: relative;
            left: calc(var(--gu) * 9);
            bottom: calc(var(--nav-height) / 1.5);
        display: inline-block;
        cursor: pointer;
        width: 35px!important;
        }

        .bar1, .bar2, .bar3 {
        width: 35px;
        height: 5px;
        background-color: #333;
        margin: 6px 0;
        transition: 0.4s;
        }

        .change .bar1 {
        transform: translate(0, 11px) rotate(-45deg);
        }

        .change .bar2 {opacity: 0;}

        .change .bar3 {
        transform: translate(0, -11px) rotate(45deg);
        }

        

        .photos{
            margin: 60px auto;
        }

        /* КАРТОЧКИ */
        .card{
            overflow: visible;
            display: flex;
            box-shadow:  1px 5px 10px #FFF0F8;
            border-radius: 8px;
            margin-bottom: 30px;
            /* filter: drop-shadow(1px, 5px, 10px, #FFF0F8); */
        }

        .my-requests{
            margin-top: 60px;
        }
        .my-requests > div > h2{
            margin-bottom: 30px;
        }

        /* КАРТОЧКИ главная страница */
        .cards{
            margin-top: 60px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .cards .card{
            width: calc(4 * var(--gu) - 10px)!important;
            min-height: calc(3 * var(--gu) + 10px);
            display: flex;
            flex-direction: column;
            margin-bottom: 60px;
        }
        .cards .card > img{
            border-radius: 8px;
            width: calc(4 * var(--gu) - 10px);
        }

        /* КАРТОЧКИ мои заявки */
        .req-cards .card img{
            width: 50%;

        }
        .req-cards .card > div{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px;
        }
        .card-info{
            display: flex;
            flex-direction: column;
        }

        /* ЗАЯВКА */
        .req-new{
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        .req-new input{
            margin-top: 30px;
        }
        .form-img div{
            background: linear-gradient(180deg, #F3D1E4 0%, #DAF7FF 100%);
            width: 100%;
            height: calc(2 * var(--gu));
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
            border-radius: 8px;
            cursor:  pointer;
        }

        /* КАРТЧОКИ админ панель */
        .admin > .card > div{
            width: calc(2 * var(--gu));
        }
        .admin img{
            max-width: 100%;
        }


        /* ФОРМА РЕГИСТРАЦИИ И АВТОРИЗАЦИИ */
        .reg-form{
            display: flex;
            flex-direction: column;
        }

        .reg-form input{
            font-size: 20px;
            font-weight: 400;
            word-wrap: break-word;
            border-radius: 8px;
            border: 2px #2D1422 solid;
            margin-top: 30px;
        }
        

        .reg-form input:first-child{
            margin-top: 0;
        }

        .checkbox {
            margin-top: 30px;
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        .checkmark {
            border: 2px solid #000000;
            box-sizing: border-box;
            border-radius: 8px;
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }
        .checkbox:hover input ~ .checkmark {
            background-color: #ccc;
        }
        .checkbox input:checked ~ .checkmark {
            background-color: #000000;
        }
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        .checkbox input:checked ~ .checkmark:after {
            display: block;
        }
        .checkbox .checkmark:after {
            left: 7px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        /* ФУТЕР */
        footer .info{
            background-color: #000000;
            height: var(--nav-height);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer .info a{
            color: #ffffff;
            text-decoration: none;
        }

        footer .info a:hover{
            color: #ebebeb;
        }

        @media screen and (max-width: 1100px){
            header{
                height: calc(100vh - var(--nav-height));
                justify-content: center;
            }
            header > div{
                justify-content: center;
                display: flex;
            }
            .container{
                width: calc(10 * var(--gu));
                padding-left: var(--gu);
                padding-right: var(--gu);
            }
            .col-2{
                /* flex-wrap: wrap; */
                flex-direction: column;
                width: calc(10 * var(--gu) + 10px);
                
            }
            .col-2 > div{
                width: calc(10 * var(--gu) - 10px);
            }
            .logo img{
                max-height: calc(0.8 * var(--nav-height));
                padding-top: calc(0.1 * var(--nav-height));
            }
            nav{
                /* flex-direction: row!important; */
                margin-right: 0;
            }
            .nav-menu1{
                padding-left: 0;
                padding-right: 0;
                padding-bottom: 5px;
                bottom: 39px;
                right: calc((var(--gu)));
                position: relative;
                width: 100vw!important;
                max-width: 100vw!important;
                height: var(--nav-height);
                background: var(--c-blue);
                justify-content: space-around;
            }
            .hidden-nav{
                display: none;
            }
            .cards .card > img{
                width: 100%;
            }
            .cards .card{
                width: calc(10 * var(--gu) - 10px)!important;
            }
            .header-btn{
                width: 100%;
            }
            footer .nav-menu{
                width: auto;
            }
            
        }
        @media screen and (min-width: 1101px){
                .hidden-nav{
                    display: flex!important;
                }
            }
        </style>
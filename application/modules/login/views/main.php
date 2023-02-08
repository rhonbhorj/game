<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        -webkit-tap-highlight-color: transparent;
        user-select: none;
        outline: 0px;
        box-sizing: border-box !important;
    }

body{

background-color: black;

}


    #casino {
        padding-bottom: 5px;
        min-height: 100px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px;
    }

    #casino::after,
    #casino::before {
        content: " ";
        display: table;
    }

    #casino::after {
        clear: both;
    }

    * {
        -webkit-font-smoothing: antialiased;
        -webkit-tap-highlight-color: transparent;
        outline: 0px;
        user-select: none;
        box-sizing: border-box !important;
    }

    #casino .casino-title {
        position: relative;
        display: block;
        width: 100%;
        height: 60px;
        margin-top: 5px;
        color: rgb(86, 47, 196);
        font-family: "roboto condensed", Helvetica, Arial, sans-serif;
        font-size: 24px;
        font-weight: 300;
        line-height: 60px;
        text-align: center;
        text-transform: uppercase;
    }

    #casino .casino-title .line {
        position: absolute;
        display: block;
        content: "";
        width: 90%;
        height: 1px;
        top: 30px;
        margin-left: 5%;
        background-color: rgb(86, 47, 196);
        z-index: 1;
    }

    #casino .casino-title .title {
        position: relative;
        display: inline;
        width: auto;
        padding: 0px 10px;
        margin: 0px auto;
        background-color: rgb(255, 255, 255);
        z-index: 2;
    }

    #casino .casino-wrapper {
        position: relative;
        padding-bottom: 10px;
    }

    #casino .casino-wrapper .game-wrapper {
        width: 90%;
        margin: 0px 5% !important;
    }

    #casino .casino-wrapper .game-wrapper::after,
    #casino .casino-wrapper .game-wrapper::before {
        content: " ";
        display: table;
    }

    #casino .casino-wrapper .game-wrapper::after {
        clear: both;
    }

    #casino .casino-wrapper .game-wrapper .slot {
        position: relative;
        float: left;
        width: calc(25% - 10px);
        height: 14%;
        min-height: 100px;
        margin: 5px;
        transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1) 0s;
        z-index: 1;
        overflow: hidden;
    }

    #casino .casino-wrapper .game-wrapper .slot.open,
    #casino .casino-wrapper .game-wrapper .slot:hover {
        z-index: 2;
        transform: scale(1.2);
        box-shadow: rgba(0, 0, 0, 0.5) 0px 10px 20px;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper>div {
        display: block;
        width: 100%;
        height: 100%;
        margin: 0px;
        backface-visibility: hidden;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .image {
        position: relative;
        width: 100%;
    }

    img {
        border-style: none;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .image img {
        display: block;
        width: 100%;
    }

    #casino .casino-wrapper .game-wrapper .slot.open .slot-wrapper .content,
    #casino .casino-wrapper .game-wrapper .slot:hover .slot-wrapper .content {
        top: 0px;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content {
        position: absolute;
        width: 100%;
        height: 100%;
        padding: 10px 0px;
        top: 100%;
        background-color: rgb(86, 47, 196);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1) 0s;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info {
        position: absolute;
        width: 100%;
        height: 20px;
        padding: 0px 10px;
        top: 10px;
        z-index: 5;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info::after,
    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info::before {
        content: " ";
        display: table;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info::after {
        clear: both;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info .mobile,
    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info .more-info {
        float: right;
        width: 20px;
        padding: 1px;
        opacity: 0.5;
        transition: opacity 0.2s linear 0s;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info .mobile span,
    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info .more-info span {
        display: block;
        width: 18px;
        height: 18px;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .info .mobile span {
        background: url("../images/casino/mob.svg") center center / 18px no-repeat;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .title {
        position: relative;
        display: block;
        width: 100%;
        height: calc(100% - 50px);
        color: rgb(255, 255, 255);
        font-size: 18px;
        font-weight: 500;
        line-height: 20px;
        text-align: center;
        text-transform: uppercase;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .title .name {
        position: absolute;
        display: block;
        width: 100%;
        height: auto;
        padding: 0px 20px;
        margin: 0px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .buttons {
        position: absolute;
        width: 100%;
        bottom: 10px;
    }

    a {
        background-color: transparent;
    }

    a:active,
    a:hover {
        outline-width: 0px;
    }

    a,
    a:active,
    a:focus {
        outline: 0px;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .buttons .button {
        cursor: pointer;
        display: block;
        width: 90%;
        height: 30px;
        padding: 0px 5%;
        margin: 0px auto;
        border-radius: 2px;
        border: 1px solid rgb(255, 187, 51);
        background-color: rgb(255, 187, 51);
        color: rgb(86, 47, 196);
        font-family: Roboto, Helvetica, Arial, sans-serif;
        font-size: 18px;
        font-weight: 700;
        line-height: 28px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        transition: all 0.2s linear 0s;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .buttons .button:hover {
        box-shadow: rgba(255, 187, 51, 0.75) 0px 0px 10px;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .buttons .link {
        display: block;
        width: 100%;
        color: rgb(255, 187, 51);
        font-family: Roboto, Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 20px;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        transition: all 0.2s linear 0s;
    }

    #casino .casino-wrapper .game-wrapper .slot .slot-wrapper .content .buttons .link:hover {
        text-shadow: rgb(255, 187, 51) 0px 0px 4px;
    }
</style>

<body>
    <div id="casino">
        <h2 class="casino-title">
            <div class="line"></div>
            <div class="title">Nove Igre</div>
        </h2>
        <div class="casino-wrapper">
            <div class="game-wrapper">
                <!----><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/dice-desktop.gif" alt="TITAN DICE">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">TITAN DICE</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/mbgames/titan_dice">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/evoji-desktop-min.gif" alt="EVOJI">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">EVOJI</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/mbgames/evoji">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/titan-desktop-min.gif" alt="TITAN ROULETTE">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">TITAN ROULETTE</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/mbgames/roulette">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-322.jpg" alt="JUMP!">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">JUMP!</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/habanero/SGJump">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-304.jpg" alt="CASHOCCHINO">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">CASHOCCHINO</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/micro-gaming/cashoccinoDesktop">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-321.jpg" alt="ASTRO PUG">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">ASTRO PUG</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/micro-gaming/astroPugDesktop">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-305.jpg" alt="SIDEWINDER">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">SIDEWINDER</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/micro-gaming/sidewinderDesktop">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb480X270-1.png" alt="CELTIC GODDESS">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">CELTIC GODDESS</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/micro-gaming/celticGoddessDesktop">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-307.jpg" alt="CARIBBEAN STUD">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">CARIBBEAN STUD</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/habanero/CaribbeanStud">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-298.jpg" alt="EGYPTIAN DREAMS DELUXE">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                </div>
                                <div class="title">
                                    <p class="name">EGYPTIAN DREAMS DELUXE</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/habanero/SGEgyptianDreamsDeluxe">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-303.jpg" alt="FORTUNE DOGS">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">FORTUNE DOGS</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/habanero/SGFortuneDogs">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail><casino-game-thumbnail>
                    <div class="slot">
                        <div class="slot-wrapper">
                            <div class="image">
                                <img src="https://casinoimg.s3-eu-west-1.amazonaws.com/Thumb-315.jpg" alt="AMERICAN BACCARAT">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <!---->
                                    <!---->
                                    <div class="mobile"><span></span></div>
                                </div>
                                <div class="title">
                                    <p class="name">AMERICAN BACCARAT</p>
                                </div>
                                <div class="buttons">
                                    <!----><a class="button">
                                        Igraj Sada
                                    </a>
                                    <!----><a class="link" href="/sr/kazino/habanero/AmericanBaccarat">
                                        Isprobaj
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </casino-game-thumbnail>
            </div>
        </div>
    </div>
</body>

</html>
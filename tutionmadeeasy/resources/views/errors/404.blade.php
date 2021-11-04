<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Forbidden</title>

  <style>
    *, *:after, *:before {
  box-sizing: border-box;
}

body {
  text-align: center;
  /* background: #1a202c; */
  background: #11101d;
}

.conatiner {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 900px;
}

.circle {
  border-radius: 50%;
  padding: 0;
  display: inline-block;
  position: relative;
  height: 375px;
}
.circle:after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: 40px solid white;
  z-index: 50;
  border-radius: 50%;
}

.holder {
  overflow: hidden;
  width: 366px;
  height: 345px;
  border-radius: 50%;
  position: relative;
}

.bob {
  position: absolute;
  display: inline-block;
  left: 50%;
  z-index: 10;
  transform: translateX(-50%);
  -webkit-animation: 2s updown ease-in infinite;
  animation: 2s updown ease-in infinite;
  top: 100%;
}
.bob .nose {
  position: relative;
  background: white;
  border: 3px solid #0D0D17;
  margin: 0 auto;
  height: 35px;
  width: 35px;
  z-index: 15;
  border-radius: 50% 50% 0 0;
  top: 8px;
}
.bob .nose:after {
  content: '';
  position: absolute;
  left: 5px;
  top: 12px;
  height: 7px;
  width: 7px;
  border-radius: 50%;
  background: #0D0D17;
  box-shadow: 13px 0 #0D0D17;
}
.bob .face {
  width: 200px;
  height: 200px;
  background: white;
  border: 3px solid #0D0D17;
  border-radius: 50%;
  position: relative;
  z-index: 50;
  box-shadow: 15px 0 #D7E0E5 inset;
}
.text-white{
  color: white;
}

.fs-20-bold{
  font-size: 15px;
  font-weight: bolder;
  font-family: monospace;
}
.fs-30-bold{
  font-size: 30px;
  font-weight: bolder;
  font-family: monospace;
}
.bob .ear {
  position: absolute;
  background: white;
  border: 3px solid #0D0D17;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  z-index: 15;
  top: 115px;
  left: -5px;
}
.bob .ear:after, .bob .ear:before {
  content: '';
  position: absolute;
  background: #602f2d;
  border-radius: 15px;
  height: 3px;
  width: 20px;
  top: 12px;
  left: 5px;
}
.bob .ear:after {
  transform: rotate(127deg);
  width: 7px;
  top: 15px;
  left: 7px;
}
.bob .ear.rgt {
  left: auto;
  right: -5px;
}
.bob .ear.rgt:after {
  transform: rotate(47deg);
  top: 15px;
  left: 18px;
}
.bob .neck {
  position: relative;
  background: white;
  border: 3px solid #0D0D17;
  margin: 0 auto 0;
  height: 50px;
  width: 70px;
  z-index: 15;
  border-radius: 0 0 50% 50%;
  top: -8px;
  box-shadow: 10px 0 #D7E0E5 inset;
}
.bob .mouth {
  position: absolute;
  border: 3px solid #0D0D17;
  background: #BB3144;
  width: 80%;
  height: 80%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  border-radius: 50%;
  overflow: hidden;
  -webkit-animation: 1s openclose ease-in infinite;
  animation: 1s openclose ease-in infinite;
}
.bob .mouth:after, .bob .mouth:before {
  content: '';
  position: absolute;
  background: #cc5e64;
  border: 5px solid #df6062;
  border-radius: 50%;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 120px;
  height: 120px;
  z-index: 2;
}
.bob .mouth:after {
  z-index: 10;
  bottom: auto;
  top: 25px;
  background: #ec7374;
  height: 40px;
  width: 40px;
  border-top-color: transparent;
}
.bob .tongue {
  position: absolute;
  background: #0D0D17;
  width: 40px;
  height: 40px;
  left: 0;
  bottom: 5px;
  right: 0;
  margin: auto;
  border-radius: 50%;
  z-index: 5;
}
.bob .tongue:after, .bob .tongue:before {
  content: '';
  position: absolute;
  background: #f9adba;
  border: 3px solid #0D0D17;
  border-radius: 50px;
  top: 22px;
  left: -4px;
  width: 30px;
  height: 40px;
  z-index: 2;
}
.bob .tongue:before {
  left: 16px;
}

.drops {
  background: white;
  border: 2px solid #0D0D17;
  width: 20px;
  height: 20px;
  border-radius: 50px 50px 0 50px;
  position: absolute;
  transform: rotate(-15deg);
  top: 150px;
  left: 70px;
  z-index: 100;
  -webkit-animation: 2s drop-l ease-in infinite;
  animation: 2s drop-l ease-in infinite;
}
.drops:nth-child(2) {
  left: auto;
  right: 70px;
  transform: rotate(145deg);
  -webkit-animation: 2s drop-r ease-in infinite;
  animation: 2s drop-r ease-in infinite;
}
.drops:after, .drops:before {
  content: '';
  background: white;
  border: 2px solid #0D0D17;
  width: 20px;
  height: 20px;
  border-radius: 50px 50px 0 50px;
  position: absolute;
  transform: rotate(-15deg);
  top: 20px;
  left: -25px;
}
.drops:before {
  top: -30px;
  left: 0px;
}

.hand {
  border: 3px solid #0D0D17;
  position: absolute;
  z-index: 50;
  background: white;
  width: 25px;
  height: 15px;
  border-radius: 20px;
  bottom: 86px;
  z-index: 200;
  left: 64px;
  transform: rotate(-36deg);
}
.hand:after, .hand:before {
  content: '';
  border: 3px solid #0D0D17;
  position: absolute;
  z-index: 50;
  background: white;
  width: 25px;
  height: 15px;
  border-radius: 20px;
  z-index: 200;
  top: 100%;
  left: 0;
}
.hand:before {
  top: 200%;
}

.rgt {
  left: auto;
  right: 60px;
  bottom: 96px;
  transform: rotate(50deg);
}

.numer {
  font-size: 500px;
  display: inline-block;
  color: white;
}
@-webkit-keyframes updown {
  50% , 70% {
    top: 25%;
  }
}
@keyframes updown {
  50% , 70% {
    top: 25%;
  }
}
@-webkit-keyframes openclose {
  0% , 100% {
    transform: scale(0.95, 0.95);
  }
  50% {
    transform: scale(1.1, 1.1);
  }
}
@keyframes openclose {
  0% , 100% {
    transform: scale(0.95, 0.95);
  }
  50% {
    transform: scale(1.1, 1.1);
  }
}
@-webkit-keyframes drop-l {
  0% , 50% {
    opacity: 0;
    transform: translate(50px, 0) rotate(-15deg);
  }
  55% {
    opacity: 1;
    transform: translate(0, 0) rotate(-15deg);
  }
  70% {
    opacity: 1;
    transform: translate(-30px, 0) rotate(-25deg);
  }
  85% {
    opacity: 1;
    transform: translate(-50px, 100px) rotate(-90deg);
    opacity: .5;
  }
  86% , 100% {
    opacity: 0;
  }
}
@keyframes drop-l {
  0% , 50% {
    opacity: 0;
    transform: translate(50px, 0) rotate(-15deg);
  }
  55% {
    opacity: 1;
    transform: translate(0, 0) rotate(-15deg);
  }
  70% {
    opacity: 1;
    transform: translate(-30px, 0) rotate(-25deg);
  }
  85% {
    opacity: 1;
    transform: translate(-50px, 100px) rotate(-90deg);
    opacity: .5;
  }
  86% , 100% {
    opacity: 0;
  }
}
@-webkit-keyframes drop-r {
  0% , 50% {
    opacity: 0;
    transform: translate(-50px, 0) rotate(145deg);
  }
  55% {
    opacity: 1;
    transform: translate(0, 0) rotate(145deg);
  }
  70% {
    opacity: 1;
    transform: translate(30px, 0) rotate(160deg);
  }
  85% {
    opacity: 1;
    transform: translate(50px, 100px) rotate(180deg);
    opacity: .5;
  }
  86% , 100% {
    opacity: 0;
  }
}
@keyframes drop-r {
  0% , 50% {
    opacity: 0;
    transform: translate(-50px, 0) rotate(145deg);
  }
  55% {
    opacity: 1;
    transform: translate(0, 0) rotate(145deg);
  }
  70% {
    opacity: 1;
    transform: translate(30px, 0) rotate(160deg);
  }
  85% {
    opacity: 1;
    transform: translate(50px, 100px) rotate(180deg);
    opacity: .5;
  }
  86% , 100% {
    opacity: 0;
  }
}
  </style>

</head>
<body>
<div class="conatiner"><span class="numer">4</span>
  <div class="circle">
    <div class="drops"></div>
    <div class="drops"></div>
    <div class="hand"></div>
    <div class="hand rgt"></div>
    <div class="holder">
      <div class="bob">
        <div class="nose"></div>
        <div class="face">
          <div class="mouth">
            <div class="tongue"></div>
          </div>
        </div>
        <div class="ear"></div>
        <div class="ear rgt"></div>
        <div class="neck"></div>
      </div>
    </div>
  </div><span class="numer">3</span>
  <div class="text-white fs-30-bold">Page Not Found!</div>
  <p class="text-white fs-20-bold">Sorry! We hope you will find this page one day!</p>
</div>
  
</body>
</html>

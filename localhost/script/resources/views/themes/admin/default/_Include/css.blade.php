<style type="text/css">

.coder{
  background: #000 !important;
  color: #fff !important;
  padding: 5px !important;
}

@foreach($langs as $lang)
@if( Config::get('app.locale')==$lang->language)
@if($lang->rtl=="Yes")
h1, h2, h3, h4, h5, h6 {
    text-align: right !important;
}
.footer-wrap {
    text-align: center !important;
}
.brand-logo a {
    box-shadow: -13px 1px 25px rgb(0 0 0 / 10%) !important;
}
.left-side-bar {
    right: 0 !important;
}
.timeline .timeline-date {
    text-align: right  right: 0 !important;
}
.weight-500 {
    width: 100% !important;
}
.padding-bottom-30 {
    width: 100% !important;
}
.main-container {
    padding: 90px 290px 20px 90px !important;
    padding-left: 25px !important;
}
.header {
    width: calc(100% - 0px)!important;
}
div.dataTables_wrapper div.dataTables_filter label {
    text-align: right !important;
    margin-top: 10px !important;
}
.sidebar-menu .dropdown-toggle {
    text-align: right !important;
}
.btn {
    float: left !important;
    text-align: right !important;
}
.select2-results__option[aria-selected] {
    text-align: right !important;
}
table.dataTable {
    text-align: right !important;
}

 .sidebar-menu .dropdown-toggle:after {
 right: 150px !important;
}

.modal-header .close {
    padding: 5px !important;
    margin: 0px !important;
}

.card-box, .da-card {
    text-align: right !important;
}

.dropdown-menu-icon-list .dropdown-item {
    text-align: right !important;
}
.form-group {
    text-align: right !important;
}
.sidebar-menu .submenu li a {
    text-align: right !important;
}
 .nav.vtabs .nav-link {
    text-align: right !important;
}
@endif
@endif
@endforeach
::-webkit-scrollbar {
  width: 5px;               /* width of the entire scrollbar */
}

::-webkit-scrollbar-track {
  background: #fff;        /* color of the tracking area */
}

::-webkit-scrollbar-thumb {
  background-color: @if(!Auth::guest()){{ Auth::user()->favorite_design }}@else{{$get->style}}@endif;    /* color of the scroll thumb */
}

  .select2-search--dropdown {
    padding: 0px;
    width: 0px;
    height: 0px;
}
.select2-container--default .select2-search--dropdown .select2-search__field {
    border-radius: 0px;
    height: 0px;
    width: 0px;
    font-size: 0px;
    padding: 0px;
}

.loader-13 {
  width: 48px;
  height: 48px;
  border: 3px solid #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
} 
.loader-13::after {
  content: '';  
  box-sizing: border-box;
  position: absolute !important;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 56px;
  height: 56px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-bottom-color: {{$get->load_style}};
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 



.loader-14 {
  width: 48px;
  height: 48px;
  border: 3px solid #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-14::after {
    content: '';  
  box-sizing: border-box;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-bottom-color: {{$get->load_style}};
}
    
@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 


.loader-15 {
  width: 48px;
  height: 48px;
  border: 5px solid #FFF;
  border-bottom-color: {{$get->load_style}};
  border-radius: 50%;
  display: inline-block;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 


.loader-16 {
  width: 48px;
  height: 48px;
  border: 2px solid #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-16::after,
.loader-16::before {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 0;
  top: 0;
  background: {{$get->load_style}};
  width: 6px;
  height: 6px;
  transform: translate(150%, 150%);
  border-radius: 50%;
}
.loader-16::before {
  left: auto;
  top: auto;
  right: 0;
  bottom: 0;
  transform: translate(-150%, -150%);
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 



.loader-17 {
  width: 48px;
  height: 48px;
  border: 3px solid #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-17::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 56px;
  height: 56px;
  border-radius: 50%;
  border: 3px solid;
  border-color: {{$get->load_style}} transparent;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 


.loader-18 {
  width: 48px;
  height: 48px;
  border: 3px solid #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-18::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 3px solid;
  border-color: {{$get->load_style}} transparent;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 




.loader-21 {
  width: 48px;
  height: 48px;
  border: 3px dotted #FFF;
  border-style: solid solid dotted dotted;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 2s linear infinite;
}
.loader-21::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  border: 3px dotted {{$get->load_style}};
  border-style: solid solid dotted;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  animation: rotationBack 1s linear infinite;
  transform-origin: center center;
}
    
@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 
@keyframes rotationBack {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-360deg);
  }
} 



.loader-22 {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  border: 3px solid;
  border-color: #FFF #FFF transparent transparent;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-22::after,
.loader-22::before {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  border: 3px solid;
  border-color: transparent transparent {{$get->load_style}};
  width: 40px;
  height: 40px;
  border-radius: 50%;
  box-sizing: border-box;
  animation: rotationBack 0.5s linear infinite;
  transform-origin: center center;
}
.loader-22::before {
  width: 32px;
  height: 32px;
  border-color: #FFF #FFF transparent transparent;
  animation: rotation 1.5s linear infinite;
}
    
@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 
@keyframes rotationBack {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-360deg);
  }
}
    

.loader-23 {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: inline-block;
  border-top: 4px solid #FFF;
  border-right: 4px solid transparent;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-23::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 0;
  top: 0;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border-bottom: 4px solid {{$get->load_style}};
  border-left: 4px solid transparent;
}
@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 


.loader-24 {
  width: 48px;
  height: 48px;
  border-width: 3px;
  border-style: dashed solid  solid dotted;
  border-color: {{$get->load_style}} transparent {{$get->load_style}};
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-24::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 20px;
  top: 31px;
  border: 10px solid transparent;
  border-right-color: {{$get->load_style}};
  transform: rotate(-40deg);
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 


.loader-25 {
  border: 2px solid #FFF;
  width: 48px;
  height: 48px;
  background: {{$get->load_style}};
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 2s linear infinite;
}
.loader-25::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 50%;
  top: 50%;
  border: 24px solid;
  border-color: transparent #FFF;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 


 

.loader-27 {
  width: 48px;
  height: 48px;
  background: #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-27::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 6px;
  top: 10px;
  width: 12px;
  height: 12px;
  color: {{$get->load_style}};
  background: currentColor;
  border-radius: 50%;
  box-shadow: 25px 2px, 10px 22px;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 



.loader-28 {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: block;
  margin:15px auto;
  position: relative;
  box-sizing: border-box;
  animation: zeroRotation 1s linear infinite alternate;
}
.loader-28::after,
.loader-28::before {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 0;
  top: 0;
  background: {{$get->load_style}};
  width: 16px;
  height: 16px;
  transform: translate(-50%, 50%);
  border-radius: 50%;
}
.loader-28::before {
  left: auto;
  right: 0;
  transform: translate(50%, 100%);
}

@keyframes zeroRotation {
  0% {
    transform: scale(1) rotate(0deg);
  }
  100% {
    transform: scale(0) rotate(360deg);
  }
} 




.loader-29 {
  width: 48px;
  height: 48px;
  display: inline-block;
  position: relative;
}
.loader-29::after,
.loader-29::before {
  content: '';
  width: 48px;
  height: 48px;
  border: 2px solid #FFF;
  position: absolute;
  left: 0;
  top: 0;
  box-sizing: border-box;
  animation: rotation 2s ease-in-out infinite;
}
.loader-29::after {
  border-color: {{$get->load_style}};
  animation-delay: 1s;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 



.loader-30 {
  width: 48px;
  height: 48px;
  display: inline-block;
  position: relative;
}
.loader-30::after,
.loader-30::before {
  content: '';  
  box-sizing: border-box;
  width: 48px;
  height: 48px;
  border: 2px solid #FFF;
  position: absolute;
  left: 0;
  top: 0;
  animation: scaleOut 2s ease-in-out infinite;
}
.loader-30::after {
  border-color: {{$get->load_style}};
  animation-delay: 1s;
}

@keyframes scaleOut {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}


.loader-31 {
  width: 48px;
  height: 48px;
  border: 5px dotted {{$get->load_style}};
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 2s linear infinite;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 



 

 


.loader-41 {
  width: 48px;
  height: 48px;
  display: inline-block;
  position: relative;
  background: {{$get->load_style}};
  box-sizing: border-box;
  animation: flipX 1s linear infinite;
}

@keyframes flipX {
  0% {
    transform: perspective(200px) rotateX(0deg) rotateY(0deg);
  }
  50% {
    transform: perspective(200px) rotateX(-180deg) rotateY(0deg);
  }
  100% {
    transform: perspective(200px) rotateX(-180deg) rotateY(-180deg);
  }
}
    

 
    



.loader-44 {
  width: 48px;
  height: 48px;
  display: inline-block;
  position: relative;
  background: {{$get->load_style}};
  box-sizing: border-box;
  animation: zeroRotation 1s ease infinite alternate-reverse;
}

@keyframes zeroRotation {
  0% {
    transform: scale(1) rotate(0deg);
  }
  100% {
    transform: scale(0) rotate(360deg);
  }
}
    


 




.loader-56 {
  width: 100%;
  height: 4.8px;
  display: inline-block;
  position: relative;
  background: rgba(255, 255, 255, 0.15);
  overflow: hidden;
}
.loader-56::after {
  content: '';  
  box-sizing: border-box;
  width: 0;
  height: 4.8px;
  background: {{$get->load_style}};
  position: absolute;
  top: 0;
  left: 0;
  animation: animFw 10s linear infinite;
}

@keyframes animFw {
  0% {
    width: 0;
  }
  100% {
    width: 100%;
  }
}




.loader-57 {
  width: 100%;
  height: 4.8px;
  display: inline-block;
  position: relative;
  background: rgba(255, 255, 255, 0.15);
  overflow: hidden;
}
.loader-57::after {
  content: '';
  width: 192px;
  height: 4.8px;
  background: {{$get->load_style}};
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  animation: animloader 2s linear infinite;
}

@keyframes animloader {
  0% {
    left: 0;
    transform: translateX(-100%);
  }
  100% {
    left: 100%;
    transform: translateX(0%);
  }
}
    


 


.loader-59 {
  width: 100%;
  height: 4.8px;
  display: inline-block;
  position: relative;
  overflow: hidden;
}
.loader-59::after {
  content: '';  
  width: 96px;
  height: 4.8px;
  background: {{$get->load_style}};
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  animation: hitZak 0.6s ease-in-out infinite alternate;
}

@keyframes hitZak {
  0% {
    left: 0;
    transform: translateX(-1%);
  }
  100% {
    left: 100%;
    transform: translateX(-99%);
  }
}
    


 


.loader-19 {
  width: 48px;
  height: 48px;
  border: 3px solid #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-19::after {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 0;
  top: 0;
  background: {{$get->load_style}};
  width: 16px;
  height: 16px;
  transform: translate(-50%, 50%);
  border-radius: 50%;
}
    
@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 

.loader-20 {
  width: 48px;
  height: 48px;
  border: 2px solid #FFF;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-20::after,
.loader-20::before {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  left: 0;
  top: 0;
  background: {{$get->load_style}};
  width: 6px;
  height: 6px;
  border-radius: 50%;
}
.loader-20::before {
  left: auto;
  top: auto;
  right: 0;
  bottom: 0;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 


.loader-12 {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  display: block;
  margin:15px auto;
  position: relative;
  background: #FFF;
  box-shadow: -24px 0 #FFF, 24px 0 #FFF;
  box-sizing: border-box;
  animation: shadowPulse 2s linear infinite;
}

@keyframes shadowPulse {
  33% {
    background: #FFF;
    box-shadow: -24px 0 {{$get->load_style}}, 24px 0 #FFF;
  }
  66% {
    background: {{$get->load_style}};
    box-shadow: -24px 0 #FFF, 24px 0 #FFF;
  }
  100% {
    background: #FFF;
    box-shadow: -24px 0 #FFF, 24px 0 {{$get->load_style}};
  }
}


.loader-11 {
  width: 48px;
  height: 48px;
  display: block;
  margin:15px auto;
  position: relative;
  color: #FFF;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}
.loader-11::after,
.loader-11::before {
  content: '';  
  box-sizing: border-box;
  position: absolute;
  width: 24px;
  height: 24px;
  top: 50%;
  left: 50%;
  transform: scale(0.5) translate(0, 0);
  background-color: #FFF;
  border-radius: 50%;
  animation: animloader 1s infinite ease-in-out;
}
.loader-11::before {
  background-color: {{$get->load_style}};
  transform: scale(0.5) translate(-48px, -48px);
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 
@keyframes animloader {
    50% {
      transform: scale(1) translate(-50%, -50%);
}
}

.load-wrapp {
  margin: 0 10px 10px 0;
  padding: 20px 20px 20px;
  border-radius: 5px;
  text-align: center;
  background-color: #d8d8d800;
}

.load-wrapp p {
  padding: 0 0 20px;
}
.load-wrapp:last-child {
  margin-right: 0;
}

.line {
  display: inline-block;
  width: 15px;
  height: 15px;
  border-radius: 15px;
  background-color: {{$get->load_style}};
}

.ring-1 {
  width: 10px;
  height: 10px;
  margin: 0 auto;
  padding: 10px;
  border: 7px dashed {{$get->load_style}};
  border-radius: 100%;
}

.ring-2 {
  position: relative;
  width: 45px;
  height: 45px;
  margin: 0 auto;
  border: 4px solid {{$get->load_style}};
  border-radius: 100%;
}

.ball-holder {
  position: absolute;
  width: 12px;
  height: 45px;
  left: 17px;
  top: 0px;
}

.ball {
  position: absolute;
  top: -11px;
  left: 0;
  width: 16px;
  height: 16px;
  border-radius: 100%;
  background: #4282b3;
}

.letter-holder {
  padding: 16px;
}

.letter {
  float: left;
  font-size: 14px;
  color: #777;
}

.square {
  width: 12px;
  height: 12px;
  border-radius: 4px;
  background-color: {{$get->load_style}};
}

.spinner {
  position: relative;
  width: 45px;
  height: 45px;
  margin: 0 auto;
}

.bubble-1,
.bubble-2 {
  position: absolute;
  top: 0;
  width: 25px;
  height: 25px;
  border-radius: 100%;
  background-color: {{$get->load_style}};
}

.bubble-2 {
  top: auto;
  bottom: 0;
}

.bar {
  float: left;
  width: 15px;
  height: 6px;
  border-radius: 2px;
  background-color: {{$get->load_style}};
}

/* =Animate the stuff
------------------------ */
.load-1 .line:nth-last-child(1) {
  animation: loadingA 1.5s 1s infinite;
}
.load-1 .line:nth-last-child(2) {
  animation: loadingA 1.5s 0.5s infinite;
}
.load-1 .line:nth-last-child(3) {
  animation: loadingA 1.5s 0s infinite;
}

.load-2 .line:nth-last-child(1) {
  animation: loadingB 1.5s 1s infinite;
}
.load-2 .line:nth-last-child(2) {
  animation: loadingB 1.5s 0.5s infinite;
}
.load-2 .line:nth-last-child(3) {
  animation: loadingB 1.5s 0s infinite;
}

.load-3 .line:nth-last-child(1) {
  animation: loadingC 0.6s 0.1s linear infinite;
}
.load-3 .line:nth-last-child(2) {
  animation: loadingC 0.6s 0.2s linear infinite;
}
.load-3 .line:nth-last-child(3) {
  animation: loadingC 0.6s 0.3s linear infinite;
}

.load-4 .ring-1 {
  animation: loadingD 1.5s 0.3s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
}

.load-5 .ball-holder {
  animation: loadingE 1.3s linear infinite;
}

.load-6 .letter {
  animation-name: loadingF;
  animation-duration: 1.6s;
  animation-iteration-count: infinite;
  animation-direction: linear;
}

.l-1 {
  animation-delay: 0.48s;
}
.l-2 {
  animation-delay: 0.6s;
}
.l-3 {
  animation-delay: 0.72s;
}
.l-4 {
  animation-delay: 0.84s;
}
.l-5 {
  animation-delay: 0.96s;
}
.l-6 {
  animation-delay: 1.08s;
}
.l-7 {
  animation-delay: 1.2s;
}
.l-8 {
  animation-delay: 1.32s;
}
.l-9 {
  animation-delay: 1.44s;
}
.l-10 {
  animation-delay: 1.56s;
}

.load-7 .square {
  animation: loadingG 1.5s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
}

.load-8 .line {
  animation: loadingH 1.5s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
}

.load-9 .spinner {
  animation: loadingI 2s linear infinite;
}
.load-9 .bubble-1,
.load-9 .bubble-2 {
  animation: bounce 2s ease-in-out infinite;
}
.load-9 .bubble-2 {
  animation-delay: -1s;
}

.load-10 .bar {
  animation: loadingJ 2s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
}

@keyframes loadingA {
  0 {
    height: 15px;
  }
  50% {
    height: 35px;
  }
  100% {
    height: 15px;
  }
}

@keyframes loadingB {
  0 {
    width: 15px;
  }
  50% {
    width: 35px;
  }
  100% {
    width: 15px;
  }
}

@keyframes loadingC {
  0 {
    transform: translate(0, 0);
  }
  50% {
    transform: translate(0, 15px);
  }
  100% {
    transform: translate(0, 0);
  }
}

@keyframes loadingD {
  0 {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(180deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes loadingE {
  0 {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes loadingF {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes loadingG {
  0% {
    transform: translate(0, 0) rotate(0deg);
  }
  50% {
    transform: translate(70px, 0) rotate(360deg);
  }
  100% {
    transform: translate(0, 0) rotate(0deg);
  }
}

@keyframes loadingH {
  0% {
    width: 15px;
  }
  50% {
    width: 35px;
    padding: 4px;
  }
  100% {
    width: 15px;
  }
}

@keyframes loadingI {
  100% {
    transform: rotate(360deg);
  }
}

@keyframes bounce {
  0%,
  100% {
    transform: scale(0);
  }
  50% {
    transform: scale(1);
  }
}

@keyframes loadingJ {
  0%,
  100% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(80px, 0);
    background-color: #f5634a;
    width: 25px;
  }
}


	
  /*!
Version: 3.0.0
Author: Ankit Hingarajiya - DeskApp
*/
@foreach($langs as $lang)
@if( Config::get('app.locale')==$lang->language)
.btn-primary {
    background-color: {{$lang->style}} !important;
    border-color: {{$lang->style}} !important;
}

table.dataTable tbody tr.selected, table.dataTable.display tbody tr:hover.selected, table.dataTable.hover tbody tr:hover.selected {
    background-color: {{$lang->style}} !important;
}

.page-item.active .page-link {
    border-color: {{$lang->style}} !important;
    background-color: {{$lang->style}} !important;
}

@charset "utf-8";body,html{-webkit-font-smoothing:antialiased;width:100%;height:100%}html{-webkit-text-size-adjust:none;-moz-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}input[type=submit]{-webkit-appearance:none}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}body{margin:0;padding:0;font-family:'Inter',sans-serif;font-weight:400;min-height:100%;color:#031e23;background:#ecf0f4}a{text-decoration:none;color:#555}a:focus,a:hover{outline:0;text-decoration:none}:focus{outline:0}img{border:0;vertical-align:top;max-width:100%;height:auto}input,select,textarea{resize:none;font-family:'Inter',sans-serif}select,textarea{outline:0}.slick-slide,a,button,input{outline:0!important}button::-moz-focus-inner{border:0}h1,h2,h3,h4,h5,h6{margin:0;padding:0;font-weight:700;color:#202342;font-family:'Inter',sans-serif}ol,p,ul{padding:0}ol,ul{margin:0;list-style:none}p{margin:0 0 15px}.container{max-width:1120px;width:100%}.pre-loader{background:#fff;background-position:center center;background-size:13%;position:fixed;left:0;top:0;width:100%;height:100%;z-index:12345;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.pre-loader .loader-logo{padding-bottom:15px}.pre-loader .loader-progress{height:8px;border-radius:15px;max-width:200px;margin:0 auto;display:block;background:#ecf0f4;overflow:hidden}.pre-loader .bar{width:0%;height:8px;display:block;background:{{$lang->style}}}.pre-loader .percent{text-align:center;font-size:24px;display:none}.pre-loader .loading-text{text-align:center;font-size:18px;font-weight:500;padding-top:15px}.mx-w-150{max-width:150px}.mx-h-300{max-height:300px}.mx-h-350{max-height:350px}.mx-h-380{max-height:380px}.mx-h-400{max-height:400px}.mx-h-450{max-height:450px}.pd-0{padding:0}.padding-top-10{padding-top:10px}.padding-top-30{padding-top:30px}.padding-bottom-30{padding-bottom:30px}.pd-5{padding:5px}.pd-10{padding:10px}.pd-20{padding:20px}.chat-box .chat-desc ul,.pd-ltr-20{padding:20px 20px 0}.pd-30{padding:30px}.pb-10{padding-bottom:10px}.pb-15{padding-bottom:15px}.pb-20{padding-bottom:20px}.pb-30{padding-bottom:30px}.pt-10{padding-top:10px}.pt-15{padding-top:15px}.pt-20{padding-top:20px}.pt-30{padding-top:30px}.pr-10{padding-right:10px}.pr-20{padding-right:20px}.pr-30{padding-right:30px}.pl-10{padding-left:10px}.pl-20{padding-left:20px}.pl-30{padding-left:30px}.margin-5{margin:5px}.mt-15{margin-top:15px}.mt-30{margin-top:30px}.device-manage-progress-chart ul li,.mb-30{margin-bottom:30px}.mb-20{margin-bottom:20px}.mb-15{margin-bottom:15px}.mb-10{margin-bottom:10px}.mb-5{margin-bottom:5px!important}.mr-10{margin-right:10px}.mr-20{margin-right:20px}.font-30{font-size:30px;line-height:1.33em}.font-24{font-size:24px;line-height:1.42em}.font-20{font-size:20px;line-height:1.5em}.font-18{font-size:18px;line-height:1.65em}.font-16{font-size:16px;line-height:1.62em}.font-14{font-size:14px;line-height:1.71em}.font-12{font-size:12px;line-height:1.83em}.h1{font-size:40px;font-weight:700;line-height:1.3}.h1,.h2,.h3{color:#1b3133;font-family:'Inter',sans-serif}.h2{font-size:28px;font-weight:700;line-height:1.35}.h3{font-size:24px;line-height:1.5}.h3,.h4{font-weight:700}.h4,.h5,.page-header h4{font-size:20px;line-height:1.35;color:#1b3133;font-family:'Inter',sans-serif}.h5{font-size:18px;font-weight:600}.line-height-1{line-height:1}.line-height-1-2{line-height:1.2}.line-height-1-3{line-height:1.3}.weight-300{font-weight:300}.weight-400{font-weight:400}.weight-500{font-weight:500}.weight-600{font-weight:600}.weight-700{font-weight:700}.weight-800{font-weight:800}.height-auto{height:auto}.height-100-p{height:100%}.width-50-p{width:50%}.width-box{width:50px;height:50px}.max-width-100{max-width:100px}.max-width-150{max-width:150px}.max-width-200{max-width:200px}.max-width-300{max-width:300px}.max-width-400{max-width:400px}.max-width-500{max-width:500px}.max-width-600{max-width:600px}.max-width-700{max-width:700px}.max-width-800{max-width:800px}.max-width-900{max-width:900px}.max-width-1000{max-width:1000px}.min-height-200px{min-height:200px}.bg-cover{background-size:cover!important}.bg-light-blue{background-color:#e1e1f5}.color-light-blue{color:#e1e1f5}.bg-light-gray{background-color:#ecf0f4}.bg-white{background:#fff}.color-white{color:#fff}.bg-light-green{background-color:#41ccba}.text-light-green{color:#00e091}.bg-blue{background-color:{{$lang->style}}}.text-blue{color:{{$lang->style}}}.text-light-blue{color:#2976aa}.bg-light-orange{background-color:#f56767}.text-light-orange{color:#f56767}.bg-light-purple{background-color:#a683eb}.text-light-purple{color:#a683eb}.bg-orange{background-color:#f5956c}.text-orange{color:#f5956c}.text-yellow{color:#ecc72f}.text-green{color:#46be8a}.text-orange-50{color:#f2a654}.text-blue-50{color:#62a8ea}.text-red-50{color:#e14e50}.mCSB_inside>.mCSB_container{margin-right:0}.border-radius-0{border-radius:0}.border-radius-4{border-radius:4px}.border-radius-5{border-radius:5px}.border-radius-6{border-radius:6px}.border-radius-8{border-radius:8px}.border-radius-10{border-radius:10px}.border-radius-100,.user-info-dropdown .dropdown-toggle .user-icon img{border-radius:100%}.box-shadow{-webkit-box-shadow:0 0 28px rgba(0,0,0,.08);box-shadow:0 0 28px rgba(0,0,0,.08)}.wave1{background-image:url(../images/wave.png);background-size:cover;background-position:center bottom;background-repeat:no-repeat}.card-box,.da-card{background-color:#fff;border-radius:10px;-webkit-box-shadow:0 0 28px rgba(0,0,0,.08);box-shadow:0 0 28px rgba(0,0,0,.08)}.card-img-top{border-radius:10px 10px 0 0}.card-img-bottom{border-radius:0 0 10px 10px}.card-img{border-radius:10px}.card-title{font-size:18px;font-weight:600}.card-header{font-weight:500;font-size:16px}.card-text,.price del{font-size:15px}.badge{padding:.75em}.badge-sm{padding:.45em .55em;font-size:60%}.page-link:focus{-webkit-box-shadow:none;box-shadow:none}.highcharts-root{font-family:'Inter',sans-serif!important}.bootstrap-select .dropdown-toggle{height:45px;padding-right:30px;font-size:14px;font-weight:400}.bootstrap-select.form-control-sm .dropdown-toggle{height:38px;padding-right:30px}.bootstrap-select .dropdown-toggle .filter-option{height:auto}.bootstrap-select .dropdown-toggle.btn-light{background-color:transparent;border-color:#d4d4d4}.bootstrap-select .dropdown-toggle.btn-light:not(:disabled):not(.disabled):active{background-color:transparent;border-color:#d4d4d4}.dropdown-toggle::after{content:"\f107";font-family:"FontAwesome";vertical-align:unset;width:auto;height:auto;border:0!important}.bootstrap-select .dropdown-toggle::after{position:absolute;right:10px}.dropdown.show>.dropdown-toggle::after{content:"\f106"}.dropdown-toggle.no-arrow:after{display:none}.dropdown-menu{border:0;padding:0;overflow:hidden;border-radius:10px;-webkit-box-shadow:0 0 28px rgba(0,0,0,.1);box-shadow:0 0 28px rgba(0,0,0,.1)}.dropdown-item{font-size:15px;font-weight:400;padding:.657rem 1rem;letter-spacing:0;color:#444;font-family:'Inter',sans-serif;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.dropdown-item:focus,.dropdown-item:hover{background:#ecf0f4;color:{{$lang->style}}}.form-group{margin-bottom:20px}.form-group>label{font-weight:500;font-size:14px}.custom-file-input,.custom-file-label,.custom-select,.form-control{font-family:'Inter',sans-serif;color:#131e22;font-weight:400;height:45px;border-color:#d4d4d4;letter-spacing:.035em;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.custom-file-input,.custom-select,.form-control{font-size:14px}.form-control.form-control-sm{height:38px}.form-control.form-control-line{border-left:0;border-right:0;border-top:0;border-radius:0}.custom-file-label{padding-top:.475rem}.custom-file-label::after{height:100%;padding-top:.475rem}textarea.form-control{height:180px}.custom-file-input:focus,.custom-select:focus,.form-control:focus{color:#131e22;border-color:{{$lang->style}};-webkit-box-shadow:0 0 28px rgba(0,0,0,.1);box-shadow:0 0 28px rgba(0,0,0,.1)}.form-control.height-auto{height:auto}.input-group{margin-bottom:25px}.input-group.custom>.custom-select,.input-group.custom>.form-control{width:100%}.input-group.custom>.custom-select:not(:first-child),.input-group.custom>.form-control:not(:first-child){border-radius:.25rem;padding-left:50px}.input-group.custom>.custom-select:not(:last-child),.input-group.custom>.form-control:not(:last-child){border-radius:.25rem;padding-right:50px}.input-group-prepend.custom{position:absolute;left:0;top:0;z-index:12;height:100%}.input-group-append.custom{position:absolute;right:0;top:0;z-index:12;height:100%}.input-group-text{border:0;background:0 0}.input-group-text i{font-size:20px}.form-control:focus~.input-group-append .fa{color:{{$lang->style}}}.form-control-lg,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text{height:50px;font-size:16px}.has-success{color:#28a745}.form-control-success{border-color:#28a745;background-image:url(../images/check-mark-green.png);background-repeat:no-repeat;background-position:center right 10px;background-size:20px 20px}.form-control-success:focus{border-color:#28a745;-webkit-box-shadow:0 0 0 1px #28a745;box-shadow:0 0 0 1px #28a745}.has-warning{color:#ffc107}.form-control-warning{border-color:#ffc107;background-image:url(../images/caution-sign.png);background-repeat:no-repeat;background-position:center right 10px;background-size:20px 20px}.form-control-warning:focus{border-color:#ffc107;-webkit-box-shadow:0 0 0 1px #ffc107;box-shadow:0 0 0 1px #ffc107}.has-danger{color:#dc3545}.form-control-danger{border-color:#dc3545;background-image:url(../images/cross.png);background-repeat:no-repeat;background-position:center right 10px;background-size:14px 14px}.form-control-danger:focus{border-color:#dc3545;-webkit-box-shadow:0 0 0 1px #dc3545;box-shadow:0 0 0 1px #dc3545}.btn{font-family:'Inter',sans-serif;letter-spacing:0;font-weight:500;padding:.438rem 1rem}.btn-lg{padding:.657rem 1rem}.btn-group-lg>.btn,.btn-lg{font-size:18px}.btn-group-sm>.btn,.btn-sm{padding:.4rem .8rem;font-size:14px}.btn.focus,.btn:focus{-webkit-box-shadow:none!important;box-shadow:none!important}.btn-rounded{border-radius:25px}.breadcrumb{background:0 0;padding:.75rem 0}.breadcrumb-item.active{color:{{$lang->style}};font-weight:500}.breadcrumb-item a{color:#031e23}.breadcrumb-item+.breadcrumb-item::before{font-family:"FontAwesome";content:"\f105"}.customscroll-10-p>.mCustomScrollBox>.mCSB_container{padding:10px}.datepicker{z-index:1060}.datepicker--day-name,.datepicker--time-current-hours,.datepicker--time-current-minutes{color:{{$lang->style}}}.datepicker--nav-action path{stroke:{{$lang->style}}}.datepicker--cell.-focus-,.datepicker--nav-action:hover,.datepicker--nav-title:hover{background:#e1e1f5;color:{{$lang->style}}}.datepicker--cell.-selected-{color:#fff}.datepicker--time-current-hours:after,.datepicker--time-current-minutes:after{display:none}.datepicker-inline .datepicker{margin:0 auto}.form-control.time-picker-default:disabled,.form-control.time-picker-default[readonly],.form-control.time-picker:disabled,.form-control.time-picker[readonly]{background:#fff}.custom-control{padding-left:35px;cursor:pointer;padding-bottom:5px}.custom-control-label{cursor:pointer;font-weight:400}.custom-control-label::before{width:20px;height:20px;top:2px;left:-30px;background-color:transparent;border:2px solid {{$lang->style}}}.custom-control-label::after{width:20px;height:20px;left:-30px;background-size:60%;top:2px}.custom-control-input:focus~.custom-control-label::before{-webkit-box-shadow:none;box-shadow:none;background-color:none}.custom-checkbox .custom-control-input:checked~.custom-control-label::before{background-color:{{$lang->style}}}.custom-checkbox .custom-control-input:checked~.custom-control-label::after{background-image:url(../images/check-mark.png);background-repeat:no-repeat;background-position:center center}.custom-radio .custom-control-input:checked~.custom-control-label::before{background-color:{{$lang->style}}}.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before{border:2px solid transparent}.select2-container .select2-selection--single{height:45px;border-color:#d4d4d4;outline:0;letter-spacing:.035em;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.select2-container--default.select2-container--focus .select2-selection--multiple,.select2-dropdown{border-color:#d4d4d4}.select2-container--default .select2-selection--single .select2-selection__rendered{line-height:43px}.select2-container--default .select2-selection--single .select2-selection__arrow{height:43px}.select2-container--default .select2-selection--multiple .select2-selection__choice{background-color:{{$lang->style}};color:#fff;border-color:{{$lang->style}}}.select2-container--default .select2-selection--multiple{min-height:45px;border-color:#d4d4d4}.select2-container--default .select2-selection--multiple .select2-selection__rendered{padding-top:3px}.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{color:#fff}.select2-dropdown{-webkit-box-shadow:0 0 28px rgba(0,0,0,.1);box-shadow:0 0 28px rgba(0,0,0,.1)}.select2-search--dropdown{padding:10px}.select2-container--default .select2-search--dropdown .select2-search__field{border-radius:5px}.bootstrap-select .dropdown-menu li .dropdown-item.active:hover,.select2-container--default .select2-results__option[aria-selected=true]{background-color:{{$lang->style}};color:#fff}.select2-container--default .select2-results__option--highlighted[aria-selected]{background-color:{{$lang->style}}}.bootstrap-select.btn-group .dropdown-menu.inner,table.dataTable>tbody>tr.child ul.dtr-details .dtr-title{display:block}.bootstrap-select .dropdown-toggle:focus{outline:0!important}.bootstrap-select .dropdown-header{color:#222;font-weight:700;font-size:15px}.bootstrap-select .dropdown-menu li .dropdown-item:hover{color:{{$lang->style}}}.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark{top:13px}.bootstrap-select .bs-ok-default:after{border-width:0 2px 2px 0}.dropup .dropdown-toggle::after{content:"\f107";font-family:"FontAwesome";vertical-align:unset;width:auto;height:auto;border:0!important}.bootstrap-select.btn-group .dropdown-menu li a{display:block;font-size:15px;font-weight:400;padding:.55rem 1rem;color:#667f87;font-family:'Inter',sans-serif;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.bootstrap-select.btn-group .dropdown-menu li.divider{border:1px solid #eaeaea}.bootstrap-select.btn-group .dropdown-menu li.selected a{background:#e1e1f5;color:#131e22}.bootstrap-select.btn-group .dropdown-menu li.disabled a{color:#cecece}.bootstrap-select.btn-group .dropdown-menu li a:hover{background:#e1e1f5;color:#131e22}.bootstrap-select.btn-group .dropdown-menu li a span.check-mark{background:url(../images/check-mark-green.png);width:15px;height:15px;background-size:contain}.label-info{background-color:#009efb}.bootstrap-tagsinput .tag{display:inline-block;padding:2px 6px;margin:2px;font-size:15px;border-radius:2px}.docs-options .dropdown-menu{max-height:250px;overflow:auto}.docs-buttons{padding-top:15px}.docs-buttons label,.notification-list ul li a p,.project-info-right p{margin-bottom:0}.docs-buttons .btn{margin-bottom:5px}.table thead th{font-weight:600;font-size:15px;border-bottom:0;padding-left:1rem}.table td,.table th{vertical-align:middle}.table td{font-size:14px;font-weight:500;padding:1rem}.table-striped tbody tr:nth-of-type(odd){background:#eaeef2}table.dataTable.display tbody tr.odd,table.dataTable.display tbody tr:hover,table.dataTable.hover tbody tr:hover,table.dataTable.stripe tbody tr.odd{background:#ecf0f3!important}table.dataTable tbody tr.selected,table.dataTable.display tbody tr:hover.selected,table.dataTable.hover tbody tr:hover.selected{background-color:#181f48!important;color:#fff}table.dataTable.display tbody tr.odd.selected,table.dataTable.stripe tbody tr.odd.selected{background-color:{{$lang->style}}!important}table.dataTable thead .sorting:after,table.dataTable thead .sorting:before,table.dataTable thead .sorting_asc:after,table.dataTable thead .sorting_asc:before,table.dataTable thead .sorting_asc_disabled:after,table.dataTable thead .sorting_asc_disabled:before,table.dataTable thead .sorting_desc:after,table.dataTable thead .sorting_desc:before,table.dataTable thead .sorting_desc_disabled:after,table.dataTable thead .sorting_desc_disabled:before{font-family:"dropways";font-size:14px}table.dataTable thead .sorting:before,table.dataTable thead .sorting_asc:before,table.dataTable thead .sorting_asc_disabled:before,table.dataTable thead .sorting_desc:before,table.dataTable thead .sorting_desc_disabled:before{content:"\eabb"}table.dataTable thead .sorting:after,table.dataTable thead .sorting_asc:after,table.dataTable thead .sorting_asc_disabled:after,table.dataTable thead .sorting_desc:after,table.dataTable thead .sorting_desc_disabled:after{content:"\eaba";right:.2em}.blog-list ul li:hover .blog-caption h4 a,.fontawesome-icon-list .fa-hover:hover a,table.dataTable thead .sorting_asc:before,table.dataTable thead .sorting_desc:after{color:{{$lang->style}}}table.dataTable>tbody>tr.child ul.dtr-details{white-space:normal}.dataTables_length,.dt-buttons,div.dataTables_wrapper div.dataTables_filter,div.dataTables_wrapper div.dataTables_info,div.dataTables_wrapper div.dataTables_paginate{padding-left:15px;padding-right:15px}.dt-checkbox,.dt-checkbox input{width:20px;height:20px;position:relative}.dt-checkbox input{position:absolute;opacity:0;z-index:1;left:0;top:0}.dt-checkbox span,.dt-checkbox span:before{width:20px;height:20px;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.dt-checkbox span{position:relative;display:block;border:1px solid #9e9e9e;border-radius:4px}.dt-checkbox span:before{content:"";background:url(../images/check-mark.png) no-repeat;position:absolute;left:0;top:-1px;background-size:12px 12px;background-position:center center;-webkit-transform:scale(0);transform:scale(0)}.dt-checkbox input:checked~span{background:{{$lang->style}};border-color:{{$lang->style}};color:#fff}.dt-checkbox input:checked~span:before{-webkit-transform:scale(1);transform:scale(1)}.plyr{border-radius:10px;-webkit-box-shadow:0 0 10px 2px rgba(0,0,0,.15);box-shadow:0 0 10px 2px rgba(0,0,0,.15)}.popover-header{font-weight:500}.list-group-flush .list-group-item{border-top:0;margin-bottom:0}.docs-cropped .modal-body>canvas,.docs-cropped .modal-body>img,.img-preview>img{max-width:100%}.apexcharts-svg *{font-family:'Inter',sans-serif!important}table.dataTable.dtr-inline.collapsed>tbody>tr[role=row]>td:first-child:before,table.dataTable.dtr-inline.collapsed>tbody>tr[role=row]>th:first-child:before{-webkit-box-shadow:none;box-shadow:none;border:0;border-radius:0;font-family:"FontAwesome";background:0 0;content:"\f107";color:#444;font-size:23px;left:7px;top:50%;margin-top:-7px}table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td:first-child:before,table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th:first-child:before{content:"\f106";background:0 0}.header{position:fixed;height:70px;width:calc(100% - 280px);background:#fff;right:0;top:0;z-index:123;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out;-webkit-box-shadow:0 0 25px rgba(0,0,0,.1);box-shadow:0 0 25px rgba(0,0,0,.1)}.header-left{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;height:100%;width:50%}.brand-logo a .dark-logo,.header-left .menu-icon,.header-left .search-toggle-icon,.sidebar-light .brand-logo a .light-logo,.sidebar-menu .submenu li.dropdown:before{display:none}.header-left .header-search{width:100%;padding-left:20px}.header-left .header-search .form-group,.sidebar-menu .submenu li{position:relative}.header-left .header-search .search-icon{position:absolute;left:17px;top:12px;font-size:20px;color:#777}.header-left .header-search .dropdown{position:static;right:0;top:0;padding-right:10px}.header-left .header-search .dropdown .dropdown-toggle{position:absolute;right:0;top:0;width:45px;height:45px;font-size:20px;line-height:45px;text-align:center;border-radius:0 .25rem .25rem 0;color:#777;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.contact-directory-box:hover .view-contact a,.header-left .header-search .dropdown .dropdown-toggle:hover,.header-left .header-search .dropdown.show .dropdown-toggle{background:{{$lang->style}};color:#fff}.header-left .header-search .dropdown .dropdown-menu{width:100%;min-width:100%;margin-top:5px;padding:20px}.header-left .header-search .search-input{padding-left:50px;padding-right:55px}.header-right{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;height:70px;width:50%}.header-left .brand-logo{max-width:180px;display:block}.header-right .brand-logo a{padding:0 6px}.header-right .menu-icon{position:relative;right:0;float:left;display:none}.user-info-dropdown{padding:5px 10px 5px 0}.user-info-dropdown .dropdown-toggle{display:block;padding:5px 0;font-size:16px}.user-info-dropdown .dropdown-toggle .user-icon{width:40px;height:40px;font-size:24px;background:#ebeff3;color:{{$lang->style}};line-height:30px;text-align:center;display:inline-block;vertical-align:middle;border-radius:100%;-webkit-box-shadow:0 0 10px rgba(0,0,0,.18);box-shadow:0 0 10px rgba(0,0,0,.18)}.user-info-dropdown .dropdown-toggle .user-name{font-weight:500;display:inline-block;vertical-align:middle;margin-left:5px;color:#131e22;font-family:'Inter',sans-serif}.user-info-dropdown .dropdown-menu{min-width:185px}.dropdown-menu-icon-list .dropdown-item{position:relative;padding-left:45px}.dropdown-menu-icon-list .dropdown-item i{position:absolute;left:16px;top:50%;font-size:18px;-webkit-transform:translate(0,-50%);transform:translate(0,-50%)}.user-notification{float:right;margin-right:10px;padding:22px 5px 10px 0}.user-notification .dropdown-toggle{font-size:20px;padding:10px;color:#555;position:relative}.user-notification .dropdown-toggle .badge{position:absolute;right:8px;top:10px;background:#f5678a;width:5px;height:5px;display:block;padding:0}.user-notification .dropdown-menu{width:400px;padding:20px 10px}.notification-list ul li a{display:block;position:relative;padding:10px 15px 10px 75px;min-height:75px;color:#666;font-size:14px;font-weight:500;font-family:'Inter',sans-serif;border-radius:5px}.notification-list ul li a img{width:50px;height:50px;position:absolute;left:10px;top:13px;border-radius:10px;-webkit-box-shadow:1px 2px 13px rgba(0,0,0,.2);box-shadow:1px 2px 13px rgba(0,0,0,.2)}.notification-list ul li a h3{font-size:16px;color:#202342;font-weight:700;text-transform:capitalize;font-family:'Inter',sans-serif;padding-bottom:5px}.notification-list ul li a h3 span{float:right;font-size:12px;font-weight:500;padding-top:2px}.header-dark .header,.header-dark .header-left .header-search{background:#142127}.header-dark .header .user-info-dropdown .dropdown-toggle,.header-dark .header .user-info-dropdown .dropdown-toggle .user-name,.header-dark .menu-icon,.header-dark .search-toggle-icon,.header-dark .user-notification .dropdown-toggle{color:#ecf0f4}.header-dark .header .header-left .header-search .search-input{background:rgba(236,236,236,.1);border-color:transparent;color:#ecf0f4}.header-dark .header .header-left .header-search .search-input:focus{border-color:#4b4d50}.header-dark .header .header-left .header-search .search-input::-webkit-input-placeholder{opacity:1;color:#bfc4ca}.header-dark .header .header-left .header-search .search-input:-moz-placeholder,.header-dark .header .header-left .header-search .search-input::-moz-placeholder{opacity:1;color:#bfc4ca}.header-dark .header .header-left .header-search .search-input:-ms-input-placeholder{opacity:1;color:#bfc4ca}.header-dark .header .header-left .header-search .search-icon{color:#ecf0f4}.footer-wrap{width:100%;position:relative;text-align:center;font-weight:500}.footer-wrap a{color:{{$lang->style}};text-decoration:underline}.menu-icon,.search-toggle-icon{width:47px;height:47px;font-size:22px;line-height:1;color:#555;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.brand-logo{width:280px;height:70px;border-bottom:1px solid rgba(0,0,0,.1)}.brand-logo a{display:-webkit-box;display:-ms-flexbox;display:flex;vertical-align:middle;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative;height:100%;font-size:22px;color:#fff;letter-spacing:.05em;font-weight:500;line-height:45px;font-family:'Inter',sans-serif;padding:0 0px}.brand-logo a .light-logo,.sidebar-light .brand-logo a .dark-logo{display:block}.brand-logo a span{display:block;vertical-align:middle;margin-left:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.brand-logo a .svg,.brand-logo a img{max-width:180px;display:block;height:auto}.left-side-bar,.left-side-bar:before{position:fixed;left:0;top:0;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.left-side-bar{width:280px;height:100vh;z-index:1000;background:#fff}.left-side-bar .mCS-dark-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background:#ecf0f4}.left-side-bar:before{content:"";z-index:-1;width:100%;height:100%;background:rgba(0,0,0,.3);display:none}.left-side-bar.open{left:0}.left-side-bar .menu-block{height:calc(100vh - 70px)}.left-side-bar .close-sidebar{font-size:18px;color:#888;cursor:pointer;position:absolute;right:10px;top:20px;display:none}.sidebar-menu{padding:0 0 20px}.sidebar-menu .dropdown-toggle{display:block;padding:18px 15px 18px 67px;font-size:16px;color:#000;font-weight:300;letter-spacing:.03em;position:relative;font-family:'Inter',sans-serif;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.sidebar-menu .dropdown-toggle:after{position:absolute;right:15px;font-size:18px}.sidebar-menu.icon-style-2 .dropdown-toggle:after{content:"\f217";font-family:Ionicons}.sidebar-menu.icon-style-2 .dropdown.show .dropdown-toggle:after{content:"\f208"}.sidebar-menu.icon-style-3 .dropdown-toggle:after{content:"\f101"}.sidebar-menu.icon-style-3 .dropdown.show .dropdown-toggle:after{content:"\f103"}.sidebar-menu .dropdown-toggle:hover,.sidebar-menu .show>.dropdown-toggle{background:{{$lang->style}};color:#fff}.sidebar-menu .dropdown-toggle .micon{position:absolute;left:10px;width:42px;height:42px;font-size:24px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:{{$lang->style}};background-color:transparent;top:50%;text-align:center;border-radius:4px;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out;-webkit-transform:translate(0,-50%);transform:translate(0,-50%)}.sidebar-light .sidebar-menu>ul>li>.dropdown-toggle.active .micon,.sidebar-menu .dropdown-toggle:hover .micon,.sidebar-menu .show>.dropdown-toggle .micon{color:#fff}.sidebar-menu .dropdown-toggle .new{font-size:24px;line-height:14px;display:inline-block;vertical-align:middle}.sidebar-menu .dropdown-toggle .new:before{line-height:14px}.sidebar-menu .submenu{position:relative;width:100%;display:none}.sidebar-menu .submenu:before{content:"";width:1px;height:100%;position:absolute;left:31px;top:0;display:none;background:0 0;border-left:2px dashed {{$lang->style}}}.sidebar-menu .submenu li>a:before{content:"\f208";position:absolute;line-height:1;left:28px;top:50%;-webkit-transform:translate(0,-50%);transform:translate(0,-50%);font-family:Ionicons}.sidebar-menu.icon-list-style-2 .submenu li>a:before{content:"\f10c";font-family:FontAwesome}.sidebar-menu.icon-list-style-3 .submenu li>a:before{content:"\eb1d";font-family:dropways}.sidebar-menu.icon-list-style-4 .submenu li>a:before{content:"\edd2";font-family:dropways}.sidebar-menu.icon-list-style-5 .submenu li>a:before{content:"\ee07";font-family:dropways}.sidebar-menu.icon-list-style-6 .submenu li>a:before{content:"\ee36";font-family:dropways}.mobile-menu-overlay,.sidebar-menu .submenu li a,.sidebar-menu .submenu li>a:before{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.sidebar-menu .submenu li a{display:block;padding:18px 15px 18px 60px;font-size:14px;color:#656565;font-weight:300;letter-spacing:.03em;position:relative;font-family:'Inter',sans-serif}.chat-box .chat-desc ul li.upload-file.admin_chat .upload-file-box .left .overlay,.chat-box .chat-desc ul li.upload-file.admin_chat .upload-file-box .right a,.sidebar-menu .submenu li.dropdown>a:before,.sitemap ul li.child:after,.sitemap ul li.child:before{display:none}.sidebar-menu .submenu li a.dropdown-toggle{padding:18px 15px 18px 60px;font-size:16px}.sidebar-menu .submenu.child{padding-left:15px}.sidebar-menu .submenu li:hover>a:before{left:18px}.sidebar-menu .submenu li a.active,.sidebar-menu .submenu li a:hover{color:#fff;background-color:rgba(0,0,0,.4)}.sidebar-menu>ul>li>.dropdown-toggle.active{background-color:rgba(0,0,0,.4)}.sidebar-light .sidebar-menu>ul>li>.dropdown-toggle.active{background-color:#142127;color:#fff}.sidebar-light .sidebar-menu .dropdown-toggle:hover .micon,.sidebar-light .sidebar-menu .show>.dropdown-toggle .micon,.sidebar-menu .dropdown-toggle.active,.sidebar-menu .dropdown-toggle.active .micon{color:#fff}.mobile-menu-overlay{position:fixed;left:0;top:0;width:100%;height:100%;background:#121421;opacity:.6;z-index:123;background-size:20px;background-position:98% 15px;display:none}.sidebar-light .left-side-bar{background:#fff}.sidebar-light .sidebar-menu .dropdown-toggle,.sidebar-light .sidebar-menu .submenu li a{color:#0b132b;font-weight:400}.sidebar-light .sidebar-menu .dropdown-toggle .micon{color:#0b132b}.sidebar-light .sidebar-menu .dropdown-toggle:hover,.sidebar-light .sidebar-menu .show>.dropdown-toggle,.sidebar-light .sidebar-menu .submenu li a.active,.sidebar-light .sidebar-menu .submenu li a:hover{color:#fff;background-color:#142127}.sidebar-light .menu-block .mCS-dark-2.mCSB_scrollTools .mCSB_draggerRail{background-color:#0e132b}.sidebar-menu .dropdown-divider{margin:20px 0;border-color:rgba(255,255,255,.2);border-width:2px}.sidebar-light .sidebar-menu .dropdown-divider{border-color:rgba(0,0,0,.2)}.sidebar-menu .sidebar-small-cap{font-size:14px;letter-spacing:.05em;text-transform:uppercase;font-weight:600;color:#fff;padding:0 15px 10px}.sidebar-light .sidebar-menu .sidebar-small-cap{color:{{$lang->style}}}.login-header{position:relative;padding:0 15px;background-color:#fff;z-index:1}.login-header .brand-logo{width:auto;border:0}.login-menu a{font-size:20px;font-weight:600;color:{{$lang->style}}}.login-wrap{height:calc(100% - 70px);overflow:auto;padding:30px 0}body.IE .login-wrap,body.IE .register-page-wrap{display:block!important;padding:0}body.IE .login-wrap .container,body.IE .register-page-wrap .container{padding-top:10vh;padding-bottom:10vh}.login-wrap .container,.register-page-wrap .container{max-width:1300px}.login-wrap .mCustomScrollBox{height:auto;width:100%}.login-box{max-width:400px;width:100%;padding:40px 20px;margin:5px auto}.select-role{margin-bottom:25px;padding:0 5px}.select-role .btn-group{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:0 -10px}.select-role .btn-group .btn{margin:0 5px;border:1px solid #d4d4d4;text-align:left;padding-left:60px;padding-top:10px;padding-bottom:10px;width:calc(33.3% - 10px);border-radius:5px!important;font-size:16px;line-height:1.3;font-weight:700;color:#333;position:relative}.select-role .btn-group .btn.active,.select-role .btn-group .btn.active:focus,.select-role .btn-group .btn.focus.active{background-color:rgba(27,0,255,.05);border-color:rgba(27,0,255,.5);color:{{$lang->style}}}.select-role .btn-group .btn .icon{position:absolute;left:15px;width:30px;height:30px;top:50%;margin-top:-15px}.select-role .btn-group .btn .icon .svg{width:30px;height:30px}.select-role .btn-group .btn span{display:block;font-size:14px;font-weight:500;color:#222}.login-box .login-title{padding:0 0 10px;margin-bottom:30px}.login-box .login-title h2{font-size:24px;font-weight:700}.login-box .login-img{display:block;margin:0 auto 20px;max-width:100px}.forgot-password{text-align:right}.register-page-wrap{height:calc(100% - 70px);padding:30px 0}.register-page-wrap .register-box{max-width:410px;margin:0 auto}.register-page-wrap,.register-page-wrap .wizard-content .wizard{position:relative;overflow:auto}.register-page-wrap .wizard-content .wizard .steps{position:relative}.register-page-wrap .wizard-content .wizard>.steps .step{position:relative;top:0;left:0;display:block;margin:0 auto;border-width:2px;background-color:#fff;border-color:rgba(24,31,72,.3)}.register-page-wrap .wizard-content .wizard>.steps>ul>li.done>a .step{background:url(../images/tick.svg) no-repeat #ecf0f4;font-size:0;background-size:22px;background-position:center center;border-color:rgba(24,31,72,.3)}.register-page-wrap .wizard-content .wizard.wizard-circle>.steps>ul>li:after,.register-page-wrap .wizard-content .wizard.wizard-circle>.steps>ul>li:before,.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:after,.wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:before{background:rgba(24,31,72,.3)}.wizard-content .wizard.vertical.wizard-circle>.steps>ul>li.current~li:after,.wizard-content .wizard.vertical.wizard-circle>.steps>ul>li.current~li:before{background-color:transparent}.register-page-wrap .wizard-content .wizard>.steps>ul>li.current .step{border-color:{{$lang->style}};color:#181f48;background-color:#fff}.register-page-wrap .wizard-content .wizard>.steps .info,.register-page-wrap .wizard-content .wizard>.steps .step,.register-page-wrap .wizard-content .wizard>.steps>ul>li a{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.register-page-wrap .wizard-content .wizard>.steps .info{display:block;width:100%;padding-top:10px}.register-page-wrap .wizard-content .wizard>.steps>ul{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;height:100%;padding:0 10px}.register-page-wrap .wizard-content .wizard>.steps>ul>li{width:25%}.register-page-wrap .wizard-content .wizard>.steps>ul>li a{padding:20px 10px;margin:0;text-align:center;color:rgba(24,31,72,.6);font-size:11px;font-weight:700}.register-page-wrap .wizard-content .wizard>.steps>ul>li.current>a,.register-page-wrap .wizard-content .wizard>.steps>ul>li.done>a{color:#181f48}.register-page-wrap .wizard-content .wizard>.content{overflow:hidden;padding:15px 15px 0;min-height:320px}.register-page-wrap .wizard-content .wizard>.actions{padding:0 15px 20px;text-align:right}.register-info li{margin-bottom:15px;font-size:14px}.main-container{padding:80px 20px 2px 300px}.page-header .dropdown-menu{border-radius:5px}.page-header{background-color:#fff;border-radius:10px;-webkit-box-shadow:0 0 28px rgba(0,0,0,.08);box-shadow:0 0 28px rgba(0,0,0,.08);margin-bottom:30px;padding:20px}.page-header .row{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.page-header h4{font-weight:600;padding-bottom:5px}.page-header .breadcrumb{padding:0;margin:0}.search-icon-box,.timeline ul{position:relative}.search-icon-box input{height:70px;width:100%;font-size:20px;padding:0 60px 0 30px;font-weight:300;border:0;color:#fff;background:#6209ab}.search-icon-box input::-webkit-input-placeholder{opacity:1;color:#fff}.search-icon-box input:-moz-placeholder,.search-icon-box input::-moz-placeholder{opacity:1;color:#fff}.search-icon-box input:-ms-input-placeholder{opacity:1;color:#fff}.search-icon-box .search_icon{position:absolute;font-size:24px;line-height:1;right:20px;top:26px;color:#fff}.fontawesome-icon-list{padding-top:20px}.fontawesome-icon-list.custom-icon-list,.sitemap ul li.child h5{padding-top:0}.fontawesome-icon-list .fa-hover,.fontawesome-icon-list a{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.fontawesome-icon-list .fa-hover{padding-top:13px;padding-bottom:13px;margin-bottom:10px;cursor:pointer;border-radius:8px}.fontawesome-icon-list .fa-hover:hover{background:rgba(68,66,87,.13);-webkit-box-shadow:0 0 18px rgba(0,0,0,.08);box-shadow:0 0 18px rgba(0,0,0,.08)}.fontawesome-icon-list a{display:block;font-size:14px;font-weight:500;position:relative;padding-left:45px;color:#131e22}.fontawesome-icon-list a .icon-copy{position:absolute;left:10px;top:4px;font-size:18px}.fontawesome-icon-list.custom-icon-list a{font-size:14px;line-height:24px}.fontawesome-icon-list.custom-icon-list a .icon-copy{font-size:24px;line-height:1;top:0}.foundation-icon.fontawesome-icon-list a .icon-copy{top:0;font-size:24px;line-height:24px}.ionicons-list li{width:8.3%;text-align:center}.ionicons-list.fontawesome-icon-list a{padding-left:0}.ionicons-list.fontawesome-icon-list a .icon-copy{font-size:24px;left:0;position:relative}.wysihtml5-toolbar .dropdown-menu a{display:block;font-size:15px;font-weight:400;padding:.55rem 1rem;color:#667f87;font-family:'Inter',sans-serif;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.html-editor textarea.form-control{height:300px;font-weight:400}.copy-notification{color:#fff;background-color:rgba(0,0,0,.8);padding:12px 20px;border-radius:30px;position:fixed;top:50%;left:50%;width:150px;margin-top:-30px;margin-left:-85px;display:none;text-align:center}.error-page h1,.error-page-wrap{font-size:16px;line-height:26px;font-weight:700;color:#222}.error-page h1{font-size:210px;text-shadow:2px 2px 0 #181f48,4px 4px 0 #fff,8px 8px 0 #181f48;line-height:1;color:#181f48}.error-page h3{font-size:18px;text-transform:uppercase;font-weight:700;margin-bottom:30px;padding-top:30px}.project-info{padding-bottom:15px}.project-info-left{float:left;width:60px;padding-top:10px}.project-info-left .icon{width:50px;height:50px;border-radius:100%;line-height:50px;text-align:center;font-size:20px}.project-info-right{float:right;width:calc(100% - 60px);text-align:right}.device-manage-progress-chart ul li:last-child{margin-bottom:0}.device-manage-progress-chart .device-name{width:75px;float:left;text-align:right}.device-manage-progress-chart .device-total{float:left;width:45px;font-size:14px}.device-manage-progress-chart .device-progress{float:left;width:calc(100% - 120px);padding:7px 10px 0}.device-manage-progress-chart .device-progress .grand_total{float:right}.device-manage-progress-chart .device-progress .progress{margin-bottom:0;height:10px}.device-manage-progress-chart .device-progress .progress .progress-bar{height:100%}.device-manage-progress-chart .device-progress .progress .progress-bar.window{background:#00bcf2}.device-manage-progress-chart .device-progress .progress .progress-bar.mac{background:#027496}.device-manage-progress-chart .device-progress .progress .progress-bar.android{background:#0059b2}.device-manage-progress-chart .device-progress .progress .progress-bar.linux{background:#8ab1b7}.to-do-list ul li{padding:15px}.to-do-list ul li,.to-do-list ul li:hover{background:#ecf0f4}.to-do-list ul li:nth-child(2n){background:#fff}#browservisit path.jvectormap-region.jvectormap-element{stroke-width:.5px;stroke:#667f87}.jvectormap-goback,.jvectormap-zoomin,.jvectormap-zoomout{background:#667f87}.browser-visits ul li{margin-bottom:40px}.browser-visits ul li .icon,.browser-visits ul li .visit{width:50px}.browser-visits ul li .browser-name{width:calc(100% - 100px);font-size:14px;font-weight:600}.docs-preview{margin-right:-1rem}.img-preview{float:left;margin-bottom:.5rem;margin-right:.5rem;overflow:hidden}.preview-lg{height:9rem;width:16rem}.preview-md{height:4.5rem;width:8rem}.preview-sm{height:2.25rem;width:4rem}.preview-xs{height:1.125rem;margin-right:0;width:2rem}.btn-list .btn{margin:5px}#login-modal .modal-dialog{max-width:380px}#login-modal .login-box{margin:0}.confirmation-btn{width:50px;height:50px;margin:0 auto}.da-card .da-card-content{padding:20px 15px;background:#fff;font-size:14px}.da-card,.da-card .da-card-photo{position:relative;overflow:hidden}.da-card .da-card-photo img{position:relative;display:block;width:100%;-webkit-transition:all .4s linear;transition:all .4s linear}.da-card .da-overlay{position:absolute;width:100%;height:100%;left:0;top:0;opacity:0;overflow:hidden;background:rgba(19,30,34,.7);-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.da-card .da-overlay.da-slide-left{left:-100%}.da-card .da-card-photo:hover .da-overlay.da-slide-left{left:0}.da-card .da-overlay.da-slide-bottom,.da-card .da-overlay.da-slide-left,.da-card .da-overlay.da-slide-right,.da-card .da-overlay.da-slide-top{-webkit-transition:all .5s ease-in-out;transition:all .5s ease-in-out}.da-card .da-overlay.da-slide-right{right:-100%;left:inherit}.da-card .da-card-photo:hover .da-overlay.da-slide-right{right:0}.da-card .da-overlay.da-slide-bottom,.da-card .da-overlay.da-slide-top{top:-100%}.da-card .da-card-photo:hover .da-overlay.da-slide-bottom,.da-card .da-card-photo:hover .da-overlay.da-slide-top{top:0}.da-card .da-overlay.da-slide-bottom{top:100%}.da-card .da-card-photo:hover img{-webkit-transform:scale(1.2) translateZ(0);transform:scale(1.2) translateZ(0)}.da-card .da-card-photo:hover .da-overlay{opacity:1;filter:alpha(opacity=100);-webkit-transform:translateZ(0);transform:translateZ(0)}.da-card .da-card-photo:hover .da-social{opacity:1}.da-card .da-social{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:100%;height:100%;padding:20px;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#fff;opacity:0;-webkit-transition:all .4s ease-in-out;transition:all .4s ease-in-out}.da-card .da-social h5{position:absolute;top:0;white-space:nowrap;overflow:hidden;width:100%;text-overflow:ellipsis;font-size:16px;font-weight:500}.chat-box .chat-desc ul li .chat-img,.da-card .da-social ul li{float:left}.da-card .da-social ul li a{display:block;width:45px;height:45px;border:1px solid #fff;line-height:43px;font-size:20px;text-align:center;color:#fff;-webkit-box-shadow:0 0 0 1px #fff;box-shadow:0 0 0 1px #fff;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.da-card .da-social ul li:first-child a{border-top-left-radius:5px;border-bottom-left-radius:5px}.da-card .da-social ul li:last-child a{border-top-right-radius:5px;border-bottom-right-radius:5px}.da-card .da-social ul li a:hover{background:#fff;color:{{$lang->style}}}.nav-tabs.customtab .nav-item.show .nav-link,.nav-tabs.customtab .nav-link.active{color:{{$lang->style}};border:0;border-bottom:2px solid {{$lang->style}}}.nav-tabs.customtab .nav-item{margin-bottom:0}.nav-tabs.customtab .nav-link{color:#181f48;border:0;border-bottom:2px solid transparent;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.nav-tabs.customtab .nav-link:focus,.nav-tabs.customtab .nav-link:hover{color:{{$lang->style}};border:0;border-bottom:2px solid {{$lang->style}}}.nav.vtabs{border-bottom:0;border-right:1px solid #dee2e6;height:100%}.nav.vtabs .nav-link{border-radius:0}.nav.vtabs .nav-item.show .nav-link,.nav.vtabs .nav-link.active{border-right:0;border-color:#dee2e6;color:{{$lang->style}}}.nav.vtabs.nav-pills .nav-item.show .nav-link,.nav.vtabs.nav-pills .nav-link.active{border-right:0;border-color:#dee2e6;color:#fff}.nav.vtabs.customtab .nav-item.show .nav-link,.nav.vtabs.customtab .nav-link.active{border-color:{{$lang->style}}}.timeline ul:before{content:"";width:3px;height:100%;background:{{$lang->style}};position:absolute;left:150px}.timeline ul li{position:relative;padding-left:180px;padding-top:20px;padding-bottom:30px}.timeline ul li:before{content:"";position:absolute;top:30px;left:142px;width:18px;height:18px;background:#fff;border-radius:100%;-webkit-box-shadow:0 0 0 3px {{$lang->style}};box-shadow:0 0 0 3px {{$lang->style}}}.timeline .timeline-date{position:absolute;left:0;top:20px;width:120px;background:{{$lang->style}};color:#fff;font-size:16px;padding:6px 10px;border-radius:5px}.list-unstyled>li>ul{margin-left:35px}.list-unstyled>li>ul li{list-style:circle}.sitemap{border-left:2px dashed {{$lang->style}}}.sitemap h5{padding:15px;margin-bottom:10px;font-weight:600;color:{{$lang->style}}}.sitemap ul,.sitemap ul li{position:relative;padding-left:25px}.sitemap ul li{min-height:40px;padding-left:35px;margin-bottom:10px;padding-top:2px}.sitemap ul li:last-child{margin-bottom:0}.sitemap ul li:before{content:"";background:#fff;width:20px;height:20px;border:2px solid {{$lang->style}};border-radius:100%;position:absolute;left:6px;top:5px}.sitemap ul li:after{content:"";width:25px;left:-25px;top:40%;position:absolute;border-top:2px dashed {{$lang->style}}}.blog-list ul li,.sitemap ul li a{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.fc th,.sitemap ul li a{font-weight:500;font-size:15px}.sitemap ul li a{display:inline-block;color:#0b132b}.sitemap ul li a:hover{color:#000}.sitemap ul li.child{padding-left:0;padding-top:0;border-left:2px dashed #2976aa}.calendar-wrap .fc-event.ui-draggable-handle{padding:5px;margin-bottom:5px}.fc th{padding:10px!important;background:#e1e1f5;line-height:1}.fc-day-grid-event .fc-time{font-weight:500!important}.fc-day-grid-event .fc-content{padding:3px 9px}.fc-header-toolbar h2{font-size:18px;padding-top:7px}.blog-wrap{padding-bottom:50px}.blog-list ul li{border-radius:10px;margin-bottom:40px;-webkit-box-shadow:0 0 28px rgba(0,0,0,.08);box-shadow:0 0 28px rgba(0,0,0,.08);background:#fff}.blog-list ul li:hover{-webkit-box-shadow:0 0 48px rgba(0,0,0,.25);box-shadow:0 0 48px rgba(0,0,0,.25)}.blog-list ul li .blog-img{height:100%;min-height:300px;border-radius:10px 0 0 10px;background-size:cover!important}.blog-list ul li .blog-caption{padding:20px;font-size:16px;line-height:1.5;color:#031e23}.blog-list ul li .blog-caption h4{font-size:17px;line-height:1.5;font-weight:700;margin-bottom:12px}.blog-list ul li .blog-caption h4 a,.product-caption h4 a{color:#131e22}.latest-post ul li{padding:.75rem 1.25rem;font-size:14px;color:#78909c;border-bottom:1px solid rgba(0,0,0,.125)}.latest-post ul li h4{font-size:14px;font-weight:600;line-height:1.5;margin-bottom:5px}.blog-list ul li .blog-caption h4 a,.latest-post ul li h4 a,.product-box,.product-caption h4 a{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.latest-post ul li h4 a{display:block;color:#131e22}.latest-post ul li h4 a:hover{color:{{$lang->style}}}.blog-detail,.product-box{background:#fff}.blog-detail .blog-caption{padding:20px;font-size:16px;color:#78909c}.blog-detail ul li{position:relative;padding-left:25px;margin-bottom:5px;line-height:28px}.blog-detail ul li:before{content:"\f101";font-family:"FontAwesome";position:absolute;color:#405158;left:0;top:0}.blog-detail ol,.blog-detail ul{padding-left:15px}.blog-detail ol>li{position:relative;padding-left:20px;margin-bottom:5px}.blog-detail ol,.blog-detail ol>li>ol,.blog-detail ol>li>ol>li>ol{counter-reset:my-badass-counter}.blog-detail ol>li>ol>li:before{content:counter(my-badass-counter,lower-alpha);counter-increment:my-badass-counter}.blog-detail ol>li:before,.blog-detail ol>li>ol>li>ol>li:before{content:counter(my-badass-counter,lower-roman);counter-increment:my-badass-counter}.blog-detail ol>li:before{content:counter(my-badass-counter);position:absolute;left:0;top:0;color:#405158;font-weight:500}.gallery-wrap>ul>li,.product-list ul li{margin-bottom:30px}.product-box{border-radius:10px;-webkit-box-shadow:0 0 28px rgba(0,0,0,.08);box-shadow:0 0 28px rgba(0,0,0,.08);height:100%}.producct-img{overflow:hidden}.producct-img img{position:relative;border-radius:10px 10px 0 0;-webkit-transition:all .8s ease-in-out;transition:all .8s ease-in-out}.product-list ul li:hover .producct-img img{-webkit-transform:scale(1.3);transform:scale(1.3)}.product-caption{padding:20px}.product-caption h4{font-size:18px;margin-bottom:8px}.product-caption .btn{border-radius:22px}.price{font-size:15px;font-weight:600;padding-bottom:15px;color:#78909c}.price ins{text-decoration:none;display:inline-block;margin-left:10px;color:#131e22}.product-slider{margin-bottom:20px}.slider-arrow .slick-arrow,.slider-arrow .slick-arrow:before{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.slider-arrow .slick-arrow{position:absolute;bottom:0;width:40px;height:40px;top:50%;margin-top:-20px;border:1px solid {{$lang->style}};background:{{$lang->style}};border-radius:0;cursor:pointer;font-size:0;text-align:center}.slider-arrow .slick-arrow:hover{border-color:#2a2d31}.slider-arrow .slick-arrow:hover:before{color:#fff}.slider-arrow .slick-arrow:before{font-family:"dropways";font-size:16px;color:#fff;line-height:38px}.slider-arrow .slick-arrow.slick-prev{z-index:12;left:15px}.slider-arrow .slick-arrow.slick-prev:before{content:"\eabc"}.slider-arrow .slick-arrow.slick-next{right:15px}.slider-arrow .slick-arrow.slick-next:before{content:"\eabd"}.product-slide-nav{padding:10px}.product-detail-desc{font-size:16px;line-height:1.5}.faq-wrap .card{margin-bottom:20px;border:0;border-radius:10px;overflow:hidden;-webkit-box-shadow:0 0 28px rgba(0,0,0,.08);box-shadow:0 0 28px rgba(0,0,0,.08)}.faq-wrap .card-header{background:#fff;text-align:left;border:0;padding:0}.faq-wrap .card-header .btn{background:0 0;border-radius:0;text-align:left;font-size:16px;font-weight:500;padding:16px 40px 16px 16px;position:relative;white-space:normal;color:{{$lang->style}};-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.faq-wrap .card-header .btn.collapsed{color:#222}.faq-wrap .card-header .btn:after{content:"\f209";font-family:"Ionicons";position:absolute;right:10px;color:{{$lang->style}};top:16px}.faq-wrap .card-header .btn.collapsed:after{content:"\f218"}.faq-wrap .card-body{padding-top:0}.pricing-table-wrap .card{border:0;-webkit-box-shadow:0 0 48px rgba(0,0,0,.2);box-shadow:0 0 48px rgba(0,0,0,.2)}.pricing-table-wrap .btn{padding-left:30px;padding-right:30px}.pricing-table-wrap .list-group-flush .list-group-item{background:0 0}.pricing-card{text-align:center}.pricing-card .price-title,.pricing-card .pricing-icon{padding-bottom:30px;text-align:center}.pricing-card .pricing-icon img{margin-top:-30px}.pricing-card .price-title{text-transform:uppercase;font-size:16px;font-weight:500;color:{{$lang->style}};letter-spacing:.15em}.pricing-card .pricing-price{font-size:60px;line-height:1;font-weight:400;padding-bottom:40px;padding-top:20px;color:{{$lang->style}}}.pricing-card .pricing-price sub{font-size:16px;font-weight:400;color:#fd486e}.pricing-card .pricing-price sup{font-size:20px;font-weight:400;color:#fd486e;top:10px;vertical-align:top}.pricing-card .text{padding-bottom:30px}.pricing-card .cta{max-width:170px;margin:0 auto;-webkit-transform:translate(0,50%);transform:translate(0,50%)}.pricing-card .cta .btn{display:block;text-align:center}.pricing-card-style2,.profile-setting .profile-edit-list>li{padding:20px}.pricing-card-style2 .pricing-card-header{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-bottom:15px;border-bottom:2px solid #f0f2f7}.pricing-card-style2 .pricing-card-header .left{width:60%}.pricing-card-style2 .pricing-card-header .left h5{color:{{$lang->style}};font-size:18px;font-weight:700}.pricing-card-style2 .pricing-card-header .left p,.pricing-points ul li{font-size:14px;font-weight:500;margin-bottom:0}.pricing-card-style2 .pricing-card-header .right{width:40%;text-align:right;color:#000;font-size:18px;line-height:1.4;font-weight:700}.pricing-card-style2 .pricing-card-header .right span{display:block;font-size:12px}.pricing-card-style2 .pricing-card-body{padding-top:30px;padding-bottom:10px}.pricing-points ul li{padding:0 30px 0 0;margin-bottom:20px;color:#000;position:relative}.pricing-points ul li:after{content:"\f121";font-family:Ionicons;font-size:18px;line-height:1;color:#1061e4;position:absolute;right:0;top:0}.pricing-card-style2 .cta{max-width:170px;margin:0 auto;padding-top:10px;padding-bottom:20px}.pricing-card-style2 .cta .btn{display:block;text-align:center}.profile-photo{width:160px;height:160px;margin:0 auto 15px;position:relative}.profile-photo .edit-avatar{position:absolute;right:-15px;top:0;width:30px;height:30px;line-height:30px;font-size:14px;text-align:center;-webkit-box-shadow:0 2px 4px rgba(0,0,0,.4);box-shadow:0 2px 4px rgba(0,0,0,.4)}.contact-directory-box .contact-avatar span img,.profile-photo .avatar-photo,.profile-photo .edit-avatar{border-radius:100%}.profile-info,.profile-skills,.profile-social{border-top:2px dashed #ecf0f4;padding:15px}.profile-info ul li{margin-bottom:15px;font-size:14px;font-weight:500;word-wrap:break-word}.profile-info ul li span{display:block;font-size:14px;color:{{$lang->style}};font-weight:500;padding-bottom:5px}.profile-info ul li:last-child{margin-bottom:0}.profile-social ul li{float:left;margin:5px}.profile-social ul li .btn{padding:0;width:36px;height:36px;text-align:center;line-height:36px}.notification-list.chat-notification-list ul li.active a,.notification-list.chat-notification-list ul li:hover a,.profile-tab .nav-tabs.customtab{background:#fff}.profile-tab .nav-tabs.customtab .nav-link{padding:18px 30px;background:0 0;font-weight:500}.profile-setting{height:100%}.profile-setting .container{max-width:800px}.profile-tab .tab-content{height:calc(100% - 63px)}.profile-setting .profile-edit-list{padding:30px 0;margin:0}.profile-setting .btn-outline-secondary{border-color:#ced4da}.profile-setting .profile-edit-list .form-control{font-weight:400}.task-title{padding-bottom:30px}.task-title a{padding-left:20px;padding-right:20px}.profile-task-wrap .container{max-width:800px}.profile-task-list ul li{position:relative;padding-left:30px;font-size:18px;line-height:24px;color:#263238;margin-bottom:25px}.profile-task-list.close-tasks ul li{color:#90a4ae;text-decoration:line-through}.profile-task-list ul li .task-type{font-size:16px;color:#90a4ae;font-weight:500}.profile-task-list ul li .task-assign{font-size:16px;color:#90a4ae;font-weight:300}.profile-task-list ul li .due-date{display:inline-block;padding-left:10px}.profile-task-list ul li .due-date:before{content:"\f111";font-family:"FontAwesome";display:inline-block;font-size:8px;vertical-align:middle;margin-right:8px;opacity:.5}.profile-task-list ul li .custom-control,.profile-timeline-list ul:before{position:absolute;left:0;top:0;width:100%;height:100%}.profile-task-list ul li .custom-control-label{position:absolute;width:100%;height:100%;left:0}.profile-task-list ul li .custom-control-label::after,.profile-task-list ul li .custom-control-label::before{top:50%;margin-top:-12px;left:0}.task-list-scroll{height:303px}.task-list-form>ul>li{padding:30px 20px;background:#e7eef0;position:relative;border-bottom:2px dashed #2976aa}.task-list-form>ul>li .remove-task{position:absolute;right:22px;top:3px;font-size:18px;color:#2976aa}.task-list-form .form-control{font-weight:400}.task-list-form textarea.form-control{height:80px}.task-list-form .btn-outline-primary{border-color:#ced4da}.add-more-task,.chat-box .chat-desc ul li.admin_chat .chat-body .chat_time{text-align:right}.add-more-task a{display:inline-block;padding:10px;color:#2976aa}.profile-timeline{padding:30px}.profile-timeline .timeline-month{margin-bottom:20px}.profile-timeline .timeline-month h5{font-size:16px;font-weight:700}.profile-timeline-list ul{padding-left:15px;position:relative}.profile-timeline-list ul:before{content:"";width:2px;left:4px;background-color:{{$lang->style}}}.profile-timeline-list ul li{margin-bottom:10px;position:relative;padding-left:100px;line-height:24px;padding-top:8px}.profile-timeline-list ul li p{margin-bottom:5px;font-size:14px;line-height:1.5;font-weight:500}.profile-timeline-list ul li:before{content:"";width:12px;height:12px;border:2px solid {{$lang->style}};border-radius:22px;position:absolute;left:-16px;top:15px;background:{{$lang->style}}}.profile-timeline-list .date{position:absolute;top:8px;left:5px;font-weight:700;font-size:13px}.profile-timeline-list .task-name{text-transform:uppercase;font-weight:600;color:{{$lang->style}};font-size:14px;line-height:22px;position:relative}.profile-timeline-list .task-name i{position:absolute;left:-22px;top:0;font-size:18px}.profile-timeline-list .task-time{color:rgba(24,31,72,.71);font-size:12px;font-weight:700}.contact-directory-list>ul>li{margin-bottom:30px}.contact-directory-box{background:#fff;min-height:400px;-webkit-box-shadow:0 0 28px rgba(0,0,0,.08);box-shadow:0 0 28px rgba(0,0,0,.08);border-radius:10px}.contact-dire-info{padding:30px 25px 20px}.contact-directory-box .contact-avatar span{display:block;margin:0 auto 20px;width:150px;height:150px;-webkit-box-shadow:0 0 10px rgba(0,0,0,.3);box-shadow:0 0 10px rgba(0,0,0,.3);border-radius:100%;overflow:hidden}.contact-directory-box .contact-name,.contact-directory-box .contact-skill{padding-bottom:20px}.contact-directory-box .contact-name h4{font-weight:600;font-size:18px}.contact-directory-box .contact-name p{margin-bottom:2px;color:#7f92a9;font-size:14px}.contact-directory-box .contact-skill .badge{border:1px solid #ced9ee;font-weight:500;font-size:16px;padding:7px 11px;margin:3px 0}.contact-directory-box .contact-skill .badge.badge-primary{background:{{$lang->style}};border-color:{{$lang->style}};-webkit-box-shadow:0 0 10px rgba(0,0,0,.2);box-shadow:0 0 10px rgba(0,0,0,.2)}.contact-directory-box .profile-sort-desc{font-weight:400;color:#6f7c8d}.contact-directory-box .view-contact a{display:block;text-align:center;text-transform:uppercase;font-size:15px;font-weight:600;padding:20px 5px;letter-spacing:.05em;position:relative;border-radius:0 0 6px 6px}.contact-directory-box:hover .view-contact a:before{opacity:0}.contact-directory-box .view-contact a,.contact-directory-box .view-contact a:before,.notification-list.chat-notification-list ul li a{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.contact-directory-box .view-contact a:before{content:"";width:80px;height:1px;background:{{$lang->style}};position:absolute;left:0;right:0;top:0;margin:0 auto}.invoice-wrap{overflow:auto}.invoice-box{background:#fff;width:800px;margin:0 auto;padding:20px}.invoice-header{padding-bottom:30px}.invoice-desc .invoice-sub{width:40%;float:left;padding:8px 15px}.invoice-desc .invoice-hours,.invoice-desc .invoice-rate{width:20%;float:left;padding:8px 15px}.invoice-desc .invoice-subtotal{width:20%;float:right;padding:8px 15px}.invoice-desc .invoice-desc-head{background:#eaeaea;font-weight:500}.invoice-desc .invoice-desc-body{padding-top:15px;min-height:400px}.invoice-desc .invoice-desc-footer .invoice-desc-body{min-height:50px}.invoice-desc .invoice-desc-body ul li{border-bottom:1px solid #eaeaea;padding-bottom:5px}.chat-list{border:1px solid #ecf0f4;border-radius:5px;height:72vh}.chat-search{border-bottom:1px solid #ccc;padding:10px;position:relative}.chat-search>span{position:absolute;left:30px;top:30px;color:#33484f}.chat-search input{height:55px;width:100%;border:0;background:0 0;padding-left:50px;color:#33484f}.chat-list .notification-list{height:calc(100% - 76px);padding:10px}.notification-list.chat-notification-list ul li a{padding-top:16px}.notification-list.chat-notification-list ul li a p,.upload-file-box .right h3{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.notification-list.chat-notification-list ul li a p .fa{font-size:10px}.notification-list.chat-notification-list ul li a img{-webkit-box-shadow:none;box-shadow:none}.chat-detail{height:72vh}.chat-profile-header{padding:10px 30px 10px 20px;border-bottom:1px solid #eff0f4}.chat-profile-header .left{float:left;width:60%}.chat-profile-header .left .chat-profile-photo{float:left;width:90px}.chat-profile-header .left .chat-profile-photo img{width:66px;height:66px;border-radius:100%}.chat-profile-header .left .chat-profile-name{float:left;padding-top:15px}.chat-profile-header .left .chat-profile-name h3{font-size:18px;color:#44aeff}.chat-profile-header .left .chat-profile-name span{font-size:12px;color:#a4a4a4;display:block;margin-bottom:6px}.chat-profile-header .left .chat-profile-name a{font-size:10px;color:#44aeff;display:inline-block}.chat-profile-header .right{float:right;width:40%;padding-top:15px}.chat-profile-header .right .text-light-orange{color:#f56767!important}.chat-box{height:calc(100% - 89px)}.chat-box .chat-desc{height:calc(100% - 86px);padding-bottom:10px}.chat-box .chat-desc ul li{margin-bottom:35px}.chat-box .chat-desc ul li .chat-img img,.upload-file-box .left .overlay a span{width:40px;height:40px;border-radius:100%}.chat-box .chat-desc ul li .chat-body{margin-left:60px}.chat-box .chat-desc ul li .chat-body p{font-size:15px;line-height:24px;color:#33484f;min-height:50px;padding:12px 15px;border:1px solid #ecf0f4;background:#ecf0f4;border-radius:5px}.chat-box .chat-desc ul li .chat-body .chat_time{font-size:12px;color:#a4a4a4}.chat-box .chat-desc ul li.admin_chat .chat-img,.chat-box .chat-desc ul li.upload-file.admin_chat .upload-file-box .left{float:right}.chat-box .chat-desc ul li.admin_chat .chat-body{margin-left:0;margin-right:60px;text-align:right}.chat-box .chat-desc ul li.admin_chat .chat-body p{text-align:right;display:inline-block;background:#e1e1f5;padding:12px 15px;border-radius:5px;position:relative}.chat-box .chat-desc ul li.admin_chat .chat-body p:after{content:"";width:0;height:0;border-top:6px solid transparent;border-bottom:6px solid transparent;border-left:6px solid #389bff;position:absolute;right:-6px;top:16px;opacity:0}.chat-footer{height:86px;border-top:1px solid #eff0f4}.chat-footer .file-upload{float:left;width:55px}.chat-footer .file-upload a{display:block;text-align:center;font-size:20px;color:#222;padding-top:30px;padding-bottom:27px}.chat-footer .chat_text_area{float:left;width:calc(100% - 145px)}.chat-footer .chat_text_area textarea{width:100%;height:78px;border:0;font-size:16px;color:#33484f;padding-top:33px}.chat-footer .chat_send{float:right;width:90px}.chat-footer .chat_send .btn{display:block;width:100%;height:86px;font-size:35px;color:#44aeff;text-decoration:none;font-weight:900;padding:25px 10px 5px}.chat-box .chat-desc ul li.upload-file.admin_chat .upload-file-box .right{float:right;padding-left:0;padding-right:17px}.upload-file-box{padding-bottom:10px}.upload-file-box .left{float:left;position:relative;width:114px;height:84px;overflow:hidden;border-radius:5px}.upload-file-box .left .overlay{background-color:rgba(0,0,0,.5);position:absolute;left:0;top:0;width:100%;height:100%}.upload-file-box .left .overlay a{display:block;width:100%;height:100%}.upload-file-box .left .overlay a span{width:35px;height:35px;display:block;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;background:#fff;color:#222;line-height:35px;text-align:center;font-size:22px}.upload-file-box .right{float:left;width:calc(100% - 114px);padding-left:17px;padding-top:17px}.upload-file-box .right h3{display:block;font-size:14px;color:#000;margin-bottom:5px}.upload-file-box .right a{display:inline-block;color:#1d8df1;font-size:14px}.chat-profile-section{height:calc(100vh - 274px)}.chat-profile-section .chat--profile-desc{height:100%;padding:20px}.wizard-content .wizard>.actions>ul>li>a{background-color:{{$lang->style}};font-weight:600}.wizard-content .wizard>.actions>ul>li>a[href="#previous"]{border-color:{{$lang->style}};border-width:2px;color:{{$lang->style}}}.wizard-content .wizard>.actions>ul>li.disabled>a[href="#previous"]{display:none;border-color:{{$lang->style}}}.widget-style1{padding:10px}.widget-style1 .widget-data{width:calc(100% - 80px);padding:0 5px 0 15px}.widget-style1 .progress-data{width:80px}.widget-style1 .progress-data .apexcharts-canvas{margin:0 auto}.right-sidebar .right-sidebar-body .right-sidebar-body-content,.widget-style2 .widget-data{padding:20px}.widget-style3{padding:0;overflow:hidden}.widget-style3 .widget-data{width:calc(100% - 60px);padding:20px 15px}.widget-style3 .widget-icon{width:60px;font-size:30px;line-height:1;text-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:#334148;color:#fff}.right-sidebar{position:fixed;right:-315px;top:0;width:315px;height:100%;background:#fff;z-index:123;-webkit-box-shadow:0 0 18px rgba(0,0,0,.08);box-shadow:0 0 18px rgba(0,0,0,.08);-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.right-sidebar-visible{right:0}.right-sidebar .sidebar-title{height:70px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px 15px;border-bottom:1px solid #d4d4d4}.right-sidebar .sidebar-title h3{font-weight:600}.right-sidebar .sidebar-title h3 span{font-weight:400;color:#000}.right-sidebar .close-sidebar{font-size:18px;color:#888;cursor:pointer}.right-sidebar .right-sidebar-body{height:calc(100% - 70px);overflow:auto}.sidebar-btn-group{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.sidebar-btn-group .btn{width:48%}.sidebar-radio-group .custom-control-inline{margin-right:0;width:25%;margin-bottom:10px}.bootstrap-tagsinput .label-info{background:{{$lang->style}}}.bootstrap-touchspin .btn{background:{{$lang->style}};height:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding-top:0;padding-bottom:0;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.bootstrap-touchspin .input-group-btn-vertical .btn{height:52%}.bootstrap-touchspin .bootstrap-touchspin-postfix,.bootstrap-touchspin .bootstrap-touchspin-prefix{border-top:1px solid #d4d4d4;border-bottom:1px solid #d4d4d4}.asColorPicker-buttons a,.asColorPicker-gradient-control a{font-size:13px;font-weight:500}.dropzone{border-color:{{$lang->style}}}.dropzone .dz-preview .dz-remove{color:red}.fc-view-container tr:first-child>td>.fc-day-grid-event{background:{{$lang->style}}}.fc-today.alert-info{background:#e0deef}.fc-day-number,.fc-ltr .fc-axis{font-size:13px;font-weight:500}.swal2-popup .swal2-title{font-size:18px;font-weight:600}.swal2-popup .swal2-styled.swal2-confirm{background:#100099}.documentation-wrap{position:relative;height:100%;padding-left:300px}.documentation-wrap .doc-sidebar{position:absolute;left:0;top:0;background:#fff;width:300px;height:100%}.doc-content-wrap{padding:30px}.table-badge{padding:8px 20px;font-size:14px;background:{{$lang->style}};color:#ebecef;font-weight:500}.user-list>ul>li{padding:5px 0}.table-actions{display:-webkit-box;display:-ms-flexbox;display:flex}.table-actions a{display:inline-block;font-size:18px;color:#131e22}.table-actions a+a{margin-left:10px}
@media (min-width:1301px) and (max-width:1400px){.header{width:calc(100% - 250px)}.brand-logo,.left-side-bar{width:250px}.main-container{padding-left:270px}}@media (min-width:1200px) and (max-width:1400px){.device-usage-chart .width-50-p{width:100%}}@media (max-width:1300px){.main-container{padding-left:0;padding-right:0}.header-left .menu-icon{display:-webkit-box;display:-ms-flexbox;display:flex}.header{width:100%}.left-side-bar{left:-281px}.left-side-bar .close-sidebar{display:block}.left-side-bar:before{display:block;opacity:0;visibility:hidden}.left-side-bar.open:before{opacity:1;visibility:visible;display:none}.left-side-bar .brand-logo a{text-align:left;padding:5px 15px}.left-side-bar .brand-logo a .svg,.left-side-bar .brand-logo a img{margin:0}.header-right .brand-logo{display:table}.header-right .menu-icon{display:block;padding-left:15px;padding-top:7px}.footer-wrap{width:100%}.mobile-menu-overlay{display:block;opacity:0;visibility:hidden}.mobile-menu-overlay.show{opacity:.6;visibility:visible}}@media (min-width:1025px){.header-left .header-search{display:block!important}}@media (max-width:1024px){.header{position:relative}.header-left{width:25%}.header-right{width:auto}.main-container{padding-top:10px}.header-left .search-toggle-icon{display:-webkit-box;display:-ms-flexbox;display:flex}.header-left .header-search{padding:15px 20px;position:absolute;left:0;top:100%;background:#fff;display:none}.register-page-wrap .wizard-content .wizard{padding-left:300px}.register-page-wrap .wizard-content .wizard .steps{width:300px}}@media (max-width:991px){.device-usage-chart .width-50-p{width:100%}}@media (max-width:767px){.header{position:fixed;left:0;top:0;-webkit-box-shadow:0 5px 25px rgba(0,0,0,.1);box-shadow:0 5px 25px rgba(0,0,0,.1)}.main-container{padding-top:80px}.login-box{padding:40px 15px}.login-header .brand-logo a img{max-width:150px}.pre-loader{background-size:43%}.xs-pd-20-10{padding:20px 10px}.xs-mb-20{margin-bottom:20px}.h1,h1{font-size:2rem}.h2,h2{font-size:1.6rem}.h4,h4{font-size:1.4rem}.main-container,.timeline ul li{padding-bottom:0}.footer-wrap{position:relative;height:auto}.user-notification{margin-right:5px}.user-notification .dropdown-menu{width:100%;min-width:300px}.user-info-dropdown .dropdown-toggle .user-name{display:none}.page-header{margin-bottom:30px}.forgot-password{text-align:center}.ionicons-list li{width:16.6%}.timeline .timeline-date{position:relative;top:0;margin-bottom:20px;left:35px}.timeline ul:before{left:10px}.timeline ul li{padding-left:0}.timeline ul li:before{left:2px;top:28px}.fc-toolbar .fc-left,.fc-toolbar .fc-right{float:none!important;padding-bottom:10px}.fc-toolbar .fc-left:after,.fc-toolbar .fc-right:after{content:"";clear:both;display:table}.faq-wrap .card-header .btn{font-size:17px}.error-page h1{font-size:150px}}@media (max-width:660px){.docs-buttons .btn-group-crop{display:block}.select-role .btn-group .btn{padding-left:35px;font-size:14px}.select-role .btn-group .btn .icon{left:5px;width:25px;height:25px}.select-role .btn-group .btn .icon .svg{width:25px;height:25px}.forgot-password a{font-size:14px;font-weight:600}.btn-group-lg>.btn,.btn-lg{font-size:16px}.register-page-wrap .wizard-content .wizard{padding-left:0}.register-page-wrap .wizard-content .wizard .steps{display:none}}
@endif
@endforeach
</style>
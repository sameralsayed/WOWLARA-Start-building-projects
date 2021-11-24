<style type="text/css">


	/*
=====
DEPENDENCES
=====
*/

/* 
helper to reset default browser's styles from headings
*/

.r-title{
    margin-top: var(--rTitleMarginTop, 0) !important;
    margin-bottom: var(--rTitleMarginBottom, 0) !important;
}

/* 
helper to hide elements that are available only for screen readers. 
*/

.screen-reader{
  width: var(--screenReaderWidth, 1px) !important;
  height: var(--screenReaderHeight, 1px) !important;
  padding: var(--screenReaderPadding, 0) !important;
  border: var(--screenReaderBorder, none) !important;

  position: var(--screenReaderPosition, absolute) !important;
  clip: var(--screenReaderClip, rect(1px, 1px, 1px, 1px)) !important;
  overflow: var(--screenReaderOverflow, hidden) !important;
}

/*
=====
POPUP
=====
*/

/*
1. Creating the top and bottom gaps for the modal so that content doesn't touches window's edges
*/

.popup:not(:target){
  display: none;
}

.popup:target{
  width: 100%;
  height: 100vh;
  
  display: flex;
 
  position: fixed;
  top: 0;
  right: 0;  
}

.popup::before{
  content: "";
  box-sizing: border-box;
  width: 100%;
  background-color: #ff2d20;

  position: fixed;
  left: 0;
  top: 50%;
}

.popup::after{
  content: "";
  width: 0;
  height: 2px;
  background-color: #ff2d20;

  position: absolute;
  top: 50%;
  left: 0;
  margin-top: -1px;
}

.popup__container{
  box-sizing: border-box;  
  padding: 5% 15%;

  height: calc(100vh - 40px); /* 1 */
  margin: auto; /* 1 */
  overflow: auto; /* 1 */
  overscroll-behavior: contain; /* 1 */
}
h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.popup__title{
  --rTitleMarginBottom: 1.5rem;
  font-size: 3.5rem;
}

.popup__close{
  width: 2rem;
  height: 2rem;

  position: fixed;
  top: 1.5rem;
  right: 1.5rem;

}

/*
animation
*/

.popup::before{
  will-change: height, top;
  animation: open-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) .65s both;
}

.popup::after{
  will-change: width, opacity;
  animation: line-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) both;
}

@keyframes line-animation{

  0%{
    width: 0;
    opacity: 1;
  }

  99%{
    width: 100%;
    opacity: 1;
  }

  100%{
    width: 100%;
    opacity: 0;
  }  
}

@keyframes open-animation{

  0%{
    height: 0;
    top: 50%;
  }

  100%{
    height: 100vh;
    top: 0;
  }
}

.popup__container{
  animation: fade .5s ease-out 1.3s both;
}

@keyframes fade{

  0%{
    opacity: 0;
  }

  100%{
    opacity: 1;
  }
}

/*
=====
DEMO
=====
*/

body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  font-size: 1rem;
  color: #fff;
  background-color: #000;
  margin: 0;
  font-weight: 700;
}

p{
  margin: 0;
  line-height: 1.5;
}

p:nth-child(n+2){
  margin-top: 1rem;
}

.open-popup{
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  padding: .75rem 1.25rem;
  border: 1px solid;
}

.page{
  min-height: 100vh;
  display: flex;
}

.page__container{
  max-width: 1200px;
  padding-left: .75rem;
  padding-right: .75rem;  
  margin: auto;
  text-align: center;
    padding: 50px
}
</style>

<!--
!!!!!!!!!
This demo is created to demonstrate animation of opening modal. Use it for inspiration  only. I use the a element to toggle the state of demo without JS. So DON"T USE it in production. If you want to use this animation you have to replace the element on the <button type="button">.
!!!!!!!!!
-->

<div class="page">

  <div class="page__container">
    <a href="#features" class="open-popup">features</a>
  </div>

</div>


<div id="features" class="popup">
  <div class="popup__container">
    <a href="#" class="popup__close">
      <span class="screen-reader">close</span>
    </a> 	
    <div class="popup__content">
      <h1 class="popup__title r-title">features WowLara</h1>
  <div class="page__container">
    <a href="/admin/enter/route" class="open-popup">Build</a>
  </div>

    </div>
  </div>


</div>


<div id="popup-article" class="popup">
  <div class="popup__container">
    <a href="#" class="popup__close">
      <span class="screen-reader">close</span>
    </a> 	
    <div class="popup__content">
      <h1 class="popup__title r-title">Welcome To WowLara</h1>
      <h2>Let's start building first - Routes</h2>
  <div class="page__container">
    <a href="/admin/enter/route" class="open-popup">Build</a>
  </div>

    </div>
  </div>


</div>
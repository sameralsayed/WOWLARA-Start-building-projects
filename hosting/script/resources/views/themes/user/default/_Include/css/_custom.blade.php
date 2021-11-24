.modal-500{
  height: 500px !important;
    overflow: scroll;
}

.support{
    margin: 1px;
    margin-left: 20px;
    color: #969696;
}

.icon-150{
  font-size: 150px !important;
  color:@if(!Auth::guest()){{ Auth::user()->favorite_design }}@else{{$get->style}}@endif !important;
}
.brand-logo a {
    box-shadow: -13px 1px 25px rgb(0 0 0 / 10%) !important;
}

.user-prof{
    font-size: 25px !important;
    font-size: 25px !important;
    margin-right: 10px !important;
    color: #000; 
}

pre {
    display: block;
    font-size: 87.5%;
    color: #ffffff;
    background: #000;
    padding: 10px;
}

::-webkit-scrollbar {
  width: 5px;               /* width of the entire scrollbar */
}

::-webkit-scrollbar-track {
  background: #fff;        /* color of the tracking area */
}

::-webkit-scrollbar-thumb {
  background-color: @if(!Auth::guest()){{ Auth::user()->favorite_design }}@else{{$get->style}}@endif;    /* color of the scroll thumb */
}



@if($get->rtl=="Yes")
  {!!$RTL!!}
@endif



@if($get->sidepar=="inActive")
.main-container {
    padding: 80px 20px 2px 30px !important;
}

.container {
    max-width: 99% !important;
}

@media (max-width:767px){.h-sm{display:none!important}}@media (min-width:768px) and (max-width:1199px){.h-md,.navbar-expand-md .h-expand{display:none!important}}@media (min-width:1230px){.h-lg,.navbar-expand-lg .h-expand{display:none!important}}@media (min-width:1600px){.h-xl{display:none!important}}@media (max-width:767px){.back-sm{background:#fff!important}}@media (min-width:768px) and (max-width:1199px){.back-md,.navbar-expand-md .h-expand{background:#fff!important}}@media (min-width:1230px){.back-lg,.navbar-expand-lg .h-expand{height:0!important;background:#fff0!important}}@media (min-width:1600px){.back-xl{height:0!important;background:#fff0!important}
@endif
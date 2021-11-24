@extends('themes.user.default.layouts.app')
@section('title', $get->seo_title)
@section('description', $get->seo_description)
@section('keywords', $get->seo_keywords)

<style type="text/css">
	body{
				background: #000 none no-repeat scroll 26px -31px!important;
			}
			
			.socket{
				width: 600px;
				height: 200px;
				position: absolute;
				left: 50%;
				margin-left: -100px;
				top: 50%;
				margin-top: -100px;
			}
			
			.hex-brick{
			  background: #be3b80;
			  width: 30px;
			  height: 17px;
			  position: absolute;
			  top: 5px;
        animation-name: fade;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				-webkit-animation-name: fade;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
			}
			
			.h2{
				transform: rotate(60deg);
				-webkit-transform: rotate(60deg);
			}
			
			.h3{
				transform: rotate(-60deg);
				-webkit-transform: rotate(-60deg);
			}
			
			.gel{
				height: 230px;
				width: 30px;	
				transition: all .3s;
				-webkit-transition: all .3s;
				position: absolute;
        top: 10%;
        left: 50%;
			}
			
			.center-gel{
				margin-left: -15px;
				margin-top: -15px;
				
				animation-name: pulse;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				-webkit-animation-name: pulse;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
			}
			
			.c1{
				margin-left: -47px;
				margin-top: -15px;
			}
			
			.c2{
				margin-left: -31px;
				margin-top: -43px;
			}
			
			.c3{
				margin-left: 1px;
				margin-top: -43px;
			}
			
			.c4{
				margin-left: 17px;
				margin-top: -15px;
			}
			.c5{
				margin-left: -31px;
				margin-top: 13px;
			}
			
			.c6{
				margin-left: 1px;
				margin-top: 13px;
			}
			
			.c7{
				margin-left: -63px;
				margin-top: -43px;
			}
			
			.c8{
				margin-left: 33px;
				margin-top: -43px;
			}
			
			.c9{
				margin-left: -15px;
				margin-top: 41px;
			}
			
			.c10{
				margin-left: -63px;
				margin-top: 13px;
			}
			
			.c11{
				margin-left: 33px;
				margin-top: 13px;
			}
			
			.c12{
				margin-left: -15px;
				margin-top: -71px;
			}
			
			.c13{
				margin-left: -47px;
				margin-top: -71px;
			}
			
			.c14{
				margin-left: 17px;
				margin-top: -71px;
			}
			
			.c15{
				margin-left: -47px;
				margin-top: 41px;
			}
			
			.c16{
				margin-left: 17px;
				margin-top: 41px;
			}
			
			.c17{
				margin-left: -79px;
				margin-top: -15px;
			}
			
			.c18{
				margin-left: 49px;
				margin-top: -15px;
			}
			
			.c19{
				margin-left: -63px;
				margin-top: -99px;
			}
			
			.c20{
				margin-left: 33px;
				margin-top: -99px;
			}
			
			.c21{
				margin-left: 1px;
				margin-top: -99px;
			}
			
			.c22{
				margin-left: -31px;
				margin-top: -99px;
			}
			
			.c23{
				margin-left: -63px;
				margin-top: 69px;
			}
			
			.c24{
				margin-left: 33px;
				margin-top: 69px;
			}
			
			.c25{
				margin-left: 1px;
				margin-top: 69px;
			}
			
			.c26{
				margin-left: -31px;
				margin-top: 69px;
			}
			
			.c27{
				margin-left: -79px;
				margin-top: -15px;
			}
			
			.c28{
				margin-left: -95px;
				margin-top: -43px;
			}
			
			.c29{
				margin-left: -95px;
				margin-top: 13px;
			}
			
			.c30{
				margin-left: 49px;
				margin-top: 41px;
			}
			
			.c31{
				margin-left: -79px;
				margin-top: -71px;
			}
			
			.c32{
				margin-left: -111px;
				margin-top: -15px;
			}
			
			.c33{
				margin-left: 65px;
				margin-top: -43px;
			}
			
			.c34{
				margin-left: 65px;
				margin-top: 13px;
			}
			
			.c35{
				margin-left: -79px;
				margin-top: 41px;
			}
			
			.c36{
				margin-left: 49px;
				margin-top: -71px;
			}
			
			.c37{
				margin-left: 81px;
				margin-top: -15px;
			}
			
			.r1{
				animation-name: pulse;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				animation-delay: .2s;
				-webkit-animation-name: pulse;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-delay: .2s;
			}
			
			.r2{
				animation-name: pulse;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				animation-delay: .4s;
				-webkit-animation-name: pulse;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-delay: .4s;
			}
			
			.r3{
				animation-name: pulse;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				animation-delay: .6s;
				-webkit-animation-name: pulse;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-delay: .6s;
			}
			
			.r1 > .hex-brick{
				animation-name: fade;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				animation-delay: .2s;
				-webkit-animation-name: fade;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-delay: .2s;
			}
			
			.r2 > .hex-brick{
				animation-name: fade;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				animation-delay: .4s;
				-webkit-animation-name: fade;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-delay: .4s;
			}
			
			.r3 > .hex-brick{
				animation-name: fade;
				animation-duration: 2s;
				animation-iteration-count: infinite;
				animation-delay: .6s;
				-webkit-animation-name: fade;
				-webkit-animation-duration: 2s;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-delay: .6s;
			}
			
			
			@keyframes pulse{
				0%{
					-webkit-transform: scale(1);
					transform: scale(1);
				}
				
				50%{
					-webkit-transform: scale(0.01);
					transform: scale(0.01);
				}
				
				100%{
					-webkit-transform: scale(1);
					transform: scale(1);
				}
			}
			
			@keyframes fade{
				0%{
					background: #be3b80;
				}
				
				50%{
					background: #90BBBF;
				}
				
				100%{
					background: #be3b80;
				}
			}
			
			@-webkit-keyframes pulse{
				0%{
					-webkit-transform: scale(1);
					transform: scale(1);
				}
				
				50%{
					-webkit-transform: scale(0.01);
					transform: scale(0.01);
				}
				
				100%{
					-webkit-transform: scale(1);
					transform: scale(1);
				}
			}
			
			@-webkit-keyframes fade{
				0%{
					background: #be3b80;
				}
				
				50%{
					background: #e3b8dd;
				}
				
				100%{
					background: #be3b80;
				}
			}
</style>

@section('content')
 <div class="main-container">
 	<h1>
 

 	</h1>


<body>
		<div class="socket">
			<div class="gel center-gel">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c1 r1">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c2 r1">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c3 r1">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c4 r1">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c5 r1">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c6 r1">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			
			<div class="gel c7 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			
			<div class="gel c8 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c9 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c10 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c11 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c12 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c13 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c14 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c15 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c16 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c17 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c18 r2">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c19 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c20 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c21 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c22 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c23 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c24 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c25 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c26 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c28 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c29 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c30 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c31 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c32 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c33 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c34 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c35 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c36 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			<div class="gel c37 r3">
				<div class="hex-brick h1"></div>
				<div class="hex-brick h2"></div>
				<div class="hex-brick h3"></div>
			</div>
			
		</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h4 class="mb-15 text-blue h4">hi there 👋</h4>
							<p>I have prepared all the documents for how to use it<code> Within each page and special page</code>.</p>
							<div class="btn-list">
								<button onclick="location.href='/admin/panel';" style="background: #db0863;border-color: #db0863;" type="button" class="btn btn-success btn-lg btn-block">Start building projects</button>
							</div><hr>
							<h3>Dedicated to building personal and commercial projects</h3><hr>
							<p>Login information</p>
							<li>Mail: <code>admin@gmail.com</code></li>
							<li>Pass: <code>admin00000</code></li><hr>
							<p><li>First login</li>
                               <li>Second, a quick look at the user profile page</li>
                               <li>Third, go to the Admin page, and through the Admin page, you can see all the features</li>
                            </p>
						</div>
					</div>

	</body>



 </div>
@section('footer')
 
@endsection 
@endsection 
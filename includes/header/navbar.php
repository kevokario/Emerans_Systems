<nav class="bg-light mynav">
	<a class="mynav-brand"><i class="fa fa-home"></i></a>
	<ul class="mynav-links">
		<li>
			<a id="linksA" href="#" class="mynav-link">Link A</a>
			<div class="menu-options text-light">
				<div class="col-sm-3">
					<div class="menu-option-title">
						Title A
					</div>
					<div class="menu-option-body">
						<a>sublink a</a>
						<a>sublink b</a>
						<a>sublink c</a>
						<a>sublink d</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="menu-option-title">
						Title B
					</div>
					<div class="menu-option-body">
						<a>sublink a</a>
						<a>sublink b</a>
						<a>sublink c</a>
						<a>sublink d</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="menu-option-title">
						Title C
					</div>
					<div class="menu-option-body">
						<a>sublink a</a>
						<a>sublink b</a>
						<a>sublink c</a>
						<a>sublink d</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="menu-option-title">
						Title D
					</div>
					<div class="menu-option-body">
						<a>sublink a</a>
						<a>sublink b</a>
						<a>sublink c</a>
						<a>sublink d</a>
					</div>
				</div>
			</div>
		</li>
		<li>
			<a class="mynav-link">Link B</a>
		</li>
		<li>
			<a class="mynav-link">Link C</a>
		</li>

	</ul>
</nav>
<script>
$(document).ready(function(){

	//This is the nav-bar icon click event registration
	// -------------------------------------------------------------------------------
	$('.mynav .mynav-btn').click(function(){
		if($(this).siblings('.mynav-links').width() > 20 ){
			$(this).siblings('.mynav-links').css({'width':'0','transition':'.5s'});
		} else {
			$(this).siblings('.mynav-links').css({'width':'70%','transition':'.5s'});
		}
	});
	$(window).on('resize',function(){
		//on a large screen
		if ($(window).width() > 768) {
       $('.mynav-links').css('width','70%');

		// This happens on the first navbar menu option
	// -------------------------------------------------------------------------------
	$('#linksA').mouseenter(function(){
		$('.mynav .menu-options-multiple').css({'opacity':'1','z-index':'5'});
		$(this).css({'border-top-color':'red'});
	});
	$('.menu-options-multiple').mouseenter(function(){
		if($('.mynav .menu-options-multiple').css('opacity') === '1'){
		$('.mynav .menu-options-multiple').css({'opacity':'1','z-index':'5'});
		$('#linksA').css({'border-top-color':'red'});
		}
	});
	$('#linksA').mouseleave(function(){
		$('.mynav .menu-options-multiple').css({'opacity':'0','z-index':'1'});
		$(this).css({'border-top-color':'#f8f9fa'});
	});
	$('.menu-options-multiple').mouseleave(function(){
		$('.mynav .menu-options-multiple').css('opacity','0');
		$('#linksA').css({'border-top-color':'#f8f9fa'});
	});
	// -------------------------------------------------------------------------------

	//This happens on the second navbar menu options
	// -------------------------------------------------------------------------------

	$('#linksB').mouseenter(function(){
		$('#linksB').siblings('.menu-options').css({'opacity':'1','z-index':'5'});
		$('#linksB').css({'border-top-color':'red'});
	});
	$('#linksB').siblings('.menu-options').mouseenter(function(){
		if($(this).css('opacity') === '1'){
			$(this).css({'opacity':'1','z-index':'5'});
			$('#linksB').css({'border-top-color':'red'});
		}
	});
	$('#linksB').mouseleave(function(){
		$('#linksB').siblings('.menu-options').css({'opacity':'0','z-index':'1'});
		$(this).css({'border-top-color':'#f8f9fa'});
	});
	$('#linksB').siblings('.menu-options').mouseleave(function(){
		$(this).css({'opacity':'0','z-index':'1'});
		$('#linksB').css({'border-top-color':'#f8f9fa'});
	});
	// -------------------------------------------------------------------------------

	//This happens on the third navbar menu options
	// -------------------------------------------------------------------------------

	$('#linksC').mouseenter(function(){
		$('#linksC').siblings('.menu-options').css({'opacity':'1','z-index':'5'});
		$('#linksC').css({'border-top-color':'red'});
	});
	$('#linksC').siblings('.menu-options').mouseenter(function(){
		if($(this).css('opacity') === '1'){
			$(this).css({'opacity':'1','z-index':'5'});
			$('#linksC').css({'border-top-color':'red'});
		}
	});
	$('#linksC').mouseleave(function(){
		$('#linksC').siblings('.menu-options').css({'opacity':'0','z-index':'1'});
		$(this).css({'border-top-color':'#f8f9fa'});
	});
	$('#linksC').siblings('.menu-options').mouseleave(function(){
		$(this).css({'opacity':'0','z-index':'1'});
		$('#linksC').css({'border-top-color':'#f8f9fa'});
	});
	// -------------------------------------------------------------------------------

	//This happens on the fourth navbar menu options
	// -------------------------------------------------------------------------------

	$('#linksD').mouseenter(function(){
		$('#linksD').siblings('.menu-options').css({'opacity':'1','z-index':'5'});
		$('#linksD').css({'border-top-color':'red'});
	});
	$('#linksD').siblings('.menu-options').mouseenter(function(){
		if($(this).css('opacity') === '1'){
			$(this).css({'opacity':'1','z-index':'5'});
			$('#linksD').css({'border-top-color':'red'});
		}
	});
	$('#linksD').mouseleave(function(){
		$('#linksD').siblings('.menu-options').css({'opacity':'0','z-index':'1'});
		$(this).css({'border-top-color':'#f8f9fa'});
	});
	$('#linksD').siblings('.menu-options').mouseleave(function(){
		$(this).css({'opacity':'0','z-index':'1'});
		$('#linksD').css({'border-top-color':'#f8f9fa'});
	});
	// -------------------------------------------------------------------------------

	//This happens on the fourth navbar menu options
	// -------------------------------------------------------------------------------

	$('#linksE').mouseenter(function(){
		$('#linksE').siblings('.menu-options').css({'opacity':'1','z-index':'5'});
		$('#linksE').css({'border-top-color':'red'});
	});
	$('#linksE').siblings('.menu-options').mouseenter(function(){
		if($(this).css('opacity') === '1'){
			$(this).css({'opacity':'1','z-index':'5'});
			$('#linksE').css({'border-top-color':'red'});
		}
	});
	$('#linksE').mouseleave(function(){
		$('#linksE').siblings('.menu-options').css({'opacity':'0','z-index':'1'});
		$(this).css({'border-top-color':'#f8f9fa'});
	});
	$('#linksE').siblings('.menu-options').mouseleave(function(){
		$(this).css({'opacity':'0','z-index':'1'});
		$('#linksE').css({'border-top-color':'#f8f9fa'});
	});
	// -------------------------------------------------------------------------------
	
	} 

	//does this in a smaller screen. Responsive Css.
	// -------------------------------------------------------------------------------
	else {
		alert('We are');
		 $('.mynav-links').css({'width':'0','transition':'0s'});
		 $('.mynav-links .menu-options').css({'opacity':'0','transition':'0s'});
		 $('.mynav-links .menu-options-multiple').css({'opacity':'0','transition':'0s'});
		
		$('#linksA').click(function(event){
			event.preventDefault();
			alert('we');
			$('.menu-options-multiple').css({'height':'600px','transition':'.5s'});
		});

	}
  });
});
</script>
<style>
    
    body{
	background-color: #ceaefe;
}
.mynav{

}
.mynav-brand{

}
.mynav-links{
	display: inline-block;
    padding: 0;
    margin: 0;
}
.mynav-links li,.mynav-brand{
	display: inline-block;
    
    margin: 1px 3px;
}
.mynav-links li .mynav-link,.mynav-brand{
	display: inline-block;
    padding: 22px 20px;
}

.mynav-links li .menu-options{
	position: absolute;
    right: 0;
    left: 0;
    top: 68px;
    opacity: 0;
    transition: .5s;
    padding: 3px 13px;
    background-color: #fff;
    color: #555 !important;
}

.menu-options .col-sm-3{
    padding: 10px 5px;
    float: left;
}

.menu-option-title{
    text-align: center;
    font-weight: 900;
    transition: .5s;
    font-size: larger;
    border-bottom: 1px solid;
}

.menu-option-body{

}
.menu-option-body a{
    display: block;
    padding-left: 10px;
    padding-top: 5px;
    padding-bottom: 2px;
}

#linksA:hover, .menu-options {
	opacity: 1;
}
</style>
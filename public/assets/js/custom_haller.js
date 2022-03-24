

$( document ).ready(function() {
    loc = $(location).attr('pathname');
    if(loc == '/instituto/index.php' || loc == '/instituto/' || loc == '/test/instituto/index.php' || loc == '/test/instituto/'){
        $('#intVideo').get(0).play();
        var video = document.getElementById('intVideo');

        video.addEventListener('ended',function(){
           $('#img_last').show("slow").css('width', $('#intVideo').width()).css('height', $('#intVideo').height());
        $('#intVideo').remove();
        });
    }

    $(".cont-mvh").each(function(){
    	PH = $("#height-mvh").val();
    	H  = $(this).height();
    	if(PH < H)
    		$("#height-mvh").val(H);
    });
    $(".cont-mvh").css("min-height", $("#height-mvh").val() + "px");
});


$(".edu_option").mouseover(function(){
	$(".edu_option").removeClass("col-md-2").removeClass("col-md-7").addClass("col-md-1").css("opacity", 1);
	$(this).addClass("col-md-7");
    image = $(this).attr('data-image');
    text = $(this).attr('data-text');
    $(this).css("background-image", "url('../assets/images/acordeon/"+image+".png')");
    $("#"+text).removeClass('d-none');
});

$(".edu_option").mouseleave(function(){
	$(".edu_option").addClass("col-md-2").removeClass("col-md-7").removeClass("col-md-1").css("opacity", 1);
    image = $(this).attr('data-image-r');
    text = $(this).attr('data-text');
    $(this).css("background-image", "url('../assets/images/acordeon/"+image+".png')");
    $("#"+text).addClass('d-none');
});


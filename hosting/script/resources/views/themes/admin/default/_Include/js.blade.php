<script type="text/javascript">


@foreach($langs as $lange)

    $("#to{{$lang->language}}Upload").change(function() {
    To{{$lang->language}}(this);
});

function To{{$lang->language}}(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#to{{$lang->language}}Preview').css('background-image', 'url('+e.target.result +')');
            $('#to{{$lang->language}}Preview').hide();
           $('#to{{$lang->language}}Preview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

@endforeach


@foreach($js_admin_upload as $name)

	$("#{{$name}}Upload").change(function() {
    To{{$name}}(this);
});

function To{{$name}}(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#{{$name}}Preview').css('background-image', 'url('+e.target.result +')');
            $('#{{$name}}Preview').hide();
           $('#{{$name}}Preview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

@endforeach


@foreach($get_svgs as $svg)

    $("#{{$svg->name}}Upload").change(function() {
    To{{$svg->name}}(this);
});

function To{{$svg->name}}(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#{{$svg->name}}Preview').css('background-image', 'url('+e.target.result +')');
            $('#{{$svg->name}}Preview').hide();
           $('#{{$svg->name}}Preview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

@endforeach


@foreach($cruds as $card)
@if($card->file=="Yes")
<?php $name = $card->name;?>
    $("#{{$name}}Upload").change(function() {
    To{{$name}}(this);
});

function To{{$name}}(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#{{$name}}Preview').css('background-image', 'url('+e.target.result +')');
            $('#{{$name}}Preview').hide();
           $('#{{$name}}Preview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
@endif
@endforeach
</script>
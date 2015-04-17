<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Song list</title>
</head>
<body>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="1" class="type"/>
            Nhạc trẻ
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="2" class="type"/>
            Nhạc dân ca
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="3" class="type"/>
            Nhạc thiếu nhi
        </label>
    </div>
    <h3>Song list</h3>
    <div id="songs"></div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.type').click(function(){
            $('#songs').html('');
            var types = [];
            $('.type').each(function(){
                if ($(this).is(':checked')) {
                    types.push($(this).val());
                }
            });

            if (types.length > 0) {
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: '{{URL::to('/')}}/ajax/getsong',
                    data: {types : types},
                    async:true,
                    success: function(json){
                        for (var i=0; i< json.length; i++){
                            $('#songs').append('<p>'+json[i].name+' - '+json[i].type+'</p>');
                        }
                    }
                });
            }
        });
    });
</script>
</html>
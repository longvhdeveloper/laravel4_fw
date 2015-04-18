<html>
    <head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    </head>
    <body>
        <a href="javascript:void(0)" id="1" class="content">Link 1</a>
        <a href="javascript:void(0)" id="2" class="content">Link 2</a>
        <a href="javascript:void(0)" id="3" class="content">Link 3</a>
        <div id="output"></div>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.content').click(function(){
                var id = $(this).attr('id');
                $.ajax({
                    url : "{{URL::to('/')}}/ajax/process01",
                    type: 'get',
                    data: 'data=' + id,
                    async: true,
                    dataType: 'json',
                    success: function(result){
                        $('#output').html(result.data);
                    }
                });
            });
        });
    </script>
</html>

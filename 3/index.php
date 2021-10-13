<!DOCTYPE html>
<html>
<head>
    <script src="jquery-3.3.1.min.js"></script>
    <script>
        
        $(function(){
            $('a[href]').each(function(index, item){
                getContents($(item).text(),$(item).attr('href'));
            });
        })

        function getContents(filename, url){
            $.get('getContents.php?url='+ url).done(function(response){
                saveLinks(filename, response);
            });
        }

        function saveLinks(filename, content){
            $.post('save.php',{
                filename: filename,
                filetype: 'html',
                content: content,
            }).done(function(){
                console.log('completed: ', filename);
            });
        }
    </script>
</head>
<body>
    <?php
        echo file_get_contents('https://laravel-china.org/docs/laravel/5.6');
    ?>
</body>
</html>
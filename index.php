<html>
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="sandphoto.js"></script>
</head>
<body>


<form id="sandphotoform" action="/sandphoto.php" method="POST" enctype="multipart/form-data">
    <strong>第一步</strong>, 选择你要冲洗的证件照片的尺寸：
    <?php
    include('sandphoto.inc');
    $parser = new PhotoTypeParser();
    $parser->parse('phototype.txt');
    $parser->render_select('target_type', 0, 8);
    echo '<br>';
    print('<strong>第二步</strong>, 选择用多大的照片冲洗（一般选择6寸的就好，这个价格最合适）:');
    $parser->render_select('container_type', 8);
    ?>

    <br>
    <strong>第三步</strong>, 选择分割线的颜色：

    <input id="bgcolorid" type="radio" name="bgcolorid" value="blue" checked="checked"/> 蓝色 
    <input id="bgcolorid" type="radio" name="bgcolorid" value="white"/>白色
    <input id="bgcolorid" type="radio" name="bgcolorid" value="gray"/> 灰色
    <br>

    <strong>第四步</strong>, 选择你的证件照片：

    <input id="filename" type="file" name="filename"/>

    <br>
    <strong>最后一步</strong>, 点击下载，照片就可以去冲印了：

    <input type="submit" value="下载"/>
    
    <br>

    如果你的照片比较大， 上传会花一些时间， 别着急， 请耐心等待。

</form>
</body>
</html>

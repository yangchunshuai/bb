<meta charset="utf8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
/*.btn{text-decoration: none; color: #666;}*/

.top{ width: 100%; text-align: center;}
.top h2{ margin-top: 50px;}

form{ width: 450px; margin: 0 auto; margin-top: 50px;}
/*form input{
    width: 300px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding-left: 5px;
    font-size: 14px;
}*/

form p{
    margin-top: 20px;
    width: 100%;
}

form span{
    width: 100px;
    text-align: right;
    display: inline-block;
}

.check_label{
    width: 600px;
    margin: 0 auto;
    margin-top: 50px;
}

.check_label p{
    width: 550px;
    margin: 0 auto;
    margin-top: 30px;
}

.check_label .intrest_label a{
    padding: 5px;
    border: 1px solid rgba(0, 150, 0, 0.55);
    border-radius: 3px;
    white-space:nowrap;
    display: inline-block;
    margin-top: 10px;
    margin-left: 10px;
    color: #666;
}

.check_label .a_selected{
    background: rgba(0, 150, 0, 0.55);
    color: #fff;
}

.check_label .a_button{
    width: 150px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background: green;
    color: #fff;
    display: inline-block;
    border: 1px solid green;
    border-radius: 5px;
    margin: 0 auto;
}

.handler-button{
    text-align: center;
}
</style>
<?php 
use yii\helpers\Url;
 ?>

<div class="top">
    <h2>欢迎注册</h2>
</div>

<div class="main">
    <div class="check_label">
        <form action="index.php?r=examine/zo" method="post">
        <h4>请选择您的兴趣标签</h4>
        <p class="intrest_label">
          <input type="checkbox" class="btn" name="biaoqian[]" value="打篮球">打篮球 &nbsp;
          <input type="checkbox" class="btn" name="biaoqian[]" value="乒乓球">乒乓球 &nbsp;
          <input type="checkbox" class="btn" name="biaoqian[]" value="打杜旭">打杜旭 &nbsp;
          <input type="checkbox" class="btn" name="biaoqian[]" value="打白球">打白球 &nbsp;
        </p>

        <p class="handler-button">
            <input type="hidden" name="id" value="<?=$id?>">
            <a class="a_button" href="index.php?r=examine/register_2&id=<?=$id?>">上一步</a>
            <input type="submit" value="完成" class="a_button">
        </p>
        </form>
    </div>
</div>


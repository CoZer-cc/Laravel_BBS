@extends('layouts.default')

@section('content')

<?php if( !empty($error_message) ): ?>
<ul class="error_message">
    <?php foreach( $error_message as $value ): ?>
        <li>・<?php echo $value; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<form class="text-right" method="get" action="./mainpage_Fc.php">
    <input type="submit" name="btn_logout" value="ログアウト">
</form>
<form class="text-right" method="get" action="./mainpage_Fc.php">
    <input type="submit" name="btn_tomain" value="一覧へ">
</form>  
<div class="panel panel-default">
    <div class="panel-body">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>名前</th>
            <th>ふりがな</th>
            <th>アドレス</th>
            <th>コメント</th>
            <th>投稿時間</th>
        </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            foreach ($users as $key => $val) { 
        ?>
            <tr>
            <form action = "../delete.php" method="POST">
                <input type="hidden" name = "id" value=<?php echo $val ['id'];?>>  
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['furi']; ?></td>
                <td><?php echo $val['address']; ?></td>
                <td><?php echo $val['comment']; ?></td>
                <td><?php echo $val['create_time']; ?></td>
                <td><button class="btn btn-danger" id="button1" >削除</button></td>
            </form>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>

@endsection
@extends('layouts.default')

@section('title', 'ログインページ')
@section('content')

<?php if( !empty($error_message) ): ?>
<ul class="error_message">
    <?php foreach( $error_message as $value ): ?>
        <li>・<?php echo $value; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
        <form action="http://localhost/PHPLearn_renew/PHPLearn_Alta-main/renew/functions/admin_Fc.php" method="POST">
            <div>
                <label for="admin_password">ログインパスワード</label>
                <input id="admin_password" type="password" name="admin_password" value="">
            </div>
            <input type="submit" class="btn btn-primary" name="btn_submit" value="ログイン">
        </form>  

@endsection

<?php //オリジナル設定ページ

// ユーザーが何か情報を POST したかどうかを確認
// POST していれば、隠しフィールドに 'Y' が設定されている
if( isset($_POST[HIDDEN_FIELD_NAME]) &&
          $_POST[HIDDEN_FIELD_NAME] == 'Y' ){
  //var_dump($_POST[OP_RESET_ALL_SETTINGS]);

  ///////////////////////////////////////
  // 設定の保存
  ///////////////////////////////////////
  //バックアップ
  require_once 'access-posts.php';

//画面に「設定は保存されました」メッセージを表示
?>
<div class="updated">
  <p>
    <strong>
      <?php _e('設定を変更しました。', THEME_NAME ); ?>
    </strong>
  </p>
</div>
<?php
}

///////////////////////////////////////
// 入力フォーム
///////////////////////////////////////
?>
<div class="wrap admin-settings">
  <h1><?php _e( 'アクセス集計', THEME_NAME ) ?></h1>
  <form name="form1" method="post" action="" class="admin-settings">
    <p><?php _e( 'テーマ内で独自にアクセス集計を行います。集計結果は、人気ウィジェットなどで使用されます。', THEME_NAME ) ?></p>

    <!-- サイト高速化 -->
    <div class="access metabox-holder">
      <?php require_once 'access-forms.php'; ?>
    </div><!-- /.metabox-holder -->

    <input type="hidden" name="<?php echo HIDDEN_FIELD_NAME; ?>" value="Y">

    <?php submit_button(__( '変更を保存', THEME_NAME )); ?>

  </form>

</div>
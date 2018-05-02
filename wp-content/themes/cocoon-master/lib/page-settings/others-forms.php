<div class="metabox-holder">

<!-- その他 -->
<div id="others" class="postbox">
  <h2 class="hndle"><?php _e( 'その他設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( 'その他の設定です。よくわからない場合は、変更しないことをおすすめします。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>

        <!-- 簡単SSL対応 -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_EASY_SSL_ENABLE, __('簡単SSL対応', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_EASY_SSL_ENABLE , is_easy_ssl_enable(), __( '内部URLをSSL対応（簡易版）', THEME_NAME ));
            generate_tips_tag(__( 'サイトの内部リンクや、非SSLの画像・URLなど、HTTPS化する必要があるURLをSSL対応させて表示させます（※全てのURLに対応しているわけではありません）。', THEME_NAME ).get_help_page_tag('https://wp-cocoon.com/easy-ssl/'));
            ?>
          </td>
        </tr>

        <!-- ファイルシステム認証 -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_REQUEST_FILESYSTEM_CREDENTIALS_ENABLE, __('ファイルシステム認証', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_REQUEST_FILESYSTEM_CREDENTIALS_ENABLE , is_request_filesystem_credentials_enable(), __( '認証を有効にする', THEME_NAME ).'(Beta)');
            generate_tips_tag(__( 'KUSANAGI等のファイルシステム認証が必要なサーバの場合に有効にしてください。', THEME_NAME ).get_help_page_tag('https://wp-cocoon.com/kusanagi/'));
            ?>
          </td>
        </tr>

        <!-- Simplicity設定の移行 -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_MIGRATE_FROM_SIMPLICITY, __('Simplicity設定', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_MIGRATE_FROM_SIMPLICITY , is_migrate_from_simplicity(), __( 'Simplicityから投稿設定を引き継ぐ', THEME_NAME ));
            generate_tips_tag(__( 'Simplicityから利用可能なPost meta情報を利用します。例えば投稿画面の「SEO設定」「広告除外」「AMP除外」項目とか。※テーマカスタマイザーとかの設定は移行できません。', THEME_NAME ));
            ?>
          </td>
        </tr>

      </tbody>
    </table>

  </div>
</div>

</div><!-- /.metabox-holder -->
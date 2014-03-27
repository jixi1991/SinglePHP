<?php
$data = array(
    'title' => 'Welcome',
    'body_class' => 'bs-docs-home',
);
View::tplInclude('Public/header', $data); ?>
<main class="bs-masthead" id="content" role="main">
  <div class="container">
    <h1>SinglePHP</h1><h2>Deep modified by niulingyun</h2>
    <p class="lead">单文件PHP框架，羽量级网站开发首选</p>
      <a href="./start" class="btn btn-outline-inverse btn-lg">开始看文档</a>
    </p>
  </div>
</main>
<?php View::tplInclude('Public/footer'); ?>

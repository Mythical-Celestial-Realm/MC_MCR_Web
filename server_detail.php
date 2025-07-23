<?php
session_start();
// 获取服务器唯一id
$id = $_GET['id'] ?? '1';
$md_file = __DIR__ . "/data/server_{$id}.md";
$default_md = <<<MD
<div style="display: flex; align-items: flex-start; gap: 32px;">
  <img src="resources/img/server_{$id}.png" alt="服务器图片" style="width:320px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.08);">
  <div>
    <h1>服务器 {$id} 标题</h1>
    <p>这里是服务器的详细介绍内容，可以使用 <b>Markdown</b> 和 <i>内嵌HTML</i>。</p>
    <ul>
      <li>支持图片、表格、列表等排版</li>
      <li>可自定义样式</li>
    </ul>
    <p>更多说明文本...</p>
  </div>
</div>

---

这里是分割线下的补充说明，可以继续写更多内容。

- 支持多段文本
- 支持 Markdown 语法

MD;

// 保存Markdown（仅限已登录腐竹）
if (isset($_SESSION['admin_user']) && isset($_POST['markdown'])) {
  // 确保 data 目录存在
  if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0777, true);
  }
  file_put_contents($md_file, $_POST['markdown']);
  header("Location: server_detail.php?id=$id");
  exit;
}

// 读取Markdown内容
$markdown = file_exists($md_file) ? file_get_contents($md_file) : $default_md;
$is_admin = isset($_SESSION['admin_user']);
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8">
  <title>服务器详细信息</title>
  <link rel="stylesheet" href="css/SERVER_CSS/global.css">
  <link rel="stylesheet" href="css/SERVER_CSS/b3_Server-Details.css">
  <style>
    .logo {
      text-decoration: none;
      margin: 32px;
      font-size: 1.5rem;
      color: #000;
    }

    .markdown-body {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      padding: 32px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .edit-form textarea {
      width: 100%;
      height: 400px;
      font-size: 1rem;
      font-family: 'Consolas', 'monospace';
      margin-bottom: 16px;
    }

    .edit-form button {
      padding: 8px 24px;
      font-size: 1rem;
    }
  </style>
  <script src="js/marked.min.js"></script>
</head>

<body>
  <a class="logo" id="logo" href="server.php" style="margin:32px 0 0 32px; font-size:1.5rem;">MCR:MC-墟壤纪</a>
  <div class="markdown-body" id="md-content" style="display:<?= $is_admin ? 'none' : 'block' ?>;">
    <!-- Markdown 渲染区 -->
  </div>
  <?php if ($is_admin): ?>
    <form class="edit-form" method="post" id="editForm" style="max-width:900px;margin:40px auto;">
      <textarea name="markdown" id="md-editor"><?= htmlspecialchars($markdown) ?></textarea><br>
      <button type="submit">保存</button>
      <button type="button" onclick="previewMd()">预览</button>
    </form>
    <div class="markdown-body" id="md-preview" style="display:none;"></div>

    <script>
      function editMd() {  // 显示编辑区
        document.querySelector('.edit-form').style.display = '';
        document.getElementById('md-preview').style.display = 'none';
        document.getElementById('logo').href = 'server.php';
        document.getElementById('logo').onclick = null;
        var md = document.getElementById('md-preview').getAttribute('data-md');
        if (md !== null) {
          document.getElementById('md-editor').value = md;
        }
      }
      function previewMd() {  // 自动保存并显示预览区
        // 自动保存
        var form = document.getElementById('editForm');
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', window.location.href, false); // 同步请求，保证保存后再预览
        xhr.send(formData);
        // 重新加载最新内容
        var md = document.getElementById('md-editor').value;
        var preview = document.getElementById('md-preview');
        preview.innerHTML = marked.parse(md);
        preview.setAttribute('data-md', md);
        document.querySelector('.edit-form').style.display = 'none';
        preview.style.display = 'block';
        document.getElementById('logo').href = 'javascript:void(0)';
        document.getElementById('logo').onclick = function () {
          editMd();
          this.href = '';
          this.onclick = null;
        };
      }

    </script>
  <?php else: ?>
    <script>
      document.getElementById('md-content').innerHTML = marked.parse(<?= json_encode($markdown) ?>);
    </script>
  <?php endif; ?>
</body>

</html>
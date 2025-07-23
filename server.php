<?php
session_start();
include_once 'login.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服务器列表</title>
    <link rel="stylesheet" href="css/SERVER_CSS/global.css">
    <link rel="stylesheet" href="css/SERVER_CSS/b1_Server-Navigation.css">
    <link rel="stylesheet" href="css/SERVER_CSS/b2_Server-List.css">
    <link rel="stylesheet" href="css/SERVER_CSS/b3_Server-Details.css">
    <link rel="stylesheet" href="css/SERVER_CSS/b4_Server-Comments.css">
    <link rel="stylesheet" href="css/SERVER_CSS/b5_Server-Footer.css">
    <link rel="stylesheet" href="css/SERVER_CSS/admin-login.css">
    <style>
        @font-face {
            font-family: "思源黑体";
            font-display: swap;
            /* 字体加载策略: 优先使用本地缓存，如果本地缓存没有，则从网络下载 */
            src:
                url("resources/font/SourceHanSansOLD-Light-2.otf"),
                url("resources/font/SourceHanSansSC-Medium-2.otf"),
                url("resources/font/SourceHanSansSC-Normal-2.otf");
        }
    </style>
</head>

<body>
    <!-- 登录提示和表单 -->
    <div id="userTipBox" class="user-tip-box">
        <span class="user-tip-text">普通用户无需登录，可直接浏览服务器信息。</span>
        <button id="hideTipBtn" class="hide-tip-btn">不再显示</button>
        <?php if (!isset($_SESSION['admin_user'])): ?>
            <button class="admin-login-btn" id="showAdminLogin">腐竹登录</button>
        <?php endif; ?>
        <?php if (isset($_SESSION['admin_user'])): ?>
            <span class="admin-welcome">欢迎，<?php echo htmlspecialchars($_SESSION['admin_user']); ?>（腐竹）</span>
            <a href="?logout=1" class="logout-btn">退出登录</a>
        <?php endif; ?>
    </div>
    <script src="js/admin-login.js" defer></script>
    <div id="adminLoginBox" class="admin-login-modal">
        <div class="login-header">
            <h3>管理员登录</h3>
        </div>
        <form method="post" action="">
            <input type="text" name="username" placeholder="用户名" required>
            <input type="password" name="password" placeholder="密码" required>
            <button type="submit" name="admin_login" class="admin-login-btn main">登录</button>
            <button type="button" id="cancelAdminLogin" class="admin-login-btn cancel">取消</button>
        </form>
    </div>
    <script src="js/no-show.js" defer></script>


    <header style="background-image: url('resources/img/background_server.jpg'); background-size: cover;">
        <div class="logo">MCR:MC-墟壤纪</div>
        <nav>
            <a href="index.php">主页</a>
            <a href="server.php">服务器</a>
            <a href="about.php">关于</a>
            <a href="help.html" class="button">帮助</a>
        </nav>
        <div class="overlay">
            <h1>服务器列表</h1>
            <p>虽然服务器数量不多，但质量高哦！</p>
        </div>
    </header>

    <section class="server-list">
        <div class="server-card">
            <div class="server-info">
                <h3>1.21.4 纯原版服务器</h3>
                <p>不要作弊和开矿透哦awa<br>
                    被发现了，后果很严重。<br>
                    这将一直开下去，励志成为一个伟大的服务器。</p>
                <div class="buttons">
                    <a class="details-btn" href="server_detail.php?id=1">详细信息</a>
                    <button class="contact-btn">联系腐竹</button>
                </div>
            </div>
            <img src="resources/img/server_1.21.4.png" alt="服务器图标">
        </div>
        <div class="server-card">
            <img src="resources/img/server_1.20.1.png" alt="服务器图标">
            <div class="server-info">
                <h3>以匠魂枪械为主玩法的 1.20.1 服务器</h3>
                <p>唔，这即将是玩过最多人的玩法服务器呢。<br>
                    这将一直开下去，发挥真正的光芒。</p>
                <div class="buttons">
                    <a class="details-btn" href="server_detail.php?id=2">详细信息</a>
                    <button class="contact-btn">联系腐竹</button>
                </div>
            </div>
        </div>
    </section>

    <section class="server-content">
        <h2>服务器内容大致展示</h2>
        <div class="server-carousel">
            <div class="left">
                <div class="server-item">
                    <img src="resources\img\wallpaper_minecraft_winter_celebration_2048x2048.png" alt="服务器特色图片">
                    <div class="server-details">
                        <h3>1.21.4 服务器——和谐友爱的大家</h3>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="server-item">
                    <div class="server-item">
                        <img src="resources\img\tacz_img1.png" alt="服务器特色图片">
                        <div class="server-details">
                            <h3>1.20.1 匠魂枪械玩法服务器——我这枪太 OK 了</h3>
                        </div>
                    </div>
                    <div class="server-item">
                        <img src="resources\img\Fhome.jpg" alt="服务器特色图片">
                        <div class="server-details">
                            <h3>1.21.4 服务器——龙蛋被藏在腐竹家里了</h3>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="server-rules">
        <h2>体验服务器切记要遵守！</h2>
        <h2></h2> <!-- 占位符 -->
        <div class="rule-item">
            <div class="icon">&#x1F4DC;</div>
            <div class="rule-content">
                <h3>如何沟通</h3>
                如果你并不熟悉我的世界的聊天方式，可以选择聊天模组<br>
                或者 QQ 语言，当然别忘了培养你跟你 MC 搭子的正常关系。<br>
                毕竟墟壤社区想保护所有人。
            </div>
        </div>
        <div class="rule-item">
            <div class="icon">&#x1F4BB;</div>
            <div class="rule-content">
                <h3>如何找到自己的 MC 搭子</h3>
                在现实或网络中，可能存在欺骗。但当你在墟壤纪中，你<br>
                会发现世界如此美好。但有一点：墟壤纪由一个个普通人玩家构成，请不要伤害你的朋友。
            </div>
        </div>
        <div class="rule-item">
            <div class="icon">&#x1F4DA;</div>
            <div class="rule-content">
                <h3>服务器烂了怎么办</h3>
                及时在墟壤纪的群里报告给腐竹<br>
                也可以化身神明，为自己喜欢的服务器腐竹进行赞助<br>
                当然这并不能避免服务器烂掉
            </div>
        </div>
        <div class="rule-item">
            <div class="icon">&#x1F9F9;</div>
            <div class="rule-content">
                <h3>遵守服务器规则</h3>
                你也不希望你玩不了你想玩的服务器吧。<br>
                那请你遵守规则哟。我们既然都在体验多人环境，<br>
                那我们就有义务维护环境。
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright © 2021 MCR:MC-墟壤纪. All rights reserved.</p>
    </footer>
    <script src="js/admin-login.js" defer></script>
</body>

</html>
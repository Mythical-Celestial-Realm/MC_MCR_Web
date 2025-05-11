<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCR/MC - 墟壤纪</title>
    <style>
        body {
            font-family: '黑体', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffffff;
            margin-bottom: 20px;
        }
        .nav a {
            color: #333;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        .nav a:hover {
            color: #007bff;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #333;
        }
        .image-container {
            text-align: center;
            margin-bottom: 20px;
            padding-left: 25px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .section {
            margin-bottom: 40px;
            padding-left: 25px;
        }
        .section h2 {
            margin-bottom: 0px;
            font-size: 48px;
        }
        
        .section p {
            margin-top: 0px;
            font-size: 18px;
            line-height: 1.6;
        }

        .cards {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .card {
            width: 30%;
            background-color: #e0e0e0;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin-bottom: 10px;
        }
        .card p {
            margin: 0;
            font-size: 14px;
        }
        .join-container {
            margin-top: 40px;
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            align-items: center;
        }
        .join-container .left {
            flex: 1;
        }
        .join-container .right {
            text-align: right;
        }
        .join-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }
        .join-container a:hover {
            background-color: #333;
        }
        .server-info {
            margin-top: 40px;
        }
        .server-info .cards {
            margin-top: 20px;
        }
        .server-info .card {
            display: flex;
            flex-direction: column;
        }
        .server-info .card p {
            margin-top: 10px;
        }
        .member-quotes {
            margin-top: 40px;
        }
        .member-quotes .cards {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .member-quotes .card {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .member-quotes .card img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .member-quotes .user-info {
            text-align: center;
            margin-top: 10px;
        }
        .member-quotes .user-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .member-quotes .user-date {
            font-size: 12px;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- 顶部导航栏 -->
        <div class="nav">
            <div style="font-size: 24px;">MCR/MC - 墟壤纪</div>
            <div>
                <a href="#">主页</a>
                <a href="#">服务器</a>
                <a href="#">关于</a>
                <a href="#" class="button">HELP</a>
            </div>
        </div>

        <!-- 主标题和介绍 -->
        <div class="section">
            <h2>你……玩我的世界吗？</h2>
            <p>你希望找一个和谐的集体吗？你希望找一个陪你玩的朋友吗？<br/>
               你希望真正得到公平对待吗？你希望完成自己的想法愿望吗？</p>
            <a href="#" class="button">开始</a>
        </div>

        <!-- 图像展示 -->
        <div class="image-container">
            <img src="img//minecraft_screenshot.jpg" alt="Minecraft 截图">
        </div>

        <!-- 社区特点说明 -->
        <div class="section">
            <h2>墟壤纪社区所带给你的！</h2>
            <div class="cards">
                <div class="card">
                    <p>墟壤纪虽不大但温馨的社区<br/>
                       别让情绪支配自己哦，做到和和好友爱QQWQ。</p>
                </div>
                <div class="card">
                    <p>真正原版的我的世界<br/>
                       墟壤纪社区的创建者十分喜欢玩纯原版，因此而得名。</p>
                </div>
                <div class="card">
                    <p>一些特别的玩法服务器<br/>
                       总有人不爱玩原版嘛，那就来玩玩法QQWQ</p>
                </div>
            </div>
        </div>

        <!-- 加入社区规则 -->
        <div class="section">
            <h2>如何加入我的世界墟壤纪社区</h2>
            <div class="join-container">
                <div class="left">
                    <p><strong>一：做真正的自己</strong><br/>
                       减少伪装和掩饰，追求自己真正想要的。</p>
                    <p><strong>二：不影响其他成员的正常玩耍的权力</strong><br/>
                       求求啦，别破坏其他人的成果。<br/>
                       也许你会觉得这不过如此，但这可能对受害者来讲真的难以接受！</p>
                    <p><strong>三：成为一个会创造和谐友爱的成员</strong><br/>
                       在社区之中，互相帮助就是服务器和成员的发展之根本。帮助他人 = 帮助自己。<br/>
                       身在墟壤纪，那就是废土上同身份的朋友！</p>
                </div>
                <div class="right">
                    <a href="#" class="button">加入</a>
                    <a href="#" style="background-color: #ededed; color: #333; border: 1px solid #ddd; padding: 10px 20px; border-radius: 5px; text-decoration: none;">了解详细规则</a>
                </div>
            </div>
        </div>

        <!-- 服务器信息 -->
        <div class="section">
            <h2>服务器大致信息</h2>
            <div class="cards">
                <div class="card">
                    <p>1.21.4纯原版服务器<br/>
                       不要作弊和开矿透阴awa被发现了，后果很严重。<br/>
                       这将一直开下去，励志成为一个伟大的服务器。</p>
                </div>
                <div class="card">
                    <p>以匠魂枪械为主玩法的1.20.1服务器<br/>
                       哇，这即将是玩过最多人的玩法服务器呢。<br/>
                       这将一直开下去，发挥真正的光芒。<br/>
                       加油！</p>
                </div>
            </div>
        </div>

        <!-- 缴获成员的金句 -->
        <div class="section">
            <h2>缴获成员的金句</h2>
            <div class="cards">
                <div class="card">
                    <p>“虽然在服务器里，我独自一人，但我看到了无数人”</p>
                    <div class="user-info">
                        <img src="https://via.placeholder.com/50" alt="用户头像">
                        <div>
                            <p class="user-name">FlchenX</p>
                            <p class="user-date">03.34</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <p>“你是说？全成就？哦~傻孩子，我早完成了”</p>
                    <div class="user-info">
                        <img src="https://via.placeholder.com/50" alt="用户头像">
                        <div>
                            <p class="user-name">Eternity</p>
                            <p class="user-date">31.21</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <p>“……”</p>
                    <div class="user-info">
                        <img src="https://via.placeholder.com/50" alt="用户头像">
                        <div>
                            <p class="user-name">……</p>
                            <p class="user-date">… …</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 联系信息 -->
        <div class="section">
            <h2>了解我的世界墟壤纪详细信息</h2>
            <a href="#" class="button">开始</a>
            <a href="#" style="background-color: #ededed; color: #333; border: 1px solid #ddd; padding: 10px 20px; border-radius: 5px; text-decoration: none;">联系我的世界墟壤纪高级成员</a>
        </div>

        <!-- 底部导航 -->
        <div class="footer">
            <p>MCR/MC - 墟壤纪</p>
        </div>
    </div>
</body>
</html>

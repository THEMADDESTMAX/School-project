<head>
    <title> Some Title</title>
    <script src="jquery.js"></script>
    <script src="clicksMonitor.js"></script>
</head>
<body>
    <P>здесь будет iframe с vk но сейчас просто инпуты </P>
    <div>
        login:<input type="text" id="login"/><br />
        password:<input type="password" id="password" />
    </div>
    <br />
    ты сейчас печатаешь
    <div id="typingDisplay">
        В login :<span class="typingDisplayObjects" id="typedLogin"></span><br />
        в password :<span class="typingDisplayObjects" id="typedPassword"></span>
    </div>
</body>
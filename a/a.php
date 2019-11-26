<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>输出信息页面</title>
    <style type="text/css" >
        .s1 {
            font-size: 25px;
        }
        table {
            margin-top: 100px;
            background-color: #FCF;
        }
        .back{
    		width:100%;
    		height:100%;
    		position:absolute;
    		background-image:url("bizhi.png");
		    background-size:100% 100%;
    	}
    </style>
</head>
<body>
<div class="back">
    <table align="center" border="1px" cellpadding="10px">
        <tr>
            <td align="center" colspan="2"><span class="s1">接收到用户输入信息</span></td>
        </tr>
    
        <tr>
            <td width="100px" align="center">姓名</td>
            <td width="400px"><?php echo $_POST["name"]; ?></td>
        </tr>
    
        <tr>
            <td align="center">年龄</td>
            <td><?php echo $_POST["age"]; ?></td>
        </tr>
    
        <tr>
            <td align="center">兴趣</td>
            <td><?php echo $_POST["like"]; ?></td>
        </tr>
    
        <tr>
            <td align="center">地区</td>
            <td><?php echo $_POST["province"].$_POST["city"]; ?></td>
        </tr>
    
        <tr>
            <td align="center">手机</td>
            <td><?php echo $_POST["phone"];?></td>
        </tr>
    
        <tr>
            <td align="center">邮箱</td>
            <td><?php echo $_POST["email"];?></td>
        </tr>
    
        <tr>
            <td align="center">留言</td>
            <td><?php echo $_POST["ly"];?></td>
        </tr>
    </table>
</div>
</body>
</html>
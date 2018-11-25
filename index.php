<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            .header{
                background-color: #127043;
                height: 70px;
                line-height: 70px;
                position: relative;
            }
            body{
                margin: 0px;
                background-color: #E0EBEC;
            }
            .header h1{
                margin: 0px;
                margin-left: 271px;
                color: #f5f5f5;
                width: 400px;
                display: inline;
            }
            .header form{
                display: inline;
                position: absolute;
                right: 271px;
            }
            .main-content{
                background: cyan;
                margin: auto 271px;
            }
            .left-panel, .right-panel {
                min-height: 400px;
                background: red;
                width: 60%;
                float: left;
            }
            .right-panel{
                background:  yellow;
                width: 40%; 
                background-color: #fafbfc;

            }
            .footer{
                clear: both;
                background-color: cyan;
            }
            .right-panel label{
                display: block;
                margin-bottom: 5px;
            }
            .right-panel input{
                width: 100%;
                height: 30px;
            }

            .right-panel div{
                padding: 15px;
                padding-bottom: 5px;
            }
            .right-panel input[type="submit"]{
                width: 100px;
                height: 35px;
            }
        </style>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <h1>MITE Community</h1>
                <form>
                    <input type="text" name="username"/>
                    <input type="password" name="password"/>
                    <input type="submit" name="submit" />
                </form>
            </div>
            <div class="main-content">
                <div class="left-panel">
                    left panel
                </div>
                <div class="right-panel">
                    <form>
                        <div>
                            <label>First Name</label>
                            <input type="text" name="firstname" />
                        </div>
                        <div>
                            <label>Surname</label>
                            <input type="text" name="surname" />
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" />
                        </div>
                        <div>
                            <label>Confirm password</label>
                            <input type="password" name="cpassword" />
                        </div>
                        <div>
                            <input type="submit" name="register" value="Register" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer">
                test footer
            </div>
        </div>
    </body>
</html>

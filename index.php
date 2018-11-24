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
            .main-content {
                position: relative;
                height: 700px;
                /*background-color: #f5f5f5;*/
                margin: auto 271px;
            }
            .right , .left{
                top: 40px;
                position: absolute;
                height: 400px;
                /*background-color: blue;*/
                width: 560px;
            }
            .right{
               right: 0px;
               width: 400px;
               background-color: white;
            }
            .main-content form label{
                display: block;
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
                <div class="left">
                    <h1>Design. Develop. Deploy. Enjoy</h1>
                    <div>
                        Join with thousands of developers accross the world, share your problem and get the solution
                        Join with thousands of developers accross the world, share your problem and get the solution
                        Join with thousands of developers accross the world, share your problem and get the solution
                        Join with thousands of developers accross the world, share your problem and get the solution
                    </div>
                </div>
                <div class="right">
                    <form>
                        <div>
                            <label>First name</label>
                            <input type="text" name="firstname"/>
                        </div>
                        <div>
                            <label>First name</label>
                            <input type="text" name="firstname"/>
                        </div>
                        <div>
                            <label>First name</label>
                            <input type="text" name="firstname"/>
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

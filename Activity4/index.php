<html>
    <head>
        <title>CCC311-18 / CCL311-18 Applications Development & Emerging Technologies</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src = "js/bootstrap.min.js"></script>
    </head>


    <body>
        <h1>Activity 4</h1>

    <div class="container">
        <div class="page-header">
            <h1>Form Validation Styles</h1>
        </div>
        <form class="form-inline">
            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <input type="text" disabled class="form-control">
            </div>
            <div class="form-group has-feedback has-warning">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-success">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-error">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
        </form>
        <div class="page-header">
            <h1>Form Validation Styles</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <input type="text" disabled class="form-control">
            </div>
            <div class="form-group has-feedback has-warning">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-success">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-error">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
        </form>
    </div>
    
    
    <br/>
    <br/>
    <hr/>
    <div class="container">
        <div class="page-header">
            <h1>My Form Horizontal 2</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-md-2">Enter Your Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="comment" class="control-label col-md-2">Comment</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="10" placeholder="Comment"></textarea>
                </div>    
            </div>
            <div class="form-group">
                <label for="skills" class="control-label col-md-2">Skills</label>
                <div class="col-md-10">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">HTML</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">CSS</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">JavaScript</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">PHP</label>
                    </div>
                </div>    
            </div>
            <div class="form-group">
                <label for="skills" class="control-label col-md-2">Skills</label>
                <div class="col-md-10">
                    <div class="checkbox">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">HTML
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">JavaScript
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">CSS
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">PHP
                        </label>
                    </div>
                </div>    
            </div>
            <div class="form-group">
                <label for="skills" class="control-label col-md-2">Gender</label>
                <div class="col-md-10">
                    <div class="radio">
                        <label><input type="radio" name="gender" value="male"> Male</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gender" value="female"> Female</label>
                    </div>
                </div>    
            </div>
            <div class="form-group">
                <label for="skills" class="control-label col-md-2">Gender</label>
                <div class="col-md-10">
                    <div class="radio">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="male"> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="female"> Female
                        </label>
                    </div>
                </div>    
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Course</label>
                <div class="col-md-10">
                    <select class="form-control">
                        <option value="ccs">BSCS</option>
                        <option value="cet">BSIT</option>
                        <option value="cba">BSIS</option>
                        <option value="cas">BSEMC</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-success btn-block">Click to Submit</button>
                </div>
            </div>
        </form>

        <div class="page-header">
            <h1>My Form Horizontal</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-md-2">Enter Your Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Enter Your Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Confirm Your Password</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
            </div>
        </form>

        
    <div class="container">
        <div class="page-header">
            <h1>My Form Inline</h1>
        </div>
        <form class="form-inline">
            <div class="form-group">
                <label for="name">Enter Your Name</label>
                <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="email">Enter Your Email</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Enter Your Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Your Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password">
            </div>
        </form>

        <div class="page-header">
            <h1>My Form Design</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="name">Enter Your Name</label>
                <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="email">Enter Your Email</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Enter Your Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Your Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password">
            </div>
        </form>
    </div>
    


    
    
    <br/>
    <br/>
    <hr/>
    </div>
        <?php
            /*
            <nav class="navbar navbar-default">
            <nav class="navbar navbar-inverse">
            <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <nav class="navbar navbar-inverse navbar-fixed-top">

            */

        ?>

        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">College</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">CCS</a></li>
                        <li><a href="#">CET</a></li>
                        <li><a href="#">CBA</a></li>
                        <li><a href="#">CAS</a></li>
                    </ul>
                </div>
            </div>  
        </nav>    

    </body>

</html>